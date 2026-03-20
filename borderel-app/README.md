## Vereisten
* PHP 8.x
* Composer
* XAMPP / Docker / Laravel

## Installatie

1. Clone de repository
2. `composer install`
3. Kopieer `.env.example` naar `.env` en vul de waarden in:
   - `EVENT_API_BASE_URL`
   - `EVENT_API_ACCESS_KEY`
   - `EVENT_API_SECRET_KEY`
4. `php artisan key:generate`
5. `php artisan serve`

## Gebouwd met
* Laravel
* Spatie Laravel Data
* Copilot / Claude