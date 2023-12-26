<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>演習トップ</title>
</head>
<body>
  <h1>演習：商品全件表示と検索処理</h1>
  <p>行いたい処理を選択してください</p>
  <ul>
    <li><a href="/db/index">全件表示</a></li>
    <!-- <li><a href="/db/search"></a></li> -->
  </ul>
  <form action="/db/search" method="get">
    @csrf
    <input type="text" name="item_name" required>
    <input type="submit" value="検索">
  </form>
</body>
</html>