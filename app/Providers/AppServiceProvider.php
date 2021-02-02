<?php

namespace App\Providers;

use App\Models\Module;
use App\Models\Quotation;
use App\Models\RequestForQuotationPending;
use App\Models\Review;
use App\Observers\ModuleObserver;
use App\Observers\QuotationObserver;
use App\Observers\RequestForQuotationPendingObserver;
use App\Observers\ReviewObserver;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        App::setLocale('en');
        Schema::defaultStringLength(191);
        Module::observe(ModuleObserver::class);
        Review::observe(ReviewObserver::class);
        Quotation::observe(QuotationObserver::class);
        RequestForQuotationPending::observe(RequestForQuotationPendingObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
