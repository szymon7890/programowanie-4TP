<?php

        $servername = "localhost";  // Nazwa serwera (lokalny)
        $username = "root";         // Nazwa użytkownika bazy danych
        $password = "";             // Hasło użytkownika (puste w przypadku domyślnego użytkownika root)
        $dbName = "persondate";     // Nazwa bazy danych

        // Nawiązanie połączenia z bazą danych
        $conn = new mysqli($servername, $username, $password, $dbName);

        // Sprawdzenie czy połączenie zostało poprawnie nawiązane
        if ($conn->connect_error) {
            die("Nie połączono się z bazą danych: " . $conn->connect_error);
        }

        // Pobranie danych z formularza
        if (isset($_POST['submit'])) {
            $number = $_POST["number"];
            $name = $_POST["name"];
            $lastName = $_POST["lastName"];
            $colorEyes = $_POST["colorEyes"];

            // Zapytanie do bazy danych
            $sql = "SELECT personImage, fingerImage FROM person WHERE number = '$number' AND name = '$name' AND lastName = '$lastName' AND colorEyes = '$colorEyes'";
            $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Wyświetlenie zdjęcia
            $row = $result->fetch_assoc();
            $faceImagePath = $row['personImage'];
            $fingerImagePath = $row['fingerImage'];
            // Wyświetlenie obrazów z plików
        } else {
            echo "Brak danych lub błąd logowania.";
        }

        $conn->close();

    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<div id="container">
    <header></header>
    <article></article>
    <nav>
        <div class="grid-container">
            <div class="grid-item">
                <div id="form">
                    <!-- Formularz po lewej stronie -->
                    <form method="POST">
                        <label>Numer: </label><input type="text" name="number" id="number"><br>
                        <label>Imię: </label><input type="text" name="name" id="name"><br>
                        <label>Nazwisko:</label><input type="text" name="lastName" id="lastname"><br>
                        <p id="colorEyeText">Kolor oczu:</p>
                        <input type="radio" id="niebieskie" class="colorEye" name="colorEyes" value="niebieskie">
                        <label for="niebieskie">niebieskie</label><br>
                        <input type="radio" id="zielone" class="colorEye" name="colorEyes" value="zielone">
                        <label for="zielone">zielone</label><br>
                        <input type="radio" id="piwne" class="colorEye" name="colorEyes" value="piwne">
                        <label for="piwne">piwne</label><br>
                        <input type="submit" id="submit" name="submit" value="OK">
                    </form>
                </div>        
            </div>
            
            <div class="grid-item">
                <!-- Miejsce na wyświetlenie zdjęć z bazy danych -->
                <?php if (!empty($faceImagePath) && !empty($fingerImagePath)): ?>
                    <img class="imagesPhotoPerson" src="<?php echo $faceImagePath; ?>">
                    <img class="imagesPhotoPerson" src="<?php echo $fingerImagePath; ?>">
                <?php else: ?>
                    <p>Brak zdjęć do wyświetlenia</p>
                <?php endif; ?>
            </div>
            
        </div>
    </nav>
    <aside></aside>
    <footer></footer>
</div>

</body>
</html>
