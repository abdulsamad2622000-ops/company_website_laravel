<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'type',
        'name',
        'email',
        'phone',
        'company',
        'service',
        'service_slug',
        'budget',
        'message',
        'source_url',
        'ip_address',
        'user_agent',
    ];

    /** Human label for the lead type. */
    public function typeLabel(): string
    {
        return match ($this->type) {
            'contact' => 'Contact Form',
            'cta'     => 'About Page Enquiry',
            'enquiry' => 'Service Enquiry',
            default   => ucfirst((string) $this->type),
        };
    }
}
