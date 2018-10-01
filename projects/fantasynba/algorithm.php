<?php
    function calc ($players, $database) {
        $score = 0;
        
        //4 - PTS - Points (4466)
        for ($i = 0; $i < count($players); $i++) {
            $score += ($database[intval($players[$i])][4] * 140);
        }
        
        //7 - FG% - Field Goals % (508)
        for ($i = 0; $i < count($players); $i++) {
            $score += ($database[intval($players[$i])][7] * 10);
        }
        
        //10 - 3FG% - 3pt Field Goals % (403)
        for ($i = 0; $i < count($players); $i++) {
            $score += ($database[intval($players[$i])][10] * 10);
        }
        
        //13 - FT% - Free throw % (872)
        for ($i = 0; $i < count($players); $i++) {
            $score += ($database[intval($players[$i])][13] * 10);
        }
        
        //14 - OREB - Offensive rebounds (70)
        for ($i = 0; $i < count($players); $i++) {
            $score += ($database[intval($players[$i])][14] * 100);
        }
        
        //15 - DREB - Defensive rebounds (70)
        for ($i = 0; $i < count($players); $i++) {
            $score += ($database[intval($players[$i])][15] * 10);
        }
        
        //17 - AST - Assists (1375)
        for ($i = 0; $i < count($players); $i++) {
            $score += ($database[intval($players[$i])][17] * 250);
        }
        
        //18 - STL - Steals (78)
        for ($i = 0; $i < count($players); $i++) {
            $score += ($database[intval($players[$i])][18] * 60);
        }
        
        //19 - BLK - Blocks (80)
        for ($i = 0; $i < count($players); $i++) {
            $score += ($database[intval($players[$i])][19] * 100);
        }
        
        //20 - TOV - Turnovers (428.57)
        for ($i = 0; $i < count($players); $i++) {
            $score += (1 / $database[intval($players[$i])][20] * 1500);
        }
        
        return round($score / count($players));
    }
?>