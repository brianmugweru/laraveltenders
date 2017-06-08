@include('partials.masthead')
@include('partials.header')
<style>
  .row{
    width:92%;
    margin:auto;
    padding:auto;
}
</style>
<div class="row">
  <div class="col s6 center">
    <h5 class="left teal-text darken-4">Sign up Form</h5>
 </div>
</div>
<div class="row">
  <div class="col s12">
    {!! Form::open(array('route' => 'users.store'))  !!}
      <h5>Organisation Details</h5>
      @if(count($errors))
        <div class="alert success">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="row">
        <div class="input-field col s12">
          {!! Form::text('companyname', null, array('class'=>'validate','required'))!!}
          {!! Form::label('Company Name') !!}
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          {!! Form::text('address', null, array('class'=>'validate','required')) !!}
          {!! Form::label('Address' ) !!}
        </div>
        <div class="input-field col s6">
          {!! Form::text('city', null, array('class'=>'validate','required')) !!}
          {!! Form::label('City' ) !!}
        </div>
        <div class="input-field col s6">
          {!! Form::text('province', null, array('class'=>'validate','required')) !!}
          {!! Form::label('province' ) !!}
        </div>
        <div class="input-field col s6">
          {!! Form::text('country', null, array('class'=>'validate','required')) !!}
          {!! Form::label('Country' ) !!}
        </div>
      </div>
      <h5>Contacts</h5>
      <div class="row">
        <div class="input-field col s6">
          <input id="firstname" type="text" name="firstname" class="validate" required>
          <label for="firstname">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="lastname" type="text" name="lastname" class="validate" required>
          <label for="lastname">Last Name</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" name="email" class="validate" required>
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <input id="phonenumber" type="text" name="phonenumber" class="validate" required>
          <label for="phonenumber">Phone Number</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate" required>
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
          <input id="confirm_password" type="password" name="confirm_password" class="validate" required>
          <label for="confirm_password">Confirm Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          {!! Form::token() !!}
          <input class="btn" type="submit" name="submit" value="Register">
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
@include('partials.footer')
@include('partials.footerscripts')
