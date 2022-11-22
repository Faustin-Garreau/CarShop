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
<form class="p-5" action="{{ url('cars/'.$car->id) }}" method="POST">
                
            {{method_field('PATCH')}}
            {{ csrf_field() }}
                 
            <input type="hidden" name="id" value="{{$car->id}}"/>

            <div class="form-group d-flex justify-content-around">
                <div style="width: 40%;">
                    <label >Type de boite :</label>
                    <select style="width: 100%;" name="gearbox" class="form-control" value="{{$car->gearbox}}" required>
                        <option valeur="manuelle">manuelle</option>
                        <option valeur="automatique">automatique</option>
                    </select></br>
                </div>
                <div style="width: 40%;">
                    <label>Immat :</label>
                    <input style="width: 100%;" type="text" name="immat" class="form-control" value="{{$car->immat}}" required></br>
                </div>
            </div>

            <div class="form-group d-flex justify-content-around">
                <div style="width: 40%;">
                    <label>Color :</label>
                    <input style="width: 100%;" type="text" name="color"class="form-control" value="{{$car->color}}" required></br>
                </div>
                <div style="width: 40%;">
                    <label>Nombre de portes :</label>
                        <select style="width: 100%;" name="door_number" class="form-control" value="{{$car->door_number}}" required>
                            <option valeur="0">0</option>
                            <option valeur="1">1</option>
                            <option valeur="2">2</option>
                            <option valeur="3">3</option>
                            <option valeur="4">4</option>
                            <option valeur="5">5</option>
                        </select></br>
                </div>
            </div>

            <div class="form-group d-flex justify-content-around">
                <div style="width: 40%;">
                    <label>Nombre de kilomètres :</label>
                    <input style="width: 100%;" type="number" name="kilometers" class="form-control" value="{{$car->kilometers}}" required></br>
                </div>

                <div style="width: 40%;">
                    <label>Nombre de places :</label>
                    <select style="width: 100%;" name="nb_places" class="form-control" value="{{$car->nb_places}}" required>
                        <option valeur="0">0</option>
                        <option valeur="1">1</option>
                        <option valeur="2">2</option>
                        <option valeur="3">3</option>
                        <option valeur="4">4</option>
                        <option valeur="5">5</option>
                        <option valeur="6">6</option>
                        <option valeur="7">7</option>
                        </select></br>
                </div>
            </div>

            <div class="form-group d-flex justify-content-around">
                    <div style="width: 40%;">
                        <label>Clim :</label>
                        <select style="width: 100%;" name="clim" class="form-control" value="{{$car->clim}} (0 = pas de clim, 1 = clim)" required>
                            <option valeur="0">0</option>
                            <option valeur="1">1</option>
                            </select></br>
                    </div>
                <div style="width: 40%;">
                    <label>Type de carburant :</label>
                    <input style="width: 100%;" type="text" name="oil" id="oil" class="form-control" value="{{$car->oil}}" required></br>
                </div>
            </div>

            <div class="form-group d-flex justify-content-around">
                <div style="width: 40%;">
                    <label>Categories :</label>
                    <input style="width: 100%;" type="text" name="categories" class="form-control" value="{{$car->categories}}" required></br>
                </div>
                <div style="width: 40%;">
                    <label>Image :</label>
                    <input style="width: 100%;" type="text" name="image" class="form-control" value="{{$car->image}}" required></br>
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <div style="width: 40%;">
                    <label>Prix par jour :</label>
                    <input style="width: 100%;" type="number" name="rate" class="form-control" value="{{$car->rate}}" required></br>
                </div>
            </div>

            <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-secondary">Enregistrer</button>
            </div>
</form>

</body>
</html>