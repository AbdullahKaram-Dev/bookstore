<?php

namespace Core;

class Db
{
    private static $instance = null;

    private $conn;
    private $table;
    private $tables;
    private $join_fields = "";
    private $query;

    private function __construct()
    {
        // Create connection
        $this->conn = new \mysqli(DB_SERVER_NAME, DB_USER_NAME, DB_PASSWORD, DB_DATABASE_NAME);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance()
    {
        if (!Db::$instance) {
            Db::$instance = new Db;
        }

        return Db::$instance;
    }

    public function table(string $table)
    {
        $this->table = $table;
        $this->query = '';
        return $this;
    }

    public function select(string $fields = "*")
    {
        $this->query = "SELECT $fields FROM `$this->table`";
        return $this;
    }

    public function where(string $field, string $op,$value)
    {
        $this->query .= " WHERE $field $op '$value'";
        return $this;
    }

    public function andWhere(string $field, string $op, $value)
    {
        $this->query .= " AND $field $op '$value'";
        return $this;
    }

    public function orWhere(string $field, string $op, $value)
    {
        $this->query .= " OR $field $op '$value'";
        return $this;
    }

    public function orderBy(string $field, string $dir = "ASC")
    {
        $this->query .= " ORDER BY $field $dir";
        return $this;
    }

    public function limit(int $num)
    {
        $this->query .= " LIMIT $num";
        return $this;
    }


    public function get()
    {
        $result = $this->conn->query($this->query);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    public function paginate(int $limit,int $offset)
    {
        $this->query .= " LIMIT $limit OFFSET $offset";
        return $this->get();
    }

    public function getOne()
    {
        $this->query .= " LIMIT 1";
        $result = $this->conn->query($this->query);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return [];
        }
    }


    public function insert(array $data)
    {
        $keys = '';
        $values = '';

        foreach ($data as $key => $value) {
            $keys .= "`$key`,";
            $value = $this->conn->real_escape_string($value);
            $values .= "'$value',";
        }

        $keys = substr($keys, 0, -1);
        $values = substr($values, 0, -1);

        $this->query = "INSERT INTO `$this->table` ($keys) VALUES ($values)";
        return $this;
    }

    public function update(array $data)
    {
        $set = '';

        foreach ($data as $key => $value) {
            $value = $this->conn->real_escape_string($value);
            $set .= "`$key` = '$value',";
        }

        $set = substr($set, 0, -1);

        $this->query = "UPDATE `$this->table` SET $set";
        return $this;
    }

    public function delete()
    {
        $this->query = "DELETE FROM `$this->table`";
        return $this;
    }

    public function save()
    {
        return $this->conn->query($this->query);
    }

    public function saveAndGetStatus()
    {
        $this->conn->query($this->query);
        return $this->conn->affected_rows;
    }

    public function saveAndGetId()
    {
       if ($this->conn->query($this->query)){
         return $this->conn->insert_id;
       }

       return null;
    }

    public function joinTables(array $tables)
    {
        $this->tables = implode(" JOIN ", $tables);
        $this->query = '';
        return $this;
    }

    public function selectMultiple(array $tables_fields)
    {
        foreach ($tables_fields as $table => $fields) {
            foreach ($fields as $field) {
                $table_singular = trim($table, "s");
                $this->join_fields .= " $table.$field AS $table_singular" . "_$field,";
            }
        }

        $this->join_fields = substr($this->join_fields, 0, -1);

        $this->query = "SELECT $this->join_fields FROM $this->tables";
        return $this;
    }

    public function on(array $conds)
    {
        $keyword = "ON";

        foreach ($conds as $cond) {
            $this->query .= " $keyword {$cond[0]} = {$cond[1]} ";
            $keyword = "AND";
        }

        return $this;
    }

    public function whereIn(string $field,array $values)
    {
        $values = implode(',',$values);
        $this->query .= " WHERE $field IN ($values)";
        return $this;
    }

}