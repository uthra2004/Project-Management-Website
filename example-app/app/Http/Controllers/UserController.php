<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Users = Users::all();
       return view('index',compact('Users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function save(Request $request)
     {
        print_r($request->input());
     }
    public function store(Request $request)
    {
         $request->validate([
           'name' => 'required',
           'project'=>'required',
           'date' => 'required',
           'process' => 'required',
           'status'=>'required',
       ]);
        $data = $request->except('_token');




       $Users =new Users;

        $Users->name = $data['name'];
        $Users->project = $data['project'];
        $Users->date = $data['date'];
        $Users->process = $data['process'];
        $Users->status = $data['status'];
        

        $Users->save();
     
       return redirect()-> route('users.index')->withMessage('created successfully');



        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    
    {
        $Users = Users::find($id);
        return view('edit',compact('Users'));
        $data = $request->all();
        $Users->update($data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response

     */
    public function update(Request $request, Users $Users)
    {
       
            $request->validate([
                'name' => 'required',
                'project'=>'required',
                'date' => 'required',
                'process' => 'required',
                'status'=>'required',
        ]);
        
        $data = $request->all();


        $Users->update($data);
        
        return redirect()->route('users.edit',$Users->id)
        ->withSuccess(' details updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $Users)
    {
        $Users->delete();
        return redirect()->route('users.index')
        ->withSuccess(' deleted successfully');
    }
}
    /** public function update(Request $request, $id)
    
    *{
        
    *}
    
   
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    *public function destroy($id)
   * {
  *      //
 *   }
*}
*/