window.addEventListener('DOMContentLoaded', () => {

  const inputPostCode = document.getElementById('postcode');
  const inputEmail = document.getElementById('email');
  const inputOption = document.getElementById('option');
  const rightPostCode = /^[0-9]{3}-[0-9]{4}$/;
  const rightEmail = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}.[A-Za-z0-9]{1,}$/;

  inputPostCode.addEventListener('input', (e) => {
    if (!inputPostCode.value.match(rightPostCode)) {
      document.getElementById('postcode-message').innerHTML = "<div>郵便番号が正しくありません。</div>";
      document.getElementById('postcode-message').classList.add("form-error");
      document.getElementById('postcode').classList.add("form-error2");
    } else {
      document.getElementById('postcode-message').innerHTML = "";
      document.getElementById('postcode-message').classList.remove("form-error");
      document.getElementById('postcode').classList.remove("form-error2");
    }
  }, false);

  inputEmail.addEventListener('input', (e) => {
    if (!inputEmail.value.match(rightEmail)) {
      document.getElementById('email-message').innerHTML = "<div>メールアドレスが正しくありません。</div>";
      document.getElementById('email-message').classList.add("form-error");
      document.getElementById('email').classList.add("form-error2");
    } else {
      document.getElementById('email-message').innerHTML = "";
      document.getElementById('email-message').classList.remove("form-error");
      document.getElementById('email').classList.remove("form-error2");
    }
  }, false);

  inputOption.addEventListener('input', (e) => {
    if (inputOption.value.length >= 120) {
      document.getElementById('option-message').innerHTML = "<div>120文字以内で入力してください。</div>";
      document.getElementById('option-message').classList.add("form-error");
      document.getElementById('option').classList.add("form-error2");
    } else {
      document.getElementById('option-message').innerHTML = "";
      document.getElementById('option-message').classList.remove("form-error");
      document.getElementById('option').classList.remove("form-error2");
    }
  }, false);
}, false);