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

}