简单的例子：

$url = 'http://';  //调用接口的平台服务地址

$post_string = array('a'=>'b');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$result = curl_exec($ch);
curl_close($ch);

其实CURLOPT_POSTFIELDS的这个设置中，亦可以直接发送数组的，但是这样做的后果是严重增加的请求的时间，耗时大约在2秒多，同样的操作用socket方式操作则正常，在毫秒级别。

若将此处：curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
修改为：curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

则执行时间恢复正常



PS：

http_build_query — 生成 URL-encode 之后的请求字符串
说明
string http_build_query ( array $formdata [, string $numeric_prefix ] )

使用给出的关联（或下标）数组生成一个经过 URL-encode 的请求字符串。参数 formdata 可以是数组或包含属性的对象。一个 formdata 数组可以是简单的一维结构，也可以是由数组组成的数组（其依次可以包含其它数组）。如果在基础数组中使用了数字下标同时给出了 numeric_prefix 参数，此参数值将会作为基础数组中的数字下标元素的前缀。这是为了让 PHP 或其它 CGI 程序在稍后对数据进行解码时获取合法的变量名。

Note:

用 arg_separator.output 来分隔参数。



Example #1 http_build_query() 使用示例
<?php
$data = array('foo'=>'bar',
    'baz'=>'boom',
    'cow'=>'milk',
    'php'=>'hypertext processor'
);

echo http_build_query($data); // foo=bar&baz=boom&cow=milk&php=hypertext+processor
?>

Example #2 http_build_query() 使用数字下标的元素
<?php
$data = array('foo', 'bar', 'baz', 'boom', 'cow' => 'milk', 'php' =>'hypertext processor');

echo http_build_query($data);


echo http_build_query($data, 'myvar_');

?>