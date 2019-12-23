<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'name' => 'PHPWomen',
    'sub_name' => 'BR',
    'email' => 'contato@phpwomen.org.br',
    'title' => 'PHPWomenBR',
    'description' => 'PHPWomen BR site',
    'keywords' => 'PHP,women,PHPWomen',
    'collections' => [
        'menu' => [
            'path' => function($page) {
                return $page->_meta->filename;
            }
        ]
    ]
];
