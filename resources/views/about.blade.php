<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman About</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="/home">home</a>
    <a href="/about">about</a>
    <h1>Halaman about</h1>

    <script src="js/script.js"></script>

    <img src="img/fda.JPG" alt="hooh" width="300">
    
    <h3>Owner : @php echo $nama;
    @endphp </h3>
    <h3> <?php echo "ownernya :", $nama; ?> </h3>
    <h3> <?= "ownernya :", $nama; ?> </h3>
    <h3> Ownernya itu : {{ $nama }} </h3>

</body>
</html>