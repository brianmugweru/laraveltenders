@include('partials.masthead')
@include('partials.header')
<style>
form{
height:58vh;
}
</style>
<div class="row">
  <div class="col s6 center">
    <h4 class="center teal-text darken-4">Login Form</h4>
@if(count($errors))
  <div class="alert success">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error }}</li>
      @endforeach
    </ul>
  </div>
@endif
  </div>
</div>
  <div class="row">
{!! Form::open(['url'=>'auth/login','method'=>'post','class'=>'col s12']) !!}
      <div class="row">
        <div class="input-field col s6">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input class="btn" type="submit" name="submit" value="login">
        </div>
      </div>
{!! Form::close() !!}
  </div>

@include('partials.footer')
@include('partials.footerscripts')
