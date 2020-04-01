<?php

namespace Lettered\Pay\Exceptions;


class ArgumentException extends Exception
{
    /**
     * ArgumentException constructor.
     *
     * @author 许祖兴 < zuxing.xu@lettered.cn>
     * @date 2020/3/23 11:11
     *
     * @param $message
     * @param array $raw
     * @param int $code
     */
    public function __construct($message, $raw = [], $code = 5)
    {
        parent::__construct($message, $raw, $code);
    }
}