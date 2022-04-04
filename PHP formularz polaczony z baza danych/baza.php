
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
  echo 'rekord zostal dodany';


  mysqli_close($conn);

?>


