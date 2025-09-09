<?php

$conn = mysqli_connect('localhost', 'root', '', 'message');
if($conn->connect_errno){
    echo "Error dans la connection de site";
}

?>