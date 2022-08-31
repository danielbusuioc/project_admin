<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CompaniesController extends Controller
{
    public function index()
    {
        if(auth()->guest()) {
            abort(403);
        }

        return view('companies.index', [
            'companies' => Company::simplePaginate(10)
        ]);
    }

    public function create()
    {
        if(auth()->guest()) {
            abort(403);
        }

        return view('companies.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'email',
            'logo' => '',
            'website' => ''
        ]);

        $attributes['logo'] = request()->file('logo')->store('logo');

        Company::create($attributes);

        return redirect('/dashboard');
    }

    public function view(Company $company)
    {
        if(auth()->guest()) {
            abort(403);
        }

        return view('companies.company', [
            'company' => $company
        ]);
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return back();
    }

    public function edit(Company $company)
    {
        if(auth()->guest()) {
            abort(403);
        }

        return view('companies.edit', [
            'company' => $company
        ]);
    }

    public function update(Company $company)
    {
        $attributes = $this->validateCompany($company);

        if (isset($attributes['logo'])) {
            $attributes['logo'] = request()->file('logo')->store('logo');
        }

        $company->update($attributes);

        return redirect('/companies');
    }

    protected function validateCompany(Company $company)
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'email',
            'logo' => 'image',
            'website' => ''
        ]);
    }
}
