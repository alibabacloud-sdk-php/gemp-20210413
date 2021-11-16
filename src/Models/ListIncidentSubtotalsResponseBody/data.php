<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentSubtotalsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 操作人Id
     *
     * @var int
     */
    public $createUserId;

    /**
     * @description 操作人
     *
     * @var string
     */
    public $createUserName;

    /**
     * @description 操作人手机号
     *
     * @var string
     */
    public $createUserPhone;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'createTime'      => 'createTime',
        'createUserId'    => 'createUserId',
        'createUserName'  => 'createUserName',
        'createUserPhone' => 'createUserPhone',
        'description'     => 'description',
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
        if (null !== $this->createUserId) {
            $res['createUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserName) {
            $res['createUserName'] = $this->createUserName;
        }
        if (null !== $this->createUserPhone) {
            $res['createUserPhone'] = $this->createUserPhone;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['createUserId'])) {
            $model->createUserId = $map['createUserId'];
        }
        if (isset($map['createUserName'])) {
            $model->createUserName = $map['createUserName'];
        }
        if (isset($map['createUserPhone'])) {
            $model->createUserPhone = $map['createUserPhone'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
