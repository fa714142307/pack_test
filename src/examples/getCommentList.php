<?php
// 本示例基于百度智能小程序服务端开发者 OpenAPI-SDK-PHP
// 使用该示例需要首先下载该 SDK，使用引导见：https://smartprogram.baidu.com/docs/develop/serverapi/introduction_for_openapi_sdk/
// 使用之前请先确认下 SDK 版本是否为最新版本，如不是，请下载最新版本使用
// 如使用过程中遇到问题，可以加入如流群：5702992，进行反馈咨询
require_once __DIR__ . DIRECTORY_SEPARATOR . "bootstrap.php";

function main(){
    $obj = new BaiduSmartapp\OpenapiClient\GetCommentList();
    // 开发者在此设置请求参数，文档示例中的参数均为示例参数，实际参数请参考对应接口的文档上方的参数说明填写
    // 注意：代码示例中的参数字段基本是驼峰形式，而文档中的参数说明的参数字段基本是下划线形式
	// 如果开发者不想传非必需参数，可以将设置该参数的行注释
    $params = new BaiduSmartapp\OpenapiClient\GetCommentListRequest();
    $params->accessToken = "24.1e265174ce375eb3bf51c214af15ac80.3318432.0633452868.531033-32273260"; // 文档中对应字段：access_token，实际使用时请替换成真实参数
    $params->hostName = "baiduboxapp"; // 文档中对应字段：host_name，实际使用时请替换成真实参数
    $params->snid = "ts_article_c252ed0e11ce48588f7713eb"; // 文档中对应字段：snid，实际使用时请替换成真实参数
    $params->snidType = ""; // 文档中对应字段：snid_type，实际使用时请替换成真实参数
    $params->start = 0; // 文档中对应字段：start，实际使用时请替换成真实参数
    $params->num = 3; // 文档中对应字段：num，实际使用时请替换成真实参数

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