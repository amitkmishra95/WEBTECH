<?php



echo "Implementation of class <br>";

class car{
   public $model;
   public $year;
    // function __construct(){
    //     echo "default";
    // }
     function __construct($model,$year) {
        // echo "D";
        $this->model = $model;
        $this->year = $year;
        
    }

     function getdata(){
        return "Model is $this->model and Year is $this->year";
    }
}

// $obj = new car();
 $obj = new car('scoda',2000);
echo ($obj->getdata());

?>