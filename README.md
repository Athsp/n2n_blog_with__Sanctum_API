<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel Blog Platform - README</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 2rem; line-height: 1.6; }
    h1, h2, h3 { color: #2c3e50; }
    code { background: #f4f4f4; padding: 2px 5px; border-radius: 4px; }
    pre { background: #f4f4f4; padding: 10px; border-radius: 5px; overflow-x: auto; }
    table { border-collapse: collapse; width: 100%; margin: 1rem 0; }
    th, td { border: 1px solid #ddd; padding: 8px; }
    th { background-color: #f8f8f8; }
  </style>
</head>
<body>

<h1>Laravel Blog Platform (REST API + Web)</h1>

<p>This is a simple Laravel 11-based Blog Platform that includes:</p>
<ul>
  <li>User Authentication (Register, Login, Logout)</li>
  <li>REST API using Laravel Sanctum</li>
  <li>Role-based Admin Moderation</li>
  <li>Web UI with Blade Views</li>
  <li>Post CRUD</li>
  <li>Status-based post publishing</li>
  <li>User activation/deactivation</li>
</ul>

<h2>🛠️ Tech Stack</h2>
<ul>
  <li>Laravel 11</li>
  <li>Sanctum (API Token Auth)</li>
  <li>MySQL</li>
  <li>Blade (Web UI)</li>
  <li>Laravel Migrations, Seeders</li>
  <li>Optional: PHPUnit or Pest</li>
</ul>

<h2>📦 Installation</h2>
<pre><code>git clone https://github.com/your-username/laravel-blog-api.git
cd laravel-blog-api
composer install
cp .env.example .env
php artisan key:generate

# Set your DB in .env
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate --seed
php artisan serve
</code></pre>

<h2>🔐 Authentication</h2>
<p>We use <strong>Laravel Sanctum</strong> for API token-based auth.</p>

<h3>Register (Public)</h3>
<code>POST /api/register</code>
<pre><code>{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password"
}</code></pre>

<h3>Login (Public)</h3>
<code>POST /api/login</code>
<pre><code>{
  "email": "john@example.com",
  "password": "password"
}</code></pre>
<p>Returns token:</p>
<code>Authorization: Bearer &lt;token&gt;</code>

<h2>📄 API Routes</h2>
<table>
  <thead>
    <tr>
      <th>Method</th>
      <th>Endpoint</th>
      <th>Auth</th>
      <th>Description</th>
    </tr>
  </thead>
  
</table>
<p><em>* Admin-only via middleware or policy.</em></p>

<h2>🌐 Web Routes</h2>
<ul>
  <li><code>/login</code></li>
  <li><code>/register</code></li>
  <li><code>/posts</code> (requires login)</li>
</ul>

<h2>🧪 Testing</h2>
<pre><code>php artisan test
# or if using Pest:
vendor/bin/pest
</code></pre>

<h2>🔑 Admin Account</h2>
<pre><code>
Email: admin@example.com
Password: password
Role: admin
</code></pre>



</body>
</html>
