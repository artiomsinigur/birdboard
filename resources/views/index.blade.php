<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
</head>
<body>
    <h1>Bordboard</h1>
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
</body>
</html>>