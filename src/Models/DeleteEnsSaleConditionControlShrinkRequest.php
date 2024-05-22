<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnsSaleConditionControlShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $aliUidAccount;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $saleControlsShrink;
    protected $_name = [
        'aliUidAccount'      => 'AliUidAccount',
        'commodityCode'      => 'CommodityCode',
        'saleControlsShrink' => 'SaleControls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUidAccount) {
            $res['AliUidAccount'] = $this->aliUidAccount;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->saleControlsShrink) {
            $res['SaleControls'] = $this->saleControlsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnsSaleConditionControlShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUidAccount'])) {
            $model->aliUidAccount = $map['AliUidAccount'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['SaleControls'])) {
            $model->saleControlsShrink = $map['SaleControls'];
        }

        return $model;
    }
}
