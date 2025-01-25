<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\subscription;
use App\Models\template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Mail\ExampleMail;
use App\Mail\finishMail;
use App\Mail\orderMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class paymentController extends Controller
{
    public function index($snapKey, Request $request)
    {   
       
        $order = order::where('snapKey', $snapKey)->first();
        $subs = subscription::where ('id', $order->subscription)->first();
        $template = template::where ('id', $order->template)->first();
        $routeName = request()->route()->getName();

        if ($order->status == 'Developing') {
            return view('finish', compact('order', 'subs', 'template', 'snapKey'));
        }
        
        if ($request->route()->getName() == 'finish') {
            return view('finish', compact('order', 'subs', 'template', 'snapKey'));
        }
        return view('payment', compact('order','subs','template','snapKey'));
    }



    public function updateStatus(Request $request)
    {
        $snapKey = $request->input('snapKey');
        $paymentType = $request->input('paymentType');
        

        $order = Order::where('snapKey', $snapKey)->first();        
        $currentDateTime = Carbon::now()->format('Y-m-d H:i:s');
        $order->update(['status' => 'Developing']);
        $order->update(['paymentType' => $paymentType]);
        $order->update(['terms_and_condition_at' => $currentDateTime]);

        $order = order::where('snapKey', $snapKey)->first();
        $template = template::where ('id', $order->template)->first();
        $subs = subscription::where ('id', $order->subscription)->first();

        $pdf = Pdf::loadView('invoice', compact('order', 'subs', 'template', 'snapKey'));

        $pdfName = "invoice-{$order->orderId}.pdf";
        $pdfPath = storage_path("app/public/{$pdfName}");


        $pdf->save($pdfPath);

        $order->update(['invoice' => $pdfName]);

// Kirim email dengan lampiran PDF
Mail::to($order->email)->send(new finishMail($order, $snapKey, $subs, $template, $pdfPath));
        return view('finish', compact('order', 'subs', 'template', 'snapKey'));
        
    }

}
