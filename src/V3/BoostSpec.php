<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/session.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Boost specification to boost certain documents.
 * A copy of google.cloud.discoveryengine.v1main.BoostSpec, field documentation
 * is available at
 * https://cloud.google.com/generative-ai-app-builder/docs/reference/rest/v1alpha/BoostSpec
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.BoostSpec</code>
 */
class BoostSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Condition boost specifications. If a document matches multiple
     * conditions in the specifications, boost scores from these specifications
     * are all applied and combined in a non-linear way. Maximum number of
     * specifications is 20.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.BoostSpec.ConditionBoostSpec condition_boost_specs = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $condition_boost_specs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\BoostSpec\ConditionBoostSpec>|\Google\Protobuf\Internal\RepeatedField $condition_boost_specs
     *           Optional. Condition boost specifications. If a document matches multiple
     *           conditions in the specifications, boost scores from these specifications
     *           are all applied and combined in a non-linear way. Maximum number of
     *           specifications is 20.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Condition boost specifications. If a document matches multiple
     * conditions in the specifications, boost scores from these specifications
     * are all applied and combined in a non-linear way. Maximum number of
     * specifications is 20.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.BoostSpec.ConditionBoostSpec condition_boost_specs = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConditionBoostSpecs()
    {
        return $this->condition_boost_specs;
    }

    /**
     * Optional. Condition boost specifications. If a document matches multiple
     * conditions in the specifications, boost scores from these specifications
     * are all applied and combined in a non-linear way. Maximum number of
     * specifications is 20.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.BoostSpec.ConditionBoostSpec condition_boost_specs = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\BoostSpec\ConditionBoostSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConditionBoostSpecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\BoostSpec\ConditionBoostSpec::class);
        $this->condition_boost_specs = $arr;

        return $this;
    }

}

