# Laravel Vue Starter Kit

A clean, modern and opinionated Laravel starter kit built for speed, maintainability, and AI-assisted development. This starter kit combines the latest versions of Laravel with Inertia.js and Vue, enforcing best practices through strict TDD and the Action pattern.

## Getting started

```bash
laravel new APPNAME --using=michaelsieminski/start-vue
```

## Philosophy

This starter kit is designed with these core principles:

1. **Test-Driven Development (TDD)**: Every feature starts with a test. No exceptions.
2. **Action Pattern**: Business logic lives in dedicated Action classes, keeping controllers thin and logic reusable.

These conventions are enforced through comprehensive AI instructions, making this the perfect starter kit for AI-assisted development with Claude Code or OpenCode.

## Tech Stack

### Backend
- **PHP 8.4** - Latest PHP with modern syntax and performance
- **Laravel 12** - Latest Laravel with streamlined structure
- **Inertia.js** - Server-driven SPA framework with advanced features
- **Laravel Boost** - AI-powered development tools for Laravel

### Frontend
- **Vue 3** - Progressive JavaScript framework
- **Tailwind CSS 4** - Utility-first CSS with CSS-first configuration
- **Vite 7** - Next generation frontend tooling

### Development Tools
- **Bun** - The fastest frontend build tool
- **Pest v4** - Modern testing framework with browser testing support
- **Laravel Pint** - Opinionated code formatter
- **Rector** - Automated code refactoring
- **Biome** - Fast JavaScript/TypeScript formatter and linter
  - Note: Might consider oxc as soon as the Formatter is stable
- **Laravel Herd** - Native Laravel development environment

### Laravel specific configurations
- **Prohibit destructive commands** - Prevent accidental data loss in Prod
- **Model should be strict** – Prevent lazy loading and accessing missing attributes locally
- **Model unguard** – Remove the need for mass assignment protection in models
- **Automatic eagerload relationships** – Reduce N+1 queries automatically
- **Safer Password defaults** – Minimum of 8 characters & check if password is breached in Prod
- **Use CarbonImmutable Dates** - Use immutable dates everywhere

## Project Structure

```
app/
├── Actions/          # Business logic (Action pattern)
├── Http/
│   └── Controllers/  # Thin controllers (orchestration only)
├── Models/           # Eloquent models
└── Providers/        # Service providers

resources/
├── scripts/          # All TypeScript Files
│   pages/            # Inertia Vue Pages
└── css/              # Tailwind CSS

tests/
├── Feature/          # Feature tests
├── Unit/             # Unit tests
└── Browser/          # Browser tests
```
