<form method="GET">
<input name="liczba1"> <-- Kwota</input>
<input name="liczba2"> <-- Podatek</input>
<input type="submit" name="kalkulator"></input>
</form>

<?php
if(isset($_GET['kalkulator']))
{
    $liczba1= $_GET['liczba1'];

    $liczba2= $_GET['liczba2'];

    $liczbaWynik = $liczba1 - (($liczba1/100) * $liczba2);

    echo "Wynik: ". $liczbaWynik ." zł netto";
}
?>