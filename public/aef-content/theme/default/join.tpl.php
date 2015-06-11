<?php if (!defined('FILE_PREFIX')) include '../../../error-forbidden.php'; ?>
    <section id="apply-form-box">
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

        <form class="form-horizontal well" id="action-form" action="http://apply.go9999.com/join/" method="post">
            <fieldset>
                <legend>基本资料</legend>
                <div class="control-group">
                    <label class="control-label" for="username">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</label>

                    <div class="controls">
                        <input type="text" class="input-xlarge" name="username" id="username">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="sex_male">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</label>

                    <div class="controls">
                        <input type="radio" id="sex_male" name="user_sex" value="1" checked="true"><label for="sex_male" class="radio-label">男</label></input>
                        <input type="radio" id="sex_female" name="user_sex" value="2"><label for="sex_female" class="radio-label">女</label></input>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_birthday">出生日期</label>

                    <div class="controls">
                        <input type="date" class="input-xlarge" name="user_birthday" id="user_birthday">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="f4">婚&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;否</label>

                    <div class="controls">
                        <input type="radio" id="no_married" name="user_is_married" value="1" checked="true"><label for="no_married" class="radio-label">未婚</label></input>
                        <input type="radio" id="is_married" name="user_is_married" value="2"><label for="is_married" class="radio-label">已婚</label></input>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_hometown">籍&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贯</label>

                    <div class="controls">
                        <input type="text" class="input-xlarge" name="user_hometown" id="user_hometown">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_ID_NO">身份证号</label>

                    <div class="controls">
                        <input name="user_ID_NO" class="input-xlarge" id="user_ID_NO" type="text">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">身份证照</label>

                    <div class="controls">
                        <input name="user_id_photo" class="input-xlarge" id="user_id_photo" type="file">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">近期照片</label>

                    <div class="controls">
                        <input name="user_photo" class="input-xlarge" id="user_photo" type="file">
                    </div>
                </div>

                <legend>受教育经历</legend>
                <div class="control-group">
                    <label class="control-label" for="user_edu_level">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;历</label>

                    <div class="controls">
                        <select id="user_edu_level" name="user_edu_level">
                            <option value="4" selected>大专</option>
                            <option value="5">本科</option>
                            <option value="6">硕士</option>
                            <option value="7">博士及以上</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">学历照片</label>

                    <div class="controls">
                        <input name="edu_photo" class="input-xlarge" id="edu_photo" type="file">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_grad_inst">毕业院校</label>

                    <div class="controls">
                        <input name="user_grad_inst" class="input-xlarge" id="user_grad_inst" type="text">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_profession">专&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业</label>

                    <div class="controls">
                        <input name="user_profession" class="input-xlarge" id="user_profession" type="text">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="user_special">个人特别技能及资历</label>

                    <div class="controls">
                        <textarea name="user_special" class="input-xlarge" id="user_special" type="text"></textarea>
                    </div>
                </div>

                <legend>工作经历</legend>
                <div class="control-group">
                    <label class="control-label" for="user_work">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业</label>

                    <div class="controls">
                        <input type="text" class="input-xlarge" name="user_work" id="user_work">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="work_experience">工作经历</label>

                    <div class="controls">
                        <textarea name="work_experience" class="input-xlarge" id="work_experience" rows="3"></textarea>
                    </div>
                </div>

                <legend>联系方式</legend>
                <div class="control-group">
                    <label class="control-label" for="user_phone">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</label>

                    <div class="controls">
                        <input name="user_phone" class="input-xlarge" id="user_phone" type="text" placeholder="手机 / 固定号码(请加区号)">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_email">E-mail</label>

                    <div class="controls">
                        <input name="user_email" class="input-xlarge" id="user_email" type="text">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_qq">QQ</label>

                    <div class="controls">
                        <input name="user_qq" class="input-xlarge" id="user_qq" type="text">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_province">现居住地</label>

                    <div class="controls">
                        <input name="user_province" class="input-xlarge" id="user_province" type="text">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_cur_addr">详细地址</label>

                    <div class="controls">
                        <input name="user_cur_addr" class="input-xlarge" id="user_cur_addr" type="text">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_post_code">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编</label>

                    <div class="controls">
                        <input name="user_post_code" class="input-xlarge" id="user_post_code" type="email">
                    </div>
                </div>

                <legend>紧急联系人（直系亲属/家人）</legend>
                <div class="control-group">
                    <label class="control-label" for="family_title">称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;谓</label>

                    <div class="controls">
                        <input name="family_title" class="input-xlarge" id="family_title" type="text">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="family_name">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</label>

                    <div class="controls">
                        <input name="family_name" class="input-xlarge" id="family_name" type="text">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="family_contact">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</label>

                    <div class="controls">
                        <input name="family_contact" class="input-xlarge" id="family_contact" type="text">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="family_workplace">工作单位</label>

                    <div class="controls">
                        <input name="family_workplace" class="input-xlarge" id="family_workplace" type="text">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="family_addr">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址</label>

                    <div class="controls">
                        <input name="family_addr" class="input-xlarge" id="family_addr" type="text">
                    </div>
                </div>

                <legend>支教概况</legend>
                <div class="control-group">
                    <label class="control-label" for="is_disability">有否伤残病历</label>

                    <div class="controls">
                        <input name="is_disability" class="input-xlarge" id="is_disability" type="text">

                        <p class="help-block">如果没有请留空。</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="is_experience">有否支教经验</label>

                    <div class="controls">
                        <input name="is_experience" class="input-xlarge" id="is_experience" type="text">

                        <p class="help-block">如果没有请留空。</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="term1">申请支教期限</label>

                    <div class="controls">
                        <input type="radio" id="term1" name="predict_deadline" value="1" checked="true"><label for="term1" class="radio-label">一学期</label></input>
                        <input type="radio" id="term2" name="predict_deadline" value="2"><label for="term2" class="radio-label">一学年</label></input>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="term_autum">开始支教的时间</label>

                    <div class="controls">
                        <input type="radio" id="term_autum" name="begin_date" value="1" checked="true"><label for="term_autum" class="radio-label">秋季学期</label></input>
                        <input type="radio" id="term_spring" name="begin_date" value="2"><label for="term_spring" class="radio-label">春季学期</label></input>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="cur_status">现在的状态</label>

                    <div class="controls">
                        <select id="cur_status" name="cur_status">
                            <option value="1" selected>工作</option>
                            <option value="2">学习</option>
                            <option value="3">无业</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="cur_income">目前的经济来源</label>

                    <div class="controls">
                        <input name="cur_income" class="input-xlarge" id="cur_income" type="text">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="info_from">何处得知本活动</label>

                    <div class="controls">
                        <input name="info_from" class="input-xlarge" id="info_from" type="text">
                    </div>
                </div>

                <legend>支教问答题（100—500字）</legend>
                <div>
                    <label for="Q1" class="question_label">1、请简述您为什么要支教？您对支教有哪些了解？希望通过支教收获什么？</label>
                    <div>
                        <textarea name="Q1" class="question_text" id="Q1" rows="5"></textarea>
                    </div>
                </div>
                <div>
                    <label class="question_label" for="Q2">2、请简述对您影响最大的一位老师是如何教学的？您认为作为一个老师应该具备哪些品质？又该如何去做一名合格的老师？</label>

                    <div>
                        <textarea name="Q2" class="question_text" id="Q2" rows="5"></textarea>
                    </div>
                </div>

                <div>
                    <label class="question_label" for="Q3">3、请简述您的家庭教育中有哪些值得学习的经验和不足，孩童时期对你影响最大的一件事是什么？为什么？</label>

                    <div>
                        <textarea name="Q3" class="question_text" id="Q3" rows="5"></textarea>
                    </div>
                </div>

                <div>
                    <label class="question_label" for="Q4">4、请简述未来五年内的人生规划？</label>

                    <div>
                        <textarea name="Q4" class="question_text" id="Q4" rows="5"></textarea>
                    </div>
                </div>

                <legend>最终确认</legend>

                        <label class="checkbox">
                            <input id="im-sure" type="checkbox" value="sure" style="width:1em;height:1em;margin-left:2em;margin-right:0.5em;">
                            我已经准备好了！
                        </label>


                <div class="form-actions">
                    <button class="btn btn-primary" type="submit">提交报名表单</button>
                </div>
            </fieldset>
        </form>
    </section><footer id="footer">
