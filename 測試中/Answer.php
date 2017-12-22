<?php
        header("Content-Type:text/html; charset=utf-8");
        $Q1 = $_POST['Q1'];
        $Q2 = $_POST['Q2'];
        $Q3 = $_POST['Q3'];
        $Q4 = $_POST["Q4"];
        $Q5 = $_POST["Q5"];
        $Q6 = $_POST["Q6"];
        $Q7 = $_POST["Q7"];
        $Q8 = $_POST["Q8"];
        $Q9 = $_POST["Q9"];
        $Q10 = $_POST["Q10"];

        $score = 0;

        if($Q1 == "A1"){
                $score = $score + 10;
        }else{
                echo "Q1錯誤<br>";
        }

        if($Q2 == "A2"){
                $score = $score + 10;
        }else{
                echo "Q2錯誤<br>";
        }

        if($Q3 == "A3"){
                $score = $score + 10;
        }else{
                echo "Q3錯誤<br>";
        }
        
        if($Q4 == "A3"){
                $score = $score + 10;
        }else{
                echo "Q4錯誤<br>";
        }
        if($Q5 == "A3"){
                $score = $score + 10;
        }else{
                echo "Q5錯誤<br>";
        }
        if($Q6 == "A3"){
                $score = $score + 10;
        }else{
                echo "Q6錯誤<br>";
        }
        if($Q7 == "A3"){
                $score = $score + 10;
        }else{
                echo "Q7錯誤<br>";
        }
        if($Q8 == "A3"){
                $score = $score + 10;
        }else{
                echo "Q8錯誤<br>";
        }
        if($Q9 == "A3"){
                $score = $score + 10;
        }else{
                echo "Q9錯誤<br>";
        }

        if($Q10 == "A3"){
                $score = $score + 10;
        }else{
                echo "Q10錯誤<br>";
        }
        echo "<br>您的分數為:".$score;

?>