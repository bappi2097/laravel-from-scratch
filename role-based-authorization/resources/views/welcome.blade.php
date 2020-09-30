<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
</head>

<body class="antialiased">
    <div>
        <h1>My Site</h1>
        @can('edit_forum')
        <li><a href="#">Edit Forum</a></li>
        @endcan
        @can('view_reports')
        <li><a href="/reports">View Reports</a></li>
        @endcan
    </div>
</body>

</html>