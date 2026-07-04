<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginForm()
    {
        if (session('admin_ok')) return redirect()->route('admin.leads');
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate(['password' => 'required']);

        if ($request->password === config('app.admin_password', env('ADMIN_PASSWORD'))) {
            session(['admin_ok' => true]);
            return redirect()->route('admin.leads');
        }

        return back()->withErrors(['password' => 'Ghalat password.']);
    }

    public function logout()
    {
        session()->forget('admin_ok');
        return redirect()->route('admin.login');
    }

    public function leads(Request $request)
    {
        if (!session('admin_ok')) return redirect()->route('admin.login');

        $type = $request->query('type', 'all');
        $q = Lead::query()->latest();

        if ($type === 'contact')       $q->whereIn('type', ['contact', 'cta']);
        elseif ($type === 'service')   $q->where('type', 'enquiry');
        elseif ($type === 'newsletter')$q->where('type', 'newsletter');

        $leads = $q->paginate(30)->withQueryString();

        $counts = [
            'all'        => Lead::count(),
            'contact'    => Lead::whereIn('type', ['contact', 'cta'])->count(),
            'service'    => Lead::where('type', 'enquiry')->count(),
            'newsletter' => Lead::where('type', 'newsletter')->count(),
        ];

        return view('admin.leads', compact('leads', 'type', 'counts'));
    }
}