<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateIncidentRequest extends Model
{
    /**
     * @description 幂等校验Id
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 影响程度
     *
     * @var string
     */
    public $effect;

    /**
     * @description 事件Id
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 级别
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @description 事件标题
     *
     * @var string
     */
    public $incidentTitle;
    protected $_name = [
        'clientToken'   => 'clientToken',
        'effect'        => 'effect',
        'incidentId'    => 'incidentId',
        'incidentLevel' => 'incidentLevel',
        'incidentTitle' => 'incidentTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->incidentTitle) {
            $res['incidentTitle'] = $this->incidentTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIncidentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['incidentTitle'])) {
            $model->incidentTitle = $map['incidentTitle'];
        }

        return $model;
    }
}
