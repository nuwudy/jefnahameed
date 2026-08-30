#!/usr/bin/env bash
# ==============================================================================
# CyberPanel & OpenLiteSpeed / VPS Deployment Script for Jefna Hameed Platform
# ==============================================================================

set -e

echo "🚀 Starting Deployment for jefnahameed.com..."

# 1. Maintenance Mode (optional during migrations)
# php artisan down --render="errors::503" --secret="jh-deploy-2026"

# 2. Pull latest codebase
echo "📥 Pulling latest git repository commits..."
git pull origin main

# 3. Install Composer dependencies
echo "📦 Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# 4. Run database migrations
echo "🗄️ Running database migrations..."
php artisan migrate --force

# 5. Build frontend Vite assets
echo "🎨 Building production assets with Vite..."
npm ci || npm install
npm run build

# 6. Optimize Caches
echo "⚡ Priming Laravel caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# 7. Create storage link if not present
php artisan storage:link || true

# 8. Set correct file permissions for OpenLiteSpeed / CyberPanel
echo "🔒 Securing permissions..."
chmod -R 775 storage bootstrap/cache

# 9. Restart OpenLiteSpeed PHP process
if [ -f /usr/local/lsws/bin/lswsctrl ]; then
    echo "🔄 Reloading OpenLiteSpeed web server..."
    touch /tmp/lshttpd/restart.txt || true
fi

# 10. Exit maintenance mode
# php artisan up

echo "✅ Deployment completed successfully for jefnahameed.com!"
