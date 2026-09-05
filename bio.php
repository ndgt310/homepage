<?php
require_once 'header.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name  = htmlspecialchars($_POST["name"]);
    $msg   = htmlspecialchars($_POST["msg"]);
    $visible = isset($_POST["visible"]) ? implode(", ", $_POST["visible"]) : "なし";

    // =========================
    // ログ出力
    // =========================
    $log = "------------------------------\n";
    $log .= "送信日時：" . date("Y-m-d H:i:s") . "\n";
    $log .= "おなまえ：" . $name . "\n";
    $log .= "メールアドレス：" . ($email ?: "未入力") . "\n";
    $log .= "内容：" . $msg . "\n";
    $log .= "チェック内容：" . $visible . "\n";
    $log .= "------------------------------\n\n";

    file_put_contents(
        __DIR__ . "/bio.txt",
        $log,
        FILE_APPEND | LOCK_EX
    );

    // =========================
    // メール送信
    // =========================
    $to = "rinnoir@icloud.com";
    $subject = "掲示板からの新しいメッセージ - $name さんより";

    $body = <<<EOT
$name　さんから、以下の内容でメッセージが送信されました。

$name
さん、投稿ありがとうございます！
mayamekarin.comです。

--- メッセージ ---
$msg

--- チェック内容 ---
$visible
EOT;

    // サーバーで許可されている送信元アドレスを指定
    $headers = "From: noreply@domain.com\r\n";
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
<br><br><br><br><br><br><br>
----------------------------------
<br><br><br>
バイオグラフィーに掲載し甲斐がありそうな　エピソードを募集。
<br>
●投稿された内容は、審議された後に掲載されます。<br>
<!-- ●おなまえ　は、掲載されます。<br>　名前を掲載されたくない場合は、空欄でok。<br><br> -->
<form id="form" method="POST">
  おなまえ：<input name="name" placeholder="空欄可"><br>
  内容　　：<textarea name="msg" placeholder="だいたいいつ頃かが分かると有難いです。"></textarea><br>

  <input type="checkbox" name="visible[]" value="クレジット"> クレジットにも名前を載せてほしい<br>
	<br>
  <button type="submit">送信</button>
<br>
<span style="color:red;">※確認画面は表示されません。</span> 
</form>


    <br><br>


    審議中の場合は、ここから下に表示されます
    （時差あり）
    <br><br>
    ---------------審議中の内容---------------
    <br><br><br><br>

    
    --------------------------------------------
    <br><br>
    © 2026 Kameyama Tamao All Rights Reserved.