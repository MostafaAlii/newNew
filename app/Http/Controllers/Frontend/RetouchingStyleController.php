<?php
namespace App\Http\Controllers\Frontend;
use App\Models\Retouch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RetouchingStyleController extends Controller {
    public function index() {
        return view('website.dashboard.retouchingStyle');
    }

    public function save(Request $request) {
        $selectedRetouchStyleType = $request->input('retouch_service_id');
        
        $retouchStyle = Retouch::updateOrCreate(
            ['user_id' => get_user_data()->id],
            [
                'retouch_service_id' => $request->input('retouch_service_id'),
                'retouching-note' => $request->input('retouching-note')
            ]
        );
        //return view('website.dashboard.retouchingStyle', compact('retouchStyle'));
        return redirect()->route('website.orders.index');
    }
}
