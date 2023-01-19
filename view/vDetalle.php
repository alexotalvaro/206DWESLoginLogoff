<?php
/*
 * @package: LoginLogoff
 * @author: Alejandro Otálvaro Marulanda
 */
?>
<h3>Detalle </h3>
<?php
//var_dump($_SESSION['usuarioDWES206LoginLogoff']);
//$_SESSION['usuarioDWES206LoginLogoff']->getCodUsuario();
//print_r($_SESSION);
//var_dump($_SESSION['usuarioDWES206LoginLogoff']->toString());
foreach ($_SESSION as $clave => $valor) {
    if (is_object($valor)) {
        echo $_SESSION['usuarioDWES206LoginLogoff']->toString();
        foreach ($valor as $c => $v) {
            echo 'culo';
            echo $_SESSION['usuarioDWES206LoginLogoff']->toString();
        }
    }
}
?>
<form>
    <input class="botonLogin" type="submit" name="salir" value="Salir">
</form>