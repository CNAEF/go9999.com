<?php
/**
 * CNAEF
 * 不允许访问的页面的错误提示。
 *
 * @notice 脚本允许被直接访问
 *
 * @version 1.0.1
 *
 * @email   soulteary@qq.com
 * @website http://soulteary.com
 */

// 输出404 防止搜索引擎收录
header("http/1.1 404 Not Found");
echo <<<EOF
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>出错啦</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0"/>
</head>
<body>
<h1>404</h1>
<p>这个文件不需要被人类访问啦，如果你对组织或者网站好奇，或者发现了BUG，不妨加入我们。<a href="https://github.com/CNAEF/go9999.com/">Github</a></p>
</body>
</html>
EOF;
exit;
