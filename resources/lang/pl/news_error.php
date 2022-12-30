<?php

return [

    'title' => [
        'required' => 'Pole tytułu jest wymagane.',
        'string' => 'Tytuł musi być ciągiem.',
    ],
    'short_description' => [
        'required' => 'Pole Krótki opis jest wymagane.',
        'string' => 'Krótki opis musi być ciągiem.'
    ],
    'description' => [
        'required' => 'Pole opisu jest wymagane.',
    ],
    'image' => [
        'required' => 'Pole obrazu jest wymagane.',
        'file' => 'Pole obrazu jest wymagane.',
        'mimes' => 'Nieprawidłowy format pliku.',
    ],
    'date_time' => [
        'required' => 'Pole Data i godzina jest wymagane.',
    ],
    'type' => [
        'required' => 'Pole typu jest wymagane',
        'in'=>'Typ jest nieprawidłowy.',
    ],
    'is_sms' => [
        'required' => 'Pole SMS jest wymagane.',
        'in'=>'Pole SMS jest nieprawidłowe.',
    ],
    'is_notification' => [
        'required' => 'Pole Powiadomienie jest wymagane.',
        'in'=>'Powiadomienie jest nieprawidłowe.',
    ],
    'status' => [
        'required' => 'Pole statusu jest wymagane.',
        'in'=>'Status nieprawidłowy.',
    ],
];
