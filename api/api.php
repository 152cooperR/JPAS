<?php
define("key", "KEY");
function get_mysql(){

    $mysql = new mysqli("localhost","root","root","WebLogins", 8889);

    if($mysql->connect_error){
        die($mysql->connect_error);
    }
    return $mysql;
}
get_mysql();
function addUser($username, $password){

    get_mysql()->query("INSERT INTO Users ('Username', 'Password', 'LastLogin') VALUES ($username , $password, TIMESTAMP");

}
function removeUser($username){

    get_mysql()->query("DELETE FROM Users WHERE Username = $username");

}
function addService($type, $name, $state, $date){



}
