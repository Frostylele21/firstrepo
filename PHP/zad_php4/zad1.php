<form method="POST">
<input name="pin"> Podaj numer PIN do karty. </input>
<input type="submit" name="logowanie"></input>
</form>

<?php
if(isset($_POST['logowanie']))
{
    $liczba1 = $_POST['pin'];

    if ($liczba1 == "2137")
    {
        echo '<div>
        <h1> Zalogowałeś się poprawnie! </h1>
        <h2> Witamy w banku XYZ! </h2>
        <p> Wybierz kwotę do wypłaty: </p></div>
        <input type="button" value="10zł"></input>
        <input type="button" value="20zł"></input>
        <input type="button" value="50zł"></input>
        <input type="button" value="100zł"></input>
        <input type="button" value="200zł"></input>
        <input type="button" value="500zł"></input>
        <br>
        <br>
        <h4> Lub wpisz własną kwotę poniżej:
        <br>
        <br>
        <input name="kwota"> WYPŁATA ŚRODKÓW (Podaj kwotę!): </input>
        <input type="submit" name="wyplata"></input>';
    }
    else
        echo "Podany pin jest nieprawidłowy. Spróbuj ponownie.";
}
    if(isset($_POST['logowanie']))
        {
            if(isset($_POST['wyplata']))
                {
                    $liczba2 = $_POST['kwota'];
                    echo "Wypłacono ".$liczba2." złotych. Dziękujemy za skorzystanie z naszych bankomatów!";
                }
            else
                echo "";
        }
    else 
        echo "";
?>