<?php 

class Article {
    private $titre;
    private $contenu;
    private $date_de_publication;


    public function __construct($t = NULL, $c = NULL, $d = NULL) {
        $this->titre = $t;
        $this->contenu = $c;
        $this->date_de_publication = $d;
    }

    function afficher() {
    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
    date_default_timezone_set('Europe/Paris');

    $date = utf8_encode(strftime('%A %d %B %Y'));
    $date = datetime::createFromFormat("Y-m-d", $this->date_de_publication);

        

        echo "<div>
                <article><h2> Le titre : $this->titre</h2>
                    <p>Contenu : $this->contenu </p<>
                        <footer>
                        <p>Paru le : <time datetime=\"$this->date_de_publication\">".
                            $date->format("Y-m-d")."
                        </time></p>
                        <footer>
                </article>
            </div>";

            // phpinfo();

    }
    
     /* ***********************************************/
     /*                 GETTER  SETTER                */
     /* ***********************************************/            
 
    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of date_de_publication
     */ 
    public function getDate_de_publication()
    {
        return $this->date_de_publication;
    }

    /**
     * Set the value of date_de_publication
     *
     * @return  self
     */ 
    public function setDate_de_publication($date_de_publication)
    {
        $this->date_de_publication = $date_de_publication;

        return $this;
    }
}


?> 