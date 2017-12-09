<?php
$time = time()*1000;
$end_time = strtotime("2018-01-01")*1000;


?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="../html/jquery-3.2.1.min.js"></script>
    <script src="./layui/layui.all.js"></script>
</head>
<body>
<div id="test"></div>

<script>
    layui.use('util', function(){
        var util = layui.util;

        //示例
        //示例
        var endTime = <?php echo $end_time;?>; //假设为结束日期
        var serverTime = <?php echo $time;?>; //假设为当前服务器时间，这里采用的是本地时间，实际使用一般是取服务端的

        console.log(endTime);
        util.countdown(endTime, serverTime, function(date, serverTime, timer){
            console.log(date);
            var str = date[0] + '天' + date[1] + '时' +  date[2] + '分' + date[3] + '秒';
            $('#test').html('距离<?php echo date("Y年m月d日 H时i分s秒",$end_time/1000)?>还有：'+ str);
        });
    });

</script>
</body>
</html>