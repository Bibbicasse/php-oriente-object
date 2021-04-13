<?php 

class Page {
    public ?string $titre;
    public ?string $contenu;
    public ?string $date_de_publication;
    public ?string $url_article;

    public function __construct($titre, $contenu, $date_de_publication, $url_article) {
        $this->titre= $titre;
        $this->contenu = $contenu;
        $this->date_de_publication = $date_de_publication;
        $this->url_article = $url_article;

        
        echo "Cet article $this->titre, son contenu est $this->contenu et sa date de publication est $this->date_de_publication";
    }

   
}
?> 