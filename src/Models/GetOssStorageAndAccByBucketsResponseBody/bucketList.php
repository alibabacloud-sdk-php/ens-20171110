<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetOssStorageAndAccByBucketsResponseBody;

use AlibabaCloud\Tea\Model;

class bucketList extends Model
{
    /**
     * @var int
     */
    public $acc;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var int
     */
    public $storageUsageByte;
    protected $_name = [
        'acc'              => 'Acc',
        'bucket'           => 'Bucket',
        'storageUsageByte' => 'StorageUsageByte',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->storageUsageByte) {
            $res['StorageUsageByte'] = $this->storageUsageByte;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bucketList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['StorageUsageByte'])) {
            $model->storageUsageByte = $map['StorageUsageByte'];
        }

        return $model;
    }
}
