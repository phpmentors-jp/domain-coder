<?php

namespace PHPMentors\DomainCoder\Module\App;

use BEAR\Package;
use Ray\Di\AbstractModule;
use Ray\Di\Injector;

class Dependency extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
         // $this->bind('PHPMentors\DomainCoder\FooInterface')->to('PHPMentors\DomainCoder\Foo');
    }
}
