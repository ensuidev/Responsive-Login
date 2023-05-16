<?php
include_once("db.php");
class DatabaseProcess extends DatabasePDO
{
    private $email;
    private $password;
    public $mesage;

    public function __construct($user, $pass)
    {
        try {
            $this->email = $user;
            $this->password = $pass;

            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();

            //Preparamos la consulta sql
            $stmt = $cnn->prepare("SELECT * FROM usuario WHERE email=:usernameEmail  AND pass=:hash_password");
            $stmt->bindParam("usernameEmail", $this->email, PDO::PARAM_STR);
            $stmt->bindParam("hash_password", $this->password, PDO::PARAM_STR);
            //Ejecutamos la consulta
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            $this -> mesage = "False";
            if ($count) {
                $this -> mesage = "True";
            } else {
                $this -> mesage = "False";
            }
        } catch (PDOException $e) {
            echo '{"error":' . $e->getMessage() . '}}';
        }
    }
    public function mesageLogin()
    {
        return $this -> mesage;
    }

    public function __destruct()
    {
        $this -> cerrarSesion();
    }

    public function cerrarSesion()
    {
        $this -> email = "";
        $this -> password = "";
        $this -> mesage = "False";
    }
}