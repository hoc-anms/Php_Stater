<?php
/**
 * Created by PhpStorm.
 * User: Hoc_Anms
 * Date: 8/20/2018
 * Time: 8:34 AM
 */
    $color ="red";
    $x=5+5;//global scope
    $y=5;
    echo "Hello World!".$color."<br>";
    echo "Hahaha"."<br>"."<hr>".$x;
    //variable global not call in function
    //wanna call in function use keyword "global"
    function myTest(){
        global $x;
        echo "<p>This is global variable use in function:$x </p>";
        $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    }
    myTest();
    echo "<p>This is global variable: x=$x</p>";
    echo "<p>Global in function:y=$y</p>";
    //Data Type in PHP

    var_dump($x);
    echo "<p></p>";

    class Car{
        public $model ="VWN";
        function setCarModel($car_model){
            $this->model=$car_model;
        }
        function getCarModel(){
            return   $this->model;
        }
    }
    //create a object
    $bmw=new Car();
    echo $bmw->getCarModel();
    echo "<p></p>";
    $bmw->setCarModel("BMW");
    echo $bmw->getCarModel();


    /*..............function in Strings.............*/
    // strlen() count number kytu
    echo "<p></p>";
    echo strlen("Hello world!"); // outputs 12
    //str_word_count() count number word
    echo "<p></p>";
    echo str_word_count("Hello world!"); // outputs 2
    //strrev() dao ky tu
    echo "<p></p>";
    echo strrev("Hello world!"); // outputs !dlrow olleH
    //strpos() count ky tu of word position
    echo "<p></p>";
    echo strpos("Hello world!", "world"); // outputs 6
    //
    echo "<p></p>";
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

    /*..............Constants............*/
    //syntax define(name, value, case-insensitive)
    define("ILU","I LOVE YOU",true);
    echo "<p></p>".ilu;
    function myTestConstant(){
        echo "<br>".ilu;
    }
    myTestConstant();

    /*............if else...............*/
    $t = date("H");//H=hours;

    if ($t < "20") {
        echo "<br>Have a good day!";
    }
    else echo "<br> Have a good night!";


    /*.........Switch.............*/
    $favcolor = "red";
    echo "<p></p>";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    echo "<p></p>";


    /*...............While Loops,For Loops,Foreach Loops............*/
    $z=4;
    while($z<=10){
        echo "This while loop with z= $z <br>";
        $z++;
    }
    for($i=0;$i<6;$i++){
        echo "This for loop with z = $z<br>";
        $z++;
    }
    $foreach=array("BMW","Luxury","Civic","Mardaz");
    foreach ($foreach as $value){
        echo "$value<br>";
    }



    /*................Function...............*/
    function    sum($h=5,$t=10){
        $g=$h+$t;
        return $g;
    }
    echo "5 + 10 = " . sum() . "<br>";//default argument value
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4)."<br>";



    /*............Arrays.....................*/
    $street=array("Hai Ba Trung","Tran Dai Nghia","Ho Tung Mau","Pho Hue");
    $_lengstreet=count($street);
    echo "Street in Hanoi:";
    for ($i=0;$i<$_lengstreet;$i++){
        echo "<br>".$street[$i];
    }



    /*..........Sort Arrays.............
    sort() - sắp xếp các mảng theo thứ tự tăng dần
    rsort() - sắp xếp các mảng theo thứ tự giảm dần
    asort() - sắp xếp các mảng liên kết theo thứ tự tăng dần, theo giá trị
    ksort() - sắp xếp các mảng liên kết theo thứ tự tăng dần, theo khóa
    arsort() - sắp xếp các mảng liên kết theo thứ tự giảm dần, theo giá trị
    krsort() - sắp xếp các mảng liên kết theo thứ tự giảm dần, theo khóa
    */
    echo "<p></p>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    ksort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty please write a name!";
        } else {
            echo $name;
        }
    }
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>"



    /*..........PHP Form Handling(xu ly)...............*/
?>
<form action="welcome_get.php" method="post"><!--get or post; post is security-->
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>


    <!--.........PHP Form Validation and Require User.......................*/-->
<?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

    <h2>PHP Form Validation Example</h2>
    <p><span style="color: red">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>" >
        <span style="color: red">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span style="color: red">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <span style="color: red"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40" ></textarea>
        <span style="color: red">*<?php echo "No Comment?";?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
        <input type="radio" name="gender"<?php if (isset($gender) && $gender=="other") echo "checked";?>  value="other">Other
        <span style="color: red">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

<?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?>

