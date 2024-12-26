<?php 
class BusinessAccount extends Account{
    private $frais;

    public function __construct($N_C,$Balance,$frais){
        $this->N_C = $N_C;
        $this->Balance = $Balance;
        $this->taux = $frais;
    }
    public function ajouterB(){
        global $conn;
        $stmt = $conn->prepare("INSERT INTO account(Numero_de_compte,Balance) VALUES (:N_C,:balance)");
        $stmt->execute([
            ":N_C" => $this->N_C,
            ":balance" => $this->Balance
        ]);
        $lastID = $conn->lastInsertId();
        $stmt1 = $conn->prepare("INSERT INTO besinnessaccount(Frais,Account_id) VALUES (:Frais,:accountId)");
        $stmt1->execute([
            ":Frais"=> $this->frais,
            ":accountId"=> $lastID
        ]);
    }
}


?>