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

namespace PHPMentors\DomainCoder\Test;

use Ray\Di\Injector;

use PHPMentors\DomainCoder\Module\AppModule;

abstract class InjectorAwareTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \BEAR\Resource\ResourceInterface
     */
    private static $resource;

    /**
     * @return \BEAR\Resource\ResourceInterface
     */
    protected function createResource()
    {
        if (self::$resource === null) {
            self::$resource = Injector::create([new AppModule('test')])->getInstance('\BEAR\Resource\ResourceInterface');
        }

        return self::$resource;
    }
}
