<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>検索結果</title>
</head>
<body>
  <table class="table">
  <tr>
    <th>商品番号</th>
    <th>商品名</th>
    <th>価格</th>
  </tr>
  @forelse($records as $record)
  <tr>
    <td>{{$record->id}}</td>
    <td>{{$record->name}}</td>
    <td>{{$record->price}}</td>
  </tr>
  @empty
<tr>
  <td colspan="3">表示できるデータがありません</td>
</tr>
  @endforelse
  </table>

</body>
</html>