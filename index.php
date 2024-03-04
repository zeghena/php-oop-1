<?php


class Production
{
    public $title;

    public $language;

    public $vote;


    function __construct($title,$language,$vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
    
    
    public function getTitle()
    {
        return $this->title;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getVote()
    {
        return $this->vote;
    }
    
}


$dexter = new Production("Dexter","English","8");
$dexter->title = "Dexter";
$dexter->language = "English";
$dexter->vote = "8";

$braking_bad = new Production("Braking_Bad","Spanish","9");
$braking_bad->title = "Braking_Bad";
$braking_bad->language = "Spanish";
$braking_bad->vote = "9";

$true_detective = new Production("True_Detective","English","10");
$true_detective->title = "True_Detective";
$true_detective->language = "English";
$true_detective->vote = "10";

$gomorra = new Production("Gomorra","Italian","9.5");
$gomorra->title = "Gomorra";
$gomorra->language = "Italian";
$gomorra->vote = "9.5";

// Istanzia almeno due oggetti Production
$dexter = new Production("Dexter", "English", 8);
$breaking_bad = new Production("Breaking Bad", "Spanish", 9);

// Stampa i valori dei due oggetti Production
echo "Titolo: " . $dexter->getTitle() . "<br>";
echo "Lingua: " . $dexter->getLanguage() . "<br>";
echo "Voto: " . $dexter->getVote() . "<br><br>";

echo "Titolo: " . $breaking_bad->getTitle() . "<br>";
echo "Lingua: " . $breaking_bad->getLanguage() . "<br>";
echo "Voto: " . $breaking_bad->getVote() . "<br>";
?>
