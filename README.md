# FT_mtry
2025年進級制作用
## コーディング規約


class名には**完結に何用なのか**と"_"で結合する
``` html:sample

<form action="#" class="scan_form">
    <label>
        <input type="text" placeholder="キーワードを入力">
    </label>
    <button type="submit" aria-label="検索"></button>
</form>

```

**本番用のファイル**は以下の形式で作成して下さい(css,js,phpはフォルダーでなくても良い)
* FT_mtry
    * img
    * header
        * header.css
        * header.js
        * header.php
    * footer
        * footer.css
        * footer.js
        * footer.php
    * deteil
        * deteil.css
        * deteil.js
        * deteil.php

jsを読み込む場合はbodyの締めタグの直前に記述する
``` html:sample

<!DOCTYPE html>
<html lang="ja">
<head>	
     <meta charset="utf-8">
     <title>サイトタイトル</title>
     <meta name="description" content="サイトの概要を記載">
     <link rel="stylesheet" href="style.css">
</head>
<body>


    <script>
        
    </script>
</body>
</html>

```
