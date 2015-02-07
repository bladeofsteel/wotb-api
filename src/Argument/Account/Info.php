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

namespace Yassa\WoTBlitzAPI\Argument\Account;

use Yassa\WoTBlitzAPI\Argument\AbstractArgument;
use Yassa\WoTBlitzAPI\Argument\ArgumentInterface;

class Info extends AbstractArgument implements ArgumentInterface
{
    /**
     * @type string Access token
     */
    protected $accessToken;
    /**
     * @type int Account ID
     */
    protected $accountId;

    /**
     * Return access token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set access token
     *
     * @param string $accessToken
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Return Account ID
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set Account ID
     *
     * @param int $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Return response fields list
     *
     * @return array
     */
    protected function getFieldsList()
    {
        return [
            'account_id',
            'created_at',
            'last_battle_time',
            'nickname',
            'updated_at',
            'private.ban_info',
            'private.ban_time',
            'private.battle_life_time',
            'private.credits',
            'private.free_xp',
            'private.gold',
            'private.is_premium',
            'private.premium_expires_at',
            'private.restrictions.chat_ban_time',
            'statistics.frags',
            'statistics.max_xp',
            'statistics.max_xp_tank_id',
            'statistics.all.battles',
            'statistics.all.capture_points',
            'statistics.all.damage_dealt',
            'statistics.all.damage_received',
            'statistics.all.dropped_capture_points',
            'statistics.all.frags',
            'statistics.all.hits',
            'statistics.all.losses',
            'statistics.all.shots',
            'statistics.all.spotted',
            'statistics.all.survived_battles',
            'statistics.all.wins',
            'statistics.all.xp',
        ];
    }
}
