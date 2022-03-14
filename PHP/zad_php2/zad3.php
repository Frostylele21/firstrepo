<form method="GET">
<select name="podatki">
<option value="23,9">Liniowy</option>
<option value="14">Ryczałt</option>
<option value="32">Progresywny</option>
<option value="Karta Podatkowa">Karta Podatkowa</option>
</select>
<input type="submit" name="podatki"></input>
</form>

<?php
if(isset($_GET['podatki']))
{
$podatek = $_GET['podatki'];
$podatek 
}
?>