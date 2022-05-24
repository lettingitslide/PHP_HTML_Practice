<!-- LinkedIn Learning
*   PHP Essential Training  by Kevin Skoglund
*   PHP String syntax practice by James Tatum
*   I am using my own Strings and adding comments to clarify
*   some of my findings and experimentations.
*   
*   HTML comments. Since this is outside PHP, any PHP comments
    would be visible!  // or /* */
-->
/** This is an example of PHP comment outside PHP tags*/
<br />


<!DOCTYPE  html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>String Functions</title>
    </head>
    <body>
    <?php
    
    $greeting = "Hello";
    $target = "World";
    $phrase = $greeting . " " . $target;        // PHP concat uses "."
    echo $phrase;
    
    ?>
    <br />
    <?php
    
    $first = "Do you like";
    $second = " green eggs and ham?";
    
    $third = $first;
    $third .= $second;                          // assign with concat
    echo $third;
    
    ?>
    <br/>
    <!-- PHP String Functions -->
    Lowercase: <?php echo strtolower($third); ?><br />
    Uppercase: <?php echo strtoupper($third); ?><br />
    Uppercase first letter: <?php echo ucfirst($third); ?><br />
    Uppercase words: <?php echo ucwords($third); ?><br />
    <br />
    <!-- Length, trim, Find and replace -->
    strlen(String) return length of String <br />
    Length: <?php echo strlen($third); ?><br /><br />
    trim(String) removes leading / trailing whitespace <br />
    Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
    strstr(String haystack, String needle) finds substring (needle) in String (haystack) and returns <br /><br />
    everything after the needle <br />
    Find: <?php echo strstr($third, "eggs"); ?><br /><br />
    str_replace(String target, String replacement, String line) finds and replaces the target string <br />
    with the replacement String within the line <br />
    Original String: <?php echo $third; ?><br />
    Replace by String: <?php echo str_replace("Do you", "I do not", $third); ?><br /><br />
    <!-- substring, repeat, find position, find character -->
    <!-- Note that PHP starts position count at 1, unlike Java which starts at 0 -->
    Original String: <?php echo $third; ?><br />
    Substring(positions 13, length 18) : <?php
        $title = substr($third, 12, 18 );
        echo $title; ?><br />
        <?php
        echo substr($third, strlen($third) - 19, 18);
        ?><br />
    Using uppercase words with title substring:
        <?php echo ucwords($title); ?><br />
    Repeat: <?php 
        $guy = "That Sam I Am ";
        echo str_repeat($guy, 2); ?><br />
    Find position: <?php echo strpos($third, "eggs"); ?><br />
    Find char: <?php echo strchr($third, "g"); ?><br />
    
    </body>
</html>
 