<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use Redirect;
use View;
use Illuminate\Http\Request;
use App\Bid;

class BidsController extends Controller
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
      $rules = array(
        'bid' => 'required',
      );

      $validator = Validator::make($request->all(), $rules);
      if($validator->fails()){
        return Redirect::to('bids')->withErrors($validator)->withInput();
      }else{
        $bid = new Bid;
        $bid->bid = $request->get('bid');
        $bid->user_id = $request->get('user');
        $bid->tender_id = $request->get('tender');
        $bid->save();
        Session::flash('message', 'Bid successful');
        return Redirect::to('/');
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
      $bids = Bid::where('tender_id',$id)->get();
      return View::make('checktender')->with('bids', $bids);
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
