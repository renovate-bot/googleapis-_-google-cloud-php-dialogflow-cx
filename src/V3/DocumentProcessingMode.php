<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/data_store_connection.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use UnexpectedValueException;

/**
 * The document processing mode of the data store.
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.DocumentProcessingMode</code>
 */
class DocumentProcessingMode
{
    /**
     * Not specified. This should be set for STRUCTURED type data stores. Due to
     * legacy reasons this is considered as DOCUMENTS for STRUCTURED and
     * PUBLIC_WEB data stores.
     *
     * Generated from protobuf enum <code>DOCUMENT_PROCESSING_MODE_UNSPECIFIED = 0;</code>
     */
    const DOCUMENT_PROCESSING_MODE_UNSPECIFIED = 0;
    /**
     * Documents are processed as documents.
     *
     * Generated from protobuf enum <code>DOCUMENTS = 1;</code>
     */
    const DOCUMENTS = 1;
    /**
     * Documents are converted to chunks.
     *
     * Generated from protobuf enum <code>CHUNKS = 2;</code>
     */
    const CHUNKS = 2;

    private static $valueToName = [
        self::DOCUMENT_PROCESSING_MODE_UNSPECIFIED => 'DOCUMENT_PROCESSING_MODE_UNSPECIFIED',
        self::DOCUMENTS => 'DOCUMENTS',
        self::CHUNKS => 'CHUNKS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

