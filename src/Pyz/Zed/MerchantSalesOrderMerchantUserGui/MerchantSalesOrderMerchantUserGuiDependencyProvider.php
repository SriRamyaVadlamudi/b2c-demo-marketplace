<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\MerchantSalesOrderMerchantUserGui;

use Spryker\Zed\MerchantSalesOrderMerchantUserGui\MerchantSalesOrderMerchantUserGuiDependencyProvider as SprykerMerchantSalesOrderMerchantUserGuiDependencyProvider;
use Spryker\Zed\ShipmentGui\Communication\Plugin\Form\ItemFormTypePlugin;
use Spryker\Zed\ShipmentGui\Communication\Plugin\Form\ShipmentFormTypePlugin;

class MerchantSalesOrderMerchantUserGuiDependencyProvider extends SprykerMerchantSalesOrderMerchantUserGuiDependencyProvider
{
    /**
     * @throws \Spryker\Zed\MerchantSalesOrderMerchantUserGui\Communication\Exception\MissingShipmentFormTypePluginException
     *
     * @return \Spryker\Zed\Kernel\Communication\Form\FormTypeInterface
     */
    protected function getShipmentFormTypePlugin() : \Spryker\Zed\Kernel\Communication\Form\FormTypeInterface
    {
        return new ShipmentFormTypePlugin();
    }

    /**
     * @throws \Spryker\Zed\MerchantSalesOrderMerchantUserGui\Communication\Exception\MissingItemFormTypePluginException
     *
     * @return \Spryker\Zed\Kernel\Communication\Form\FormTypeInterface
     */
    protected function getItemFormTypePlugin() : \Spryker\Zed\Kernel\Communication\Form\FormTypeInterface
    {
        return new ItemFormTypePlugin();
    }
}