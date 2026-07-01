<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Mail\NewLeadMail;
use App\Models\Lead;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(StoreLeadRequest $request)
    {
        $data = $request->safe()->except('website');

        $lead = Lead::create(array_merge($data, [
            'source_url' => $request->headers->get('referer'),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 255),
        ]));

        // Notify the team via Brevo SMTP. Never let a mail failure break the UX.
        $to = config('leads.notification_to') ?: config('mail.from.address');

        if ($to) {
            try {
                Mail::to($to)->send(new NewLeadMail($lead));
            } catch (\Throwable $e) {
                Log::error('Lead notification email failed: '.$e->getMessage());
            }
        }

        return back()
            ->with('lead_success', 'Thank you! Your message has been received — we will get back to you within 24 hours.')
            ->withFragment('contact');
    }
}
