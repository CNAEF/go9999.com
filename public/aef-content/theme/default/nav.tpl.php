<?php if (!defined('FILE_PREFIX')) include '../../../error-forbidden.php'; ?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="http://www.go9999.com">中国·支教联盟</a>

            <div class="nav-collapse collapse" id="main-menu">
                <ul class="nav" id="main-menu-left">
                    {if="$showHomeMenu===true"}
                    <li><a href="http://www.go9999.com">首页</a></li>
                    {else}
                    <li><a href="#about">关于</a></li>
                    <li><a href="#we-arrived-title">支教足迹</a></li>
                    <li><a href="#conditions">志愿者须知</a></li>
                    <li><a href="#our-album">支教掠影</a></li>
                    {/if}
                    <li><a href="http://www.go9999.com/contact/">留言墙</a></li>
                    <li><a href="http://bbs.go9999.com" target="_blank" id="our-bbs">联盟论坛</a></li>
                </ul>
                <ul class="nav pull-right" id="main-menu-right">
                    {if="$showHomeMenu===true"}
                        <li><a rel="tooltip" href="http://www.go9999.com/join/" title="我要报名参加">我要报名 <i
                                    class="icon-tasks"></i></a></li>
                    {/if}
                    <li><a rel="tooltip" href="http://bbs.go9999.com/forum.php?mod=forumdisplay&fid=118" title="我要反馈建议"
                           target="_blank">反馈建议 <i class="icon-share-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
