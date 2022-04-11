<form method="GET">
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
$query = "Select * from uczniowie";
$run =mysqli_query($con,$query);
 
if($run){
 echo "Formularz zatwierdzony!<br>";
 while ($r = mysqli_fetch_assoc($run)){
     echo "ID: ".$r['ID']."<br>Imię: ".$r["Name"]."<br>Nazwisko: ".$r["Surname"]."<br>Średnia: ".$r["Score"];
 }
}
else{
 echo "Formularz jest błędny. :(";
}
 }

?>