<?php

namespace App\Http\Controllers;

use App\Models\CompanyCategory;
use App\Models\CompanyRegistration;
use Illuminate\Http\Request;

class CompanySearchController extends Controller
{
    public function search(Request $request)
    {
        $query = CompanyRegistration::where('is_approved', 1);

        // Filter by company name if provided
        if ($request->filled('company_name')) {
            $query->where('name', 'LIKE', '%' . $request->company_name . '%');
        }

        // Filter by category if selected
        if ($request->filled('categories')) {
            $query->where('category_id', function ($q) use ($request) {
                $q->select('id')
                  ->from('company_categories')
                  ->where('category_name', $request->categories);
            });
        }

        // Fetch results
        $companies = $query->paginate(9);
        $company_categories = CompanyCategory::all();

        return view('frontend.pages.companies.index', compact('companies', 'company_categories'));
    }
}
