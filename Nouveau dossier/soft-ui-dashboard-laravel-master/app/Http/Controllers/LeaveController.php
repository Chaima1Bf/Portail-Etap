<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateLeaveRequest;
use App\Http\Requests\UpdateLeaveRequest;
use App\Models\Leave;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

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

        /** @var Leave $leave */
        Leave::create($input);

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
}
