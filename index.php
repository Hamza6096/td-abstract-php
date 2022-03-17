<?php
abstract class Véhicule
{
    public abstract function demarrer(): void;
}

abstract class Voiture extends Véhicule implements Reparable
{
    public function reparer(): void
    {
        echo "La voiture est depanne<br>";
    }
    public function depanner(): void
    {
        echo "La voiture est depanne<br>";
    }
}

class Evoiture extends Voiture implements Chargeable
{
    public function demarrer(): void
    {
        echo "La voiture demarre<br>";
    }
    public function charger(): void
    {
        echo "La voiture charge<br>";
    }
}

interface Chargeable
{
    function charger(): void;
}
interface Reparable
{
    function reparer(): void;
    function depanner(): void;
}

$e = new Evoiture();
$e-> demarrer();
$e-> depanner();
$e-> reparer();
$e-> charger();
