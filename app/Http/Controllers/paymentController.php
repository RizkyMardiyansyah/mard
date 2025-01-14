<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\subscription;
use App\Models\template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Mail\ExampleMail;
use App\Mail\orderMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class paymentController extends Controller
{
    public function index($snapKey)
    {       

        // Ambil data dari model Order berdasarkan snapKey
        $order = order::where('snapKey', $snapKey)->first();
        $subs = subscription::where ('id', $order->subscription)->first();
        $template = template::where ('id', $order->template)->first();

        // Kirim data ke view
        return view('payment', compact('order','subs','template','snapKey'));

    }

    public function updateStatus(Request $request)
    {
        $snapKey = $request->input('snapKey');
        $orderId = $request->input('orderId');

        // Update status order
        $order = Order::where('snapKey', $snapKey)->first();
        
            // $order->status = 'Developing';
            // $order->orderId = $orderId;
            // $order->save();
            $currentDateTime = Carbon::now()->format('Y-m-d H:i:s');
            $order->update(['status' => 'Developing']);
            $order->update(['orderId' => $orderId]);
            $order->update(['terms_and_condition_at' => $currentDateTime]);
        
        return redirect()->back();
        // return redirect()->route('order.show', ['id' => $orderId]);
    }


    // public function sendEmail()
    // {
    //     $data = [
    //         'name' => 'John Doe',
    //         'message' => 'This is a test email from Laravel.'
    //     ];

    //     Mail::to('rizkymardiyansyah23@gmail.com')->send(new orderMail($data));

    //     return "Email sent successfully!";
    // }

}
