<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $title = 'List';
        $employees = Employee::all();
        return view('employee.list', compact('title', 'employees'));
    }

    public function create()
    {
        $title = 'Add';
        return view('employee.add', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone_no = $request->phone_no;
        $employee->save();

        return redirect('employee')->with('success', 'Data successfully inserted!');
    }

    public function edit($id)
    {
        $title = 'Edit';
        $data = Employee::find($id);
        return view('employee.edit', compact('data', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required'
        ]);

        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone_no = $request->phone_no;
        $employee->save();

        return redirect('employee')->with('success', 'Data successfully updated!');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        if ($employee->delete()) {
            return redirect('employee')->with('success', 'Data successfully deleted!');
        }
    }

    public function view($id)
    {
        $title = 'View';
        $employee = Employee::findOrFail($id);
        return view('employee.view', compact('title','employee'));
    }
}
