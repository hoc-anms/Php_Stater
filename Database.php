<?php
/**
 * Created by PhpStorm.
 * User: Hoc_Anms
 * Date: 8/21/2018
 * Time: 8:45 AM
 */
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="myDB";
    //create connection with database
    $conn=new mysqli($servername,$username,$password,$dbname);

    //check connection
    if($conn->connect_error){
        die("Connect Failed:".$conn->connect_error);
    }
    //create a database on mysql
    /*
    $sql="CREATE DATABASE dbname";
    if($conn->query($sql)=== TRUE){
        echo "Created database successful!";
    } else{
        echo "Error creating database".$conn->error;
    }
    */

    //create table in database
    /*
    $sql="CREATE TABLE MyGuests (
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
          firstname VARCHAR(30) NOT NULL,
          lastname VARCHAR(30) NOT NULL,
          email VARCHAR(50),
          reg_date TIMESTAMP
      )";
    if($conn->query($sql)=== TRUE){
        echo "Created Table MyGuests successful!";
    } else{
        echo "Error creating table".$conn->error;
    }
    */

    //insert value
    /*
    $sql="INSERT INTO MyGuests(firstname,lastname,email)
          VALUES 
                 ('F','Nguyen Van','nguyenvanf@gmail.com');
          ";

    if($conn->query($sql)===TRUE){
        $last_id=$conn->insert_id;//get last id
        echo "Inserted value to MyGuests successful, last id is ".$last_id;
    }else{
        echo "Error inserting values:".$sql."<br>".$conn->error;
    }
    */

    //Select data
    /*
    $sql="SELECT id,firstname,lastname,email FROM MyGuests";
    $result=mysqli_query($conn,$sql);//query sql statement to db

    if(mysqli_num_rows($result)>0){
        //output data each row
        while ($row=mysqli_fetch_assoc($result)){
            echo "id: ".$row["id"]. "- Name:" .$row["lastname"]." ".$row["firstname"]." Email:".$row["email"]."<br>";
        }
    }else{
        echo "0 results";
    }
    */

    //delete
    /*
    $sql="DELETE FROM MyGuests WHERE id=3";
    if ($conn->query($sql)==TRUE){
        echo "Id =3 deleted in record";
    }else{
        echo "Error deleting id=3".$conn->error;
    }
    */
    $sql="UPDATE MyGuests SET email='nguyenvana123@gmail.com' WHERE id=1";
    if($conn->query($sql)===True){
        echo "Record Updated id=3";
    }else{
        echo "Error updating".$conn->error;
    }
    $conn->close();