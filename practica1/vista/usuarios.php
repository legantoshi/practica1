<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once('comunes/cabeza.html'); ?>
    <title>Usuarios</title>
</head>
<body>
    <header class="header_usuarios">
    <?php require_once('comunes/index.html'); ?>
    </header>
    
    <section class="section_usuarios acomo">
        <div>
        <p class="title">Pantalla de Usuarios</p>
        <br>
           <form>
           
           <div class="input_usuarios">
           <legend>Cedula
           <input type="text" id="cedula">
           <span id="scedula"></span>
           </legend>
           
            <div class="input_dos">
            <legend>Usuario
           <input type="text" id="usuario">
           <span id="susuario"></span>
           </legend>
            </div>
           <div class="input_dos alin">
           <legend>Clave
           <input type="password" id="clave">
           <span id="sclave"></span>
           </legend>
           
           </div>
            
           <?php require_once('comunes/botones.html'); ?>
               
            
            


           </form>
        
        

        

        
        </div>
    </section>
</body>
</html>