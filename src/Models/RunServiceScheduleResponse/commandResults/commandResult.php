<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponse\commandResults;

use AlibabaCloud\Tea\Model;

class commandResult extends Model
{
    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $resultMsg;
    protected $_name = [
        'containerName' => 'ContainerName',
        'command'       => 'Command',
        'resultMsg'     => 'ResultMsg',
    ];

    public function validate()
    {
        Model::validateRequired('containerName', $this->containerName, true);
        Model::validateRequired('command', $this->command, true);
        Model::validateRequired('resultMsg', $this->resultMsg, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commandResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        return $model;
    }
}
