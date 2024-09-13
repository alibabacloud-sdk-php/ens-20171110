<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGResponseBody\SDGs\avaliableRegionIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGResponseBody\SDGs\preloadInfos;
use AlibabaCloud\Tea\Model;

class SDGs extends Model
{
    /**
     * @description SDGs that have snapshots.
     *
     * @var avaliableRegionIds[]
     */
    public $avaliableRegionIds;

    /**
     * @description The ID of the instance on which the SDG is created.
     *
     * @example aic-5x20dyeos****
     *
     * @var string
     */
    public $creationInstanceId;

    /**
     * @description The ID of the node on which the SDG is created.
     *
     * @example cn-hangzhou-26
     *
     * @var string
     */
    public $creationRegionId;

    /**
     * @description The time when the first SDG in the node was created.
     *
     * @example 2023-02-27 15:07:21
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the SDG.
     *
     * @example Testing SDGs
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the source SDG from which you want to create an SDG. The value of this parameter is the value of the **FromSDGId** parameter that you need to specify when you call the [CreateSDG](https://help.aliyun.com/document_detail/608128.html) operation.
     *
     * @example sdg-xxxxx
     *
     * @var string
     */
    public $parentSDGId;

    /**
     * @description The preload information.
     *
     * @var preloadInfos[]
     */
    public $preloadInfos;

    /**
     * @description The ID of the SDG.
     *
     * @example sdg-30e1fdba7196bc****
     *
     * @var string
     */
    public $SDGId;

    /**
     * @description The size of the SDG. Unit: GB.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the SDG creation. Valid values:
     *
     *   **sdg_making**
     *   **sdg_saving**
     *   **failed**
     *   **success**
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the SDG was last updated.
     *
     * @example 2023-02-27 16:04:39
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'avaliableRegionIds' => 'AvaliableRegionIds',
        'creationInstanceId' => 'CreationInstanceId',
        'creationRegionId'   => 'CreationRegionId',
        'creationTime'       => 'CreationTime',
        'description'        => 'Description',
        'parentSDGId'        => 'ParentSDGId',
        'preloadInfos'       => 'PreloadInfos',
        'SDGId'              => 'SDGId',
        'size'               => 'Size',
        'status'             => 'Status',
        'updateTime'         => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avaliableRegionIds) {
            $res['AvaliableRegionIds'] = [];
            if (null !== $this->avaliableRegionIds && \is_array($this->avaliableRegionIds)) {
                $n = 0;
                foreach ($this->avaliableRegionIds as $item) {
                    $res['AvaliableRegionIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->creationInstanceId) {
            $res['CreationInstanceId'] = $this->creationInstanceId;
        }
        if (null !== $this->creationRegionId) {
            $res['CreationRegionId'] = $this->creationRegionId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->parentSDGId) {
            $res['ParentSDGId'] = $this->parentSDGId;
        }
        if (null !== $this->preloadInfos) {
            $res['PreloadInfos'] = [];
            if (null !== $this->preloadInfos && \is_array($this->preloadInfos)) {
                $n = 0;
                foreach ($this->preloadInfos as $item) {
                    $res['PreloadInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SDGs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvaliableRegionIds'])) {
            if (!empty($map['AvaliableRegionIds'])) {
                $model->avaliableRegionIds = [];
                $n                         = 0;
                foreach ($map['AvaliableRegionIds'] as $item) {
                    $model->avaliableRegionIds[$n++] = null !== $item ? avaliableRegionIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreationInstanceId'])) {
            $model->creationInstanceId = $map['CreationInstanceId'];
        }
        if (isset($map['CreationRegionId'])) {
            $model->creationRegionId = $map['CreationRegionId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ParentSDGId'])) {
            $model->parentSDGId = $map['ParentSDGId'];
        }
        if (isset($map['PreloadInfos'])) {
            if (!empty($map['PreloadInfos'])) {
                $model->preloadInfos = [];
                $n                   = 0;
                foreach ($map['PreloadInfos'] as $item) {
                    $model->preloadInfos[$n++] = null !== $item ? preloadInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}