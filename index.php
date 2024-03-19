<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas 1 Pemweb</title>
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
        <div class="isi">
            <h1 class="container-md header">Kalkulator Break Even Point dalam Rupiah</h1>
            <p class="container-md">Break Even Point atau disingkat dengan BEP merupakan suatu titik impas dimana laba yang didapatkan mempunyai nilai setara dengan yang diperlukan dalam sebuah usaha atau bisa disebut dengan tidak mengalami kerugian. </p>
            <div class="container-md">
                <form action="proses.php" method="post" class="form">
                    <div class="form-1">
                        <label for="variabel-angka1" class="sisi-kiri">Fixed Cost</label>
                        <input type="number" class="sisi-kanan"name="fc" id="variabel-angka1" required>
                    </div>
                    <div class="form-2">
                        <label for="variabel-angka2" class="sisi-kiri">Variable Cost</label>
                        <input type="number" class="sisi-kanan" name="vc" id="variabel-angka2" required>
                    </div>
                    <div class="form-3">
                        <label for="variabel-angka3" class="sisi-kiri">Sales Volume</label>
                        <input type="number" class="sisi-kanan" name="sv" id="variabel-angka3" required>
                    </div>
                    <div class="button-1">
                        <input class="btn btn-primary sisi-kanan" type="submit" value="Hitung">
                    </div>
                </form>
                <?php
                    if (isset($_POST['hitung'])) {
                    include 'hitung_volume_tabung.php';
                    }
                ?>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>