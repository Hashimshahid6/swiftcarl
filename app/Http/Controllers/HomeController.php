<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function root()
    {
        return view('backend.index');
        
    }
    
    public function index(Request $request)
    {
        $path = $request->path();


        // Remove the 'admin/' prefix from the path
        if (strpos($path, 'admin/') === 0) {
            $path = substr($path, strlen('admin/'));
        }
    
        $viewpath = 'backend.' . $path;

        // dd($viewPath);
        
        // Check if the view exists in the specified folder
        if (view()->exists($viewpath)) {
            return view($viewpath);
        }
        // dd($viewpath);

        // Return 404 view if not found
        if (view()->exists('backend.errors.errors.404')) {
            return view('backend.errors.errors.404');
        }
    }

}
