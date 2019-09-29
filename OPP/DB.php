<?php
class DB
{
    private $connect;
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'school';
    public function __construct()
    {
        $this->connect();
    }
    public function __destruct()
    {
        $this->disconnect();
    }
    public function connect()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        if ($this->connect) {
            mysqli_set_charset($this->connect, 'utf8');
        }
    }
    public function disconnect()
    {
        if ($this->connect) {
            mysqli_close($this->connect);
        }
    }
    
    public function insert($table, $data)
    {
        if ($this->connect) {
            $columns = array_keys($data); //Lấy cột từ các key của mảng array
            $columns = implode(', ', $columns); //Đưa các phần tử trong mảng thành chuỗi, ngăn cách nhau bằng dấu , 
            
            $query = "INSERT INTO $table($columns) VALUES(";
            foreach ($data as $item) {
                if (is_string($item)) {
                    $query .= "'$item',";
                } else {
                    $query .= $item . ",";
                }
            }
            $query = substr($query, 0, -1);
            $query .= ')';
            return mysqli_query($this->connect, $query);
        }
    }
    public function update($table, $data, $whereSql = '')
    {
        if ($this->connect) {
            $columns = array_keys($data); //Lấy cột từ các key của mảng array
            $columns = implode(', ', $columns); //Đưa các phần tử trong mảng thành chuỗi, ngăn cách nhau bằng dấu , 
            
            $query = "UPDATE $table SET ";
            foreach ($data as $key => $item) {
                if (is_string($item)) {
                    $query .= "$key='$item',";
                } else {
                    $query .= "$key=$item,";
                }
            }
            $query = substr($query, 0, -1);
            if ($whereSql) {
                $query .= " WHERE $whereSql";
            }
            return mysqli_query($this->connect, $query);
        }
    }
    public function delete($table, $whereSql = '')
    {
        if ($this->connect) {
            $query = "DELETE FROM $table WHERE $whereSql";
            return mysqli_query($this->connect, $query);
        }
    }
    public function select($table, $whereSql = '', $option = 0)
    {
        if ($this->connect) {
            $query = "SELECT * FROM $table";
            if ($whereSql) {
                $query .= " WHERE $whereSql";
            }
            $sql = mysqli_query($this->connect, $query);
            if ($option == 1) {
                return mysqli_fetch_assoc($sql);
            } else {
                $data = array();
                while ($item = mysqli_fetch_assoc($sql)) {
                    $data[] = $item;
                }
                return $data;
            }
            
        }
    }
    public function query($sql)
    {
        if ($this->connect) {
            return mysqli_query($this->connect, $sql);
        }
    }
}