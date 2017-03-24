@include('partials.masthead')
@include('partials.header')
<style>
.tabs .tab a{
  text-align:left;
  color:#4DB6AC;
}
.tabs .tab a:hover, .tabs .tab a.active {
  color:#00695C;
}
</style>
<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Add Tender</a></li>
        <li class="tab col s3"><a href="#test2">Manage Tenders</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
      @include('dashboard.tenderform')
    </div>
    <div id="test2" class="col s12">
      @include('dashboard.managetenders')
    </div>
  </div>
@include('partials.footer')
@include('partials.footerscripts')

