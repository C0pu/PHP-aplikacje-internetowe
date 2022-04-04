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
<h3>Formularz rejestracyjny</h3>

<form action='formularz.php' method='POST'>
<p><b>Dane osobowe</b></p>
Imie: <br> <input type='text' name='imie'><br>
Nazwisko: <br> <input type='text' name='nazwisko'><br>
Adres: <br> <input type='text' name='adres'><br>
Telefon: <br><input type='number' name='telefon'><br>
<hr style="color:black">
<p><b>Dane logowania</b></p>
Login: <br><input type='text' name='login'><br>
Haslo: <br><input type='password' name='haslo'><br><br>
<input type='checkbox' name='akceptuj' checked>Akcceptuje <a href='regulamin.htlm'>regulamin</a> sklepu<br><br>



<input type='reset' value='WYCZYSC'> <input type='submit' value='REJESTRUJ'>

</form>
</div>
</body>
</html>