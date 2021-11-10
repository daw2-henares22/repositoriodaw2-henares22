<html>
    <head>
        <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="N4P111formprocess.php" method="post">
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" /></td>
            </tr>
            <td>Tipo De Pelicula<br/></td>
            <td>
                <select name="tipo_pelicula">
                    <option value="">Selecciona el tipo de pelicula...</option>
                    <option value="Accion">Acción</option>
                    <option value="Drama">Drama</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Ciencia-Ficcion">Ciencia Ficción</option>
                    <option value="Guerra">Guerra</option>
                    <option value="Otros">Otros...</option>
                </select>
            </td>
            <tr>
                <td colspan="2" style="text-align: center;">
                <input type="submit" name="submit" value="Añadir"/></td>
            </tr>
        </table>
    </form>
</body>
</html>