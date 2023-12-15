<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/cx/v3/experiment.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\Cx\V3\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\Cx\V3\CreateExperimentRequest;
use Google\Cloud\Dialogflow\Cx\V3\DeleteExperimentRequest;
use Google\Cloud\Dialogflow\Cx\V3\Experiment;
use Google\Cloud\Dialogflow\Cx\V3\GetExperimentRequest;
use Google\Cloud\Dialogflow\Cx\V3\ListExperimentsRequest;
use Google\Cloud\Dialogflow\Cx\V3\ListExperimentsResponse;
use Google\Cloud\Dialogflow\Cx\V3\StartExperimentRequest;
use Google\Cloud\Dialogflow\Cx\V3\StopExperimentRequest;
use Google\Cloud\Dialogflow\Cx\V3\UpdateExperimentRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\ListLocationsResponse;
use Google\Cloud\Location\Location;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Service for managing [Experiments][google.cloud.dialogflow.cx.v3.Experiment].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $experimentsClient = new ExperimentsClient();
 * try {
 *     $formattedParent = $experimentsClient->environmentName('[PROJECT]', '[LOCATION]', '[AGENT]', '[ENVIRONMENT]');
 *     $experiment = new Experiment();
 *     $response = $experimentsClient->createExperiment($formattedParent, $experiment);
 * } finally {
 *     $experimentsClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @deprecated This class will be removed in the next major version update.
 */
class ExperimentsGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.cloud.dialogflow.cx.v3.Experiments';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'dialogflow.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private static $environmentNameTemplate;

    private static $experimentNameTemplate;

    private static $versionNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/experiments_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/experiments_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/experiments_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/experiments_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getEnvironmentNameTemplate()
    {
        if (self::$environmentNameTemplate == null) {
            self::$environmentNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/environments/{environment}');
        }

        return self::$environmentNameTemplate;
    }

    private static function getExperimentNameTemplate()
    {
        if (self::$experimentNameTemplate == null) {
            self::$experimentNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/environments/{environment}/experiments/{experiment}');
        }

        return self::$experimentNameTemplate;
    }

    private static function getVersionNameTemplate()
    {
        if (self::$versionNameTemplate == null) {
            self::$versionNameTemplate = new PathTemplate('projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/versions/{version}');
        }

        return self::$versionNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'environment' => self::getEnvironmentNameTemplate(),
                'experiment' => self::getExperimentNameTemplate(),
                'version' => self::getVersionNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a environment
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $environment
     *
     * @return string The formatted environment resource.
     */
    public static function environmentName($project, $location, $agent, $environment)
    {
        return self::getEnvironmentNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'environment' => $environment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a experiment
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $environment
     * @param string $experiment
     *
     * @return string The formatted experiment resource.
     */
    public static function experimentName($project, $location, $agent, $environment, $experiment)
    {
        return self::getExperimentNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'environment' => $environment,
            'experiment' => $experiment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a version
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $agent
     * @param string $flow
     * @param string $version
     *
     * @return string The formatted version resource.
     */
    public static function versionName($project, $location, $agent, $flow, $version)
    {
        return self::getVersionNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'agent' => $agent,
            'flow' => $flow,
            'version' => $version,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - environment: projects/{project}/locations/{location}/agents/{agent}/environments/{environment}
     * - experiment: projects/{project}/locations/{location}/agents/{agent}/environments/{environment}/experiments/{experiment}
     * - version: projects/{project}/locations/{location}/agents/{agent}/flows/{flow}/versions/{version}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates an [Experiment][google.cloud.dialogflow.cx.v3.Experiment] in the
     * specified [Environment][google.cloud.dialogflow.cx.v3.Environment].
     *
     * Sample code:
     * ```
     * $experimentsClient = new ExperimentsClient();
     * try {
     *     $formattedParent = $experimentsClient->environmentName('[PROJECT]', '[LOCATION]', '[AGENT]', '[ENVIRONMENT]');
     *     $experiment = new Experiment();
     *     $response = $experimentsClient->createExperiment($formattedParent, $experiment);
     * } finally {
     *     $experimentsClient->close();
     * }
     * ```
     *
     * @param string     $parent       Required. The [Agent][google.cloud.dialogflow.cx.v3.Agent] to create an
     *                                 [Environment][google.cloud.dialogflow.cx.v3.Environment] for. Format:
     *                                 `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                                 ID>/environments/<Environment ID>`.
     * @param Experiment $experiment   Required. The experiment to create.
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\Experiment
     *
     * @throws ApiException if the remote call fails
     */
    public function createExperiment($parent, $experiment, array $optionalArgs = [])
    {
        $request = new CreateExperimentRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setExperiment($experiment);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateExperiment', Experiment::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes the specified
     * [Experiment][google.cloud.dialogflow.cx.v3.Experiment].
     *
     * Sample code:
     * ```
     * $experimentsClient = new ExperimentsClient();
     * try {
     *     $formattedName = $experimentsClient->experimentName('[PROJECT]', '[LOCATION]', '[AGENT]', '[ENVIRONMENT]', '[EXPERIMENT]');
     *     $experimentsClient->deleteExperiment($formattedName);
     * } finally {
     *     $experimentsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the
     *                             [Environment][google.cloud.dialogflow.cx.v3.Environment] to delete. Format:
     *                             `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/environments/<Environment ID>/experiments/<Experiment ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteExperiment($name, array $optionalArgs = [])
    {
        $request = new DeleteExperimentRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteExperiment', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves the specified
     * [Experiment][google.cloud.dialogflow.cx.v3.Experiment].
     *
     * Sample code:
     * ```
     * $experimentsClient = new ExperimentsClient();
     * try {
     *     $formattedName = $experimentsClient->experimentName('[PROJECT]', '[LOCATION]', '[AGENT]', '[ENVIRONMENT]', '[EXPERIMENT]');
     *     $response = $experimentsClient->getExperiment($formattedName);
     * } finally {
     *     $experimentsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the
     *                             [Environment][google.cloud.dialogflow.cx.v3.Environment]. Format:
     *                             `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/environments/<Environment ID>/experiments/<Experiment ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\Experiment
     *
     * @throws ApiException if the remote call fails
     */
    public function getExperiment($name, array $optionalArgs = [])
    {
        $request = new GetExperimentRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetExperiment', Experiment::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns the list of all experiments in the specified
     * [Environment][google.cloud.dialogflow.cx.v3.Environment].
     *
     * Sample code:
     * ```
     * $experimentsClient = new ExperimentsClient();
     * try {
     *     $formattedParent = $experimentsClient->environmentName('[PROJECT]', '[LOCATION]', '[AGENT]', '[ENVIRONMENT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $experimentsClient->listExperiments($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $experimentsClient->listExperiments($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $experimentsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The [Environment][google.cloud.dialogflow.cx.v3.Environment] to
     *                             list all environments for. Format: `projects/<Project
     *                             ID>/locations/<Location ID>/agents/<Agent ID>/environments/<Environment
     *                             ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listExperiments($parent, array $optionalArgs = [])
    {
        $request = new ListExperimentsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListExperiments', $optionalArgs, ListExperimentsResponse::class, $request);
    }

    /**
     * Starts the specified
     * [Experiment][google.cloud.dialogflow.cx.v3.Experiment]. This rpc only
     * changes the state of experiment from PENDING to RUNNING.
     *
     * Sample code:
     * ```
     * $experimentsClient = new ExperimentsClient();
     * try {
     *     $formattedName = $experimentsClient->experimentName('[PROJECT]', '[LOCATION]', '[AGENT]', '[ENVIRONMENT]', '[EXPERIMENT]');
     *     $response = $experimentsClient->startExperiment($formattedName);
     * } finally {
     *     $experimentsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name of the experiment to start.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/environments/<Environment ID>/experiments/<Experiment ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\Experiment
     *
     * @throws ApiException if the remote call fails
     */
    public function startExperiment($name, array $optionalArgs = [])
    {
        $request = new StartExperimentRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('StartExperiment', Experiment::class, $optionalArgs, $request)->wait();
    }

    /**
     * Stops the specified [Experiment][google.cloud.dialogflow.cx.v3.Experiment].
     * This rpc only changes the state of experiment from RUNNING to DONE.
     *
     * Sample code:
     * ```
     * $experimentsClient = new ExperimentsClient();
     * try {
     *     $formattedName = $experimentsClient->experimentName('[PROJECT]', '[LOCATION]', '[AGENT]', '[ENVIRONMENT]', '[EXPERIMENT]');
     *     $response = $experimentsClient->stopExperiment($formattedName);
     * } finally {
     *     $experimentsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Resource name of the experiment to stop.
     *                             Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                             ID>/environments/<Environment ID>/experiments/<Experiment ID>`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\Experiment
     *
     * @throws ApiException if the remote call fails
     */
    public function stopExperiment($name, array $optionalArgs = [])
    {
        $request = new StopExperimentRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('StopExperiment', Experiment::class, $optionalArgs, $request)->wait();
    }

    /**
     * Updates the specified
     * [Experiment][google.cloud.dialogflow.cx.v3.Experiment].
     *
     * Sample code:
     * ```
     * $experimentsClient = new ExperimentsClient();
     * try {
     *     $experiment = new Experiment();
     *     $updateMask = new FieldMask();
     *     $response = $experimentsClient->updateExperiment($experiment, $updateMask);
     * } finally {
     *     $experimentsClient->close();
     * }
     * ```
     *
     * @param Experiment $experiment   Required. The experiment to update.
     * @param FieldMask  $updateMask   Required. The mask to control which fields get updated.
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\Experiment
     *
     * @throws ApiException if the remote call fails
     */
    public function updateExperiment($experiment, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateExperimentRequest();
        $requestParamHeaders = [];
        $request->setExperiment($experiment);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['experiment.name'] = $experiment->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateExperiment', Experiment::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets information about a location.
     *
     * Sample code:
     * ```
     * $experimentsClient = new ExperimentsClient();
     * try {
     *     $response = $experimentsClient->getLocation();
     * } finally {
     *     $experimentsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           Resource name for the location.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Location\Location
     *
     * @throws ApiException if the remote call fails
     */
    public function getLocation(array $optionalArgs = [])
    {
        $request = new GetLocationRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetLocation', Location::class, $optionalArgs, $request, Call::UNARY_CALL, 'google.cloud.location.Locations')->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * Sample code:
     * ```
     * $experimentsClient = new ExperimentsClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $experimentsClient->listLocations();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $experimentsClient->listLocations();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $experimentsClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $name
     *           The resource that owns the locations collection, if applicable.
     *     @type string $filter
     *           The standard list filter.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listLocations(array $optionalArgs = [])
    {
        $request = new ListLocationsRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['name'])) {
            $request->setName($optionalArgs['name']);
            $requestParamHeaders['name'] = $optionalArgs['name'];
        }

        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListLocations', $optionalArgs, ListLocationsResponse::class, $request, 'google.cloud.location.Locations');
    }
}
