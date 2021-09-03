<!doctype html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../../css/style.css">
        <title>3-17 よくわかるPHPの教科書</title>
    </head>
    <body>
        <header>
            <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
        </header>
        <main>
            <h2>Chapter3-17 Practice(出力画面)</h2>
            <pre>
                <dt>お名前：</dt>
                <dd><?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?></dd>
                <dt>メッセージ：</dt>
                <dd><?php print(htmlspecialchars($_REQUEST['message'], ENT_QUOTES)); ?></dd>
            </pre>
        </main>
    </body>    
</html>