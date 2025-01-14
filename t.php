<?php
       require_once '../vendor/autoload.php';
       $loader=new Twig\Loader\FilesystemLoader('../template');  
       $twig=new \Twig\Environment($loader);
       
      
     //  if($_SERVER['REQUEST_METHOD']==='POST') {
     //      $name=$_POST['name'];
     //      $emp=$_POST['emp_id'];
     //      $salary=$_POST['salary'];

     //      echo $name;
     //      echo $emp;
     //      echo $salary;
     //  }
      // handling the form 
      $servername='localhost';
      $username='myadmin';
      $password='ALPHA@123';
      $database="newDB";
     /*
     //  1. connection was made in this time snippet*/
     $conn=mysqli_connect($servername,$username,$password,$database);
     if($_SERVER['REQUEST_METHOD']==='POST') {
          $name=$_POST['name'];
          $emp=$_POST['emp_id'];
          $salary=$_POST['salary'];

          echo $name;
          echo $emp;
          echo $salary;
      }
     /*
     //  //$res=mysqli_connect($conn);
     //  if($conn){
     //      echo "done this db";
     //  }
     //  else{
     //      die("not make db".$mysqli_coonect_error());
     //  }
     */
     // now i am making the database
     /* 
     //  2. here i have created the db successfully
     $sql="CREATE DATABASE newDB";
     $res=mysqli_query($conn,$sql);
     if($res){
          echo "successfully database was created ";
     }
     else{
          die("sorry! we could not create it ".$mysqli_connect_error());
     }
   */

   //3. now create the table in db
   /*
    $create = "CREATE TABLE record (
     name VARCHAR(20) NOT NULL,
     emp_id INT PRIMARY KEY,
     salary INT NOT NULL
 );";
 
   $exe=mysqli_query($conn,$create);

   if($exe){
     echo "successfully table was created";
   }
   else{
     echo die("sorry! there was an error");
   }
     */
   // 4. now insert the records in the same table in the formate
   /* all records were inserted
   $insert="INSERT INTO record(name,emp_id,salary) VALUES('sanskar',123,1000)";
   $exe_ins=mysqli_query($conn,$insert);

   if($exe_ins){
     echo "records was successfully inserted ";
   }
     else{
          echo "sorry! there was error";
     }
     */
    // print or display that data colleceted by the queries
    /*
    $s="SELECT * FROM record";
    $a=mysqli_query($conn,$s);
    
    $result=mysqli_num_rows($a);
    if($result>0){
        $i=0;
        
        while($i<$result){
          $row=mysqli_fetch_assoc($a);
          echo var_dump($row);
          $i++;
        }
         
    }
        */
   /// where clause use in this
   /*
    $nq="SELECT * FROM record WHERE salary < 4000";
    $execute=mysqli_query($conn,$nq);
    echo mysqli_num_rows($execute);
    $i=0;
    while($i!=mysqli_num_rows($execute)) {
        $rows=mysqli_fetch_assoc($execute);
        echo var_dump($rows);
        $i++;
    }
        */  
    // update queries
    /*
    $update_query="UPDATE record SET name='vaibhav' WHERE name='vaibhavsingh'";
    $updation=mysqli_query($conn,$update_query);
     if($updation) {
      echo "we have updated the record";
     }
     else{
       echo "not ";
     }
   */
  // delete queries
  $delete="DELETE FROM record WHERE emp_id=1";
  $delete_query=mysqli_query($conn,$delete);
  $nums=mysqli_affected_rows($conn);
  echo $nums;
  if($delete_query){
    echo "deleted records";
  }
  else{
    echo "not deleted records";
  }

     echo $twig->render(
          'form.html.twig', ['title'=>'BCRL'],
      );
?>