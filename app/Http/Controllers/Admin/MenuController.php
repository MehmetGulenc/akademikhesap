<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Service\RouteCheckService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $list = Menu::all();
        return view('admin.menu', compact('list'));
    }

    public function add(Request $request){

        $route_type= intval($request->route_type);
        $route = $request->route;
        $routeCheck = RouteCheckService::checkRoute($route, $route_type);

        if($routeCheck){
            Menu::create([
                'name' => $request->name,
                'order' => $request->order,
                'route_type' => $route_type,
                'route' => $route,
                'user_id' => auth()->id(),
                'status' => isset($request->status) ? 1 : 0
            ]);
            toast('Menü eklendi.','success')->autoClose(5000);
            return redirect()->route('menu.index');
        }
        toast('Girilen route değeri bulunamadı.','error')->autoClose(5000);
        return redirect()->back();
    }

    public function editShow(Request $request){

        $id = $request->menuId;
        $menu = Menu::find($id);

        return response()->json([
            'menu' => $menu
        ], 200);
    }

    public function edit(Request $request){

        $route_type= intval($request->route_type);
        $route = $request->route;
        $routeCheck = RouteCheckService::checkRoute($route, $route_type);
        if($routeCheck){
            $id = $request->menuId;

            Menu::where('id', $id)->update([
                'name' => $request->name,
                'order' => $request->order,
                'route_type' => $route_type,
                'route' => $route,
                'user_id' => auth()->id(),
                'status' => isset($request->status) ? 1 : 0
            ]);

            toast('Menü Güncellendi.','success')->autoClose(5000);
            return redirect()->route('menu.index');
        }
        else{
            toast('Girilen route değeri bulunamadı.','error')->autoClose(5000);
            return redirect()->back();
        }

    }

    public function changeStatus(Request $request){
        $id = $request->menuId;
        $newStatus = null;
        $findMenu = Menu::find($id);
        $status = $findMenu->status;
        if($status)
        {
            $status = 0;
            $newStatus = 'Pasif';
        }
        else{
            $status = 1;
            $newStatus = 'Aktif';
        }
        $findMenu->status=$status;
        $findMenu->save();
        return response()->json([
            'newStatus' => $newStatus,
            'menuId' => $id,
            'status' => $status
        ]);
    }
}
