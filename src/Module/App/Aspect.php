<?php

namespace PHPMentors\DomainCoder\Module\App;

use Ray\Di\AbstractModule;

class Aspect extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        /*
        $this->bindInterceptor(
             $this->matcher->any(),
             $this->matcher->annotatedWith('PHPMentors\DomainCoder\Annotation\Bar'),
             [$this->requestInjection('PHPMentors\DomainCoder\Interceptor\FooInterceptor')]
        );
        */
    }
}
