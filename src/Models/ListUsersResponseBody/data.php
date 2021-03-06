<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListUsersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 账户类型
     *
     * @var int
     */
    public $accountType;

    /**
     * @description 移动应用账户
     *
     * @var string
     */
    public $appAccount;

    /**
     * @description 邮箱
     *
     * @var string
     */
    public $email;

    /**
     * @description 是否可编辑
     *
     * @var int
     */
    public $isEditableUser;

    /**
     * @description 是否关联
     *
     * @var string
     */
    public $isRelated;

    /**
     * @description 手机
     *
     * @var string
     */
    public $phone;

    /**
     * @description 子账号ramId
     *
     * @var int
     */
    public $ramId;

    /**
     * @description 移动应用协同渠道
     *
     * @var string
     */
    public $synergyChannel;

    /**
     * @description 用户id
     *
     * @var int
     */
    public $userId;

    /**
     * @description 用户名
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'accountType'    => 'accountType',
        'appAccount'     => 'appAccount',
        'email'          => 'email',
        'isEditableUser' => 'isEditableUser',
        'isRelated'      => 'isRelated',
        'phone'          => 'phone',
        'ramId'          => 'ramId',
        'synergyChannel' => 'synergyChannel',
        'userId'         => 'userId',
        'username'       => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }
        if (null !== $this->appAccount) {
            $res['appAccount'] = $this->appAccount;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->isEditableUser) {
            $res['isEditableUser'] = $this->isEditableUser;
        }
        if (null !== $this->isRelated) {
            $res['isRelated'] = $this->isRelated;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->ramId) {
            $res['ramId'] = $this->ramId;
        }
        if (null !== $this->synergyChannel) {
            $res['synergyChannel'] = $this->synergyChannel;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }
        if (isset($map['appAccount'])) {
            $model->appAccount = $map['appAccount'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['isEditableUser'])) {
            $model->isEditableUser = $map['isEditableUser'];
        }
        if (isset($map['isRelated'])) {
            $model->isRelated = $map['isRelated'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['ramId'])) {
            $model->ramId = $map['ramId'];
        }
        if (isset($map['synergyChannel'])) {
            $model->synergyChannel = $map['synergyChannel'];
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
