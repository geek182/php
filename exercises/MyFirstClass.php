    <?php
class MyClass {
    /* This is a comment */
    var $myvar ;
    var $myvar_with_construct ;
    
    /* Construct function */
    function __construct($arg1){
        $this->myvar_with_construct = $arg1 ;  
    }

    function SetVar($var){
        $this->myvar = $var ;
    }
    function GetVar(){
     echo $this->myvar ." <br/>" ;
    }
    function GetVarWithConstruct(){
        echo $this->myvar_with_construct;
    }
}
/* instance object from Class */
$Myobj1 = new MyClass(10) ;
$Myobj2 = new MyClass(11) ;

/* Set value to a function */
$Myobj1->SetVar(10);
$Myobj2->SetVar(300);

/* Get value from a function */
$Myobj1->GetVar();
$Myobj2->GetVar();
$Myobj1->GetVarWithConstruct();
$Myobj2->GetVarWithConstruct();

?>