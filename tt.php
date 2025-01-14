<?php
 /* 
      require_once '../vendor/autoload.php';
      $loader=new Twig\Loader\FilesystemLoader('../template');  
      $twig=new \Twig\Environment($loader);
     $ar=array (
    'nname'=>'vaibhabsingh',
     'income'=>2000,
     );
    //connecting to the  database  through mysqli -> procedural
    $servername='localhost';
    $username="myadmin";
    $password="ALPHA@123";
  //creating the connection object
   $conn=mysqli_connect($servername,$username,$password);
  if(!$conn) {
    echo die("access denied" .mysqli_connect_error());
  }
  else {
    echo "connection was successful";
  }
     $a=1;
    //   while($a<5) {
    //     echo $a;
    //     echo '<br>';
    //     $a++;
    //   }
    // $x=var_dump($a);
    //echo 'hello world';
     
    echo $twig->render(
         
        ['br'=>$ar,  'name'=>'vaibhav','h'=>'Homee','x'=>$a,]
         
    );
     
     if($_SERVER['REQUEST_METHOD']==='POST'){
               $email=$_POST['email'];
               $password=$_POST['pass'];
               echo "Email is $email";
               echo "Password is $password";

               echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
               <strong>its Holy guacamole!</strong> You should check in on some of those fields below.
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
     }
     else{
      echo 'request invalid';
     }
 
    //  $sql="CREATE DATABASE BCRL3";
    //  $res=mysqli_query($conn,$sql);
    //  echo "the result is ";
    //  echo var_dump($res);


     $ml="DROP DATABASE BCRL2";
     $s=mysqli_query($conn,$ml);
     echo var_dump($s);
?>*/