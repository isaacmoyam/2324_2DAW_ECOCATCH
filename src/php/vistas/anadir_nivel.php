<?php
/**
 * Página principal para añadir niveles.
 *
 * PHP version 8.2
 *
 * @category Nivel
 * @package  Gestión_Nivel
 * @author   Equipo A
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 */
?>
<main id="anadirNiveles">
    <a id="btnVolver" href="index.php?control=nivel_con">Volver</a>
    <form id="formBasura" action="index.php?control=nivel_con&metodo=crear" method="POST">
        <label for="nombre">(*) Nombre:</label>
        <input type="text" name="nombre" placeholder="Nombre nivel">
        <label for="valor">(*) Items:</label>
        <input type="text" name="cantidadItems" placeholder="Cantidad de items">
        <label for="imagen">(*) Velocidad:</label>
        <input type="text" name="velocidadBarco" placeholder="Velocidad del barco">
        <p id="msgCampos"></p>
        <h1 id="tituloAnadirMensajes">Añadir mensaje</h1>
        <table id="tablaDinamica">
            <tr>
                <th>Contenido</th>
                <th>Puntos Requeridos</th>
                <th colspan="2">Tipo</th>
                
            </tr>
            <tr>                
                <td><input name="contenido[]" type="text" placeholder="Contenido del mensaje"></td>
                <td><input name="puntosHasta[]" type="text" placeholder="Puntos requeridos"></td>
                <td colspan="2">
                    <select name="tipo[]">
                        <option value="A">Antes del nivel</option>
                        <option value="B">Durante el nivel</option>
                        <option value="C">Después del nivel</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="button" id="btnAgregarFila">Agregar mensaje</button>
        <input type="submit" value="Añadir nivel">
    </form>
</main>
<script src="js/controladores/controladorAdmin.js" type="module"></script>