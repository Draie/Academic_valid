<?php 
require_once "config/bdd.php";
require_once "score.php";

class noteController{
    private $pdo;

    public function _construct(PDO $pdo){
        $this->pdo->$pdo; 
    }
    public function update (Score $score) {
        $query='UPDATE note SET id =?, user_id = ?, score = ?, comments=?, dates=?'; 
        $stmt=$this->pdo-> prepare($query);
        return $stmt->execute([$score->getScore(), $score->getDates()]);
    }

    public function delete($id){
        $query="DELETE FROM score WHERE id = ?"; 
        $stmt =$this->pdo->prepare($query);
        return $stmt->execute([$id]); 
    }

}