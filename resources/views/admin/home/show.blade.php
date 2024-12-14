<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Home</title>
</head>
<body>
    <h1>Show Home</h1>
    <h2>{{ $home->title }}</h2>
    <p>{{ $home->content }}</p>
    <a href="{{ route('admin.home.index') }}">Back to Home List</a>
</body>
</html>
