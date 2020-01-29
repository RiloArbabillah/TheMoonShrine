<?php

namespace App\Http\Controllers;

use App\maps;
use Illuminate\Http\Request;
use Excel;
use App\Exports\mapExport;

class mapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eksport(){

        return Excel::download(new mapExport, 'map.xlsx');

        // $maps = maps::select('nama_map')->get();

        // return Excel::create('data_map', function($excel) use ($maps){
        //     $excel->sheet('mysheet', function($sheet) use ($maps){
        //         $sheet->fromArray($maps);
        //     });
        // })->download('xls');
    }

    public function import($id=NULL){
        
    }
    public function index()
    {
        //
        return view('map.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function show(maps $maps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function edit(maps $maps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, maps $maps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function destroy(maps $maps)
    {
        //
    }
}
