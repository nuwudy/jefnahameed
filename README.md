# Jefna Hameed — Clinical Psychology & Relationship Guidance Platform

A modern, empathetic, and high-converting web platform for **Jefna Hameed** (Clinical Psychologist & Family Counselor), specialized in relationship healing, couples therapy, and women's boundary empowerment.

- **Production Domain:** [jefnahameed.com](https://jefnahameed.com)
- **Repository:** [https://github.com/nuwudy/jefnahameed](https://github.com/nuwudy/jefnahameed)
- **Tech Stack:** Laravel 12 (TALL Stack: Tailwind CSS v4, Alpine.js, Laravel, Livewire v3/v4), SQLite/MySQL, Vite.
- **Target Deployment:** Hostinger VPS managed with CyberPanel & OpenLiteSpeed.

---

## 🌿 Visual & Brand Identity

- **Background Base:** `#F7F3EE` (Soft linen / warm beige)
- **Primary Brand & Headings:** `#3B4E3B` (Deep olive forest green)
- **Warm Accent & Highlights:** `#7A3528` (Terracotta / warm wine)
- **Card Surfaces:** `#FFFFFF` and `#FAF8F5` (`border-stone-200`)
- **Typography:**
  - Headings & Accents: `Playfair Display`, `Cormorant Garamond`, `Noto Serif Malayalam`
  - Body & UI: `Plus Jakarta Sans`

---

## ✨ Features & Architecture

1. **Hero Section & Brand Storytelling:**
   - 2-column responsive layout with credential pills (*M.Sc Clinical Psychology*, *1,500+ Sessions Guided*).
   - High-converting copy and Malayalam relationship nuance (*"ഭാര്യയും ഭർത്താവും — സ്നേഹം മനസ്സിലാക്കുമ്പോൾ ജീവിതം മനോഹരമാവും"*).
   - Direct CTA triggers to book confidential consultations and explore workshops.

2. **Featured Workshop / Masterclass:**
   - **"Avoid Toxic Relationships"** (A Practical Class for Women to Recognize, Avoid & Heal).
   - 5-part clinical curriculum covering red flags, boundary scripts, trauma bonds, and self-worth.
   - Interactive Livewire batch selector with instant seat reservation and pre-filled WhatsApp confirmation trigger.

3. **Counselling Services Grid:**
   - Family & Couple Counselling (*ഭാര്യയും ഭർത്താവും*)
   - 1-on-1 Clinical Therapy Sessions (CBT & Acceptance-based)
   - Women's Personal Growth & Boundary Coaching

4. **About the Psychologist:**
   - Clinical background, approach, and prominent quote callout: *"A healthy relationship adds value to your life, not drains you."*

5. **Why Choose Clinical Therapy:**
   - Direct comparison highlighting the clinical difference between casual advice and structured evidence-based psychotherapy.

6. **Transformation Stories & Testimonials:**
   - Verified patient reviews with bilingual English & Malayalam quotes and 5-star ratings.

7. **Interactive Livewire Components:**
   - `<livewire:book-consultation-modal />`: Modal popup for session booking with slot and mode pickers.
   - `<livewire:workshop-enrollment />`: Live registration component with batch selection.
   - `<livewire:contact-form />`: Real-time validated confidential contact form.
   - `<livewire:newsletter-form />`: Email capture for mindful notes.

8. **SEO & Accessibility:**
   - Full Schema.org JSON-LD structured data (`MedicalBusiness`, `Psychologist`, `Course`).
   - OpenGraph and Twitter Cards metadata.
   - Dynamic `/sitemap.xml` endpoint and `robots.txt`.

9. **Crisis & Safety Compliance:**
   - Prominent 24/7 mental health emergency helpline banner (*KIRAN 1800-599-0019*, *Tele-MANAS 14416*, *DISHA 1056*).

---

## 🚀 Local Development Setup

```bash
# 1. Clone repository
git clone https://github.com/nuwudy/jefnahameed.git
cd jefnahameed

# 2. Install PHP dependencies
composer install

# 3. Environment configuration
cp .env.example .env
php artisan key:generate

# 4. Run database migrations & seeders
php artisan migrate:fresh --seed

# 5. Install & build frontend assets
npm install
npm run build # or npm run dev for hot reload

# 6. Start development server
php artisan serve
```

---

## 🌐 CyberPanel & VPS Production Deployment

The project includes an automated deployment script at `bin/deploy.sh` tailored for CyberPanel and OpenLiteSpeed web servers.

### 1. Document Root Configuration
In CyberPanel:
- Navigate to **Websites** > **List Websites** > **Manage** `jefnahameed.com`.
- Ensure document root points to `/home/jefnahameed.com/public_html/public` (or use the included `.htaccess` redirect in the root folder).

### 2. Deploy Script Execution
```bash
chmod +x bin/deploy.sh
./bin/deploy.sh
```

### 3. Production Cache Commands
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
php artisan storage:link
```
