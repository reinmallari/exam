<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Paint;

class PaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      $validator = Validator::make($request->all(), [
        'inp_plate_no' => 'required',
        'inp_current_color' => 'required',
        'inp_target_color' => 'required',
      ]);

      if ($validator->passes()) {

        $paint = PAINT::create([
          'plate_no' => $request['inp_plate_no'],
          'current_color' => $request['inp_current_color'],
          'target_color' => $request['inp_target_color'],
          'status' => 0,
          'created_by' => 1
        ]);

        return response()->json([
           'success'=>"Success"
        ]);

      }else{

          return response()->json([
            'list'=>$validator->errors()->all(),
            'error'=>"Error"
          ]);

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

    public function get_list_cars(){

      $list = Paint::get_list_cars();

      return response()->json([
       'list'=>$list,
       'success'=>'Success'
      ]);

    }
}
