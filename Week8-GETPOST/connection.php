<?php
define ('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define ('DB_USERNAME','bd567b6ba42458');
define('DB_PASSWORD', '1b99eb9a');
define('DB_DATABASE', 'webdev');

$db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if ($db->connect_errno) {
    die('Connectfailed[' . $db->connect_error. ']');

}

?>




