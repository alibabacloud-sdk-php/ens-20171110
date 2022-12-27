<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class SetBackendServersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $backendServersShrink;

    /**
     * @example lb-5s7crik3yo3bp03gqrbp5****
     *
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'backendServersShrink' => 'BackendServers',
        'loadBalancerId'       => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServersShrink) {
            $res['BackendServers'] = $this->backendServersShrink;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetBackendServersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServers'])) {
            $model->backendServersShrink = $map['BackendServers'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
