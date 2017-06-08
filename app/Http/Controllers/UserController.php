<?php

namespace App\Http\Controllers;

use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\DB;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;
use App\User;
use Validator;

class UserController extends Controller
{
  protected $mailer;
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
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
      return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function activate($email, $code){
      $actcode = User::where('email',$email)->value('activationCode');
      if($actcode == $code ){
        DB::table('users')->where('email',$email)->update(['isActivated'=>1]);
        return redirect('');
      }
    }
    public function store(Request $request)
    {
      $rules = array(
          'companyname'=>'required|unique:users,companyname',
          'email'=>'required|unique:users,email|email',
          'phonenumber'=>'required|numeric|digits_between:8,12',
          'password'=>'required|min:5|confirmed',
      );

      $validator = Validator::make($request->all(),$rules)->validate(); 

      if($validator->fails()){
          return redirect::to('signup')->with('errors',$validator)->withInput();
      }

      $data = $request->only('firstname','lastname','phonenumber','email','password','companyname','address','city','province','country');
      $code = str_random(30);
      $activatecode = array('activationCode'=>$code);
      $data=array_merge($data,$activatecode);
      //$data['activationCode'] = str_random(30);
      $data['password'] = bcrypt($data['password']);
      $link = $data['activationCode'];
      $message = sprintf("Activation of account with mail <a href='$link'>$link</a>");
      $user = User::create($data);

      if($user){
        \Mail::send(['html'=>'email.activate'], [
        'data'=>$request->get('email'),
        'link'=>$link
          ],function(Message $message) use ($data) {
            $message ->to($data['email'])->subject("Activation Email");
          });

        \Auth::login($user);
        return redirect('dashboard')->with('status', 'authenticated successfully');
      }
      return back()->withInput();
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
