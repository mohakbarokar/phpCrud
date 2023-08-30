<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$testo = $_POST['testo'];
//Connecting to db here
$conn_string = "host=localhost port=5432 dbname=test user=lamb password=bar"; // change the db credentials here
$conn = pg_connect("host=jhhdevopsterra-pgsql-server.postgres.database.azure.com port=5432 dbname=postgres user=azureuser password=Db@Password1234");
//inserting data order
$query1 = "INSERT INTO prenotazioni  (id,nome_rich, cognome_rich, email_rich,oggetto_rich) VALUES (1,'$name','$surname', '$email','$testo')";
//execute the query here
$result = pg_query($conn, $query1 ); //if you are using pg_query and $conn is the connection resource
// Interni
$query = "";
if( !empty( $_POST['iname'] ) ) {

foreach( $_POST['iname'] as $key => $iname ) {

$isurname = empty( $_POST[$key]['isurname'] ) ? NULL : $_POST[$key]['isurname'];
$iemail = empty( $_POST[$key]['iemail'] ) ? NULL : $_POST[$key]['iemail'];
$query .= " ( '$iname', '$isurname', '$iemail' ) ";
}
}
if( !empty( $query ) ) {

$query2 = "INSERT INTO interni (nome_int, cognome_int, email_int) VALUES ".$query;
$result = pg_query($conn, $query2 ); //if you are using pg_query and $conn is the connection resource
}
// Esterni
$query = "";
if( !empty( $_POST['ename'] ) ) {
foreach( $_POST['ename'] as $key => $ename ) {
$esurname = empty( $_POST[$key]['esurname'] ) ? NULL : $_POST[$key]['esurname'];
$eemail = empty( $_POST[$key]['eemail'] ) ? NULL : $_POST[$key]['eemail'];
$query .= " ( '$ename', '$esurname', '$eemail' ) ";
}
}

if( !empty( $query ) ) {

$query3 =  "INSERT INTO esterni  (nome_est, cognome_est, email_est) VALUES  " . $query;
$result = pg_query($conn, $query3 ); //if you are using pg_query and $conn is the connection resource
}

?>