<?php
namespace LCTest;

use Fake;

class LCTest {
    /**
     * @var Fake\Fake
     */
    private $fake;
    
    /**
     * @var Fake\Factory
     */
    private $fakeFactory;

    public function __construct() {
        $this->fake = new Fake\Fake;
        $this->fakeFactory = new Fake\Factory\FakeFactory;
    }
    
    public function __toString() {
        return "I'm a test for Fake";
    }
    
    public function getFake() {
        return $this->fake;
    }
    
    public function getFakeFactory() {
        return $this->fakeFactory;
    }
}