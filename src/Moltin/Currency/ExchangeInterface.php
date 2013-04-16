<?php

/**
 * This file is part of Moltin Currency, a PHP library to process, format and
 * convert values between various currencies and formats.
 *
 * Copyright (c) 2013 Moltin Ltd.
 * http://github.com/moltin/currency
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package moltin/currency
 * @author Jamie Holdroyd <jamie@molt.in>
 * @copyright 2013 Moltin Ltd.
 * @version 0.1.1-dev
 * @link http://github.com/moltin/currency
 *
 */

namespace Moltin\Currency;

interface ExchangeInterface
{
    public function get($code);

    public function insertUpdate($id, $data);

    public function remove($id);

    public function setIdentifier($identifier);

    public function getIdentifier($identifier);
}
