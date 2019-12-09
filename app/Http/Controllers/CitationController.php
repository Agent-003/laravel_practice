<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitationController extends Controller
{
    public $citations=[
            1 =>'Если Вы стали для кого-то плохим, значит много хорошего было сделано для этого человека. ',
            2 =>'Нашедший себя теряет зависимость от чужих мнений.',
            3 =>'Прежде чем диагностировать у себя депрессию и заниженную самооценку, убедитесь, что вы не окружены идиотами. ',
            4 =>'Победи себя и выиграешь тысячи битв.',
            5 =>'Симпатия — это когда нравится внешность, влюблённость — когда нравится внешность и характер, а любовь — 
            это когда нравятся даже недостатки.',
            6 =>'Важно не то место, которое мы занимаем, а то направление, в котором мы движемся.'
    ];

    public function getCitation()
    {
        $randomKey=array_rand($this->citations);
        $citation=$this->citations[$randomKey];
        return view('insipire', compact('citation'));
    }
}
