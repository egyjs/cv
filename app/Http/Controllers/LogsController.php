<?php

namespace App\Http\Controllers;

use App\Logs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth');
    }

    public  function allLogs()
    {
        $logs = Logs::all();
        return view('dash.logs',['logs'=>$logs]);
    }

}
