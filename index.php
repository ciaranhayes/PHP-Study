<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vw;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php
        $name = 'Call Me By Your Name';
        $read = true;

    if ($read == true) {
        $message = "You have read $name.";
    } else {
        $message = "You have not read $name.";
    }
    ?>

    <h1>
        <?php
        echo $message;
        ?>
    </h1>
</body>
</html>