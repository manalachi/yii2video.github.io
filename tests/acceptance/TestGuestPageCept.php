<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('open the home/join/login pages');

$I->amOnPage('/');
$I->see('welcome');

$I->seeLink('Join', 'site/join');
$I->seeLink('Login', 'site/login');

$I->amOnPage('/site/join');
$I->see('Join us', 'h1');

$I->amOnPage('/site/login');
$I->see('Log in', 'h1');