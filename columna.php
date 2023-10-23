

<?php


if(isset($_POST['filas']) && isset($_POST['columnas'])){
   return  Datos($_POST['columnas'], $_POST['filas'] );
} 


function Datos($colum, $fil) {
    echo 'Columnas: ' . $colum . ' Filas: ' . $fil . '<br>';
    return creandoTablaHtml($colum, $fil);
}

function creandoTablaHtml($num1Col, $num2Fil) {
    echo 'Número de columnas: ' . $num1Col . ' Números filas: ' . $num2Fil . '<br>';

    echo '<table border="1">';
    for ($i = 0; $i < $num2Fil; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $num1Col; $j++) {
            echo '<td>' . $i . ',' . $j . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

// Ejemplo de uso
Datos(3, 4);
?>

  




?>
<h3>Ingrese los datos para crear  las tabla</h3>
<form action="columna.php" method="post">
    <input type="nmber" name="filas" placeholder="Numeros de filas " required> 
    <input type="number" name="columnas" id="">
    <button type="submit">Enviar</button>
</form> 




