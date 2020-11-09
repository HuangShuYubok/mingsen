<?php
/*
 * 打印输出
 **/
function d($d)
{
	echo "<pre>";
	print_r($d);
	echo "</pre>";
}

/*
 * 将数组转成Json格式
 * type array
 * */
function asJson($array)
{
    if(!is_array($array)){
        return "错误：：这不是一个数组";
    }
    return json_encode($array);
}

