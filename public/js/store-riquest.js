window.addEventListener('DOMContentLoaded', () => {

  const inputPostCode = document.getElementById('postcode');
  const inputEmail = document.getElementById('email');
  const inputOption = document.getElementById('option');
  const rightPostCode = /^[0-9]{3}-[0-9]{4}$/;
  const rightEmail = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}.[A-Za-z0-9]{1,}$/;

  inputPostCode.addEventListener('input', (e) => {
    if (!inputPostCode.value.match(rightPostCode)) {
      document.getElementById('postcode-message').innerHTML = "<div>郵便番号が正しくありません。</div>";
    } else {
      document.getElementById('postcode-message').innerHTML = "";
    }
  }, false);
  
  inputEmail.addEventListener('input', (e) => {
    if (!inputEmail.value.match(rightEmail)) {
      document.getElementById('right-email').innerHTML = "<div>メールアドレスが正しくありません。</div>";
    } else {
      document.getElementById('right-email').innerHTML = "";
    }
  }, false);

  inputOption.addEventListener('input', (e) => {
    if (inputOption.value.length >= 120) {
      document.getElementById('right-option').innerHTML = "<div>120文字以内で入力してください。</div>";
    } else {
      document.getElementById('right-option').innerHTML = "";
    }
  }, false);
}, false);