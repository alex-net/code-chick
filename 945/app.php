<?php

function textToNumberBinary($text) {
    $ta = explode(' ', mb_strtolower($text));
    $ta01 = array_fill(0, count($ta), null);

    foreach (['один' => '1', 'ноль' => '0'] as $word => $dig) {
        while (($pos = array_search($word, $ta)) !== false) {
            $ta01[$pos] = $dig;
            $ta[$pos] = '--';
        }
    }

    if (array_search(null, $ta01) === false) {
        return implode('', $ta01);
    }
    return '';
}