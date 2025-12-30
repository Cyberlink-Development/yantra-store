<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Address;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Post;
use App\Model\Product;
use App\Model\ServiceOrder;
use App\Model\ServiceOrderAddress;
use Barryvdh\DomPDF\Facade;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Exception;
use Log;

class OrderController extends BackendController
{
    public function all_orders(Request $request)
    {
        if ($request->isMethod('get')) {
            $order = Order::orderBy('created_at', 'desc')->get();
            return view($this->backendPagePath . 'order/all_orders', compact('order'));
        }
    }

    public function service_orders(Request $request)
    {
        if ($request->isMethod('get')) {
            $order = ServiceOrder::orderBy('created_at', 'desc')->get();
            // dd($order);
            return view($this->backendPagePath . 'service_orders/all_orders', compact('order'));
        }

    }

    public function order_details(Request $request)
    {
        if ($request->isMethod('get')) {
            $order = Order::where('id', $request->id)->with('shippings')->first();
            // dd($request->all(),$order,$request->id);
            $detail = OrderDetail::where('order_id', $request->id)->get();
        //  dd($order);
            $img = new Product();

            return view($this->backendPagePath . 'order/order_details', compact('order', 'detail', 'img'));

        }
    }
    public function service_order_details( $id)
    {
        $order = ServiceOrder::where('id', $id)->first();
        $service_name = Post::where('id',$order->service_id)->first();
        // dd($order,$service_name);

        return view($this->backendPagePath . 'service_orders/order_details', compact('order','service_name'));
    }

    public function order_status(Request $request)
    {
        if ($request->isMethod('post')) {
            try{
                $data['status'] = $request->orders_status;
                $status = Order::findorfail($request->id);
                $status->update($data);
                return redirect()->back()->with([
                    'success' => true,
                    'message' => 'Status updated successfully.'
                ]);
            } catch (Exception $e) {
                Log::error('Error while updating :- ' . $e->getMessage());
                return redirect()->back()->withInput()->with([
                    'error' => true,
                    'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
                ]);
            }
        }
    }
    public function service_order_status(Request $request)
    {
        if ($request->isMethod('post')) {
            try{
                $data['status'] = $request->orders_status;
                $status = ServiceOrder::findorfail($request->id);
                $status->update($data);
                return redirect()->back()->with([
                    'success' => true,
                    'message' => 'Status updated successfully.'
                ]);
            } catch (Exception $e) {
                Log::error('Error while updating :- ' . $e->getMessage());
                return redirect()->back()->withInput()->with([
                    'error' => true,
                    'message' => app()->isLocal() ? $e->getMessage() : 'Something went wrong. Please try again.'
                ]);
            }
        }
    }

    public function generatePDF(Request $request)
    {

        if ($request->isMethod('get')) {
            $order = Order::where('id', $request->id)->first();
            $detail = OrderDetail::where('order_id', $request->id)->get();
            $pdf = Facade::loadView('backend.pages.order.invoice', array('detail' => $detail, 'order' => $order));
            $pdf->stream();
            // $pdf->save(storage_path() . '_invoice.pdf');
            // return $pdf->download('invoice.pdf');

        }

    }

    public function order_delete(Request $request)
    {
        $find = Order::where('id', $request->id)->first();
        $details = $find->details();
        $details->delete();
        $find->delete();

        return back()->with([
            'success' => true,
            'message' => 'Order deleted successfully.'
        ]);
    }
    public function service_order_delete(Request $request)
    {
        $order = ServiceOrder::with('address')->findOrFail($request->id);
        if ($order->address) {
            $order->address->delete();
        }
        $order->delete();

        return back()->with([
            'success' => true,
            'message' => 'Order deleted successfully.'
        ]);
    }
}
