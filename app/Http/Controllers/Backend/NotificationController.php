<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNotificationRequest;
use App\Models\Notification;
use App\Models\Role;
use App\Models\User;
use App\Notifications\NotificationUser;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::where('notifiable_id', auth()->user()->id)->get();
        return view('backend.notifications.index', [
            'notifications' => $notifications,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('backend.notifications.create', [
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNotificationRequest $request)
    {
        $data = $request->all();
        if ($data['receiver'] == 0) {
            $users = User::all();
            $content = $data['content'];
            $title = $data['title'];
            foreach ($users as $user) {
                $user->notify(new NotificationUser(auth()->user(), $content, $title));
            }
        } else {
            $users = User::all();
            $content = $data['content'];
            $title = $data['title'];
            foreach ($users as $user) {
                if ($user->roles[0]->id == $data['receiver']) {
                    $user->notify(new NotificationUser(auth()->user(), $content, $title));
                }
            }
        }
        toastr()->success('successful notification sent');
        return redirect()->route('backend.notification.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($notifi_id)
    {
        $notification = Notification::find($notifi_id);
        if ($notification->type == 'App\Notifications\NotificationProduct') {
            $id=json_decode($notification->data)->order_id;
            $notification->read_at = now();
            $notification->save();
            return redirect()->route('backend.product.showOrder', ['order_id' => $id]);
        } else if($notification->type == 'App\Notifications\NotificationPost') {
            $id=json_decode($notification->data)->post_id;
            $notification->read_at = now();
            $notification->save();
            return redirect()->route('backend.post.show', ['post_id' => $id]);
        }
        else{
            $notification->read_at = now();
            $notification->save();
            return view('backend.notifications.show', ['notification' => $notification]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notification::where('id', $id)->delete();
        toastr()->success('Delete Notification successfully');
        return redirect()->back();
    }

    public function destroyAll($id)
    {
        $notifications = Notification::where('read_at', '!=', null)->get();
        foreach ($notifications as $notification) {
            $notification->delete();
        }
        toastr()->success('Delete All Notification successfully');
        return redirect()->back();
    }
}