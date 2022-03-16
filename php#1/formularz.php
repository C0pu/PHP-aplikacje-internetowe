<html>
<head>
    <title>Formularz #1</title>
</head>
<body>

<h1>PO UZUPELNIENIU DANEGO FORMULARZA POD KTORYM POKAZUJE SIE BLAD (cos takiego <a href="https://prnt.sc/RJseWr2vWIS2">https://prnt.sc/RJseWr2vWIS2</a>), BLAD ZNIKNIE. WSZYSTKO JEST ZROBIONE POPRAWNIE.</h1>



<?php
 
 echo 'Zadanie 1<br><img src="zdjecia/zadanie1.png"<br><br>=================== Rozwiazanie zadania pierwszego ===================';


?>

<h3>Formularz pierwszy</h3>
<form action="" method="POST">
    <p>Imie <input type="text" name="imie"> <input type="submit" name="wyslij" value="Dalej"></p>


</form>


<?php


 if(empty($_POST['imie'])){
     echo 'nie wypelniles formularza';
 }else{
echo $imie.', witaj na mojej stronie.';
 }




?>

<p style="color:red"> Kod PHP zadania pierwszego: <br><br>$imie =  $_POST['imie'];<br>

if(empty($_POST['imie'])){<br>
    echo 'nie wypelniles formularza';<br>
}else{<br>
echo $imie.', witaj na mojej stronie.';<br>
}<br>
</p>



<?php
 echo 'Zadanie 2<br><img src="zdjecia/zadanie2.png"<br><br>=================== Rozwiazanie zadania drugiego ===================';
?>

<h3>Formularz drugi</h3>

<!-- aby dzialalo dodac action="wypelniony.php ;) "-->

<form action="" method="POST">

uzytkownik: <input type="text" name="uzytkownik"><br><br>
haslo: <input type="password" name="haslo"><br><br>
<input type="submit" name="wyslij" value="Wyslij zapytanie">
</form>

<?php


if(empty($_POST['uzytkownik']) || empty($_POST['haslo'])){
    echo 'podaj login lub haslo';
}
elseif($_POST['uzytkownik']=='mateusz' && $_POST['haslo']=='123'){
    echo 'witaj w serwisie wprowadziles poprawne dane';
}else{
    echo 'zle dane do logowania';
}


?>

<p style="color:red"> Kod PHP zadania drugiego<br><br>

if(empty($_POST['uzytkownik']) || empty($_POST['haslo'])){<br>
    echo 'podaj login lub haslo';<br>
}<br>
elseif($_POST['uzytkownik']=='mateusz' && $_POST['haslo']=='123'){<br>
    echo 'witaj w serwisie wprowadziles poprawne dane';<br>
}else{<br>
    echo 'zle dane do logowania';<br>
}<br>
</p>

<?php
 echo 'Zadanie 3<br><img src="zdjecia/zadanie3.png"<br><br>=================== Rozwiazanie zadania trzeciego ===================';
?>

<h3>Formularz trzeci</h3>

<form action='' method='POST'>

ilosc monitorow: <input type='number' name='monitory'><br><br>
ilosc tabletow: <input type='number' name='tabletow'><br><br>
ilosc klawiatur: <input type='number' name='klawiatur'><br><br>
<input type="submit" name="potwierdz" value="Potwierdz zamowienie">


</form>
<?php

echo ('Twoje zamowienie to: '.$_POST['monitory'].' monitorów, '.$_POST['tabletow'].' tabletow, '.$_POST['klawiatur'].' klawiatur.' )


?>
<p style="color:red"> Kod PHP zadania trzeciego<br><br>

echo ('Twoje zamowienie to: '.$_POST['monitory'].' monitorów, '.$_POST['tabletow'].' tabletow, '.$_POST['klawiatur'].' klawiatur.' )
}<br>
</p>


<?php
 echo 'Zadanie 4<br><img src="zdjecia/zadanie4.png"<br><br>=================== Rozwiazanie zadania czwartego ===================';
?>
<h3>Formularz czwarty</h3>

<form action="" method="POST">

Imie: <input type='text' name='imie'><br><br>
Nazwisko: <input type='text' name='nazwisko'><br><br>
Chce zamowic:<br>
<input type="checkbox" name="picie" value="Cola">Cola<br>
<input type="checkbox" name="picie" value="Fanta">Fanta<br>
<input type="checkbox" name="picie" value="Sprite">Sprite<br>
<input type="submit" value="Wyslij">
</form>

<?php


echo 'Imie: '.$_POST['imie'].'<br>';
echo 'Nazwisko: '.$_POST['nazwisko'].'<br>';
if(isset($_POST['picie'])){
    echo 'Zamowienie: '.$_POST['picie'].'<br>';
}else{
    echo 'nie wybrano napoju';
}

?>
<p style="color:red"> Kod PHP zadania czwartego<br><br>

echo 'Imie: '.$_POST['imie'].'br';<br>
echo 'Nazwisko: '.$_POST['nazwisko'].'br';<br>
if(isset($_POST['picie'])){<br>
    echo 'Zamowienie: '.$_POST['picie'].'br';<br>
}else{<br>
    echo 'nie wybrano napoju';<br>
}
</p>

<?php
 echo 'Zadanie 5<br><img src="zdjecia/zadanie5.png"<br><br>=================== Rozwiazanie zadania piątego ===================';
?>
<h3>Formularz piąty</h3>



<form method="post" action="">
Podaj liczbe a: <input type="number" name="liczba1"><br>
Podaj liczbe b: <input type="number" name="liczba2"><br><br>
<input type="radio" name="dzialanie" value="Dodawanie"> Dodawanie
<input type="radio" name="dzialanie" value="Odjemowanie"> Odejmowanie
<input type="radio" name="dzialanie" value="Mnozenie"> Mnozenie
<input type="radio" name="dzialanie" value="Dzielenie"> Dzielenie<br><br>
<input type="submit" value="Oblicz"><br><br>
</form>
<?php
$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];
echo 'Wynikiem '.$_POST['dzialanie'].' liczby '.$_POST['liczba1'].' do liczby '.$_POST['liczba2'].' wynosi ' ;
switch($_POST['dzialanie']) {
  case "Dodawanie":
    echo $liczba1 + $liczba2; break;
  case "Odjemowanie":
    echo $liczba1 - $liczba2; break;
  case "Mnozenie":
    echo $liczba1 * $liczba2; break;
  case "Dzielenie":
    echo $liczba1 / $liczba2; break; }
?> 


<p style="color:red"> Kod PHP zadania piątego<br><br>

$liczba1 = $_POST['liczba1'];<br>
$liczba2 = $_POST['liczba2'];<br>
echo 'Wynikiem '.$_POST['dzialanie'].' liczby '.$_POST['liczba1'].' do liczby '.$_POST['liczba2'].' wynosi ' ;<br>
switch($_POST['dzialanie']) {<br>
  case "Dodawanie":<br>
    echo $liczba1 + $liczba2; break;<br>
  case "Odjemowanie":<br>
    echo $liczba1 - $liczba2; break;<br>
  case "Mnozenie":<br>
    echo $liczba1 * $liczba2; break;<br>
  case "Dzielenie":<br>
    echo $liczba1 / $liczba2; break; }
</p>

</body>
</html>