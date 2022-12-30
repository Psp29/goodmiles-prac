<?php

return [

    'date_of_movement' => [
        'required' => 'Wymagana jest data przemieszczenia.',
        'date_format' => 'Data przemieszczenia musi być w formacie R-m-d.',
    ],
    'tonnage' => [
        'required' => 'Pole tonażowe jest wymagane.',
        'integer' => 'Tonaż musi być liczbą całkowitą.',
    ],
    'commodity_id' => [
        'required' => 'Pole towaru jest wymagane.',
        'integer' => 'Towar musi być liczbą całkowitą.',
    ],
    'variety_id' => [
        'required' => 'Pole odmiany jest wymagane.',
        'integer' => 'Odmiana musi być liczbą całkowitą.',
    ],
    'specification_id' => [
        'required' => 'Pole specyfikacji jest wymagane.',
        'integer' => 'Specyfikacja musi być liczbą całkowitą.',
    ],
    'delivery_method' => [
        'required' => 'Pole metody dostawy jest wymagane.',
        'integer' => 'Metoda dostawy musi być liczbą całkowitą.',
    ],
    'delivery_address' => [
        'required_if' => 'Pole adresu dostawy jest wymagane, gdy metodą dostawy jest egzamin Ex.',
    ],
    'delivery_location_id' => [
        'required_if' => 'Pole miejsca dostawy jest wymagane, gdy sposobem dostawy jest dostarczanie .',
    ],
    'price' => [
        'required' => 'Pole Cena jest wymagane',
        'regex' => 'Cena powinna być poprawną liczbą',
        'max' => ':atrybut nie może być większy niż 11 cyfr',
    ],
    'postal_code' => [
        'required' => 'Pole Kod pocztowy jest wymagane',
        'integer' => 'Kod PIN musi być liczbą całkowitą.',
        'min' => 'Kod pocztowy musi mieć co najmniej 3 znaki.',
        'max' => 'Kod pocztowy nie może być dłuższy niż 7 znaków.',
    ],
    'page' => [
        'required' => 'Pole strony jest wymagane.',
        'integer' => 'Identyfikator strony musi być liczbą całkowitą.',
    ],
    'limit' => [
        'required' => 'Pole limitu jest wymagane.',
        'integer' => 'Limit musi być liczbą całkowitą.',
    ],
    'bid_id' => [
        'required' => 'Pole identyfikatora oferty jest wymagane.',
        'integer' => 'Identyfikator stawki musi być liczbą całkowitą.',
        'exists' => 'Wybrany identyfikator stawki jest nieprawidłowy.',
    ],
    'status' => [
        'required' => 'Pole statusu jest wymagane.',
        'integer' => 'Status musi być liczbą całkowitą.',
    ],
    'tonnage' => [
        'required_if' => 'Pole tonażu jest wymagane, gdy status jest aktywny.',
        'integer' => 'Tonaż musi być liczbą całkowitą.',
    ],
    'from_date' => [
        'before_or_equal' => 'Data od musi być datą wcześniejszą lub równą teraz.',
        'date' => 'Data od nie jest prawidłową datą.',
    ],
    'to_date' => [
        'before_or_equal' => 'Data od musi być datą wcześniejszą lub równą teraz.',
        'date' => 'Data od nie jest prawidłową datą.',
    ],
];
