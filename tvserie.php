<?php


class TVSeries extends Production{


    public $season;
    public $episode;

   

    public function __construct($season, $episode,$title,$language,$vote){
      parent::__construct($title,$language,$vote);
      $this->season = $season;
      $this->episode = $episode;
    }
    
   
    
    public function getseason()
    {
        return $this->season;
    }
    public function getepisode()
    {
        return $this->episode;
    }


}
$breaking_bad = new TVSeries("1", "2", "Breaking_Bad","Spanish","9");

// Accesso ai valori dell'istanza della classe Figlio
echo "Titolo: " . $breaking_bad->getTitle() . "<br>";
echo "Lingua: " . $breaking_bad->getLanguage() . "<br>";

echo "Voto: " . $breaking_bad->getVote() . "<br>";

echo "Stagione: " . $breaking_bad->getseason() . "<br>";

echo "Episodio: " . $breaking_bad->getepisode() . "<br>";

var_dump( $breaking_bad->getSeason() );

