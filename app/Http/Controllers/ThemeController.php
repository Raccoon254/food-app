<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ThemeController extends Controller
{
    public function toggleTheme(Request $request)
    {
        $theme = $request->input('theme', 'light-mode');
        session(['theme' => $theme]);
        return response()->json(['status' => 'success']);
    }
}