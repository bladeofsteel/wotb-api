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
 * @version    0.1.0
 * @since      0.1.0
 */

namespace Yassa\WoTBlitzAPI;

use GuzzleHttp\Client as HttpClient;

class Client
{
    const BASE_URI = 'https://api.wotblitz.ru/wotb/';
    /**
     * @type string Application ID
     */
    protected $applicationId;
    /**
     * @type HttpClient
     */
    protected $transport;

    public function __construct($applicationId, HttpClient $transport)
    {
        $this->applicationId = $applicationId;
        $this->transport = $transport;
    }

    public function accountInfo($accountId)
    {

        $request = $this->transport->createRequest('GET', 'account/info/', [
            'query' => [
                'application_id' => $this->applicationId,
                'account_id'     => $accountId
            ]
        ]);

        return $this->transport->send($request)->json();
    }

    public function accountList($search)
    {
    }

    public function accountAchievements($accountId)
    {
    }
}
