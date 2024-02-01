
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cinema_finale";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname, "3306");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "<p>CONNESSIONE SUCCESFULLATA</p>";
            $name = $_POST['name'];
            $bday = $_POST['bday'];
            $nationality = $_POST['nationality'];
            $codpro = $_POST['codpro'];
            $id = $_POST['id'];
            $voto = $_POST['voto'];

            $sql = 
            "INSERT INTO `attori` (`CodAttore`, `Nome`, `AnnoNascita`, `Nazionalita`) 
            VALUES (NULL, '$name', $bday, '$nationality')"

            "DELETE FROM proiezioni WHERE proiezioni.CodProiezione = $codpro"
            
            "UPDATE recensioni SET recensioni.Voto=$voto WHERE recensioni.IDRecensioni=$id";
            if (mysqli_query($conn, $sql)) 
            {
                echo "Database created successfully";
              } else {
                echo "Error creating database: " . mysqli_error($conn);
              }
              $conn->close();

              echo "<br><a href=\"index.html\"> torna indietro </a>"
        ?>

            

