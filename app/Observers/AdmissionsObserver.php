<?php

namespace App\Observers;

use App\Models\Admissions;
use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdmissionsObserver
{
    /**
     * Handle the Admissions "created" event.
     *
     * @param  \App\Models\Admissions  $admissions
     * @return void
     */
    public function created(Admissions $admissions)
    {

    }

    /**
     * $state = 'مسودة';
        $application_date = Carbon::now()->toDateString();
        $application_id = random_int(100000, 999999);
        $app = new Application([
            'application_id' => $application_id,
        ]);
        $admissions = $admissions::find(1);
        $admissions->application()->save($app);
     * Handle the Admissions "updated" event.
     *
     * @param  \App\Models\Admissions  $admissions
     * @return void
     */
    public function updated(Admissions $admissions)
    {
        dd('updated');
    }

    /**
     * Handle the Admissions "deleted" event.
     *
     * @param  \App\Models\Admissions  $admissions
     * @return void
     */
    public function deleted(Admissions $admissions)
    {
        dd('deleted');
    }

    /**
     * Handle the Admissions "restored" event.
     *
     * @param  \App\Models\Admissions  $admissions
     * @return void
     */
    public function restored(Admissions $admissions)
    {
        dd('restored');
    }

    /**
     * Handle the Admissions "force deleted" event.
     *
     * @param  \App\Models\Admissions  $admissions
     * @return void
     */
    public function forceDeleted(Admissions $admissions)
    {
        dd('forceDelete');
    }
}
