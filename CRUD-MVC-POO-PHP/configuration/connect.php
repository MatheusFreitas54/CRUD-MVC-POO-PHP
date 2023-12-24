<!-- Conexão com Banco de Dados -->

<?php 

    define('HOST', 'localhost');
    define('DATABASENAME', 'crud-mvc-poo-php-gn');
    define('USER', 'root2');
    define('PASSWORD','root2');

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