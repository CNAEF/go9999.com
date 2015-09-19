/**
 * index.js
 *
 * @desc    首页脚本
 * @author  soulteary <soulteary@qq.com> (http://soulteary.com)
 */
(function (w, d, $, author) {
    if (!w.console || !w.console.log) {
        w.console = {};
        w.console.log = function () {return true;};
    }
    var suSays = ['至看到这段文字的你：', 'Hi~', '  中国支教联盟网站急缺建设志愿者&维护志愿者，如果你对维护联盟网站感兴趣，即使因为现实的原因你不能投身偏远地区，', '但是你的行为一样可以帮助到所有的有志于支教的人们，如果你心动了，不妨用页面中的联系方式联系我们。', '当然，如果你发现了网站的缺陷或者漏洞，也不妨告知我们。', '                                                                                    @soulteary', '                                                                                    2013/07/20'];
    for (var i = 0, j = suSays.length; i < j; i++) {
        console.log(suSays[i]);
    }

    function RandomChars(strlen, opt, cut) {
        var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
        if (opt) {
            switch (opt) {
                case 'NUMBER':
                    chars = '1234567890';
                    break;
                case 'UCASE':
                    chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    break;
                case 'LCASE':
                    chars = 'abcdefghijklmnopqrstuvwxyz';
                    break;
            }
        }
        if (cut) {
            for (var m = cut.length - 1; m >= 0; m--) {
                chars = chars.replace(cut[m], '');
            }
        }

        var len = chars.length;
        var result = '';
        if (!strlen) {
            strlen = Math.random(len);
        }
        var d = new Date - 0;
        for (var i = 0; i < strlen; i++) {
            result += chars.charAt(Math.ceil(Math.random() * d) % len);
        }
        return result;
    }

    var _bdhmProtocol = (('https:' == d.location.protocol) ? 'https://': 'http://');
    d.write(unescape('%3Cscript src=\'' + _bdhmProtocol + 'hm.baidu.com/h.js%3F724519214f055ce821d3d1235c7e3621\' type=\'text/javascript\'%3E%3C/script%3E'));

    $(document).ready(function () {
        // 返回顶部
        $('#main-menu a,#go-top').smoothScroll();
        // 导航论坛按钮
        var bbsNav = $('#our-bbs');
        var blankLink = function (el) {
            var hide = function () {
                el.animate({
                    opacity : 0.4
                }, 500, show);
            };
            var show = function () {
                el.animate({
                    opacity : 1
                }, 1000, hide);
            };
            hide();
        };
        blankLink(bbsNav);
        bbsNav.animate({
            opacity : 0.4
        }, 500, function () {
            $('#our-bbs').animate({
                opacity : 1
            }, 500);
        });
        // 微信弹窗
        var showWeiXin = function () {
            var weixinBox = '#weixin-box';
            var modalTPL = '<div class="modal hide fade" id="weixin-box"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3>联盟微信公众平台账号：CNAEF2006</h3></div><div class="modal-body"><p><img style="width: 60%;display: block;margin: 0 auto;" src="/assets/img/weixin.jpg" alt="联盟微信公众平台账号：CNAEF2006"/></p></div><div class="modal-footer"><a href="#" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</a></div></div>';
            $(weixinBox).remove();
            $('body').append(modalTPL);
            $(weixinBox).modal('show');
        };
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
                            $('#page-box-apply').find('blockquote p').text('如果您的资料通过审核，我们会第一时间联系您，请耐心等待，感谢您对支教联盟的支持！').addClass('alert alert-success');
                        } else {
                            modalTitle += '失败';
                            modalClass = 'alert-warning';
                        }

                        $('.common-modal').modal('hide').remove();
                        var modalID = RandomChars(5, 'LCASE');
                        var tpl = '<div id="' + modalID + '" class="common-modal modal hide fade"></div>';
                        $('body').append(tpl);
                        var modalBox = $('#' + modalID);
                        modalBox.html($('#common-modal-tpl').html()).find('.modal-header h3').text(modalTitle);
                        modalBox.find('.modal-body').html('<p class="alert ' + modalClass + '">' + modalText + '</p>');
                        modalBox.modal('show');
                    }
                }
            });
        });
        //管理后台辅助跳转
        $('#admin-login').on('click', function (e) {
            e.preventDefault();
            var ret = prompt('请输入静态口令。', '您的静态口令');
            if (ret) {
                window.location.href = 'http://apply.go9999.com/join/?mode=admin&k=' + ret;
            }
        });

    });
})(window, document, window.jQuery, 'soulteary 2013/10/30');