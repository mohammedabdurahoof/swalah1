<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\bookfair;
use App\Models\library;
use App\Models\printCash;
use App\Models\student;
use App\Models\stationery;
use App\Models\vachanam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function home(){
        return view('user/home');
    }

    public function dashboard(){
        return view('dashboard/dashboard');
    }

    public function students(){
        $students = student::all();
        return view('dashboard/students',['students' => $students]);
    }

    public function addStudents(Request $request){
        // dd($request->post());
        $validator = $request->validate([
            'name' => 'required|max:124',
            'adno' =>  'required|max:3|min:3',
            'class' => 'required'
        ]);
        student::create($validator);
        return back();
    }

    public function delete(student $student){
        // dd($student);
        $student->delete();
        return back();
    }

    public function edit(student $student){
        // $todo = Todo::findOrFail($id);
        // dd($student);
        $students = student::all();
        return $student ;
    }

    public function update(Request $request, student $student){
        // dd($request->post());
        $validator = $request->validate([
            'name' => 'required|max:124',
            'adno' =>  'required|max:3|min:3',
            'class' => 'required'   
        ]);
        $student->update($validator);
        // $todo->title = $validator['title'];
        // $todo->save();
        return back();
        // dd($validator);
    }

  
  

    public function stationery(){
 
        // $print = printcash::all();
        $stationery = stationery::all();
      

        $stationery = DB::table('students')
        ->join('stationeries', 'stationeries.adno', 'students.adno')
        ->get();
    return view('dashboard/stationery', ['stationeries' => $stationery]);
    }

    public function print(){
        $print = DB::table('students')
        ->join('print_cashes', 'print_cashes.adno', 'students.adno')
        ->get();
    return view('dashboard/print', ['print' => $print]);
    }

    public function vachanam(){
        $vachanam = DB::table('students')
        ->join('vachanams', 'vachanams.adno', 'students.adno')
        ->get();
    return view('dashboard/vachanam', ['vachanam' => $vachanam]);
    }

    public function account(){
        $account = DB::table('students')
        ->join('accounts', 'accounts.adno', 'students.adno')
        ->get();
    return view('dashboard/account', ['account' => $account]);
    }
    

    public function bookfair(){
        $bookfair = DB::table('students')
        ->join('bookfairs', 'bookfairs.adno', 'students.adno')
        ->get();
    return view('dashboard/bookfair', ['bookfair' => $bookfair]);
    }
    
    public function addStationery(Request $request){
        // dd($request->post('adno'));
        $stationery=stationery::where('adno',$request->post('adno'));;
        $adno=$stationery->value('adno');
        // dd($adno);
        $oldamount=stationery::where('adno',$request->post('adno'))->value('amount');
        $newamount=$request->input('amount'); 
        $totalamount=$oldamount+$newamount;
        if($adno===null){
            $validator = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'
            ]);
            stationery::create($validator);
        }else{

            $validateData = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'   
            ]);
            
        // dd($Stationery);
        //  dd($totalamount);
        // $stationery->update($validateData);
        // stationery::where('adno', $adno)->update($request->all());
        $stationery->update([
            'amount' => $totalamount
        ]);
        }

        return back();
    }
    

    public function addprint(Request $request){
        // dd($request->post('adno'));
        $print=printCash::where('adno',$request->post('adno'));;
        $adno=$print->value('adno');
        // dd($adno);
        $oldamount=printCash::where('adno',$request->post('adno'))->value('amount');
        $newamount=$request->input('amount'); 
        $totalamount=$oldamount+$newamount;
        if($adno===null){
            $validator = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'
            ]);
            printCash::create($validator);
        }else{

            $validateData = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'   
            ]);
            
        // dd($Stationery);
        //  dd($totalamount);
        // $stationery->update($validateData);
        // stationery::where('adno', $adno)->update($request->all());
        $print->update([
            'amount' => $totalamount
        ]);
        }

        return back();
    }

 

    public function addvachanam(Request $request){
        // dd($request->post('adno'));
        $vachanam=vachanam::where('adno',$request->post('adno'));;
        $adno=$vachanam->value('adno');
        // dd($adno);
        $oldamount=vachanam::where('adno',$request->post('adno'))->value('amount');
        $newamount=$request->input('amount'); 
        $totalamount=$oldamount+$newamount;
        if($adno===null){
            $validator = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'
            ]);
            vachanam::create($validator);
        }else{

            $validateData = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'   
            ]);
            
        // dd($Stationery);
        //  dd($totalamount);
        // $stationery->update($validateData);
        // stationery::where('adno', $adno)->update($request->all());
        $vachanam->update([
            'amount' => $totalamount
        ]);
        }

        return back();
    }

    public function addbookfair(Request $request){
        // dd($request->post('adno'));
        $bookfair=bookfair::where('adno',$request->post('adno'));;
        $adno=$bookfair->value('adno');
        // dd($adno);
        $oldamount=bookfair::where('adno',$request->post('adno'))->value('amount');
        $newamount=$request->input('amount'); 
        $totalamount=$oldamount+$newamount;
        if($adno===null){
            $validator = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'
            ]);
            bookfair::create($validator);
        }else{

            $validateData = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'   
            ]);
            
        // dd($Stationery);
        //  dd($totalamount);
        // $stationery->update($validateData);
        // stationery::where('adno', $adno)->update($request->all());
        $bookfair->update([
            'amount' => $totalamount
        ]);
        }

        return back();
    }

    public function addaccount(Request $request){
        // dd($request->post('adno'));
        $account=account::where('adno',$request->post('adno'));;
        $adno=$account->value('adno');
        // dd($adno);
        $oldamount=account::where('adno',$request->post('adno'))->value('amount');
        $newamount=$request->input('amount'); 
        $totalamount=$oldamount+$newamount;
        if($adno===null){
            $validator = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'
            ]);
            account::create($validator);
        }else{

            $validateData = $request->validate([
                'adno' =>  'required|max:3|min:3',
                'amount' => 'required'   
            ]);
            
        // dd($Stationery);
        //  dd($totalamount);
        // $stationery->update($validateData);
        // stationery::where('adno', $adno)->update($request->all());
        $account->update([
            'amount' => $totalamount
        ]);
        }

        return back();
    }
    

    public function viewStudent(Request $request)
    {
        $adno=$request->input('adno');
        $student = student::where('adno', $adno )->get();
        $account = account::where('adno', $adno )->get();
        $stationery = stationery::where('adno', $adno )->get();
        $library = library::where('adno', $adno )->get();
        $printCash = printCash::where('adno', $adno )->get();
        $bookfair = bookfair::where('adno', $adno )->get();

        return view('dashboard/profile',['student'=> $student, 'account'=>$account ,
        'stationery'=>$stationery,'library'=>$library,'printCash'=>$printCash,'bookfair'=>$bookfair]);
    }

    public function searchuser(Request $request)
    {
        
        $adno=$request->input('search');
        $student = student::where('adno', $adno )->get();
        $account = account::where('adno', $adno )->get();
        $stationery = stationery::where('adno', $adno )->get();
        $library = library::where('adno', $adno )->get();
        $printCash = printCash::where('adno', $adno )->get();
        $bookfair = bookfair::where('adno', $adno )->get();
       
    
       
            return view('dashboard/profile',['student'=> $student, 'account'=>$account ,
            'stationery'=>$stationery,'library'=>$library,'printCash'=>$printCash,'bookfair'=>$bookfair]);
      
            // dd($request->post('search'));
            // return back();
        
    }

    public function printSlip()
    {
        $student = student::all();
        return view('dashboard/printSlip',["students"=>$student]);
    }
}
