<?php
class DatabaseConnection
{
  private $servername = 'localhost';
  private $username_db = 'root';
  private $password_db = '';
  private $dbname = 'tarefas';
  private $conn;

  public function __construct()
  {
    $this->conn = new mysqli($this->servername, $this->username_db, $this->password_db, $this->dbname);

    // Verifica se a conexão falhou
    if ($this->conn->connect_error) {
      throw new Exception('Falha ao conectar ao banco de dados: ' . $this->conn->connect_error);
    } 
  }

  public function getConnection() 
  {
    return $this->conn;
  }
}