<?php
$conn = mysqli_connect("localhost","root","","bazafb");

// Dodawanie posta
if(isset($_POST['dodajpost'])){
    $autor = "Anon"; // póki co stały autor, później można podmienić na login z sesji
    $tresc = $_POST['tresc'];
    $q = "INSERT INTO posty(autor, tresc) VALUES('$autor', '$tresc')";
    mysqli_query($conn, $q);
}

// Pobieranie postów
$posty = mysqli_query($conn, "SELECT * FROM posty ORDER BY id DESC");

// Pobieranie użytkowników
$uzytkownicy = mysqli_query($conn, "SELECT login FROM uzytkownicy");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Strona Główna</title>
<style>
body{
    margin: 0;
    background-color: rgb(25, 28, 48);
    font-family: Arial, sans-serif;
    color: white;
    display: flex;
}

/* Lewy panel – lista użytkowników */
#left{
    width: 220px;
    height: 100vh;
    background-color: rgb(42, 46, 69);
    padding: 20px;
}

.user{
    background-color: rgb(70, 74, 102);
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 10px;
    cursor: pointer;
    text-align: center;
}
.user:hover{
    background-color: rgb(100, 105, 145);
}

/* Główny panel – posty */
#main{
    flex-grow: 1;
    padding: 40px;
}

/* Formularz dodawania posta */
form{
    margin-bottom: 30px;
}
textarea{
    width: 70%;
    height: 100px;
    border-radius: 10px;
    padding: 10px;
    font-size: 16px;
}

button{
    background-color: #8c8c8c;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    margin-top: 10px;
    cursor: pointer;
}

/* Wyświetlanie postów */
.post{
    background-color: rgb(42, 46, 69);
    padding: 20px;
    border-radius: 15px;
    margin-bottom: 20px;
}
.autor{
    color: rgb(181, 189, 245);
    font-weight: bold;
    margin-bottom: 5px;
}
.data{
    font-size: 12px;
    color: #ccc;
    margin-bottom: 10px;
}
</style>
</head>
<body>

<!-- Lewa kolumna – lista użytkowników -->
<div id="left">
    <h3>Użytkownicy</h3>
    <?php while($u = mysqli_fetch_assoc($uzytkownicy)){ ?>
        <div class="user" onclick="window.location='slawek.php'">
            <?= $u['login'] ?>
        </div>
    <?php } ?>
</div>

<!-- Główna kolumna – posty -->
<div id="main">
    <h2>Dodaj nowy post</h2>
    <form method="post">
        <textarea name="tresc" placeholder="Co nowego?"></textarea><br>
        <button type="submit" name="dodajpost">Dodaj post</button>
    </form>

    <h2>Posty</h2>
    <?php while($p = mysqli_fetch_assoc($posty)){ ?>
        <div class="post">
            <div class="autor"><?= $p['autor'] ?></div>
            <div class="data"><?= $p['data_dodania'] ?></div>
            <div class="tresc"><?= nl2br($p['tresc']) ?></div>
        </div>
    <?php } ?>
</div>

</body>
</html>
