<?php
// 本示例基于百度智能小程序服务端开发者 OpenAPI-SDK-PHP
// 使用该示例需要首先下载该 SDK，使用引导见：https://smartprogram.baidu.com/docs/develop/serverapi/introduction_for_openapi_sdk/
// 使用之前请先确认下 SDK 版本是否为最新版本，如不是，请下载最新版本使用
// 如使用过程中遇到问题，可以加入如流群：5702992，进行反馈咨询
require_once __DIR__ . DIRECTORY_SEPARATOR . "bootstrap.php";

function main(){
    $obj = new BaiduSmartapp\OpenapiClient\DetectRisk();
    // 开发者在此设置请求参数，文档示例中的参数均为示例参数，实际参数请参考对应接口的文档上方的参数说明填写
    // 注意：代码示例中的参数字段基本是驼峰形式，而文档中的参数说明的参数字段基本是下划线形式
	// 如果开发者不想传非必需参数，可以将设置该参数的行注释
    $params = new BaiduSmartapp\OpenapiClient\DetectRiskRequest();
    $params->accessToken = "26.735f46151a6428a6c7ad6c254667eb14.7121312.7126065617.252150-85745802"; // 文档中对应字段：access_token，实际使用时请替换成真实参数
    $params->appkey = "WXF8pGOvo6TTGU8qCMMhEjvFBkF8bO6Z"; // 文档中对应字段：appkey，实际使用时请替换成真实参数
    $params->xtoken = "{\"key\":\"jU+mx2VJ8+k2+JfN8cLPNfQZIVbCAZwhMIlTtnt7yl+YTPK8E+06s73UwTqR7eKQEyKu8Qbd3xknxNNoYl1w0o/0/qemfUNn2pDXmsYnaZz5tM4k5bhRD4TusfOXXqXRo3gWuUdnWttnIhxvYKGwhzL5sUF0fqnxY7S6PUnGE7g=\", \"value\": \"TPHtjm7RTDX4pUpcUjbhRu/t4MA81kF+mFv8DPmNSx1zMsTsT1Yitu+DoQ4CJS2f1tQBHpqzQ7vfW7nV2Zm8HWkkXK4xkF8jSTSEWH5KkLAMdzWwqLKZQTaWG0r+MU+2qOqYF2mc66oB2WSSfPJQ6ZUYpY+4RezUMWK3xyUB/3vEy80HZ7SYZjsfmJOYNcVsh8A3fTsoHDsNBiXYA3KUe5ZxiSzmyLYe7EYjW6XLcL+iUgcToNuH188Ypn+Py3OxOD0lS2BgWVNV7sdGriYuRDAN1rcugPbVscFoEeOcDWIDaHNKs101vDvmQQCc6M5EXsQ2W/NDdze26dgJ5AL0ZLV+2Ahe0ISoxflpRKjvl7Jl14+p3jESon7DLJA84/+n7FAbCifa2mZLvyHJ+gTSR1h7lLSZW2ZntrbeofVP5MZTYsPip8k4Kt5A7G/ABj2K1k0FIx7iM5UQWvPgFFOJ/vbCf6c8FXVDLHDid5V8qGwJ6TTRur1MJH1yVPiS5dltOQkIIAQcK8C+nTgi+EKY0RwwoOYw\"}"; // 文档中对应字段：xtoken，实际使用时请替换成真实参数
    $params->type = "marketing"; // 文档中对应字段：type，实际使用时请替换成真实参数
    $params->clientip = "137.0.1.3"; // 文档中对应字段：clientip，实际使用时请替换成真实参数
    $params->ts = 1310517051; // 文档中对应字段：ts，实际使用时请替换成真实参数
    $params->ev = "1"; // 文档中对应字段：ev，实际使用时请替换成真实参数
    $params->useragent = "Mozilla/2.8 (Macintosh, Intel Mac OS X 20_54_3) AppleWebKit/005.60 (KHTML, like Gecko) Chrome/42.3.7653.02 Safari/313.74"; // 文档中对应字段：useragent，实际使用时请替换成真实参数
    $params->phone = ""; // 文档中对应字段：phone，实际使用时请替换成真实参数

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