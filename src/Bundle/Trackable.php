<?php

/*
 * This file is part of Parasut.
 *
 * (c) Created by Serhan Coşkun
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Parasut\Bundle;

use Parasut\Bundle;

/**
 * Contact
 *
 * @package   Parasut
 * @author    Serhan Coşkun
 * @license   MIT License
 * @copyright 2015
 */
class Trackable extends Bundle
{


    public function show($id)
    {
        return $this->client->call("trackable_jobs/{$id}");
    }



}
