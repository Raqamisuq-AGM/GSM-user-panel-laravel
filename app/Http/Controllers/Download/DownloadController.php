<?php

namespace App\Http\Controllers\Download;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //Get All downloads
    public function index()
    {
        return view('pages.download.all-download');
    }
}
