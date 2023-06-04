
<?php
class Seance
{
    private $IDPROF;
    private $NUMSEANCE;
    private $TRANCHE;
    private $JOUR;
    private $NIVEAU;
    private $CAPACITE;
    private $IDSEANCE;

    public function getIDPROF()
    {
        return $this->IDPROF;
    }

    public function setIDPROF($IDPROF)
    {
        $this->IDPROF = $IDPROF;

        return $this;
    }

    public function getNUMSEANCE()
    {
        return $this->NUMSEANCE;
    }

    public function setNUMSEANCE($NUMSEANCE)
    {
        $this->NUMSEANCE = $NUMSEANCE;

        return $this;
    }

    public function getTRANCHE()
    {
        return $this->TRANCHE;
    }

    public function setTRANCHE($TRANCHE)
    {
        $this->TRANCHE = $TRANCHE;

        return $this;
    }

    public function getJOUR()
    {
        return $this->JOUR;
    }

    public function setJOUR($JOUR)
    {
        $this->JOUR = $JOUR;

        return $this;
    }

    public function getNIVEAU()
    {
        return $this->NIVEAU;
    }

    public function setNIVEAU($NIVEAU)
    {
        $this->NIVEAU = $NIVEAU;

        return $this;
    }

    public function getCAPACITE()
    {
        return $this->CAPACITE;
    }

    public function setCAPACITE($CAPACITE)
    {
        $this->CAPACITE = $CAPACITE;

        return $this;
    }

    public function setIDSEANCE($IDSEANCE)
    {
        $this->IDSEANCE = $IDSEANCE;

        return $this;
    }

    public function getIDSEANCE()
{
    return $this->IDSEANCE;
}


    public static function afficherTous()
    {

        $req = MonPdo::getInstance()->prepare("select * from seance");
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Seance');
        $req->execute();
        $lesResultats = $req->fetchAll();
        return $lesResultats;
    }

    public static function ajouterSeance(Seance $seance)
    {
        // initialise le numéro de séance à 1
        $seance->setNUMSEANCE($seance->getNUMSEANCE() + 1);
        $pdo = MonPdo::getInstance();
        $req = "INSERT INTO seance (NUMSEANCE, IDPROF, TRANCHE, JOUR, NIVEAU, CAPACITE) VALUES (:numseance, :idprof, :tranche, :jour, :niveau, :capacite)";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(':numseance', $seance->getNUMSEANCE(), PDO::PARAM_INT);
        $stmt->bindValue(':idprof', $seance->getIDPROF(), PDO::PARAM_INT);
        $stmt->bindValue(':tranche', $seance->getTRANCHE(), PDO::PARAM_STR);
        $stmt->bindValue(':jour', $seance->getJOUR(), PDO::PARAM_STR);
        $stmt->bindValue(':niveau', $seance->getNIVEAU(), PDO::PARAM_STR);
        $stmt->bindValue(':capacite', $seance->getCAPACITE(), PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function supprimercours($numseance)
    {
        $pdo = MonPdo::getInstance();
        $stmt = $pdo->prepare("DELETE FROM seance WHERE NUMSEANCE = :numseance");
        $stmt->bindParam(':numseance', $numseance, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function securiser($donnees)
    {
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

    public static function getBynumseance($numseance)
    {
        $req = MonPdo::getInstance()->prepare("SELECT * FROM seance WHERE NUMSEANCE = :numseance");
        $req->bindValue(':numseance', $numseance, PDO::PARAM_INT);
        $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'seance');
        $req->execute();
        return $req->fetch();
    }

    public static function updatePersonne(Seance $seance)
    {
        $pdo = MonPdo::getInstance();
        $req = $pdo->prepare("UPDATE seance SET IDPROF=:idprof, TRANCHE=:tranche, JOUR=:jour, NIVEAU=:niveau, CAPACITE=:capacite WHERE NUMSEANCE=:numseance");
        $req->bindValue(':id', $seance->getIDPROF(), PDO::PARAM_INT);
        $req->bindValue(':nom', $seance->getTRANCHE(), PDO::PARAM_STR);
        $req->bindValue(':prenom', $seance->getJOUR(), PDO::PARAM_STR);
        $req->bindValue(':mail', $seance->getNIVEAU(), PDO::PARAM_STR);
        $req->bindValue(':tel', $seance->getCAPACITE(), PDO::PARAM_STR);
        $req->execute();
    }




}

?>
