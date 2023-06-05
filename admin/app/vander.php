<?php
require_once('database.php');
require_once('functions.php');

class Crud
{
    private $table;
    private $db;
    public $db_columns = [];
    public $column = [];
    public $updateId;

    function __construct($table, $id = null)
    {
        $d = new Database;
        $this->db = $d->getConnection();
        $this->table = $table;
        if (isset($id)) {
            $this->updateId = $id;
        }
        $this->check();
    }
    public function check()
    {
        $result = $this->db->query("SHOW COLUMNS FROM $this->table")->fetch_all(MYSQLI_ASSOC);
        foreach ($result as $items) {
            $this->db_columns[$items['Field']] = $items['Type'];
        }
    }

    public function save()
    {
        $col = "";
        $value = "";
        foreach ($this->column as $key => $val) {
            if (end($this->column) != $val) {
                $col .= "`{$key}`,";
                $value .= stristr($this->db_columns[$key], 'int') != '' ? $this->db->real_escape_string($val) . ',' : "'{$this->db->real_escape_string($val)}',";
            } else {
                $col .= "`{$key}`";
                
                $value .= stristr($this->db_columns[$key], 'int') != '' ? $this->db->real_escape_string($val) : "'{$this->db->real_escape_string($val)}'";
            }
        }
        $table = $this->table;
        $sql = "INSERT INTO $table ($col) VALUES($value)";
        $result = $this->db->query($sql);
        return $result;
    }
    public function get($select = null)
    {
        $data = [];
        $table = $this->table;
        $ats = isset($select) ? $select : '*';

        if ($this->updateId != null) {
            $sql = "SELECT $ats FROM $table $this->updateId";
            $result = $this->db->query($sql);
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        } else {
            $sql = "SELECT $ats FROM $table";
            $result = $this->db->query($sql);
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function update()
    {
        if ($this->updateId != null) {
            $update = "";
            foreach ($this->column as $key => $val) {
                if (end($this->column) != $val) {
                    $update .= stristr($this->db_columns[$key], 'int') != '' ? "`{$key}` = " . $this->db->real_escape_string($val).', ' : "`{$key}` = '{$this->db->real_escape_string($val)}', ";
                } else {
                    $update .= stristr($this->db_columns[$key], 'int') != '' ? "`{$key}` = " . $this->db->real_escape_string($val) : "`{$key}` = '{$this->db->real_escape_string($val)}'";
                }
            }
            $table = $this->table;
            $sql = "UPDATE `$table` SET $update WHERE $this->updateId";
            $result = $this->db->query($sql);
            return $result;
        } else {
            echo 'Use id in Class: new Crud("holidays", 25)';
            die;
        }
    }
    public function delete()
    {
        $table = $this->table;
        if ($this->updateId != null) {

            $sql = "DELETE FROM `$table` WHERE $this->updateId";
            $result = $this->db->query($sql);
        } else {
            $sql = "DELETE FROM `$table`";
            $result = $this->db->query($sql);
        }
        return $result;
    }
    public function __destruct()
    {
        $this->db->close();
    }
}

$setting = new Crud('setting', "WHERE id = 1");
$setting = $setting->get()[0];

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);