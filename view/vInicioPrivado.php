<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
?>
<form>
    <label> Usuario:</label>
    <input type = "text" name = "usuario">
    <br>
    <label> Contraseña: </label>
    <input type="password" name="contra">
    <br>
    <label> Descripción del Usuario</label>
    <input type="text" name="descripcion">
    <br>
    <input type="submit" name="crear" value="Crear" >
    <label>Idioma: </label>
    <select name="idioma" id="IDIOMA">
        <option>ES</option>
        <option>EN</option>
        <option>PT</option>
    </select>
</form>