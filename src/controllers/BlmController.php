<?php
require_once __DIR__ . '/../models/BlmModel.php';

class BlmController {
    private $model;

    public function __construct() {
        $this->model = new BlmModel();
    }

    // Mostrar todos los registros
    public function index($typeUser) {
        $datos = $this->model->getAll();
        include __DIR__ .'/../views/'.$typeUser.'/registros.php';
    }

    public function newRegister($typeUser) {
    include __DIR__ .'/../views/'.$typeUser.'/nueva-solicitud.php';
    }

    // Guardar un nuevo registro
    public function save($typeUser) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Manejo de la imagen
            $rutaImagen = null;
            if (isset($_FILES['evidence_blm']) && $_FILES['evidence_blm']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo = uniqid() . '_' . basename($_FILES['evidence_blm']['name']);
                $rutaDestino = __DIR__ . '/../uploads/' . $nombreArchivo; // Ruta física
                $rutaImagen = $nombreArchivo; // Ruta relativa para la BD

                if (!move_uploaded_file($_FILES['evidence_blm']['tmp_name'], $rutaDestino)) {
                    echo "Error al mover la imagen.";
                    return;
                }
            }

            $datos = [
                ':num_blm' => $_POST['num_blm'],
                ':descripcion_blm' => $_POST['descripcion_blm'],
                ':comment_blm' => $_POST['comment_blm'],
                ':amount_blm' => $_POST['amount_blm'],
                ':attends_blm' => $_POST['attends_blm'],
                ':evidence_blm' => $rutaImagen,
                ':resolution_fincomun_blm' => $_POST['resolution_fincomun_blm'],
                ':status_blm' => $_POST['status_blm'],
                ':account_fincomun' => $_POST['account_fincomun'],
                ':user_id' => $_SESSION['user']['id_user']
            ];

            $resultado = $this->model->insert($datos);

            if ($resultado) {
                header("Location: blm.php");
                exit;
            } else {
                echo "Error al guardar el registro.";
            }
        } else {
            include __DIR__ . '../../views/'. $typeUser .' /registros.php';
        }
    }


// Buscar por BMDID
    public function searchForBMDID($typeUser) {
        if (isset($_GET['blmid'])) {
            $bmdid = $_GET['blmid'];
            $this->model = new BlmModel();
            $datos = $this->model->searchForBMDID($bmdid);
            include __DIR__ . '/../views/' . $typeUser . '/registros.php';
        } else {
            header("Location: blm.php");
            exit;
        }
    }

    public function edit($typeUser) {        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->model = new BlmModel();
            $registro = $this->model->getForId($id);
            include __DIR__ . '/../views/' . $typeUser .'/edit.php';
        } else {
            header("Location: blm.php");
            exit;
        }
    }

    public function getUpdate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Manejo de la imagen
            $rutaImagen = $_POST['imagen_actual']; // Por defecto, conserva la imagen anterior

            if (isset($_FILES['evidence_blm']) && $_FILES['evidence_blm']['error'] === UPLOAD_ERR_OK) {
                $nombreArchivo = uniqid() . '_' . basename($_FILES['evidence_blm']['name']);
                $rutaDestino = __DIR__ . '/../uploads/' . $nombreArchivo;
                $rutaWeb = $nombreArchivo;

                if (move_uploaded_file($_FILES['evidence_blm']['tmp_name'], $rutaDestino)) {
                    $rutaImagen = $rutaWeb; // Solo si se subió correctamente, se reemplaza
                } else {
                    echo "Error al mover la nueva imagen.";
                    return;
                }
            }

            $datos = [
                ':num_blm' => $_POST['num_blm'],
                ':descripcion_blm' => $_POST['descripcion_blm'],
                ':comment_blm' => $_POST['comment_blm'],
                ':amount_blm' => $_POST['amount_blm'],
                ':attends_blm' => $_POST['attends_blm'],
                ':evidence_blm' => $rutaImagen,
                ':status_blm' => $_POST['status_blm'],
                ':resolution_fincomun_blm' => $_POST['resolution_fincomun_blm'],
                ':account_fincomun' => $_POST['account_fincomun'],
                ':id' => $_POST['id']
            ];

            $this->model = new BlmModel();
            $resultado = $this->model->update($datos);

            if ($resultado) {
                header("Location: blm.php");
                exit;
            } else {
                echo "Error al actualizar el registro.";
            }
        }
    }

}
