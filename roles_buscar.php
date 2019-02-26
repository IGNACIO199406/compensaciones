<?php
require_once "Config/conexion_database.php";
$conn = new System_Conexion();
$conexion=$conn->Conexion();

    if (isset($_GET['q'])) {
       $q = mysqli_real_escape_string($conexion,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
    }
    else{
      $q="";
    }
       
     $aColumns = array('Nombre');
     $sTable = "rol";
     $sWhere = " WHERE Status=1  ";
    if ( isset($_GET['q'])!= "")
    {
$_SESSION['Busqueda_Tablas']=$q;
      $sWhere = "WHERE Status=1 and   ( ";
      for ( $i=0 ; $i<count($aColumns) ; $i++ )
      {
        $sWhere .= $aColumns[$i]." LIKE '".$q."%' OR ";
      }
      $sWhere = substr_replace( $sWhere, "", -3 );
      $sWhere .= ')';
    }
    //contenido  aaa
    include 'pagination.php';
    $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
    $per_page = 6; 
    $adjacents  = 2; 
    $offset = ($page - 1) * $per_page;
    
    $count_query   = mysqli_query($conexion, "SELECT count(*) AS numrows FROM $sTable  $sWhere ");
    $row= mysqli_fetch_array($count_query);
    $numrows = $row['numrows'];
    $total_pages = ceil($numrows/$per_page);
    $reload = 'consultas.php';

    $sql="SELECT * FROM  $sTable  $sWhere order by Nombre LIMIT $offset,$per_page";
    $query = mysqli_query($conexion, $sql);
    if ($numrows>0){
      
   ?>
<div class="w3-padding w3-col m12 w3-center total_usuarios_encontradas" >
<div class="w3-container  w3-card  w3-green w3-round">
          <div class="w3-col m12  w3-padding">
            Registros encontrados <?php echo $query->num_rows;?>
         </div>
      </div>
      </div>
<?php
while( $row = mysqli_fetch_assoc($query)) {
$Registro_ID=$row['ID'];
$Registro_Nombre=$row['Nombre'];
$Registro_Imagen=$row['Archivo'];

// for ($i=0; $i <=17 ; $i++) { 

      ?>
  <div class="w3-padding w3-col m3 " >
    <div class="w3-hover-shadow">
        <div class="w3-col m12 ">
           <a href="">
          <button   class=" w3-card w3-col m12  w3-center w3-padding w3-button w3-blue">Detalle</button> </a>
        </div>
<div class="w3-container  w3-card w3-hover-shadow w3-white w3-round">

         <p class="w3-center"><img src="<?php echo "img/roles/".$Registro_Imagen; ?> " style="width:100%; height:150px;" class=""></p>
          <div class="w3-col m12  w3-padding ">
           <div class="recorte-texto w3-center"> <?php echo $Registro_Nombre;?></div>
         </div>
      </div>
      </div>
      </div>



      <?php
//         # code...
// }
    }
    ?>
     <spdivan class="w3-col m12 w3-center"><?php
     if ($numrows>$per_page) {
      echo paginate($reload, $page, $total_pages, $adjacents);
     }
     ?>
        </div>
          <?php
  }
  else
    { 

      ?>
      <div class="w3-padding w3-col m12 w3-center total_usuarios_encontradas" >
<div class="w3-container  w3-card  w3-red w3-round">
          <div class="w3-col m12  w3-padding">
           <?php echo "No se encontraron resultados...";?>
         </div>
      </div>
      </div>
    <?php
  }
  ?>
</div>
</div>
<br>
