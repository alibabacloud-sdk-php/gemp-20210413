<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data\nuAcknowledgeEscalationPlan\noticeObjectList;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data\nuAcknowledgeEscalationPlan\noticeRoleObjectList;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentDetailEscalationPlansResponseBody\data\nuAcknowledgeEscalationPlan\serviceGroupList;
use AlibabaCloud\Tea\Model;

class nuAcknowledgeEscalationPlan extends Model
{
    /**
     * @example UN_ACKNOWLEDGE
     *
     * @var string
     */
    public $escalationPlanType;

    /**
     * @var string[]
     */
    public $noticeChannels;

    /**
     * @var noticeObjectList[]
     */
    public $noticeObjectList;

    /**
     * @var int[]
     */
    public $noticeRoleList;

    /**
     * @var noticeRoleObjectList[]
     */
    public $noticeRoleObjectList;

    /**
     * @example 10
     *
     * @var int
     */
    public $noticeTime;

    /**
     * @var serviceGroupList[]
     */
    public $serviceGroupList;

    /**
     * @example 1629872386027
     *
     * @var int
     */
    public $startTime;

    /**
     * @example UPGRADE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'escalationPlanType'   => 'escalationPlanType',
        'noticeChannels'       => 'noticeChannels',
        'noticeObjectList'     => 'noticeObjectList',
        'noticeRoleList'       => 'noticeRoleList',
        'noticeRoleObjectList' => 'noticeRoleObjectList',
        'noticeTime'           => 'noticeTime',
        'serviceGroupList'     => 'serviceGroupList',
        'startTime'            => 'startTime',
        'status'               => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlanType) {
            $res['escalationPlanType'] = $this->escalationPlanType;
        }
        if (null !== $this->noticeChannels) {
            $res['noticeChannels'] = $this->noticeChannels;
        }
        if (null !== $this->noticeObjectList) {
            $res['noticeObjectList'] = [];
            if (null !== $this->noticeObjectList && \is_array($this->noticeObjectList)) {
                $n = 0;
                foreach ($this->noticeObjectList as $item) {
                    $res['noticeObjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->noticeRoleList) {
            $res['noticeRoleList'] = $this->noticeRoleList;
        }
        if (null !== $this->noticeRoleObjectList) {
            $res['noticeRoleObjectList'] = [];
            if (null !== $this->noticeRoleObjectList && \is_array($this->noticeRoleObjectList)) {
                $n = 0;
                foreach ($this->noticeRoleObjectList as $item) {
                    $res['noticeRoleObjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->noticeTime) {
            $res['noticeTime'] = $this->noticeTime;
        }
        if (null !== $this->serviceGroupList) {
            $res['serviceGroupList'] = [];
            if (null !== $this->serviceGroupList && \is_array($this->serviceGroupList)) {
                $n = 0;
                foreach ($this->serviceGroupList as $item) {
                    $res['serviceGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nuAcknowledgeEscalationPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalationPlanType'])) {
            $model->escalationPlanType = $map['escalationPlanType'];
        }
        if (isset($map['noticeChannels'])) {
            if (!empty($map['noticeChannels'])) {
                $model->noticeChannels = $map['noticeChannels'];
            }
        }
        if (isset($map['noticeObjectList'])) {
            if (!empty($map['noticeObjectList'])) {
                $model->noticeObjectList = [];
                $n                       = 0;
                foreach ($map['noticeObjectList'] as $item) {
                    $model->noticeObjectList[$n++] = null !== $item ? noticeObjectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['noticeRoleList'])) {
            if (!empty($map['noticeRoleList'])) {
                $model->noticeRoleList = $map['noticeRoleList'];
            }
        }
        if (isset($map['noticeRoleObjectList'])) {
            if (!empty($map['noticeRoleObjectList'])) {
                $model->noticeRoleObjectList = [];
                $n                           = 0;
                foreach ($map['noticeRoleObjectList'] as $item) {
                    $model->noticeRoleObjectList[$n++] = null !== $item ? noticeRoleObjectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['noticeTime'])) {
            $model->noticeTime = $map['noticeTime'];
        }
        if (isset($map['serviceGroupList'])) {
            if (!empty($map['serviceGroupList'])) {
                $model->serviceGroupList = [];
                $n                       = 0;
                foreach ($map['serviceGroupList'] as $item) {
                    $model->serviceGroupList[$n++] = null !== $item ? serviceGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
