<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanScopeObjects;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2021-09-09 09:09:09
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 描述1234
     *
     * @var string
     */
    public $escalationPlanDescription;

    /**
     * @example 2345
     *
     * @var int
     */
    public $escalationPlanId;

    /**
     * @example 升级计划234
     *
     * @var string
     */
    public $escalationPlanName;

    /**
     * @var escalationPlanRules[]
     */
    public $escalationPlanRules;

    /**
     * @var escalationPlanScopeObjects[]
     */
    public $escalationPlanScopeObjects;

    /**
     * @var bool
     */
    public $isGlobal;
    protected $_name = [
        'createTime'                 => 'createTime',
        'escalationPlanDescription'  => 'escalationPlanDescription',
        'escalationPlanId'           => 'escalationPlanId',
        'escalationPlanName'         => 'escalationPlanName',
        'escalationPlanRules'        => 'escalationPlanRules',
        'escalationPlanScopeObjects' => 'escalationPlanScopeObjects',
        'isGlobal'                   => 'isGlobal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->escalationPlanDescription) {
            $res['escalationPlanDescription'] = $this->escalationPlanDescription;
        }
        if (null !== $this->escalationPlanId) {
            $res['escalationPlanId'] = $this->escalationPlanId;
        }
        if (null !== $this->escalationPlanName) {
            $res['escalationPlanName'] = $this->escalationPlanName;
        }
        if (null !== $this->escalationPlanRules) {
            $res['escalationPlanRules'] = [];
            if (null !== $this->escalationPlanRules && \is_array($this->escalationPlanRules)) {
                $n = 0;
                foreach ($this->escalationPlanRules as $item) {
                    $res['escalationPlanRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->isGlobal) {
            $res['isGlobal'] = $this->isGlobal;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['escalationPlanDescription'])) {
            $model->escalationPlanDescription = $map['escalationPlanDescription'];
        }
        if (isset($map['escalationPlanId'])) {
            $model->escalationPlanId = $map['escalationPlanId'];
        }
        if (isset($map['escalationPlanName'])) {
            $model->escalationPlanName = $map['escalationPlanName'];
        }
        if (isset($map['escalationPlanRules'])) {
            if (!empty($map['escalationPlanRules'])) {
                $model->escalationPlanRules = [];
                $n                          = 0;
                foreach ($map['escalationPlanRules'] as $item) {
                    $model->escalationPlanRules[$n++] = null !== $item ? escalationPlanRules::fromMap($item) : $item;
                }
            }
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
        if (isset($map['isGlobal'])) {
            $model->isGlobal = $map['isGlobal'];
        }

        return $model;
    }
}
