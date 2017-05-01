<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use Redirect;
use View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Tender;
use App\Bid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TendersController extends Controller
{

    /**
     * Instantiate a new controller instance
     *
     * @return  void
     */

    public function __construct()
    {
        $this->middleware('auth')->only('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tenders = Tender::where('isBid','0')->paginate(3);
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
        'tender_file'=>'required',
        'description'=>'required'
      );

      $validator = Validator::make($request->all(), $rules);

      if($validator -> fails()){
        return Redirect::to('dashboard')->withErrors($validator)->withInput();
      }else{
        $path = $request->file('tender_file')->store('tender_files');
        $tender = new Tender;
        $tender->bid_name = $request->get('bid_name');
        $tender->closing_on = $request->get('closing');
        $tender->description = $request->get('description');
        $tender->tender_file = $path;
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
      $tender = Tender::find($id);
      $bid = Bid::where('tender_id',$id)->where('user_id', Auth::User()->id)->get();
      if(sizeof($bid)>0)
          return View::make('tender')->with('tender', $tender)->with('bid', $bid);
      else
          return View::make('tender')->with('tender', $tender);
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

    public function get($filename)
    {
        $entry = Tender::find($filename);
        $files = $entry->tender_file;
        if(empty($files)){
          return(new Response('file not found', 404));
        }
        Storage::disk('local')->setVisibility($entry->tender_file,'public');
        $file  = Storage::disk('local')->get($entry->tender_file);
        $type = array('Content-Type'=>Storage::disk('local')->mimeType($entry->tender_file));
        return(new Response($file, 200))->header('Content-Type', $type);
        //return Response()->download($file,'newfile.png', $type);
        //return(new Response()->download($file,'newfile', $type);
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
