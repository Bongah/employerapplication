<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::all();
        return view('dashboard')->with('employers', $employers);
    }

    
    public function create()
    {
        return view('employers.create');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        Employer::create($input);
        return redirect('./employers')->with('flash_message','Employee Added!');
    }

    
    public function show($id)
    {
        $employers = Employer::find($id);
        return view('employers.show')->with('employers', $employers);
    }

    
    public function edit($id)
    {
        $employers = Employer::find($id);
        return view('employers.edit')->with('employers', $employers);
    }

   
    public function update(Request $request, $id)
    {
      $employers = Employer::find($id);
      $input = $request->all();
      $employers->update($input);
      return redirect('employers')->with('flash_message', 'Employee Updated!');  
    }

   
    public function destroy($id)
    {
        Employer::destroy($id);
        return redirect('employers')->with('flash_message', 'Employee deleted');
    }
}
