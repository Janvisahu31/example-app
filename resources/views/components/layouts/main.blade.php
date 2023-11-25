<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Page</title>
    <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
</head>

<body>

    <header>
        <div>
            <h1>Playlist Title</h1>
            <p>Playlist Description or Info</p>
        </div>
        <div>
            <a href="#">Edit Playlist</a>
            <a href="#">New Playlist</a>
        </div>
    </header>

    <nav>
        <h2>Saved Playlists</h2>
        <ul>
            <li><a href="#">Playlist 1</a></li>
            <li><a href="#">Playlist 2</a></li>
            <!-- Add more playlists as needed -->
        </ul>
    </nav>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Song Title</th>
                    <th>Artist Name</th>
                    <th>Album Name</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Song 1</td>
                    <td>Artist 1</td>
                    <td>Album 1</td>
                    <td>3:45</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Song 2</td>
                    <td>Artist 2</td>
                    <td>Album 2</td>
                    <td>4:15</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2023 Your Company | <a href="#">About</a> | <a href="#">Contact</a></p>
    </footer>

</body>

</html>
