<?php
/**
 * Created by PhpStorm
 * User: Norman
 * Date: 2023/3/27
 * Time: 11:06 AM
 */

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Admin\CreateGroupRequest;
use App\Http\Requests\Backend\Admin\UpdateGroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * 客服列表
     * @return \Illuminate\Support\Facades\View\View
     */
    public function index(Request $request)
    {
        return view('backend.group.index');
    }

    /**
     * 数据表格接口
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function data(Request $request)
    {
        $model = Group::query();

        if ($request->get('search_name')) {
            $model = $model->where('username', $request->get('search_name'));
        }

        if ($request->get('search_group')) {
            $model = $model->where('group_id', $request->get('search_group'));
        }

        if ($request->get('search_time')) {
            $model = $model->where('created_at', $request->get('search_time'));
        }

        $data = $model->orderBy('id', 'desc')->paginate()->toArray();

        $data = [
            'code' => 0,
            'msg' => 'success',
            'count' => $data['total'],
            'data' => $data['data']
        ];

        return response()->json($data);
    }

    /**
     * 添加页面
     * @return \Illuminate\Support\Facades\View\View
     */
    public function create()
    {
        return view('backend.group.create');
    }

    /**
     * 添加数据
     * @param CreateGroupRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateGroupRequest $request)
    {

        $data = $request->all();

        if (Group::create($data)) {
            return response()->json(['code' => 0, 'msg' => '保存成功']);
        }
        return response()->json(['code' => 1, 'msg' => '保存失败']);
    }

    /**
     * 编辑页面
     * @return \Illuminate\Support\Facades\View\View
     */
    public function edit($id)
    {
        $data = Group::query()->findOrFail($id);


        return view('backend.group.edit', ['data' => $data]);
    }

    /**
     * 编辑数据
     * @param UpdateGroupRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateGroupRequest $request, $id)
    {
        $model = Group::findOrFail($id);
        $data = $request->all();

        if ($model->update($data)) {
            return response()->json(['code' => 0, 'msg' => '编辑保存成功']);
        }
        return response()->json(['code' => 1, 'msg' => '编辑保存失败']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $ids = $request->get('ids');

        if (empty($ids)) {
            return response()->json(['code' => 1, 'msg' => '请选择删除项']);
        }

        if (in_array(1, $ids)) {
            return response()->json(['code' => 1, 'msg' => '默认组不可删除']);
        }

        if (Group::destroy($ids)) {
            return response()->json(['code' => 0, 'msg' => '删除成功']);
        }
        return response()->json(['code' => 1, 'msg' => '删除失败']);
    }

    /**
     * 启/禁状态
     * @param UpdateGroupRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeStatus($id)
    {
        $model = Group::findOrFail($id);
        $data = [];

        // 根据当前客服组的状态，取反操作
        if($model->group_status){
            $data['group_status'] = Group::OFF;
        }else{
            $data['group_status'] = Group::ON;
        }


        if ($model->update($data)) {
            return response()->json(['code' => 0, 'msg' => '操作成功']);
        }
        return response()->json(['code' => 1, 'msg' => '操作失败']);
    }

}
