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

require_once 'header.php';

?>

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