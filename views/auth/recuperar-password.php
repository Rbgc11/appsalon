<h1 class="nombre-pagina">Recuperar Contraseña</h1>
<p class="descripcion-pagina">Escribe tu Nueva Contraseña a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return; ?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Tu Nueva Contraseña">
    </div>

    <input type="submit" value="Guardar Nuevo Password" class="boton"> 
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta? Obtener una</a>
</div>