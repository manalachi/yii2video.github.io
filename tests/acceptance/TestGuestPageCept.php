<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('open the home/join/login pages');

$I->amOnPage('/');
$I->see('welcome');

$I->seeLink('Join', '/user/join');
$I->seeLink('Login', '/user/login');

$I->amOnPage('/user/join');
$I->see('Join us', 'h1');

$I->amOnPage('/user/login');
$I->see('Log in', 'h1');