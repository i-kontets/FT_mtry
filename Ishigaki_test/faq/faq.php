<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/faq.css">
    <title>FAQ</title>
</head>
<body>
    <main>
        <details class="qa">
            <summary>
                これはどのようなテンプレートですか？
            </summary>
            <p>
                白背景にシャドウを付けた、アコーディオンとして開閉できるQ&Aです。
            </p>
        </details>

        <details class="qa">
            <summary>
                どのような特徴がありますか？
            </summary>
            <p>
                コンパクトに見せられるので、質問の数が多い場合などにおすすめです。
            </p>
        </details>
        
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const detailsElements = document.querySelectorAll('.qa');
            
            detailsElements.forEach(details => {
                details.addEventListener('click', function (event) {
                    // クリックした場所がdetails内であれば、イベントの伝播を止める
                    event.stopPropagation();

                    // 他のdetails要素を閉じる
                    detailsElements.forEach(otherDetails => {
                        if (otherDetails !== details) {
                            otherDetails.removeAttribute('open');
                        }
                    });
                });
            });

            // ドキュメント全体にクリックイベントを追加
            document.addEventListener('click', function () {
                detailsElements.forEach(details => {
                    details.removeAttribute('open');
                });
            });
        });
    </script>
</body>
</html>