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

        <form class="form-horizontal well" id="action-form" action="test.php" method="post">
            <fieldset>
                <legend>基本资料</legend>
                <div class="control-group">
                    <label class="control-label" for="username">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</label>

                    <div class="controls">
                        <input type="text" class="input-xlarge" name="username" id="username" onblur="checkItems('username')">
                        <p class="input-check" id="username-check">请输入2-4个汉字姓名！</p>
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
                        <input type="date" class="input-xlarge" name="user_birthday" id="user_birthday" onblur="checkItems('user_birthday')">
                        <p class="input-check" id="user_birthday-check">格式:1980-03-21，且需年满21周岁！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="no_married">婚&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;否</label>

                    <div class="controls">
                        <input type="radio" id="no_married" name="user_is_married" value="1" checked="true"><label for="no_married" class="radio-label">未婚</label></input>
                        <input type="radio" id="is_married" name="user_is_married" value="2"><label for="is_married" class="radio-label">已婚</label></input>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="province_home">籍&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贯</label>

                    <div class="controls">

                        <select id="province_home" name="user_hometown_province" class="two_select">
                            <option value="载入中">载入中</option>

                        </select>
                        <select id="city_home" name="user_hometown_city" class="two_select" onchange="checkItems('city_home')">
                            <option value="载入中">载入中</option>
                        </select>
                        <p class="input-check" id="city_home-check">请您选择所在城市！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_id_num">身份证号</label>

                    <div class="controls">
                        <input name="user_id_num" class="input-xlarge" id="user_id_num" type="text" onblur="checkItems('user_id_num')">
                        <p class="input-check" id="user_id_num-check">请正确填写您的18位身份证号码！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">身份证照</label>

                    <div class="controls">
                        <input name="user_id_photo" class="input-xlarge" id="user_id_photo" type="file" onchange="checkItems('user_id_photo')">
                        <p class="input-check" id="user_id_photo-check">请选择上传图片文件！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">近期照片</label>

                    <div class="controls">
                        <input name="user_photo" class="input-xlarge" id="user_photo" type="file" onchange="checkItems('user_photo')">
                        <p class="input-check" id="user_photo-check">请选择上传图片文件！</p>
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
                        <input name="edu_photo" class="input-xlarge" id="edu_photo" type="file" onchange="checkItems('edu_photo')">
                        <p class="input-check" id="edu_photo-check">请选择上传图片文件！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_grad_inst">毕业院校</label>

                    <div class="controls">
                        <input name="user_grad_inst" class="input-xlarge" id="user_grad_inst" type="text" onblur="checkItems('user_grad_inst')">
                        <p class="input-check" id="user_grad_inst-check">请正确填写您的毕业院校！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_profession">专&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业</label>

                    <div class="controls">
                        <input name="user_profession" class="input-xlarge" id="user_profession" type="text" onblur="checkItems('user_profession')">
                        <p class="input-check" id="user_profession-check">请正确填写您主修专业！</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="user_special">个人特别技能及资历</label>

                    <div class="controls">
                        <textarea name="user_special" class="input-xlarge" id="user_special" type="text"  onblur="checkItems('user_special')"></textarea>
                        <p class="input-check" id="user_special-check">请您填写该项信息！</p>
                    </div>
                </div>

                <legend>工作经历</legend>
                <div class="control-group">
                    <label class="control-label" for="user_work">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业</label>

                    <div class="controls">
                        <input type="text" class="input-xlarge" name="user_work" id="user_work" onblur="checkItems('user_work')">
                        <p class="input-check" id="user_work-check">请您填写该项信息！</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="work_experience">工作经历</label>

                    <div class="controls">
                        <textarea name="work_experience" class="input-xlarge" id="work_experience" rows="3" onblur="checkItems('work_experience')"></textarea>
                        <p class="input-check" id="work_experience-check">请您填写该项信息！</p>
                    </div>
                </div>

                <legend>联系方式</legend>
                <div class="control-group">
                    <label class="control-label" for="user_phone">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</label>

                    <div class="controls">
                        <input name="user_phone" class="input-xlarge" id="user_phone" type="text" placeholder="手机 / 固话(格式:010-99999999)" onblur="checkItems('user_phone')">
                        <p class="input-check" id="user_phone-check">请正确填写您的联系电话！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_email">E-mail</label>

                    <div class="controls">
                        <input name="user_email" class="input-xlarge" id="user_email" type="email" onblur="checkItems('user_email')">
                        <p class="input-check" id="user_email-check">请正确填写您的E-mail地址！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_qq">QQ</label>

                    <div class="controls">
                        <input name="user_qq" class="input-xlarge" id="user_qq" type="text" onblur="checkItems('user_qq')">
                        <p class="input-check" id="user_qq-check">请您填写该项信息！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="province">现居住地</label>

                    <div class="controls">
                        <select id="province" name="user_province" class="two_select">
                            <option value="载入中">载入中</option>

                        </select>
                        <select id="city" name="user_city" class="two_select" onchange="checkItems('city')">
                            <option value="载入中">载入中</option>
                        </select>
                        <p class="input-check" id="city-check">请您选择所在城市！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_cur_addr">详细地址</label>

                    <div class="controls">
                        <input name="user_cur_addr" class="input-xlarge" id="user_cur_addr" type="text" onblur="checkItems('user_cur_addr')">
                        <p class="input-check" id="user_cur_addr-check">请您填写该项信息！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="user_post_code">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编</label>

                    <div class="controls">
                        <input name="user_post_code" class="input-xlarge" id="user_post_code" type="text" onblur="checkItems('user_post_code')">
                        <p class="input-check" id="user_post_code-check">请正确填写您的该项信息！</p>
                    </div>
                </div>

                <legend>紧急联系人（直系亲属/家人）</legend>
                <div class="control-group">
                    <label class="control-label" for="family_title">称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;谓</label>

                    <div class="controls">
                        <input name="family_title" class="input-xlarge" id="family_title" type="text" onblur="checkItems('family_title')">
                        <p class="input-check" id="family_title-check">请您填写该项信息！</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="family_name">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</label>

                    <div class="controls">
                        <input name="family_name" class="input-xlarge" id="family_name" type="text" onblur="checkItems('family_name')">
                        <p class="input-check" id="family_name-check">请您填写该项信息！</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="family_contact">电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</label>

                    <div class="controls">
                        <input name="family_contact" class="input-xlarge" id="family_contact" type="text"  placeholder="手机 / 固话(格式:010-99999999)" onblur="checkItems('family_contact')">
                        <p class="input-check" id="family_contact-check">请正确填写联系人电话！</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="family_workplace">工作单位</label>

                    <div class="controls">
                        <input name="family_workplace" class="input-xlarge" id="family_workplace" type="text" onblur="checkItems('family_workplace')">
                        <p class="input-check" id="family_workplace-check">请您填写该项信息！</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="family_addr">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址</label>

                    <div class="controls">
                        <input name="family_addr" class="input-xlarge" id="family_addr" type="text" onblur="checkItems('family_addr')">
                        <p class="input-check" id="family_addr-check">请您填写该项信息！</p>
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
                    <label class="control-label" for="status_work">现在的状态</label>

                    <div class="controls">
                        <input type="radio" id="status_work" name="cur_status" value="1" checked="true"><label for="status_work" class="radio-label">工作</label></input>
                        <input type="radio" id="status_learn" name="cur_status" value="2"><label for="status_learn" class="radio-label">学习</label></input>
                        <input type="radio" id="status_free" name="cur_status" value="3"><label for="status_free" class="radio-label">无业</label></input>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="cur_income">目前的经济来源</label>

                    <div class="controls">
                        <input name="cur_income" class="input-xlarge" id="cur_income" type="text" onblur="checkItems('cur_income')">
                        <p class="input-check" id="cur_income-check">请您填写该项信息！</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="info_from">何处得知本活动</label>

                    <div class="controls">
                        <input name="info_from" class="input-xlarge" id="info_from" type="text" onblur="checkItems('info_from')">
                        <p class="input-check" id="info_from-check">请您填写该项信息！</p>
                    </div>
                </div>

                <legend>支教问答题（100—500字）</legend>
                <div>
                    <label for="Q1" class="question_label">1、请简述您为什么要支教？您对支教有哪些了解？希望通过支教收获什么？</label>
                    <div>
                        <textarea name="Q1" class="question_text" id="Q1" rows="5" onblur="checkItems('Q1')"></textarea>
                        <p class="input-check" id="Q1-check">请您填写该项信息！</p>
                    </div>
                </div>
                <div>
                    <label class="question_label" for="Q2">2、请简述对您影响最大的一位老师是如何教学的？您认为作为一个老师应该具备哪些品质？又该如何去做一名合格的老师？</label>

                    <div>
                        <textarea name="Q2" class="question_text" id="Q2" rows="5" onblur="checkItems('Q2')"></textarea>
                        <p class="input-check" id="Q2-check">请您填写该项信息！</p>
                    </div>
                </div>

                <div>
                    <label class="question_label" for="Q3">3、请简述您的家庭教育中有哪些值得学习的经验和不足，孩童时期对你影响最大的一件事是什么？为什么？</label>

                    <div>
                        <textarea name="Q3" class="question_text" id="Q3" rows="5" onblur="checkItems('Q3')"></textarea>
                        <p class="input-check" id="Q3-check">请您填写该项信息！</p>
                    </div>
                </div>

                <div>
                    <label class="question_label" for="Q4">4、请简述未来五年内的人生规划？</label>

                    <div>
                        <textarea name="Q4" class="question_text" id="Q4" rows="5" onblur="checkItems('Q4')"></textarea>
                        <p class="input-check" id="Q4-check">请您填写该项信息！</p>
                    </div>
                </div>

                <legend>最终确认</legend>

                        <label class="checkbox">
                            <input id="im-sure" type="checkbox" value="sure" style="width:1em;height:1em;margin-left:2em;margin-right:0.5em;" onclick="checkSure()">
                            我已经准备好了！<span class="input-check" id="im-sure-check">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请确认您已经准备好了！</span>
                        </label>


                <div class="form-actions">
                    <button class="btn btn-primary" type="button" id="submit_form" onclick="submitItems()">提交报名表单</button>
                    <input type="submit" id="check-submit" style="display:none;"/>
                </div>
            </fieldset>
                    <table border=1 bordercolor="#787" id="progress_table" style="width:33em;height:1em;margin-top:0.5em;font-size:14px;display:none;"><tr><td id="progress_td" style="width:1%;background:#2a0;"></td><td></td></tr></table>
        </form>
        <script src="assets/js/data.js"></script>
        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <script src="assets/js/jquery.city.select.min.js"></script>
        <script src="assets/js/prettify.js"></script>
        <script type="text/javascript">
            $('#province, #city').citylist({
                data    : data,
                id      : 'id',
                children: 'cities',
                name    : 'name',
                metaTag : 'name'
            });
            $('#province_home, #city_home').citylist({
                data    : data,
                id      : 'id',
                children: 'cities',
                name    : 'name',
                metaTag : 'name'
            });
        </script>
        <script type="text/javascript">
            var submit_now = false;
            var focus_element = null;
            function checkItems(id){
                var item_element = document.getElementById(id);
                var item_check   = document.getElementById(id+"-check");
                var item_content = item_element.value;
                if(!item_check) return;
                if(submit_now){
                    item_content   =   item_content.replace(/(^\s*)|(\s*$)/g,""); //去除内容前后的空格
                    if(item_content.length <= 0){
                        item_check.style.display="block";
                        focus_element = item_element;
                        return;
                    }
                }
                if(id=="username"){//姓名检查
                     item_content   =   item_content.replace(/\s+/g,""); //去除内容中的空格
                     if(item_content.length > 0 && (item_content.match(/[^\u4e00-\u9fa5]/g)||item_content.length<2||item_content.length>4)){
                        item_check.style.display="block";
                        focus_element = item_element;
                        return;
                     }
                }
               else if(id=="user_birthday"){//年龄检查 需要年满21周岁
                     item_content   =   item_content.replace(/\s+/g,""); //去除内容中的空格
                     if(item_content.length > 0 && !item_content.match(/^([1-2]\d{3})[\-](0?[1-9]|10|11|12)[\-]([1-2]?[0-9]|0[1-9]|30|31)/g)){
                        item_check.style.display="block";
                        focus_element = item_element;
                        return;
                     }
                     else{
                        var curDay = new Date();
                        var diff = (curDay - Date.parse(parseInt(item_content.substring(5,7)) + "/" + parseInt(item_content.substring(item_content.lastIndexOf("-")+1,item_content.length)) + "/" + parseInt(item_content))) / 31536000000;
                        if(diff < 21){
                            item_check.style.display="block";
                            focus_element = item_element;
                            return;
                        }
                     }
               }
               else if(id=="user_id_num"){//身份证号码检查
                     item_content   =   item_content.replace(/\s+/g,""); //去除内容中的空格
                     if(item_content.length > 0 && item_content!=item_content.match(/^(\d{17})([0-9]|\x|\X)/g)){
                        item_check.style.display="block";
                        focus_element = item_element;
                        return;
                     }
               }
               else if(id=="user_phone" || id == "family_contact"){//电话号码检查
                     item_content   =   item_content.replace(/\s+/g,""); //去除内容中的空格
                     if(item_content.length > 0 && item_content!=item_content.match(/^([1]\d{10})|([0]\d{2,3}\-\d{7,8})/g)){
                        item_check.style.display="block";
                        focus_element = item_element;
                        return;
                     }
               }
               else if(id=="user_email"){//E-mail检查
                     item_content   =   item_content.replace(/\s+/g,""); //去除内容中的空格
                     var reg1 = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                     if(item_content.length > 0 && !reg1.test(item_content)){
                        item_check.style.display="block";
                        focus_element = item_element;
                        return;
                     }
               }
               else if(id=="user_post_code"){//邮编检查
                     item_content   =   item_content.replace(/\s+/g,""); //去除内容中的空格
                     if(item_content.length > 0 && item_content!=item_content.match(/^\d{6}/)){
                        item_check.style.display="block";
                        focus_element = item_element;
                        return;
                     }
               }
               item_check.style.display="none";
               if(item_element.getAttribute("type")!="file")item_element.value = item_content;
            }
            function checkSure(){
                if($('#im-sure').is(':checked')){
                    $('#im-sure-check').css("display","none");
                }
            }
            function submitItems(){
                focus_element = null;
                submit_now = true;
                $form_textarea = $('form').find('textarea');
                for(var i = $form_textarea.length-1; i>=0; i--){
                    checkItems($form_textarea[i].getAttribute("id"));
                }
                $form_selects = $('form').find('select');
                for(var i = $form_selects.length-1; i>=0 ;i--){
                    if($form_selects[i].value==""){
                        //$form_selects[i].focus();
                        checkItems($form_selects[i].getAttribute("id"));
                    }
                }
                $form_input = $('form').find('input');
                for(var i = $form_input.length-1; i>=0; i--){
                    if($form_input[i].getAttribute("type")!="radio"){
                        checkItems($form_input[i].getAttribute("id"));
                    }
                }
                if(focus_element!=null){
                    focus_element.focus();
                }
                else{
                    if(!$('#im-sure').is(':checked')){
                        $('#im-sure-check').css("display","inline");
                        $('#im-sure').focus();
                    }
                    else{
                        submitDatas();
                    }
                }
            }
            function uploadProgress(evt) {
              if (evt.lengthComputable) {
                var percentComplete = Math.round(evt.loaded * 100 / evt.total);
                if(evt.loaded	== evt.total){
                    $("#progress_table").css("display","none");
                }
                else
                    $("#progress_td").css("width",percentComplete.toString() + '%');
              }
            }
            function submitDatas(){
                $("#progress_table").css("display","block");
                var xmlHttp 	= window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHttp");
                xmlHttp.upload.addEventListener("progress", uploadProgress, false);
	        	xmlHttp.onreadystatechange=function()
                {
                    if (xmlHttp.readyState==4 && xmlHttp.status==200)
                    {
                        //alert(xmlHttp.responseText);
                        $("#check-submit").click();
                    }
                };
                var form = null;
                try{
                    throw form = new FormData();
                }
                catch(e){
                }
                if(form == null){
                    alert("您的浏览器版本不支持FormData文件上传操作！");
                }
                else{
                    var file_obj = document.getElementById("user_id_photo").files;
                    if(file_obj && file_obj.length > 0){
                        form.append("file[]",file_obj[0]);
                    }
                    file_obj = document.getElementById("user_photo").files;
                    if(file_obj && file_obj.length > 0){
                        form.append("file[]",file_obj[0]);
                    }
                    file_obj = document.getElementById("edu_photo").files;
                    if(file_obj && file_obj.length > 0){
                        form.append("file[]",file_obj[0]);
                    }
                    xmlHttp.open("POST", "test.php",true);
                    xmlHttp.send(form);
                }
            }
        </script>
    </section>
