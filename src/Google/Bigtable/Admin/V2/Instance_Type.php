<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Bigtable\Admin\V2;

/**
 * The type of the instance.
 *
 * Protobuf enum <code>Google\Bigtable\Admin\V2\Instance\Type</code>
 */
class Instance_Type
{
    /**
     * The type of the instance is unspecified. If set when creating an
     * instance, a `PRODUCTION` instance will be created. If set when updating
     * an instance, the type will be left unchanged.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * An instance meant for production use. `serve_nodes` must be set
     * on the cluster.
     *
     * Generated from protobuf enum <code>PRODUCTION = 1;</code>
     */
    const PRODUCTION = 1;
    /**
     * The instance is meant for development and testing purposes only; it has
     * no performance or uptime guarantees and is not covered by SLA.
     * After a development instance is created, it can be upgraded by
     * updating the instance to type `PRODUCTION`. An instance created
     * as a production instance cannot be changed to a development instance.
     * When creating a development instance, `serve_nodes` on the cluster must
     * not be set.
     *
     * Generated from protobuf enum <code>DEVELOPMENT = 2;</code>
     */
    const DEVELOPMENT = 2;
}

