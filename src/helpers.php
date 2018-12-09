<?php
/**
 * User: Vyacheslav Rasskazov
 * Date: 2018-12-09
 * Time: 14:26
 */

/**
 * @param string $text
 *
 * @return array
 */
function explodeText(string $text): array
{
    // TODO: А мы точно с UTF-8 работаем?
    return preg_split("/[^\w]*([\s]+[^\w]*|$)/u", $text, -1, PREG_SPLIT_NO_EMPTY);
}

/**
 * @param array $array
 *
 * @return array
 */
function countValues(array $array): array
{
    return array_count_values($array);
}

/**
 * @param array $array
 *
 * @return array
 */
function sortArray(array $array): array
{
    arsort($array);

    //  TODO: Возможно необходимо добавить сортировку елементов с одинаковым количеством слов.

    return $array;
}

/**
 * @param array $array
 *
 * @return array
 */
function sliceArray(array $array): array
{
    return array_slice($array, 0, 5, true);
}
