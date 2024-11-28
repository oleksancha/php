<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0;
            color: #4a004e;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffb3d9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .container div {
            margin-bottom: 15px;
        }
        .container p {
            margin: 0 0 5px;
            font-weight: bold;
        }
        .container input[type="text"],
        .container input[type="number"],
        .container input[type="date"],
        .container input[type="tel"],
        .container input[type="email"],
        .container input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 2px solid #ff66a3;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .container input[type="checkbox"] {
            transform: scale(1.2);
            accent-color: #ff66a3;
        }
        .container input[type="text"]:focus,
        .container input[type="number"]:focus,
        .container input[type="date"]:focus,
        .container input[type="tel"]:focus,
        .container input[type="email"]:focus,
        .container input[type="password"]:focus {
            border-color: #ff3385;
            outline: none;
            box-shadow: 0 0 8px rgba(255, 51, 133, 0.2);
        }
	button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
    </style>
</head>
<body>
<form action="pierwshe.php" method="get"
    <div class="container">
        <div>
            <p>Imię</p>
            <input type="text">
        </div>
        <div>
            <p>Nazwisko</p>
            <input type="text">
        </div>
        <div>
            <p>Ulica</p>
            <input type="text">
        </div>
        <div>
            <p>Dom</p>
            <input type="number">
        </div>
        <div>
            <p>Mieszkanie</p>
            <input type="number">
        </div>
        <div>
            <p>Miasto</p>
            <input type="text">
        </div>
        <div>
            <p>Data urodzenia</p>
            <input type="date">
        </div>
        <div>
            <p>Telefon</p>
            <input type="tel" value="+48">
        </div>
        <div>
            <p>Email</p>
            <input type="email">
        </div>
        <div>
            <p>Płeć</p>
            <input type="text" placeholder="man/woman">
        </div>
        <div>
            <p>Prawo jazdy</p>
            <input type="checkbox">
        </div>
        <div>
            <p>Hasło</p>
            <input type="password">
        </div>
        <div>
            <p>Uwagi</p>
            <input type="text">
        </div>
		<button type="submit" name="button">OK</button>
    </div>
	</form>
	 <?php
 
    if(isset($_GET["button"])) 
 {
 $imie=$_GET["name"];
 echo($imie."<br>");
 
 $Nazwisko=$_GET["surname"];
 echo($Nazwisko."<br>");
 
 $Ulica=$_GET["street"];
 echo($Ulica."<br>");
 
 $Dom=$_GET["house"];
 echo($Dom."<br>");
 
 $Mieszkanie=$_GET["apartment"];
 echo($Mieszkanie."<br>");
 
 $Miasto=$_GET["city"];
 echo($Miasto."<br>");
 
 $Data_urodzenia=$_GET["birthdate"];
 echo($Data_urodzenia."<br>");
 
 $Telefon=$_GET["phone"];
 echo($Telefon."<br>");
 
 $Email=$_GET["email"];
 echo($Email."<br>");
 
 $Plec=$_GET["gender"];
 echo($Plec."<br>");
 
 $Prawo_jazdy=$_GET["driving_license"];
 echo($Prawo_jazdy."<br>");
 
 $Haslo=$_GET["password"];
 echo($Haslo."<br>");
 
 $Uwagi=$_GET["comments"];
 echo($Uwagi."<br>");
 
 }
else
 {
  echo("Anonim");
    }
    ?>
</body>
</html>