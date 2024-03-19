<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet"href="style.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Kalkulator BEP</span>
                <span class="navbar-brand mb-0 h1">Pemweb SI-E</span>
            </div>
        </nav>
        <div class="isi2">
            <h1>BEP dalam Rupiah:</h1>
            <div class="rumus">
                <img src="img/rumus.png" alt="">
            </div>
            <div class="hasil">
                <p>Hasil BEP: Rp <?php
                $fixedCost = $_POST['fc'];
                $variableCost = $_POST['vc'];
                $salesVolume = $_POST['sv'];

                $bep = $fixedCost/1-$variableCost/$salesVolume;
                echo $bep;
            ?></p>
            </div>
        </div>
        <footer class="container-fluid">
            <div class="nama-kelompok">
                <p>Kelompok 3</p>
            </div>
            <ul>
                <li>Muhammad Sadam Ramli</li>
                <li>Azzahra Helga Voleta</li>
                <li>Raffy Arydetya P</li>
            </ul>
        </footer>
    </body>
</html>
