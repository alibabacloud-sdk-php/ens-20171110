<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class TerminateWorkflowRequest extends Model
{
    /**
     * @var string[]
     */
    public $workflowIds;
    protected $_name = [
        'workflowIds' => 'WorkflowIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workflowIds) {
            $res['WorkflowIds'] = $this->workflowIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TerminateWorkflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkflowIds'])) {
            if (!empty($map['WorkflowIds'])) {
                $model->workflowIds = $map['WorkflowIds'];
            }
        }

        return $model;
    }
}
