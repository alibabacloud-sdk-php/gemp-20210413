<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetSubscriptionRequest extends Model
{
    /**
     * @var bool
     */
    public $notFilterScopeObjectDeleted;

    /**
     * @example 10
     *
     * @var int
     */
    public $subscriptionId;
    protected $_name = [
        'notFilterScopeObjectDeleted' => 'notFilterScopeObjectDeleted',
        'subscriptionId'              => 'subscriptionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notFilterScopeObjectDeleted) {
            $res['notFilterScopeObjectDeleted'] = $this->notFilterScopeObjectDeleted;
        }
        if (null !== $this->subscriptionId) {
            $res['subscriptionId'] = $this->subscriptionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubscriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['notFilterScopeObjectDeleted'])) {
            $model->notFilterScopeObjectDeleted = $map['notFilterScopeObjectDeleted'];
        }
        if (isset($map['subscriptionId'])) {
            $model->subscriptionId = $map['subscriptionId'];
        }

        return $model;
    }
}
