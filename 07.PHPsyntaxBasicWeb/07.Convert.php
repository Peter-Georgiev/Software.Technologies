<?php declare(strict_types = 1);
$msgAfterCelsius = "";
$msgAfterFahrenheit = "";

if (isset($_GET['btm_cel'])) {
    var_dump($_GET);
    $cel = floatval($_GET['cel']);
    $celToFah = ConverToFahrenheit($cel);
    $msgAfterCelsius = "$cel &deg;C = $celToFah &deg;F";
}
if (isset($_GET['btm_fah']) && isset($_GET['fah'])) {
    $fah = intval($_GET['fah']);
    $fahToCel = ConverToCelsius($fah);
    $msgAfterFahrenheit = "$fah &deg;F = $fahToCel &deg;C";
}
?>
    <form>
        Celsius: <input type="text" name="cel" />
        <input type="submit" value="Convert" name="btm_cel">
        <?= $msgAfterCelsius ?>
    </form>
    <form>
        Fahrenheit: <input type="text" name="fah" />
        <input type="submit" value="Convert" name="btm_fah">
        <?= $msgAfterFahrenheit ?>
    </form>
<?php
function ConverToFahrenheit(float $cel): float
{
    return $cel * 1.8 + 32;
}

function ConverToCelsius(float $fah): float
{
    return ($fah - 32) / 1.8;
}