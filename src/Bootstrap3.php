<?php namespace CI4Xpander;

class Bootstrap3 extends \CI4Xpander\Component
{
    protected $_name = 'Bootstrap 3';

    public function render()
    {
        return view('CI4Xpander\Views\Bootstrap3');
    }

    use \CI4Xpander\Component\ComponentFactoryTrait;
}