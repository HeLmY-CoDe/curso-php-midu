<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializamos cURL
$ch = curl_init(API_URL);

# Indicar que queremos recibir el resultado y no imprimirlo
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

# Ejecutar la petición
$response = curl_exec($ch);
$data = json_decode($response, true);

# Cerrar la conexión
curl_close($ch);

?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siguiente pelicula MCU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
            color-scheme: light dark;
        }

        body {
            display: grid;
            place-content: center;
        }
    </style>
</head>

<body>
    <main class="container text-center my-5 d-flex justify-content-center">
        <div class="col-md-6">
            <h1>Siguiente pelicula MCU</h1>
            <hr>
            <img src="<?= $data['poster_url']; ?>" alt="Siguiente pelicula MCU" class="img-fluid rounded">
            <hr>
            <h2><?= $data['title']; ?></h2>
            <h5><?= $data['release_date']; ?></h5>
            <p><?= $data['overview']; ?></p>
        </div>
    </main>
</body>

</html>