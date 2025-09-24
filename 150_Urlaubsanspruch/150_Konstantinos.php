<?php

/*
 * Urlaubsanspruch
 *
 * Für die Bestimmung des Urlaubsanspruchs der Beschäftigten einer Firma
 * soll ein Programm entwickelt werden.
 * Die Grundlage für die Berechnung des Urlaubsanspruchs
 * bildet die Betriebsvereinbarung.
 * Das Programm soll die Anzahl der Urlaubstage für
 * jeweils einen Beschäftigten berechnen.

 * Betriebsvereinbarung:
 * Allen Beschäftigten stehen 26 Tage Urlaub zu.
 * Minderjährige Beschäftigte erhalten 30 Tage Urlaub.
 * Beschäftigte, die älter als 55 Jahre sind, erhalten 28 Tage Urlaub.
 * Beschäftigte mit einer Behinderung ab 50 % erhalten
 * zusätzlich 5 weitere Tage Urlaub.
 * Beschäftigte mit einer Betriebszugehörigkeit von mehr als 10 Jahren
 * erhalten 2 zusätzliche Tage Urlaub.
 */




class Mitarbeiter
{
    public $minderjarige;

    public $behinderung;

    public $alter;

    public $Betriebs;

    public function set_alter($alter)
    {
        $this->alter = $alter;
    }

    public function set_minderjahringe($minderjahringe)
    {
        $this->minderjahringe = $minderjahringe;
    }

    public function set_behinderung($behinderung)
    {
        $this->behinderung = $behinderung;
    }

    // Method to get the name
    public function set_Betriebs($Betriebs)
    {
        $this->Betriebs = $Betriebs;
    }
    public function set_basisurlaub($basisurlaub)
    {
        $this->basisurlaub = $basisurlaub;
    }
    public function set_gehalt($gehalt)
    {
        $this->gehalt = $gehalt;
    }

    public function get_alter()
    {
        return $this->alter;
    }

    public function get_minderjahringe()
    {
        return $this->minderjahringe;
    }

    public function get_behinderung()
    {
        return $this->behinderung;
    }

    public function get_Betriebs()
    {
        return $this->Betriebs;
    }
    public function get_gehalt()
    {
        return $this->gehalt;
    }

}
$basisurlaub = 26;
$mitarbeiter1 = new Mitarbeiter();
$mitarbeiter1->set_minderjahringe(false);
$mitarbeiter1->set_behinderung(true);
$mitarbeiter1->set_Betriebs(true);
$mitarbeiter1->set_alter(60);
$mitarbeiter1->set_gehalt($basisurlaub);


$mitarbeiter2 = new Mitarbeiter();
$mitarbeiter2->set_minderjahringe(false);
$mitarbeiter2->set_behinderung(true);
$mitarbeiter2->set_Betriebs(true);
$mitarbeiter2->set_alter(50);
$mitarbeiter2->set_gehalt($basisurlaub);

var_dump($mitarbeiter1);
function checkmitarbeiter($mitarbeiter1): int
{
    
    if ($mitarbeiter1->get_minderjahringe() == true) {
        $mitarbeiter1->set_gehalt($mitarbeiter1->gehalt+4);
    }
    if ($mitarbeiter1->get_alter() > 55) {
        $mitarbeiter1->set_gehalt($mitarbeiter1->gehalt+2);
    }
    if ($mitarbeiter1->get_Betriebs() == true) {
        $mitarbeiter1->set_gehalt($mitarbeiter1->gehalt+2);
    }
    if ($mitarbeiter1->get_Behinderung() == true) {
        $mitarbeiter1->set_gehalt($mitarbeiter1->gehalt+=5);
    }

    return $gehalt = $mitarbeiter1->get_gehalt();
}
var_dump(checkmitarbeiter($mitarbeiter1));
var_dump(checkmitarbeiter($mitarbeiter2));

