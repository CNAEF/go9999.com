<?php if (!defined('FILE_PREFIX')) include '../../../error-forbidden.php'; ?>
    <section id="page-box-apply">
        <div class="page-header">
            <h1>志愿者申请表</h1>
        </div>
        <div class="row">
            <div class="span12">
                <blockquote>
                    <p>请认真如实填写以下表单，以便我们能够更好的了解您去支教的意愿。</p>
                    <small>支教联盟管理 <cite title="衷心希望">年小恩</cite></small>
                </blockquote>
            </div>
        </div>
        <form class="form-horizontal " id="action-form2" action="http://apply.go9999.com/join/" method="post">
            <fieldset>
                <legend>基本资料</legend>
				
				<div class="control-group">
					<label class="control-label" for="form_name">姓　　名</label>
					<div class="controls">
						<input type="text" class="input-xlarge required" name="name" id="form_name" placeholder="">
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请输入你的中文名字（2~4个汉字）。
                    </div>
					-->
				</div>
				
				<div class="control-group">
					<label class="control-label" for="form_sex">性　　别</label>
					<div class="controls">
						<select name="sex" id="form_sex" class="required">
                            <option value="1">男</option>
                            <option value="2">女</option>
                        </select>
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请选择您的性别。
                    </div>
					-->
				</div>
				
				<div class="control-group">
					<label class="control-label" for="form_birthday">出生日期</label>
					<div class="controls">
						<input type="text" class="input-xlarge required" name="birthday" id="form_birthday" placeholder="">
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请填写真实的出生日期，且年满21周岁！
                    </div>
					-->
				</div>
				
				<div class="control-group">
					<label class="control-label" for="form_married">婚姻状况</label>
					<div class="controls">
						<select name="married" id="form_married" class="required">
                            <option value="1">未婚</option>
                            <option value="2">已婚</option>
                        </select>
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请填写您的婚姻状况！
                    </div>
					-->
				</div>
				
				<div class="control-group">
					<label class="control-label" for="form_hometown_province">籍　　贯</label>
					<div class="controls">
						<select id="form_hometown_province" name="hometown_province" class="required">
							<option value="载入中">载入中</option>
						</select>
						<select id="form_hometown_city" name="hometown_city" class="required">
							<option value="载入中">载入中</option>
						</select>
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您选择所在城市！
                    </div>
					-->
				</div>
				
				<div class="control-group">
					<label class="control-label" for="form_id_num">身份证号</label>
					<div class="controls">
						<input name="id_num" class="input-xlarge required" id="form_id_num" type="text" placeholder="">
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请正确填写您的18位身份证号码！
                    </div>
					-->
				</div>
				
				<div class="control-group">
					<label class="control-label" for="form_id_photo">身份证照</label>
					<div class="controls">
						<input name="id_photo" class="input-xlarge required" id="form_id_photo" type="file">
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请选择上传图片文件！
                    </div>
					-->
				</div>
				
				<div class="control-group">
					<label class="control-label" for="form_user_photo">近期照片</label>
					<div class="controls">
						<input name="user_photo" class="input-xlarge required" id="form_user_photo" type="file">
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请选择上传图片文件！
                    </div>
					-->
				</div>

                <legend>受教育经历</legend>
				
				<div class="control-group">
					<label class="control-label" for="form_edu_level">学　　历</label>
					<div class="controls">
						<select id="form_edu_level" name="edu_level" class="required">
							<option value=""> -- </option>
							<option value="4">大专</option>
							<option value="5">本科</option>
							<option value="6">硕士</option>
							<option value="7">博士及以上</option>
						</select>
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请选择您的学历！
                    </div>
					-->
				</div>
				
				<div class="control-group">
					<label class="control-label" for="form_edu_photo">学历照片</label>
					<div class="controls">
						<input name="edu_photo" class="input-xlarge required" id="form_edu_photo" type="file">
					</div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请选择上传图片文件！
                    </div>
					-->
				</div>

                <div class="control-group">
                    <label class="control-label" for="edu_university">毕业院校</label>
                    <div class="controls">
                        <input name="info2_edu_university" class="input-xlarge required" id="edu_university" type="text">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请正确填写您的毕业院校！
                    </div>
					-->
                </div>

                <div class="control-group">
                    <label class="control-label" for="form_profession">专　　业</label>
                    <div class="controls">
                        <input name="profession" class="input-xlarge required" id="form_profession" type="text">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请正确填写您主修专业！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_special">个人特别技能及资历</label>
                    <div class="controls">
                        <textarea name="special" class="input-xlarge" id="form_special" type="text" rows="5" placeholder="如果没有请留空。"></textarea>
                    </div>
                </div>

                <legend>工作经历</legend>
				
                <div class="control-group">
                    <label class="control-label" for="form_work">职　　业</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge required" name="work" id="form_work">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_work_experience">工作经历</label>
                    <div class="controls">
                        <textarea name="work_experience" class="input-xlarge" id="form_work_experience" rows="5" placeholder="如果没有请留空。"></textarea>
                    </div>
                </div>

                <legend>联系方式</legend>
				
                <div class="control-group">
                    <label class="control-label" for="form_phone">电　　话</label>
                    <div class="controls">
                        <input name="phone" class="input-xlarge required id="form_phone" type="text" placeholder="">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请正确填写您的联系电话！
                    </div>
					-->
                </div>

                <div class="control-group">
                    <label class="control-label" for="form_email">E-mail</label>
                    <div class="controls">
                        <input name="email" class="input-xlarge required" id="form_email" type="email">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请正确填写您的E-mail地址！
                    </div>
					-->
                </div>

                <div class="control-group">
                    <label class="control-label" for="form_qq">QQ/微信</label>
                    <div class="controls">
                        <input name="qq" class="input-xlarge required" id="form_qq" type="text">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>

                <div class="control-group">
                    <label class="control-label" for="form_cur_province">现居住地</label>
                    <div class="controls">
                        <select id="form_cur_province" name="cur_province required" class="two_select">
                            <option value="载入中">载入中</option>

                        </select>
                        <select id="form_cur_city" name="cur_city required" class="two_select">
                            <option value="载入中">载入中</option>
                        </select>
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您选择现居住地！
                    </div>
					-->
                </div>

                <div class="control-group">
                    <label class="control-label" for="form_cur_addr">详细地址</label>
                    <div class="controls">
                        <input name="cur_addr" class="input-xlarge required" id="form_cur_addr" type="text">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>

                <div class="control-group">
                    <label class="control-label" for="form_post_code">邮　　编</label>
                    <div class="controls">
                        <input name="post_code" class="input-xlarge required" id="form_post_code" type="text">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请正确填写您的该项信息！
                    </div>
					-->
                </div>

                <legend>紧急联系人（直系亲属/家人）</legend>
				
                <div class="control-group">
                    <label class="control-label" for="form_family_title">称　　谓</label>
                    <div class="controls">
                        <input name="family_title" class="input-xlarge required" id="form_family_title" type="text">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_family_name">姓　　名</label>
                    <div class="controls">
                        <input name="family_name" class="input-xlarge required" id="form_family_name" type="text">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_family_contact">电　　话</label>
                    <div class="controls">
                        <input name="family_contact" class="input-xlarge required" id="form_family_contact" type="text" placeholder="">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请正确填写联系人电话！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_family_workplace">工作单位</label>
                    <div class="controls">
                        <input name="family_workplace" class="input-xlarge required" id="form_family_workplace" type="text">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>

                <div class="control-group">
                    <label class="control-label" for="form_family_addr">地　　址</label>
                    <div class="controls">
                        <input name="family_addr" class="input-xlarge required" id="form_family_addr" type="text">
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>

                <legend>支教概况</legend>
				
                <div class="control-group">
                    <label class="control-label" for="form_is_disability">有否伤残病历</label>
                    <div class="controls">
                        <textarea name="is_disability" class="input-xlarge" id="form_is_disability" rows="5" placeholder="如果没有请留空。"></textarea>
                    </div>
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_is_experience">有否支教经验</label>
                    <div class="controls">
                        <textarea name="is_experience" class="input-xlarge" id="form_is_experience" rows="5" placeholder="如果没有请留空。"></textarea>
                    </div>
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_term1">申请支教期限</label>
                    <div class="controls">
						<label class="radio inline">
						  <input type="radio" name="predict_deadline" id="form_term1" value="1" checked>
						  一学期
						</label>
						<label class="radio inline">
						  <input type="radio" name="predict_deadline" id="form_term2" value="2">
						  一学年
						</label>
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请选择申请支教期限！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_term_autum">开始支教的时间</label>
                    <div class="controls">
						<label class="radio inline">
						  <input type="radio" name="begin_date" id="form_term_autum" value="1">
						  秋季学期
						</label>
						<label class="radio inline">
						  <input type="radio" name="begin_date" id="form_term_spring" value="2">
						  春季学期
						</label>
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请选择开始支教的时间！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_status_work">现在的状态</label>
                    <div class="controls">
						<label class="radio inline">
						  <input type="radio" name="cur_status" id="form_status_work" value="1" checked>
						  工作
						</label>
						<label class="radio inline">
						  <input type="radio" name="cur_status" id="form_status_learn" value="2">
						  学习
						</label>
						<label class="radio inline">
						  <input type="radio" name="cur_status" id="form_status_free" value="3">
						  无业
						</label>
						
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请选择现在的状态！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_cur_income">目前的经济来源</label>
                    <div class="controls">
                        <textarea name="cur_income" class="input-xlarge required" id="form_cur_income" rows="5"></textarea>
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="control-label" for="form_info_from">何处得知本活动</label>
                    <div class="controls">
                        <textarea name="info_from" class="input-xlarge required" id="form_info_from" rows="5"></textarea>
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>

                <legend>支教问答题（100—500字）</legend>
				
                <div class="control-group">
                    <label for="form_Q1" class="question_label">1、请简述您为什么要支教？您对支教有哪些了解？希望通过支教收获什么？</label>
                    <div>
                        <textarea name="Q1" class="question_text input-xxlarge required" id="form_Q1" rows="5" placeholder="100-500字"></textarea>
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>
				
                <div class="control-group">
                    <label class="question_label" for="form_Q2">2、请简述对您影响最大的一位老师是如何教学的？您认为作为一个老师应该具备哪些品质？又该如何去做一名合格的老师？</label>
                    <div>
                        <textarea name="Q2" class="question_text input-xxlarge required" id="form_Q2" rows="5" placeholder="100-500字"></textarea>
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>

                <div class="control-group">
                    <label class="question_label" for="form_Q3">3、请简述您的家庭教育中有哪些值得学习的经验和不足，孩童时期对你影响最大的一件事是什么？为什么？</label>
                    <div>
                        <textarea name="Q3" class="question_text input-xxlarge required" id="form_Q3" rows="5" placeholder="100-500字"></textarea>
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>

                <div class="control-group">
                    <label class="question_label" for="form_Q4">4、请简述未来五年内的人生规划？</label>
                    <div>
                        <textarea name="Q4" class="question_text input-xxlarge required" id="form_Q4" rows="5"></textarea>
                    </div>
					<!--
					<div class="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>提示：</strong> 请您填写该项信息！
                    </div>
					-->
                </div>

                <legend>最终确认</legend>

                <label class="checkbox">
                    <input id="im-sure" type="checkbox" value="sure" style="width:1em;height:1em;margin-left:2em;margin-right:0.5em;">
                    我已经准备好了！
					<span class="input-check" id="im-sure-check">请确认您已经准备好了！</span>
                </label>

                <div class="form-actions">
                    <button class="btn btn-primary" type="submit" id="submit_form">提交报名表单</button>
					<!--
                    <input type="submit" id="check-submit" style="display:none;"/>
					-->
                </div>
				
            </fieldset>
			<!--
            <table border=1 bordercolor="#787" id="progress_table" style="width:33em;height:1em;margin-top:0.5em;font-size:14px;display:none;"><tr><td id="progress_td" style="width:1%;background:#2a0;"></td><td></td></tr></table>
			-->
        </form>
    </section>
	
	
