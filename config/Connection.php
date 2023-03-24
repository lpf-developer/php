<?php

class Connection
{
    // Armazena a única instância da classe
    private static $instance = null;

    // Dados de conexão com o banco de dados
    private $host = "db";
    private $dbname = "store";
    private $user = "root";
    private $password = "root";

    // Objeto de conexão com o banco de dados
    private $pdo;

    // Construtor privado para evitar a criação de novas instâncias
    private function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};
            dbname={$this->dbname}", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro ao conectar com o banco de dados: " . $e->getMessage());
        }
    }

    // Retorna a instância única da classe, criando-a se necessário
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Connection();
        }
        return self::$instance;
    }

    // Retorna o objeto de conexão com o banco de dados
    public function getPdo()
    {
        echo "Conexão bem-sucedida!";
        return $this->pdo;
    }
}
