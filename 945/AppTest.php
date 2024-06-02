<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

include 'app.php';

class AppTest extends TestCase
{
    #[DataProvider('textToNumberBinaryDP')]
    public function testFirst($text, $dig)
    {
        $res = textToNumberBinary($text);
        $this->assertEquals($res, $dig);
    }

    public static function textToNumberBinaryDP()
    {
        return [
            'first1' => ['один один один', '111'],
            'first2' => ['один один ноль один', '1101'],
            'first3' => ['один ноль один один', '1011'],
            'first4' => ['один Ноль один Один', '1011'],
            'first5' => ["ноль один ноль один ноль один ноль один", "01010101"],
            'first6' => ["Ноль один ноль ОДИН ноль один ноль один", "01010101"],
            'first7' => ["ноль один ноль один ноль один ноль один два", ""],
            'first8' => ["ноль один ноль один ноль один ноль три", ""],
        ];
    }
}




