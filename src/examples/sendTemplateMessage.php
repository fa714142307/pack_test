<?php
// 本示例基于百度智能小程序服务端开发者 OpenAPI-SDK-PHP
// 使用该示例需要首先下载该 SDK，使用引导见：https://smartprogram.baidu.com/docs/develop/serverapi/introduction_for_openapi_sdk/
// 使用之前请先确认下 SDK 版本是否为最新版本，如不是，请下载最新版本使用
// 如使用过程中遇到问题，可以加入如流群：5702992，进行反馈咨询
require_once __DIR__ . DIRECTORY_SEPARATOR . "bootstrap.php";

function main(){
    $obj = new BaiduSmartapp\OpenapiClient\SendTemplateMessage();
    // 开发者在此设置请求参数，文档示例中的参数均为示例参数，实际参数请参考对应接口的文档上方的参数说明填写
    // 注意：代码示例中的参数字段基本是驼峰形式，而文档中的参数说明的参数字段基本是下划线形式
	// 如果开发者不想传非必需参数，可以将设置该参数的行注释
    $params = new BaiduSmartapp\OpenapiClient\SendTemplateMessageRequest();
    $params->accessToken = "25.37ccdb44bad280553debd1e54da8b7e3.7846772.6810728843.812804-87881102"; // 文档中对应字段：access_token，实际使用时请替换成真实参数
    $params->templateId = "03c1cb70c57360fdb613155b544263b8"; // 文档中对应字段：template_id，实际使用时请替换成真实参数
    $params->touserOpenId = "5qFQZgDLuMZsCYYnTc24d10wYb"; // 文档中对应字段：touser_openId，实际使用时请替换成真实参数
    $params->data = "{\"keyword1\": {\"value\": \"3200-08-55\"},\"keyword6\": {\"value\": \"kfc\"}}"; // 文档中对应字段：data，实际使用时请替换成真实参数
    $params->page = "1"; // 文档中对应字段：page，实际使用时请替换成真实参数
    $params->sceneId = "10.50dbac7cee87fb350863523372605d56.548820.7858408144.4"; // 文档中对应字段：scene_id，实际使用时请替换成真实参数
    $params->sceneType = 1; // 文档中对应字段：scene_type，实际使用时请替换成真实参数

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