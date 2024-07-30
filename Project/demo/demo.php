<?php
// $handler=fopen("txt1.txt","r");
// fseek($handler,7);
// $ans=fread($handler,filesize("txt1.txt"));
// echo $ans;
// class Fruits
// {
//     private $color;
//     private $name;

//     Function __construct($name,$color){
//         $this->name=$name;
//         $this->color=$color;


//     }

//     Function get_name(){
//         return $this->name;
//     }


//     Function get_color(){
//         return $this->color;
//     }

    
// }
// $obj1 = new Fruits('orage','red');
// echo $obj1->get_color();
// echo $obj1->get_name();
// echo "<br>";
// var_dump( $obj1 instanceof Fruits);

// ?>


<!-- <?php  

// interface A{
//     Function mi();
// }

// interface B{
//     Function mi2();
// }
 

//   trait Mytriat{
//     public Function traits(){
//         echo "trait is  calling";
//     }
//   }

//   class Myclass1 implements A,B{

//     use Mytriat;
//     public Function mi(){
//         echo "mi calling..";
//     }
//     public Function mi2(){
//         echo "mi calling..";
//     }

//   }
 
//     $obj = new Myclass1();
//     $obj->mi();
//     $obj->mi2();
//     $obj->traits();

?> -->

<?php  

// abstract class Myclass2{
//     abstract function m12();
//     function m3(){
//         echo "m3 is calling";
//     }
// }

// class mypro extends Myclass2{
//     function m12(){
//         echo "abstract methods calling..";
//     }
// }


// $obj2 = new  mypro();
// $obj2->m12();
// $obj2->m3();

?>

<?php
// $res = file("txt1.txt");
// echo filemtime("txt1.txt");




?>


<?php 

class Demo{

    public $x;
    public $y;
    Function __construct($x,$y){
        $this->x =$x;
        $this->y=$y;
        echo "The fruit is ". "<br>";
  	echo "The " . " is being deleted" . "<br>"; 
            
    }

    Function get_x(){
        return $this->x;
    }
    Function get_y(){
        return $this->y;
    }
}
$obj =new Demo("raja","hello");
echo $obj->get_x();
echo $obj->get_y();




?>