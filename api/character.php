<?php

if (!isset($_GET['name'])) {
    header("Status: 404");
    die('Name not found');
}

$charName = $_GET['name'];

$charInfo = array(
    'player'    => 'Jer',
    'name'      => $charName,
    'description' => array(
        'species'   => 'Bothan',
        'gender'    => 'male',
        'age'       => 42,
        'height'    => '1.3 meters',
        'build'     => 'wiry',
        'hair'      => 'brown',
        'eyes'      => 'green',
        'features'  => 'these are notable'
    ),
    'concept'   => 'this is a concept',
    'background'=> array(
        'obligations' => array (
            array(
                'type'        => 'debt',
                'description' => 'owes 30k credits to a hutt',
                'size'        => 8
            ),
            array(
                'type'        => 'debt',
                'description' => 'owes 10k credits to a hutt',
                'size'        => 4
            )
        ),
        'motivations' => array (
            array( 
                'type'        => 'relationship',
                'description' => 'extended family/clan'
            ),
            array( 
                'type'        => 'relationship',
                'description' => 'sentient dildo named chad'
            )
        ),
        'class' => 'middle'
    ),
    'careers' => array(
        array('class' => 'colonist', 'specialization' => 'politico'),
        array('class' => 'hired gun', 'specialization' => 'mercenary')
    ),
    'characteristics' => array(
        'brawn'     => 2,
        'agility'   => 2,
        'intellect' => 3,
        'cunning'   => 3,
        'willpower' => 3,
        'presence'  => 2
    ),
    'talents' => array(
        array(
            'name' => 'Convincing Demeanor',
            'function' => 'Remove black from deception/skullduggery'
        ),
        array(
            'name' => 'Kill with kindness',
            'function' => 'blah'
        )
    ),
    'skills' => array(
        array(
            'name' => 'Streetwise',
            'char' => 'cunning',
            'level' => 1
        ), 
        array(
            'name' => 'Charm',
            'char' => 'presence',
            'level' => 2
        ), 
        array(
            'name' => 'Deception',
            'char' => 'cunning',
            'level' => 2
        ), 
        array(
            'name' => 'Negotiation',
            'char' => 'presence',
            'level' => 1
        ), 
        array(
            'name' => 'Coercion',
            'char' => 'willpower',
            'level' => 1
        )
    ),
    'status' => array(
        'current_strain' => 0,
        'current_wound'  => 2,
    ),
    'inventory' => array(
        'character' => array(
            'credits' => 2253,
            'weapons'    => array(
                array(
                    'name'        => 'Light Blaster',
                    'value'       => 100,
                    'description' => 'Shooty and stuff',
                    'range'       => 'medium',
                    'damage'      => 5,
                    'critical'    => 4,
                    'skill'       => 'Ranged - Medium (ag)',
                    'hard_points' => 0,
                    'notes'       => 'no notes'
                ),
                array(
                    'name'        => 'Gaffi Stick',
                    'value'       => 110,
                    'description' => 'Pokey and stabby',
                    'range'       => 'engaged',
                    'damage'      => 2,
                    'critical'    => 3,
                    'skill'       => 'Melee (br)',
                    'hard_points' => 0,
                    'notes'       => 'Defensive 1; Disorient 3'
                )
            ),
            'armor'     => array(
                array(
                    'name'        => 'Heavy robes',
                    'value'       => 3,
                    'description' => 'robey',
                    'armor_value' => 1
                )
            )
        ),
        'group' => array(
            'credits' => 12235,
            'weapons'    => array(
                array(
                    'name'        => 'Light Blaster',
                    'value'       => 100,
                    'description' => 'Shooty and stuff',
                    'range'       => 'medium',
                    'damage'      => 5,
                    'critical'    => 4,
                    'skill'       => 'Ranged - Medium (ag)',
                    'hard_points' => 0,
                    'notes'       => 'no notes'
                )
            ),
            'misc'     => array(
                array(
                    'name'        => 'Yo-yo',
                    'value'       => 3,
                    'description' => 'Yo-yo',
                )
            )
        )
    ),
    'experience' => array(
        'total' => 200,
        'available' => 5
    )

);

header("Status: 200");
echo json_encode($charInfo);
        

