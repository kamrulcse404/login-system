<?php
namespace App\Controllers;

use App\Helpers\Database;
use PDO;

class UserController
{
    protected $connection;
    
    public function __construct()
    {
        $this->connection = Database::getInstance();
    }
    
    public function registrationValidation()
    {
        $q = "SELECT userName, userEmail FROM users";
        $stmt = $this->connection->prepare($q);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function loginValidation()
    {
        $q = "SELECT userName, userEmail, userPassword FROM users";
        $stmt = $this->connection->prepare($q);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function userRegDataStore($request)
    {
        $firstName = $request['first_name'] ?? null;
        $lastName = $request['last_name'] ?? null;
        $userName = $request['user_name'] ?? null;
        $email = $request['user_email'] ?? null;
        $password = $request['user_password'] ?? null;
        
        $uniqueUser = $this->registrationValidation();
        
        foreach ($uniqueUser as $user) {
            if ($user['userName'] === $userName || $user['userEmail'] === $email) {
                // session_start();
                $_SESSION['error'] = 'User Name or email already exist';
                header('Location:signup.php');
                exit;
            }
        }

        $query = "INSERT INTO users (firstName, lastName, userName, userEmail, userPassword) VALUES (:firstName, :lastName, :userName, :userEmail, :userPassword)";

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':firstName', $firstName);
        $stmt->bindValue(':lastName', $lastName);
        $stmt->bindValue(':userName', $userName);
        $stmt->bindValue(':userEmail', $email);
        $stmt->bindValue(':userPassword', password_hash($password, PASSWORD_BCRYPT));
        $stmt->execute();

        header('Location: login.php');
    }

    public function userLogin($request)
    {
        $userName = $request['user_name'];
        $email = $request['user_email'];
        $password = $request['user_password'];

        $users = $this->loginValidation();
        // echo '<pre>';
        // var_dump($userName);
        // var_dump($email);
        // var_dump($password);
        // exit;
        // echo '</pre>';

        foreach ($users as $user) {
            if ($user['userName'] == $userName && $user['userEmail'] == $email && password_hash($password, PASSWORD_BCRYPT) == $user['userPassword']) {
                // session_start();
                // $_SESSION['success'] = 'Login Success';
                header('Location: loginAction.php');
                exit;
            }
        }
        header('Location: login.php');
    }
}
