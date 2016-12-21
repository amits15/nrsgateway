<?php

namespace Amits15\Nrs;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class NrsController extends Controller
{

    public function index($timezone)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::time', compact('current_time'));
    }

}

?>