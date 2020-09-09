<?php
class Circle{
    private $radius; //radius of the Circle
    const Pi = 3.14;
    //Contructer
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    //Area of the Circle
    public function CircleArea(){
        return round((self::Pi * $this->radius),2) ;
    }
    //Curcumference of the Circle
    public function CircleCurcumference(){
        return round(($this->radius * 2 * self::Pi));
    }
}
if(isset($argv[1])){
    if(is_numeric($argv[1])){
        if($argv[1] > 0){
            $circle = new Circle($argv[1]);
            echo "The Area of the Circle is:". $circle->CircleArea().', ';
            echo "The Curcumference of the Circle is:". $circle->CircleCurcumference().' ';
        }else{
            echo "Please input a number bigger than 3";
        }
    }else{
        echo "The value is not number";
    }
}else{
    echo "The input can be null";
}