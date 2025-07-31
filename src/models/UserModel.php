<?php
require_once __DIR__ . '/../config/Database.php';

class UserModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function credentialVerification($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email_user = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC );

        if ($usuario && password_verify($password, $usuario['pass_user'])) {
            return $usuario;
        }

        return false;
    }
}
