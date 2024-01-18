<?php

 abstract Class Vertebrates {

    public function __construct(){
      
    }

    protected function Vertebrati(){
        return "Sono un animale vertebrato \n";
    }
}

// ANIMALI A SANGUE CALDO
Class WarmBlooded extends Vertebrates {

    public function __construct(){
        parent::__construct();
       
    }

    protected function SangueCaldo(){
        return "Sono un animale a sangue caldo \n";
    }
}

Class Mammals extends WarmBlooded {

    public function __construct(){
        parent::__construct();
        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueCaldo();
        echo "ROAR! \n";
    }
}

Class Birds extends WarmBlooded {

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueCaldo();
        echo "CIP CIP! \n";
    }
}

// ANIMALI A SANGUE FREDDO

Class ColdBlooded extends Vertebrates {

    public function __construct(){
        parent::__construct();

        
    }

    protected function SangueFreddo(){
        return "Sono un animale a sangue freddo \n";
    }
}

Class Fish extends ColdBlooded {

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "SPLASH! \n";
    }
}

Class Reptiles extends ColdBlooded {

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "PSSSS! \n";
    }
}

Class Amphibians extends ColdBlooded {

    public function __construct(){
        parent::__construct();

        $this->printClass();
    }

    protected function printClass(){
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "CRAK CRAK! \n";
    }
}

$magikarp = new Fish();
$lion = new Mammals();
$bird = new Birds();
$snake = new Reptiles();
$frog = new Amphibians();
