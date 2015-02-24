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
function addService($type, $FirstName, $LastName, $state, $date, $id){

    get_mysql()->query("INSERT INTO Services ('type','FirstName','LastName','state') VALUES ($type, $FirstName, $LastName, $state, $date, $id)");

}


function removeService($id){

    get_mysql()->query("DELETE FROM Services WHERE id = $id");

}

function changeServiceState($id){

    if(get_mysql()->query("SELECT * FROM Services WHERE id = $id")){

        get_mysql()->query("SET state = TRUE WHERE id = $id");

    }

    if(get_mysql()->query("")){

        get_mysql()->query("SET state = FALSE WHERE id = $id");

    }

}

function getServiceState($id){

     return get_mysql()->query("SELECT * FROM services WHERE 'id' = $id")->fetch_assoc();

}
