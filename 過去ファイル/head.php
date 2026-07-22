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

  </style>
  
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
      <a href="board.php">掲示板</a>
      <a href="rec.html">記録</a>
     <a href="credit.html">クレジット</a>
      <a href="sample3.html">サンプル</a>   
      <a href="sample5.html">サンプル</a>        
      <a href="sample6.html">サンプル</a>       
      <!-- <a href="#favorite">遍歴</a> -->
      <!-- <a href="#contact">連絡</a> -->
    </div>