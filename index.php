<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">
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
        <li id="insert">Insert to table</li>
        <li id="insert">Print info</li>
        <li id="insert">Join tables</li>

    </ul>

</div>

<div id="default" class="display">

this is the default

</div>

<div id="first" class="nav-option">
<div class="form_container">
    <form method='post'>    
            
        <input placeholder='käyttäjätunnus' name='tunnus' type='text' size='35'>
        <br>
        <input placeholder='salasana' name='salasana' type='password' size='35'>      
        <br>
        <button name='submit' type='submit'>Luo tunnukset</button>
            
    </form>
</div>

</div>

<div id="second" class="nav-option">

    <form method='post'>    
            
        <input placeholder='käyttäjätunnus' name='tunnus' type='text' size='35'>
        <br>
        <input placeholder='salasana' name='salasana' type='password' size='35'>      
        <br>
        <button name='submit' type='submit'>Luo tunnukset</button>
                
    </form>

</div>

<div id="third" class="nav-option">

    <form method='post'>    
            
        <input placeholder='käyttäjätunnus' name='tunnus' type='text' size='35'>
        <br>
        <input placeholder='salasana' name='salasana' type='password' size='35'>      
        <br>
        <button name='submit' type='submit'>Luo tunnukset</button>
        
    </form>

</div>
</container>

<script src="js/script1.js"></script>

<?php include "php/create_db.php"?>
<?php include "php/create_table.php"?>
<?php include "php/table_insert.php"?>
<?php include "php/print_info.php"?>
<?php include "php/join_table.php"?>
</body>
</html>    
