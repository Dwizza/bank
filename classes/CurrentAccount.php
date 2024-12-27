<?php 
class CurrentAccount extends Account{
    private $retrait;

    public function __construct($N_C,$Balance,$retrait){
        $this->N_C = $N_C;
        $this->Balance = $Balance;
        $this->retrait = $retrait;
    }
    public function ajouterC(){
        global $conn;
        $stmt = $conn->prepare("INSERT INTO account(Numero_de_compte,Balance) VALUES (:N_C,:balance)");
        $stmt->execute([
            ":N_C" => $this->N_C,
            ":balance" => $this->Balance
        ]);
        $lastID = $conn->lastInsertId();
        $stmt1 = $conn->prepare("INSERT INTO currentaccount(Retrait,Account_id) VALUES (:Retrait,:accountId)");
        $stmt1->execute([
            ":Retrait"=> $this->retrait,
            ":accountId"=> $lastID
        ]);
    }

}

?>