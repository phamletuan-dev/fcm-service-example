<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FcmService;
use App\User;
use Carbon\Carbon;

class TestController extends Controller
{


    protected $fcmService;

    public function __construct(FcmService $fcmService)
    {
        $this->fcmService = $fcmService;
    }

    public function send() {
        $deviceList = [
            'f-X_D33aS8-YDWbOorQSRN:APA91bHLfV50--A9vvJ8-e5yP8CfR5grqW8zJaY6miP4-DO9kp32Y_N7EBhdU_AitepQSHvPGssFExP851jhdVOXV9oN6QQIY6P02dVQB3oc20gHmgKBvro4Ib19Fls4utw-yXY-7UiF',
            'duqynAjQ0fF4q4zSlQnHmx:APA91bGxW5_n-Kw6UVfe0m8AuPsOtly_BXKBGZTX1bCsBiB5f5-bYn51ZelGsEOZVcuAsNHWTvV9xx1F-WpPM07-3X-ybqHiV8keWJa4_ql8hB5C7W3xLIEHWbSLbROMzcv7pIqScRm1'
        ];
        $currentTime = Carbon::now();

       $this->fcmService->sendBatchNotification($deviceList, [
            'topicName' => 'test',
            'title' => 'Test Notification',
            'body' => 'This notification was sent at: ' . $currentTime->toDateTimeString(),
        ]);

        return view('welcome');
    }
}
