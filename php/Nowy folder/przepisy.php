<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog kulinarny</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="przepisy.php?id=1">Sernik</a> <br>
        <a href="przepisy.php?id=2">Sałatka</a> <br>
        <a href="przepisy.php?id=3">Pankejki</a> <br>
        <a href="przepisy.php?id=4">Nugetsy</a> <br>
        <a href="przepisy.php?id=5">Łosoś</a> <br>
        <a href="przepisy.php?id=6">Kociołek</a> <br>
        <a href="przepisy.php?id=7">Jagnięcina</a> <br>
        <a href="przepisy.php?id=8">Hamburgery</a> <br>
        <a href="przepisy.php?id=9">Eklerki</a> <br>
        <a href="przepisy.php?id=10">Churros</a> <br>

        <p>Michał Samson</p>
    </nav>
    <main>
        <h1></h1>
        <img src="separator.png" alt="przepis">
        <p>Alergeny: </p>
        <h2>składniki: </h2>
        <ul>
            <li>Lorem 1 kg</li>
            <li>Ipsum 2 szt.</li>
            <li>Dolor 200 g</li>
            <li>Sit amet (szczypta)</li>
        </ul>
        <p></p>
    </main>
    <section>
        <h1>Blog kulinarny</h1>
    </section>

    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'przepisy');


        if (isset($_GET["id"])) {
            $id = (int)$_GET["id"];

            $query = "SELECT potrawy.nazwa, rodzaje.rodzaj FROM potrawy JOIN rodzaje ON potrawy.idRodzaje = rodzaje.idRodzaje WHERE potrawy.idPotrawy = $id";

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "<h1>" . $row["rodzaj"] . "</h1>";
            } 
}
        if (isset($_GET["id"])) {
            $id = (int)$_GET["id"];

            $query2 = "SELECT nazwa, trudnosc, kalaorie FROM potrawy WHERE idPotrawy = $id";

            $result2 = mysqli_query($conn, $query2);

            if (mysqli_num_rows($result2) > 0) {
                $row = mysqli_fetch_assoc($result2);
                echo "<h2>" . $row["nazwa"] . "</h2>";
                echo "<p>Trudnosc";
                if($row['trudnosc'] ==3){
                    echo "<p>TRUDNY</p>";
                }
                if($row['trudnosc'] == 2){
                    echo "<p>SREDNI</p>";
                }
            } 
}
?>
</body>
</html>