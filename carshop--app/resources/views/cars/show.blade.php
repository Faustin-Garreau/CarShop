<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="d-flex justify-content-center">
<div class="card" style="width: 33%"> 
    <img class="card-img-top" src={{$car->image}}>
    <div class="card-body">
        <h5 class="card-title">Immat : {{$car->immat}}</h5>
        <p class="card-text">Type : {{$car->gaerbox}}</p>
        <p>le voiture à actuellement : {{$car->kilometers}} kilomètres, {{$car->nb_places}} places et 
        @if($car->clim == 1)
            est bien équipée d'une clim
        @else
            n'est pas équipée d'une clim
        @endif
        </p>
    </div>
</div>
</div>
</body>
</html>