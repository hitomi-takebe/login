<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="card">
        <span class="card__title">ユーザー登録</span>
        <p class="card__content">サービスを使うために会員登録をお願いします。</p>
        <div class="card__form">
            <form action="index_confirm.php" method="post">
            <label for="name">ユーザー名:</label>
            <input type="text" id="name" class="name" name="name" placeholder="Your Name"><br>
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" class="email" name="email" placeholder="Your Email"><br>
            <label for="password">パスワード:</label>
            <input type="password" id="password" class="password" name="password" placeholder="Your Password"><br>
            <input type="submit" id="submit" class="submit" value="登録">
            </form>
        <p class="link"><a href="login.php">既に登録している方はこちら</a></p>
        </div>
    </div>
</body>
</html>

