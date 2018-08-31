/*HitPoints randomly generate hit points*/
function hitPoints (level, hdOption, constitutionModifier)
{
    let hitPoints = 0;
    let hitDice = 0;
    
    if(hdOption == 1)
        {
            hitPoints += Math.floor((Math.random() * 6) + 1);
        }
    else
        {
            hitPoints += Math.floor((Math.random() * 8) + 1);
        }
    
    
    if(level <= 9)
        {
            hitDice = level;
        }
    else
        {
            hitDice = 9;
        }
    
    if(hdOption == 1)
        {
    
            for(let counter = 0; counter < hitDice; counter++)
                {
                    let points = 0;

                    points = Math.floor((Math.random() * 6) + 1) + constitutionModifier;

                    if(points < 3)
                        {
                            points = 3;
                        }

                    hitPoints += points;
                }
        }
    else
    {
    
            for(let counter = 0; counter < hitDice; counter++)
                {
                    let points = 0;

                    points = Math.floor((Math.random() * 8) + 1) + constitutionModifier;

                    if(points < 4)
                        {
                            points = 4;
                        }

                    hitPoints += points;
                }
    }

    return hitPoints;
}

function addHighLevelHp(input)
{
    let addHp = 0;
    
    if(input == 10)
        {
            addHp = 2;
        }
    else if(input == 11)
        {
            addHp = 4;
        }
    else if(input == 12)
        {
            addHp = 6;
        }
    else if(input == 13)
        {
            addHp = 8;
        }
    else if(input == 14)
        {
            addHp = 10;
        }
    else if(input == 15)
        {
            addHp = 12;
        }
    
    return addHp;
}