<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GonnajoongController extends Controller
{
    public function index(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('index', [
                'projects' => Config('metadata.projects'),
                'skills' => Config('metadata.skills'),

                'isMobile' => $isMobile,
            ]);
        }
    }

    public function joy37(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('joy37', [
                'project' => Config('metadata.joy37'),

                'isMobile' => $isMobile,
            ]);
        }
    }

    public function hamsoa(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('hamsoa', [
                'project' => Config('metadata.hamsoa'),

                'isMobile' => $isMobile,
            ]);
        }
    }
}
