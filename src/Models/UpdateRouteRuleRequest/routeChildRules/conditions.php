<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRouteRuleRequest\routeChildRules;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description 字段
     *
     * @var string
     */
    public $key;

    /**
     * @description 操作符
     *
     * @var string
     */
    public $operationSymbol;

    /**
     * @description 字段取值
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'             => 'key',
        'operationSymbol' => 'operationSymbol',
        'value'           => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->operationSymbol) {
            $res['operationSymbol'] = $this->operationSymbol;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['operationSymbol'])) {
            $model->operationSymbol = $map['operationSymbol'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
