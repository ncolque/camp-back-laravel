<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return response()->json(
            [
                'message' => 'Listado de todas las empresas',
                'data' => $companies,
                'status' => Response::HTTP_OK
            ],
            Response::HTTP_OK
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $company = Company::create($request->all());
        return response()->json(
            [
                'message' => 'La empresa ha sido creado correctamente',
                'data' => $company,
                'status' => Response::HTTP_CREATED
            ],
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return response()->json(
            [
                'message' => 'Empresa mostrado correctamente',
                'data' => $company,
                'status' => Response::HTTP_OK
            ],
            Response::HTTP_OK
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->update($request->all());
        $companyUpdate = Company::findOrFail($company->id);
        return response()->json(
            [
                'message' => 'La empresa ha sido actualizado correctamente',
                'data' => $companyUpdate,
                'status' => Response::HTTP_OK
            ],
            Response::HTTP_OK
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(
            [
                'message' => 'La empresa ha sido eliminado correctamente',
                'data' => $company,
                'status' => Response::HTTP_OK
            ],
            Response::HTTP_OK
        );
    }
}
