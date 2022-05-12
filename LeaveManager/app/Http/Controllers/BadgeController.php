<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Badge;


use PDF;
use Illuminate\Support\Facades\Storage;

class BadgeController extends Controller
{
    public function save(Request $request)
    {

           //     $pdf = Pdf::loadView('pdf');
            
        $pdf = PDF::loadView('pdfbadge',[
            'full_name' => $request->input('full_name'),
            'fonction' => $request->input('fonction'),

        ]);

        $filename = '-'.rand() .'_'.time(). '.'.'pdf';
                
        Storage::put('public/badges/'.$filename,$pdf->output());

        
        $badge= new Badge;
        $badge->full_name = $request['full_name'];
        $badge->fonction = $request['fonction'];
        $badge->photo = $request['photo'];
        $badge->pdf = $request->input('pdf', $filename);

        $badge->save();

        return redirect()->back()->with('success', 'Le Badge a été généré avec succès');
    }
}
