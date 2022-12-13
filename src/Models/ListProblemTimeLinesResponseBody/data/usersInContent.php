<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListProblemTimeLinesResponseBody\data;

use AlibabaCloud\Tea\Model;

class usersInContent extends Model
{
    /**
     * @var int
     */
    public $isValid;

    /**
     * @example 232
     *
     * @var int
     */
    public $userId;

    /**
     * @example 张老萨
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'isValid'  => 'isValid',
        'userId'   => 'userId',
        'username' => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isValid) {
            $res['isValid'] = $this->isValid;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usersInContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isValid'])) {
            $model->isValid = $map['isValid'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
