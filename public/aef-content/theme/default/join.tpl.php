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
                <label class="control-label" for="f1">姓名</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f1" id="f1">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f3">年龄</label>

                <div class="controls">
                    <input type="number" min="18" max="60" class="input-xlarge" name="f3" id="f3">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f2">性别</label>

                <div class="controls">
                    <select id="f2" name="f2">
                        <option value="1" selected>男</option>
                        <option value="2">女</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f4">婚否</label>

                <div class="controls">
                    <select id="f4" name="f4">
                        <option value="1" selected>未婚</option>
                        <option value="2">已婚</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f5">教育</label>

                <div class="controls">
                    <select id="f5" name="f5">
                        <option value="1" selected>高中</option>
                        <option value="2">中专</option>
                        <option value="3">技校</option>
                        <option value="4">大专</option>
                        <option value="5">本科</option>
                        <option value="6">硕士</option>
                        <option value="7">博士及以上</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f6">籍贯</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f6" id="f6">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f7">职业</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f7" id="f7">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f8">现居住地</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f8" id="f8">
                </div>
            </div>

            <legend>受教育经历</legend>
            <div class="control-group">
                <label class="control-label" for="f9">中学</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f9" id="f9">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f10">大学</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f10" id="f10">
                </div>
            </div>

            <legend>工作经历</legend>
            <div class="control-group">
                <label class="control-label" for="f11">工作经历</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f11" name="f11" rows="3"></textarea>
                </div>
            </div>

            <legend>联系方式</legend>
            <div class="control-group">
                <label class="control-label" for="f12">邮政地址</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f12" id="f12">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f13">邮政编码</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f13" id="f13">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f14">固定电话</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f14" id="f14">

                    <p class="help-block">电话号码前请加区号。</p>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f15">手机号码</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f15" id="f15">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f16">电子邮件</label>

                <div class="controls">
                    <input type="email" class="input-xlarge" name="f16" id="f16">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="f17">QQ号码</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f17" id="f17">
                </div>
            </div>

            <legend>家庭成员</legend>
            <div class="control-group">
                <label class="control-label" for="f18">称谓</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f18" id="f18">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f19">姓名</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f19" id="f19">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f20">联系方式</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f20" id="f20">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f21">工作单位</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f21" id="f21">
                </div>
            </div>

            <legend>紧急联络人</legend>
            <div class="control-group">
                <label class="control-label" for="f22">称谓</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f22" id="f22">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f23">姓名</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f23" id="f23">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f24">联系方式</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f24" id="f24">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f25">工作单位</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f25" id="f25">
                </div>
            </div>

            <legend>个人特别技能及资历</legend>
            <div class="control-group">
                <label class="control-label" for="f26">详细介绍</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f26" name="f26" rows="5"></textarea>
                </div>
            </div>

            <legend>其它资料</legend>
            <div class="control-group">
                <label class="control-label" for="f27">有否伤残病历</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f27" id="f27">

                    <p class="help-block">如果没有请留空。</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f28">有否支教经验</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f28" id="f28">

                    <p class="help-block">如果没有请留空。</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f29">预计支教期限</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f29" id="f29">

                    <p class="help-block">如3个月，6个月，1年等。</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f30">开始支教的日期</label>

                <div class="controls">
                    <input type="date" class="input-xlarge" name="f30" id="f30">

                    <p class="help-block">格式：年/月/日</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f31">何处得知本活动</label>

                <div class="controls">
                    <input type="text" class="input-xlarge" name="f31" id="f31">
                </div>
            </div>

            <legend>请回答以下问题</legend>
            <div class="control-group">
                <label class="control-label" for="f32">您目前的工作或学习是否属在职</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f32" name="f32" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f33">简述您的经济来源与状况，并权衡是否可支付支教过程中的基本生活费、路费的同时还能保留适当的备用金</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f33" name="f33" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f34">您何时有计划支教的想法？该想法是否与您周边的亲朋好友进行过沟通？他们对您计划支教的想法所持的态度如何？</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f34" name="f34" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f35">请告知您的直系长辈亲属的联系方式，以便我们与您的家人联系，获取他们对您计划支教的支持程度。</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f35" name="f35" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f36">简述您为什么要做支教？请列出您参与支教的价值及意义。</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f36" name="f36" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f37">您是否曾经（或者最近）加入过其他公益组织，做过什么志愿服务，请略述之。（包括公益组织名称、服务内容、自己的观点等。）您在志愿服务中获得了哪些难忘的经验？</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f37" name="f37" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f38">您是否清楚支教所存在的风险，认为支教前应做哪些准备工作？</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f38" name="f38" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f39">您是否愿意提供近三个月内的体检报告以便我们对您的健康状况进行简单的评估。</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f39" name="f39" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f40">对于参与该项志愿服务，您对自己有何期望或希望贡献什么？</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f40" name="f40" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f41">您对支教的期望</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f41" name="f41" rows="5"></textarea>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="f42">其他意见</label>

                <div class="controls">
                    <textarea class="input-xlarge" id="f42" name="f42" rows="5"></textarea>
                </div>
            </div>


            <div class="control-group">
                <label class="control-label" for="im-sure">最终确认</label>

                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" id="im-sure" value="sure">
                        我已经准备好了！
                    </label>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">提交报名表单</button>
            </div>
        </fieldset>
    </form>
</section>