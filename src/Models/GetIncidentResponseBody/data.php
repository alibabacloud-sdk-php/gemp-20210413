<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetIncidentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 分派的用户ID
     *
     * @var int
     */
    public $assignUserId;

    /**
     * @description 分派的用户姓名 (用户表获取)
     *
     * @var string
     */
    public $assignUserName;

    /**
     * @description 分派的用户手机号
     *
     * @var string
     */
    public $assignUserPhone;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 持续时间
     *
     * @var int
     */
    public $durationTime;

    /**
     * @description HIGH	影响等级 高：HIGH 低 LOW
     *
     * @var string
     */
    public $effect;

    /**
     * @description 事件描述
     *
     * @var string
     */
    public $incidentDescription;

    /**
     * @description 事件Id
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 事件级别 P1 P2 P3 P4
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @description 事件编号
     *
     * @var string
     */
    public $incidentNumber;

    /**
     * @description 事件状态 ASSIGNED已分派 RESPONDED已响应  FINISHED已完结
     *
     * @var string
     */
    public $incidentStatus;

    /**
     * @description 事件标题
     *
     * @var string
     */
    public $incidentTitle;

    /**
     * @description 事件来源 是：手动 否：自动
     *
     * @var bool
     */
    public $isManual;

    /**
     * @description 是否升级 是 否
     *
     * @var bool
     */
    public $isUpgrade;

    /**
     * @description 通知渠道
     *
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @description 故障Id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 故障编号
     *
     * @var string
     */
    public $problemNumber;

    /**
     * @description 关联服务描述
     *
     * @var string
     */
    public $relatedServiceDescription;

    /**
     * @description 关联服服务id
     *
     * @var int
     */
    public $relatedServiceGroupId;

    /**
     * @description 关联服务组名称
     *
     * @var string
     */
    public $relatedServiceGroupName;

    /**
     * @description 关联服务ID
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 关联服务名称
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @description 流转规则ID
     *
     * @var int
     */
    public $routeRuleId;

    /**
     * @description 流转规则名称
     *
     * @var string
     */
    public $routeRuleName;
    protected $_name = [
        'assignUserId'              => 'assignUserId',
        'assignUserName'            => 'assignUserName',
        'assignUserPhone'           => 'assignUserPhone',
        'createTime'                => 'createTime',
        'durationTime'              => 'durationTime',
        'effect'                    => 'effect',
        'incidentDescription'       => 'incidentDescription',
        'incidentId'                => 'incidentId',
        'incidentLevel'             => 'incidentLevel',
        'incidentNumber'            => 'incidentNumber',
        'incidentStatus'            => 'incidentStatus',
        'incidentTitle'             => 'incidentTitle',
        'isManual'                  => 'isManual',
        'isUpgrade'                 => 'isUpgrade',
        'notifyChannels'            => 'notifyChannels',
        'problemId'                 => 'problemId',
        'problemNumber'             => 'problemNumber',
        'relatedServiceDescription' => 'relatedServiceDescription',
        'relatedServiceGroupId'     => 'relatedServiceGroupId',
        'relatedServiceGroupName'   => 'relatedServiceGroupName',
        'relatedServiceId'          => 'relatedServiceId',
        'relatedServiceName'        => 'relatedServiceName',
        'routeRuleId'               => 'routeRuleId',
        'routeRuleName'             => 'routeRuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignUserId) {
            $res['assignUserId'] = $this->assignUserId;
        }
        if (null !== $this->assignUserName) {
            $res['assignUserName'] = $this->assignUserName;
        }
        if (null !== $this->assignUserPhone) {
            $res['assignUserPhone'] = $this->assignUserPhone;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->durationTime) {
            $res['durationTime'] = $this->durationTime;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->incidentDescription) {
            $res['incidentDescription'] = $this->incidentDescription;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->incidentNumber) {
            $res['incidentNumber'] = $this->incidentNumber;
        }
        if (null !== $this->incidentStatus) {
            $res['incidentStatus'] = $this->incidentStatus;
        }
        if (null !== $this->incidentTitle) {
            $res['incidentTitle'] = $this->incidentTitle;
        }
        if (null !== $this->isManual) {
            $res['isManual'] = $this->isManual;
        }
        if (null !== $this->isUpgrade) {
            $res['isUpgrade'] = $this->isUpgrade;
        }
        if (null !== $this->notifyChannels) {
            $res['notifyChannels'] = $this->notifyChannels;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemNumber) {
            $res['problemNumber'] = $this->problemNumber;
        }
        if (null !== $this->relatedServiceDescription) {
            $res['relatedServiceDescription'] = $this->relatedServiceDescription;
        }
        if (null !== $this->relatedServiceGroupId) {
            $res['relatedServiceGroupId'] = $this->relatedServiceGroupId;
        }
        if (null !== $this->relatedServiceGroupName) {
            $res['relatedServiceGroupName'] = $this->relatedServiceGroupName;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
        }
        if (null !== $this->routeRuleId) {
            $res['routeRuleId'] = $this->routeRuleId;
        }
        if (null !== $this->routeRuleName) {
            $res['routeRuleName'] = $this->routeRuleName;
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
        if (isset($map['assignUserId'])) {
            $model->assignUserId = $map['assignUserId'];
        }
        if (isset($map['assignUserName'])) {
            $model->assignUserName = $map['assignUserName'];
        }
        if (isset($map['assignUserPhone'])) {
            $model->assignUserPhone = $map['assignUserPhone'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['durationTime'])) {
            $model->durationTime = $map['durationTime'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['incidentDescription'])) {
            $model->incidentDescription = $map['incidentDescription'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['incidentNumber'])) {
            $model->incidentNumber = $map['incidentNumber'];
        }
        if (isset($map['incidentStatus'])) {
            $model->incidentStatus = $map['incidentStatus'];
        }
        if (isset($map['incidentTitle'])) {
            $model->incidentTitle = $map['incidentTitle'];
        }
        if (isset($map['isManual'])) {
            $model->isManual = $map['isManual'];
        }
        if (isset($map['isUpgrade'])) {
            $model->isUpgrade = $map['isUpgrade'];
        }
        if (isset($map['notifyChannels'])) {
            if (!empty($map['notifyChannels'])) {
                $model->notifyChannels = $map['notifyChannels'];
            }
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemNumber'])) {
            $model->problemNumber = $map['problemNumber'];
        }
        if (isset($map['relatedServiceDescription'])) {
            $model->relatedServiceDescription = $map['relatedServiceDescription'];
        }
        if (isset($map['relatedServiceGroupId'])) {
            $model->relatedServiceGroupId = $map['relatedServiceGroupId'];
        }
        if (isset($map['relatedServiceGroupName'])) {
            $model->relatedServiceGroupName = $map['relatedServiceGroupName'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
        }
        if (isset($map['routeRuleId'])) {
            $model->routeRuleId = $map['routeRuleId'];
        }
        if (isset($map['routeRuleName'])) {
            $model->routeRuleName = $map['routeRuleName'];
        }

        return $model;
    }
}
