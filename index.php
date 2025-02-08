<?php

abstract class Ironman {
    protected static $count = 0;
    protected $model;

    public function __construct($model) {
        $this->model = $model;
        self::$count++;
    }

    abstract public function getModel();

    public static function getIronmanCount() {
        return self::$count;
    }
}

class Mark1 extends Ironman {
    public function __construct() {
        parent::__construct("Mark 1");
    }

    public function getModel() {
        return "Questo è il modello: " . $this->model;
    }
}

class Mark2 extends Ironman {
    public function __construct() {
        parent::__construct("Mark 2");
    }

    public function getModel() {
        return "Questo è il modello: " . $this->model;
    }
}

class Mark3 extends Ironman {
    public function __construct() {
        parent::__construct("Mark 3");
    }

    public function getModel() {
        return "Questo è il modello: " . $this->model;
    }
}

class Army {
    private $ironmen = [];

    public function __construct($count) {
        for ($i = 0; $i < $count; $i++) {
            $this->ironmen[] = $this->createRandomIronman();
        }
    }

    private function createRandomIronman() {
        $models = [new Mark1(), new Mark2(), new Mark3()];
        return $models[array_rand($models)];
    }

    public function showArmy() {
        foreach ($this->ironmen as $ironman) {
            echo $ironman->getModel() . "<br>";
        }
        echo "Totale Ironman creati: " . Ironman::getIronmanCount() . "<br>";
    }
}

// Creiamo un esercito di 10 Ironman
$ironmanArmy = new Army(10);
$ironmanArmy->showArmy();

?>
