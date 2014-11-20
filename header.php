<!--| Header
=========================================================================== |-->

<header class="header-main">
  <h1><a href="index.php"><span class="none">Portal 180</span></a></h1>
  <h2><span class="none">Portal de noticias y actualidad sobre Uruguay y el Mundo</span></h2>
  <div class="header-data-container">
    <div class="header-data">
      <div class="left">
        <div class="fecha"><?php echo date("l j"); ?> de <?php echo date("F"); ?> de <?php echo date("Y"); ?></div>
        <div class="clima">
          <div class="icono"><img src="img/.jpg" width="" height=""></div>
          <div class="pronostico"><span>Claro</span> 12º Min. - 22º Max</div>
        </div>
        <div class="cotizacion">
          <div class="moneda"><span>Dólar</span> $23.30 - $24.10</div>
        </div>
      </div>
      <div class="right">
        <div class="search">
          <form>
            <input type="search" placeholder="buscar" />
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <nav class="header-menu">
    <div class="items itemplus">
      <h4><i class="fa fa-caret-down"></i>lo más leído</h4>
      <div class="menu-hover-container none">
        <div class="menu-hover">
          <a class="buttons prev" href="#"><i class="fa fa-chevron-left"></i></a>
          <div class="viewport">
            <ul class="overview">
              <li><?php include("notita.php"); ?></li>
              <li><?php include("notita.php"); ?></li>
              <li><?php include("notita.php"); ?></li>
              <li><?php include("notita.php"); ?></li>
              <li><?php include("notita.php"); ?></li>
              <li><?php include("notita.php"); ?></li>
              <li><?php include("notita.php"); ?></li>
              <li><?php include("notita.php"); ?></li>
            </ul>
          </div>
          <a class="buttons next" href="#"><i class="fa fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <div class="items">
      <h4><a href="seccion.php">Política</a></h4>
    </div>
    <div class="items">
      <h4><a href="seccion.php">deportes</a></h4>
    </div>
    <div class="items">
      <h4><a href="seccion.php">tiempo libre</a></h4>
    </div>
    <div class="items">
      <h4><a href="seccion.php">darwin</a></h4>
    </div>
    <div class="items">
      <h4><a href="seccion.php">elecciones</a></h4>
    </div>
    <div class="items">
      <h4><a href="seccion.php">otras secciones</a></h4>
    </div>
  </nav>
</header>
<div class="banners-header-container"></div> <!-- carga banners-header.php -->
</div>