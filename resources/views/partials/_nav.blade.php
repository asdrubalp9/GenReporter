<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Gen Reporter</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/') ? "active" : "" }}" ><a href="/usuarios">Usuarios</a></li>
            <li class="{{ Request::is('/Reportes') ? "active" : "" }}" ><a href="/reportes">Reportes</a></li>
            <li class="{{ Request::is('/Seguimientos') ? "active" : "" }}" ><a href="/seguimientos">Seguimientos</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Hola Fulano!
                  <span class="glyphicon glyphicon-user"></span> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
              <li><a href="#">Modificar Perfil</a></li>
                <li><a href="#">Cerrar Sesion</a></li>
                <!-- 
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                -->
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>