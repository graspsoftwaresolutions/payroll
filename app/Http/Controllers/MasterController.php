<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SoscoInsurance;
use App\Sosco;
use App\Epf;
use Illuminate\Support\Facades\Crypt;
use DB;

class MasterController extends Controller
{
    public function categoryList()
    {
        $data['cat_list'] = Category::where('status','=','1')->get();
        return view('administrator.hrm.master.categoty.list')->with('data',$data);
    }
    public function categoryAdd()
    {
        return view('administrator.hrm.master.categoty.new');
    }
    public function categorySave(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'cat_name' => 'required',
                ], [
            'cat_name.required' => 'please enter category name',
        ]);

        $data_exists =  Category::where([
            ['cat_name','=',$request->input('cat_name')],
            ['status','=','1']
            ])->count();
        
        if($data_exists>0)
        {
            return  redirect('/hrm/category_add')->with('error','category Already Exists'); 
        }
        else{
            $savedata = Category::create($data);

            if ($savedata == true) {
                return redirect('hrm/category_list')->with('message', 'category Name Added Succesfully'); 
            }
        }
    }
    public function categoryEdit($id)
    {
        $catid = crypt::decrypt($id);
        $data['cat_list'] = Category::where('id','=',$catid)->where('status','=',1)->get();
        return view('administrator.hrm.master.categoty.edit')->with('data',$data);
        
    }
    public function categoryUpdate(Request $request)
    {   
        $data = $request->all();
        $request->validate([
            'cat_name' => 'required',
                ], [
            'cat_name.required' => 'please enter category name',
        ]);
        $savedata = Category::find($data['cat_id'])->update($data);
        if ($savedata == true) {
            return redirect('hrm/category_list')->with('message', 'category Name Updated Succesfully'); 
        }            
    } 
    
    //Sosco Insuarnce 
    public function soscoInsuranceList()
    {
        $data['sosco_list'] = SoscoInsurance::where('status','=','1')->get();
        return view('administrator.hrm.master.sosco_insurance.list')->with('data',$data);
    }
    public function soscoinsuranceAdd()
    {
        return view('administrator.hrm.master.sosco_insurance.new');
    }

    public function SoscoInsuranceSave(Request $request)
    {
        $SaveInsurance = new SoscoInsurance();
        $SaveInsurance->wage_limit = $request->wage_limit;
        $SaveInsurance->from_amount = $request->from_amount;
        $SaveInsurance->to_amount = $request->to_amount;
        $SaveInsurance->employee_contribution = $request->employee_contribution;
        $SaveInsurance->employer_contribution = $request->employer_contribution;
        $SaveInsurance->total_contribution = $request->total_contribution;
        $SaveInsurance->save();
        return redirect('hrm/sosco_insurance_list')->with('message', 'Sosco Insurance Added Succesfully');
    }
    public function soscoInsuranceEdit($id)
    {
        $id = crypt::decrypt($id);
        $data['insurance_list'] = SoscoInsurance::where('id','=',$id)->where('status','=',1)->get();
        return view('administrator.hrm.master.sosco_insurance.edit')->with('data',$data);
    }
    public function SoscoInsuranceUpdate(Request $request)
    {
        $id = $request->sosco_id;
        if($id)
        {
            $SaveInsurance = SoscoInsurance::find($id);	
            $SaveInsurance->wage_limit = $request->wage_limit;
            $SaveInsurance->from_amount = $request->from_amount;
            $SaveInsurance->to_amount = $request->to_amount;
            $SaveInsurance->employee_contribution = $request->employee_contribution;
            $SaveInsurance->employer_contribution = $request->employer_contribution;
            $SaveInsurance->total_contribution = $request->total_contribution;
            $SaveInsurance->save();
            return redirect('hrm/sosco_insurance_list')->with('message', 'Sosco Insurance Updated Succesfully');
        }
        
    }
      //Sosco  
      public function soscoList()
      {
          $data['sosco_list'] = Sosco::where('status','=','1')->get();
          return view('administrator.hrm.master.sosco.list')->with('data',$data);
      }
      public function soscoAdd()
      {
          return view('administrator.hrm.master.sosco.new');
      }
      public function SoscoSave(Request $request)
      {
          $SaveSosco = new Sosco();
          $SaveSosco->wage_limit = $request->wage_limit;
          $SaveSosco->from_amount = $request->from_amount;
          $SaveSosco->to_amount = $request->to_amount;
          $SaveSosco->employee_contribution = $request->employee_contribution;
          $SaveSosco->employer_contribution = $request->employer_contribution;
          $SaveSosco->total_contribution = $request->total_contribution;
          $SaveSosco->save();
          return redirect('hrm/sosco_list')->with('message', 'Sosco Added Succesfully');
      }
      public function soscoEdit($id)
      {
          $id = crypt::decrypt($id);
          $data['insurance_list'] = Sosco::where('id','=',$id)->where('status','=',1)->get();
          return view('administrator.hrm.master.sosco.edit')->with('data',$data);
      }
      public function SoscoUpdate(Request $request)
      {
          $id = $request->sosco_id;
          if($id)
          {
              $SaveSosco = Sosco::find($id);	
              $SaveSosco->wage_limit = $request->wage_limit;
              $SaveSosco->from_amount = $request->from_amount;
              $SaveSosco->to_amount = $request->to_amount;
              $SaveSosco->employee_contribution = $request->employee_contribution;
              $SaveSosco->employer_contribution = $request->employer_contribution;
              $SaveSosco->total_contribution = $request->total_contribution;
              $SaveSosco->save();
              return redirect('hrm/sosco_list')->with('message', 'Sosco Updated Succesfully');
          }
      }
      //Epf  
      public function epfList(Request $request)
      {
          $old_age = $request->input('old_age');
          $old_age = isset($old_age) ? 1 : 0 ;
         
          $data['old_age'] = $old_age;
          
          if($old_age==1){
            $epf_list = DB::table('epf')->where('status','=','1')->where('old_age','=',1)->get();

          }else{
            $epf_list = DB::table('epf')->where('status','=','1')->whereNull('old_age')->orWhere('old_age','=',0)->get();
            ///dd($epf_list);
          }
          $data['epf_list'] = $epf_list;
          return view('administrator.hrm.master.epf.list')->with('data',$data);
      }
      public function epfAdd(Request $request)
      {
          $old_age = $request->input('old_age');
          $data['old_age'] = $old_age;
          return view('administrator.hrm.master.epf.new')->with('data',$data);
      }
      public function epfSave(Request $request)
      {
          $SaveEpf = new Epf();
          $SaveEpf->old_age = $request->old_age;
          $SaveEpf->wage_limit = $request->wage_limit;
          $SaveEpf->from_amount = $request->from_amount;
          $SaveEpf->to_amount = $request->to_amount;
          $SaveEpf->employee_contribution = $request->employee_contribution;
          $SaveEpf->employer_contribution = $request->employer_contribution;
          $SaveEpf->total_contribution = $request->total_contribution;
          $SaveEpf->save();
          if($SaveEpf->old_age==1){
             return redirect('hrm/epf_list?old_age=1')->with('message', 'EPF Added Succesfully');
          }else{
             return redirect('hrm/epf_list')->with('message', 'EPF Added Succesfully');
          }
      }
      public function epfEdit($id)
      {
          $id = crypt::decrypt($id);
          //dd($id);          
          //$data['epf_list'] = Sosco::where('id','=',$id)->where('status','=',1)->get();
          $data['epf_list'] = Epf::where('id','=',$id)->where('status','=',1)->get();
          //dd($data);
          return view('administrator.hrm.master.epf.edit')->with('data',$data);
      }
      public function epfUpdate(Request $request)
      {
          $id = $request->epf_id;
          if($id)
          {
              $SaveEpf = Epf::find($id);	
              $SaveEpf->wage_limit = $request->wage_limit;
              $SaveEpf->old_age = $request->old_age;
              $SaveEpf->from_amount = $request->from_amount;
              $SaveEpf->to_amount = $request->to_amount;
              $SaveEpf->employee_contribution = $request->employee_contribution;
              $SaveEpf->employer_contribution = $request->employer_contribution;
              $SaveEpf->total_contribution = $request->total_contribution;
              $SaveEpf->save();
              if($SaveEpf->old_age==1){
                return redirect('hrm/epf_list?old_age=1')->with('message', 'EPF Updated Succesfully');
              }else{
                return redirect('hrm/epf_list')->with('message', 'EPF Updated Succesfully');
              }
          }
      }
}
