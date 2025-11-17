<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World dengan PHP dan CSS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <?php
            // Cetak pesan utama
            $pesan = "Hello World!";
            echo "<h1>" . $pesan . "</h1>";
        ?>
        <p class="subtitle">Ini adalah halaman PHP yang sudah diberi sedikit gaya (style).</p>
    </div>

</body>
</html>
