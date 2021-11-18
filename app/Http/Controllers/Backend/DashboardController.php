<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use App\Models\UserInfo;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {

        $users = User::all();
        $blogs = Post::all();
        $products = Product::all();
        $orderAll = Order::all();
        $orders = Order::where('status', 4)->get();
        $time = Carbon::now();
        $userNews = User::whereDate('created_at', $time)->orWhereDate(
            'created_at', $time->subDay(1))->paginate(8);
        $postNews = Post::orderBy('created_at', 'desc')->take(3)->get();
        //PieCharJS
        $data = [
            UserInfo::where('gender', 1)->count(),
            UserInfo::where('gender', 2)->count(),
            UserInfo::where('gender', 3)->count(),
        ];
        $pieChart = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Male', 'Female', 'Other'])
            ->datasets([
                [
                    'backgroundColor' => ['red', 'blue', 'black'],
                    'hoverBackgroundColor' => ['#FF6384', '#36A2EB', 'black'],
                    'data' => $data,
                ],
            ])
            ->options([]);

        //PieCharOrderJS
        $orderStatus = new Order();
        $orderStatus = $orderStatus->statusAll();
        for ($i = 1; $i <= count($orderStatus); $i++) {
            $dataOrderStatus[] = Order::where('status', $i)->count();
            $dataNameOrderStatus[] = $orderStatus[$i];
        }

        $pieOrderChart = app()->chartjs
            ->name('pieChartOrder')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels($dataNameOrderStatus)
            ->datasets([
                [
                    'label' => 'Order statistical',
                    'backgroundColor' => ['red', 'blue', 'green', 'yellow'],
                    'hoverBackgroundColor' => ['#FF6384', '#36A2EB', 'green', 'yellow'],
                    'data' => $dataOrderStatus,
                ],
            ])
            ->options([]);
        //LineChart
        $dataLine = array();
        for ($i = 1; $i <= 12; $i++) {
            $dataDeliveredLine[] = Order::where('status', 4)->whereMonth('created_at', $i)->sum('money_total');
            $dataAllLine[] = Order::where('status','!=', 0)->whereMonth('created_at', $i)->sum('money_total');
        }
        $lineChart = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 100])
            ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November'])
            ->datasets([
                [
                    'label' => 'Monthly revenue / Order Delivered (USD)',
                    'backgroundColor' => "rgba(20, 185, 154, 0.2)",
                    'borderColor' => "rgba(220, 53, 69, 0.5)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $dataDeliveredLine,
                ],
                [
                    'label' => 'Monthly revenue / Order All (USD)',

                    'borderColor' => "rgba(100, 53, 69, 0.5)",
                    "pointBorderColor" => "red",
                    "pointBackgroundColor" => "red",
                    "pointHoverBackgroundColor" => "red",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $dataAllLine,
                ],
            ])->options([]);
        //BarChart
        for ($i = 1; $i <= 12; $i++) {
            $dataBarTotalOrder[] = Order::where('status', '!=', 0)->whereMonth('created_at', $i)->count();
            $dataBarTotalOrderDelivered[] = Order::where('status', 4)->whereMonth('created_at', $i)->count();
            $dataBarMoneyTotalOrderDelivered[] = Order::where('status', '!=', 0)->whereMonth('created_at', $i)->sum('money_total');
            $dataBarMoneyTotalOrder[] = Order::where('status', 4)->whereMonth('created_at', $i)->sum('money_total');

        }
        $barChart1 = app()->chartjs
            ->name('barChart1')
            ->type('bar')
            ->size(['width' => 400, 'height' => 150])
            ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November'])
            ->datasets([
                [
                    "label" => 'Total Order',
                    'backgroundColor' => "red",
                    'borderColor' => "rgba(220, 53, 69, 0.5)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $dataBarTotalOrder,
                ],
                [
                    "label" => 'Order Total Delivered',
                    'backgroundColor' => "blue",
                    'borderColor' => "rgba(220, 53, 69, 0.5)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $dataBarTotalOrderDelivered,
                ],
            ]);

            $barChart2 = app()->chartjs
            ->name('barChart2')
            ->type('bar')
            ->size(['width' => 400, 'height' => 150])
            ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November'])
            ->datasets([
                [
                    'label' => 'Money Total Order',
                    'backgroundColor' => "green",
                    'borderColor' => "rgba(220, 53, 69, 0.5)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' =>$dataBarMoneyTotalOrder,
                ],
                [
                    'label' => 'Money Total Delivered',
                    'backgroundColor' => "pink",
                    'borderColor' => "rgba(220, 53, 69, 0.5)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => $dataBarMoneyTotalOrderDelivered,
                ],
            ]);



        return view('backend.dashboard', [
            'user' => $users,
            'blogs' => $blogs,
            'products' => $products,
            'orders' => $orders,
            'ordersAll' => $orderAll,
            'userNews' => $userNews,
            'postNews' => $postNews,
            'pieGenderChart' => $pieChart,
            'lineChart' => $lineChart,
            'pieOrderChart' => $pieOrderChart,
            'barChart1' => $barChart1,
            'barChart2' => $barChart2,
        ]);
    }
}