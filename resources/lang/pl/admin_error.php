<?php

return [

    'name' => [
        'required' => 'Pole nazwy jest wymagane.',
        'string' => 'Nazwa musi być ciągiem.',
        'max' => 'Nazwa nie może być dłuższa niż 100 znaków.',
    ],
    'email' => [
        'required' => 'Pole nazwy jest wymagane.',
        'unique'=> 'Nazwa musi być prawidłowym adresem e-mail.',
        'unique' => 'Nazwa została już zajęta.',
    ],
    'password' => [
        'required' => 'Pole nazwy jest wymagane.',
        'string' => 'Nazwa musi być ciągiem.',
        'min' => 'Nazwa musi mieć co najmniej 6 znaków.',
        'max' => 'Nazwa nie może być dłuższa niż 12 znaków.',
    ],
    'role_id' => [
        'required' => 'Pole roli jest wymagane.',
        'in' => 'Wybrana rola jest nieprawidłowa.',
    ],
    'countries' => [
        'required' => 'Pole nazwy jest wymagane.',
        'array' => 'Nazwa musi być tablicą.',
    ],
    'is_active' => [
        'required' => 'Aktywne pole jest wymagane.',
        'required' => 'Wybór jest aktywny jest nieprawidłowy.',
    ],
    
   

 
];