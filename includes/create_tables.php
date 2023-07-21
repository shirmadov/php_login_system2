<?php
include_once('dbh.inc.php');

$sql = "CREATE TABLE users (
    userId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersName varchar(128) NOT NULL,
    usersEmail varchar(128) NOT NULL,
    usersUid varchar(128) NOT NULL,
    usersPwd varchar(128) NOT NULL
)";

if( $conn->query($sql) === TRUE ){
    echo "Table MyGuests created successfully";
}
else{
    echo "Error creating table: ".$conn->error;
}

$conn->close();

?>