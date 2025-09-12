<?php
include '../app/configuracao.php';
include '../app/autoload.php';
/*
$db= new Database;

$db->query("SELECT * FROM posts");
foreach($db->resultados() as $post){
   echo $post->titulo.'<br>';
}

$db->query("SELECT * FROM posts ORDER BY id DESC");
$db->resultado();
echo $db->resultado()->titulo;

$id = 1;
$db->query("DELETE FROM posts WHERE id = :id");
$db->bind(":id", $id);
$db->executa();
echo "<hr>Total Resultados: ".$db->totalResultados();
*/
/*
date_default_timezone_set('America/Cuiaba');
$id = 2;
$usuarioId = 100;
$titulo = 'Titulo Editado';
$texto = 'Texto Editado';
$criadoEm = date('Y-m-d H:i:s');
$db->query("UPDATE posts SET usuario_id = :usuario_id, titulo = :titulo, texto=:texto, criado_em=:criadoEm WHERE id=:id");
$db->bind(":id",$id);
$db->bind(":usuario_id",$usuarioId);
$db->bind(":titulo",$titulo);
$db->bind(":texto",$texto);
$db->bind(":criadoEm",$criadoEm);

$db->executa();
*/
/*
$usuarioId = 12;
$titulo= 'a volta de quem não foi';
$texto = 'texto texto texto texto';

$db->query("INSERT INTO posts(usuario_id, titulo, texto) VALUES (:usuario_id, :titulo, :texto)");

$db->bind(":usuario_id", $usuarioId);
$db->bind(":titulo", $titulo);
$db->bind(":texto", $texto);
$db->executa();
echo '<hr>Total resultado: '.$db->totalResultados();
echo '<hr>Último id: '.$db->ultimoIdInserido();
*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= APP_NOME ?></title>

   <link rel="stylesheet" href="<?=URL?>/public/bootstrap/css/bootstrap.css"/>
   <link rel="stylesheet" href="<?=URL?>/public/css/estilos.css"/>
   
   <script src="<?URL?>/public/bootstrap/js/bootstrap.js"></script>
   
</head>
<body>
   <?php
   include '../app/views/header.php';
   $rotas = new Rota();
   include '../app/views/footer.php';
   //$rotas->url();
   ?>
</body>
</html>