<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Metadata;

use ApiPlatform\OpenApi\Model\Operation as OpenApiOperation;
use ApiPlatform\State\OptionsInterface;

#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class ErrorResource extends ApiResource
{
    public function __construct(
        string $uriTemplate = null,
        string $shortName = null,
        string $description = null,
        array|string|null $types = null,
        $operations = null,
        $formats = null,
        $inputFormats = null,
        $outputFormats = null,
        $uriVariables = null,
        string $routePrefix = null,
        array $defaults = null,
        array $requirements = null,
        array $options = null,
        bool $stateless = null,
        string $sunset = null,
        string $acceptPatch = null,
        int $status = null,
        string $host = null,
        array $schemes = null,
        string $condition = null,
        string $controller = null,
        string $class = null,
        int $urlGenerationStrategy = null,
        string $deprecationReason = null,
        array $cacheHeaders = null,
        array $normalizationContext = null,
        array $denormalizationContext = null,
        bool $collectDenormalizationErrors = null,
        array $hydraContext = null,
        array $openapiContext = null,
        OpenApiOperation|bool|null $openapi = null,
        array $validationContext = null,
        array $filters = null,
        bool $elasticsearch = null,
        $mercure = null,
        $messenger = null,
        $input = null,
        $output = null,
        array $order = null,
        bool $fetchPartial = null,
        bool $forceEager = null,
        bool $paginationClientEnabled = null,
        bool $paginationClientItemsPerPage = null,
        bool $paginationClientPartial = null,
        array $paginationViaCursor = null,
        bool $paginationEnabled = null,
        bool $paginationFetchJoinCollection = null,
        bool $paginationUseOutputWalkers = null,
        int $paginationItemsPerPage = null,
        int $paginationMaximumItemsPerPage = null,
        bool $paginationPartial = null,
        string $paginationType = null,
        string $security = null,
        string $securityMessage = null,
        string $securityPostDenormalize = null,
        string $securityPostDenormalizeMessage = null,
        string $securityPostValidation = null,
        string $securityPostValidationMessage = null,
        bool $compositeIdentifier = null,
        array $exceptionToStatus = null,
        bool $queryParameterValidationEnabled = null,
        array $graphQlOperations = null,
        $provider = null,
        $processor = null,
        OptionsInterface $stateOptions = null,
        array $extraProperties = []
    ) {
        parent::__construct(
            uriTemplate: $uriTemplate,
            shortName: $shortName,
            description: $description,
            types: $types,
            operations: $operations ?? [new Get()],
            formats: $formats,
            inputFormats: $inputFormats,
            outputFormats: $outputFormats,
            uriVariables: $uriVariables,
            routePrefix: $routePrefix,
            defaults: $defaults,
            requirements: $requirements,
            options: $options,
            stateless: $stateless,
            sunset: $sunset,
            acceptPatch: $acceptPatch,
            status: $status,
            host: $host,
            schemes: $schemes,
            condition: $condition,
            controller: $controller,
            class: $class,
            urlGenerationStrategy: $urlGenerationStrategy,
            deprecationReason: $deprecationReason,
            cacheHeaders: $cacheHeaders,
            normalizationContext: $normalizationContext,
            denormalizationContext: $denormalizationContext,
            collectDenormalizationErrors: $collectDenormalizationErrors,
            hydraContext: $hydraContext,
            openapiContext: $openapiContext,
            openapi: $openapi,
            validationContext: $validationContext,
            filters: $filters,
            elasticsearch: $elasticsearch,
            mercure: $mercure,
            messenger: $messenger,
            input: $input,
            output: $output,
            order: $order,
            fetchPartial: $fetchPartial,
            forceEager: $forceEager,
            paginationClientEnabled: $paginationClientEnabled,
            paginationClientItemsPerPage: $paginationClientItemsPerPage,
            paginationClientPartial: $paginationClientPartial,
            paginationViaCursor: $paginationViaCursor,
            paginationEnabled: $paginationEnabled,
            paginationFetchJoinCollection: $paginationFetchJoinCollection,
            paginationUseOutputWalkers: $paginationUseOutputWalkers,
            paginationItemsPerPage: $paginationItemsPerPage,
            paginationMaximumItemsPerPage: $paginationMaximumItemsPerPage,
            paginationPartial: $paginationPartial,
            paginationType: $paginationType,
            security: $security,
            securityMessage: $securityMessage,
            securityPostDenormalize: $securityPostDenormalize,
            securityPostDenormalizeMessage: $securityPostDenormalizeMessage,
            securityPostValidation: $securityPostValidation,
            securityPostValidationMessage: $securityPostValidationMessage,
            compositeIdentifier: $compositeIdentifier,
            exceptionToStatus: $exceptionToStatus,
            queryParameterValidationEnabled: $queryParameterValidationEnabled,
            graphQlOperations: $graphQlOperations,
            provider: $provider,
            processor: $processor,
            stateOptions: $stateOptions,
            extraProperties: $extraProperties
        );
    }
}
