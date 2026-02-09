<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    $conn = mysqli_connect("localhost", "root","", "kadra");
    $q = "SELECT * FROM pracownicy";
    $result = mysqli_query($conn, $q);

    while($row = mysqli_fetch_row($result)){
        echo "<p>".$row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]."</p>";
    }

?>