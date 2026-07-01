# NovaStackHub — Laravel 12 Setup Guide

Yeh aapki static company website ka **Laravel 12** version hai. Saari pages ab
server-rendered hain, Services aur Industries ka data PHP arrays se aata hai, aur
forms ab **real backend** (validation + database save + Brevo email) use karti hain.

> **Delivery model:** Yeh ZIP ek *overlay* hai — sirf app-specific files. Aap ek
> fresh Laravel 12 project banayenge, phir yeh files uske upar copy karenge.
> Is se Laravel ka core/version aapke control mein rehta hai.

---

## 1. Fresh Laravel 12 project banayein

```bash
cd /development
composer create-project laravel/laravel apply.novastackhub
# ya agar aap "laravel new" CLI use karte hain:
# laravel new apply.novastackhub
```

> Laravel 11 ke saath Composer security advisory ka issue tha — isliye **Laravel 12**
> hi use karein (composer create-project by default 12 deta hai).

---

## 2. Overlay files copy karein

Is ZIP ko extract karke saara content fresh project ke andar copy kar dein
(existing files overwrite ho jayenge — yeh expected hai):

```bash
# ZIP extract karne ke baad, uske andar se:
cp -R novastackhub-laravel/. /development/apply.novastackhub/
```

Yeh in files ko place karta hai:

```
app/Data/services.php          ← 30 services ka data
app/Data/industries.php        ← 40 industries ka data
app/Support/Catalog.php        ← data access helper
app/Models/Lead.php            ← leads model
app/Http/Controllers/          ← Page, Service, Industry, Lead controllers
app/Http/Requests/StoreLeadRequest.php
app/Mail/NewLeadMail.php
config/leads.php
database/migrations/...create_leads_table.php
routes/web.php                 ← saare routes
resources/views/               ← saari blade pages + layout + email
public/                        ← css, js, img, assets, images
.env.example
```

---

## 3. Dependencies + app key

```bash
cd /development/apply.novastackhub
composer install
cp .env.example .env
php artisan key:generate
```

---

## 4. `.env` configure karein

`.env` khol kar yeh sections set karein:

### Database (MySQL)
```env
DB_DATABASE=novastackhub
DB_USERNAME=novastack
DB_PASSWORD=your_db_password_here
```

### Brevo SMTP (email notifications)
Brevo dashboard → **SMTP & API → SMTP** se credentials lein:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp-relay.brevo.com
MAIL_PORT=587
MAIL_USERNAME=your_brevo_login@example.com   # Brevo login email
MAIL_PASSWORD=your_brevo_smtp_key            # Brevo "SMTP key" (account password NAHI)
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@novastackhub.com"
```

### Lead notifications kahan aayein
```env
LEAD_NOTIFY_TO=info@novastackhub.com
```
> Khali chhoda to `MAIL_FROM_ADDRESS` pe chali jayegi.

---

## 5. Migrate (database tables banayein)

```bash
php artisan migrate
```

Yeh `leads` table banata hai (saath hi Laravel ki default sessions/cache/jobs
tables, kyunki `.env` mein in ke liye `database` driver set hai).

---

## 6. Default welcome page hatayein (optional)

Hamara `routes/web.php` `/` ko home page pe point karta hai, to default
`welcome.blade.php` use nahi hoti. Chahein to delete kar dein:

```bash
rm -f resources/views/welcome.blade.php
```

---

## 7. Test karein

```bash
php artisan serve
```
Browser mein `http://127.0.0.1:8000` — saari pages check karein:

- `/` — Home
- `/about` — About
- `/pricing` — Pricing
- `/services/custom-software-development` — koi bhi service slug (slugs `app/Data/services.php` mein hain)
- `/industries/retail-and-e-commerce` — industry website demo
- `/industries/retail-and-e-commerce/erp` — industry ERP demo

Form test: Home ki contact form bharein → submit → success message dikhna chahiye,
`leads` table mein row aani chahiye, aur `LEAD_NOTIFY_TO` pe email aani chahiye.

> **Tip:** Email turant test karne ke liye `.env` mein `MAIL_MAILER=log` set kar ke
> dekh sakte hain — email `storage/logs/laravel.log` mein chali jayegi (SMTP ke
> bina). Phir wapas `smtp` kar dein.

---

## 8. Forms ka behaviour (zaroori note)

| Form | Page | Type | Backend |
|------|------|------|---------|
| Contact | Home | `contact` | ✅ Real — DB + email |
| CTA enquiry | About | `cta` | ✅ Real — DB + email |
| Service enquiry | Service detail | `enquiry` | ✅ Real — DB + email (service slug ke saath) |
| Demo contact | Industry website/erp demo | — | ❌ Cosmetic (toast only) |

> **Demo pages ki contact form jaan-bujh kar cosmetic rakhi gayi hai** — yeh us
> *fictional demo product* ko represent karti hai (restaurant/ERP wagaira), aapki
> apni leads nahi. Agar baad mein in ko bhi real karna ho, to inhe `route('leads.store')`
> pe POST karwa dein (home form ki tarah `@csrf` + hidden `type` + `name` attributes
> add kar ke). Bata dijiyega, main kar dunga.

Forms mein ek hidden **honeypot** field (`website`) bhi hai — spam bots ke liye.
Agar woh bhar gaya to submission silently reject ho jati hai.

---

## 9. Production deploy (VPS — Nginx + HTTPS)

Aapke existing setup (`/development/apply.novastackhub`, Nginx, SSL) ke hisab se:

```bash
# Production optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Permissions (storage + cache likhne ke liye)
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache
```

Nginx ka `root` `public/` folder pe point hona chahiye, aur `.env` mein:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://apply.novastackhub.com
```

> Jab bhi `.env` ya routes/config change karein, dobara `php artisan config:cache`
> aur `route:cache` chala lein (warna purani cached values chalti rahengi).

---

## 10. GitHub push

```bash
git init        # agar naya repo hai
git add .
git commit -m "Laravel 12 conversion of NovaStackHub website"
git remote add origin https://github.com/abdulsamad2622000-ops/apply.novastackhub.git
git push -u origin main
```

> `.env` kabhi push na karein — `.gitignore` mein already excluded hai. Sirf
> `.env.example` repo mein jaati hai.

---

## Data update karna (future)

- **Service add/edit:** `app/Data/services.php` mein array entry edit karein
  (har service ka apna `slug` hai — URL wahi banta hai).
- **Industry add/edit:** `app/Data/industries.php` edit karein.
- Koi database/admin panel ki zaroorat nahi — yeh content PHP arrays mein hai,
  fast aur version-controlled.

---

Koi bhi step pe atak jayein to bata dijiyega. 🚀
