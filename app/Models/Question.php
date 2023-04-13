<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Question extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'question';
    
    //空格转换为%20
    public function spaceChange($str){
        $length=strlen($str);//注意字符串长度的函数
        $count=0;
        for($i=0;$i<$length;$i++){
                if($str[$i]==' '){
                        $count++;
                }
        }
        //倒叙遍历，字符先复制到后面，空格所在位置替换成目标
        for($i=$length-1;$i>=0;$i--){
                if($str[$i]!=' '){
                        $str[$i+$count*2]=$str[$i];
                }else{
                        $count--;
                        $str[$i+$count*2]='%';
                        $str[$i+$count*2+1]='2';
                        $str[$i+$count*2+2]='0';
                }
        }
        return $str;
    }

    public function getImage()
    {
        if (Str::contains($this->image, '//')) {
            return $this->image;
        }

        return Storage::disk('admin')->url($this->image);
    }
    protected $fillable = ['type','title','detail','resolvent','imge','video','remark'];
}
