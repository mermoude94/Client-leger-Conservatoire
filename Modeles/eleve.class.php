<?php
class eleve
{
        private $IDELEVE;
        private $NIVEAU;
        private $BOURSE;

        public function getIDELEVE()
        {
                return $this->IDELEVE;
        }

        public function setIDELEVE($IDELEVE)
        {
                $this->IDELEVE = $IDELEVE;

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

        public function getBOURSE()
        {
                return $this->BOURSE;
        }

        public function setBOURSE($BOURSE)
        {
                $this->BOURSE = $BOURSE;

                return $this;
        }



    public static function afficherTous()
    {
            $req = MonPdo::getInstance()->prepare("select * from eleve");
            $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'eleve');
            $req->execute();
            $lesResultats = $req->fetchAll();
            return $lesResultats;
    }

    public static function ajoutereleve(eleve $eleve)
    {
            $pdo = MonPdo::getInstance();
            $req = $pdo->prepare("insert into eleve (IDELEVE,NIVEAU,BOURSE) values (:ideleve,:niveau,:bourse)");
            $req->bindValue(':ideleve', $eleve->getIDELEVE(), PDO::PARAM_STR);
            $req->bindValue(':niveau', $eleve->getNIVEAU(), PDO::PARAM_STR);
            $req->bindValue(':bourse', $eleve->getBOURSE(), PDO::PARAM_STR);
            $req->execute();
    }

    public static function supprimereleve($id)
    {
            $req = monPdo::getInstance()->prepare("delete from eleve where ideleve = :ideleve");
            $req->bindParam(':ideleve', $ideleve);
            $req->execute();
    }

    public static function securiser($donnees)
    {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
    }

    public static function getById($id)
    {
            $req = MonPdo::getInstance()->prepare("SELECT * FROM eleve WHERE IDELEVE = :ideleve");
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'eleve');
            $req->execute();
            return $req->fetch();
    }

    public static function updateeleve(eleve $eleve)
    {
            $pdo = MonPdo::getInstance();
            $req = $pdo->prepare("UPDATE eleve SET NIVEAU=:niveau, BOURSE=:bourse WHERE IDELEVE=:ideleve");
            $req->bindValue(':ideleve', $eleve->getIDELEVE(), PDO::PARAM_INT);
            $req->bindValue(':niveau', $eleve->getNIVEAU(), PDO::PARAM_STR);
            $req->bindValue(':bourse', $eleve->getBOURSE(), PDO::PARAM_STR);
            $req->execute();
    }
}
