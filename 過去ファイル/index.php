<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>
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
       <a href="index.php">ホーム</A>
      <a href="profile.html">自己紹介</a>
      <a href="bio.html">バイオグラフィー</a>
      <!-- <a href="book.html">本</a> -->
      <!-- <a href="movie.html">映画</a>     -->
      <a href="gallery.html">ギャラリー</a>      
      <a href="board.php">掲示板</a>
     <a href="credit.html">クレジット</a>
      <a href="sample3.html">サンプル</a>   
      <a href="sample4.html">サンプル</a>    
      <a href="sample5.html">サンプル</a>        
      <a href="sample6.html">サンプル</a>       
      <!-- <a href="#favorite">遍歴</a> -->
      <!-- <a href="#contact">連絡</a> -->
    </div>
    <p class="blink">★★ ようこそ！★★</p>
    
あなたは
<img src="http://www5.kannet.ne.jp/~counter/count.cgi?name=mayamekarin0908&type=20&width=6">
番目の訪問者です。
	
    <div class="box">
      <h2>ごあいさつ</h2>
      <p>
        この度は、本サイトを訪問いただき、本当にありがとうございます！<br>
        ※本サイトは、限定的に公開されているものです。本サイトには、個人情報が含まれています。<br>
        　第三者にリンクを共有することは、お控えください。<br><br>
        人物紹介は「自己紹介ページ」をご覧ください。

      </p>
    </div>
    <div>

    <div class="box">
     <h2>
          コンテンツ
        </h2>
        <p><a href="profile.html">自己紹介</a>　　　　-> 　　人物像について。</p>
        <p><a href="bio.html">バイオグラフィー</a> ->　　現在工事中。</p>
        <!-- <p><a href="book.html">本</a>　　　   　->　　これまでに読んだ本を紹介しています。</p> -->
        <!-- <p><a href="movie.html">映画</a> 　　　　   ->　　これまでに観た映画のなかで、心に残ったものを紹介しています。</p> -->
        <P><a href="gallery.html">ギャラリー</a> 　　　->　　テーマ別に写真を掲載しています。</P>
        <p><a href="board.html">掲示板></a>　　　　　->　　現在工事中。</p>
        <p><a href="credit.html">クレジット></a>　　　->　　本サイトを作成するにあたり使用した素材、作成協力者を記載しています。</p>
        <P>サンプル   -> デザイン保存場所。現在工事中。</P>  
    </div>
          
    </div> 

    <div class="box" id="news">
      <h2>更新履歴</h2>
      <p>2026/04/14 着手開始</p>
      <p>2026/04/28 デザイン完成</p>
      <p>2026/05/03 トップページ完成</p>
      <p>2026/05/05 自己紹介ページ完成</p>            
      <p>2026/05/06 ギャラリー完成</p>
      <p>2026/05/06 サーバードメイン取得</p>
      <p>2026/05/06 クレジット記載</p>
      <p>2026/05/06 公開</p>
      <p>2026/07/19 パスワード認証機能追加</p>
    </div>

    <div class="box" id="favorite">
      <h2>略歴</h2>
      <p>2003/02/23 誕生</p>
      <p>2006/04/11 丸亀聖母幼稚園 入園</p>
      <p>2009/04/07 丸亀市立城坤小学校　入学</p>
      <p>2015/04/07 丸亀市立西中学校　入学</p>
      <p>2018/04/09 香川県立坂出高等学校 普通科　入学</p>
      <p>2021/04/01 関西学院大学 社会学部　入学</p>
      <p>2025/04/01 就職</li>
      </div>

    <div class="box" id="skikl">
      <h2>所有資格</h2>
      <p style="line-height: 1;">
      <p>2019/10 弓道 弐段 取得 </p>
      <p>2020/08 実用英語技能検定 2級 取得 </p>
      <p>2021/09 普通自動車運転免許 取得</p>
      <p>2024/09 ITパスポート 取得 </p>
      <p>2025/10 基本情報技術者試験 合格 </p>
      <p>2025/11 世界遺産検定 3級 取得</p>
      <p>2026/04 美術検定 4級 取得</p>
      </p>

    </div>
    <div class="box" id="contact">
      <h2>その他</h2>
      このページを保管しているサーバー・ドメインの契約期間は1年間です。<br>
      そのため、このページは永久に存在するものではなく、契約更新を忘れた場合は削除される可能性があります。

      </div>
    <div class="box" id="contact">
      <h2>
      <a href="contact.html">お問い合わせはこちら</a>  </h2>
    </div>
      <a href="appendix.html">おまけ</a>
    
    <br>
  </div>
  © 2026 Kameyama Tamao All Rights Reserved.
</body>
</html>