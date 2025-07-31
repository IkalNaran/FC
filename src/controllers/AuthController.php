<?php
require_once __DIR__ . '/../models/UserModel.php';

class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new UserModel();
            $user = $userModel->credentialVerification($email, $password);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header("Location: blm.php"); // o la ruta que prefieras
                exit;
            } else {
                $error = "Credenciales incorrectas";
            }
        }

        include __DIR__ . '/../views/auth/login.php';
    }
}

