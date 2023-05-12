<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= isset($title) ? $title : "AAGym" ?></title>
    <link rel="icon" type="image/x-icon" href="/assets/img/logo.png">
    <!-- Bootsrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- Bootsrap Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!-- my css -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Audio for workout view -->
    <audio id="tick">
        <source src="/assets/audio/tick.mp3" type="audio/mpeg">
        <source src="/assets/audio/tick.ogg" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>
    <audio id="readyaudio">
        <source src="/assets/audio/ready.mp3" type="audio/mpeg">
        <source src="/assets/audio/ready.ogg" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>
</head>

<body>

    <!-- Section Content -->
    <?= $this->renderSection('content'); ?>
    <!-- end Section Content -->


    <!-- JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>