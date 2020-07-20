<?php

    class Vehicles {

        // properties
        public $name;
        public $model;
        public $makeYear;
        public $color;
        public $fuelType;

        function __construct($na, $mo, $my, $co, $ft){

            $this->name         = $na;
            $this->model        = $mo;
            $this->makeYear     = $my;
            $this->color        = $co;
            $this->fuelType     = $ft;

        }

        function show() {
            echo "<p><b>Name:</b> $this->name <b>Model:</b> $this->model </p>";   
        }

    }

    $carOne =   new Vehicles("Mercedes","C63",2019,"silber","petrol");
    $carTwo =   new Vehicles("BMW","M4",2018,"darkgrey","petrol");
    $carThree = new Vehicles("Audi","RS8",2019,"skyblue","petrol");


    echo $carOne->show();
    echo $carTwo->show();
    echo $carThree->show();

    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
     
    class Ships extends Vehicles {

        public $volume;
        public $weight;
        public $shipType;

        function __construct($na, $mo, $my, $co, $ft,$vo, $we, $st) {
            
            parent::__construct($na, $mo, $my, $co, $ft);

            $this->volume   = $vo;
            $this->weight   = $we;
            $this->shipType = $st;

        }

        function show() {
            echo "<p><b>Volume:</b> $this->volume <b>Weight:</b> $this->weight </p>";   
        }
    }

    $shipArray = array(

        $shipOne = new Ships("Audi","RS8",2019,"skyblue","petrol",1000,2000,"medium"),
        $shipTwo = new Ships("Boot 2","schnell",2017,"green","diesel",2434,4534,"big"),
        $shipThree = new Ships("Boot3","slow",2019,"yellow","diesel",2500,6000,"gigantic")
    );

    // var_dump($shipArray);

    foreach ($shipArray as $name => $sound){
        echo $name;
        echo $sound;
    }

    

    // echo $shipOne->show();
    // echo $shipTwo->show();
    // echo $shipThree->show();

        

   












?>  