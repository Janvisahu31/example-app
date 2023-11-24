<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-rows: auto 1fr auto;
            grid-template-columns: 250px 1fr;
            grid-template-areas: "sidebar header" "sidebar main" "footer footer";
            min-height: 100vh;
        }

        header {
            grid-area: header;
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        main {
            grid-area: main;
            padding: 20px;
        }

        footer {
            grid-area: footer;
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            grid-area: sidebar;
            background-color: #eee;
            padding: 20px;
            border-right: 1px solid #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
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

