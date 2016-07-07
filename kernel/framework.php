<?php
class Framework
{
    public $db;
    function __construct()
    {
        /* Подключение к базе данных ODBC, используя вызов драйвера */
        $dsn = 'mysql:dbname=kgb;host=127.0.0.1; charset=utf8';
        $user = 'root';
        $password = 'root';

        try {
            $this->db = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Подключение не удалось: ' . $e->getMessage();
        }

    }

    public function preparedQuery($sql, $params)
    {
        $query = $this->db->prepare($sql);
        $query->execute($params);
        return $query;
    }
}
?>