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
    <form action="/post" method="POST" class="main-form">
      @csrf
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="last-name">お名前※</label>
        </th>
        <td>
          <input type="text" class="main-form-text main-form-fullname" name="last-name" id="last-name" maxlength="20" value="{{old('last-name')}}">
          @if ($errors->has('last-name'))
          <p class="form-error">{{ $errors->first('last-name')}}</p>
          @endif
          <div class="form-example">例）山田</div>
        </td>
        <td>
          <input type="text" class="main-form-text main-form-fullname" name="first-name" id="first-name" maxlength="20" value="{{old('first-name')}}">
          @if ($errors->has('first-name'))
          <p class="form-error">{{ $errors->first('first-name')}}</p>
          @endif
          <div class="form-example">例）太郎</div>
        </td>

      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="man">性別 ※</label>
        </th>
        <td>
          <input type="radio" name="gender" id="man" value="1" class="radio-button" {{ old('gender','1') == '1' ? 'checked' : '' }}>
          <label for="man" class="radio-button-text">男性</label>
          <input type="radio" name="gender" id="woman" value="2" class="radio-button" {{ old('gender') == '2' ? 'checked' : '' }}>
          <label for="woman" class="radio-button-text">女性</label>
          @if ($errors->has('gender'))
          <p class="form-error">{{ $errors->first('gender')}}</p>
          @endif
        </td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="email">メールアドレス ※</label>
        </th>
        <td colspan="2">
          <input class="main-form-text" type="email" name="email" id="email" maxlength="50" value="{{old('email')}}">
          <div id="email-message"></div>
          @if ($errors->has('email'))
          @foreach($errors->get('email') as $message)
          <p class="form-error">{{ $message }}</p>
          @endforeach
          @endif
        </td>
      </tr>


      <tr class="main-form-tr">
        <td></td>
        <td class="form-example">例）test@example.com</td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="postcode">郵便番号 ※</label>
        </th>
        <td colspan="2" class="display-flex">
          〒<input type="text" class="main-form-text" size="8" maxlength="8" name="postcode" id="postcode" value="{{old('postcode')}}" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
        </td>
        <td id="postcode-message">
          @if ($errors->has('postcode'))
          <p class="form-error">{{ $errors->first('postcode')}}</p>
          @endif
        </td>
      </tr>
      <tr class="main-form-tr">
        <td></td>
        <td class="form-example">例）123-4567</td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="address">住所 ※</label>
        </th>
        <td colspan="2">
          <input type="text" class="main-form-text" name="address" id="address" maxlength="40" value="{{old('address')}}">
          @if ($errors->has('address'))
          @foreach($errors->get('address') as $message)
          <p class="form-error">{{ $message }}</p>
          @endforeach
          @endif
        </td>
      </tr>
      <tr class="main-form-tr">
        <td></td>
        <td class="form-example">例）東京都渋谷区千駄ヶ谷1-2-3</td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="building_name">建物名</label>
        </th>
        <td colspan="2">
          <input type="text" class="main-form-text" name="building_name" id="building_name" maxlength="40" value="{{old('building_name')}}">
        </td>
      </tr>
      <tr class="main-form-tr">
        <td></td>
        <td class="form-example">例）千駄ヶ谷マンション101</td>
      </tr>
      <tr class="main-form-tr">
        <th class="main-form-th">
          <label for="option">ご意見 ※</label>
        </th>
        <td colspan="2">
          <textarea class="main-form-text" name="option" id="option" cols="30" rows="7">{{old('option')}}</textarea>
          <div id="option-message"></div>
          @if ($errors->has('option'))
          @foreach($errors->get('option') as $message)
          <p class="form-error">{{ $message }}</p>
          @endforeach
          @endif
        </td>
      </tr>
      <tr class="main-form-tr">
        <td colspan="3" class="submit">
          <input type="submit" value="確認" class="submit-button" id="submit">
        </td>
      </tr>
    </form>
  </table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/store-request.js"></script>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</body>

</html>