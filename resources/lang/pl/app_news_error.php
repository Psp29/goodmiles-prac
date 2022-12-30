<?php

return [

    'country_id' => [
        'required' => 'Pole identyfikatora kraju jest wymagane.',
        'integer' => 'Identyfikator kraju musi być liczbą całkowitą.',
    ],
    'news_id' => [
        'required' => 'Pole identyfikatora wiadomości jest wymagane.',
        'integer' => 'Identyfikator wiadomości musi być liczbą całkowitą.',
    ],
    'page' => [
        'required' => 'Pole strony jest wymagane.',
        'integer' => 'Identyfikator strony musi być liczbą całkowitą.',
    ],
    'limit' => [
        'required' => 'Pole limitu jest wymagane.',
        'integer' => 'Limit musi być liczbą całkowitą.',
    ],

];
