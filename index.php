<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
                'Call Me By Your Name',
            "On Earth We're Briefly Gorgeous",
            'A Little Life'
        ];
    ?>

    <ul>
        <?php
        foreach ($books as $book) : ?>
            <li><?php echo $book ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>