<?php



// open mysql data base
function open_db()
{
    $host = "localhost";
    $user  = "root";
    $pass = "";
    $db = "cakeshop";
    
    $con_db=new mysqli($host, $user, $pass, $db);
    if ($con_db->connect_error)
    {
        die("Erron in connection: " . $con_db->connect_error);

    }
    return  $con_db;
}
// close database
function close_db($con_db)
{
    $con_db->close();
}


?>
