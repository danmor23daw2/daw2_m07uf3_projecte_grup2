<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Lloga</title>

</head>
<body>
    <h1>Detalle del Lloga</h1>
    <p>DNI client: {{ $lloga->DNI_client }}</p>
    <p>Matricula auto: {{ $lloga->matricula_auto }}</p>
    <p>Data del prestec: {{ $lloga->data_del_prestec }}</p>
    <p>Data de devolucio: {{ $lloga->data_de_devolucio }}</p>
    <p>Lloc de devolucio: {{ $lloga->lloc_de_devolucio }}</p>
    <p>Preu per dia: {{ $lloga->preu_per_dia }}</p>
    <p>Email: {{ $lloga->email }}</p>
    <p>Prestec amb retorn de diposit ple: {{ $lloga->prestec_amb_retorn_de_diposit_ple }}</p>
    <p>Tipus d'assegurances: {{ $lloga->tipus_dassegurança }}</p>
    </table>
</body>
</html>
