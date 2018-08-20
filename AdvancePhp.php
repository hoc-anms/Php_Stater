<?php
/**
 * Created by PhpStorm.
 * User: Hoc_Anms
 * Date: 8/20/2018
 * Time: 12:59 PM
 */
/*...............Arrays Multi...........*/
session_start();
echo "<h1>Advance PHP</h1>";
 $car= array(
   array("BMW",18,20),
   array("Civic",20,17),
   array("Mardaz",18,19),
   array("Mercedez",25,30)
 );
 for($row=0;$row<4;$row++){
     echo "Number row $row";
     echo "<ul>";
     for ($col=0;$col<3;$col++){
         echo "<li>".$car[$row][$col]."</li>";

     }
     echo "</ul>";

 }
    echo "<p></p>";
 /*.................Date&Time...................*/
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    echo "The time is " . date("h:i:sa");



    /*................PHP file Open/Read.......................*/
    echo "<p></p>";
    $myfile=fopen("WebLanguge.txt","r") or die("Unable search file!");
    echo fread($myfile,filesize("WebLanguge.txt"));
    fclose($myfile);
echo "<p></p>";


/*..............Session................*/
    $_SESSION["favcolor"]="green";
    $_SESSION["favcar"]="BMW";
    // Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite car is " . $_SESSION["favcar"] . ".";
?>
<!--...........Up Load................-->
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>


<!--..............Filter...........-->
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    foreach (filter_list() as $id =>$filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
</table>

