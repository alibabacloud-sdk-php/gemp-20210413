<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GenerateProblemPictureLinkResponseBody\data;
use AlibabaCloud\Tea\Model;

class GenerateProblemPictureLinkResponseBody extends Model
{
    /**
     * @description data
     *
     * @var data
     */
    public $data;

    /**
     * @description requestId
     *
     * @example c26f36de-1ec8-496a-a828-88067879ef81
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'data',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateProblemPictureLinkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
