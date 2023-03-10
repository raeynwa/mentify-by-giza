<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Public\TipeWebinar;
use App\Models\Public\Webinar;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        $tipe_webinar = TipeWebinar::where('sts_aktif', 1)->where('sts_hapus', 1)->get();
        $webinar = Webinar::where('sts_aktif', 1)->where('sts_hapus', 1)->orderBy('created_at', 'DESC')->get();
        return view('pages.public.index', compact('tipe_webinar', 'webinar'));
    }
}
