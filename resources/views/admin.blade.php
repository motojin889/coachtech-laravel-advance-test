<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理システム</title>
  <link rel="stylesheet" href="/css/reset/css">
  <link rel="stylesheet" href="/css/admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  @extends('layout.admin2')

  @section('content')

  <table class="admin-table">{{ $items->appends(request()->query())->links()}}
    <tr class="admin-table-th">
      <th class="admin-th_id">ID</th>
      <th class="admin-th">お名前</th>
      <th class="admin-th">性別</th>
      <th class="admin-th">メールアドレス</th>
      <th class="admin-th">ご意見</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <form action="/admin/delete" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$item['id']}}">
        <td class="admin-item_id">{{$item['id']}}</td>
        <td>{{$item['fullname']}}</td>
        <td>@if($item['gender'] == 1)
          男性
          @elseif($item['gender'] == 2)
          女性
          @endif
        </td>
        <td>{{$item['email']}}</td>
        <td id="option">{{Str::limit($item['option'],50,'...')}}</td>
        <td class="admin-delete-submit">
          <input type="submit" value="削除" id="delete_submit" class="delete-submit">
        </td>
      </form>
    </tr>


    @endforeach
  </table>
  @endsection

  <script src="/js/admin.js"></script>
</body>

</html>