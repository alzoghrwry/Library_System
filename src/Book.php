<?php
class Book{
    private $id;
    private $tite;
    private $auther;
    private $isbon;
    private $borrowerId;
    private $dueDate;
    

    function __construct($id,$tite,$auther,$isbon){
        $this->setId($id);
        $this->seTite($tite);
        $this->setAuther($auther);
        $this->setIsbon($isbon);
        $this->borrowerId = null;
        $this->dueDate = null;
    }
    function setId($id){
        $this->id=$id;
    }
    function seTite($tite){
        $this->tite=$tite;
    }
    function setAuther($auther){
        $this->auther=$auther;
    }
    function setIsbon($isbon){
        $this->isbon=$isbon;
    }
    function getId(){
        return $this->id;
    }
    function geTite(){
        return $this->tite;
    }
    function getAuther(){
        return $this->auther;
    }
    function getIsbon(){
        return $this->isbon;
    }
      public function setBorrower($userId, $dueDate) {
        $this->borrowerId = $userId;
        $this->dueDate = $dueDate;
    }

    public function returnBook() {
        $this->borrowerId = null;
        $this->dueDate = null;
    }

    public function isAvailable() {
        return $this->borrowerId === null;
    }

}
?>
