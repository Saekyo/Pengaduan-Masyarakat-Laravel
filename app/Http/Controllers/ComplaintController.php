<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ComplaintController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $complaints = Complaint::orderBy('created_at', 'DESC');
        $complaints = $complaints->simplePaginate(99)->toArray()['data'];

        foreach ($complaints as $key => $val) {
            $complaints[$key]['created_at'] = Carbon::create($complaints[$key]['created_at'])->toDayDateTimeString();
        }

        return view('dashboard', compact('complaints'));
    }

    public function create(Request $request)
    {
        $complaint = new Complaint;

        $complaint->nik = $request->nik;
        $complaint->name = $request->name;
        $complaint->address = $request->address;
        $complaint->phone_number = $request->phone_number;
        $complaint->report = $request->report;
        $complaint->status = $request->status;

        if (isset($request->photo)) {
            $request->photo = $request->photo->store('public/foto');
            $request->photo = str_replace('public/', '', $request->photo);
            $complaint->photo = $request->photo;
        }

        $request->validate([
            'nik' => 'required|string',
            'name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'report' => 'required|string',
            'status' => ['required', Rule::in(config('constant.complaint.status'))]
        ]);

        $complaint->save();

        return redirect()->back()->with('success', 'Berhasil mendaftar');
    }

     public function detail($id)
     {
         $complaint = Complaint::findOrFail($id);

         return view('complaint.edit', compact('complaint'));
     }

     public function update(Request $request, $id)
     {
         $complaint = Complaint::findOrFail($id);

         $complaint->nik = $request->nik;
        $complaint->name = $request->name;
        $complaint->address = $request->address;
        $complaint->phone_number = $request->phone_number;
        $complaint->report = $request->report;
        $complaint->status = $request->status;

        if (isset($request->photo)) {
            $request->photo = $request->photo->store('public/foto');
            $request->photo = str_replace('public/', '', $request->photo);
            $complaint->photo = $request->photo;
        }

        $request->validate([
            'nik' => 'required|string',
            'name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'report' => 'required|string',
            'status' => ['required', Rule::in(config('constant.complaint.status'))]
        ]);

         $complaint->save();

         return redirect()->back()->with('success', 'Berhasil memperbarui');
     }

     public function delete($id)
     {
         $complaint = Complaint::findOrFail($id);
         $complaint->delete();

         return redirect()->back()->with('success', 'Berhasil menghapus data');
     }

     public function print($id)
     {
         $complaint = Complaint::findOrFail($id);

         return view('complaint.print', compact('complaint'));
     }
}
