<?php
    function uusi(){

        $servername = "Opetus1";
        $username = "s1800844";
        $password = "ud3MGem3";
        $database = "s1800844";
        
        $tunnus = $_POST['tunnus'];
        $salasana = $_POST['salasana'];

        $kaikki = array("");
        
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT ID FROM tunnukset";
        $result = $conn->query($sql);

        if ($result = $conn->query($sql)) {
  
            while ($row = $result->fetch_assoc()) {

                $rivi = $row["ID"];
                array_push($kaikki, $rivi);
            
            }
    
            $result->free();
        }

        $lasku = count($kaikki);
        $id = $lasku++;

        $sql = "INSERT INTO tunnukset (ID, Tunnus, Salasana) VALUES ('$id', '$tunnus', '$salasana')";
        $result = $conn->query($sql);

        if ($conn->query($sql) === TRUE) {

            echo "<script>alert('Tunnukset luotu')</script>";

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }
        print($id);
        $conn->close();
    }
?>