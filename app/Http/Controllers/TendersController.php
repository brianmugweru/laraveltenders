<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use Redirect;
use View;
use Illuminate\Http\Request;
use App\Tender;

class TendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tenders = Tender::all();
      return view::make('welcome')->with('tenders',$tenders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tenders = Tender::all();
      return view('dashboard')->with('tenders',$tenders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = array(
        'bid_name'=>'required',
        'closing'=>'required',
        'description'=>'required'
      );

      $validator = Validator::make($request->all(), $rules);

      if($validator -> fails()){
        return Redirect::to('dashboard')->withErrors($validator)->withInput();
      }else{
        $tender = new Tender;
        $tender->bid_name = $request->get('bid_name');
        $tender->closing_on = $request->get('closing');
        $tender->description = $request->get('description');
        $tender->save();

        Session::flash('message', 'Tender created successfully');
        return Redirect::to('dashboard');
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
