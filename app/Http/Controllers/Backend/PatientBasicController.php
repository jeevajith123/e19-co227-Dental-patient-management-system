<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patient\PatientBasic;
use Illuminate\Validation\Rule;

class PatientBasicController extends Controller
{
    public function index()
    {
        return view('backend.patient_basic.index');
    }

//pasan made
    public function create()
    {
        $genders = PatientBasic::genders();
        $ethnicities = PatientBasic::ethnicities();
        $honorifics = PatientBasic::honorifics();
        $districts = PatientBasic::districts();
        $guardian_relationships = PatientBasic::guardian_relationships();
        $entered_bys = PatientBasic::entered_bys();
        return view('backend.patient_basic.create',compact('genders','ethnicities','honorifics','districts','guardian_relationships','entered_bys'));
    }

    //pasan made
    public function store(Request $request)
    {
        $data = request()->validate([
            'reg_number'=>'string|required',
            'name'=>'string|required',
            'dob' => 'required|date_format:Y-m-d\\TH:i',
            'initial_visit' => 'required|date_format:Y-m-d\\TH:i',
            'gender' => ['required', Rule::in(array_keys(PatientBasic::genders()))],
            'ethnicity' => ['required', Rule::in(array_keys(PatientBasic::ethnicities()))],
            'honorific' => ['required', Rule::in(array_keys(PatientBasic::honorifics()))],
            'district' => ['required', Rule::in(array_keys(PatientBasic::districts()))],
            'contact_address'=>'string|required',
            'contact_tele'=>'string|required',
            'guardian_name'=>'string|required',
            'guardian_tele'=>'string|required',
            'guardian_address'=>'string|required',
            'guardian_relationship' => ['required', Rule::in(array_keys(PatientBasic::guardian_relationships()))],
            'presenting_complain_co'=>'string|required',
            'presenting_complain_ho'=>'string|required',
            'medical_history'=>'string|required',
            'current_medications'=>'string|required',
            'special_referrals'=>'string|required',
            'entered_by' => ['required', Rule::in(array_keys(PatientBasic::entered_bys()))],
        ]);

       try {
            $patient_basic = new PatientBasic($data);
            //$patient_basic->save();
            
            return print_r($data);
            return redirect()->route('admin.patient_basic.index', $patient_basic)->with('Success', 'Patient details was created !');
        } catch (\Exception $ex) {
            return abort(500);
        }
    }
        


    public function edit(PatientBasic $patientBasic)
    {
        $gender = PatientBasic::genders();
        $ethnicities = PatientBasic::ethnicities();
        $honorifics = PatientBasic::honorifics();
        $districts = PatientBasic::districts();
        $guardian_relationships = PatientBasic::guardian_relationships();
        $entered_bys = PatientBasic::entered_bys();
        return view('backend.patient_basic.edit', compact('patientBasic','genders','ethnicities','honorifics','districts','guardian_relationships','entered_bys'));
    }

    public function update(Request $request, PatientBasic $patientBasic)
    {
        $data = request()->validate([
            'reg_number'=>'string|required',
            'name'=>'string|required',
            'dob' => 'required|date_format:Y-m-d\\TH:i',
            'initial_visit' => 'required|date_format:Y-m-d\\TH:i',
            'gender' => ['required', Rule::in(array_keys(PatientBasic::genders()))],
            'ethnicity' => ['required', Rule::in(array_keys(PatientBasic::ethnicities()))],
            'honorific' => ['required', Rule::in(array_keys(PatientBasic::honorifics()))],
            'district' => ['required', Rule::in(array_keys(PatientBasic::districts()))],
            'contact_address'=>'string|required',
            'contact_tele'=>'string|required',
            'guardian_name'=>'string|required',
            'guardian_tele'=>'string|required',
            'guardian_address'=>'string|required',
            'guardian_relationship' => ['required', Rule::in(array_keys(PatientBasic::guardian_relationships()))],
            'presenting_complain_co'=>'string|required',
            'presenting_complain_ho'=>'string|required',
            'medical_history'=>'string|required',
            'current_medications'=>'string|required',
            'special_referrals'=>'string|required',
            'entered_by' => ['required', Rule::in(array_keys(PatientBasic::entered_bys()))],
        ]);

        try {
            $patientBasic->enabled = ($request->enabled != null);
            $patientBasic->update($data);
            return redirect()->route('admin.patient_basic.index')->with('Success', 'Record was updated !');
        } catch (\Exception $ex) {
            return abort(500);
        }
        
    }

    public function delete(PatientBasic $patientBasic)
    {
        return view('backend.patient_basic.delete', compact('patientBasic'));
    }

    public function destroy(PatientBasic $patientBasic)
    {
        try {
            $patientBasic->delete();
            return redirect()->route('admin.patient_basic.index')->with('Success', 'Patient Details was deleted !');
        } catch (\Exception $ex) {
            return abort(500);
        }
    }
}
