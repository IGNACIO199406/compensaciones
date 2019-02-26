<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
         <?php require_once "librerias/head.php";  
$sistem_color="w3-black";
         ?>
   </head>
  <body>
    <div class="be-wrapper be-offcanvas-menu be-fixed-sidebar ">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header w3-card 4 <?php echo $sistem_color;?>">
        <div class="container-fluid">
          <div class="navbar-header <?php echo $sistem_color;?>"><a  class="be-toggle-left-sidebar"><span class="icon mdi mdi-menu"></span></a>
          </div>
          <div class="be-right-navbar <?php echo $sistem_color;?>">
            <ul class="nav navbar-nav navbar-right be-user-nav ">
              <li class="dropdown "><a href="layouts-offcanvas-menu.html#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle "><img src="assets/img/avatar.png" alt="Avatar"><span class="user-name ">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info <?php echo $sistem_color;?>">
                      <div class="user-name">Túpac Amaru</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li><a href="layouts-offcanvas-menu.html#"><span class="icon mdi mdi-face"></span> Account</a></li>
                  <li><a href="layouts-offcanvas-menu.html#"><span class="icon mdi mdi-settings"></span> Settings</a></li>
                  <li><a href="layouts-offcanvas-menu.html#"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Desarrollador</span></div>
              <div class="search-container">
              <div class="input-group input-group-sm">
                <input type="text" name="search" placeholder="Buscar roles" class="form-control search-input"><span class="input-group-btn">
                  <button type="button" class="btn btn-primary">Buscar</button></span>
              </div>
            </div>
          </div>
        </div>
      </nav>


      <div class="be-left-sidebar <?php echo $sistem_color;?>">
        <div class="left-sidebar-wrapper">
         <!--  <div class="divider w3-center">Desarrolladores</div>
                <div class="divider w3-center"><img src="img/Sistema/csv.png" style="width: 40%; height: 80px;"></div>
                   -->
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider w3-center">Desarrolladores</li>
                  <?php

                  // for ($i=0; $i < 2; $i++) { 
                  ?>
                  <li class="active" style='cursor: pointer;'><a  href="<?php echo "Hola"; ?>"><i class='<?php echo "mdi mdi-delete";?>'></i><span> <?php echo " Hola";?></span></a></li>
                  <li class="" style='cursor: pointer;'><a  href="<?php echo "Hola"; ?>"><i class='<?php echo "mdi mdi-delete";?>'></i><span> <?php echo " Hola";?></span></a></li>
                    <?php
                  // }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
   
    <script src="js/prettify.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      
      	//Runs prettify
      	prettyPrint();
      });
    </script>
  </body>
</html>