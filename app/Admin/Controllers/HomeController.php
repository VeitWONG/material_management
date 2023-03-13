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
            ->body(function (Row $row) {
                $row->column(4, function (Column $column) {
                    $column->row(
                        $this->CardMake('资材信息','Designer _Isometric.svg','admin/material')
                    );
                    $column->row(
                        $this->CardMake('供应商信息','用于管理资材信息','admin/supplier')
                    );
                });

                $row->column(4, function (Column $column) {
                    $column->row(
                        $this->CardMake('库存管理','','admin/inventory')
                    );
                    $column->row(
                        $this->CardMake('库存往来','用于管理资材信息','admin/inventoryexchange')
                    );
                });

                $row->column(4, function (Column $column) {
                    $column->row(
                        $this->CardMake('资材申购','','admin/subscription')
                    );
                    $column->row(
                        $this->CardMake('资材申领','用于管理资材信息','admin/claim')
                    );
                });
            });
    }

    public function CardMake($title,$svg,$route){
        return view('card',['title'=>$title,'svg'=>$svg,'route'=>$route]);
    }
}


