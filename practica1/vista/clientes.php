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
            <p class="title">Pantalla de clientes</p>
           <form>

           <div class="input_dos">
            <legend>Cedula
           <input type="text" name="cedula" 
		   pattern="[0-9\b]{1,2}[.]{1}[0-9\b]{3}[.]{1}[0-9\b]{3}" 
		   required 
		   maxlength="10" 
		   minlength="3" 
		   title="La cedula debe ser en este formato Ej: (12.345.678) y debe contener entre 7 y 9 digitos"
           placeholder="Ej: 12.345.678"
           >
           </legend>
            </div>

            <div class="input_dos alin">
            <legend>Apellido
           <input type="text" pattern="[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,15}" 
		   required
		   maxlegth="15"
		   minlength="3"
		   title="El apellido debe estar entre 3 y 15 letras"
           placeholder="Ej: apellido"
           >
           </legend>
            </div>

            <div class="input_dos">
            <legend>Nombre
           <input type="text" name="nombres" 
		   pattern="[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,15}" 
		   required
		   maxlegth="15"
		   minlength="3"
		   title="El nombre debe estar entre 3 y 15 letras"
           placeholder="Ej: nombre"
           >
           </legend>
            </div>

            <div class="input_dos alin">
            <legend>Direccion
           <input type="text" name="direccion" 
		   pattern="[A-Za-z0-9\b\s\u00f1\u00d1\u00E0\u00FC#.,-]{3,15}" 
		   required
		   maxlegth="25"
		   minlength="8"
		   title="La dirección debe estar entre 8 y 25 caracteres"
           placeholder="La dirección debe estar entre 8 y 25 caracteres"
           >
           </legend>
            </div>
            
           <div class="input_dos">
           <legend>Telefono
           <input type="text" name="telefono" 
		   pattern="[0-9]{4}[-]{1}[0-9]{7,8}" 
		   required
		   maxlegth="25"
		   minlength="8"
		   title="Has coincidir con el formato 0123-4567894"
           placeholder="Ej: 0123-4567894"
           >
           </legend>
           
           </div>

           <div class="input_dos alin">
           <legend>Correo
           <input type="text" name="correo" 
		   pattern="[A-Za-z_\u00f1\u00d1\u00E0-\u00FC-]{3,15}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,3}" 
		   required
		   maxlegth="50"
		   title="Has coincidir con el formato ejemplo@mail.com"
           placeholder="Ej: ejemplo@mail.com"
           >
           </legend>
           
           </div>
            
           <?php require_once('comunes/botones.html'); ?>
               
            
            


           </form>
        
        

        

        
        </div>
    </section>
</body>
</html>