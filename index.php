<?php

$students = [
    '***' => 'Dylan Stephen',
    '***' => 'Simon Panashe',
    '***' => 'Ahmed',
    '***' => 'Yassin',
    '***' => 'Laura Tinatsei',
    '***' => 'Godfrey',
    '***' => 'Sibongile Tafadzwa',
    '***' => 'Ropafadzo Mellisa',
    '***' => 'Emma Vassily',
    '***' => 'Arnold',
    '***' => 'Komila',
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
