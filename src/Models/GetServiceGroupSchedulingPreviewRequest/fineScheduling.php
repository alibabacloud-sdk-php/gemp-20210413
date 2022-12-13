<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingPreviewRequest\fineScheduling\schedulingFineShifts;
use AlibabaCloud\Tea\Model;

class fineScheduling extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $period;

    /**
     * @example DAY
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @var schedulingFineShifts[]
     */
    public $schedulingFineShifts;

    /**
     * @example MORNING_NIGHT
     *
     * @var string
     */
    public $shiftType;
    protected $_name = [
        'period'               => 'period',
        'periodUnit'           => 'periodUnit',
        'schedulingFineShifts' => 'schedulingFineShifts',
        'shiftType'            => 'shiftType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['shiftType'])) {
            $model->shiftType = $map['shiftType'];
        }

        return $model;
    }
}
