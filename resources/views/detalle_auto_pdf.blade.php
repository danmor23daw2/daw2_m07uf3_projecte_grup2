<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Auto</title>

</head>
<body>
    <h1>Detalle del Auto</h1>
    <p>Matrícula: {{ $auto->matricula_auto }}</p>
    <p>Número de bastidor: {{ $auto->numero_de_bastidor }}</p>
    <p>Marca: {{ $auto->marca }}</p>
    <p>Modelo: {{ $auto->model }}</p>
    <p>Color: {{ $auto->color }}</p>
    <p>Nombre de plazas: {{ $auto->nombre_de_places }}</p>
    <p>Nombre de portes: {{ $auto->nombre_de_portes }}</p>
    <p>Grandaria del maletero: {{ $auto->grandaria_del_maleter }}</p>
    <p>Tipus de combustible: {{ $auto->tipus_de_combustible }}</p>
    </table>
</body>
</html>
