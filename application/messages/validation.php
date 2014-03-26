<?php

defined('SYSPATH') or die('No direct script access.');

return array(
    'alpha' => '<strong>:field</strong> deve conter apenas letras',
    'alpha_dash' => ':field must contain only numbers, letters and dashes',
    'alpha_numeric' => ':field deve conter apenas números, letras e traços',
    'date' => '<strong>:field</strong> deve ser uma data',
    'digit' => '<strong>:field</strong> deve ser um dígito',
    'email' => '<strong>:field</strong> não é um endereço de email válido',
    'email_domain' => '<strong>:field</strong> deve conter um domínio de e-mail válido',
    'equals' => '<strong>:field</strong> deve ser igual a :param1',
    'exact_length' => '<strong>:field</strong> deve ser exatamente :param1 caracteres',
    'in_array' => '<strong>:field</strong> deve ser uma das opções disponíveis',
    'matches' => '<strong>:field</strong> deve ser o mesmo que :param1',
    'min_length' => '<strong>:field</strong> deve ser, no mínimo :param1 caracteres',
    'max_length' => '<strong>:field</strong> deve ser inferior a :param1 caracteres',
    'not_empty' => '<strong>:field</strong> é um campo obrigatório',
    'numeric' => '<strong>:field</strong> deve ser numérico',
    'is_numeric' => '<strong>:field</strong> deve ser numérico',
    'range' => '<strong>:field</strong> deve estar dentro do intervalo de :param1 para :param2',
    'regex' => '<strong>:field</strong> não corresponde ao formato exigido',
    'Model_User::regex_username' => 'O <strong>Username</strong> não pode ter espaços nem caracteres acentuados ou cedilhados',
    'url' => '<strong>:field</strong> deve ser um URL',
    'Model_User::check_old_password' => 'A <strong>Palavra-passe</strong> actual não é válida.',
    'Model_User::check_new_password' => 'A nova Palavra-passe actual tem que ser diferente da Palavra-passe actual.',
    'Model_Subscriber::unique_email' => 'O <strong>Email</strong> que inseriu já está registado na nossa base de dados.',
    'Model_User::unique_email' => 'O <strong>Email</strong> que inseriu já está existe na nossa base de dados.',
    'Model_User::unique_username' => 'O <strong>Username</strong> que inseriu já está existe na nossa base de dados.',
    'smaller_or_equal_than'=>'<strong>:field</strong> devem ser menores ou iguais aos <strong>:param1</strong>'
);