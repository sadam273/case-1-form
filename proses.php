<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet"href="style2.css">
    </head>
    <body>
        <div class="isi">
            <h1>BEP dalam Rupiah:</h1>
            <div class="rumus">
                <img src="img/rumus.png" alt="">
            </div>
            <div class="hasil">
                <h2>Hasil BEP: <?php
                $fixedCost = $_POST['fc'];
                $variableCost = $_POST['vc'];
                $salesVolume = $_POST['sv'];

                $bep = $fixedCost/1-$variableCost/$salesVolume;
                echo $bep;
            ?></h2>
            </div>
        </div>
    </body>
</html>
