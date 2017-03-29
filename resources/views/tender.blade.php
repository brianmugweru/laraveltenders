@include('partials.masthead')
@include('partials.header')
<style>
  p{
    font-size:17px;
  }
  footer{
    position:absolute;
    width:100%;
    bottom:0;
    left:0;
  }
</style>
<h4>{{ $tender->bid_name }}</h4>
<p>Description: {{$tender->description}}</p>
<p>closing Date: {{$tender->closing_on}}</p>
<br>
<div>
  {!! Form::open(['route'=>'bids.store','method'=>'post','class'=>'col s12']) !!}
    <fieldset>
    <legend>Give it your best shot</legend>
    <div class="row">
      <div class="input-field col s6">
        <input id="bid" type="number" name="bid" class="validate">
        <label for="bid">Enter Your Bid Bro</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input type="hidden" name="user" value="{{ Auth::User()->id}}" />
        <input type="hidden" name="tender" value="{{ $tender->id }}" />
        <input class="btn" type="submit" name="submit" value="Submit Bid">
      </div>
    </div>
    </fieldset>
{!! Form::close() !!}
</div>
@include('partials.footer')
@include('partials.footerscripts')


