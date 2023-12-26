<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>演習～2023/12/26</title>
</head>
<body>
  <h1>全件表示</h1>
  <a href="/">Topにもどる</a>
  <table class="table">
    <tr>
      <th>商品番号</th>
      <th>商品名</th>
      <th>価格</th>
      <th>投稿日</th>
    </tr>
    @foreach($records as $record)
    <tr>
      <td>{{$record->id}}</td>
      <td>{{$record->name}}</td>
      <td>{{$record->price}}</td>
      <td>{{$record->created_at}}</td>
    </tr>

    @endforeach
  </table>
</body>
</html>