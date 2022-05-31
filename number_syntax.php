<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
   
<html lang="en">
    <head>
        <title>Number_Syntax</title>
    </head>
    <body>
        <?php
            $var1 = 3;
            $var2 = 4;
        ?>
        Basic Math: <?php echo ((1 + 2 + $var2) * $var2) / 2 - 5; ?><br/>
        <br />
        Helpful functions <br />
        Absolute value:     <?php echo abs(0 - 300);    ?><br />
        Exponential:        <?php echo pow(2,8);        ?><br />
        Square root:        <?php echo sqrt(100);       ?><br />
        Modulo:             <?php echo fmod(20,7);      ?><br />
        Random:             <?php echo rand();          ?><br />
        Random(min,max):    <?php echo rand(1,10);      ?><br />
        <br/>
        $var2: <?php echo $var2;    ?><br />
        Increment:  <?php $var2++; echo $var2;  ?><br />
        Decrement:  <?php $var2--; echo $var2;  ?><br />
        <br />
        += : <?php $var2 += 4; echo $var2;  ?><br />
        -= : <?php $var2 -= 4; echo $var2;  ?><br />
        *= : <?php $var2 *= 4; echo $var2;  ?><br />
        /= : <?php $var2 /= 4; echo $var2;  ?><br />
        <br />
        Strings and integer variables are different.<br />
        Do not rely on php to convert Strings to integers!<br / >
        2 Examples of bad code: <br />
        echo 1 + "1":       <?php echo 1 + "1"; ?><br />
        echo 1 + "1 house": <?php echo 1 + "2 houses"; ?><br />
        <br />
        Floating Points <br />
        $float:         <?php echo $float = 3.14; ?><br />
        $float + 7 :    <?php echo $float + 7; ?><br />
        4/3 (Handleed different that java):      <?php echo 4/3; ?><br />
        <br />
        Floating functions <br />
        Round:              <?php echo round($float, 1);    ?><br />
        Ceiling (ceil):     <?php echo ceil($float);        ?><br />
        Floor:              <?php echo floor($float);       ?><br />
        <br />
        
        Int or float methods (return boolean) <br />
        $integer = <?php $integer = 3; echo $integer; ?><br/>
        $float = <?php echo $float; ?><br/>
        <br/>
        <?php echo "Is {$integer} integer? " . is_int($integer); ?><br/>
        <?php echo "Is {$float} integer? " . is_int($float); ?><br/>  
        <br/>
        <?php echo "Is {$integer} float? " . is_float($integer); ?><br/>
        <?php echo "Is {$float} float? " . is_float($float); ?><br/>  
        <br/>
        <?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br/>
        <?php echo "Is {$float} numeric? " . is_numeric($float); ?><br/>  
        <br/>
    </body>
</html>