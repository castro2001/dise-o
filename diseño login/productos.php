<?php include('template/cabecera.php');?>
<?php
include('admin/config/bd.php');

$sentenciaSQL=$conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($listaLibros as $libro ){ ?>

<div class="col-md-3">
   <div class="card">
       <img src="./img/<?php echo $libro['imagen']?>" class="card-img-top" alt="" srcset="">
       <div class="card-body">
           <h4 class="card-title" ><?php echo $libro['nombre'] ?></h4>
           <a href="./archivos/<?php echo $libro['archivos']    ?>" target="blank" class="btn btn-primary">ver mas</a>

       </div>
   </div>
</div>

<?php }?>

<?php
 
 
?>


<?php
include('template/footer.php');
?>

