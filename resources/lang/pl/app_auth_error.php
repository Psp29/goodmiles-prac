<?php

return [

    'username' => [
        'required' => 'Pole nazwy użytkownika jest wymagane.',
    ],
    'pin' => [
        'required' => 'PIN jest wymagany.',
        'integer' => 'PIN musi być liczbą całkowitą.',
        'digits' => 'Kod PIN musi mieć 6 cyfr.',
        'numeric' => 'PIN musi być liczbą.',
    ],
    'fcm_token' => [
        'required' => 'Pole tokenu fcm jest wymagane.',
    ],
    'device_token' => [
        'required' => 'Pole tokenu urządzenia jest wymagane.',
    ],
    'device_type' => [
        'required' => 'Pole typu urządzenia jest wymagane.',
    ],
    'forgot_token' => [
        'required' => 'Pole zapomnianego tokena jest wymagane.',
    ],
    'otp' => [
        'required' => 'Pole OTP jest wymagane.',
        'digits' => 'OTP musi składać się z 6 cyfr.',
    ],
    'reset_token' => [
        'required' => 'Pole tokenu resetowania jest wymagane.',
    ],
    'current_pin' => [
        'required' => 'Aktualne pole pin jest wymagane.',
        'digits' => 'Obecny kod PIN składa się z 6 cyfr.',
    ],
    'confirm_pin' => [
        'required' => 'Pole potwierdzenia pin jest wymagane.',
        'same' => 'PIN potwierdzający i PIN muszą się zgadzać.',
    ],
    'name' => [
        'required' => 'Pole nazwy jest wymagane.',
        'min' => 'Nazwa musi mieć co najmniej 2 znaki.',
        'max' => 'Nazwa nie może być dłuższa niż 30 znaków.',
    ],
    'username' => [
        'required' => 'Pole nazwy użytkownika jest wymagane.',
        'min' => 'Nazwa użytkownika musi mieć co najmniej 2 znaki.',
        'max' => 'Nazwa użytkownika nie może być dłuższa niż 20 znaków.',
        'alpha_num' => 'Nazwa użytkownika może zawierać tylko litery i cyfry.',
        'unique' => 'Nazwa użytkownika została już zajęta.',
    ],
    'email' => [
        'required' => 'Pole e-mail jest wymagane.',
        'min' => 'E-mail musi mieć co najmniej 2 znaki.',
        'max' => 'E-mail nie może być dłuższy niż 30 znaków.',
        'unique' => 'E-mail został już zajęty.',
    ],
    'company_name' => [
        'required' => 'Pole nazwy firmy jest wymagane.',
        'min' => 'Nazwa firmy musi mieć co najmniej 2 znaki.',
        'max' => 'Nazwa firmy nie może być dłuższa niż 30 znaków.',
    ],
    'registration_number' => [
        'alpha_num' => 'Numer rejestracyjny może zawierać tylko litery i cyfry.',
        'max' => 'Numer rejestracyjny nie może być dłuższy niż 12 znaków.',
    ],
    'dialing_code' => [
        'required' => 'Pole numeru kierunkowego jest wymagane.',
        'regex' => 'Wprowadź poprawny numer kierunkowy.',
    ],
    'phone' => [
        'required' => 'Pole telefonu jest wymagane.',
        'integer' => 'Telefon musi być liczbą całkowitą.',
        'digits_between' => 'Telefon musi mieć od 2 do 20 cyfr.',
    ],
    'address' => [
        'required' => 'Pole adresu jest wymagane.',
        'min' => 'Adres musi mieć co najmniej 2 znaki.',
        'max' => 'Adres nie może być dłuższy niż 30 znaków.',
    ],
    'country_id' => [
        'required' => 'Pole identyfikatora kraju jest wymagane.',
    ],
    'user_type' => [
        'required' => 'Pole typu użytkownika jest wymagane.',
        'min' => 'Typ użytkownika musi mieć co najmniej 2 znaki.',
        'max' => 'Typ użytkownika nie może być dłuższy niż 30 znaków.',
    ],
    'scheduled_deleted_date' => [
        'required' => 'Pole zaplanowanej daty usunięcia jest wymagane.',
        'date' => 'Zaplanowana data usunięcia nie jest prawidłową datą.',
        'date_format' => 'Zaplanowana data usunięcia nie jest zgodna z formatem R-m-d.',
    ],

];
