<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    #[\Override]
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        DB::prohibitDestructiveCommands(
            $this->app->isProduction()
        );

        Model::shouldBeStrict(! $this->app->isProduction());
        Model::unguard();
        Model::automaticallyEagerLoadRelationships();

        Password::defaults(fn () => $this->app->isProduction() ? Password::min(8)->uncompromised() : null);

        Date::use(CarbonImmutable::class);
    }
}
