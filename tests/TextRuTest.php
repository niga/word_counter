<?php

use PHPUnit\Framework\TestCase;

/**
 * User: Vyacheslav Rasskazov
 * Date: 2018-12-09
 * Time: 14:23
 */

class TextRuTest extends TestCase
{
    private $text;

    protected function setUp()
    {
        parent::setUp();

        $this->text = 'Наверное, каждый увлекающийся околоэлектронными самоделками задавался вопросом, возможно ли сделать лазер самостоятельно, дома. И наверняка, очень часто натыкался на довольно предсказуемый ответ от старших, что это очень сложно или практически невозможно, дескать, лазерное излучение можно получить только из специальных дорогостоящих кристаллов и стекол, или каких-то ещё неведомых материалов, которые можно достать только в Тёмных Топях или на Заокраинном Западе. На самом деле это не так. Число веществ, в которых возможен лазерный процесс, исчисляются тысячами, и некоторые из них находятся буквально под ногами, и в прямом смысле вокруг нас, повсюду. Так, например, можно с удивлением узнать, что возможно получить лазерную генерацию в водяных парах, в красителях, добытых из фломастеров, в конце концов, в углекислом газе, выдыхаемом многими живыми существами, была получена лазерная генерация мощностью в сотни киловатт. Но, есть ещё одна рабочая среда лазера, которая распространена гораздо больше, чем все остальные вместе взятые. Это азот, которого 78% в атмосферном воздухе.';
    }

    public function testExplodeText()
    {
        $array = explodeText($this->text);

        $this->assertTrue(is_array($array));
    }

    public function testCountValues()
    {
        $array = countValues(explodeText($this->text));

        $this->assertTrue(is_array($array));
    }

    public function testSortArray()
    {
        $array = sortArray(countValues(explodeText($this->text)));

        $this->assertTrue(is_array($array));
    }

    public function testSliceArray()
    {
        $array = sliceArray(sortArray(countValues(explodeText($this->text))));

        $expected = [
            'в' => 9,
            'и' => 3,
            'из' => 3,
            'можно' => 3,
            'или' => 3,
        ];

        $this->assertEquals($expected, $array);
    }
}

