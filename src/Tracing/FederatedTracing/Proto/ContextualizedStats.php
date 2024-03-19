<?php declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: src/Tracing/FederatedTracing/reports.proto

namespace Nuwave\Lighthouse\Tracing\FederatedTracing\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ContextualizedStats</code>.
 */
class ContextualizedStats extends \Google\Protobuf\Internal\Message
{
    /** Generated from protobuf field <code>.StatsContext context = 1 [json_name = "context"];</code> */
    protected $context;

    /** Generated from protobuf field <code>.QueryLatencyStats query_latency_stats = 2 [json_name = "queryLatencyStats"];</code> */
    protected $query_latency_stats;

    /**
     * Key is type name. This structure provides data for the count and latency of individual
     * field executions and thus only reflects operations for which field-level tracing occurred.
     *
     * Generated from protobuf field <code>map<string, .TypeStat> per_type_stat = 3 [json_name = "perTypeStat"];</code>
     */
    private $per_type_stat;

    /**
     * Constructor.
     *
     * @param  array  $data {
     *     Optional. Data for populating the Message object.
     *
     *     @var \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\StatsContext $context
     *     @var \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\QueryLatencyStats $query_latency_stats
     *     @var array|\Google\Protobuf\Internal\MapField $per_type_stat
     *           Key is type name. This structure provides data for the count and latency of individual
     *           field executions and thus only reflects operations for which field-level tracing occurred.
     * }
     */
    public function __construct($data = null)
    {
        Metadata\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.StatsContext context = 1 [json_name = "context"];</code>.
     *
     * @return \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\StatsContext|null
     */
    public function getContext()
    {
        return $this->context;
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Generated from protobuf field <code>.StatsContext context = 1 [json_name = "context"];</code>.
     *
     * @param  \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\StatsContext  $var
     *
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, StatsContext::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.QueryLatencyStats query_latency_stats = 2 [json_name = "queryLatencyStats"];</code>.
     *
     * @return \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\QueryLatencyStats|null
     */
    public function getQueryLatencyStats()
    {
        return $this->query_latency_stats;
    }

    public function hasQueryLatencyStats()
    {
        return isset($this->query_latency_stats);
    }

    public function clearQueryLatencyStats()
    {
        unset($this->query_latency_stats);
    }

    /**
     * Generated from protobuf field <code>.QueryLatencyStats query_latency_stats = 2 [json_name = "queryLatencyStats"];</code>.
     *
     * @param  \Nuwave\Lighthouse\Tracing\FederatedTracing\Proto\QueryLatencyStats  $var
     *
     * @return $this
     */
    public function setQueryLatencyStats($var)
    {
        GPBUtil::checkMessage($var, QueryLatencyStats::class);
        $this->query_latency_stats = $var;

        return $this;
    }

    /**
     * Key is type name. This structure provides data for the count and latency of individual
     * field executions and thus only reflects operations for which field-level tracing occurred.
     *
     * Generated from protobuf field <code>map<string, .TypeStat> per_type_stat = 3 [json_name = "perTypeStat"];</code>
     *
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPerTypeStat()
    {
        return $this->per_type_stat;
    }

    /**
     * Key is type name. This structure provides data for the count and latency of individual
     * field executions and thus only reflects operations for which field-level tracing occurred.
     *
     * Generated from protobuf field <code>map<string, .TypeStat> per_type_stat = 3 [json_name = "perTypeStat"];</code>
     *
     * @param  array|\Google\Protobuf\Internal\MapField  $var
     *
     * @return $this
     */
    public function setPerTypeStat($var)
    {
        $arr = GPBUtil::checkMapField($var, GPBType::STRING, GPBType::MESSAGE, TypeStat::class);
        $this->per_type_stat = $arr;

        return $this;
    }
}
