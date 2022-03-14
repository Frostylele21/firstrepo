<form method="GET">
<input name="liczbaDOD"></input>
<input name="liczbaDOD2"></input>
<input type="submit" name="dodawanie"></input>
</form>
<form method="GET">
<input name="liczbaROZ"></input>
<input name="liczbaROZ2"></input>
<input type="submit" name="odejmowanie"></input>
</form>
<form method="GET">
<input name="liczbaMNO"></input>
<input name="liczbaMNO2"></input>
<input type="submit" name="mnozenie"></input>
</form>
<form method="GET">
<input name="liczbaDZIEL"></input>
<input name="liczbaDZIEL2"></input>
<input type="submit" name="dzielenie"></input>
</form>


<?php
if(isset($_GET['dodawanie']))
{
    $liczbaDOD= $_GET['liczbaDOD'];

    $liczbaDOD2= $_GET['liczbaDOD2'];

    echo "Suma:".$liczbaDOD + $liczbaDOD2;
}
if(isset($_GET['odejmowanie']))
{
    $liczbaROZ= $_GET['liczbaROZ'];

    $liczbaROZ2= $_GET['liczbaROZ2'];

    echo "Różnica:".$liczbaROZ - $liczbaROZ2;
}
if(isset($_GET['mnozenie']))
{
    $liczbaMNO= $_GET['liczbaMNO'];

    $liczbaMNO2= $_GET['liczbaMNO2'];

    echo "Iloczyn:".$liczbaMNO * $liczbaMNO2;
}
if(isset($_GET['dzielenie']))
{
    $liczbaDZIEL= $_GET['liczbaDZIEL'];

    $liczbaDZIEL2= $_GET['liczbaDZIEL2'];

    echo "Iloraz:".$liczbaDZIEL / $liczbaDZIEL2;
}
?>