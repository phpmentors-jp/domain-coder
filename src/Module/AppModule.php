<?php
/*
 * Copyright (c) 2014 KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of Domain Coder.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace PHPMentors\DomainCoder\Module;

use BEAR\Package\Provide\TemplateEngine\Twig\TwigModule;
use PHPMentors\FormalBEAR\Config\ConfigReader;
use PHPMentors\FormalBEAR\Module\EntryModule;
use PHPMentors\FormalBEAR\Module\FrameworkModule;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;

class AppModule extends EntryModule
{
    /**
     * @var string
     */
    private $context;

    /**
     * @param string $context
     *
     * @Inject
     * @Named("app_context")
     */
    public function __construct($context = 'prod')
    {
        $this->context = $context;
        parent::__construct();
    }

    /**
     * {@inheritDoc}
     */
    protected function configure()
    {
        $this->install(new FrameworkModule($this, 'PHPMentors\DomainCoder', $this->context, dirname(dirname(__DIR__))));
        $this->install(new TwigModule($this));
    }

    /**
     * {@inheritDoc}
     */
    protected function readConfig(ConfigReader $configReader)
    {
        return $configReader->read(dirname(dirname(__DIR__)) . '/app/config/config_' . $this->context. '.yml');
    }
}
