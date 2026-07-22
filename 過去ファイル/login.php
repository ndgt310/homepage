<?php
session_start();

if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    /* background:#f5f5f5; */
      font-family: "MyFont", monospace;
}

.image-button{
  border:none;
  background:none;
  padding:0;
  cursor:pointer;
}


@font-face {
  font-family: "MyFont";   /* 好きな名前でOK */
  src: url("x12y16pxMaruMonica.ttf");  /* ファイル指定 */
}

</style>
</head>
<body>

<div class="box">

<div style="text-align: center;">
    この先に進むには、パスワードが必要です
    <br><br>
      <img src="top.jpg" width="30" alt="ログイン">
      <img src="top.jpg" width="30" alt="ログイン">
<br>

<form action="auth.php" method="POST">

<input type="password" name="password" required>
<br><br><br>

<button type="submit" class="image-button">
  <img src="enter.jpg" width="220" alt="ログイン">
</button>
<br>
Enter
<br>押せ
</form>

<?php if(isset($_GET['error'])): ?>
<p style="color:red;">パスワードが違います</p>
<?php endif; ?>

</div>

</body>
</html>