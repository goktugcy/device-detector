<?php

use Goktugceyhan\DeviceDetector\Detector;
use PHPUnit\Framework\TestCase;

class DetectorTest extends TestCase
{
    // protected function setUp(): void
    // {
        
    // }

    public function testGetUserBrowser()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';

        $browser = Detector::getUserBrowser();
        $this->assertEquals('Google Chrome', $browser);
        echo $browser . "\n";
    }

    public function testGetUserOS()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';

        $os = Detector::getUserOS();
        $this->assertEquals('Windows 10', $os);
        echo $os . "\n";
    }

    public function testGetUserDevice()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';

        $device = Detector::getUserDevice();
        $this->assertEquals('PC', $device);
        echo $device . "\n";
    }

    public function testGetUserLanguage()
    {
        $_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'en-US,en;q=0.9,fr;q=0.8';

        $language = Detector::getUserLanguage();
        $this->assertEquals('English', $language);
        echo $language . "\n";
    }

    public function testGetUserIp()
    {
        $_SERVER['REMOTE_ADDR'] = '123.123.123.123';

        $ip = Detector::getUserIp();
        $this->assertEquals('123.123.123.123', $ip);
        echo $ip . "\n";
    }

    public function testGetUserInfo()
    {
        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';
        $_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'en-US,en;q=0.9,fr;q=0.8';

        $userInfo = Detector::getUserInfo();
        $expected = 'Google Chrome | Windows 10 | PC | English';

        $this->assertEquals($expected, $userInfo);
        echo $userInfo . "\n";
    }
}
