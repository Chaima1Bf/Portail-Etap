<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateLeaveRequest;
use App\Http\Requests\UpdateLeaveRequest;
use App\Models\Leave;
use App\Models\User;
use App\Models\Signataire;
use Auth;
use Barryvdh\Debugbar\Facade;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;
use Illuminate\Support\Facades\DB;


use PDF;
use Illuminate\Support\Facades\Storage;


class LeaveController extends AppBaseController
{
    /**
     * Display a listing of the Leave.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->is_admin == 1) {
            $leaves = Leave::with('user')->paginate(10);
        } else {
            $leaves = Leave::where('user_id', Auth::user()->id)->paginate(10);
        }

        return view('leaves.index')
            ->with('leaves', $leaves);
    }

    /**
     * Show the form for creating a new Leave.
     *
     * @return Response
     */
    public function create()
    {
        /**
         * Get All users except the Admin(s)
         */
        $users = User::whereNull('is_admin')->pluck('name', 'id');
        return view('leaves.create', compact('users'));
    }

    /**
     * Store a newly created Leave in storage.
     *
     * @param CreateLeaveRequest $request
     *
     * @return Response
     */
    public function store(CreateLeaveRequest $request)
    {
        $input = $request->all();
        if (!auth()->user()->is_admin == 1) {
            $input += ['user_id' => auth()->id()];
        }
        

    //   dd($input);
          
   //     $pdf = Pdf::loadView('pdf');
    
   $pdf = PDF::loadView('pdf',[
    'natureconge' => $request->input('type'),
    'matricule' => $request->input('user_id'),
    'debut' => $request->input('start_date'),
    'fin' => $request->input('end_date'),
    'adresse' => $request->input('emergency_email'),
    'address' => $request->input('address'),
    'tel' => $request->input('emergency_phone'),

]);

$filename = '-'.rand() .'_'.time(). '.'.'pdf';
        
        Storage::put('public/demandes/'.$filename,$pdf->output());

        $Leave = new Leave;
        $Leave->type = $request['type'];
        $Leave->start_date = $request['start_date'];
        $Leave->end_date = $request['end_date'];
        $Leave->reason = $request['reason'];
        $Leave->emergency_phone = $request['emergency_phone'];
        $Leave->emergency_email = $request['emergency_email'];
        $Leave->user_id = $request['user_id'];
        $Leave->status = $request['status'];
        $Leave->address = $request['address'];
        $Leave->perdeb = $request['perdeb'];
        $Leave->perfin = $request['perfin'];
        $Leave->pdf = $request->input('pdf', $filename);
        $Leave->save();



        Flash::success('Demande soumise avec succès.');

        return redirect(route('leaves.index'));
    }

    /**
     * Display the specified Leave.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Leave $leave */
        $leave = Leave::findOrFail($id);

        if (is_null(Auth::user()->is_admin) && Auth::user()->id != $leave->id) {
            return abort(403, 'Action non autorisée.');
        }
        return view('leaves.show')->with('leave', $leave);
    }

    /**
     * Show the form for editing the specified Leave.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Leave $leave */
        $leave = Leave::findOrFail($id);
        $users = User::whereNotIn('is_admin',['1'])->orWhereNull('is_admin')->pluck('name', 'id');

        return view('leaves.edit', compact('leave', 'users'));
    }

    /**
     * Update the specified Leave in storage.
     *
     * @param int $id
     * @param UpdateLeaveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeaveRequest $request)
    {
        /** @var Leave $leave */
        $leave = Leave::findOrFail($id);

        $leave->fill($request->all());
        $leave->save();

        Flash::success('Demande de congé mise à jour avec succès.');

        return redirect(route('leaves.index'));
    }

    /**
     * Remove the specified Leave from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Leave $leave */
        $leave = Leave::findOrFail($id);

        $leave->delete();

        Flash::success('Supprimé avec succès.');

        return redirect(route('leaves.index'));
    }




        //signers functions

    public function ajouterSignataire($id)
    {
        if (Auth::user()->is_admin == 1) {
            $demandeur = Leave::where('id', $id)->first();
            //dd($demandeur->id);
           // $EMAIL_DEMANDEUR = User::select('email')->where('id', $demandeur->user_id)->get();
            //dd($EMAIL_DEMANDEUR[0]->email);
            //dd($demandeur);
            $Emails = User::select('email')->whereNotNull('email')->get();
           // dd($Emails);
           // dd($Emails[1]->email);
            $ListeSignataire = Signataire::where('pers_id', $demandeur->user_id)->get();
            //dd($ListeSignataire);
            //dd($ListeSignataire[6]->id);
            //$ListeTypefonction=
            return view('layouts.ajoutersignataire', compact('demandeur', 'Emails', 'ListeSignataire'));
        }
        abort(404);
    }

    public function storeSignataire(Request $request, $id)
    {
        if (Auth::user()->is_admin == 1) {
            $TestSignataire = Signataire::where('pers_id', $id)->get();

            // dd($TestSignataire);
            if ($TestSignataire->isEmpty()) {



                $request->validate(
                    [
                        'emails' => 'required|array|min:1|exists:Users,email',
                    ],
                    [
                        //'date_deb.required' => 'Le champ date debut est obligatoire.',
                    ]
                );
                //dd($request->emails);
                $tab = $request->emails;
                dd($tab);

                //dd($id_personnel);


                for ($i = 1; $i <= count($tab); $i++) {
                    //echo(gettype($id_personnel));


                    $x = $tab[$i - 1];
                    //echo($x); user id w email
                    // echo("<br>");
                    $signataire = DB::select("select Users.id from users where users.email='$x' ");
                    //dd($signataire[]->PERS_MAT_95 ?? null);
                    $signataire_id = $signataire[0]->user_id;
                    //dd($tab);
                    // echo($signataire[0]->PERS_MAT_95);
                    //var_dump($signataire[$var]->PERS_MAT_95);
                    //$signataire_id=$signataire[$var]->PERS_MAT_95
                    DB::insert("insert into signataires ( pers_id , signataire_id , orderr ) values ( '$id','$signataire_id','$i')");
                }

                //dd(((int)($request->Id_personnel)));

                return redirect()->back()   
                    ->with('success', 'vous avez ajouté une liste de signataires avec succès.');
            } else {
                return redirect()->back()->with('failedSignataire', 'liste des signataire existe déja');
            }
        }
        abort(404);
    }


}
