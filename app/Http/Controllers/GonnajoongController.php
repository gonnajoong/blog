<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function sdtech(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('sdtech', [
                'project' => Config('metadata.sdtech'),

                'isMobile' => $isMobile,
            ]);
        }
    }

    public function farmmorning(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('farmmorning', [
                'project' => Config('metadata.farmmorning'),

                'isMobile' => $isMobile,
            ]);
        }
    }

    public function visionlink(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('visionlink', [
                'project' => Config('metadata.visionlink'),

                'isMobile' => $isMobile,
            ]);
        }
    }

    public function castelbajac(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('castelbajac', [
                'project' => Config('metadata.castelbajac'),

                'isMobile' => $isMobile,
            ]);
        }
    }

    public function archivepke(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('archivepke', [
                'project' => Config('metadata.archivepke'),

                'isMobile' => $isMobile,
            ]);
        }
    }

    public function odg(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('odg', [
                'project' => Config('metadata.odg'),

                'isMobile' => $isMobile,
            ]);
        }
    }

    public function likewise(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('likewise', [
                'project' => Config('metadata.likewise'),

                'isMobile' => $isMobile,
            ]);
        }
    }

    public function hjsystems(Request $req) {
        if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
            return view('old');
        } else {

            $userAgent = $req->header('User-Agent');
            $isMobile = (preg_match('/Android/i', $userAgent) ||
                preg_match('/BlackBerry/i', $userAgent) ||
                preg_match('/iPhone|iPad|iPod/i', $userAgent) ||
                preg_match('/Opera Mini/i', $userAgent) ||
                preg_match('/IEMobile/i', $userAgent));

            return view('hjsystems', [
                'project' => Config('metadata.hjsystems'),

                'isMobile' => $isMobile,
            ]);
        }
    }
}
