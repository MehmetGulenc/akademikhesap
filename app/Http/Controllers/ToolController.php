<?php

namespace App\Http\Controllers;

use App\Models\ChapterItems;
use App\Models\ChapterRequirements;
use App\Models\Chapters;
use App\Models\Fields;
use App\Models\Questions;
use App\Models\Tools;
use App\Models\FieldRequirements;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index(){

        $tools = Tools::statusActive()->get();
        $fields = Fields::all()->where('tool_id', '=', 1)->where('status', '=', 1);
        return view('front.tool', compact('tools', 'fields'));
    }
    public function tool(){
        $fieldRequirements = FieldRequirements::all()->where('status', '=', 1);
        $chapters = Chapters::all()->where('status', '=', 1);
        $chapterRequirements = ChapterRequirements::all()->where('status', '=', 1);
        $chapterItems = ChapterItems::all()->where('status', '=', 1);
        $questions = Questions::all()->where('status', '=', 1);
        return view('front.egitim-bilimleri-temel-alani',
            compact('fieldRequirements', 'chapters', 'chapterRequirements', 'chapterItems', 'questions'));
    }
}
