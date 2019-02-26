      <nav class="navbar navbar-default navbar-fixed-top be-top-header w3-card 4 <?php echo $sistem_color;?>">
        <div class="container-fluid">
          <div class="navbar-header <?php echo $sistem_color;?>"><a  class="be-toggle-left-sidebar"><span class="icon mdi mdi-menu"></span></a>
          </div>
          <div class="be-right-navbar <?php echo $sistem_color;?>">
            <ul class="nav navbar-nav navbar-right be-user-nav ">
              <li class="dropdown "><a href="layouts-offcanvas-menu.html#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle "><img src="img/Sistema/avatar.png" alt="Avatar"><span class="user-name ">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info <?php echo $sistem_color;?>">
                      <div class="user-name">Túpac Amaru</div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  <li onclick="Cerrar_Sesion();" style="cursor: pointer;"><a><span class="icon mdi mdi-power"></span> Cerrar Sesion</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Desarrollador</span></div>
        <!--       <div class="search-container">
              <div class="input-group input-group-sm">
                <input type="text" name="search" placeholder="Buscar roles" class="form-control search-input"><span class="input-group-btn">
                  <button type="button" class="btn btn-primary">Buscar</button></span>
              </div>
            </div> -->
          </div>
        </div>
      </nav>