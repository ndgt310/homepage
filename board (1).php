<?php

if (!empty($_POST['msg'])) {

  $name = htmlspecialchars($_POST['name']);
  $msg  = htmlspecialchars($_POST['msg']);
  $type = $_POST['type'] ?? "";

  if ($type == "kinder") {
    $label = "ようちえん";
  } elseif ($type == "element") {
    $label = "小学校";
  } elseif ($type == "junior") {
    $label = "中学校";
  } elseif ($type == "high") {
    $label = "高校";
  } elseif ($type == "collage") {
    $label = "大学";
  } elseif ($type == "no") {
    $label = "ひみつ";
  } else {
    $label = "そのた";
  }

$filename = __DIR__ . "/log.txt";

  $lines = file_exists($filename)
    ? file($filename, FILE_IGNORE_NEW_LINES)
    : [];

  $id = count($lines) + 1;

  $like = 0;

  $text =
    date("Y-m-d H:i:s") .
    " | " .
    $label .
    "のおともだち：" .
    $name .
    " さん: " .
    $msg;

  $data = $id . "<>" . $like . "<>" . $text . "\n";

  file_put_contents(
    $filename,
    $data,
    FILE_APPEND | LOCK_EX
  );

  header("Location: " . $_SERVER['PHP_SELF']);
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
       <a href="index.php">ホーム</A>
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

    <h2>下のフォームに名前とメッセージを入力すると、入力したメッセージが一番下の画面に表示されます</h2>
<h3>誰でもどうぞ！たくさんの投稿をお待ちしております*^^*</h3>

<form id="form" method="POST">
  お名前は？
  <input name="name" placeholder="(匿名でも本名でも)"><br>

どの時代の友人ですか？
  <select name="type">
    <option value ="none">-</option>
    <option value ="kinder">幼稚園</option>
    <option value="element">小学校</option>
    <option value="junior">中学校</option>
    <option value="high">高校</option>
    <option value="collage">大学</option>
    <option value="other">その他</option>
    <option value="no">答えたくない</option>

  </select>

<br>
  <textarea name="msg" placeholder="メッセージを何でもどうぞ　文字数制限はありません"></textarea><br>
※改行が入ると、メッセージが反転して表示されてしまうことがあります<br>
  <button type="button" onclick="openModal()">送信</button>
</form>
●投稿前にポップアップが表示されます<br>
●この投稿によって個人が特定されることはありません<br>
●万が一、間違えて投稿してしまった場合は、LINEもしくはInstagramのDMにて削除依頼を承ります
<!-- ポップアップ -->
<div id="modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5);">
  <div style="background:#fff; width:300px; margin:150px auto; padding:20px; border-radius:10px;">
    <p id="preview"></p>

    <button onclick="submitForm()">OK</button>
    <button onclick="closeModal()">キャンセル</button>
  </div>
</div>

<hr>

<?php

if (file_exists('log.txt')) {

  $lines = file('log.txt', FILE_IGNORE_NEW_LINES);

  $lines = array_reverse($lines);

  foreach ($lines as $line) {

    $parts = explode("<>", $line);

    // 古いデータ対策
    if (count($parts) < 3) {
      continue;
    }

    list($id, $like, $text) = $parts;

/*    echo "<div style='border:1px solid #ccc; padding:10px; margin:10px;'>";*/

    echo nl2br($text);

    echo "<br>";

    echo "<form method='POST' action='like.php'>";

    echo "<input type='hidden' name='id' value='{$id}'>";

    echo "<button type='submit'>👍 {$like}</button>";

    echo "<br>";

    echo "<br>";

    echo "</form>";

/*    echo "</div>";*/
  }
}
?>

<script>
function openModal() {
  const name = document.querySelector("[name='name']").value;
  const msg = document.querySelector("[name='msg']").value;

  document.getElementById("preview").innerText =
    "名前: " + name + "\nメッセージ: " + msg;

  document.getElementById("modal").style.display = "block";
}

function closeModal() {
  document.getElementById("modal").style.display = "none";
}

function submitForm() {
  document.getElementById("form").submit();
}
</script>