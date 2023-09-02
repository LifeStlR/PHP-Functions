<?php
if(isset($_GET['func'])){
    if($_GET['func']=="convertScore"){
        convertScore($_GET['score']);
    }
    if($_GET['func']=="squareRoot"){
        squareRoot($_GET['input']);
    }
    if($_GET['func']=="hypotenuseTriangle"){
        $param1 = $_GET['input1'];
        $param2 = $_GET['input2'];
        hypotenuseTriangle($param1,$param2);
    }
}

function convertScore ($scoreString) {
    $score = (int)$scoreString;
    if ($score > 100 || $score < 0)
        echo "Score Tidak Valid";
    else if ($score >= 97)
            echo "A+";
    else if ($score >= 93)
            echo "A";
    else if ($score >= 90)
            echo "A-";
    else if ($score >= 87)
            echo "B+";
    else if ($score >= 83)
            echo "B";
    else if ($score >= 80)
            echo "B-";
    else if ($score >= 77)
            echo "C+";
    else if ($score >= 73)
            echo "C";
    else if ($score >= 70)
            echo "C-";
    else if ($score >= 67)
            echo "D+";
    else if ($score >= 65)
            echo "D";
    else if ($score < 65)
            echo "E/F";
        return;
 }

 function squareRoot ($input) {
    echo sqrt($input);
    return;
 }

function hypotenuseTriangle ($input1, $input2) {
    echo sqrt($input1*$input1+$input2*$input2);
    return;
}
?>