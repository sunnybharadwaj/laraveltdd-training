<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <title>Create</title>
</head>
<body>

<form method="POST" action="/projects" class="container" style="padding-top:40px">
    @csrf
    <h1 class="heading is-1">Create a Project</h1>
    <br/>
    <div class="field">
        <label for="title" class="label">Title</label>
        <div class="control">
            <input type="text" class="input" name="title" placeholder="">
        </div>
    </div>

    <div class="field">
        <label for="description" class="label">Description</label>
        <div class="control">
            <textarea type="text" class="textarea" name="description" placeholder=""></textarea>
        </div>
    </div>

    <br/>
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create Project</button>
        </div>
    </div>
</form>
</body>
</html>