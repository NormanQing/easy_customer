<?php
/**
 * Created by PhpStorm
 * User: Norman
 * Date: 2023/3/27
 * Time: 11:06 AM
 */

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Admin\CreateAdminRequest;
use App\Http\Requests\Backend\Admin\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * 客服列表
     * @return \Illuminate\Support\Facades\View\View
     */
    public function index(Request $request)
    {
        return view('backend.admin.index');
    }

    /**
     * 数据表格接口
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function data(Request $request)
    {
        $model = Admin::query();

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
        return view('backend.admin.create', ['type' => Admin::$TYPE]);
    }

    /**
     * 添加数据
     * @param CreateAdminRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateAdminRequest $request)
    {

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        if (Admin::create($data)) {
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
        $data = Admin::query()->findOrFail($id);


        return view('backend.admin.edit', ['type' => Admin::$TYPE, 'data' => $data]);
    }

    /**
     * 编辑数据
     * @param UpdateAdminRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateAdminRequest $request, $id)
    {
        $model = Admin::findOrFail($id);
        $data = $request->except('password');
        if ($request->get('password')) {
            $data['password'] = bcrypt($request->get('password'));
        }
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
            return response()->json(['code' => 1, 'msg' => '超级管理员不可删除']);
        }

        if (Admin::destroy($ids)) {
            return response()->json(['code' => 0, 'msg' => '删除成功']);
        }
        return response()->json(['code' => 1, 'msg' => '删除失败']);
    }

}
