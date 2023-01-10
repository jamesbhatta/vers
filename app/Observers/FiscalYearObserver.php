<?php

namespace App\Observers;

use App\calYear;
use PDO;

class calYearObserver
{
    public function creating(calYear $calYear)
    {
        $calYear->start_ad = bs_to_ad($calYear->start);
        $calYear->end_ad = bs_to_ad($calYear->end);
    }

    /**
     * Handle the cal year "created" event.
     *
     * @param  \App\calYear  $calYear
     * @return void
     */
    public function created(calYear $calYear)
    {
        $this->syncActivecalYear($calYear);
    }

    public function updating(calYear $calYear)
    {
        $calYear->start_ad = bs_to_ad($calYear->start);
        $calYear->end_ad = bs_to_ad($calYear->end);
    }

    /**
     * Handle the cal year "updated" event.
     *
     * @param  \App\calYear  $calYear
     * @return void
     */
    public function updated(calYear $calYear)
    {
        $this->syncActivecalYear($calYear);
    }

    /**
     * Synchoronize the current cal year
     *
     * @param  mixed $calYear
     * @return void
     */
    public function syncActivecalYear(calYear $calYear)
    {
        if ($calYear->is_running) {
            $this->inActiveExcept($calYear);

            settings()->set([
                'cal_year' => $calYear->name,
                'cal_year_start' => $calYear->start,
                'cal_year_end' => $calYear->end,
            ]);
        }
    }

    /**
     * Inactive the cals except specifie
     *
     * @param  mixed $calYear
     * @return void
     */
    public function inActiveExcept(calYear $calYear)
    {
        return calYear::whereNotIn('id', [$calYear->id])->update(['is_running' => false]);
    }
}
