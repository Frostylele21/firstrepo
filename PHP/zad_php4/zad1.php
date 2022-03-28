<form method="POST">
<input name="pin"> Podaj pin do karty </input>
<input name="kwota"> Podaj kwotę </input> /*zrobic dedykowane przyciski na wybrane kwoty, mozliwosc wpisania wlasnej kwoty w nominalach bankomatowych (10,20,50 jesli inne wyrzuca blad), wyswietlenie inofmracji o wyplaconej kwocie.*/
<input type="submit" name="logowanie"></input>
</form>

<?php
function wyplac(){
    echo "Wypłaciłeś pieniądze";
}

if(isset($_POST['logowanie']))
{
    $liczba1 = $_POST['pin'];

    if ($liczba1 == "2137")
    {
        echo '<div>
        <h1> Zalogowałeś się poprawnie! </h1>
        <h2> Witamy w banku XYZ! </h2>
        <p> Wybierz co chcesz zrobić: </p></div>';
    }
    else
    echo "Podany pin jest nieprawidłowy. Spróbuj ponownie.";
}
?>