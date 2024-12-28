<?php 
include_once "./database/dbConnect.php";
class Account{
    protected $N_C;
    protected $Balance;
    protected $table;

    public function __construct($table){
        $this->table = $table;
    }

    public function affichage(){
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM account join ". $this->table ." on account.id = ". $this->table .".account_id");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

}


?>