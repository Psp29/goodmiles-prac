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
    'publish_on' => [
        'required' => 'Pole Data i godzina jest wymagane.',
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
        'in'=>'Stan jest nieprawidłowy.',
    ],
];