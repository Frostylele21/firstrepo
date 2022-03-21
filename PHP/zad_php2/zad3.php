<form method="GET">
<select name="podatki">
<option value="23.9">Liniowy</option>
<option value="14">Ryczałt</option>
<option value="32">Progresywny</option>
</select>
<input name="liczba1"> <-- Podaj kwotę</input> 
<input type="submit" name="podatki" && name="liczba1"></input>
</form>

<?php
if(isset($_GET['podatki']) && ($_GET['liczba1']))
{
(int) $typ = $_GET['podatki'];
$kwota = $_GET['liczba1'];
$podatek = $kwota - (($kwota / 100)*$typ);
echo "Dla podanej kwoty podatek wynosi: ".$podatek;
}
?>
