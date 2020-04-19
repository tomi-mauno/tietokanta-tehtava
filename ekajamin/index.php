<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
<link rel="stylesheet" type="text/css" href="../css/style1.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://kit.fontawesome.com/3226a380a5.js"></script>
<link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet"> 
</head>
<body>

<container>

<h1><i class="fas fa-database"></i> | Database manager</h1>
<div id="nav">

    <ul id="buttons">

        <li id="create_db">Create database</li>
        <li id="create_table">Create table</li>
        <li id="table_insert">Insert to table</li>
        <li id="print_info">Print info</li>
        <li id="join_table">Join tables</li>

    </ul>

</div>

<div id="default" class="display">

this is the default

</div>

<div id="first" class="nav-option content-boxes">
<div class="form_container">
    <form method='post'>    
        <h2>Create Database<h2>
        <input placeholder='Database name' name='dbname' type='text' size='35'>   
        <br>
        <button name='submit' type='submit' class="button"><span>Create Database</span></button>
            
    </form>
</div>

</div>

<div id="second" class="nav-option content-boxes">

    <form method='post'>    
        <h2>Create Table</h2>
        <input placeholder='Database name' name='dbname' type='text' size='35'>
        <br>
        <input placeholder='Table name' name='tablename' type='text' size='35'>      
        <br>
        <button name='submit' type='submit' class="button"><span>Create table</span></button>
                
    </form>

</div>

<div id="third" class="nav-option content-boxes">

    <form method='post'>    
        <h2>Insert To Table</h2>
        <input placeholder='Database name' name='dbname' type='text' size='35'>
        <br>
        <input placeholder='Table name' name='tablename' type='text' size='35'>      
        <br>
        <input placeholder='Data to insert' name='data' type='text' size='35'>
        <br>
        <button name='submit' type='submit' class="button"><span>Submit data</span></button>
        
    </form>

</div>

<div id="fourth" class="nav-option content-boxes">

    <form method='post'>    
        <h2>Print Info</h2>
        <input placeholder='Database name' name='dbname' type='text' size='35'>
        <br>
        <input placeholder='Table name' name='tablename' type='text' size='35'>       
        <br>
        <input placeholder='Row name' name='printname' type='text' size='35'>       
        <br>
        <button name='submit' type='submit' class="button">Print info</button>
        
    </form>
        <p class="databoxtext">Data gets shown here.</p>
        <div class="databox"></div>
</div>

<div id="fifth" class="nav-option content-boxes">

    <form method='post'>    
        <h2>Join Tables</h2>
        <input placeholder='Database name' name='dbname' type='text' size='35'>
        <br>
        <p>First Table</p>
        <input placeholder='Table name' name='tablename' type='text' size='35'>       
        <br>
        <p>Second Table</p>
        <input placeholder='Table name' name='tablename' type='text' size='35'>       
        <br>
        <p>Row to "join"</p>
        <input placeholder='Row name' name='joinname' type='text' size='35'>       
        <br>
        <select id="joins" name="joinlist" form="joinform">
            <option value="innerjoin">INNER JOIN</option>
            <option value="leftjoin">LEFT JOIN</option>
            <option value="rightjoin">RIGHT JOIN</option>
            <option value="fulljoin">FULL JOIN</option>
        </select>
        <br>
        <button name='submit' type='submit' class="button">Join tables</button>
        
    </form>
    <p class="databoxtext">Data gets shown here.</p>
    <div class="databox"></div>

</div>
</container>

<script src="../js/script1.js"></script>

<?php include "../php/create_db.php"?>
<?php include "../php/create_table.php"?>
<?php include "../php/table_insert.php"?>
<?php include "../php/print_info.php"?>
<?php include "../php/join_table.php"?>
</body>
</html>    
