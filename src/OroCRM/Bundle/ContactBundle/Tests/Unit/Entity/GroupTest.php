<?php

namespace OroCRM\Bundle\ContactBundle\Tests\Unit\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use OroCRM\Bundle\ContactBundle\Entity\Group;

use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\OrganizationBundle\Entity\BusinessUnit;
use Oro\Bundle\OrganizationBundle\Entity\Organization;

class GroupTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Group
     */
    protected $group;
    define("LABEL", "Label");

    protected function setUp()
    {
        $this->group = new Group();
    }

    public function testConstructor()
    {
        $this->assertNull($this->group->getLabel());

        $group = new Group(LABEL);
        $this->assertEquals(LABEL, $group->getLabel());
    }

    public function testLabel()
    {
        $this->assertNull($this->group->getLabel());
        $this->group->setLabel(LABEL);
        $this->assertEquals(LABEL, $this->group->getLabel());
        $this->assertEquals(LABEL, $this->group->__toString());
    }

    public function testOwners()
    {
        $entity = new Group();
        $user = new User();

        $this->assertEmpty($entity->getOwner());

        $entity->setOwner($user);

        $this->assertEquals($user, $entity->getOwner());
    }
}
