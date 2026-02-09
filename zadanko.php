<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            background-color: lightblue;
            height: 100px;
            width: 100px;
            border: 1px black solid;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "kadra");
    $q = "SELECT * FROM pracownicy";
    $result = mysqli_query($conn, $q);

    while($row = mysqli_fetch_row($result)){
        echo"<table>";
        echo"<td>".$row[0];
        echo"<td>".$row[1];
        echo"<td>".$row[2];
        echo"<td>".$row[3];
        echo"<td>".$row[4];
        echo"<td>".$row[5];
        echo"</table>";
    }
    echo"</br>";
    echo"</br>";
    echo"</br>";

    echo"<table>";
    for($i=1; $i<=10; $i++){
        echo"<tr>";
        for($j=1; $j<=10; $j++){
        echo"<td>"."</td>";
        }
        echo"</tr>";
    }
    echo"</table>";
    ?>
</body>
</html>