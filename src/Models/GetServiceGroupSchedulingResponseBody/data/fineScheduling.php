<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody\data;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody\data\fineScheduling\schedulingFineShifts;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody\data\fineScheduling\schedulingTemplateFineShifts;
use AlibabaCloud\Tea\Model;

class fineScheduling extends Model
{
    /**
     * @description 1
     *
     * @var int
     */
    public $id;

    /**
     * @description 1
     *
     * @var int
     */
    public $period;

    /**
     * @description 循环周期单位 HOUR 小时 DAY 天
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description 精细排班班次人员信息
     *
     * @var schedulingFineShifts[]
     */
    public $schedulingFineShifts;

    /**
     * @description 精细排班模版
     *
     * @var schedulingTemplateFineShifts[]
     */
    public $schedulingTemplateFineShifts;

    /**
     * @description 班次类型 MORNING_NIGHT 早晚班 MORNING_NOON_NIGHT 早中晚班 CUSTOM 自定义
     *
     * @var string
     */
    public $shiftType;
    protected $_name = [
        'id'                           => 'id',
        'period'                       => 'period',
        'periodUnit'                   => 'periodUnit',
        'schedulingFineShifts'         => 'schedulingFineShifts',
        'schedulingTemplateFineShifts' => 'schedulingTemplateFineShifts',
        'shiftType'                    => 'shiftType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['periodUnit'] = $this->periodUnit;
        }
        if (null !== $this->schedulingFineShifts) {
            $res['schedulingFineShifts'] = [];
            if (null !== $this->schedulingFineShifts && \is_array($this->schedulingFineShifts)) {
                $n = 0;
                foreach ($this->schedulingFineShifts as $item) {
                    $res['schedulingFineShifts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schedulingTemplateFineShifts) {
            $res['schedulingTemplateFineShifts'] = [];
            if (null !== $this->schedulingTemplateFineShifts && \is_array($this->schedulingTemplateFineShifts)) {
                $n = 0;
                foreach ($this->schedulingTemplateFineShifts as $item) {
                    $res['schedulingTemplateFineShifts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->shiftType) {
            $res['shiftType'] = $this->shiftType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fineScheduling
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['periodUnit'])) {
            $model->periodUnit = $map['periodUnit'];
        }
        if (isset($map['schedulingFineShifts'])) {
            if (!empty($map['schedulingFineShifts'])) {
                $model->schedulingFineShifts = [];
                $n                           = 0;
                foreach ($map['schedulingFineShifts'] as $item) {
                    $model->schedulingFineShifts[$n++] = null !== $item ? schedulingFineShifts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['schedulingTemplateFineShifts'])) {
            if (!empty($map['schedulingTemplateFineShifts'])) {
                $model->schedulingTemplateFineShifts = [];
                $n                                   = 0;
                foreach ($map['schedulingTemplateFineShifts'] as $item) {
                    $model->schedulingTemplateFineShifts[$n++] = null !== $item ? schedulingTemplateFineShifts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['shiftType'])) {
            $model->shiftType = $map['shiftType'];
        }

        return $model;
    }
}
