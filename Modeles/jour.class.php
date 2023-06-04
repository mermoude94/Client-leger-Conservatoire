<?php
class jour
{
    private $JOUR;

    public function getJOUR() {
        return $this->JOUR;
    }

    public function setJOUR($JOUR): self {
        $this->JOUR = $JOUR;
        return $this;
    }

    public static function getAll()
    {
        $pdo = MonPdo::getInstance();
        $query = "SELECT jour FROM jour";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
