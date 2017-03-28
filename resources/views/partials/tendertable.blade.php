
<table class="responsive-table">
  <thead>
    <tr>
      <th>Bid Name</th>
      <th>Description</th>
      <th>Published Date</th>
      <th>Closing Date</th>
      <th>View/Register</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tenders as $tender)
    <tr>
      <td>{{ $tender->bid_name }}</td>
      <td>{{ $tender->description }}</td>
      <td>{{ $tender->created_at }}</td>
      <td>{{ $tender->closing_on }}</td>
      <td><a href="#">View</a></td>
    </tr>
  @endforeach
 </tbody>
</table>
