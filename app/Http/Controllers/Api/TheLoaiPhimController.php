<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TheLoaiPhim;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class TheLoaiPhimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return TheLoaiPhim[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return TheLoaiPhim::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        TheLoaiPhim::create($request->all());
        return response()->json(["status"=>200],200);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request,TheLoaiPhim $TheLoaiPhim)
    {
        $TheLoaiPhim->update($request->all());
        return response()->json([],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(TheLoaiPhim $TheLoaiPhim)
    {

        $TheLoaiPhim->delete();
        return response()->json([],200);
    }
}
