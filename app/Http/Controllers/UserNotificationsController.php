<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {
        $notifications = auth()->user()->unreadNotifications;

        $notifications->markAsRead(); // memo: 既読状態にする(read_atに時刻を挿入)

        return view('notifications.show', [
            'notifications' => auth()->user()->notifications // ユーザーに紐づくnotificationsの一覧を取得できる
        ]);
    }
}
