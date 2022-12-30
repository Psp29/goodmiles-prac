<?php

return [

    'country_id' => [
        'required' => 'Pole identyfikatora kraju jest wymagane.',
    ], 
    'is_news_sms' => [
        'required' => 'Pole wiadomości SMS jest wymagane.',
        'in'=>'Wybrany SMS z wiadomościami jest nieprawidłowy.',
    ], 
    'is_marketing_sms' => [
        'required' => 'Pole SMS marketingowy jest wymagane.',
        'in'=>'Wybrany SMS marketingowy jest nieprawidłowy.',
    ], 
    'is_bids_received_sms' => [
        'required' => 'Pole otrzymane przez sms jest wymagane.',
        'in'=>'Wybrane oferty otrzymane przez SMS są nieprawidłowe.',
    ], 
    'is_news_notification' => [
        'required' => 'Pole powiadomienia o nowościach jest wymagane.',
        'in'=>'Wybrane powiadomienie o nowościach jest nieprawidłowe.',
    ], 
    'is_marketing_notification' => [
        'required' => 'Pole powiadomienia marketingowego jest wymagane.',
        'in'=>'Wybrane powiadomienie marketingowe jest nieprawidłowe.',
    ], 
    'is_bids_received_notification' => [
        'required' => 'Pole powiadomienia o otrzymaniu ofert jest wymagane.',
        'in'=>'Powiadomienie o otrzymaniu wybranych ofert jest nieprawidłowe.',
    ], 

];
