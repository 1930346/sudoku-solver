<?php
    include 'Sudoku.php';
    $tablero = json_decode($_POST['tablero']);
    $respuesta = Sudoku::solve($tablero);
    header('Content-type: application/json');
    echo(json_encode($respuesta));
?>
