<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/index.css">
  <title>お問い合わせ</title>
</head>

<body>
  <h1 class="top-title">お問い合わせ</h1>
  <table class="main-table">
    <form action="" method="POST" class="main-form">
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="fullname">お名前※</label>
        </th>
        <td>
          <input type="text" class="main-form-text" name="fullname" id="fullname">
          <div>例）山田</div>
        </td>
        <td>
          <input type="text" class="main-form-text" name="fullname" id="fullname">
          <div>例）太郎</div>
        </td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="man">性別 ※</label>
        </th>
        <td>
          <input type="radio" name="gender" id="man" value="1">
          <label for="man">男性</label>
          <input type="radio" name="gender" id="woman" value="2">
          <label for="woman">女性</label>
        </td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="email">メールアドレス ※</label>
        </th>
        <td colspan="2">
          <input class="main-form-text" type="email" name="email" id="email">
        </td>
      </tr>
      <tr class="main-form-tr">
        <td></td>
        <td>例）test@example.com</td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="postcode">郵便番号 ※</label>
        </th>
        <td class="display-flex" colspan="2">
          〒<input type="text" class="main-form-text" name="postcode" id="postcode">
        </td>
      </tr>
      <tr class="main-form-tr">
        <td></td>
        <td>例）123-4567</td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="address">住所 ※</label>
        </th>
        <td colspan="2">
          <input type="text" class="main-form-text" name="address" id="address">
        </td>
      </tr>
      <tr class="main-form-tr">
        <td></td>
        <td>例）東京都渋谷区千駄ヶ谷1-2-3</td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="building_name">建物名</label>
        </th>
        <td colspan="2">
          <input type="text" class="main-form-text" name="building_name" id="building_name">
        </td>
      </tr>
      <tr class="main-form-tr">
        <td></td>
        <td>例）千駄ヶ谷マンション101</td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="option">ご意見 ※</label>
        </th>
        <td colspan="2">
          <textarea class="main-form-text" name="option" id="option" cols="30" rows="7"></textarea>
        </td>
      </tr>
      <tr class="main-form-tr">
        <td>
          <input type="submit" value="確認">
        </td>
      </tr>
    </form>
  </table>
</body>

</html>