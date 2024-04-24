<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Admissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ApplicationController extends Controller
{
    protected $characters;
    public function __construct()
    {
        $this->characters = config('captcha.characters', ['1', '2', '3', '4', '6', '7', '8', '9']);
    }
    public function personal_info_store(Request $request){
        $app = new Application();

        $app->application_date = Carbon::now()->toDateString();
        $app->first_name = $request->first_name;
        $app->last_name = $request->last_name;
        $app->father_name = $request->father_name;
        $app->mother_name = $request->mother_name;
        $app->place_of_birth = $request->birth_place;
        $app->DOB = $request->birth_date;
        $app->phone_num = $request->mobile_number;
        $app->land_line = $request->land_line;
        $app->nationality = $request->nationality;

        if($request->image){
            $file= $request->image;
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/images/id'), $filename);
            $app->id_image = $filename;
        }

        $app->save();
        Session::put('id', $app->id);
        return redirect()->route('certif.info');
    }
    public function certif_store(Request $request){
        $file= $request->certificate_image;
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('public/images/certif'), $filename);
        DB::table('applications')->where('id', Session::get('id'))->update([
            'ektitab_num' => $request->ektitab_num,
            'GPA' => $request->GPA,
            'GPA_reli_lang' => $request->GPA_reli_lang,
            'certificate_image' => $file,
            'certif_type' => $request->certif_type,
            'speciality' => $request->speciality,
            'year' => $request->year,
            'chosen_lang' => $request->chosen_lang,
            'minister' => $request->minister,
            'certif_source' => $request->certif_source,
            'gpa_no_reli' => $request->gpa_no_reli,
            'deleted_lang' => $request->deleted_lang,
            'percentage' => $request->percentage,
        ]);
        return redirect()->route('done');
    }
    public function check_code(Request $request){
        $code = Admissions::where('code', $request->code)->exists();
        if($code){
            return redirect('/personal-info');
        }else{
            return redirect()->route('confirm');
        }
    }

    public function view_Application(){
        $imageData= Application::all();
        return view('Images.view_image', compact('imageData'));
    }

    public function store_Admission(LoginRequest $request){

        $request->validated();

        $data = new Admissions();
        if($request->image){
            $file= $request->image;
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/images/payment'), $filename);
            $data->payment_image = $filename;
        }
        $data->nat_num = $request->nat_num;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->code = $this->generate();
        $data->save();
        return redirect()->route('payment');
    }
    protected function generate()
    {
        $characters = is_string($this->characters) ? str_split($this->characters) : $this->characters;
        $length = 20;

        $sensitive = false;
        $bag = [];
        for ($i = 0; $i < $length; $i++) {
            $char = $characters[rand(0, count($characters) - 1)];
            $bag[] = $char;
        }
        $key = implode('', $bag);
        return $key;
    }
    public function choose(Request $request){
        $num = $request->num;
        
    }
}
