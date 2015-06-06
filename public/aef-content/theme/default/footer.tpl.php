<?php if (!defined('FILE_PREFIX')) include '../../../error-forbidden.php'; ?>
<footer id="footer">
    {if="$showFriendLinks===true"}
    <hr/>
    <ul class="nav nav-pills">
        <li class="active"><a href="http://www.go9999.com/links/">友情链接</a></li>
        <li><a class="btn-mini" href="http://bbs.hfly.net/" target="_blank">庐阳教育论坛</a></li>
        <li><a class="btn-mini" href="http://www.instart.net/" target="_blank">公益网</a></li>
        <li><a class="btn-mini" href="http://www.snoah.org/" target="_blank" title="圣诺亚爱心公益网">圣诺亚爱心公益网</a></li>
        <li><a class="btn-mini" href="http://bbs.cnbayue.com/" target="_blank" title="滴水公益论坛">滴水公益论坛</a></li>
        <li><a class="btn-mini" href="http://www.bmf-sc.com/" target="_blank" title="四川仁爱医疗基金会">四川仁爱医疗基金会</a></li>
        <li><a class="btn-mini" href="http://www.yjszjt.cn/" target="_blank" title="中国志愿者">中国志愿者</a></li>
        <li><a class="btn-mini" href="http://www.ew125.com/" target="_blank" title="成都抗癌协会">成都抗癌协会</a></li>
        <li><a class="btn-mini" href="http://xzszhc.2008red.com/" target="_blank" title="进藏教师家园">进藏教师家园</a></li>
        <li><a class="btn-mini" href="http://www.ricedonate.com/" target="_blank" title="米公益">米公益</a></li>
    </ul>
    {/if}
    <hr/>
    <p class="pull-right"><a id="go-top" href="#top">返回顶部</a></p>

    <div class="links">
        <a href="http://bbs.go9999.com">论坛</a>
        <a href="http://blog.go9999.com">博客</a>
        <a href="http://e.weibo.com/go9999">微博</a>
        <a href="http://about.go9999.com">关于</a>
        <a href="http://site.douban.com/118628/">豆瓣小站</a>
        <a href="http://www.douban.com/group/go9999/">豆瓣小组</a>
        <a href="http://zhan.renren.com/go9999">人人小站</a>
        <a href="http://page.renren.com/601714744">人人主页</a>
        <a href="http://tieba.baidu.com/f?kw=%D6%D0%B9%FA%D6%A7%BD%CC%C1%AA%C3%CB">百度贴吧</a>
        <a href="#CMD:ADMIN" id="admin-login">管理后台</a>
    </div>
    Rebuild by <a href="http://www.soulteary.com">soulteary</a>, inspired by <a href="http://thomaspark.me">Thomas
        Park</a>.<br>
    Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.<br>
    Based on <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>. Hosted on <a href="http://pages.github.com/">GitHub</a>.
    Icons from <a href="http://fortawesome.github.com/Font-Awesome/">Font Awesome</a>. Web fonts from <a
        href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald
        Hiller</a>.<p></p>

    <p>Copyright &copy;2005-{$currentYear} Go9999.com All Rights Reserved. 原备案号
        <del style="color: #A8A3A3;">浙ICP备07022599号</del>
        ，现备案号<a href="http://www.miibeian.gov.cn/" target="_blank">浙ICP备12032988号-1</a>
        <a class="qihu-scan" href="http://webscan.360.cn/index/checkwebsite/url/www.go9999.com"><img border="0"
                                                                                                     src="http://img.webscan.360.cn/status/pai/hash/48769dbd5f34f2752487196d0b70a0ea"/></a>
        <a id="sae-support" href="http://sae.sina.com.cn" target="_blank"
           title="中国支教联盟网站正运行在Sina App Engine上。">新浪云计算</a>
    </p>
