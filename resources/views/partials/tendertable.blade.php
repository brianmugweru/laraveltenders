
<table class="responsive-table">
  <thead>
    <tr>
      <th>Bid Name</th>
      <th>Description</th>
      <th>Published Date</th>
      <th>Closing Date</th>
      <th>File Upload</th>
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
      <td><a href="{{ route('getfile',$tender->id) }}" download>Tender Upload</a></td>
      <td><a href="{{ URL::to('/tenders/'.$tender->id) }}">View</a></td>
    </tr>
  @endforeach
  <a href="{{ $tenders->previousPageUrl() }}">prev page</a>
  <a href="{{ $tenders->nextPageUrl() }}" class="right">next page</a>
 </tbody>
</table>
