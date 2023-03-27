<form class="layui-form" lay-filter="data-form">
    <div class="layui-form-item">
        <label for="" class="layui-form-label">姓名</label>
        <div class="layui-input-block">
            <input value="{{$data->name ?? ''}}" type="text" name="name" placeholder="请输入名称" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="" class="layui-form-label">状态</label>
        <div class="layui-input-block">
            <input type="radio" name="guest_status" value="1" title="正常" required  lay-verify="required" @if($data->guest_status == 1) checked @endif>
            <input type="radio" name="guest_status" value="0" title="禁言" required  lay-verify="required" @if($data->guest_status == 0) checked @endif>
        </div>
    </div>

    <div class="layui-form-item">
        <label for="" class="layui-form-label">上传文件授权</label>
        <div class="layui-input-block">
            <input type="radio" name="uploads" value="1" title="有授权" required  lay-verify="required" @if($data->guest_status == 1) checked @endif>
            <input type="radio" name="uploads" value="0" title="无授权" required  lay-verify="required" @if($data->guest_status == 0) checked @endif>
        </div>
    </div>

    <div class="layui-form-item">
        <label for="" class="layui-form-label">用户ID</label>
        <div class="layui-input-block">
            <h4>{{$data->id}}</h4>
        </div>
    </div>

    <div class="layui-form-item">
        <label for="" class="layui-form-label">客服组</label>
        <div class="layui-input-block">
            <h4>默认客服</h4>
        </div>
    </div>

    <div class="layui-form-item">
        <label for="" class="layui-form-label">来自页面</label>
        <div class="layui-input-block">
            <h4>{{$data->from_url}}&nbsp;&nbsp; &nbsp; &nbsp;     浏览器：{{$data->browser}}</h4>
        </div>
    </div>

    <div class="layui-form-item">
        <label for="" class="layui-form-label">访客信息</label>
        <div class="layui-input-block">
            <h4 style="color: #969696">意向分：{{$data->grade}}&nbsp;&nbsp;登录：{{$data->login_times}}&nbsp;&nbsp;归属地：{{$data->ipzone}}({{$data->ip}})</h4>
        </div>
    </div>

    <div class="layui-form-item">
        <label for="" class="layui-form-label">备注</label>
        <div class="layui-input-block">
            <textarea name="remark" placeholder="备注" class="layui-textarea">{{$data->remark ?? ''}}</textarea>
        </div>
    </div>
    <button style="display: none;" lay-submit lay-filter="submitBtn" id="submitBtn"></button>
</form>
