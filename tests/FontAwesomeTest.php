<?php

use LucasRuroken\FontAwesome\FontAwesome;

class FontAwesomeTest extends \PHPUnit\Framework\TestCase
{
    public function testSetFontAwesomeIcon()
    {
        $fa = new FontAwesome();

        $this->assertEquals('i', $fa->getTag());

        $fa->setTag('span');
        $this->assertEquals('span', $fa->getTag());
    }

    public function testSimpleIcon()
    {
        $fa = new FontAwesome();

        $this->assertEquals('<i class="fa fa-square"></i>', $fa->icon('square'));
    }

    public function testFontAwesomeIconWithOptions()
    {
        $fa = new FontAwesome();

        $this->assertEquals('<i class="fa fa-square custom-class full-class" style="color: red;"></i>', $fa->icon('square', ['class' => 'custom-class full-class', 'style' => 'color: red;']));
    }
}