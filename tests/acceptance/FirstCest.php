<?php


class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        
        $I->amOnPage('/emy');
        $I->see('Emelyne');
        //$I->see('Lecture');
        //$I->see('toto');
    }
}
