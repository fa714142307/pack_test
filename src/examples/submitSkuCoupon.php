<?php
// 本示例基于百度智能小程序服务端开发者 OpenAPI-SDK-PHP
// 使用该示例需要首先下载该 SDK，使用引导见：https://smartprogram.baidu.com/docs/develop/serverapi/introduction_for_openapi_sdk/
// 使用之前请先确认下 SDK 版本是否为最新版本，如不是，请下载最新版本使用
// 如使用过程中遇到问题，可以加入如流群：5702992，进行反馈咨询
require_once __DIR__ . DIRECTORY_SEPARATOR . "bootstrap.php";

function main(){
    $obj = new BaiduSmartapp\OpenapiClient\SubmitSkuCoupon();
    // 开发者在此设置请求参数，文档示例中的参数均为示例参数，实际参数请参考对应接口的文档上方的参数说明填写
    // 注意：代码示例中的参数字段基本是驼峰形式，而文档中的参数说明的参数字段基本是下划线形式
	// 如果开发者不想传非必需参数，可以将设置该参数的行注释
    $submitSkuCouponRequestpriceInfoVal = new BaiduSmartapp\OpenapiClient\SubmitSkuCouponRequestpriceInfo();
    $submitSkuCouponRequestpriceInfoVal->org_price = "1173"; // 文档中对应字段：org_price，实际使用时请替换成真实参数
    $submitSkuCouponRequestpriceInfoVal->real_price = "924"; // 文档中对应字段：real_price，实际使用时请替换成真实参数
    
    $submitSkuCouponRequestBodyVal = new BaiduSmartapp\OpenapiClient\SubmitSkuCouponRequestBody();
    $submitSkuCouponRequestBodyVal->desc = "测试数据"; // 文档中对应字段：desc，实际使用时请替换成真实参数
    $submitSkuCouponRequestBodyVal->images = array("xxxxx",); // 文档中对应字段：images，实际使用时请替换成真实参数
    $submitSkuCouponRequestBodyVal->path = "/test/test/coupon170424"; // 文档中对应字段：path，实际使用时请替换成真实参数
    $submitSkuCouponRequestBodyVal->price_info = $submitSkuCouponRequestpriceInfoVal; // 文档中对应字段：price_info，实际使用时请替换成真实参数
    $submitSkuCouponRequestBodyVal->region = "北京市"; // 文档中对应字段：region，实际使用时请替换成真实参数
    $submitSkuCouponRequestBodyVal->schema = "{\"coupon_brand_name\":\"三只松鼠\",\"collect_coupon_begin_time\":\"4534-14-61 85:81:85\",\"coupon_use_time\":\"3172-71-16 23:86:71~0078-27-60 11:84:25\",\"coupon_sort\":\"PAY\",\"collect_coupon_end_time\":\"3178-02-11 55:32:82\",\"coupon_brand_logo\":[\"https://mbs1.bdstatic.com/searchbox/mappconsole/image/58888247/e27a0628-73f5-2ba0-aa6f-83c3e886f7ad.jpg\"],\"coupon_stock_value\":16,\"adapt_system_types\":[\"android\"]}"; // 文档中对应字段：schema，实际使用时请替换成真实参数
    $submitSkuCouponRequestBodyVal->title = "测试数据，请勿审核"; // 文档中对应字段：title，实际使用时请替换成真实参数
    $submitSkuCouponRequestBodyVal->trade_type = 2004; // 文档中对应字段：trade_type，实际使用时请替换成真实参数
    
    $params = new BaiduSmartapp\OpenapiClient\SubmitSkuCouponRequest();
    $params->accessToken = "23.bdc13bb2af1620e44b521f5122b26f42.0404305.0144882656.725256-436713868"; // 文档中对应字段：access_token，实际使用时请替换成真实参数
    $params->requestBody = array($submitSkuCouponRequestBodyVal,);

    if ($obj->doRequest($params)){
        // 如果请求成功 可以直接通过 getData 方法获取到返回结构体里的 data 字段值
        var_dump($obj->getData());
        // 如果请求成功 可以通过 getErrMsg 方法获取到完整的响应信息
        var_dump($obj->getErrMsg());
    } else {
        // 如果请求失败 可以直接通过 getErrMsg 方法获取到报错信息，辅助问题定位
        var_dump($obj->getErrMsg());
    }
}
main();