<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Glue\DocumentationGeneratorApi;

use Spryker\Glue\DocumentationGeneratorApi\DocumentationGeneratorApiDependencyProvider as SprykerDocumentationGeneratorApiDependencyProvider;
use Spryker\Glue\DocumentationGeneratorOpenApi\Plugin\DocumentationGeneratorApi\ControllerAnnotationsContextExpanderPlugin;
use Spryker\Glue\DocumentationGeneratorOpenApi\Plugin\DocumentationGeneratorApi\CustomRouteControllerAnnotationsContextExpanderPlugin;
use Spryker\Glue\DocumentationGeneratorOpenApi\Plugin\DocumentationGeneratorApi\DocumentationGeneratorOpenApiContentGeneratorStrategyPlugin;
use Spryker\Glue\DocumentationGeneratorOpenApi\Plugin\DocumentationGeneratorApi\DocumentationGeneratorOpenApiSchemaFormatterPlugin;
use Spryker\Glue\DocumentationGeneratorOpenApi\Plugin\DocumentationGeneratorApi\RelationshipPluginAnnotationsContextExpanderPlugin;
use Spryker\Glue\GlueBackendApiApplication\Plugin\DocumentationGeneratorApi\BackendApiApplicationProviderPlugin;
use Spryker\Glue\GlueBackendApiApplication\Plugin\DocumentationGeneratorApi\BackendCustomRoutesContextExpanderPlugin;
use Spryker\Glue\GlueBackendApiApplication\Plugin\DocumentationGeneratorApi\BackendHostContextExpanderPlugin;
use Spryker\Glue\GlueBackendApiApplication\Plugin\DocumentationGeneratorApi\BackendResourcesContextExpanderPlugin;
use Spryker\Glue\GlueJsonApiConvention\Plugin\DocumentationGeneratorApi\JsonApiSchemaFormatterPlugin;
use Spryker\Glue\GlueStorefrontApiApplication\Plugin\DocumentationGeneratorApi\StorefrontApiApplicationProviderPlugin;
use Spryker\Glue\GlueStorefrontApiApplication\Plugin\DocumentationGeneratorApi\StorefrontCustomRoutesContextExpanderPlugin;
use Spryker\Glue\GlueStorefrontApiApplication\Plugin\DocumentationGeneratorApi\StorefrontHostContextExpanderPlugin;
use Spryker\Glue\GlueStorefrontApiApplication\Plugin\DocumentationGeneratorApi\StorefrontResourcesContextExpanderPlugin;

class DocumentationGeneratorApiDependencyProvider extends SprykerDocumentationGeneratorApiDependencyProvider
{
    /**
     * @return array<\Spryker\Glue\DocumentationGeneratorApiExtension\Dependency\Plugin\SchemaFormatterPluginInterface>
     */
    protected function getSchemaFormatterPlugins() : array
    {
        return [
            new DocumentationGeneratorOpenApiSchemaFormatterPlugin(),
            new JsonApiSchemaFormatterPlugin(),
        ];
    }

    /**
     * @param \Spryker\Glue\DocumentationGeneratorApi\Expander\ContextExpanderCollectionInterface $contextExpanderCollection
     *
     * @return \Spryker\Glue\DocumentationGeneratorApi\Expander\ContextExpanderCollectionInterface
     */
    protected function getContextExpanderPlugins(\Spryker\Glue\DocumentationGeneratorApi\Expander\ContextExpanderCollectionInterface $contextExpanderCollection) : \Spryker\Glue\DocumentationGeneratorApi\Expander\ContextExpanderCollectionInterface
    {
        return new StorefrontHostContextExpanderPlugin();
    }

    /**
     * @throws \Spryker\Glue\DocumentationGeneratorApi\Exception\MissingContentGeneratorStrategyException
     *
     * @return \Spryker\Glue\DocumentationGeneratorApiExtension\Dependency\Plugin\ContentGeneratorStrategyPluginInterface
     */
    protected function getContentGeneratorStrategyPlugin() : \Spryker\Glue\DocumentationGeneratorApiExtension\Dependency\Plugin\ContentGeneratorStrategyPluginInterface
    {
        return new DocumentationGeneratorOpenApiContentGeneratorStrategyPlugin();
    }

    /**
     * @return array<\Spryker\Glue\DocumentationGeneratorApiExtension\Dependency\Plugin\ApiApplicationProviderPluginInterface>
     */
    protected function getApiApplicationProviderPlugins() : array
    {
        return [
            new BackendApiApplicationProviderPlugin(),
            new StorefrontApiApplicationProviderPlugin(),
        ];
    }
}