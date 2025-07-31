<?php
require_once __DIR__ . '/../config/Database.php';

class BlmModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    // Obtener todos los registros
    public function getAll() {
        try {
            $stmt = $this->conn->prepare("SELECT *
        FROM blm b
        JOIN users u ON u.id_user = b.user_id ORDER BY create_date_blm DESC");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener registros: " . $e->getMessage();
            return [];
        }
    }

    // Insertar un nuevo registro
    public function insert($datos) {
        try {

            $stmt = $this->conn->prepare("
                INSERT INTO blm (
                    num_blm, descripcion_blm, comment_blm, amount_blm, attends_blm,
                    evidence_blm, resolution_fincomun_blm, status_blm, account_fincomun, user_id
                ) VALUES (
                    :num_blm, :descripcion_blm, :comment_blm, :amount_blm, :attends_blm,
                    :evidence_blm,:resolution_fincomun_blm, :status_blm,  :account_fincomun, :user_id
                )
            ");

            return $stmt->execute($datos);
        } catch (PDOException $e) {
            echo "Error al insertar registro: " . $e->getMessage();
            return false;
        }
    }

    // Buscar por BMDID
    public function searchForBMDID($bmdid) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM blm b
        JOIN users u ON u.id_user = b.user_id WHERE num_blm = :bmdid ORDER BY create_date_blm DESC");
            $stmt->bindParam(':bmdid', $bmdid);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al buscar por BMDID: " . $e->getMessage();
            return [];
        }
    }
    
    public function getForId($id) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM blm WHERE id_blm = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener el registro: " . $e->getMessage();
            return null;
        }
    }

    public function update($datos) {
        try {
            $stmt = $this->conn->prepare("
                UPDATE blm SET
                    num_blm = :num_blm,
                    descripcion_blm = :descripcion_blm,
                    comment_blm = :comment_blm,
                    amount_blm = :amount_blm,
                    attends_blm = :attends_blm,
                    evidence_blm = :evidence_blm,
                    status_blm = :status_blm,
                    resolution_fincomun_blm = :resolution_fincomun_blm,
                    account_fincomun = :account_fincomun
                WHERE id_blm = :id
            ");
            return $stmt->execute($datos);
        } catch (PDOException $e) {
            echo "Error al actualizar: " . $e->getMessage();
            return false;
        }
    }

}
