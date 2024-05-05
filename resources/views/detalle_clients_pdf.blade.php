<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Client</title>

</head>
<body>
    <h1>Detalle del Client</h1>
    <p>DNI client: {{ $client->DNI_client }}</p>
    <p>Nom i cognoms: {{ $client->nom_i_cognoms }}</p>
    <p>Edat: {{ $client->edat }}</p>
    <p>Telefon: {{ $client->telefon }}</p>
    <p>Adreça: {{ $client->adreça }}</p>
    <p>Ciutat: {{ $client->ciutat }}</p>
    <p>Email: {{ $client->email }}</p>
    <p>Numero del permis de conduccio: {{ $client->numero_del_permis_de_conduccio }}</p>
    <p>Punts del permis de conduccio: {{ $client->punts_del_permis_de_conduccio }}</p>
    <p>Tipus de targeta: {{ $client->tipus_de_targeta }}</p>
    <p>Numero de la targeta: {{ $client->numero_de_la_targeta }}</p>
    </table>
</body>
</html>
