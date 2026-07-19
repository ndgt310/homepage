<?php

$filename = "log.txt";

$id = $_POST["id"] ?? "";

if ($id == "") {
  exit;
}

$lines = file($filename, FILE_IGNORE_NEW_LINES);

$new_lines = [];

foreach ($lines as $line) {

  $parts = explode("<>", $line);

  if (count($parts) < 3) {
    continue;
  }

  list($post_id, $like, $text) = $parts;

  if ($post_id == $id) {
    $like++;
  }

  $new_lines[] = $post_id . "<>" . $like . "<>" . $text;
}

file_put_contents(
  $filename,
  implode("\n", $new_lines),
  LOCK_EX
);

header("Location: board.php");
exit;
?>