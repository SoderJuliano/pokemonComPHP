<?php
include 'conn.php';

if ($conn->connect_error) {
   echo "error while connecting";
}
// $conn = mysqli_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
// mysqli_select_db($dbname);

$query = "Select * from $table";

$result = $conn->query($query);

$lista = array();

if($result){
    while($row = mysqli_fetch_array($result)){
        //$p = ["nome" => $row["nome"], "tipo" => $row["tipo"]];
        array_push($lista, $row);
    }
}


function allPokes($lista){
  	echo stripslashes(json_encode($lista));
}

function getPokeByID($id, $lista){
  if($id>0){
   	echo stripslashes(json_encode($lista[$id-1]));
  }
}

$conn->close();
?>