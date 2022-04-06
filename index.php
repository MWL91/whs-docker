<?php

$students = [
    'Cha***' => 'Dylan Stephen',
    'Chi***' => 'Simon Panashe',
    'Fou***' => 'Ahmed',
    'Kha***' => 'Yassin',
    'Man***' => 'Laura Tinatsei',
    'Man***' => 'Godfrey',
    'Maz***' => 'Sibongile Tafadzwa',
    'Mus***' => 'Ropafadzo Mellisa',
    'Ruk***' => 'Emma Vassily',
    'Rur***' => 'Arnold',
    'Tem***' => 'Komila',
];

$questions = [
    'Do you have a pet?',
    'How old are you?',
    'Which country are you from?',
    'What\'s your favourite drink?',
    'Do love school?',
];

shuffle($students);

foreach ($students as $surname => $name) {
    echo $name;
    echo ": ";

    $count = count($questions) - 1;
    $key = rand(0, $count);
    echo $questions[$key];

    echo "\n";
}
