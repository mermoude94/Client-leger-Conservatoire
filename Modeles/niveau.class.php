<?php
class niveau
{
    private $NIVEAU;

    public function getNIVEAU() {
        return $this->NIVEAU;
    }

    public function setNIVEAU($NIVEAU): self {
        $this->NIVEAU = $NIVEAU;
        return $this;
    }

    public static function getAll()
    {
        $pdo = MonPdo::getInstance();
        $query = "SELECT niveau FROM niveau";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
