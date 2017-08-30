<?php
if (isset($_GET['submit_btm'])) {
    $a = intval($_GET['num1']);
    $b = intval($_GET['num2']);
    $result = $a + $b;
    echo "$a + $b = $result";
}
?>
<form>
    <div>First Number:</div>
    <input type="number" name="num1" value="0" />
    <div>Second Number:</div>
    <input type="number" name="num2" value="0"/>
    <div><input type="submit" name="submit_btm" /></div>
</form>
<?php
function sum(int $a, int $b ): int {
    return $a + $b;
}
