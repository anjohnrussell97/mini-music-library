<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <style type="text/css">
        #music-table-header th{
            border: 1px solid #ccc;
            background-color: darkgrey;
            color: white;
        }

    </style>

</head>
<body>

    <div class="header">
        <h1>MINI MUSIC LIBRARY</h1>
        <p>By: John Russell R. An</p>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>