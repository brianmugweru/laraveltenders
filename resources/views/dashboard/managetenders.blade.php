<table class="responsive-table">
  <thead>
    <tr>
      <th>Bid Name</th>
      <th>Status</th>
      <th>Published Date</th>
      <th>Closing Date</th>
      <th>created on</th>
      <th>View</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tenders as $tender)
    <tr>
      <td>{{ $tender->Id }}</td>
      <td>{{ $tender->bid_name }}</td>
      <td>{{ $tender->description }}</td>
      <td>{{ $tender->closing_on }}</td>
      <td>{{ $tender->created_at }}</td>
      <td><a href="#">View</a></td>
      <td><a href="#">delete</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
