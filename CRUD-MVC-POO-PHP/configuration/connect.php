<!-- Conexão com Banco de Dados -->

<?php 

    /*
    define('HOST', 'localhost');
    define('DATABASENAME', 'NOME DO SEU BANCO DE DADOS');
    define('USER', 'NOME DO SEU USUARIO');
    define('PASSWORD','SENHA');
    */

    class Connect{
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }

        function connectDatabase()
        {
            try
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            }
            catch (PDOException $e)
            {
                echo "Error!".$e->getMessage();
                die();
            }
        }
    }

    $testConnection = new Connect();

?>
