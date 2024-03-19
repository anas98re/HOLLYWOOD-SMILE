<?php

namespace App\Http\Controllers;

use App\Models\notification;
use App\Http\Requests\StorenotificationRequest;
use App\Http\Requests\UpdatenotificationRequest;
use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends BaseController
{
    private $MyServices;
    public function __construct(NotificationService $MyServices)
    {
        $this->MyServices = $MyServices;
    }

    public function sendMessage(Request $request)
    {
        $Message = $this->MyServices->sendMessage($request);
        return $this->sendResponse($Message, 'added message done');
    }

    public function getMessages($id,$id2)
    {
        $Messages = $this->MyServices->getMessages($id,$id2);
        return $this->sendResponse($Messages, 'These are messages');
    }


    public function storeFcmToken(Request $request)
    {
        $user = $this->MyServices->storeFcmToken($request);
        return $this->sendResponse($user, 'These are user info with his fcmToken');
    }

    public function getNotifications()
    {
        return $this->sendResponse($this->MyServices->getNotifications(), 'These are your notifications');
    }

    public function getPatietNotifications()
    {
        return $this->sendResponse($this->MyServices->getPatietNotifications(), 'These are your notifications');
    }

    public function isTheirNotifications()
    {
        return $this->sendResponse($this->MyServices->isTheirNotifications(), 'These are your Number Of Notifications');

    }
}
