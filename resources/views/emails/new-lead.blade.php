<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lead — NovaStackHub</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f9; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color:#1a2e42;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f9; padding:24px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 4px 24px rgba(11,26,38,0.08);">

                    {{-- Header --}}
                    <tr>
                        <td style="background:#0b1a26; padding:28px 32px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="font-size:22px; font-weight:800; color:#ffffff; letter-spacing:-0.3px;">
                                        Nova<span style="color:#00c8ff;">Stack</span>Hub
                                    </td>
                                    <td align="right" style="font-size:12px; color:#8899aa; text-transform:uppercase; letter-spacing:1px;">
                                        New Lead
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Accent bar --}}
                    <tr><td style="height:4px; background:linear-gradient(90deg,#00c8ff,#1d4ed8);"></td></tr>

                    {{-- Title --}}
                    <tr>
                        <td style="padding:28px 32px 8px;">
                            <span style="display:inline-block; background:rgba(0,200,255,0.12); color:#0b6fb3; font-size:12px; font-weight:700; padding:5px 12px; border-radius:20px; text-transform:uppercase; letter-spacing:0.5px;">
                                {{ $lead->typeLabel() }}
                            </span>
                            <h1 style="margin:14px 0 4px; font-size:20px; color:#0b1a26;">{{ $lead->name }}</h1>
                            <p style="margin:0; font-size:14px; color:#5a6b7b;">
                                <a href="mailto:{{ $lead->email }}" style="color:#1d4ed8; text-decoration:none;">{{ $lead->email }}</a>
                            </p>
                        </td>
                    </tr>

                    {{-- Details table --}}
                    <tr>
                        <td style="padding:20px 32px 8px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px;">
                                @if($lead->phone)
                                <tr>
                                    <td style="padding:10px 0; width:130px; color:#8899aa; font-weight:600; border-bottom:1px solid #eef1f4; vertical-align:top;">Phone</td>
                                    <td style="padding:10px 0; color:#1a2e42; border-bottom:1px solid #eef1f4;">{{ $lead->phone }}</td>
                                </tr>
                                @endif
                                @if($lead->company)
                                <tr>
                                    <td style="padding:10px 0; color:#8899aa; font-weight:600; border-bottom:1px solid #eef1f4; vertical-align:top;">Company</td>
                                    <td style="padding:10px 0; color:#1a2e42; border-bottom:1px solid #eef1f4;">{{ $lead->company }}</td>
                                </tr>
                                @endif
                                @if($lead->service)
                                <tr>
                                    <td style="padding:10px 0; color:#8899aa; font-weight:600; border-bottom:1px solid #eef1f4; vertical-align:top;">Service</td>
                                    <td style="padding:10px 0; color:#1a2e42; border-bottom:1px solid #eef1f4;">{{ $lead->service }}</td>
                                </tr>
                                @endif
                                @if($lead->budget)
                                <tr>
                                    <td style="padding:10px 0; color:#8899aa; font-weight:600; border-bottom:1px solid #eef1f4; vertical-align:top;">Budget</td>
                                    <td style="padding:10px 0; color:#1a2e42; border-bottom:1px solid #eef1f4;">{{ $lead->budget }}</td>
                                </tr>
                                @endif
                            </table>
                        </td>
                    </tr>

                    {{-- Message --}}
                    @if($lead->message)
                    <tr>
                        <td style="padding:16px 32px 8px;">
                            <p style="margin:0 0 6px; font-size:12px; color:#8899aa; font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">Message</p>
                            <div style="background:#f7f9fb; border:1px solid #eef1f4; border-radius:8px; padding:16px; font-size:14px; line-height:1.6; color:#1a2e42; white-space:pre-wrap;">{{ $lead->message }}</div>
                        </td>
                    </tr>
                    @endif

                    {{-- Meta --}}
                    <tr>
                        <td style="padding:20px 32px 28px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:12px; color:#8899aa;">
                                <tr>
                                    <td style="padding-top:14px; border-top:1px solid #eef1f4;">
                                        Received {{ $lead->created_at?->format('d M Y, h:i A') }}
                                        @if($lead->source_url)
                                            <br>From: <span style="color:#5a6b7b;">{{ $lead->source_url }}</span>
                                        @endif
                                        @if($lead->ip_address)
                                            <br>IP: {{ $lead->ip_address }}
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="background:#0b1a26; padding:18px 32px; text-align:center; font-size:12px; color:#8899aa;">
                            Reply directly to this email to respond to {{ $lead->name }}.
                        </td>
                    </tr>

                </table>
                <p style="font-size:11px; color:#aab4be; margin:16px 0 0;">NovaStackHub &middot; Automated lead notification</p>
            </td>
        </tr>
    </table>
</body>
</html>
