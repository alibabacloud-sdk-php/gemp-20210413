<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansByNoticeObjectResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListEscalationPlansByNoticeObjectResponseBody\data\escalationPlanScopeObjects;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $escalationPlanId;

    /**
     * @var string
     */
    public $escalationPlanName;

    /**
     * @var escalationPlanScopeObjects[]
     */
    public $escalationPlanScopeObjects;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'escalationPlanId'           => 'escalationPlanId',
        'escalationPlanName'         => 'escalationPlanName',
        'escalationPlanScopeObjects' => 'escalationPlanScopeObjects',
        'modifyTime'                 => 'modifyTime',
        'status'                     => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
        }
        if (null !== $this->escalationPlanName) {
            $res['escalationPlanName'] = $this->escalationPlanName;
        }
        if (null !== $this->escalationPlanScopeObjects) {
            $res['escalationPlanScopeObjects'] = [];
            if (null !== $this->escalationPlanScopeObjects && \is_array($this->escalationPlanScopeObjects)) {
                $n = 0;
                foreach ($this->escalationPlanScopeObjects as $item) {
                    $res['escalationPlanScopeObjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modifyTime) {
            $res['modifyTime'] = $this->modifyTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }
        if (isset($map['escalationPlanName'])) {
            $model->escalationPlanName = $map['escalationPlanName'];
        }
        if (isset($map['escalationPlanScopeObjects'])) {
            if (!empty($map['escalationPlanScopeObjects'])) {
                $model->escalationPlanScopeObjects = [];
                $n                                 = 0;
                foreach ($map['escalationPlanScopeObjects'] as $item) {
                    $model->escalationPlanScopeObjects[$n++] = null !== $item ? escalationPlanScopeObjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['modifyTime'])) {
            $model->modifyTime = $map['modifyTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
