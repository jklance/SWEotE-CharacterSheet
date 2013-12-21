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
        'hair'      => 'brown',
        'eyes'      => 'green'
    ),
    'concept'   => null,
    'background'=> array(
        'obligations' => array (
            array(
                'type'        => 'debt',
                'description' => 'owes 30k credits to a hutt',
                'size'        => 8
            )
        ),
        'motivations' => array (
            array( 
                'type'        => 'relationship',
                'description' => 'extended family/clan'
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
    )
);

header("Status: 200");
echo json_encode($charInfo);
        

