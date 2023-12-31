<?php
/**
 * Página para la modificación de la información de mensaje.
 *
 * PHP version 8.2
 *
 * @category Mensaje
 * @package  Gestión_Mensaje
 * @author   Equipo A
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 */

// Sección HTML para la interfaz de modificación de mensaje.
?>
<main id="gestorM">
    <?php
        $fila = $datosVista["datos"];
    ?>
    <h1>Cambiar de nivel</h1>
    <form action="index.php?control=nivel_con&metodo=moverMensaje&id=<?php echo $fila['id'];?>" method="POST">
        <label for="nivel">Nivel:</label>
        <select name="nivel">
            <option disabled>Selecciona un nivel...</option>
            <?php
                $obj = new $controlador;
                $datos = $obj->mostrar();
                foreach ($datos as $nivel) {
                    ?>
                        <option value="<?php echo $nivel['id'];?>" <?php if ($fila['idNivel'] === $nivel['id']) echo 'selected';?>> <?php echo $nivel['nombre']; ?></option>
                    <?php
                }
            ?>
        </select>
        <label for="contenido">Contenido:</label>
        <input type="text" readonly name="contenido" value="<?php echo $fila['contenido'];?>">
        <label for="puntosHasta">Puntos requeridos:</label>
        <input type="text" readonly name="puntosHasta" value="<?php echo $fila['puntosHasta'];?>">
        <label for="readTipo">Tipo:</label>
        <input type="text" readonly name="readTipo" value="<?php if ($fila['tipo'] === 'A') echo "Antes del nivel"; if ($fila['tipo'] === 'B') echo "Durante el nivel"; if ($fila['tipo'] === 'C') echo "Después del nivel";?>">
        <input type="hidden" readonly name="tipo" value="<?php if ($fila['tipo'] === 'A') echo "A"; if ($fila['tipo'] === 'B') echo "B"; if ($fila['tipo'] === 'C') echo "C";?>">
        <input type="submit" value="Guardar cambios">
    </form>
</main>

