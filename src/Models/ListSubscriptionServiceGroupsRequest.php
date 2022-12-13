<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListSubscriptionServiceGroupsRequest extends Model
{
    /**
     * @example 89f51d2e-5527-4f6c-a6c6-4411b5496e9f
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var int[]
     */
    public $serviceIds;
    protected $_name = [
        'clientToken' => 'clientToken',
        'serviceIds'  => 'serviceIds',
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
        if (null !== $this->serviceIds) {
            $res['serviceIds'] = $this->serviceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubscriptionServiceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['serviceIds'])) {
            if (!empty($map['serviceIds'])) {
                $model->serviceIds = $map['serviceIds'];
            }
        }

        return $model;
    }
}
