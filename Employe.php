<?php 
class Employe{
    protected $nom;
    protected $prenom;
    protected $numSecu;
    protected $salaire;
    protected $job;

    public function __construct(string $inputNom,string $inputPrenom,string $inputNumSecu,float $inputSalaire,string $inputJob){
        $this->nom = $inputNom;
        $this->prenom = $inputPrenom;
        $this->numSecu = $inputNumSecu;
        $this->salaire = $inputSalaire;
        $this->job = $inputJob;
    }

    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getNumSecu(){return $this->numSecu;}
    public function getSalaire(){return $this->salaire;}
    public function getJob(){return $this->job;}

    public function setNom($nom){$this->nom = $nom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function setNumSecu($numSecu){$this->numSecu = $numSecu;}
    public function setSalaire($salaire){$this->salaire = $salaire;}
    public function setJob($job){$this->job = $job;}

    public function __toString(){
        $txt = '<br>----------------------------------<br>';
        $txt .= 'Nom: '.$this->nom .'<br>Prénom: '.$this->prenom .'<br>Numéro de Sécu: '.$this->numSecu .'<br>Salaire: '.$this->salaire .' Eur/net<br>Poste actuel: '.$this->job;
        return $txt;
    }

    public function effectueSonJob(){
        switch($this->job){
            case "Developper":
                echo '<div>'.$this->__toString();
                $txtJob = '<br>Le développeur, également appelé programmeur, est un informaticien qui oeuvre auprès des utilisateurs pour concevoir des logiciels adaptés à leurs besoins.<br> De l\'analyse à l\'application en passant par la programmation, il connaît tous les rouages pour mettre au point des programmes informatiques sur mesure.</div>';
                return $txtJob;
                break;
            case "Soudeur":
                echo '<div>'.$this->__toString();
                $txtJob = '<br>Le soudeur réalise des travaux d\'assemblage, d\'installation, de modification et de maintenance de réseaux de tuyauteries ou d\'élèments chaudronnés.<br> En fonction des soudures, il travaille au chalumeau, au laser..</div>';
                return $txtJob;
                break;
            case "Assistant Mécanicien":
                echo '<div>'.$this->__toString();
                $txtJob = '<br>En tant qu\'aide-mécanicien chargé de l\'entretien de véhicules de tourisme et d\'utilitaires légers,<br> vous travaillez sous la supervision d\'un mécanicien et vous vous occupez essentiellement des activités d\'entretien, des contrôles visuels et des tâches liées aux pneus,<br> au pot d\'échappement et aux pare-chocs.</div>';
                return $txtJob;
                break;
            case "Magasinière":
                echo '<div>'.$this->__toString();
                $txtJob = '<br>Le magasinier réceptionne et stocke les produits des fournisseurs, les enregistre, opère le groupage ou le dégroupage des marchandises reçues et procède à leur entreposage.<br> C\'est avant tout un gestionnaire de stock. Il suit les instructions du chef magasinier et s\'occupe de la préparation physique des commandes.</div>';
                return $txtJob;
                break;
            default:
            echo "Métier pas là !";
            break;

        }
    }
}
?>