<?php

class Database
{
    /**
     * @return PDO
     */
    private function connect(): PDO
    {
        $string = 'mysql:hostname=' . DBHOST . ';dbname=' . DBNAME;
        $con = new PDO($string, DBUSER, DBPASS);
        return $con;
    }

    /**
     * @return array|bool
     * @param mixed $query
     * @param mixed $data
     */
    public function query($query, $data = []): array|bool
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }

        return false;
    }

    /**
     * @return array|bool
     * @param mixed $query
     * @param mixed $data
     */
    public function get_row($query, $data = []): array|bool
    {
        $con = $this->connect();
        $stm = $con->prepare($query);

        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result[0];
            }
        }

        return false;
    }
}
