<?php

namespace Lettered\Pay\Exceptions;


class GatewayException extends Exception
{
    /**
     * GatewayException constructor.
     *
     * @author 许祖兴 < zuxing.xu@lettered.cn>
     * @date 2020/3/23 12:01
     *
     * @param string       $message
     * @param array|string $raw
     * @param int|string   $code
     */
    public function __construct($message, $raw = [], $code = 5)
    {
        parent::__construct($message, $raw, $code);
    }
}