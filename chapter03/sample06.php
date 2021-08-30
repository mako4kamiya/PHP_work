<!doctype html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/style.css">
        <title>3-6 よくわかるPHPの教科書</title>
    </head>
    <body>
        <header>
            <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
        </header>
        <main>
            <h2>1から365までの数字を表示する</h2>
            <?php $i = 0; ?>
            <pre>
                <?php
                for ($i=1; $i<=365; $i++) {
                    print($i . "\n");
                }
                ?>
            </pre>
        </main>
    </body>    
</html>