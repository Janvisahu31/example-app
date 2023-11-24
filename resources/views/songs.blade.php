<html>
<title>Songs</title>
<body>
<h2>Songs</h2>
<table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->title }}</td>
<td>{{ $song->artist }}</td>
</tr>
@endforeach
</table>
</body>
</html>
