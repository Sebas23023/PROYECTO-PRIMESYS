# Copilot Instructions: Software Landing Page (Laravel 12)

## Project Overview
This is a **Laravel 12 marketing landing page** for a software company (REA). It's a modern, lightweight web application focused on frontend presentation using Blade templates and Tailwind CSS with Vite build tooling. Currently a skeleton with placeholder pages—no controllers or models are yet implemented.

## Architecture Patterns

### Frontend Stack
- **Vite 7** with Laravel plugin for hot module reloading (HMR) during dev
- **Tailwind CSS 4** via `@tailwindcss/vite` plugin  
- **Blade Templates** for server-side rendering in [resources/views/](resources/views/)
- Entry point: [resources/css/app.css](resources/css/app.css) and [resources/js/app.js](resources/js/app.js)

### Backend Stack
- **Laravel 12** framework with PSR-4 autoloading
- **PHP 8.2+** required; configuration in [composer.json](composer.json)
- Routes currently defined as simple closures (not controllers) in [routes/web.php](routes/web.php)

### Asset Pipeline
- [vite.config.js](vite.config.js) ignores `storage/framework/views/` during watch to prevent rebuild loops
- Built assets → `public/build/` with `manifest.json` for asset versioning
- Fallback compiled Tailwind CSS embedded in [resources/views/welcome.blade.php](resources/views/welcome.blade.php) for non-Vite environments

## Development Workflow

### Quick Start
```bash
# Full setup (installs PHP & npm dependencies, generates .env, runs migrations, builds frontend)
composer setup

# Development: Starts 4 concurrent processes
composer dev
# Runs: Laravel server, queue listener, logs (pail), Vite dev server—all with color-coded output
```

### Individual Commands
- **Laravel dev server** → `php artisan serve` (default: http://localhost:8000)
- **Queue processing** → `php artisan queue:listen --tries=1 --timeout=0`
- **Live logs** → `php artisan pail --timeout=0` (new in Laravel 12)
- **Frontend dev** → `npm run dev` (Vite with HMR)
- **Build for production** → `npm run build` (Tailwind + JS minified to `public/build/`)

### Testing & Code Quality
```bash
# Run tests (PHPUnit with in-memory SQLite)
composer test

# Code formatting (Laravel Pint)
./vendor/bin/pint

# Generate IDE helpers for autocomplete
php artisan vendor:publish --tag=laravel-assets
```

## Routing Convention

**All current routes are simple closures in [routes/web.php](routes/web.php).** When adding functionality:
- Keep marketing routes as closures for simplicity
- Migrate to controllers (`app/Http/Controllers/`) if routes grow complex (>50 lines)
- Use named routes consistently: `.name('route-name')` for links

Current routes:
- `/` → `welcome` view (main landing page)
- `/servicios`, `/trabajo`, `/clientes`, `/contacto` → placeholder responses

## View & Styling Conventions

### Blade Template Structure
- [resources/views/welcome.blade.php](resources/views/welcome.blade.php): Main landing page with Tailwind classes
- Uses `@vite()` directive for CSS/JS when dev server or built assets exist
- Includes fallback inline Tailwind if neither exists (production without build step)
- Dark mode support via `dark:` Tailwind prefix and `prefers-color-scheme` media query

### Class Naming  
- Use Tailwind's utility-first approach (no custom CSS classes in [resources/css/app.css](resources/css/app.css) yet)
- Responsive prefixes: `lg:`, `md:` for breakpoints
- Dark mode: `dark:` for CSS variable overrides

## Configuration Files

| File | Purpose |
|------|---------|
| [.env.example](.env.example) | Template for environment variables (copy to `.env` during setup) |
| [config/app.php](config/app.php) | App name, debug mode, timezone; pulled from `.env` |
| [config/database.php](config/database.php) | SQLite for local dev, migrations in [database/migrations/](database/migrations/) |

## Testing

**PHPUnit configuration** in [phpunit.xml](phpunit.xml):
- Unit tests: [tests/Unit/](tests/Unit/)
- Feature tests: [tests/Feature/](tests/Feature/)
- Test DB: in-memory SQLite (`:memory:`)
- Test user factory: [database/factories/UserFactory.php](database/factories/UserFactory.php)

Run: `composer test`

## Key Dependencies

| Package | Version | Purpose |
|---------|---------|---------|
| laravel/framework | ^12.0 | Core framework |
| laravel/tinker | ^2.10 | Interactive shell (`php artisan tinker`) |
| vite | ^7.0 | Frontend bundler |
| tailwindcss | ^4.0 | Utility CSS framework |
| phpunit/phpunit | ^11.5 | Testing framework |
| laravel/sail | ^1.41 | Docker dev environment (optional) |

## Common Patterns to Avoid

❌ **Don't:**
- Add custom CSS classes; use Tailwind utilities instead
- Create controllers for simple marketing pages
- Use database queries without migrations first

✅ **Do:**
- Keep Blade templates focused on presentation
- Use `config()` and `env()` for configuration access
- Write routes as closures for simple pages, controllers for complex logic
- Add migrations for any DB schema changes

## When Adding Features

1. **New pages**: Create `.blade.php` file in [resources/views/](resources/views/), add route in [routes/web.php](routes/web.php)
2. **Database changes**: Create migration in [database/migrations/](database/migrations/), run `php artisan migrate`
3. **Styling**: Use Tailwind utilities in Blade templates or `resources/css/app.css` for custom components
4. **Frontend logic**: Add JavaScript modules to `resources/js/`, import in [resources/js/app.js](resources/js/app.js)
5. **Tests**: Add test file in [tests/Feature/](tests/Feature/) or [tests/Unit/](tests/Unit/), run `composer test`
