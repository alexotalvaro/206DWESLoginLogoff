<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
?>
<h3>Detalle </h3>
<table>
    <?php
    print '<tr><td>';
    print $_SESSION['usuarioDWES206LoginLogoff']->toString();
    print '</tr></td>';
    ?>
</table>
<?php
print '<br>';
print phpinfo();
?>
<form>
    <input class="botonLogin" type="submit" name="salir" value="Salir">
</form>