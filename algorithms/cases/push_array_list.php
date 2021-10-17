<?php

declare(strict_types=1);
ini_set('memory_limit', '256M');

/**
 * Замер времени добавления в связанный список, упорядоченный массив и стандартный массив на основе хеш-таблиц
 *
 * docker run -it --rm --name php_binary_list -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php push_array_list.php
 */

$count = 1e5;

$start = hrtime(true);

$list = new SplDoublyLinkedList();
for ($i = 0; $i < $count; $i++) {
    $list->push($i + 1);
}

$finish = hrtime(true) - $start;

echo "Добавление в связанный список $count элементов заняло $finish наносекунд" . PHP_EOL;

$start = hrtime(true);

$list = new SplFixedArray();
for ($i = 0; $i < $count; $i++) {
    $list->setSize($i + 1);
    $list[$i] = $i + 1;
}

$finish = hrtime(true) - $start;

echo "Добавление в упорядоченный массив $count элементов заняло $finish наносекунд" . PHP_EOL;

$start = hrtime(true);

$list = [];
for ($i = 0; $i < $count; $i++) {
    $list[$i] = $i + 1;
}

$finish = hrtime(true) - $start;

echo "Добавление в стандартный массив $count элементов заняло $finish наносекунд" . PHP_EOL;