<?php
    require_once 'config.php';
    //查询访问来的域名信息
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $url = get_host_domain($url);
    $info = $db->get("park", "*", array("domain" => "{$url}"));
    if($info)
    {
        //更新访问次数
        $db->update('park', array("views[+]" => 1), array("id" => $info['id']));
        //判断跳转域名
        if($info['type'] == 2)
        {
            header("location:{$info['url']}");
            exit;
        }
    }
    else
    {
        exit('<h2>no data</h2>');
    }
?>
<!DOCTYPE html>
<html lang="zh-CN" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="renderer" content="webkit">
    <title><?php echo $info['title']; ?></title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="/css/amazeui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>
<body>
    <div class="am-container am-text-center am-margin-top-xl">
        <h2>欢迎访问<?php echo $info['title'];?></h2>
        <p><?php echo $info['description'];?></p>
        <?php if($info['price']):?>
            <p>售价：&yen;<?php echo $info['price'];?></p>
        <?php endif;?>
        <?php if($info['email']):?>
            <p><?php echo $info['email'];?></p>
        <?php endif;?>
    </div>
</body>
</html>