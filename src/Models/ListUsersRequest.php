<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListUsersRequest extends Model
{
    /**
     * @description 人员名称
     *
     * @var string
     */
    public $username;

    /**
     * @description 人员手机号
     *
     * @var string
     */
    public $phone;

    /**
     * @description ramID
     *
     * @var string
     */
    public $ramId;

    /**
     * @description USER_LIST列表 ALL_USERS下拉
     *
     * @var int
     */
    public $scene;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 分页参数
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页参数
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 移动应用协同渠道
     *
     * @var string
     */
    public $synergyChannel;
    protected $_name = [
        'username'       => 'username',
        'phone'          => 'phone',
        'ramId'          => 'ramId',
        'scene'          => 'scene',
        'clientToken'    => 'clientToken',
        'pageNumber'     => 'pageNumber',
        'pageSize'       => 'pageSize',
        'synergyChannel' => 'synergyChannel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->ramId) {
            $res['ramId'] = $this->ramId;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->synergyChannel) {
            $res['synergyChannel'] = $this->synergyChannel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['ramId'])) {
            $model->ramId = $map['ramId'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['synergyChannel'])) {
            $model->synergyChannel = $map['synergyChannel'];
        }

        return $model;
    }
}
