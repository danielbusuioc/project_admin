<?php

namespace App\Http\Controllers;

use App\Mail\Register;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class EmployeesController extends Controller
{
    public function index()
    {
        if(auth()->guest()) {
            abort(403);
        }

        return view('employees.index', [
            'employees' =>Employee::all()
        ]);
    }

    public function create()
    {
        if(auth()->guest()) {
            abort(403);
        }

        return view('employees.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'email' => 'email',
            'phone' => ''
        ]);

        Employee::create($attributes);

        Mail::to('daniel.busuioc@neovision.dev')->send(new Register());

        return redirect('/dashboard');
    }

    public function view(Employee $employee)
    {
        if(auth()->guest()) {
            abort(403);
        }

        return view('employees.employee', [
            'employee' => $employee
        ]);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back();
    }

    public function edit(Employee $employee)
    {
        if(auth()->guest()) {
            abort(403);
        }

        return view('employees.edit', [
            'employee' => $employee
        ]);
    }

    public function update(Employee $employee)
    {
        $attributes = $this->validateEmployee($employee);

        $employee->update($attributes);

        return redirect('/employees');
    }

    protected function validateEmployee(Employee $employee)
    {
        return request()->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'category_id' => ['required', Rule::exists('companies', 'id')],
            'email' => 'email',
            'phone' => ''
        ]);
    }
}
