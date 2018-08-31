<?php

function rangerMessage ($level)
{
    $message = "";
    
    if($level >= 1 && $level <= 7)
    {
        $message = "*Receives +" . $level . " damage bonus against goblinoids and giants (bugbears, orcs, <br/>kobolds, 
        goblins, hobgoblins, ogres, ettins, all giants and trolls).<br/>
        *Only surprised on 1 on 1d6; may surprise others on 1-3 on 1d6.<br/>
        *Able to track creatures in the wilderness and underground environments<br/>
        (wilderness base chance is 90%; underground base chance is 65%).<br/>
        ";   
    }
    else if($level == 8)
    {
        $message = "*Receives +" . $level . " damage bonus against goblinoids and giants (bugbears, orcs, <br/>kobolds, 
        goblins, hobgoblins, ogres, ettins, all giants and trolls).<br/>
        *Only surprised on 1 on 1d6; may surprise others on 1-3 on 1d6.<br/>
        *Able to track creatures in the wilderness and underground environments<br/>
        (wilderness base chance is 90%; underground base chance is 65%).<br/>
        *Able to cast Druid Spells.<br/>
        ";   
    }
    else if($level == 9)
    {
        $message = "*Receives +" . $level . " damage bonus against goblinoids and giants (bugbears, orcs, <br/>kobolds, 
        goblins, hobgoblins, ogres, ettins, all giants and trolls).<br/>
        *Only surprised on 1 on 1d6; may surprise others on 1-3 on 1d6.<br/>
        *Able to track creatures in the wilderness and underground environments<br/>
        (wilderness base chance is 90%; underground base chance is 65%).<br/>
        *Able to cast Druid and Magic-User Spells.<br/>
        ";   
    }
    else if($level >= 10)
    {
        $message = "*Receives +" . $level . " damage bonus against goblinoids and giants (bugbears, orcs, <br/>kobolds, 
        goblins, hobgoblins, ogres, ettins, all giants and trolls).<br/>
        *Only surprised on 1 on 1d6; may surprise others on 1-3 on 1d6.<br/>
        *Able to track creatures in the wilderness and underground environments<br/>
        (wilderness base chance is 90%; underground base chance is 65%).<br/>
        *Able to cast Druid and Magic-User Spells.<br/>
        *Able to employ any magical item, excluding scrolls, which confers the<br/>
         ability to employ clairaudience, clairvoyance, ESP or telepathy.<br/>
         *Attains 3d6 1st and 2nd level followers from the ranger, cleric, fighter or<br/>
         magic-user classes (determined randomly; no more than 2 ranger followers).
        ";   
    }
    
    return $message;
}





?>