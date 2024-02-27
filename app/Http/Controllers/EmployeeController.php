<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    public function create() {
        return view('employees.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $newEmployee = Employee::create($data);

        return redirect(route('employee.index'));
    }

    public function edit(employee $employee) {
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Employee $employee, Request $request) {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required'
        ]);

        $employee->update($data);

        return redirect(route('employee.index'))->with('success', 'Employee Updated Successfully');
    }

    public function delete(Employee $employee) {
        $employee->delete();

        return redirect(route('employee.index'))->with('success', 'Employee Deleted Successfully');
    }
}
