<?php

return [

    'name' => [
        'required' => 'Pole nazwy jest wymagane.',
        'string' => 'Nazwa musi być ciągiem.',
        'max' => 'Nazwa nie może być dłuższa niż 100 znaków.',
        'unique' => 'Nazwa została już zajęta.',
    ],
    'farmer_ids' => [
        'required' => 'Pole identyfikatora rolnika jest wymagane.',
    ],
    'status' => [
        'required' => 'Pole statusu jest wymagane.',
    ],

];