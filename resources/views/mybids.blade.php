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
<table class="responsive-table">
  <thead>
    <tr>
      <th>tender id</th>
      <th>Bid on</th>
      <th>Tender ends on</th>
      <th>Tender bid selection</th>
     </tr>
  </thead>
  <tbody>
   <tbody>
  @foreach($bids as $bid)
    <tr>
      <td>{{ $bid->tender->bid_name }}</td>
      <td>{{ $bid->created_at }}</td>
      <td>{{ $bid->tender->closing_on }}</td>
    @if($bid->isSelected=='0')
      <td>Wait for deadline to draw conclusions about selection</td>
    @else
      <td>Please visit our offices concerning this bid you have been selected</td>
    @endif
    </tr>
  @endforeach
</tbody>
</table> 



@include('partials.footer')
@include('partials.footerscripts')


