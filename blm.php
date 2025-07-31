<?php
session_start();

// Verifica que el usuario esté logueado
if (!isset($_SESSION['user'])) {
    header("Location: /proyecto_tconecta/index.php");
    exit;
}

require_once __DIR__ . '/src/controllers/BlmController.php';

$controller = new BlmController();

// Detectar la acción desde la URL
$action = $_GET['action'] ?? 'index';

$typeUser = "";
if($_SESSION['user']['type_user_fk'] === '1'){
    $typeUser = "fincomun";
}elseif ($_SESSION['user']['type_user_fk'] === '2'){
    $typeUser = "tconecta";
}else {
    echo "No se a encontrado el tipo de usuario";
}


// Ejecutar la acción correspondiente
switch ($action) {
    case 'save':
        $controller->save($typeUser);
        break;
    case 'newRegister':
        $controller->newRegister($typeUser);
        break;
    case 'searchForBMDID':
        $controller->searchForBMDID($typeUser);
        break;
    case 'edit':
        $controller->edit($typeUser);
        break;
    case 'getUpdate':
        $controller->getUpdate();
        break;
    default:
        $controller->index($typeUser);
        break;
}
