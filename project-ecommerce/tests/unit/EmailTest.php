<?php
use CodeIgniter\Email\Email;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Email as ConfigEmail;

Class EmailTest extends CIUnitTestCase{
    Public function testKirimEmail(){
        
        $email = new Email(new ConfigEmail());
        $email->setFrom('ecommercebot32@gmail.com');
        $email->setTo('12210695@bsi.ac.id');
        $email->setSubject('Warning!!!');
        $email->setMessage('salah subject  tadi :v');

        $this->assertTrue( $email->send());
    }
}