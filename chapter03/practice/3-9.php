<!doctype html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../css/style.css">
        <title>practice3-9 よくわかるPHPの教科書</title>
    </head>
    <body>
        <header>
            <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>    
        </header>
        <main>
            <h2>3-9 練習問題</h2>
            <pre><?php
                    $os = [
                        'win' => 'Windows',
                        'mac' => 'Macintosh',
                        'iphone' => 'iPhone',
                        'ipad' => 'iPah',
                        'android' => 'Android'
                    ];
                    foreach ($os as $key => $value) {
                        print($key . "：" . $value . "\n");
                    }
                ?>
            </pre>
        </main>
    </body>    
</html>