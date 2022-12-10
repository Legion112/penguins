<?php
declare(strict_types=1);

function makePenguinArray():array
{
    return [
        [' ',' ',' ','_','~','_',' ',' ',' '],
        [' ',' ','(','o',' ','o',')',' ',' '],
        [' ','/',' ',' ','V',' ',' ','\\',' '],
        ['/','(',' ',' ','_',' ',' ',')','\\'],
        [' ',' ','^','^',' ','^','^',' ',' '],
    ];
}


$howManyPenguins = (int)fgets(STDIN);


$result = [
    [],
    [],
    [],
    [],
    [],
];
for($i=0; $i<$howManyPenguins; $i++) {
    foreach (makePenguinArray() as $index => $line) {
        array_push($result[$index], ...$line);
    }
    foreach ($result as $index => $_) {
        $result[$index][] = ' ';
    }
}

foreach ($result as $line) {
    echo implode('', $line) . PHP_EOL;
}
