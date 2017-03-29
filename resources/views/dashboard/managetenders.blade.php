<table class="responsive-table">
  <thead>
    <tr>
      <th>Bid id</th>
      <th>Bid Name</th>
      <th>Description</th>
      <th>Published Date</th>
      <th>Closing Date</th>
      <th>View</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tenders as $tender)
    <tr>
      <td>{{ $tender->id }}</td>
      <td>{{ $tender->bid_name }}</td>
      <td>{{ $tender->description }}</td>
      <td>{{ $tender->created_at }}</td>
      <td>{{ $tender->closing_on }}</td>
      <td><a href="{{ URL::to('bids/'.$tender->id) }}">View</a></td>
      <td><a href="#">delete</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
