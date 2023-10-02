<?php

include_once("vendor/autoload.php");
use Acme\Result;

$gp=$point="";
$msg="";
$err1=$err2=$err3=$err4="";
$sub1=$sub2=$sub3=$sub4="";
if(isset($_POST['submit'])){

    if(empty($_POST['num1'])){
        $err1="<span style='color: red'> Field is Required.</span>";
    }
    elseif (!is_numeric($_POST['num1'])) {
         $err1="<span style='color: red'> Input Numeric Data.</span>";
    }
    else{
        $sub1 = validate($_POST['num1']);
    }

    if(empty($_POST['num2'])){
        $err2="<span style='color: red'> Field is Required.</span>";
    }
    elseif (!is_numeric($_POST['num2'])) {
        $err2="<span style='color: red'> Input Numeric Data.</span>";
    }
    else{
        $sub2 = validate($_POST['num2']);
    }

    if(empty($_POST['num3'])){
        $err3="<span style='color: red'> Field is Required.</span>";
    }
    elseif (!is_numeric($_POST['num3'])) {
        $err3="<span style='color: red'> Input Numeric Data.</span>";
    }
    else{
        $sub3 = validate($_POST['num3']);
    }

    if(empty($_POST['num4'])){
        $err4="<span style='color: red'> Field is Required.</span>";
    }
    elseif (!is_numeric($_POST['num4'])) {
        $err4="<span style='color: red'> Input Numeric Data.</span>";
    }
    else{
        $sub4 = validate($_POST['num4']);
    }

    if(empty($sub1) || empty($sub2) || empty($sub3) || empty($sub4)) {
        $msg= "please! input data";
    }
    else{

        $x=new Result();
        $x->setGrade($sub1,$sub2,$sub3,$sub4);
       $gp= $x->getGrade();
      $point=$x->getPoint();

    }
}
function validate($data){
    $data=trim($data);
    //$data=stripcslashes($data);
    //$data=htmlspecialchars($data);

    return $data;
}

?>
<html>
<HEAD>
    <title>calculator</title>

</HEAD>
<body>
<style>
    .block{

        height: 500px;
        width: 450px;
        background-color: #f0f0f0;
        margin: 0 auto;

        box-shadow: 2px 2px 3px #cccccc;
    }
    .label{
        height: 50px;
        width: 450px;
        background: #0783E3;
        color: white;
        font-size: 25px;
        text-align: center;
        margin-bottom: 10px;
    }
    .input{
        margin: 10px;
        width: 250px;
        border: 1px solid #0783E3;
        height: 30px;
        border-radius: 5px;
        padding-left: 20px;

    }
    .btn1{
        height: 30px;
        width: 100px;
        margin-left: 10px;
        background: #0783E3;
        color: #ffffff;
        font-size: 20px;
        font-family: "Times New Roman";
    }
    .btn{
        margin-left: 20px;
        margin-top: 10px;
    }
    .output{
       margin-top: 50px;
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        font-family: "Times New Roman";
    }
</style>
<form method="post">
    <div class="block">
        <div class="label"> <label class="label">Grading System</label></div>
        <input type="tel" name="num1" class="input" value="" placeholder="Subject 1"> * <?php echo $err1; ?>
        <input type="tel" name="num2" class="input" value=""  placeholder="Subject 2"> * <?php echo $err2; ?>
        <input type="tel" name="num3" class="input" value=""  placeholder="Subject 3"> * <?php echo $err3; ?>
        <input type="tel" name="num4" class="input" value=""  placeholder="Subject 4"> * <?php echo $err4; ?>

        <div class="btn">
            <input type="submit" name="submit" value="Submit" class="btn1">
        </div>

        <div class="output">

            <label>
                <?php
                if(isset($_POST['submit']))
                {
                    if(empty($gp)){
                        echo "";
                    }
                    else
                    {
                        echo "<p>".$gp."</p>"."<p> Your GPA = ";
                       printf("%.2f", $point);
                    }
                }
                else {
                    echo "";
                }
                ?>
            </label>

        </div>

    </div>
</form>
<!-- regula expression// phone num validation-->
</body>
</html>

