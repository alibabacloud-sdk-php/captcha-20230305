<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Captcha\V20230305\Models\VerifyIntelligentCaptchaResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $verifyCode;

    /**
     * @example true
     *
     * @var bool
     */
    public $verifyResult;
    protected $_name = [
        'verifyCode'   => 'VerifyCode',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
