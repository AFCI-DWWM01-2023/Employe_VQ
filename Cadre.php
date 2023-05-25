<?php 
class Cadre extends Employe{
    private $listEmploye = [];
    private $cadre = false;

    public function __construct(string $inputNom,string $inputPrenom,string $inputNumSecu,float $inputSalaire,string $inputJob, array $listEmployes){
        Employe::__construct($inputNom,$inputPrenom,$inputNumSecu,$inputSalaire,$inputJob);
        foreach($listEmployes as $listEmploye){
            $this->listEmploye[] = $listEmploye;
        }
        $this->cadre = true;
    }

    public function getListEmployes(){return $this->listEmploye;}
    public function getCadreStatus(){return $this->cadre;}


    public function setListEmployes($nom){$this->listEmploye = $listEmploye;}
    public function setCadreStatus($cadre){$this->cadre = $cadre;}

    public function __toString(){
        $txt = '<br>----------------------------------<br>';
        $txt .= 'Nom: '.$this->nom .'<br>Prénom: '.$this->prenom .'<br>Numéro de Sécu: '.$this->numSecu .'<br>Salaire: '.$this->salaire .' Eur/net<br>Poste actuel: '.$this->job;
        return $txt;
    }

    public function manage(){
        foreach($this->listEmploye as $listE){
                $txtJob = $listE->effectueSonJob();
                echo $txtJob;
        }
        echo "<br><br> - CADRE -   ";
        echo $this->__toString();        
    }
   

    public function augmenteUnSalarie($employe,$pourcent){
        foreach($this->listEmploye as $listE){
            $listE->setSalaire($listE->getSalaire()*(1+($pourcent/100)));
    }
    }
}
?>