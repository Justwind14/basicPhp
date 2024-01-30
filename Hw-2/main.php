<?php
/*
    Задание 1:
    Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа,
    третий – операция. Обязательно использовать оператор return.
*/

// входные данные (два числа).
$firstNumber = 4;
$secondNumber = 0;


/**
 * Функция по сложению двух чисел
 * @param $firstNumb - первое число
 * @param $secondNumb - второе число
 * @param $operator - оператор для вычислений
 * @return float | string
 */
function summOfNumbers($firstNumb, $secondNumb, $operator): float|string
{
    if ($operator == '+') {
        return $firstNumb + $secondNumb;
    }
    return 'функция сложения вызвана с неверным оператором';
}

/**
 * Функция по вычитанию двух чисел
 * @param $firstNumb - первое число
 * @param $secondNumb - второе число
 * @param $operator - оператор для вычислений
 * @return float | string
 */
function subtractionOfNumbers($firstNumb, $secondNumb, $operator): float|string
{
    if ($operator == '-') {
        return $firstNumb - $secondNumb;
    }
    return 'функция вычитания вызвана с неверным оператором';
}

/**
 * Функция по умножению двух чисел
 * @param $firstNumb - первое число
 * @param $secondNumb - второе число
 * @param $operator - оператор для вычислений
 * @return float | string
 */
function productionOfNumbers($firstNumb, $secondNumb, $operator): float|string
{
    if ($operator == '*') {
        return $firstNumb * $secondNumb;
    }
    return 'функция умножения вызвана с неверным оператором';
}

/**
 * Функция по делениюнию двух чисел
 * @param $firstNumb - первое число
 * @param $secondNumb - второе число
 * @param $operator - оператор для вычислений
 * @return float | string
 */
function divisionOfNumbers($firstNumb, $secondNumb, $operator): float|string
{
    if ($operator == '/') {
        return ($secondNumb !== 0) ? ($firstNumb * $secondNumb) : 'ОШИБКА! делить на ноль нельзя!';
    }
    return 'функция деления вызвана с неверным оператором';
}

echo "Задание 1. \n";
echo "результат функции сложения чисел '$firstNumber' и '$secondNumber' равен: " .
    summOfNumbers($firstNumber, $secondNumber, '+');
echo "\nрезультат функции вычитания чисел '$firstNumber' и '$secondNumber' равен: " .
    subtractionOfNumbers($firstNumber, $secondNumber, '-');
echo "\nрезультат функции умножения чисел '$firstNumber' и '$secondNumber' равен: " .
    productionOfNumbers($firstNumber, $secondNumber, '*');
echo "\nрезультат функции деления чисел '$firstNumber' и '$secondNumber' равен: " .
    divisionOfNumbers($firstNumber, $secondNumber, '/');
echo "\n-------------------------------------------------------------------";


/*
 *  Задание 2.
 *  Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1,
 *  $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения
 *  операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение
 *  (использовать switch).
 */

echo "\nЗадание 2.";

/**
 * Функция по реалицзации четырех основных математических операций с двумя числами
 * @param int|float $arg1 - первое число
 * @param int|float $arg2 - второе число
 * @param string $operation - оператор для вычислений
 * @return float | string
 */
function mathOperation(int|float $arg1, int|float $arg2, string $operation): float|string
{
    return match ($operation) {
        '+' => summOfNumbers($arg1, $arg2, $operation),
        '-' => subtractionOfNumbers($arg1, $arg2, $operation),
        '*' => productionOfNumbers($arg1, $arg2, $operation),
        '/' => divisionOfNumbers($arg1, $arg2, $operation),
        default => 'ОШИБКА! функция вызвана с неверными входными данными'
    };
}

echo "\nрезультатом операции будет: " . mathOperation('3', 10, '*');
echo "\nрезультатом операции будет: " . mathOperation(3, 10, '5');
echo "\n-------------------------------------------------------------------";

/*
 * Задание 3.
 * Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы
 * с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
 * Московская область: Москва, Зеленоград, Клин Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт
 * Рязанская область … (названия городов можно найти на maps.yandex.ru).
 */

echo "\nЗадание 3.";

// входыне данные - массив областей, в каждой области содержащий принадлежащие ему города
$regionsWithCities = [
    'Московская область' => array('Москва', 'Зеленоград', 'Клин'),
    'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
];

// добавим еще несколько областей и принадлежащих им городов в формате ключ-значение
$regionsWithCities['Ставропольский край'] = array('Ставрополь', 'Пятигорск', 'Кисловодск', 'Ессентуки', 'Невинномысск');
$regionsWithCities['Краснодарский край'] = array('Анапа', 'Армавир', 'Геленджик', 'Туапсе', 'Сочи');
$regionsWithCities['Пенсильвания'] = array();

// создаем счетчик для перебора ключей массива $regionsWithCities
$regionCounter = 0;

// выведем содержание массива в консоль с разделением по областям
foreach ($regionsWithCities as $region => $cities) {
    echo "\n" . $region . ': ';
    // создаем, а затем обнуляем при каждом круге счетчик для перебора городов в ключах регионов
    $cityCounter = 0;
    foreach ($cities as $city) {
        echo ($cityCounter === count($cities) - 1) ? "$city" : "$city" . ", ";
        $cityCounter++;
    }
    $regionCounter++;
}

echo "\n-------------------------------------------------------------------";

/*
 * Задание 4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие
 * латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
 * Написать функцию транслитерации строк.
 */

echo "\nЗадание 4.";

$transcription = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'ye',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'y',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'kh',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ъ' => 'нет транскрибции((',
    'ы' => 'y',
    'ь' => "нет транскрибции((",
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
];

/**
 * Функция перевода буквы русского алфавита английскими буквами
 * @param $transcription - массив, представляющий русский алфавит по ключи, и его английское написание по значению
 * @param $aLetter - буква русского алфавита
 * @return void
 */
function transliterationLetterFromRuToEng ($transcription, $aLetter) {
    echo (array_key_exists($aLetter, $transcription)) ? "\n" . $aLetter . " по англицки пишется как " . $transcription[$aLetter]
        : "такой буквы в русском алфавите нет!\n";
}

transliterationLetterFromRuToEng($transcription, 'и');
transliterationLetterFromRuToEng($transcription, 'ь');

