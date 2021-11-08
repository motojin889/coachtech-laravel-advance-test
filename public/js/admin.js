window.addEventListener('DOMContentLoaded', () => {
  const delete_submit = document.getElementById('delete_submit');
  const option = document.getElementById('option');

  delete_submit.addEventListener('click', (e) => {
    confirm('データを１件削除しますか');
  }, false);

}, false);