<?php
$users = [
    [
        'name' => 'mr Dung',
        'age' => 28,
        'bank' => 200,
    ],
    [
        'name' => 'Mr Duy',
        'bank' => 250,
        'age' => 35,
    ],
    [
        'name' => 'Mr Linh',
        'bank' => 300,
        'age' => 25,
    ],
    [
        'name' => 'Mrs Trang',
        'bank' => 250,
        'age' => 25,
    ]
];
$tong = 0;
foreach ($users as $key => $values) {
    strtolower($values['name']);
    if (substr($values['name'], 0, 1) == 'mr' && $values['age'] >= 28) {
        $tong += $values['bank'];
    }
}

echo $tong;