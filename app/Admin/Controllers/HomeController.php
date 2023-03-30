<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Admin\Metrics\Examples\TotalUsers;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Metrics\Card;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('主页')
            ->description('快速入口')
            ->body($this->cardMake()
            //     function (Row $row) {
            //     $rowWidth = 6;
            //     $row->column($rowWidth, function (Column $column) {
            //         $column->row(
            //             $this->
            //             cardMake(
            //                 '网络',
            //                 'images/Designer_Isometric.svg',
            //                 url()->current().'/question?type=1',
            //                 '用于解决网络问题'
            //             )
            //         );
            //         $column->row(
            //             $this->
            //             cardMake(
            //                 '软件',
            //                 'images/Designer_Isometric.svg',
            //                 url()->current().'/question?type=2',
            //                 '用于解决软件问题'
            //             )
            //         );
            //     });

            //     $row->column($rowWidth, function (Column $column) {
            //         $column->row(
            //             $this->
            //             cardMake(
            //                 '硬件',
            //                 'images/Designer_Isometric.svg',
            //                 url()->current().'/question?type=3',
            //                 '用于解决硬件问题'
            //             )
            //         );
            //         $column->row(
            //             $this->
            //             cardMake(
            //                 '其他',
            //                 'images/Designer_Isometric.svg',
            //                 url()->current().'/question?type=4',
            //                 '用于解决其他问题'
            //             )
            //         );
            //     });
            // }
        );
    }

    public function cardMake(){
        return view('home');
    }
}


