<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $category;

    /**
     * @example 50
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category' => 'Category',
        'size'     => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
