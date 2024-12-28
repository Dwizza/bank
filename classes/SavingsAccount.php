<?php 
include_once "./database/dbConnect.php";
include_once "Account.php";

class SavingsAccount extends Account{
    private $taux;

    public function __construct($N_C,$Balance,$taux){
        $this->N_C = $N_C;
        $this->Balance = $Balance;
        $this->taux = $taux;
    }
    public function ajouterS(){
        global $conn;
        $stmt = $conn->prepare("INSERT INTO account(Numero_de_compte,Balance) VALUES (:N_C,:balance)");
        $stmt->execute([
            ":N_C" => $this->N_C,
            ":balance" => $this->Balance
        ]);
        $lastID = $conn->lastInsertId();
        $stmt1 = $conn->prepare("INSERT INTO savingsaccount(Taux_Interet,account_id) VALUES (:taux,:accountId)");
        $stmt1->execute([
            ":taux"=> $this->taux,
            ":accountId"=> $lastID
        ]);
    }
}

?>