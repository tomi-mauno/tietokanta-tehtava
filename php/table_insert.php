
<?php

if(isset($_POST['submit'])) { 
    insert();
} 
   
    function insert(){

        $table = $_POST['table'];

        $values = [$_POST['value0'] , $_POST['value1']  , $_POST['value2'] , $_POST['value3']  , $_POST['value4']];
        $columns = [$_POST['column0'] ,  $_POST['column1']  , $_POST['column2'] , $_POST['column3']  ,  $_POST['column4']];

        $values= implode(",", $values);
        $columns = implode(",", $columns);  

        for ($x = 0; $x <= 100; $x++) {
            $values = trim($values, ",");
            $columns = trim($columns, ",");
        } 
                        
        $values = explode(",", $values);

        function add_quotes(&$x){

            if ($x == ","){

            }else{
                $x =  "'".$x."'" .",";
            }

            }

        array_walk($values, "add_quotes");

        $values = implode($values);
        $values = substr_replace($values ,"", -1);
    
        $servername = "localhost";
        $username = "root";
        $password = "salasana";
        $database = "ajax_test";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    }

?>    