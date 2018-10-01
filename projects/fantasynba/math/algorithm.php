<?php
    function calc ($database) {
        $letters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T"];
        $count = 0;
        
        for ($a = 1; $a < count($letters) - 9; $a++) {
            for ($b = $a + 1; $b < count($letters) - 8; $b++) {
                for ($c = $b + 1; $c < count($letters) - 7; $c++) {
                    for ($d = $c + 1; $d < count($letters) - 6; $d++) {
                        for ($e = $d + 1; $e < count($letters) - 5; $e++) {
                            for ($f = $e + 1; $f < count($letters) - 4; $f++) {
                                for ($g = $f + 1; $g < count($letters) - 3; $g++) {
                                    for ($h = $g + 1; $h < count($letters) - 2; $h++) {
                                        for ($i = $h + 1; $i < count($letters) - 1; $i++) {
                                            for ($j = $i + 1; $j < count($letters); $j++) {
                                                print($letters[$a] . $letters[$b] . $letters[$c] . $letters[$d] . $letters[$e] . $letters[$f] . $letters[$g] . $letters[$h] . $letters[$i] . $letters[$j] . "<br>");
                                                $count++;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        
        return $count;
    }
?>