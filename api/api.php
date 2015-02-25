<?php
define ("ENCRYPTION_KEY", ")(*&^%$$%%^%$%#$%#$^&^&*^");
function get_mysql(){

    $mysql = new mysqli("localhost","root","root","JPAS", 8889);

    if($mysql->connect_error){
        die($mysql->connect_error);

    }
    return $mysql;
}
get_mysql();
function addUser($username, $password){

    get_mysql()->query("INSERT INTO WebLogins (Username, Password) VALUES ('$username', '$password')");

}
function removeUser($username){

    get_mysql()->query("DELETE FROM `Users` WHERE Username = '$username''");

}
function addService($type, $FirstName, $LastName, $date){

    get_mysql()->query("INSERT INTO services (type, FirstName,  LastName, date) VALUES
 ('$type', '$FirstName', '$LastName', $date)");

}


function removeService($id){

    get_mysql()->query("DELETE FROM Services WHERE id = $id");

}

function changeServiceState($id){

    if(get_mysql()->query("SELECT * FROM Services WHERE id = $id")){

        get_mysql()->query("SET state = TRUE WHERE id = $id");

    }

    if(get_mysql()->query("")){

        get_mysql()->query("SELECT * FROM services WHERE id = $id SET State = FALSE");

    }

}

function getServiceState($id){

     return get_mysql()->query("SELECT * FROM services WHERE 'id' = $id")->fetch_assoc();

}

/**
 * Returns an encrypted & utf8-encoded
 */
function encrypt($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}

/**
 * Returns decrypted original string
 */
function decrypt($encrypted_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}
