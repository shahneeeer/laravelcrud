<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

class student extends Controller
{
    public function addpost(){
        return view('add-post');
    }
 //Inserting The data
    public function Createpost(Request $req){

        DB::table('students')->insert([
          // Dbname=>$req->formname 
          'studentname'=>$req->sname,
            'course'=>$req->course,
            'fee'=>$req->fee,

        ]);
        return back()->with('success',"post added sucessfully");
    }
//Fetching the data
public function show(){
    $first=DB::table('students')->get();
    return view('show',compact('first'));
}
//edit
public function edit($id){
$a=DB::table('students')->where('id',$id)->first();
return view('edit',compact('a'));
}
public function update(Request $req){
    DB::table('students')->where('id',$req->id)->update([
        // Dbname=>$req->formname 
        'studentname'=>$req->sname,
          'course'=>$req->course,
          'fee'=>$req->fee,

      ]); 
      return back()->with('success',"post updated sucessfully");

}
public function delete($id){
    DB::table('students')->where('id',$id)->delete();
    return back()->with('delete',"post deleted sucessfully");


}
}
