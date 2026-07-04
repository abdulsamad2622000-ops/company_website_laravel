<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login — NovaStackhub</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    *{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
    body{background:linear-gradient(160deg,#eaf2ff,#f4f7fb);min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px;}
    .card{background:#fff;border:1px solid #e6ecf3;border-radius:18px;padding:38px;max-width:400px;width:100%;box-shadow:0 20px 50px rgba(15,23,42,.08);}
    h1{font-size:22px;color:#0f172a;font-weight:800;margin-bottom:6px;}
    p{color:#5a6b7e;font-size:14px;margin-bottom:24px;}
    label{display:block;font-size:13px;font-weight:600;color:#16263a;margin-bottom:8px;}
    input{width:100%;padding:14px;border:1px solid #e6ecf3;border-radius:11px;font-size:15px;background:#f8fafc;outline:none;}
    input:focus{border-color:#2563eb;background:#fff;}
    button{width:100%;margin-top:18px;background:#2563eb;color:#fff;border:none;border-radius:11px;padding:14px;font-weight:700;font-size:15px;cursor:pointer;}
    button:hover{background:#1e3a8a;}
    .err{background:#fee2e2;color:#b91c1c;padding:10px 14px;border-radius:10px;font-size:13px;margin-bottom:16px;}
  </style>
</head>
<body>
  <div class="card">
    <h1>Admin Panel</h1>
    <p>NovaStackhub — leads & subscribers</p>
    @if ($errors->any())<div class="err">{{ $errors->first() }}</div>@endif
    <form method="POST" action="{{ route('admin.login.post') }}">
      @csrf
      <label>Password</label>
      <input type="password" name="password" placeholder="Enter admin password" required autofocus>
      <button type="submit">Login &rarr;</button>
    </form>
  </div>
</body>
</html>