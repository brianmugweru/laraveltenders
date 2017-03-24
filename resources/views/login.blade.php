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
  </div>
</div>
  <div class="row">
    <form class="col s12" action="/auth/login" method="post" >
      <div class="row">
        <div class="input-field col s6">
          <input id="last_name" type="email" name="email" class="validate">
          <label for="last_name">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="last_name" type="password" name="email" class="validate">
          <label for="last_name">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input class="btn" type="submit" name="submit" value="login">
        </div>
      </div>
    </form>
  </div>

@include('partials.footer')
@include('partials.footerscripts')
