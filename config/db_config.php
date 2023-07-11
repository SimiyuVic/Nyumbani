<?php

//Connect to database
$connection = mysqli_connect('localhost', 'victor', '123456', 'nyumbani');

//Check connection
if(!$connection)
{
    echo "Connection Error : " . mysqli_connect_error($connection);
}


?>