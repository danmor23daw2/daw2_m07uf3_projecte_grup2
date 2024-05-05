<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Usuari</title>

</head>
<body>
    <h1>Detalle del Usuari</h1>
    <p>Nom i cognoms: {{ $usuari->nom_i_cognoms }}</p>
    <p>Email: {{ $usuari->email }}</p>
    <p>Contrasenya: {{ $usuari->contrasenya }}</p>
    <p>Tipus: {{ $usuari->tipus }}</p>
    <p>Darrera hora d'entrada: {{ $usuari->darrera_hora_d_entrada }}</p>
    <p>Darrera hora de sortida: {{ $usuari->darrera_hora_de_sortida }}</p>
    </table>
</body>
</html>
