

<head>
  <link rel="stylesheet" href="style.css">
</head>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<style>
body {
  font-family: sans-serif;
  background: #f2f2f2;
  padding: 20px;
}

/* 中央配置 */
.container {
  max-width: 600px;
  margin: 0 auto;
}

/* フォーム全体 */
/* form {
  background: white;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
} */

/* 名前（小さく） */
input[name="name"] {
  width: 120px;
  padding: 6px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 13px;
}

/* メッセージ（広く） */
textarea {
  width: 100%;
  height: 80px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  resize: none;
  box-sizing: border-box;
  margin-bottom: 10px;
}

/* ボタン */
button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 8px;
  color: white;
  font-size: 15px;

  background: linear-gradient(135deg, #4a90e2, #357ab8);
  cursor: pointer;

  transition: 0.3s;
}

button:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 12px rgba(0,0,0,0.2);
}

button:active {
  transform: translateY(0);
  box-shadow: none;
}
</style>

</head>
<body>

<div class="container">

  <form method="POST">
    <input type="text" name="name" placeholder="名前">
    <textarea name="msg" placeholder="メッセージ"></textarea>
    <button type="submit">送信</button>
  </form>

</div>

</body>
</html>

<?php
if (!empty($_POST['msg'])) {
  $name = htmlspecialchars($_POST['name']);
  $msg  = htmlspecialchars($_POST['msg']);

  file_put_contents(
    'log.txt',
    $name . ": " . $msg . "\n",
    FILE_APPEND
  );
}
?>