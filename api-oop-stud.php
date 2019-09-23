<?php

    /**
     * Stringa con Nome e Cognome separati da spazio
     */
    trait FullName {
        public function FullName() {
            return $this -> name . " " . $this -> lastname  . "<br>";
        }  
    }
    
    class Persona {

        use FullName;

        public $name;
        public $lastname;
        public $address;

        public function __construct($name, $lastname, $address) {
            $this -> name = $name;
            $this -> lastname = $lastname;
            $this -> address = $address;
        }

        public function toString() {
            return $this -> FullName() . "Indirizzo: " . $this -> address . "<br>";
        }   
    }
    
    class Studente extends Persona {
        public $study;
        public $tax;

        public function __construct($name, $lastname, $address, $study, $tax) {
            parent::__construct($name, $lastname, $address);
            $this -> study = $study;
            $this -> tax = $tax;
        }

        public function toString() {
            return parent::toString() . "Programma di studi: " . $this -> study . "<br>" . "Importo tasse: " . $this -> tax . "<br>";
        }
    }

    class Prof extends Persona {
        public $matter;
        public $pay;

        public function __construct($name, $lastname, $address, $matter, $pay) {
            parent::__construct($name, $lastname, $address);
            $this -> matter = $matter;
            $this -> pay = $pay;
        }

        public function toString() {
            return parent::toString() . "Materia: " . $this -> matter . "<br>" . "Paga mensile: " . $this -> pay . "<br>";
        }
    }

    $persona = new Persona("Mario", "Rossi", "Via Roma 25 - Campobasso");
    $studente = new Studente("Luca", "Bianchi", "Via Pio IX 67 - Milano", "Giurisprudenza", "euro 2.000");
    $prof = new Prof("Paolo", "Verdi", "Viale Libia 67 - Roma", "Fisica", "euro 2.500");

    echo "PERSONA" . "<br>" . $persona -> toString() . "<br>";
    echo "STUDENTE" . "<br>" . $studente -> toString() . "<br>";
    echo "PROFESSORE" . "<br>" . $prof -> toString() . "<br>";

?>