<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerHTTPSListenerAttributeRequest extends Model
{
    /**
     * @description The frontend port that is used by the Edge Load Balance (ELB) instance. Valid values: **1** to **65535**.
     *
     * @example 8080
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the ELB instance.
     *
     * @example lb-5qoxu2rsr0ytanpn4r3i****
     *
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'listenerPort'   => 'ListenerPort',
        'loadBalancerId' => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
