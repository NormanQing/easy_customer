<form class="layui-form" lay-filter="data-form">
    <div class="layui-form-item">
        <label for="" class="layui-form-label"><span style="margin: 5px;color: #f56c6c;font-size: 15px;">*</span>名称</label>
        <div class="layui-input-block">
            <input value="{{$data->name ?? ''}}" type="text" name="name" required  lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input">
        </div>
    </div>
    <div class="layui-form-item">
        <label for="" class="layui-form-label">简要描述</label>
        <div class="layui-input-block">
            <input value="{{$data->desc ?? ''}}" type="text" name="desc" placeholder="请输入简要描述" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <label for="" class="layui-form-label">问候语</label>
        <div class="layui-input-block">
            <textarea name="welcome" placeholder="请输入问候语" class="layui-textarea">{{$data->welcome ?? ''}}</textarea>
        </div>
    </div>
    <button style="display: none;" lay-submit lay-filter="submitBtn" id="submitBtn"></button>
</form>
