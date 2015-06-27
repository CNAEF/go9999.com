<?php if (!defined('FILE_PREFIX')) include '../../../error-forbidden.php'; ?>
<footer id="footer">
    {if="$showFriendLinks===true"}
    <hr/>
    <ul class="nav nav-pills">
        <li class="active"><a href="http://www.go9999.com/links/">友情链接</a></li>
        <li><a class="btn-mini" href="http://bbs.hfly.net/" target="_blank">庐阳教育论坛</a></li>
        <li><a class="btn-mini" href="http://bbs.cnbayue.com/" target="_blank" title="滴水公益论坛">滴水公益论坛</a></li>
        <li><a class="btn-mini" href="http://www.bmf-sc.com/" target="_blank" title="四川仁爱医疗基金会">四川仁爱医疗基金会</a></li>
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
        <div class="logo-container">
            <a class="logo-pic" href="http://sae.sina.com.cn" target="_blank" title="中国支教联盟网站正运行在Sina App Engine上。">
                <img border="0" src="http://www.go9999.com/assets/img/sae-support.png?v=20150610"/>
            </a>
            <a class="logo-pic" href="http://mos.meituan.com" target="_blank" title="美团云赞助联盟一年运行时间。">
                <img border="0" src="http://www.go9999.com/assets/img/mt-logo.png?v=20150610"/>
            </a>
            <a class="logo-pic" href="http://webscan.360.cn/index/checkwebsite/url/www.go9999.com">
                <img border="0" src="http://img.webscan.360.cn/status/pai/hash/48769dbd5f34f2752487196d0b70a0ea?v=20150610"/>
            </a>
        </div>
    </p>
</footer>
</div>
<script type="text/javascript" src="{$assets}js/core.min.js?20150620"></script>
<script type="text/javascript" src="{$assets}js/app.min.js?20150620"></script>
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
<script src="/assets/js/jquery.validate.min.js"></script>
<script>
	$(function(){
		jQuery.extend(jQuery.validator.messages, {
			required: "请完善该信息！"
		});
		$("#action-form2").validate({
		    rules: {
				name: {
					rangelength: [2, 4]
				},
				id_num: {
					rangelength: [15, 18]
				},
				email: {
					email: true
				},
				post_code: {
					digits: true
				},
				begin_date: "required",
				cur_status: "required",
				confirm: "required"
		   },
		   messages: {
				name: {
					required: '请输入你的中文名字（2~4个汉字）！',
					rangelength: '请输入你的中文名字（2~4个汉字）！'
				},
				sex: {
					required: '请选择您的性别！'
				},
				birthday: {
					required: '请填写真实的出生日期，且年满21周岁！'
				},
				married: {
					required: '请填写您的婚姻状况！'
				},
				hometown_city: {
					required: '请您选择籍贯！'
				},
				id_num: {
					required: '请正确填写您的身份证号码！',
					rangelength: '请正确填写您的身份证号码！'
				},
				id_photo: {
					required: '请选择上传图片文件！'
				},
				user_photo: {
					required: '请选择上传图片文件！'
				},
				edu_level: {
					required: '请选择您的学历！'
				},
				edu_photo: {
					required: '请选择上传图片文件！'
				},
				edu_university: {
					required: '请正确填写您的毕业院校！'
				},
				profession: {
					required: '请正确填写您主修专业！'
				},
				work: {
					required: '请您填写您的职业！'
				},
				phone: {
					required: '请正确填写您的联系电话！'
				},
				email: {
					required: '请填写您的E-mail地址！',
					email: '请正确填写您的E-mail地址！',
				},
				qq: {
					required: '请您填写您的QQ或者微信号码！'
				},
				cur_city: {
					required: '请您选择现居住地！'
				},
				cur_addr: {
					required: '请填写您的详细地址！'
				},
				post_code: {
					required: '请填写您的邮政编码！',
					digits: '请填写您的邮政编码！'
				},
				confirm: {
					required: '请确认您已经准备好了！'
				}
			}
		 });
	});
</script>
</body>
</html>