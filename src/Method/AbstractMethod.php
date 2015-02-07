<?php
/**
 * Yassa WoTBlitzAPI Client
 *
 * Copyright 2015 Oleg Lobach <oleg@lobach.info>
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Lesser General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version.
 *
 * This script is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser
 * General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with the script.
 * If not, see http://www.gnu.org/licenses/lgpl.html
 *
 * @copyright  Copyright (c) 2015 Oleg Lobach <oleg@lobach.info>
 * @license    GNU Lesser General Public License <http://www.gnu.org/licenses/lgpl-3.0.txt>
 * @author     Oleg Lobach <oleg@lobach.info>
 * @version    0.2.0
 * @since      0.2.0
 */

namespace Yassa\WoTBlitzAPI\Method;

use Yassa\WoTBlitzAPI\Argument\ArgumentInterface;
use Yassa\WoTBlitzAPI\Client;

abstract class AbstractMethod
{
    /**
     * @type Client
     */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function request(ArgumentInterface $arguments)
    {
        $result = $this->client->request($this, $arguments);

        return $result;
    }

    abstract public function getRequestMethod();

    abstract public function getMethodPath();

    /**
     * @param ArgumentInterface $arguments
     *
     * @return array
     */
    abstract public function getQueryArguments(ArgumentInterface $arguments);

}
