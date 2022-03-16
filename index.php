<?php
   include 'create_tables.php';
	include 'routers.php';
	include 'cors.php';
?>
   
<?php 
  //<a href="?listAll">List All</a>
   if (isset($_GET['listAll'])) {
      allPokes($lista);
   }
	if (isset($_GET['id'])) {
      getPokeByID($_GET['id']);
   }
?>