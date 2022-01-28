<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLResponseBody\data\serverList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var serverList[]
     */
    public $serverList;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'serverList' => 'ServerList',
        'url'        => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->serverList) {
            $res['ServerList'] = [];
            if (null !== $this->serverList && \is_array($this->serverList)) {
                $n = 0;
                foreach ($this->serverList as $item) {
                    $res['ServerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ServerList'])) {
            if (!empty($map['ServerList'])) {
                $model->serverList = [];
                $n                 = 0;
                foreach ($map['ServerList'] as $item) {
                    $model->serverList[$n++] = null !== $item ? serverList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
