<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>練習フォームページ</h1>

    <p>次のページへデータを渡してみよう</p>
    <form action="./confirm.php" method="POST">
    <label>お名前</label>
    <input type="text" name="user_name">
    <label>趣味</label>
    <input type="text" name="hobby">
    <input type="submit" value="確認する">
    </form>
</body>
</html>