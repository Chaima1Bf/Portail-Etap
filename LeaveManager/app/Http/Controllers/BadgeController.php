<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Badge;
use Laracasts\Flash\Flash;

use Symfony\Component\HttpFoundation\Response;
use PDF;
use Illuminate\Support\Facades\Storage;

class BadgeController extends Controller
{
    public function save(Request $request)
    {

           //     $pdf = Pdf::loadView('pdf');
           



           $badgephoto = $request->file('photo')->getClientOriginalName();
           $filenameonly = pathinfo($badgephoto, PATHINFO_FILENAME);
           $extenshion = $request->file('photo')->getClientOriginalExtension();
           $compic = str_replace(' ','',$filenameonly).'-'.rand() . '_'.time(). '.'.$extenshion;
           $path = $request->file('photo')->move('photo',$compic);


           $pdf = PDF::loadView('pdfbadge',[
            'full_name' => $request->input('full_name'),
            'fonction' => $request->input('fonction'),
            'photo' => $request->input('photo', $compic),

             ]);

            $filename = '-'.rand() .'_'.time(). '.'.'pdf';
                
            Storage::put('public/badges/'.$filename,$pdf->output());


        
        $badge= new Badge;
        $badge->full_name = $request['full_name'];
        $badge->fonction = $request['fonction'];
        $badge->photo = $request->input('photo', $compic);
        $badge->pdf = $request->input('pdf', $filename);

        $badge->save();
        Flash::success('Le Badge a été généré avec succès');

        return redirect(route('badge'));

        // return redirect()->back()->with('success', 'Le Badge a été généré avec succès');
    }
}
