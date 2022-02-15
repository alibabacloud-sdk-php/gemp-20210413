<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupRequest;

use AlibabaCloud\Tea\Model;

class monitorSourceTemplates extends Model
{
    /**
     * @description 监控报警源Id
     *
     * @var int
     */
    public $monitorSourceId;

    /**
     * @description 监控报警源
     *
     * @var string
     */
    public $monitorSourceName;

    /**
     * @description 消息模版内容
     *
     * @var string
     */
    public $templateContent;

    /**
     * @description 消息模版ID
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'monitorSourceId'   => 'monitorSourceId',
        'monitorSourceName' => 'monitorSourceName',
        'templateContent'   => 'templateContent',
        'templateId'        => 'templateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorSourceId) {
            $res['monitorSourceId'] = $this->monitorSourceId;
        }
        if (null !== $this->monitorSourceName) {
            $res['monitorSourceName'] = $this->monitorSourceName;
        }
        if (null !== $this->templateContent) {
            $res['templateContent'] = $this->templateContent;
        }
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorSourceTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['monitorSourceId'])) {
            $model->monitorSourceId = $map['monitorSourceId'];
        }
        if (isset($map['monitorSourceName'])) {
            $model->monitorSourceName = $map['monitorSourceName'];
        }
        if (isset($map['templateContent'])) {
            $model->templateContent = $map['templateContent'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
