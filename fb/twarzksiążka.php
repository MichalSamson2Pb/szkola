<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        margin: 0;
        height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: rgb(25, 28, 48);
        font-family: Arial, sans-serif;
        color: #2b2b2b;
    }
    header{
        font-size: 50px;
        font-weight: bold;
        margin-bottom: 40px;
        color: rgb(181, 189, 245);
    }
    form{
        background-color: rgb(42, 46, 69);
        height: 260px;
        width: 420px;
        padding-top: 40px;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input{
        text-align: center;
        height: 30px;
        width: 260px;
        border: 1px solid #555;
        background-color: #eee;
        margin-bottom: 15px;
        border-radius: 5px;
    }
    button{
        height: 32px;
        width: 120px;
        background-color: #8c8c8c;
        border: none;
        color: #fff;
        margin: 5px;
        border-radius: 5px;
    }
</style>

</head>
<body>
    <header>
        LOGOWANIE
    </header>
    <form method="post">
        <input type="text" name="login" placeholder="Login"><br><br>
        <input type="password" name="haslo" placeholder="Password"><br><br>
        <button type="submit" name="loginbtn">log in</button>
        <button type="submit" name="signin">sign in</button><br>
    </form>

    <?php
    $conn = mysqli_connect("localhost","root","","bazafb");

    if(isset($_POST['signin'])){
        $login = $_POST["login"];
        $haslo = $_POST["haslo"];
        $q = "INSERT INTO uzytkownicy(login,haslo) VALUES('$login','$haslo')";
        $result1 = mysqli_query($conn, $q);

        if($result1){
            header("location: stronaglowna.php");
        }
    }

    if(isset($_POST['loginbtn'])){
        $login = $_POST["login"];
        $haslo = $_POST["haslo"];
        $q2 = "SELECT * FROM uzytkownicy WHERE login = '$login' AND haslo = '$haslo'";
        $result2 = mysqli_query($conn, $q2);

        if(mysqli_num_rows($result2)){
            header("location: stronaglowna.php");
        }
    }
    ?>
</body>
</html>
