<?php

/*Fighter, Paladin, Ranger*/

function experienceNextLevel ($level)
{
    $xp = "0";

    switch($level)
    {
        case 1:
            $xp = "2,235";
            break;
            
        case 2:
            $xp = "4,465";
            break;
            
        case 3:
            $xp = "8,925";
            break;
            
        case 4:
            $xp = "17,851";
            break;
            
        case 5:
            $xp = "35,701";
            break;
            
        case 6:
            $xp = "71,401";
            break;
            
        case 7:
            $xp = "135,001";
            break;
            
        case 8:
            $xp = "255,001";
            break;
            
        case 9:
            $xp = "375,001";
            break;
            
        case 10:
            $xp = "495,001";
            break;
            
        case 11:
            $xp = "615,001";
            break;
            
        case 12:
            $xp = "735,001";
            break;
            
        case 13:
            $xp = "855,001";
            break;
            
        case 14:
            $xp = "975,001";
            break;
            
        case 15:
            $xp = "1,095,001";
            break;
            
        default:
            $xp = "___";
            
    }
    
    return $xp;
}


function thacoAdjust ($level)
{
    $minusThaco = 1;
    
    if($level == 3)
    {
        $minusThaco = 2;
    }
    else if($level == 4)
    {
        $minusThaco = 3;
    }
    else if($level == 5)
    {
        $minusThaco = 4;
    }
    else if($level == 6)
    {
        $minusThaco = 5;
    }
    else if($level >= 7 && $level <= 8)
    {
        $minusThaco = 6;
    }
    else if($level == 9)
    {
        $minusThaco = 7;
    }
    else if($level >= 10 && $level <= 11)
    {
        $minusThaco = 8;
    }
    else if($level == 12)
    {
        $minusThaco = 9;
    }
    else if($level == 13)
    {
        $minusThaco = 10;
    }
    else if($level == 14)
    {
        $minusThaco = 11;
    }
    else if($level == 15)
    {
        $minusThaco = 12;
    }
    
    return $minusThaco;
}

function saveBreathAttacks ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 15;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 13;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 9;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 7;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 5;
    }
    
    return $save;
}

function savePoisonDeath ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 12;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 10;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 8;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 6;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 4;
    }
    
    return $save;
}

function savePetrify ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 14;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 12;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 12;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 8;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 6;
    }
    
    return $save;
}


function saveWand ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 13;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 11;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 9;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 7;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 5;
    }
    
    return $save;
}


function saveSpell ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 16;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 14;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 12;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 10;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 8;
    }
    
    return $save;
}



?>