</footer>
</div>
<script type="text/javascript" src="{$assets}js/packed.min.js"></script>
<script type="text/javascript">
    (function (w, d, $, author) {
        if (!w.console || !w.console.log) {
            w.console = {};
            w.console.log = function () {return true;}
        }
        var suSays = ['至看到这段文字的你：', 'Hi~', '  中国支教联盟网站急缺建设志愿者&维护志愿者，如果你对维护联盟网站感兴趣，即使因为现实的原因你不能投身偏远地区，', '但是你的行为一样可以帮助到所有的有志于支教的人们，如果你心动了，不妨用页面中的联系方式联系我们。', '当然，如果你发现了网站的缺陷或者漏洞，也不妨告知我们。', '                                                                                    @soulteary', '                                                                                    2013/07/20'];
        for (var i = 0, j = suSays.length; i < j; i++) {
            console.log(suSays[i]);
        }

        var RandomChars = function (strlen, opt, cut) {
            var chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            if (opt) {
                switch (opt) {
                    case 'NUMBER':
                        chars = "1234567890";
                        break;
                    case 'UCASE':
                        chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        break;
                    case 'LCASE':
                        chars = "abcdefghijklmnopqrstuvwxyz";
                        break;
                }
            }
            if (cut) {
                for (var i = cut.length - 1; i >= 0; i--) {
                    chars = chars.replace(cut[i], '');
                }
            }

            var len = chars.length;
            var result = "";
            if (!strlen) {
                strlen = Math.random(len);
            }
            var d = Date.parse(new Date());
            for (var i = 0; i < strlen; i++) {
                result += chars.charAt(Math.ceil(Math.random() * d) % len);
            }
            return result;
        }

        var _bdhmProtocol = (("https:" == d.location.protocol) ? " https://": " http://");
        d.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F724519214f055ce821d3d1235c7e3621' type='text/javascript'%3E%3C/script%3E"));

        $(document).ready(function () {
            $('#main-menu a,#go-top').smoothScroll();

            var blankLink = function (el) {
                var hide = function () {
                    el.animate({
                        opacity : 0.4
                    }, 500, show);
                }
                var show = function () {
                    el.animate({
                        opacity : 1
                    }, 1000, hide);
                }
                hide();
            }
            blankLink($('#our-bbs'));
            $('#our-bbs').animate({
                opacity : 0.4
            }, 500, function () {
                $('#our-bbs').animate({
                    opacity : 1
                }, 500);
            });

            var showWeiXin = function () {
                var modalTPL = '<div class="modal hide fade" id="weixin-box"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3>联盟微信公众平台账号：CNAEF2006</h3></div><div class="modal-body"><p><img style="width: 60%;display: block;margin: 0 auto;" src="/extra/img/weixin.jpg" alt="联盟微信公众平台账号：CNAEF2006"/></p></div><div class="modal-footer"><a href="#" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</a></div></div>';
                $('#weixin-box').remove();
                $('body').append(modalTPL);
                $('#weixin-box').modal('show');
            }

            $('#show-weixin').on('click', function (e) {
                e.preventDefault();
                showWeiXin();
            });

            $('#action-form').on('submit', function (e) {
                e.preventDefault();
                var target = $(e.target);
                $.ajax({
                    url     : target.attr('action'),
                    data    : target.serialize(),
                    type    : 'POST',
                    success : function (resp) {
                        if (resp.extra) {
                            var modalTitle = '报名';
                            var modalText = resp.extra.desc;
                            var modalClass = null;
                            if (resp.extra.code && resp.extra.code == 200) {
                                modalTitle += '成功';
                                modalClass = 'alert-success';
                                target.fadeOut();
                                $('#apply-form-box').find('blockquote p').text('如果您的资料通过审核，我们会第一时间联系您，请耐心等待，感谢您对支教联盟的支持！').addClass('alert alert-success');
                            } else {
                                modalTitle += '失败';
                                modalClass = 'alert-warning';
                            }

                            $('.common-modal').modal('hide').remove();
                            var modalID = RandomChars(5, 'LCASE');
                            var tpl = '<div id="' + modalID + '" class="common-modal modal hide fade"></div>';
                            $('body').append(tpl);
                            $('#' + modalID).html($('#common-modal-tpl').html()).find('.modal-header h3').text(modalTitle);
                            $('#' + modalID).find('.modal-body').html('<p class="alert ' + modalClass + '">' + modalText + '</p>');
                            $('#' + modalID).modal('show');
                        }
                    }
                });
            });

            $('#admin-login').on('click', function (e) {
                e.preventDefault();
                var ret = prompt("请输入静态口令。", "您的静态口令");
                window.location.href = 'http://apply.go9999.com/join/?mode=admin&k=' + ret;
            });

        })

    })(window, document, window.jQuery, 'soulteary 2013/10/30');

</script>
<script type="text/html" id="common-modal-tpl">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Modal header</h3>
    </div>
    <div class="modal-body"></div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</button>
    </div>
</script>
</body>
</html>