<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
</head>
<body>
<h1>Projects</h1>
<a href="/projects/create">Create a Project</a>
<ul>
    @forelse ($projects as $project)
        <li>
            <a href="/projects/{{$project->id}}"><h4>{{$project->title}}</h4></a>
            {{--<p>{{$project->description}}</p>--}}
        </li>
    @empty
        <li>No projects yet</li>
    @endforelse
</ul>
</body>
</html>