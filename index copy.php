<?php
   include 'create_tables.php';
	include 'routers.php';
	include 'cors.php';
?>
   
<?php 
  //<a href="?listAll">List All</a>
   /* if (isset($_GET['listAll'])) {
      allPokes($lista);
   } */
	/* if (isset($_GET['id'])) {
      getPokeByID($_GET['id']);
   } */

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <script src="./node_modules/jquery/dist/jquery.js" ></script>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    </head>
<body>
  <div class="arrows">
    <img src="./icons/angulo-esquerdo.svg" id="esquerdo" class="arrow"></img>
    <img src="./icons/angulo-direito.svg" id="direito" class="arrow"></img>
  </div>
  <div class="container">
    <div class="header"><span class="nome">nome</span><span class="tipo">tipo</span></div>
    <img id="img" src="./pokemons/0.png" alt="loading pokemon...">
    <div class="status">
        <p class="item-status">Vida  <img src="./icons/hp.png" alt="icon" /><span class="vida">Vida</span></p>
        <p class="item-status">Ataque  <img src="./icons/atk.png" alt="icon"><span class="ataque">Ataque</span></p>
        <p class="item-status">Defesa  <img src="./icons/def.png" alt="icon"/><span class="defesa">Defesa</span></p>
        <p class="item-status">Super atk  <img src="./icons/spa.png" alt="icon"/><span class="sa">Ataque</span></p>
        <p class="item-status">Super def  <img src="./icons/spd.png" alt="icon"/><span class="sd">Defesa</span></p>
        <p class="item-status">Velocidade <img src="./icons/spe.png" alt="icon"/><span class="velocidade">Vel</span></p>
    
    </div>
  </div>
  <div class="footer"></div>
<script>
  let conn = false;
  // A $( document ).ready() block.
$( document ).ready(function() {
  let id = 1;
  getPokemon(id);

  $("#esquerdo").click(function() {
    id = id-1;
    getPokemon(id);
  });
  $("#direito").click(function() {
    id = id+1;
    getPokemon(id);
    
  });
  function getPokemon(id){
      $data = getPokeByID(id)
      $(".nome").text(JSON.parse(data).nome+" #"+JSON.parse($data).id);
      $(".tipo").text(JSON.parse(data).tipo);
      $(".vida").text(JSON.parse(data).hp);
      $(".ataque").text(JSON.parse(data).atk);
      $(".defesa").text(JSON.parse(data).def);
      $(".sa").text(JSON.parse(data).spa);
      $(".sd").text(JSON.parse(data).spd);
      $(".velocidade").text(JSON.parse(data).spe);

      JSON.parse(data).id == 3 ? 
      $("#img").attr("src", "./pokemons/"+JSON.parse(data).id+".webp")
      : $("#img").attr("src", "./pokemons/"+JSON.parse(data).id+".png"); 
      
   }
  </script>    
</body>
</html>
?>