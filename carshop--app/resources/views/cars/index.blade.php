<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-secondary">

<div class="d-flex justify-content-center align-items-center">
<h1 class="text-center p-5 text-white">Toutes les voitures</h1>
<a href="cars/create"><button type="button" class="btn btn-warning text-white">Créer une voiture ? cliquez-ici</button></a>
</div>

<div class="d-flex justify-content-around flex-wrap">
@foreach($cars as $car)
<div style="width: 30%;" class="p-3">
<div class="card" style="width: 100%;"> 
    <img class="card-img-top" src={{$car->image}}>
    <div class="card-body">
        <h5 class="card-title">Immat : {{$car->immat}}</h5>
        <p class="card-text">Type : {{$car->gearbox}}</p>
        <a href="/cars/{{$car->id}}" class="btn btn-primary">En voir plus</a>
    </div>
</div>
</div>
@endforeach
</div>
</body>
</html>