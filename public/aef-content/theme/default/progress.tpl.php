<?php if (!defined('FILE_PREFIX')) include '../../../error-forbidden.php'; ?>
    <section id="page-box-apply">
        <div class="page-header">
            <h1>志愿者申请进度</h1>
        </div>
        <!--
        <div class="row">
            <div class="span12">
                <blockquote>
                    <p>请认真如实填写以下表单，以便我们能够更好的了解您去支教的意愿。</p>
                    <small>支教联盟管理 <cite title="衷心希望">年小恩</cite></small>
                </blockquote>
            </div>
        </div>
        -->
        <table class="table">
            <thead>
                <tr>
                    <th>姓名</th>
                    <th>申请日期</th>
                    <th>状态</th>
                    <th>备注</th>
                </tr>
            </thead>
            <tbody>
                {loop="records"}
                <tr>
                    <td>{$value.name}</td>
                    <td>{$value.time}</td>
                    {if="$value.verify_status == 1"}
                    <td>未审核</td>
                    <td>请耐心等待管理员进行审核</td>
                    {elseif="$value.verify_status == 2"}
                    <td>已通过</td>
                    <td>您已经通过审核，请耐心等待，会有专人联系您</td>
                    {elseif="$value.verify_status == 3"}
                    <td>未通过</td>
                    <td>抱歉，您的申请没有通过我们的审核</td>
                    {/if}
                </tr>
                {/loop}
            </tbody>
        </table>
    </section>

	
