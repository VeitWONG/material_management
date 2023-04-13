<?php

namespace App\Admin\Actions\Imports;

use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class memberImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // 0代表的是第一列 以此类推
        // $row 是每一行的数据
        //查询是否存在，存在就不写入
        $question = Question::where('title', '=', $row[2])->first();
        if ($question) {
            return null;
        }
        return new Question([
            'type' => $row[1],
            'title' => $row[2],
            'detail' => $row[3],
            'resolvent' => $row[4],
            'imge' => $row[5],
            'video' => $row[6],
            'remark' =>$row[7],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }


    /**
     * 从第几行开始处理数据 就是不处理标题
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    public function clollection(Collection $row){
        
    }
}