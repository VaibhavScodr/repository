<?php
   require_once '../vendor/autoload.php';
   $loader=new Twig\Loader\FilesystemLoader('../template');  
   $twig=new \Twig\Environment($loader);
   
   
    Class Emp{
       public $name;
       public $age;
       public $salary;
    }

   $ob=new Emp();
   $ob->$name='vaibhav';
   $ob->$age=21;
   $ob->$salary=10000;

   $setinfo = array(
        'title'=>'phpbest',
        'slogen'=>'myname',
   );
   
   $myhead = array(
      'pp'=>'exellence',
      'ps'=>'experties',
   );
    
  $mynewblock = array(
      'fname'=>'vaibhav',
      'lname'=>'singh',
      'name'=>'bcrl',
  );
  // echo $twig->render(
   //    'ch.html.twig',
   //    array('setinfo'=>$setinfo,
   //     'myhead'=>$myhead
   //    )
   // );
      
   echo $twig->render(
      'ch.html.twig', 
       
   );   
?>