<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leads — NovaStackhub Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    *{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
    body{background:#f4f7fb;color:#16263a;}
    .top{background:#fff;border-bottom:1px solid #e6ecf3;padding:16px 24px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:10px;}
    .top h1{font-size:19px;font-weight:800;color:#0f172a;}
    .top h1 span{color:#2563eb;}
    .logout{background:#f4f7fb;border:1px solid #e6ecf3;color:#16263a;padding:8px 16px;border-radius:9px;font-size:13px;font-weight:600;cursor:pointer;text-decoration:none;}
    .logout:hover{background:#eaf2ff;color:#1e3a8a;}
    .wrap{max-width:1200px;margin:26px auto;padding:0 20px;}
    .tabs{display:flex;gap:10px;margin-bottom:20px;flex-wrap:wrap;}
    .tab{background:#fff;border:1px solid #e6ecf3;border-radius:11px;padding:10px 18px;font-size:14px;font-weight:600;color:#5a6b7e;text-decoration:none;display:flex;gap:8px;align-items:center;}
    .tab:hover{border-color:#2563eb;color:#1e3a8a;}
    .tab.active{background:#2563eb;color:#fff;border-color:#2563eb;}
    .tab .badge{background:rgba(0,0,0,.08);border-radius:20px;padding:1px 9px;font-size:12px;}
    .tab.active .badge{background:rgba(255,255,255,.25);}
    .card{background:#fff;border:1px solid #e6ecf3;border-radius:16px;overflow:hidden;box-shadow:0 12px 30px rgba(15,23,42,.05);}
    table{width:100%;border-collapse:collapse;}
    th{background:#f8fafc;text-align:left;padding:14px 16px;font-size:12px;text-transform:uppercase;letter-spacing:.5px;color:#5a6b7e;border-bottom:1px solid #e6ecf3;}
    td{padding:14px 16px;border-bottom:1px solid #f0f3f8;font-size:14px;vertical-align:top;}
    tr:hover td{background:#f8fafc;}
    .pill{display:inline-block;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:700;}
    .p-contact{background:#dbeafe;color:#1e40af;}
    .p-service{background:#dcfce7;color:#166534;}
    .p-news{background:#fef3c7;color:#92400e;}
    .email a{color:#2563eb;text-decoration:none;}
    .muted{color:#94a3b8;}
    .msg{max-width:340px;color:#475569;}
    .empty{padding:50px;text-align:center;color:#94a3b8;}
    .pg{display:flex;gap:6px;justify-content:center;margin-top:20px;}
    .pg a,.pg span{padding:8px 13px;border-radius:9px;border:1px solid #e6ecf3;background:#fff;color:#16263a;text-decoration:none;font-size:13px;}
    .pg .active span{background:#2563eb;color:#fff;border-color:#2563eb;}
    @media(max-width:768px){ table{display:block;overflow-x:auto;white-space:nowrap;} }
  </style>
</head>
<body>
  <div class="top">
    <h1>NovaStack<span>hub</span> — Admin</h1>
    <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="logout" type="submit"><i class="bi bi-box-arrow-right"></i> Logout</button></form>
  </div>

  <div class="wrap">
    <div class="tabs">
      <a class="tab {{ $type==='all'?'active':'' }}" href="{{ route('admin.leads') }}"><i class="bi bi-collection"></i> All <span class="badge">{{ $counts['all'] }}</span></a>
      <a class="tab {{ $type==='contact'?'active':'' }}" href="{{ route('admin.leads',['type'=>'contact']) }}"><i class="bi bi-chat-dots"></i> Contact <span class="badge">{{ $counts['contact'] }}</span></a>
      <a class="tab {{ $type==='service'?'active':'' }}" href="{{ route('admin.leads',['type'=>'service']) }}"><i class="bi bi-briefcase"></i> Service Requests <span class="badge">{{ $counts['service'] }}</span></a>
      <a class="tab {{ $type==='newsletter'?'active':'' }}" href="{{ route('admin.leads',['type'=>'newsletter']) }}"><i class="bi bi-envelope-paper"></i> Newsletter <span class="badge">{{ $counts['newsletter'] }}</span></a>
    </div>

    <div class="card">
      <table>
        <thead>
          <tr><th>Date</th><th>Type</th><th>Name</th><th>Email</th><th>Service</th><th>Message</th></tr>
        </thead>
        <tbody>
          @forelse ($leads as $lead)
            <tr>
              <td class="muted">{{ $lead->created_at->format('d M Y') }}<br><small>{{ $lead->created_at->format('h:i A') }}</small></td>
              <td>
                @if($lead->type==='newsletter')<span class="pill p-news">Newsletter</span>
                @elseif($lead->type==='enquiry')<span class="pill p-service">Service</span>
                @else<span class="pill p-contact">Contact</span>@endif
              </td>
              <td>{{ $lead->name ?: '—' }}</td>
              <td class="email"><a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a></td>
              <td>{{ $lead->service ?: ($lead->service_slug ?: '—') }}</td>
              <td class="msg">{{ $lead->message ?: '—' }}</td>
            </tr>
          @empty
            <tr><td colspan="6" class="empty"><i class="bi bi-inbox" style="font-size:32px;"></i><br>Koi entry nahi mili.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="pg">{!! $leads->links() !!}</div>
  </div>
</body>
</html>