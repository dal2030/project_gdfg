<?php namespace App\Http\Controllers;

use App\Models\Research;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResearchController extends Controller
{

    public function index()
    {
        $data = Research::query();
        if(request()->research_id != null) {
            $data->where('id', 'like', "%".request()->research_id."%");
        }
        if(request()->name_en != null) {
            $data->where('name_en', 'like', "%".request()->name_en."%");
        }
        if(request()->name_ar != null) {
            $data->where('name_ar', 'like', "%".request()->name_ar."%");
        }
        if(request()->email != null) {
            $data->where('email', 'like', "%".request()->email."%");
        }
        if(request()->phone != null) {
            $data->where('phone', 'like', "%".request()->phone."%");
        }
        if(request()->academic_number != null) {
            $data->where('academic_number', 'like', "%".request()->academic_number."%");
        }
        if(request()->job_title != null) {
            $data->where('job_title', 'like', "%".request()->job_title."%");
        }
        if(request()->major != null) {
            $data->where('major', 'like', "%".request()->major."%");
        }
        if(request()->speciality != null) {
            $data->where('speciality', 'like', "%".request()->speciality."%");
        }
        if(request()->dob != null) {
            $data->where('dob', 'like', "%".request()->dob."%");
        }
        if(request()->country != null) {
            $data->where('country', 'like', "%".request()->country."%");
        }
        if(request()->city != null) {
            $data->where('city', 'like', "%".request()->city."%");
        }
        if(request()->nationality != null) {
            $data->where('nationality', 'like', "%".request()->nationality."%");
        }
        if(request()->institution != null) {
            $data->where('institution', 'like', "%".request()->institution."%");
        }

        if(request()->search_key_word != null) {
            $data->where('id', 'like', "%".request()->search_key_word."%")
                ->orWhere('name_en', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('name_ar', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('email', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('phone', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('job_title', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('major', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('speciality', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('dob', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('country', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('city', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('nationality', 'like', '%' . request()->search_key_word . '%')
                ->orWhere('institution', 'like', '%' . request()->search_key_word . '%');
        }
            
        $data = $data->get();
        return view('admin.researches.index',compact(['data']));
    }

    public function create()
    {
        return view('admin.researches.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
         'name_ar' => 'required',
         'name_en' => 'required',
         'email' => 'required|email',
         'phone' => 'required',
         'academic_number' => 'required',
         'job_title' => 'required',
         'major' => 'required',
         'speciality' => 'required',
         'dob' => 'required',
         'country' => 'required',
         'city' => 'required',
         'nationality' => 'required',
         'institution' => 'required',
        ]);

        Research::create($data);
        return redirect(route('researches.index'))->with('success','Create Successfully');
    }

    public function show($id)
    {
       $data =  Research::find($id);
       return view('admin.researches.show',compact(['data']));
    }

    public function edit($id)
    {
       $data = Research::find($id);
       return view('admin.researches.edit',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'academic_number' => 'required',
            'job_title' => 'required',
            'major' => 'required',
            'speciality' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'city' => 'required',
            'nationality' => 'required',
            'institution' => 'required',
           ]);

           Research::where('id',$id)->update($request->except('_token', '_method'));
        return redirect(route('researches.index'))->with('success','Update Successfully');
        
    }

    public function destroy($id)
    {
        Research::where('id',$id)->delete();
        return redirect()->back()->with('success','Delete Successfully');
    }

}
