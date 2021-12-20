<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="anime.min.js"></script>
    <title>Laadscherm animejs</title>
</head>
<body>

<div class="loader">
    <div class="ele1"></div>
    <div class="ele1"></div>
    <div class="ele1"></div>
</div>

<script>
    anime({
        targets: '.loader .ele1',
        loop: true,
        scale: [
            {value: '.5', duration: 600},
            {value: '1', duration: 600},
        ],
        delay: anime.stagger(200)
    });
</script>
</body>
</html>