<?php
$name = $_POST['name'];
$age = $_POST['age'];
$gender= $_POST['gender'];
if($gender == "F"){
  if($age>= 18){
    echo "Bienvenido $name eres mayor de edad";
  }else {
    echo "Bienvenido $name eres menor de edad";
  }

}else{
  if($age>= 18){
    echo "Bienvenida $name eres mayor de edad";
  }else {
    echo "Bienvenida $name eres menor de edad";
  }
}
?>
