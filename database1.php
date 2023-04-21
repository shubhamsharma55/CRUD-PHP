<?php
class database1{
private $db_host ;
private $db_user ;
private $db_pass ;
private $db_name ;

protected function connect(){

    $this->db_host='localhost';
    $this->db_user = 'root';
    $this->db_pass = '';
    $this->db_name = 'atul.275';

    $conn=new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    return $conn;
}
}