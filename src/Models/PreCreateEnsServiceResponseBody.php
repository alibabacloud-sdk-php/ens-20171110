<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PreCreateEnsServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $buyResourcesDetail;

    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example ens-20190806****
     *
     * @var string
     */
    public $ensServiceId;

    /**
     * @example Small
     *
     * @var string
     */
    public $netLevel;

    /**
     * @example 9AF02B43-2D08-49D3-8AAF-65B9C792ED14
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'buyResourcesDetail' => 'BuyResourcesDetail',
        'code'               => 'Code',
        'ensServiceId'       => 'EnsServiceId',
        'netLevel'           => 'NetLevel',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyResourcesDetail) {
            $res['BuyResourcesDetail'] = $this->buyResourcesDetail;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ensServiceId) {
            $res['EnsServiceId'] = $this->ensServiceId;
        }
        if (null !== $this->netLevel) {
            $res['NetLevel'] = $this->netLevel;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreCreateEnsServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyResourcesDetail'])) {
            $model->buyResourcesDetail = $map['BuyResourcesDetail'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EnsServiceId'])) {
            $model->ensServiceId = $map['EnsServiceId'];
        }
        if (isset($map['NetLevel'])) {
            $model->netLevel = $map['NetLevel'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
