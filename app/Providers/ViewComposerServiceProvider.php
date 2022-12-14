<?php

namespace App\Providers;

use App\Models\ContactQuery;
use Illuminate\Support\Facades\View;
use App\Models\SiteSetting;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeAdminPages();
        $site_settings = SiteSetting::first();
        $contactQueriesCount = ContactQuery::count();
        View::share(['setting' => $site_settings, 'contactQueriesCount' => $contactQueriesCount]);
    }

    /**
     * Compose the admin pages
     *
     * e-g: admin page titles etc.
     */
    private function composeAdminPages()
    {
        /*
         * Dashboard
         */
        view()->composer('admin.dashboard.index', function ($view) {
            $view->with(['pageTitle' => 'Dashboard']);
        });



        /*
         * locations
         */

        view()->composer('admin.locations.index', function ($view) {
            $view->with(['pageTitle' => 'locations List']);
        });
        view()->composer('admin.locations.create', function ($view) {
            $view->with(['pageTitle' => 'Add locations']);
        });
        view()->composer('admin.locations.show', function ($view) {
            $view->with(['pageTitle' => 'Show locations']);
        });
        view()->composer('admin.locations.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit locations']);
        });

        /*
         * Administrators
         */
        view()->composer('admin.administrators.index', function ($view) {
            $view->with(['pageTitle' => 'Admin Users List']);
        });
        view()->composer('admin.administrators.create', function ($view) {
            $view->with(['pageTitle' => 'Add Admin User']);
        });
        view()->composer('admin.administrators.show', function ($view) {
            $view->with(['pageTitle' => 'Show Admin User']);
        });
        view()->composer('admin.administrators.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Admin User']);
        });

        /*
         * Pages
         */
        view()->composer('admin.pages.index', function ($view) {
            $view->with(['pageTitle' => 'Page List']);
        });
        view()->composer('admin.pages.create', function ($view) {
            $view->with(['pageTitle' => 'Add Page']);
        });
        view()->composer('admin.pages.show', function ($view) {
            $view->with(['pageTitle' => 'Show Page']);
        });
        view()->composer('admin.pages.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Page']);
        });

        /*
         * teams
         */
        view()->composer('admin.teams.index', function ($view) {
            $view->with(['pageTitle' => 'Teams List']);
        });
        view()->composer('admin.teams.create', function ($view) {
            $view->with(['pageTitle' => 'Add Team']);
        });
        view()->composer('admin.teams.show', function ($view) {
            $view->with(['pageTitle' => 'Show Team']);
        });
        view()->composer('admin.teams.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Team']);
        });

         /*
         * blogs
         */
        view()->composer('admin.blogs.index', function ($view) {
            $view->with(['pageTitle' => 'Blogs List']);
        });
        view()->composer('admin.blogs.create', function ($view) {
            $view->with(['pageTitle' => 'Add Blog']);
        });
        view()->composer('admin.blogs.show', function ($view) {
            $view->with(['pageTitle' => 'Show Blog']);
        });
        view()->composer('admin.blogs.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Blog']);
        });

        /*
         * Careers
         */
        view()->composer('admin.careers.index', function ($view) {
            $view->with(['pageTitle' => 'Careers List']);
        });
        view()->composer('admin.careers.create', function ($view) {
            $view->with(['pageTitle' => 'Add Career']);
        });
        view()->composer('admin.careers.show', function ($view) {
            $view->with(['pageTitle' => 'Show Career']);
        });
        view()->composer('admin.careers.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Career']);
        });

        /*
         * Career Queries
         */
        view()->composer('admin.career_queries.index', function ($view) {
            $view->with(['pageTitle' => 'Career Queries']);
        });

        view()->composer('admin.career_queries.show', function ($view) {
            $view->with(['pageTitle' => 'Career Show']);
        });


        /* /*    * Testimonials
         */
        view()->composer('admin.testimonials.index', function ($view) {
            $view->with(['pageTitle' => 'Testimonials List']);
        });
        view()->composer('admin.testimonials.create', function ($view) {
            $view->with(['pageTitle' => 'Add Testimonial']);
        });
        view()->composer('admin.testimonials.show', function ($view) {
            $view->with(['pageTitle' => 'Show Testimonial']);
        });
        view()->composer('admin.testimonials.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Testimonial']);
        });



        /*
         * BENEFITs
         */
        view()->composer('admin.benefits.index', function ($view) {
            $view->with(['pageTitle' => 'Benefits List']);
        });
        view()->composer('admin.benefits.create', function ($view) {
            $view->with(['pageTitle' => 'Add Benefit']);
        });
        view()->composer('admin.benefits.show', function ($view) {
            $view->with(['pageTitle' => 'Show Benefit']);
        });
        view()->composer('admin.benefits.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Benefit']);
        });



        /*
         * FAQs
         */
        view()->composer('admin.faqs.index', function ($view) {
            $view->with(['pageTitle' => 'Faqs List']);
        });
        view()->composer('admin.faqs.create', function ($view) {
            $view->with(['pageTitle' => 'Add Faq']);
        });
        view()->composer('admin.faqs.show', function ($view) {
            $view->with(['pageTitle' => 'Show Faq']);
        });
        view()->composer('admin.faqs.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Faq']);
        });

        /*
         * Jobs List
         */
        view()->composer('admin.apply_jobs.index', function ($view) {
            $view->with(['pageTitle' => 'Apply Jobs List']);
        });
        view()->composer('admin.apply_jobs.create', function ($view) {
            $view->with(['pageTitle' => 'Add Apply Jobs']);
        });
        view()->composer('admin.apply_jobs.show', function ($view) {
            $view->with(['pageTitle' => 'Show Apply Jobs']);
        });
        view()->composer('admin.apply_jobs.edit', function ($view) {
            $view->with(['pageTitle' => 'Edit Apply Jobs']);
        });



        /*
         * Newsletter Subscriber
         */
        view()->composer('admin.newsletter_subscriber.index', function ($view) {
            $view->with(['pageTitle' => 'Newsletter Subscriber']);
        });

        /*
         * Contact Queries
         */
        view()->composer('admin.contact_queries.index', function ($view) {
            $view->with(['pageTitle' => 'Contact Queries']);
        });

        view()->composer('admin.contact_queries.show', function ($view) {
            $view->with(['pageTitle' => 'Contact Show']);
        });
/*
         * Tickets 
         */
        view()->composer('admin.tickets.index', function ($view) {
            $view->with(['pageTitle' => 'Tickets']);
        });

        view()->composer('admin.tickets.show', function ($view) {
            $view->with(['pageTitle' => 'Ticket Show']);
        });

        /*
         * Site Setting
         */
        view()->composer('admin.siteSettings', function ($view) {
            $view->with(['pageTitle' => 'Site Settings']);
        });

        /*
         * Change Password
         */
        view()->composer('admin.users.changePassword', function ($view) {
            $view->with(['pageTitle' => 'Change Password']);
        });
    }
}