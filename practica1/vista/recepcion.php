<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once('comunes/cabeza.html'); ?>
    <title>Recepción de Mercancia</title>
</head>
<body>
        <header class="header_usuarios">
        <?php require_once('comunes/index.html'); ?>
        
        </header>
        
        <div class="wrap acomo">
        <p class="title">Pantalla de Recepcion de Mercancia</p>
        <br>
        <ul class="tabs">
            <li><a href="#tab1"><span class="fas fa-file-invoice"></span><span class="tab-tex">Datos de factura</span></a></li>
            <li><a href="#tab2"><span class="fas fa-info-circle"></span><span class="tab-tex">Detalles de factura</span></a></li>
            <li><a href="#tab3"><span class="fas fa-map-marker-alt"></span><span class="tab-tex">Ubicacion de productos</span></a></li>
            
        </ul>

        <div class="secciones">
        
            <form>
            
            <article id="tab1">
            <p class="title_hide">datos de factura</p>
              <div class="input_dos">
          <legend>Nº Factura
         <input type="text">
         </legend>
          </div>

          <div class="input_dos alin">
          <legend>Proveedor
         <input type="text">
         </legend>
          </div>

          <div class="input_dos">
          <legend>Fecha
         <input type="date">
         </legend>
          </div>

          <div class="input_dos alin">
          <legend>Monto
         <input type="text">
         </legend>
          </div>
          </article>

          <article id="tab2">
          <p class="title_hide">detalles de factura</p>
          <br>
              <p>DETALLES DE LA FACTURA </p>
          </article>

          <article id="tab3">
          <p class="title_hide">ubicacion de productos</p>
          <br>    
          <p>LUGAR DONDE SE DEPOSITARA LA COMPRA </p>
          </article>

          <?php require_once('comunes/botones.html'); ?>
               
            </form>

            
        </div>
        </div>
        
</body>
</html>