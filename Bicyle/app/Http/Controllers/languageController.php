<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class languageController extends Controller
{
    // tạo session và gán giá trụ ngôn ngữ đc cho từ view
    public function change_language($lang) {
        // Session::put('language', $lang);
        // return redirect()->back();

        if (in_array($lang, ['en', 'vn'])) {
            Session::put('language', $lang); // Lưu vào session `language`
            Lang::setlocale($lang); // Đặt ngôn ngữ hiện tại
        }
        return redirect()->back(); // Quay lại trang trước đó
    }
}
