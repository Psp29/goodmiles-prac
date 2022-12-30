<?php

return [

    'name' => [
        'required' => 'Pole nazwy jest wymagane.',
        'string' => 'Nazwa musi być ciągiem.',
    ],
    'username' => [
        'required' => 'Pole nazwy użytkownika jest wymagane.',
        'max' => 'Nazwa użytkownika nie może być dłuższa niż 100 znaków.',
        'unique' => 'Ta nazwa użytkownika jest już zajęta.',
        'alpha_dash' => 'The username field does not allowed extra space'
    ],
    'email' => [
        'required' => 'Pole e-mail jest wymagane.',
        'unique' => 'Adres e-mail jest już zajęty.',
    ],
    'company_name' => [
        'required' => 'Pole nazwy firmy jest wymagane.',
        'max' => 'Nazwa firmy nie może być dłuższa niż 100 znaków.',

    ],
    'pin' => [
        'required' => 'Pole pinezki jest wymagane.',
        'min' => 'Kod PIN musi mieć co najmniej 6 znaków.',
        'max' => 'Kod PIN nie może być dłuższy niż 12 znaków.',

    ],
    'dialing_code' => [
        'required' => 'Pole numeru kierunkowego jest wymagane.',
        'regex' => 'Niepoprawny format',
    ],
    'phone' => [
        'required' => 'Pole telefonu jest wymagane.',
        'integer' => 'Telefon musi być liczbą całkowitą',
        'digits_between' => 'Telefon musi mieć od 2 do 20 cyfr.'
    ],
    'address' => [
        'required' => 'Pole adresu jest wymagane.',
        'min' => 'Adres musi mieć co najmniej 2 znaki.',
        'max' => 'Adres nie może być dłuższy niż 30 znaków.',
    ],
    'user_type' => [
        'required' => 'Pole typu użytkownika jest wymagane.',
    ],
    'others' => [
        'required_if' => 'To pole jest wymagane.',
    ],
    'status' => [
        'required' => 'Pole statusu jest wymagane.',
    ],
    'reason' => [
        'required_if' => 'Pole przyczyny jest wymagane.',
    ],

    'is_news_sms' => [
        'required' => 'Pole Nowy SMS jest wymagane.',
    ],

    'is_marketing_sms' => [
        'required' => 'Pole SMS marketingowy jest wymagane.',
    ],

    'is_bids_received_sms' => [
        'required' => 'Pole Licytuj SMS jest wymagane.',
    ],

    'is_news_notification' => [
        'required' => 'Pole Powiadomienie o wiadomościach jest wymagane.',
    ],

    'is_marketing_notification' => [
        'required' => 'Pole Powiadomienie marketingowe jest wymagane.',
    ],

    'is_bids_received_notification' => [
        'required' => 'Pole Oferta jest wymagane.',
    ],
];
