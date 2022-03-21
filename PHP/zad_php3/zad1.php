<form method="GET">
<input name="masa"> <-- Podaj wagę w kilogramach</input>
<input name="wzrost"> <-- Podaj wzrost w metrach</input>
<input type="submit" name="kalkulator"></input>
</form>
<?php
if(isset($_GET['kalkulator']))
{
    $liczba1= $_GET['masa'];

    $liczba2= $_GET['wzrost'];

    $liczbaWynik = ($liczba1/($liczba2 * $liczba2));

    echo "Twoje BMI to: ".$liczbaWynik."<br>";
    if($liczbaWynik <= 16)
    {
        echo "Jesteś w kategorii 'Wygłodzenie'.";
    }
    else 
    if($liczbaWynik >= 16 && $liczbaWynik <= 16.99) 
    {
        echo "Jesteś w kategorii 'Wychudzenie'.";
    }   
    else
    if($liczbaWynik >= 17 && $liczbaWynik <= 18.49)
    {
        echo "Jesteś w kategorii 'Niedowaga'.";
    }
    else
    if($liczbaWynik >= 18.5 && $liczbaWynik <= 24.99)
    {
        echo "Jesteś w kategorii 'Pożądana masa ciała'.";
    }
    else
    if($liczbaWynik >= 25 && $liczbaWynik <= 29.99)
    {
        echo "Jesteś w kategorii 'Nadwaga'.";
    }
    else
    if($liczbaWynik >= 30 && $liczbaWynik <= 34.99)
    {
        echo "Jesteś w kategorii 'Otyłość 1 stopnia'.";
    }
    else
    if($liczbaWynik >= 35 && $liczbaWynik <= 39.99)
    {
        echo "Jesteś w kategorii 'Otyłość 2 stopnia'.";
    }
    else
    if($liczbaWynik >= 40)
    {
        echo "Jesteś w kategorii 'Otyłość 3 stopnia'.";
    }
}
?>