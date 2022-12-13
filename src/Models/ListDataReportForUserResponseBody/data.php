<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $distributionIncidentCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $escalationIncidentCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $finishIncidentNumber;

    /**
     * @example 20%
     *
     * @var string
     */
    public $finishProportion;

    /**
     * @description MRRA
     *
     * @example 3分50秒
     *
     * @var string
     */
    public $meanTimeToAcknowledge;

    /**
     * @description MTTA
     *
     * @example 3分50秒
     *
     * @var string
     */
    public $meanTimeToRepair;

    /**
     * @example 100
     *
     * @var int
     */
    public $unAcknowledgedEscalationIncidentCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $unDistributionIncidentCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $unFinishEscalationIncidentCount;

    /**
     * @example 1111
     *
     * @var int
     */
    public $userId;

    /**
     * @example wy
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'distributionIncidentCount'             => 'distributionIncidentCount',
        'escalationIncidentCount'               => 'escalationIncidentCount',
        'finishIncidentNumber'                  => 'finishIncidentNumber',
        'finishProportion'                      => 'finishProportion',
        'meanTimeToAcknowledge'                 => 'meanTimeToAcknowledge',
        'meanTimeToRepair'                      => 'meanTimeToRepair',
        'unAcknowledgedEscalationIncidentCount' => 'unAcknowledgedEscalationIncidentCount',
        'unDistributionIncidentCount'           => 'unDistributionIncidentCount',
        'unFinishEscalationIncidentCount'       => 'unFinishEscalationIncidentCount',
        'userId'                                => 'userId',
        'userName'                              => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributionIncidentCount) {
            $res['distributionIncidentCount'] = $this->distributionIncidentCount;
        }
        if (null !== $this->escalationIncidentCount) {
            $res['escalationIncidentCount'] = $this->escalationIncidentCount;
        }
        if (null !== $this->finishIncidentNumber) {
            $res['finishIncidentNumber'] = $this->finishIncidentNumber;
        }
        if (null !== $this->finishProportion) {
            $res['finishProportion'] = $this->finishProportion;
        }
        if (null !== $this->meanTimeToAcknowledge) {
            $res['meanTimeToAcknowledge'] = $this->meanTimeToAcknowledge;
        }
        if (null !== $this->meanTimeToRepair) {
            $res['meanTimeToRepair'] = $this->meanTimeToRepair;
        }
        if (null !== $this->unAcknowledgedEscalationIncidentCount) {
            $res['unAcknowledgedEscalationIncidentCount'] = $this->unAcknowledgedEscalationIncidentCount;
        }
        if (null !== $this->unDistributionIncidentCount) {
            $res['unDistributionIncidentCount'] = $this->unDistributionIncidentCount;
        }
        if (null !== $this->unFinishEscalationIncidentCount) {
            $res['unFinishEscalationIncidentCount'] = $this->unFinishEscalationIncidentCount;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['distributionIncidentCount'])) {
            $model->distributionIncidentCount = $map['distributionIncidentCount'];
        }
        if (isset($map['escalationIncidentCount'])) {
            $model->escalationIncidentCount = $map['escalationIncidentCount'];
        }
        if (isset($map['finishIncidentNumber'])) {
            $model->finishIncidentNumber = $map['finishIncidentNumber'];
        }
        if (isset($map['finishProportion'])) {
            $model->finishProportion = $map['finishProportion'];
        }
        if (isset($map['meanTimeToAcknowledge'])) {
            $model->meanTimeToAcknowledge = $map['meanTimeToAcknowledge'];
        }
        if (isset($map['meanTimeToRepair'])) {
            $model->meanTimeToRepair = $map['meanTimeToRepair'];
        }
        if (isset($map['unAcknowledgedEscalationIncidentCount'])) {
            $model->unAcknowledgedEscalationIncidentCount = $map['unAcknowledgedEscalationIncidentCount'];
        }
        if (isset($map['unDistributionIncidentCount'])) {
            $model->unDistributionIncidentCount = $map['unDistributionIncidentCount'];
        }
        if (isset($map['unFinishEscalationIncidentCount'])) {
            $model->unFinishEscalationIncidentCount = $map['unFinishEscalationIncidentCount'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
