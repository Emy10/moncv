<?php

use AppBundle\Entity\Formation;
use AppBundle\Entity\Loisirs;
use AppBundle\Entity\Experience;

class MytestTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testformation()
    {
        $date = new \DateTime("2018-06-14");
        $entity = new Formation(); 
        
        $entity->setlieu('Grenoble');
        $this->assertEquals('Grenoble', $entity->getlieu());
        
        $entity->setname('Emelyne');
        $this->assertEquals('Emelyne', $entity->getname());
        
        $entity->setecole('Collège vinay');
        $this->assertEquals('Collège vinay', $entity->getecole());
        
        $entity->setdateDebut($date);
        $this->assertEquals($date, $entity->getdateDebut());
        
        $entity->setdateFin($date);
        $this->assertEquals($date, $entity->getdateFin());
        
        
        
    }
    
    public function testloisirs()
    {
        $entity = new Loisirs(); 
        
        $entity->setlieu('Vinay');
        $this->assertEquals('Vinay', $entity->getlieu());
        
        $entity->setname('danse');
        $this->assertEquals('danse', $entity->getname());
        
        $entity->settemps('30');
        $this->assertEquals('30', $entity->gettemps());
        
    }
    
    public function testexperience()
    {
        $date = new \DateTime("2018-04-20");
        $entity = new Experience(); 
        
        $entity->setlieu('Moirans');
        $this->assertEquals('Moirans', $entity->getlieu());
        
        $entity->setname('stage');
        $this->assertEquals('stage', $entity->getname());
        
        $entity->setdateDebut($date);
        $this->assertEquals($date, $entity->getdateDebut());
        
        $entity->setdateFin($date);
        $this->assertEquals($date, $entity->getdateFin());
        
    }

}