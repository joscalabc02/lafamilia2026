<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro de Contactos</title>

<style>

/* RESET */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #eaeded;
}

/* HEADER tipo Amazon */
.header {
    background: #131921;
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 20px;
}

/* CONTENEDOR */
.container {
    max-width: 500px;
    margin: 40px auto;
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}

/* TITULO */
h2 {
    margin-bottom: 20px;
}

/* INPUTS */
input, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

/* BOTON */
button {
    width: 100%;
    padding: 12px;
    background: #f0c14b;
    border: 1px solid #a88734;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

button:hover {
    background: #ddb347;
}

/* LINK */
.link {
    display: block;
    text-align: center;
    margin-top: 15px;
    text-decoration: none;
    color: #0066c0;
}

/* FOOTER */
footer {
    text-align: center;
    padding: 15px;
    background: #131921;
    color: white;
    margin-top: 30px;
}

/* 📱 RESPONSIVE */
@media (max-width: 600px) {

    .container {
        margin: 20px;
        padding: 15px;
    }

    h2 {
        font-size: 18px;
        text-align: center;
    }
}

</style>
</head>

<body>

<div class="header">
    Registro de Contactos
</div>

<div class="container">

<h2>Registrar Contacto</h2>

<form action="guardar.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="correo" placeholder="Correo" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <input type="text" name="direccion" placeholder="Dirección" required>

    <textarea name="mensaje" placeholder="Escribe un mensaje..." required></textarea>

    <button type="submit">Guardar</button>
</form>

<a href="lista.php" class="link">Ver contactos</a>

</div>

<footer>
    <p>&copy; 2027 Negocio. Todos los derechos reservados.</p>
</footer>

</body>
</html>