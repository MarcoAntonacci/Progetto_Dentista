<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="background-color:rgb(5, 37, 43); padding: 5%; font-family: 'Poppins', sans-serif;">
    <h1 style="color:rgb(255, 126, 6);  font-size: 24px;  text-align: center; font-family: 'Poppins', sans-serif;" >Benvenuto {{$contact['user']}} in Pinco Pallino </h1>
    <p style="color: black; font-size: 16px; font-family: 'Poppins', sans-serif;padding-bottom: 5%;"> Verrai presto contattato dal signor Pinco</p>
    <p style="color: black; font-size: 16px; font-family: 'Poppins', sans-serif;padding-bottom: 5%;">Riepilogo dati:</p>
    <ul>
        <li>Nome Utente:  {{$contact['user']}} </li>
        <li>Messaggio: {{$contact['message']}} </li>
    </ul>
</div>    
</body>
</html>