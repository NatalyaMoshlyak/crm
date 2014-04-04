<?php

namespace OroCRM\Bundle\ContactBundle\Tests\Unit\Entity;

use OroCRM\Bundle\ContactBundle\Entity\Source;

class SourceTest extends \PHPUnit_Framework_TestCase
{
    define("TEST", "test");
    define("TEST_LABEL", "TEST_LABEL");

    public function testName()
    {
        $obj = new Source(TEST);
        $this->assertEquals(TEST, $obj->getName());
    }

    public function testLabel()
    {
        $obj = new Source(TEST);
        $obj->setLabel(TEST_LABEL);
        $this->assertEquals(TEST_LABEL, $obj->getLabel());
        $this->assertEquals(TEST_LABEL, $obj->__toString());
    }
}
