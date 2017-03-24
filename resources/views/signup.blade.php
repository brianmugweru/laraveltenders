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
  <form class="col s12" action="/auth/signup" method="post" >
    <h4>Organisation Details</h4>
    <div class="row">
      <div class="input-field col s12">
        <input id="last_name" type="email" name="email" class="validate">
        <label for="last_name">Legal Company name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="last_name" type="email" name="email" class="validate">
        <label for="last_name">Address 1</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="email" name="email" class="validate">
        <label for="last_name">Address 2</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="email" name="email" class="validate">
        <label for="last_name">City</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="email" name="email" class="validate">
        <label for="last_name">Postal Code/Zip Code</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="email" name="email" class="validate">
        <label for="last_name">Province/ State</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="email" name="email" class="validate">
        <label for="last_name">Country</label>
      </div>
    </div>
    <h4>Contacts</h4>
    <div class="row">
      <div class="input-field col s6">
        <input id="last_name" type="password" name="email" class="validate">
        <label for="last_name">First Name</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="password" name="email" class="validate">
        <label for="last_name">Second Name</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="password" name="email" class="validate">
        <label for="last_name">Email</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="password" name="email" class="validate">
        <label for="last_name">Phone Number</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="password" name="email" class="validate">
        <label for="last_name">Password</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="password" name="email" class="validate">
        <label for="last_name">Confirm Password</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input class="btn" type="submit" name="submit" value="Register">
      </div>
    </div>
  </form>
</div>
@include('partials.footer')
@include('partials.footerscripts')
