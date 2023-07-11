<?php

$connection = mysqli_connect('localhost', 'victor', '123456', 'nyumbani');

if(!$connection)
{
    echo "Connection Failed : " . mysqli_connect_error($connection);
}

?>