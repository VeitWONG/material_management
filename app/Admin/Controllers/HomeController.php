<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Metrics\Card;

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
                        $this->CardMake('资材信息','','')
                    );
                    $column->row(
                        $this->CardMake('资材信息','用于管理资材信息','')
                    );
                });

                $row->column(4, function (Column $column) {
                    $column->row(
                        $this->CardMake('资材信息','','')
                    );
                    $column->row(
                        $this->CardMake('资材信息','用于管理资材信息','')
                    );
                });

                $row->column(4, function (Column $column) {
                    $column->row(
                        $this->CardMake('资材信息','','')
                    );
                    $column->row(
                        $this->CardMake('资材信息','用于管理资材信息','')
                    );
                });
            });
    }

    public function CardMake($title,$content,$url){
        $card = new Card($title);
        $card->style('primary')
        ->content($content)
        ->height(250);
        return $card;
    }
}
