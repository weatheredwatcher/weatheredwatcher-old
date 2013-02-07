<?php

require_once 'vendor/autoload.php';

class WebDriverDemo extends Sauce\Sausage\WebDriverTestCase
{
    public static $browsers = array(
        // run FF15 on Windows 8 on Sauce
        array(
            'browserName' => 'firefox',
            'desiredCapabilities' => array(
                'version' => '15',
                'platform' => 'Windows 2012',
            )
        )//,
        // run Chrome on Linux on Sauce
        //array(
            //'browserName' => 'chrome',
            //'desiredCapabilities' => array(
                //'platform' => 'Linux'
          //)
        //),
        // run Chrome locally
        //array(
            //'browserName' => 'chrome',
            //'local' => true,
            //'sessionStrategy' => 'shared'
        //)
    );

    public function setUp()
    {
        parent::setUp();
        $this->setBrowserUrl('http://weatheredwatcher.com/contact');
    }

    protected function randomEmail()
    {
        $id = uniqid();
        return array(
            'email' => "test@test.com",
            'subject' => 'test subject',
            'message' => "This is a test message!",
            
        );
    }

    protected function doContact($email, $subject, $message)
    {
        $this->url('/');
        $this->byName('from')->value($email);
        $this->byName('subject')->value($subject);
        $this->byName('message')->value($message);
        $this->byName('submit')->click();

        $this->assertTextPresent("Thank you! Your email has been sent.", $this->byId('main'));
    }
    
    public function testContact()
    {
        $contact = $this->randomEmail();
        $this->doContact($contact['email'], $contact['subject'], $contact['message']);
    }
}
