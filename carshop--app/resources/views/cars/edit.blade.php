<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ url('cars/'.$car->id) }}" method="POST">
                
            {{method_field('PATCH')}}
            {{ csrf_field() }}
                 
                <input type="hidden" name="id" value="{{$car->id}}"/>

                <label>Type de boite :</label>
                <input type="text" name="gearbox" class="form-control" value="{{$car->gearbox}}"></br>
                
                <label>Immat :</label>
                <input type="text" name="immat" class="form-control" value="{{$car->immat}}"></br>
                
                <label>Color :</label>
                <input type="text" name="color"class="form-control" value="{{$car->color}}"></br>
                
                <label>Nombre de portes :</label>
                <input type="text" name="door_number" class="form-control" value="{{$car->door_number}}"></br>
                
                <label>Nombre de kilomètres :</label>
                <input type="text" name="kilometers" class="form-control" value="{{$car->kilometers}}"></br>
                
                <label>Nombre de places :</label>
                <input type="text" name="nb_places" class="form-control" value="{{$car->nb_places}}"></br>
                
                <label>Clim :</label>
                <input type="text" name="clim" class="form-control" value="{{$car->clim}} (0 = pas de clim, 1 = clim)"></br>

                <label>Type de carburant :</label>
                <input type="text" name="oil" id="oil" class="form-control" value="{{$car->oil}}"></br>
                
                <label>Categories :</label>
                <input type="text" name="categories" class="form-control" value="{{$car->categories}}"></br>
                
                <label>Image !</label>
                <input type="text" name="image" class="form-control" value="{{$car->image}}"></br>

                <label>Prix par jour :</label>
                <input type="text" name="rate" class="form-control" value="{{$car->rate}}"></br>

                <button type="submit" class="btn btn-secondary">Enregistrer</button>
            </form>

</body>
</html>