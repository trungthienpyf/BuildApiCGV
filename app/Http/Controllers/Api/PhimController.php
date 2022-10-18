<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Phim;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PhimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Phim[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Phim::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if ($request->hasFile('imgz')) {
            // Nếu không thì in ra thông báo
            $image = $request->file('imgz');
          $image->move('images', $image->getClientOriginalName());
            $path=  $image->getClientOriginalName();

        }




    $request->merge(['img'=>$path]);

            Phim::create($request->all());
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
    public function update(Request $request,Phim $Phim)
    {
        $Phim->update($request->all());
        return response()->json([],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Phim $Phim)
    {

        $Phim->delete();
        return response()->json([],200);
    }
}
