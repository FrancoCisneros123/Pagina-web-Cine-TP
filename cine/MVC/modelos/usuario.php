<?php
class usuario
{
    private string $nombre;
    private string $apellido;
    private string $email;
    private string $contrasena;
    private string $confirmarcontrasena;
    private string $nacimiento;
    private string $genero;
    private string $celular;

    private int $tipo_usuario;
    public function __construct($nombre, $apellido, $email, $contrasena, $confirmarcontrasena, $nacimiento, $genero, $celular, $tipo_usuario)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->contrasena = $contrasena;
        $this->confirmarcontrasena = $confirmarcontrasena;
        $this->nacimiento = $nacimiento;
        $this->genero = $genero;
        $this->celular = $celular;
        $this->tipo_usuario = $tipo_usuario;
    }

    public function __destruct()
    {
    }

    //getters
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function getConfirmarcontrasena()
    {
        return $this->confirmarcontrasena;
    }

    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function getTipo_usuario()
    {
        return $this->tipo_usuario;
    }

    //setters

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setContrasenia($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    public function setConfirmarcontrasenia($confirmarcontrasena)
    {
        $this->confirmarcontrasena = $confirmarcontrasena;
    }

    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    public function setTipo_usuario($tipo_usuario)
    {
        $this->tipo_usuario = $tipo_usuario;
    }

    public function save($conn): bool
    {
        require_once('../conexion.php');


        $queryString = "INSERT INTO usuario (email, password, nombre, apellido, nro_telefono, fecha_nacimiento, genero, id_tipo_usuario) VALUES (:email, :contrasena, :nombre, :apellido, :celular, :nacimiento, :genero, :tipo_usuario)";

        /** @var \PDO $conn *///informa que la variable $conn es PDO, por ende la reconoce como tal y favorece el autocompletado evitando errores
        $sql = $conn->prepare($queryString);

        $sql->bindParam(':email', $this->email); // bindParam limpia código malicioso
        $sql->bindParam(':contrasena', $this->contrasena);
        $sql->bindParam(':nombre', $this->nombre);
        $sql->bindParam(':apellido', $this->apellido);
        $sql->bindParam(':celular', $this->celular);
        $sql->bindParam(':nacimiento', $this->nacimiento);
        $sql->bindParam(':genero', $this->genero);
        $sql->bindParam(':tipo_usuario', $this->tipo_usuario);
        return $sql->execute();
    }
}
?>