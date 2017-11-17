<?php
class MyClass {
    /* This is a comment */
    var $myvar ;

    function SetVar($var){
        $this->myvar = $var ;
    }
    function GetVar(){
     echo $this->myvar ." <br/>" ;
    }
}
/* instance object from Class */
$Myobj1 = new MyClass ;
$Myobj2 = new MyClass ;

/* Set value to a function */
$Myobj1->SetVar(10);
$Myobj2->SetVar(300);

/* Get value from a function */
$Myobj1->GetVar();
$Myobj2->GetVar();
?>