<?php

namespace Lettered\Pay\Exceptions;

class Exception extends \Exception
{
    /**
     * Raw error info.
     *
     * @var array
     */
    public $raw;

    /**
     * Exception constructor.
     *
     * @author 许祖兴 < zuxing.xu@lettered.cn>
     * @date 2020/3/23 11:35
     *
     * @param string       $message
     * @param array|string $raw
     * @param int|string   $code
     */
    public function __construct($message, $raw = [], $code = 9999)
    {
        $this->raw = is_array($raw) ? $raw : [$raw];
        parent::__construct($message, intval($code));
    }
}