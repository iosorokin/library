<?php

declare(strict_types=1);
set_time_limit(2);
ini_set('memory_limit', '256M');

/**
 * Бинарный поиск в числовом диапазоне от 1 до n
 *
 * docker run -it --rm --name php_binary_list -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php binary_list.php
 */

$listCount = (int)trim(readline());
$item = (int)trim(readline());

echo binSearch($listCount, $item);

function binSearch(int $countList, int $item): string {
    if (isOutOfRange($countList, $item)) {
        exit('Ошибка ввода');
    }

    $selection = range(1, $countList);

    $lessIndex = 0;
    $moreIndex = $countList - 1;
    $tries = find($selection, $lessIndex, $moreIndex, $item);

    return $tries;
}

function find(array &$selection, int $lessIndex, int $moreIndex, int $item): string {
    static $n = 0;
    $n++;
    $middleIndex = getMiddleIndex($lessIndex, $moreIndex);
    $middleValue = $selection[$middleIndex];

    if ($middleValue < $item) {
        $lessIndex = $middleIndex + 1; // исключая найденный индекс + смещение значений относительно индекса
    } elseif ($middleValue > $item) {
        $moreIndex = $middleIndex - 1;
    } elseif ($middleValue === $item) {
        return "Найдено за $n действий" . PHP_EOL;
    }

    return find($selection, $lessIndex, $moreIndex, $item);
}

function isOutOfRange(int $countList, int $item): bool {
    return $item < 1 || $item > $countList;
}

function getMiddleIndex(int $lessIndex, int $moreIndex): int {
    return (int) ceil(($lessIndex + $moreIndex) / 2);
}
