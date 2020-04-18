<?php

// mapping de la table "droit"
class droit
{
    /* attributs, parfois nommés propriétés
       ce sont nos variables de la classe,
       dans notre cas ils vont reprénsenter les
       champs de notre base de donnée. Nous
       leurs donneront les mêmes noms.
       Ils seront mis en visibilité private, ils ne
       peuvent être lu qu'à l'intérieur de cette
       classe
    */
    private $iddroit;
    private $droitname;
    private $droitdesc;

    /*
     * Les constantes se trouveront ici,
     * elles ne sont pas nécessaires
     * lors d'un mapping d'une table
     */

    /*
     * Les méthodes, ce sont les fonctions appartenant à la classe
     */

    // Les constructeurs sont toujours public et appelés de l'extérieur lorsque l'on fait un "new droit()"
    public function __construct()
    {

    }

    /* Les getters (récupère une valeur) et les setters (change une valeur)
    permettent de changer/récupérer les attributs avec un contôle sur les données
    on peut les mettre en publique car nos attributs sont privés
    */

    // on récupère l'id, si il est un integer
    public function getIddroit(): int
    {
        return $this->iddroit;
    }

    // on introduit un id, si il est un integer,
    // void exprime qu'il n'y a pas de retour (procédure)
    public function setIddroit(int $iddroit): void
    {
        // si int vaut 0 (après échec de conversion) OU est négatif
        // (ne colle pas avec unsigned), la variable vaut NULL, sinon
        // elle vaut le paramètre passé
        $this->iddroit = (empty($iddroit)||$iddroit<0)? NULL : $iddroit;
    }

    // on récupère le nom, il doit être un string
    public function getDroitname(): string
    {
        return $this->droitname;
    }

    // on introduit un nom, il doit être un string,
    // void exprime qu'il n'y a pas de retour (procédure)
    public function setDroitname(string $droitname): void
    {
        $this->droitname = $droitname;
    }

    // on récupère la description, elle doit être un string
    public function getDroitdesc(): string
    {
        return $this->droitdesc;
    }

    // on introduit la description, elle d oit être un string
    // void exprime qu'il n'y a pas de retour (procédure)
    public function setDroitdesc(string $droitdesc): void
    {
        $this->droitdesc = $droitdesc;
    }

}