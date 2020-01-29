<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class steganoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function toBin($str = null){
        $str = (string)$str;
        $l = strlen($str);
        $result = '';

        while($l--){
            $result = str_pad(decbin(ord($str[$l])),8,"0",STR_PAD_LEFT).$result;
        }
        return $result;
    }
    public function toString($binary){
        return pack('H*',base_convert($binary,2,16));
    }

    // public function getDownload($path)
    // {
        //PDF file is stored under project/public/download/info.pdf
        // $file= $path;

        // $headers = array(
        //           'Content-Type: application/pdf',
        //         );

        // return Response::download($file, 'filename.png', $headers);
    // }

    public function enkripsi($value=null){
        // dd(request()->input());
        // dd(request()->input(), request()->file('foto'), request()->file('foto')->hashname());
        $path = request()->file('foto')->storeAs('public/', request()->file('foto')->HashName());
        $image = request()->file('foto')->HashName();

        // $tes = storage::directories();
        // dd($tes);
        // return view('stegano.index', compact('image'));

        // dd($path, $image);

        $message_to_hide = request()->input('pesan');
        $binary_message = $this->toBin($message_to_hide);
        // # this make the message to int 
        // $msg = request()->input('pesan');
        // dd($binary_message);

        $message_length = strlen($binary_message);
        session()->put('panjang', $message_length);
        // $_COOKIE['panjang'] = $message_length;
        $src = "public/".$image;
        // dd($src);
        $im = imagecreatefromjpeg(request()->file('foto'));
        // dd($im);
        for($x=0 ; $x<$message_length ; $x++){
            $y = $x;
            $rgb = imagecolorat($im,$x,$y);
            $r = ($rgb >>16) & 0xFF;
            // dd($r);
            $g = ($rgb >>8) & 0xFF;
            // dd($g);
            $b = $rgb & 0xFF;
            // dd($b);
            
            $newR = $r;
            $newG = $g;
            $newB = $this->toBin($b);
            $newB[strlen($newB)-1] = $binary_message[$x];
            $newB = $this->toString($newB);

            $new_color = imagecolorallocate($im,$newR,$newG,$newB);
            imagesetpixel($im,$x,$y,$new_color);
        }
        
        // echo $x;
        // imagepng($im,'simple.png');
        // imagedestroy($im); 

        //dipake
        $namafile = storage_path('app/public/').'simple.png';
        $a = imagepng($im, $namafile);

        //kaga
        // $a = Storage::put('file.png', );
        // echo "<img src ='".$a."' >";
        // dd($im, $a);
        // $p = storage_path('app/public/'.$a);
        // file_put_contents($p, $a);
        // Storage::move('public/simple.png', 'public/enkripsi.png');
        // echo $a;
        // echo $namafile;

        //dipake
        imagedestroy($im);
        $msg = 'Enkripsi Berhasil !!!';

        //kaga
        // $this->dekripsi($namafile);
        // $this->getDownload($namafile);
        // return view('stegano.index', compact('msg'));
        // return view('stegano.index');

        $file= $namafile;

        $headers = array(
                  'Content-Type: application/pdf',
                );
        return Response::download($file, 'stegano.png', $headers);
        // $data = response()->download($file, 'filename.png', $headers);
        // return redirect()->route('stegano.index')->with($msg);
    }
    

    public function dekripsi(){
        // $src = 'simple.png';
        $panjang = request()->session()->get('panjang');
        $src = storage_path('app/public/').'simple.png';
        $im = imagecreatefrompng($src);
        $real_message = '';
        for($x=0 ; $x<$panjang ; $x++){
            $y = $x;
            $rgb = imagecolorat($im,$x,$y);
            $r = ($rgb >>16) & 0xFF;
            $g = ($rgb >>8) & 0xFF;
            $b = $rgb & 0xFF;

            $blue = $this->toBin($b);
            $real_message .= $blue[strlen($blue)-1];
        }
        $pesan = $this->toString($real_message);
        dd($pesan);
        return view('stegano.dekripsi', compact('pesan'));
    }

    public function index()
    {
        //
        return view('stegano.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $id = request()->input('id');
        if ($id == 1) {
            return $this->enkripsi();    
        }
        elseif ($id == 2) {
            return $this->dekripsi();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
