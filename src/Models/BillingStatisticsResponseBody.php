<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\BillingStatisticsResponseBody\data;
use AlibabaCloud\Tea\Model;

class BillingStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var data
     */
    public $data;
    protected $_name = [
        'requestId' => 'RequestId',
        'data'      => 'data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BillingStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        return $model;
    }
}
