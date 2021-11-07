<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理システム</title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/admin2.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <h1 class="h1">管理システム</h1>
  <div class="admin-form">
    <form action="/admin/serch" method="GET">
      @csrf
      <table class="admin-table">
        <tr>
          <th>
            <label for="keyword_name" class="admin-lavel">お名前</label>
          </th>
          <td>
            <input type="text" name="keyword_name" id="keyword_name" class="admin-input">
          </td>
          <th>
            <div class="admin-lavel">性別</div>
          </th>
          <td>
            <input type="radio" name="keyword_gender" id="all_gender" value="all_gender" checked class="admin-radio-button">
            <label for="all_gender" class="admin-lavel-radio">全て</label>

            <input type="radio" name="keyword_gender" id="man" value="man" class="admin-radio-button">
            <label for="man" class="admin-lavel-radio">男性</label>

            <input type="radio" name="keyword_gender" id="woman" value="woman" class="admin-radio-button">
            <label for="woman" class="admin-lavel-radio">女性</label>
          </td>
        </tr>
        <tr>
          <th>
            <label for="keyword_date" class="admin-lavel">登録日</label>
          </th>
          <td>
            <input type="date" id="keyword_date" name="keyword_ormore_date" class="admin-input">
          </td>
          <td>
            <div> ~ </div>
          </td>
          <td>
            <input type="date" id="keyword_date" name="keyword_orless_date" class="admin-input">
          </td>
        </tr>
        <tr>
          <th>
            <label for="keyword_email" class="admin-lavel">メールアドレス</label>
          </th>
          <td>
            <input type="text" name="keyword_email" id="keyword_email" class="admin-input">
          </td>
        </tr>
      </table>

      <input type="submit" value="検索" class="admin-submit">
      <input type="reset" value="リセット" class="admin-reset">
    </form>
  </div>
  <div class="container">
    @yield('content')
  </div>
</body>

</html>