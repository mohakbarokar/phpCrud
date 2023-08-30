<?php


define("HOSTNAME", "jhhdevopsterra-pgsql-server.postgres.database.azure.com");
define("USERNAME", "azureuser");
define("PASSWORD", "Db@Password1234");
define("DATABASE", "postgres");

$connection = pg_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

$db_connection = pg_connect("host=jhhdevopsterra-pgsql-server.postgres.database.azure.com dbname=dbname user=username password=password");


if (!$connection) {
    die("Connection Failed");
} else {
    echo "Connected";
}

?>