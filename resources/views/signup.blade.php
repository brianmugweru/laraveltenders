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
</div>
<div class="row">
  <div class="col s12">
    {!! Form::open(array('route' => 'users.store'))  !!}
      <h4>Organisation Details</h4>
      <div class="row">
        <div class="input-field col s12">
          {!! Form::text('companyname', null, array('class'=>'validate','required')) !!}
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
      <h4>Contacts</h4>
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
          <label for="pnumber">Phone Number</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" name="password" class="validate" required>
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
          <input id="password2" type="password" name="password2" class="validate" required>
          <label for="password2">Confirm Password</label>
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
