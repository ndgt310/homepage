<?php
require_once 'header.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = htmlspecialchars($_POST["name"]);
    $msg   = htmlspecialchars($_POST["msg"]);
    $visible = isset($_POST["visible"]) ? implode(", ", $_POST["visible"]) : "なし";

    $to = "rinnoir@icloud.com";
    $subject = "掲示板からの新しいメッセージ - $name さんより";

    $body = <<<EOT
$nameさんから、以下の内容でメッセージが送信されました。


--- メッセージ ---
$msg

--- チェック内容 ---
$visible
EOT;

    // サーバーで許可されている送信元アドレスを指定
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: rinnoir@icloud.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "送信成功！ありがとうございます。";
    } else {
        echo "送信に失敗しました。";
    }
}
?>


<h1>バイオグラフィー</h1>
    工事中です
<br>
----------------------------------
<br>
バイオグラフィーに掲載し甲斐がありそうな　私に関するエピソードを募集しています。
<br>
投稿された内容は、審議された後に掲載されます。
<form id="form" method="POST">
  おなまえ：<input name="name" placeholder=""><br>
  内容　　：<textarea name="msg" placeholder="だいたいいつ頃かが分かると有難いです。"></textarea><br>

  <input type="checkbox" name="visible[]" value="表示"> 下の画面に表示してもよい<br>
  <input type="checkbox" name="visible[]" value="クレジット"> クレジットに名前を載せてほしい<br>

  <button type="submit">送信</button>
<br>
※確認画面は表示されません。
</form>


    <br><br>
    ☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆
    <br>
    <p>2003/02/23 誕生</p>
    2006年 丸亀聖母幼稚園 入園
    <br>
    2009年 丸亀市立城坤小学校　入学
    <br>
    2015年 丸亀市立西中学校　入学
    <br>
    2018年 香川県立坂出高等学校 普通科　入学
    <br>
    2021年 関西学院大学 社会学部　入学
    <br>
    2025年 就職
<br><br>
☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆
<br>


    チェックが付けられた内容は、ここから下に表示されます
    （画面へ表示するまでに、時差があります。）
    <br><br>
    ---------------審議中の内容---------------
    <br><br><br><br>

    
    --------------------------------------------
    <br><br>
    © 2026 Kameyama Tamao All Rights Reserved.