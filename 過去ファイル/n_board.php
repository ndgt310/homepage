
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mayamekarin</title>
  <style>
    body {
      margin: 0;
      padding: 0px;
      font-family: "MyFont", monospace;
      background: #ffffff;
      color: #32322e;
      line-height: 1.8;
        font-family: "MyFont", monospace;
    }
header {
  margin: 0;
  padding: 0px;
  background: #222;
  color: white;
  padding: 20px;
  text-align: center;
}
    /* .page {
      max-width: 760px;
      margin: 0 auto;
      border: 1px solid #999;
      padding: 24px;
      background: #fff;
    } */

    h1 {
      text-align: center;
    }

    .menu {
      text-align: center;
      margin: 0px 0;
      padding: 12px;
      border-top: 1px solid #999;
      border-bottom: 1px solid #999;
    }

    /* .menu a {
      color: blue;
      margin: 0 10px;
    } */

/* ===== メニュー ===== */
/* .menu {
  text-align: center;
  margin: 50px 0;
} */

.menu a {
  color: rgb(2, 16, 11);
  margin: 0 20px;
  text-decoration: none;
  position: relative;
}

/* 下線アニメーション */
.menu a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -5px;
  width: 0%;
  height: 3px;
  background: rgba(2, 7, 23, 0.701);
  transition: 0.3s;
}

.menu a:hover::after {
  width: 100%;
}

    .box {
      margin-top: 24px;
      padding: 16px;
      border: 1px solid #999;
    }

    .blink {
  animation: blink 1s infinite;
  text-align: center;
  color: #2a4f8f;
}
@keyframes moveBg {
  0% { transform: translate(0,0); }
  50% { transform: translate(-20%, -20%); }
  100% { transform: translate(0,0); }
}
/* ===== キラ粒（暖色） ===== */
.particle {
  position: fixed;
  width: 5px;
  height: 5px;
  background: #000000;
  animation: float 12s infinite;
  opacity: 0.7;
}
@keyframes float {
  0% { transform: translateY(100vh); opacity: 0; }
  50% { opacity: 1; }
  100% { transform: translateY(-10vh); opacity: 0; }
}
@keyframes blink {
  50% { opacity: 0; }
}


@font-face {
  font-family: "MyFont";   /* 好きな名前でOK */
  src: url("x12y16pxMaruMonica.ttf");  /* ファイル指定 */
}

textarea {
  width: 50%;
  padding: 1px;
  border: 1px solid #ccc;
  border-radius: 6px;
  /* resize: vertical; 縦だけ伸ばせる */
    height: 80px;  
  box-sizing: border-box;
}

.modal {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.5);
}

.box {
  background: white;
  width: 300px;
  margin: 150px auto;
  padding: 20px;
  border-radius: 10px;
}


  </style>
</head>
<body>
    <div class="bg"></div>
<div class="particle" style="left:15%; animation-delay:0s;"></div>
<div class="particle" style="left:35%; animation-delay:2s;"></div>
<div class="particle" style="left:55%; animation-delay:4s;"></div>
<div class="particle" style="left:75%; animation-delay:1s;"></div>
<div class="particle" style="left:90%; animation-delay:3s;"></div>

  <!-- <div class="page"> -->
    <header>
    <h1>mayamekarin</h1>
</header>
    <div class="menu">
      <!-- 別ページへリンク -->
       <A href="index.html">ホーム</A>
      <a href="profile.html">自己紹介</a>
      <a href="bio.html">バイオグラフィー</a>
      <!-- <a href="book.html">本</a> -->
      <!-- <a href="movie.html">映画</a>     -->
      <a href="gallery.html">ギャラリー</a>      
      <a href="board.html">掲示板（工事中）</a>
     <a href="credit.html">クレジット</a>
      <a href="sample3.html">サンプル</a>   
      <a href="sample4.html">サンプル</a>    
      <a href="sample5.html">サンプル</a>        
      <a href="sample6.html">サンプル</a>       
      <!-- <a href="#favorite">遍歴</a> -->
      <!-- <a href="#contact">連絡</a> -->
    </div>


<!-- <form method="POST">
  <input name="msg">
  <input type="submit">
</form>  -->

<?php
$log = 'log.txt';

if (!empty($_POST['msg'])) {

  $name = htmlspecialchars($_POST['name']);
  $msg  = htmlspecialchars($_POST['msg']);
  $time = date("Y-m-d H:i:s");

  $line = $time . " | " . $name . " | " . $msg . "\n";

  file_put_contents(
    $log,
    $line,
    FILE_APPEND
  );
}
?>

<form method="POST">
  <input name="name" placeholder="名前（匿名でも本名でも）"><br>

  <textarea name="msg" rows="5" placeholder="メッセージ"></textarea><br>

  <input type="submit" value="送信">
</form>
●削除依頼は、LINEまたはInstagramのDMにて承ります●
<hr>
<!-- ポップアップ -->
<div id="modal" class="modal">
  <div class="box">
    <p id="preview"></p>

    <button onclick="submitForm()">OK</button>
    <button onclick="closeModal()">キャンセル</button>
  </div>
</div>
<!-- <form method="POST" onsubmit="return confirm('この内容で送信しますか？');">
  <input name="name" placeholder="名前"><br><br>
  <textarea name="msg" placeholder="メッセージ"></textarea><br><br>
  <input type="submit" value="送信">
</form> -->
<?php
if (file_exists($log)) {
  echo nl2br(htmlspecialchars(file_get_contents($log)));
}
?>
