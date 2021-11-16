<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateIntegrationConfigRequest extends Model
{
    /**
     * @description 集成秘钥
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description 幂等id
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $integrationConfigId;
    protected $_name = [
        'accessKey'           => 'accessKey',
        'clientToken'         => 'clientToken',
        'integrationConfigId' => 'integrationConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->integrationConfigId) {
            $res['integrationConfigId'] = $this->integrationConfigId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIntegrationConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['integrationConfigId'])) {
            $model->integrationConfigId = $map['integrationConfigId'];
        }

        return $model;
    }
}
