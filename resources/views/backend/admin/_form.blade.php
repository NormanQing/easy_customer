<form class="layui-form" lay-filter="data-form">
    <div class="layui-form-item">
        <label for="" class="layui-form-label"><span style="margin: 5px;color: #f56c6c;font-size: 15px;">*</span>账号</label>
        <div class="layui-input-block">
            <input value="{{$data->username ?? ''}}" type="text" name="username" required  lay-verify="required" placeholder="请输入账号" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">客服组</label>
        <div class="layui-input-block">
            <select name="group_id" lay-verify="required">
                <option value=""></option>
                <option value="1">默认客服组</option>
            </select>
        </div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">类型</label>
        <div class="layui-input-block">
            @foreach($type as $k=>$v)
                <input type="radio" name="type" value="{{$k}}" title="{{$v}}" required  lay-verify="required" @if(isset($data->type) && $data->type == $k) checked @endif>
            @endforeach
        </div>
    </div>
    <div class="layui-form-item">
        <label for="" class="layui-form-label"><span style="margin: 5px;color: #f56c6c;font-size: 15px;">*</span>职位</label>
        <div class="layui-input-block">
            <input value="{{$data->job ?? ''}}" type="text" name="job" required  lay-verify="required" placeholder="请输入职位" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label for="" class="layui-form-label"><span style="margin: 5px;color: #f56c6c;font-size: 15px;">*</span>昵称</label>
        <div class="layui-input-block">
            <input type="text" value="{{$data->nick_name ?? ''}}" name="nick_name" required  lay-verify="required" placeholder="请输入职位" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="" class="layui-form-label">密码</label>
        <div class="layui-input-block">
            <input type="password" name="password" placeholder="请输入密码" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="" class="layui-form-label">确认密码</label>
        <div class="layui-input-block">
            <input type="password" name="password_confirmation" placeholder="请输入密码" class="layui-input">
        </div>
    </div>
    <button style="display: none;" lay-submit lay-filter="submitBtn" id="submitBtn"></button>
</form>
