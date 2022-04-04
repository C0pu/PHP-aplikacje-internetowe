<html lang='pl'>
<head>
    <title>Sklep Muzyczny</title>
    <link rel="stylesheet" href="muzyka.css">
</head>
<body>
 <div class='banner'>   
<h1>Sklep   Muzyczny </h1>
</div>


<div class='panel_lewy'> 

<h2>NASZA OFERTA</h2>
<table>
<ol>
    <li>Instrumenty muzyczne</li>
    <li>Sprzęt audio</li>
    <li>Płyty CD</li>
</ol>

</table>
</div>



<div class='panel_prawy'>

<?php

$localhost='localhost';
$user='root';
$passwd='';
$dbname='muzyczny_sklep';
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$adres=$_POST['adres'];
$telefon=$_POST['telefon'];
$login = $_POST['login'];
$haslo = $_POST['haslo'];


$conn = new mysqli($localhost,$user,$passwd,$dbname);

$sql2 = "insert into konta values('','$login','$haslo')";
$sql = "insert into uzytkownicy values('','$imie','$nazwisko','$adres','$telefon')";
mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);
  mysqli_close($conn);


echo ' Konto'.$imie.' '.$nazwisko.' zostalo zarejestrowane w sklepie muzycznym';
?>
</div>
</body>
</html>

