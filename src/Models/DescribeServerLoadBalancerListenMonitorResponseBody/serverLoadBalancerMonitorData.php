<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServerLoadBalancerListenMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class serverLoadBalancerMonitorData extends Model
{
    /**
     * @description The total number of requests.
     *
     * @example 20
     *
     * @var int
     */
    public $acc;

    /**
     * @description The business time of the log. Logs are collected every minute.
     *
     * @example 2024-05-16 15:00:00
     *
     * @var string
     */
    public $bizTime;

    /**
     * @description The ID of the node to which the ELB instance belongs.
     *
     * @example cn-fuzhou-7
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the ELB instance.
     *
     * @example lb-5rcvo1n1t3hykfhhjwjgqp****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the ELB instance.
     *
     * @example esk-edge-service-lb-8377****
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The specification of the ELB instance.
     *
     * @example elb.s2.medium
     *
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @description The request protocol, such as http, https, or tcp.
     *
     * @example tcp
     *
     * @var string
     */
    public $proto;

    /**
     * @description The number of requests with HTTP 2xx status code returned.
     *
     * @example 10
     *
     * @var int
     */
    public $reqs2xx;

    /**
     * @description The number of requests with HTTP 3xx status code returned.
     *
     * @example 0
     *
     * @var int
     */
    public $reqs3xx;

    /**
     * @description The number of requests with HTTP 4xx status code returned.
     *
     * @example 0
     *
     * @var int
     */
    public $reqs4xx;

    /**
     * @description The number of requests with HTTP 5xx status code returned.
     *
     * @example 10
     *
     * @var int
     */
    public $reqs5xx;

    /**
     * @description The average response time. Unit: milliseconds.
     *
     * @example 1037
     *
     * @var int
     */
    public $rtAvg;

    /**
     * @description The VIP of the instance.
     *
     * @example 10.0****
     *
     * @var string
     */
    public $vip;

    /**
     * @description The ID of the tunnel.
     *
     * @example 52497
     *
     * @var int
     */
    public $vni;

    /**
     * @description The VIP port, such as 80, 8080, or 443.
     *
     * @example 80
     *
     * @var int
     */
    public $vport;
    protected $_name = [
        'acc' => 'Acc',
        'bizTime' => 'BizTime',
        'ensRegionId' => 'EnsRegionId',
        'loadBalancerId' => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerSpec' => 'LoadBalancerSpec',
        'proto' => 'Proto',
        'reqs2xx' => 'Reqs2xx',
        'reqs3xx' => 'Reqs3xx',
        'reqs4xx' => 'Reqs4xx',
        'reqs5xx' => 'Reqs5xx',
        'rtAvg' => 'RtAvg',
        'vip' => 'Vip',
        'vni' => 'Vni',
        'vport' => 'Vport',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->reqs2xx) {
            $res['Reqs2xx'] = $this->reqs2xx;
        }
        if (null !== $this->reqs3xx) {
            $res['Reqs3xx'] = $this->reqs3xx;
        }
        if (null !== $this->reqs4xx) {
            $res['Reqs4xx'] = $this->reqs4xx;
        }
        if (null !== $this->reqs5xx) {
            $res['Reqs5xx'] = $this->reqs5xx;
        }
        if (null !== $this->rtAvg) {
            $res['RtAvg'] = $this->rtAvg;
        }
        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }
        if (null !== $this->vni) {
            $res['Vni'] = $this->vni;
        }
        if (null !== $this->vport) {
            $res['Vport'] = $this->vport;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverLoadBalancerMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['Reqs2xx'])) {
            $model->reqs2xx = $map['Reqs2xx'];
        }
        if (isset($map['Reqs3xx'])) {
            $model->reqs3xx = $map['Reqs3xx'];
        }
        if (isset($map['Reqs4xx'])) {
            $model->reqs4xx = $map['Reqs4xx'];
        }
        if (isset($map['Reqs5xx'])) {
            $model->reqs5xx = $map['Reqs5xx'];
        }
        if (isset($map['RtAvg'])) {
            $model->rtAvg = $map['RtAvg'];
        }
        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }
        if (isset($map['Vni'])) {
            $model->vni = $map['Vni'];
        }
        if (isset($map['Vport'])) {
            $model->vport = $map['Vport'];
        }

        return $model;
    }
}
