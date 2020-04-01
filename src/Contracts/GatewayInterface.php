<?php


namespace Lettered\Pay\Contracts;


interface GatewayInterface
{
    /**
     * 原生扫码支付
     *
     * @author 许祖兴 < zuxing.xu@lettered.cn>
     * @date 2020/3/22 11:33
     *
     * @return mixed
     */
    public function native();

    /**
     * js 内嵌支付
     *
     * @author 许祖兴 < zuxing.xu@lettered.cn>
     * @date 2020/3/22 11:33
     *
     * @return mixed
     */
    public function jsapi();

    /**
     * 网页支付
     *
     * @author 许祖兴 < zuxing.xu@lettered.cn>
     * @date 2020/3/22 11:34
     *
     * @return mixed
     */
    public function web();

    /**
     * App 支付
     *
     * @author 许祖兴 < zuxing.xu@lettered.cn>
     * @date 2020/3/22 11:34
     *
     * @return mixed
     */
    public function app();

    /**
     * 小程序支付
     *
     * @author 许祖兴 < zuxing.xu@lettered.cn>
     * @date 2020/3/22 11:34
     *
     * @return mixed
     */
    public function mini();

    /**
     *
     * @author 许祖兴 < zuxing.xu@lettered.cn>
     * @date 2020/3/22 11:35
     *
     * @return mixed
     */
    public function notify();


}