<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\ProductSearchWidget;

use SprykerShop\Yves\MerchantProductOfferWidget\Plugin\ProductSearchWidget\MerchantProductOfferProductQuickAddFormExpanderPlugin;
use SprykerShop\Yves\ProductSearchWidget\ProductSearchWidgetDependencyProvider as SprykerShopProductSearchWidgetDependencyProvider;

class ProductSearchWidgetDependencyProvider extends SprykerShopProductSearchWidgetDependencyProvider
{
    /**
     * @return array<\SprykerShop\Yves\ProductSearchWidgetExtension\Dependency\Plugin\ProductQuickAddFormExpanderPluginInterface>
     */
    protected function getProductQuickAddFormExpanderPlugins() : array
    {
        return [
            new MerchantProductOfferProductQuickAddFormExpanderPlugin(),
        ];
    }
}