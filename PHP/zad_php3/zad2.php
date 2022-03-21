<form method="GET">
<input name="masa"> <-- Podaj masę ciała w kilogramach</input>
<input name="alko"> <-- Podaj ilość alkoholu w gramach</input>
<select name="plec">
<option value="0.6">Kobieta</option>
<option value="0.7">Mężczyzna</option>
</select>
<input type="submit" name="kalkulator" && name="plec"></input>
</form>
<?php
if(isset($_GET['kalkulator']) && ($_GET['plec']))
{
    $liczba1= $_GET['masa'];

    (int)$liczba2= $_GET['alko'];

    $liczba3= $_GET['plec'];

    $liczbaWynik = ($liczba2/($liczba3 * $liczba1));

    echo "Ilość alkoholu we krwi wynosi: ".$liczbaWynik." promili.";
}
?>