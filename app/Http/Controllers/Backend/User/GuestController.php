<?php
/**
 * Created by PhpStorm
 * User: Norman
 * Date: 2023/3/27
 * Time: 11:06 AM
 */

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * 客服列表
     * @return \Illuminate\Support\Facades\View\View
     */
    public function index(Request $request)
    {
        return view('backend.guest.index');
    }

    /**
     * 数据表格接口
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function data(Request $request)
    {
        $model = Guest::query()->with('group')->with('admin');

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
     * 编辑页面
     * @return \Illuminate\Support\Facades\View\View
     */
    public function edit($id)
    {
        $data = Guest::query()->findOrFail($id);


        return view('backend.guest.edit', ['data' => $data]);
    }

    /**
     * 编辑数据
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $model = Guest::findOrFail($id);
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

        if (Guest::destroy($ids)) {
            return response()->json(['code' => 0, 'msg' => '删除成功']);
        }
        return response()->json(['code' => 1, 'msg' => '删除失败']);
    }

}
