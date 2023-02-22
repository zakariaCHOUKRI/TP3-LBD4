<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2</title>
    <style>
        .all {
            margin-left: 650px;
            margin-top: 250px;
            background-color: white;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</head>
<body>
<div class="all">

    
<form action="infos.php" method="post">
        <div class="container m-3">
            <div class="row mb-3">
                <div class="col-5">
                    <input name="domaine" class="form-control" type="text" placeholder="Choisir domaine: WEB/DB (case sensitive)">
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <input type="submit" class="bg-success text-white form-control">
                </div>
            </div>
        </div>
    </form>

    </div>
</body>
</html>