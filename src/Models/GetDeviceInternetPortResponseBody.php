<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\GetDeviceInternetPortResponseBody\networkInfo;
use AlibabaCloud\Tea\Model;

class GetDeviceInternetPortResponseBody extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var networkInfo[]
     */
    public $networkInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'networkInfo' => 'NetworkInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkInfo) {
            $res['NetworkInfo'] = [];
            if (null !== $this->networkInfo && \is_array($this->networkInfo)) {
                $n = 0;
                foreach ($this->networkInfo as $item) {
                    $res['NetworkInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceInternetPortResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkInfo'])) {
            if (!empty($map['NetworkInfo'])) {
                $model->networkInfo = [];
                $n                  = 0;
                foreach ($map['NetworkInfo'] as $item) {
                    $model->networkInfo[$n++] = null !== $item ? networkInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
