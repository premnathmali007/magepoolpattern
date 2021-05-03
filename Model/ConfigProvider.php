<?php
/**
 *
 * @module Codilar_PoolPattern
 * @description Demonstration of Pool Pattern
 * @author    <premnath.m@codilar.com>
 * @link     https://www.codilar.com
 * @copyright Copyright © 2020 NexPWA Pvt. Ltd.. All rights reserved
 *
 * Pool Pattern Example
 */

namespace Codilar\PoolPattern\Model;

use Magento\Checkout\Model\ConfigProviderInterface;

class ConfigProvider implements ConfigProviderInterface
{

    /**
     * Retrieve assoc array of checkout configuration
     *
     * @return array
     */
    public function getConfig()
    {
        return [
            'credit_card_fee' => '2%'
        ];
    }
}
