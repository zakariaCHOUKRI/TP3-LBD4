<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1</title>
    <style>
        .everything {
            width:30%;
            margin:auto;
            margin-top:300px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body style="background-color:rgb(200, 200, 200)">

<div class="everything">

    <form action="show_student_infos.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Student ID</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter student ID" name="StudentID">
        <small id="emailHelp" class="form-text text-muted">Enter one of the following: Et123, Et676, Et998, Et764, Et412, Et688, Et156, Et230</small>
    </div>
    <button type="submit" class="btn btn-primary">Show grades</button>
    </form>

</div>




</body>
</html>