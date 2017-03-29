@include('partials.masthead')
@include('partials.header')
<table class="responsive-table">
  <thead>
    <tr>
      <th>tender id</th>
      <th>Bid user</th>
      <th>Bid id</th>
     </tr>
  </thead>
  <tbody>
  @foreach($bids as $bid)
    <tr>
      <td>{{ $bid->tender->bid_name }}</td>
      <td>{{ $bid->user->email }}</td>
      <td>{{ $bid->bid }}</td>
    </tr>
  @endforeach
</tbody>
</table> 

@include('partials.footer')
@include('partials.footerscripts')



