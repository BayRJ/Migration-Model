<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIT18-LabActivities</title>
    <link href="https://bootswatch.com/5/sketchy/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>
<body>
    @include("partials.nav")
    <h1 style="text-align:center; margin-top: 150px;">Hello, Laravel!</h1>
    <div style="width:100%;height:100%; display:flex; align-items:center; justify-content:center;">
    <h2 style="display:block;">Click to go to the  Greet Activity</h2>
    <a href="{{ url('https://bookish-eureka-q7qg5497pwp9hx5w9-8000.app.github.dev/greet') }}"  style="padding: 10px;background:	#90EE90; font-size:24px; text-decoration:none; border-radius:8px; font-weight:bold; margin-right: 20px; display:block;">Greet</a>
    <h2>Click to go to the Tasks Activity</h2>
    <a href="{{ url('https://bookish-eureka-q7qg5497pwp9hx5w9-8000.app.github.dev/tasks') }}"  style="padding: 10px;background:	#90EE90; font-size:24px; text-decoration:none; border-radius:8px; font-weight:bold;">Tasks</a>

    </div>

</body>
</html>