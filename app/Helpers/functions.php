<?php
// 公用函数库


/**
 * 返回json数据，进行信息的提示
 * @param $status 状态
 * @param string $message 提示信息
 * @param array $data 返回数据
 */
function show_msg($status, $message = '', $data = array())
{
    $result = array(
        'code' => $status,
        'msg' => $message,
        'data' => $data
    );
    return json_encode($result);
}


/**
 * 系统密码加密的算法
 * @param   string   $string  需加密的字符串
 * @return  string
 */
function get_md5_sha1($string = null)
{
    return md5(sha1($string));
}


/**
 * 无限分类函数
 * @param   array  $data  传入的待处理数组
 * @param   int    $fid   分类初始级别
 * @return  array
 */
function get_node($data, $fid = 0)
{
    static $result = [];
    foreach ($data as $key => $vo) {
        if ($vo['fid'] == $fid) {
            $result[] = $vo;
            get_node($data, $vo['id']);
        }
    }
    return $result;
}