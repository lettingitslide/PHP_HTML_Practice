<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
   
<html lang="en">
    <head>
        <title>arrays</title>
    </head>
    <body>
    <?php
    $numbers = array(4,8,15,16,23,42);
    echo $numbers[0];
    ?>
    <br/>
    <?php $mixed = array(6, "green", "egg", "ham", array("a", "b", "z")); ?>
    <?php echo $mixed[2]; // print egg ?><br/>
    <?php echo $mixed[3]; // print ham ?><br/>
    
    <?php echo $mixed[3][0]; // print 1st char of 4th String ?><br />
    
    <?php $mixed[2] = "cat"; ?>
    <?php $mixed[4] = "mouse"; // PHP will automatically extend / append arrary ?>
    <?php $mixed[] = "horse"; // another append ?>
    
    <pre>
    <?php echo print_r($mixed); ?>
    </pre>
    
    <?php 
        // 5.4 php later uses an abbreviated syntax
        $array = [1,2,3];
        ?>
    </body>
</html>