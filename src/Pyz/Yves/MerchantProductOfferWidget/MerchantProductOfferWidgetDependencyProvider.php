<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\MerchantProductOfferWidget;

use SprykerShop\Yves\MerchantProductOfferWidget\MerchantProductOfferWidgetDependencyProvider as SprykerShopMerchantProductOfferWidgetDependencyProvider;
use SprykerShop\Yves\MerchantProductWidget\Plugin\MerchantProductOfferWidget\MerchantProductMerchantProductOfferCollectionExpanderPlugin;

class MerchantProductOfferWidgetDependencyProvider extends SprykerShopMerchantProductOfferWidgetDependencyProvider
{
    /**
     * @return array<\SprykerShop\Yves\MerchantProductOfferWidgetExtension\Dependency\Plugin\MerchantProductOfferCollectionExpanderPluginInterface>
     */
    protected function getMerchantProductOfferCollectionExpanderPlugins() : array
    {
        return [
            new MerchantProductMerchantProductOfferCollectionExpanderPlugin(),
        ];
    }
}