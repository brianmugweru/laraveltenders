@include('partials.masthead')
@include('partials.header')
<style>
.tabs .tab a{
  text-align:left;
  color:#4db6ac;
}
.tabs .tab a:hover, .tabs .tab a.active {
  color:#00695c;
}
footer{
  position:absolute;
  width:100%;
  bottom:0;
  left:0;
}
table, p, h4{
  margin-left:15px;
  margin-right:15px;
}
p{
  font-size:14px;
}

</style>
@if(sizeof($bids)>0)
<table class="responsive-table">
  <thead>
    <tr>
      <th>tender id</th>
      <th>Bid user</th>
      <th>Bid id</th>
      <th>Select Bid</th>
     </tr>
  </thead>
  <tbody>
  @foreach($bids as $bid)
    <tr>
      <td>{{ $bid->tender->bid_name }}</td>
      <td>{{ $bid->user->email }}</td>
      <td>{{ $bid->bid }}</td>
    @if($bid->isSelected=1)
      <!--<td>
        {!! Form::open(array('url'=>'bids/'.$bid->id)) !!}
          {!! Form::hidden('_method','PUT') !!}
          {!! Form::submit('Select Bid',array('class'=>'btn')) !!}
        {!! Form::close() !!}
      </td>-->
    @else
        <td>Already assigned to {{ $bid->user->email }}</td>
    @endif
    </tr>
  @endforeach
</tbody>
</table> 
@else
    <p>Hey, sorry this tender hasnt had any bids yet</p>
    <p>Please wait until someone important decides to bid</p>
@endif

@include('partials.footer')
@include('partials.footerscripts')



