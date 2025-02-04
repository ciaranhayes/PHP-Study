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
                [
                    'name' => "Call Me By Your Name",
                    'author' => "André Aciman",
                    'url' => "https://www.adlibris.com/se/bok/call-me-by-your-name-9789178090518?utm_source=google&utm_medium=cpc&utm_campaign=AR:+BOK+-+pMAX+Shopping+-+Generic+-+B%C3%B6cker&gad_source=1&gclid=Cj0KCQiAkoe9BhDYARIsAH85cDOp3LH1kIhHdE4TKZ5jERPI6yrG37_kDXH2oXTkeiY42jLcvRqeJ3oaAhISEALw_wcB"
                ],
            [
                    'name' => "On Earth We're Briefly Gorgeous",
                    'author' => 'Ocean Vuong',
                    'url' => 'https://www.adlibris.com/se/bok/on-earth-were-briefly-gorgeous-9781529110685?utm_source=google&utm_medium=cpc&utm_campaign=AR:+BOK+-+pMAX+Shopping+-+Generic+-+B%C3%B6cker+ENG&gad_source=1&gclid=Cj0KCQiAkoe9BhDYARIsAH85cDMWe_URC8hAbDHb1cOA3MeUl-3gaKJzFnSb-V6a98407Dh4PLSHPxMaAmiaEALw_wcB'
            ],
            [
                    'name' => "A Little Life",
                'author' => 'Hanya Yanagihara',
                'url' => 'https://www.adlibris.com/se/bok/a-little-life-9780804172707?utm_source=google&utm_medium=cpc&utm_campaign=AR:+BOK+-+pMAX+Shopping+-+Generic+-+B%C3%B6cker+ENG&gad_source=1&gclid=Cj0KCQiAkoe9BhDYARIsAH85cDPvrnz3Kk2GLjhBnUjMV1QKfYopWh412Y8j32NmhN691D9xBaoCAlQaAkJOEALw_wcB'
            ]
        ];

        function filterByAuthor($books, $author) {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Hanya Yanagihara') as $book) : ?>
            <li>
                <a href="<?php echo($book['url']);?>">
                    <?= $book['name']; ?>
                </a>
                <p>
                    <?= $book['author']; ?>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>