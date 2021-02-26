<div class="sidebar-container">
    <div class="admin-name">
      <div><i class="fa fa-user-circle"></i> Hola, Ramacci</div>
    </div>
      <div class="linea"></div>
    <div class="menu-container">
      <a href="/productos">
        <div class="menu-item">
          <i class="fa fa-bookmark"></i>
          <div class="item-text">Artículos</div>
        </div>
      </a>
      <a href="">
        <div class="menu-item">
          <i class="fa fa-bullhorn"></i>
          <div class="item-text">Novedades</div>
        </div>
      </a>
      <a href="/insta">
        <div class="menu-item">
            <i class="fa fa-instagram"></i>
          <div class="item-text">Imagenes de tu Instagram</div>
        </div>
      </a>
      <a href="/">
        <div class="menu-item">
          <i class="fa fa-desktop"></i>
          <div class="item-text">Ir al sitio</div>
        </div>
      </a>
      <a href="/logout" onclick="return confirm('¿Cerrar sesión?')">
        <div class="menu-item">
          <i class="fa fa-reply"></i>
          <div class="item-text">Cerrar sesión</div>
        </div>
      </a>

    </div>
  </div>

  <style scoped>

  .sidebar-container {
    width: 100%;
    box-sizing: border-box;
    height: 100vh;
    background-color: #d9764c;
    color: #fff;
    font-family: sans-serif;
    font-size: 18px;
  }
  .admin-name {
    margin: 20px 0;
  }
  .admin-name i {
    font-size: 25px;
    padding: 0 20px;
  }
  .linea {
    height: 1px;
    background-color: #fff;
    margin: 20px 0;
  }
  .menu-item {
    padding: 15px 20px;
    display: grid;
    grid-template-columns: 30px auto;
  }
  .menu-item:hover {
    background-color: #555;
  }
  a {
    color: inherit;
    text-decoration: none;
  }

  </style>

  <style>
  * {
    margin: 0;
    padding: 0;
  }

  </style>
