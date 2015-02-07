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

namespace Yassa\WoTBlitzAPI\Argument;

abstract class AbstractArgument
{
    /**
     * @type int Application ID
     */
    protected $applicationId;
    /**
     * @type string Response language
     */
    protected $language;
    /**
     * @type array Response fields
     */
    protected $fields = [];

    /**
     * Return Application ID
     *
     * @return int
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Set Application ID
     *
     * @param int $applicationId
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * Return response language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set response language
     *
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Return response fields
     *
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set response fields
     *
     * @param array $fields Fields list
     *
     * @return $this
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Add field to response
     *
     * @param string $name Name of added field
     *
     * @throws \BadMethodCallException
     *
     * @return $this
     */
    public function addField($name)
    {
        if (!in_array($name, $this->getFieldsList())) {
            throw new \BadMethodCallException("Field '$name' not allowed fo method " . __CLASS__);
        }

        if (isset($this->fields[$name])) {
            return $this;
        }

        $this->fields[] = $name;

        return $this;
    }

    /**
     * Return response fields list
     *
     * @return array
     */
    abstract protected function getFieldsList();
}
