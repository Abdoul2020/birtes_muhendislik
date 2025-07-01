<?php

namespace App\Http\Controllers\Site\dubai;

use App\Http\Controllers\Controller;
use App\Models\abudhabi\FAQ;
use Illuminate\Http\Request;

class faqController extends Controller
{
    public function faqIndex()
    {

        $allfaq = FAQ::where('placefor', 'Dubai')->get()->groupBy('question');


        $uniqueFAQ = collect();
        foreach ($allfaq as $question => $entries) {
            $uniqueFAQ->push($entries->first());
        }

        return view("site.dubai.faq", [
            'allfaq' => $uniqueFAQ,
        ]);
    }
}
