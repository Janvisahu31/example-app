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
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->getArtist() }}</td>
</tr>
@endforeach
</table>
</body>
</html>
