<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum | Alexandru Kovacs</title>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="get" enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            <fieldset class="login">
                <legend>Iniciar sesión</legend>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" required>

                <label for="password">Contraseña</label>
                <input type="password" name="password" required>

                <label for="fotoDePerfil">Imagen de perfil</label>
                <input type="file" name="fotoDePerfil" required>

                <input type="checkbox" id="condiciones" name="condiciones" value="acepto" required>
                <label for="condiciones">He leído y acepto las <a href="#">condiciones de uso.</a></label>
                
                <input type="image" name="image" alt="Login" src="img/iniciar-sesion.png">
            </fieldset>
            
            <fieldset class="datosEducativos">
                <legend>Datos educativos</legend>
                    <p>Selecciona el lenguaje que más domines:</p>

                    <input type="radio" id="php" name="lenguajes" value="PHP" required>
                    <label for="php">PHP</label>

                    <input type="radio" id="css" name="lenguajes" value="CSS" required>
                    <label for="css">CSS</label>

                    <input type="radio" id="javascript" name="lenguajes" value="JavaScript" required>
                    <label for="javascript">JavaScript</label><br>

                    <label for="formacion">Selecciona tu formación:</label>
                        <select name="formacion" id="formacion" required>
                            <option value=""></option>
                            <option value="Grado Medio">Grado Medio</option>
                            <option value="Grado Superior">Grado Superior</option>
                            <option value="Bachillerato">Bachillerato</option>
                            <option value="Universidad">Universidad</option>
                        </select>

                    <label for="ingles">Nivel de inglés</label>
                    <input type="range" name="ingles" required>
                    
            </fieldset>

            <fieldset class="datosPersonales">
                <legend>Datos Personales</legend>
                    <div class="row">
                        <div class="column">
                            <input type="hidden" name="oculto" value="Contenido oculto">

                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email">

                            <label for="telefono">Teléfono</label>
                            <input type="tel" name="telefono">

                            <label for="url">URL de tu perfil de Linkedn</label>
                            <input type="url" name="linkedIn">

                            <label for="number">Edad</label>
                            <input type="number" name="edad" required>
                        </div>
                        <div class="column">
                            <label for="birthday">Fecha de cumpleaños</label>
                            <input type="datetime-local" name="birthday">

                            <label for="color">Color favorito</label>
                            <input type="color" name="color" required>

                            <label for="descripcion">Descripción sobre tí:</label><br>
                            <textarea name="descripcion" id="descripcion" cols="20" rows="5"  placeholder="Breve descripción..."></textarea>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="horarios">
                    <legend>Horarios</legend>
                    <div class="row">
                        <div class="column">
                            <label for="mes">Mes</label>
                            <input type="month" name="mes">

                            <label for="semana">Semana</label>
                            <input type="week" name="semana">

                            <label for="hora">Hora</label>
                            <input type="time" name="hora" id="hora">
                        </div>
                        <div class="column">
                            <label for="datetime">¿Qué día quieres emprezar a trabajar?</label>
                            <input type="datetime" name="datetime">

                            <label for="horarios">Modalidad de trabajo:</label>
                                <select name="horarios[]" id="horarios" multiple required>
                                    <option value="Presencial">Presencial</option>
                                    <option value="Semipresencial">Semipresencial</option>
                                    <option value="En remoto">En remoto</option>
                                    <option value="Híbrido">Híbrido</option>
                                </select>

                            <label for="buscar">Buscar</label>
                            <input type="search" id="buscar" name="buscar" placeholder="Buscar...">
                        </div>
                    </div>   
                </fieldset>
            <div class="botones">
                <input type="submit" value="Generar CV" name="enviar" id="boton">
                <button type="reset" id="boton">Borrar formulario</button>
            </div>
    </form>
</body>
</html>

<?php

if (isset($_GET['enviar'])) {

    echo '<fieldset class="curriculum">
                <legend>Mi curriculum</legend>
                    <div>';
                        
                        // DATOS INICIO DE SESIÓN
                        echo '<p>Mi nombre es ' . $_GET['nombre'] . ' ' . $_GET['apellidos'] . ', tengo ' . $_GET['edad'] . 
                        ' años y mi palabra favorita es "' . $_GET['password'] . '". Además, ' . $_GET['condiciones'] . ' las condiciones de uso.</p>';
                        
                        // DATOS EDUCATIVOS (EN UN ARRAY)
                        echo '<div>';
                        $datosEducativos = [
                            'Lenguaje preferido: ' => $_GET['lenguajes'],
                            'Formación: ' => $_GET['formacion'],
                            'Nivel de inglés: ' => $_GET['ingles']
                        ];
                        
                        echo '<h3>Datos educativos: </h3><ul>';
                        foreach($datosEducativos as $clave => $valor) {
                            echo '<li>' . $clave . $valor . '</li>';
                        }
                        echo '</ul></div>';

                        // DATOS PERSONALES
                        echo '<div>
                                <h3>Datos personales: </h3>
                                    <ul>';
                        echo '<li>Correo electrónico: ' . $_GET['email'] . '</li>';
                        echo '<li>Teléfono: ' . $_GET['telefono'] . '</li>';
                        echo '<li>Perfil de LinkedIn: ' . $_GET['linkedIn'] . '</li>';
                        echo '<li>Edad: ' . $_GET['edad'] . '</li>';
                        echo '<li>Fecha de cumpleaños: ' . $_GET['birthday'] . '</li>';
                        echo '<li>Color favorito: <span class="color" style="background-color:' . $_GET['color'] . '"></span></li>';
                        echo '<li>Breve descripción: ' . $_GET['descripcion'] . '</li></ul></div>';

                        // DATOS DE LOS HORARIOS
                        echo '<div>
                                <h3>Horarios: </h3>
                                    <ul>';
                        echo '<li>Hora: ' . $_GET['hora'] . '</li>';
                        echo '<li>Día que quieres empezar a trabajar: ' . $_GET['datetime'] . '</li>';
                        echo '<li>Semana: ' . $_GET['semana'] . '</li>';
                        echo '<li>Mes: ' . $_GET['mes'] . '</li>';
                        echo '<li>Modalidad: ';
                        foreach($_GET['horarios'] as $clave => $valor) {
                            echo $valor . ', ';
                        }
                        echo '</li>';
                        echo '<li>Contenido a buscar: ' . $_GET['buscar'] . '</li>';
                        echo '<li>Imagen de perfil: ' . $_GET['fotoDePerfil'] . '</li>';
                        echo '<li>Contenido oculto (hidden): ' . $_GET['oculto'] . '</li></ul></div>';

                    echo '</div></fieldset>';

}

?>


