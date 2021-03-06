<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of columns within a table which share a common configuration.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ColumnFamily</code>
 */
class ColumnFamily extends \Google\Protobuf\Internal\Message
{
    /**
     * Garbage collection rule specified as a protobuf.
     * Must serialize to at most 500 bytes.
     * NOTE: Garbage collection executes opportunistically in the background, and
     * so it's possible for reads to return a cell even if it matches the active
     * GC expression for its family.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.GcRule gc_rule = 1;</code>
     */
    private $gc_rule = null;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct();
    }

    /**
     * Garbage collection rule specified as a protobuf.
     * Must serialize to at most 500 bytes.
     * NOTE: Garbage collection executes opportunistically in the background, and
     * so it's possible for reads to return a cell even if it matches the active
     * GC expression for its family.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.GcRule gc_rule = 1;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\GcRule
     */
    public function getGcRule()
    {
        return $this->gc_rule;
    }

    /**
     * Garbage collection rule specified as a protobuf.
     * Must serialize to at most 500 bytes.
     * NOTE: Garbage collection executes opportunistically in the background, and
     * so it's possible for reads to return a cell even if it matches the active
     * GC expression for its family.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.GcRule gc_rule = 1;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\GcRule $var
     * @return $this
     */
    public function setGcRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\GcRule::class);
        $this->gc_rule = $var;

        return $this;
    }

}

