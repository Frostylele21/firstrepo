<form method="GET">
    <input name="nr"> Podaj numer </input><br>
    <input name="name"> Podaj imię </input><br>
    <input name="surname"> Podaj nazwisko </input><br>
    <input name="score"> Podaj średnią </input><br>
    <input type="submit" name="sub"></input>
</form>

<?php
 $user= 'root';
 $pass= '';
 $host = 'localhost';
 $base = '3fg'; //tutaj nazwa twojej bazy
 $con= mysqli_connect($host,$user,$pass, $base);
 mysqli_select_db($con,$base);
 
 if(isset($_GET['sub']))
 {
 $nr = $_GET['nr'];
 $name = $_GET['name'];
 $surname = $_GET['surname'];
 $score = $_GET['score'];
$query = "Insert into uczniowie(ID, Name, Surname, Score) values('$nr', '$name', '$surname', '$score')";
$run =mysqli_query($con,$query);
 
if($run){
 echo "Formularz zatwierdzony!";
}
else{
 echo "Formularz jest błędny. :(";
}
 }

 
 
?>