<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認</title>
  <link rel="stylesheet" href="/css/reset.css">
</head>

<body>
  <form action="/confirm/store" method="POST">
    @csrf
    <table>
      <tr>
        <th>お名前</th>
        <td>{{ $posts['last-name'].$posts['first-name']}}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>
          @if($posts['gender'] == 1)
          男性
          @elseif($posts['gender'] == 2)
          女性
          @endif
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{$posts['email']}}</td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>{{$posts['postcode']}}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{$posts['address']}}</td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>{{$posts['building_name']}}</td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>{{$posts['option']}}</td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="送信">
          <div>
            <input type="button" value="修正する" onclick="history.back()">
          </div>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>