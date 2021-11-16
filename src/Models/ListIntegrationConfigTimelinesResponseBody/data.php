<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIntegrationConfigTimelinesResponseBody;

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
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 主题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'createTime'  => 'createTime',
        'description' => 'description',
        'title'       => 'title',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
