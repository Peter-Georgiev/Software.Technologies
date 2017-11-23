<?php
$sortedLines = "";
if ($_GET['lines']) {
    $lines = explode("\n", $_GET['lines']);
    var_dump($lines);
    $lines = array_map('trim', $lines);
    var_dump($lines);
    sort($lines, SORT_STRING);
    var_dump($lines);
    $sortedLines = implode("\n", $lines);
}
?>
<form>
  <textarea rows="10" name="lines"><?= $sortedLines ?></textarea> <br>
    <input type="submit" value="Sort" name="sort_btm" />
</form>