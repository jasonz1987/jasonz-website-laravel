<?php
namespace App\Models\Traits;

use Carbon\Carbon;

trait Timestamp{

    public function getCreatedAtAttribute($rawTime){
        return $this->changeTimeZone($rawTime, '',config('app.timezone'));
    }

    public function getUpdatedAtAttribute($rawTime){
        return $this->changeTimeZone($rawTime, '',config('app.timezone'));
    }

    public function changeTimeZone($dateString, $timeZoneSource = null, $timeZoneTarget = null){

        if (empty($timeZoneSource)) {
            $timeZoneSource = date_default_timezone_get();
        }
        if (empty($timeZoneTarget)) {
            $timeZoneTarget = date_default_timezone_get();
        }
//        $dt = new \DateTime($dateString, new \DateTimeZone($timeZoneSource));
////        $dt->setTimestamp($dateString);
//        $dt->setTimezone(new \DateTimeZone($timeZoneTarget));
//        return $dt->format('Y-m-d H:i:s');
        return Carbon::createFromTimestamp(strtotime($dateString))
            ->timezone(config('app.timezone'))
            ->toDateTimeString();
    }


//    public function serializeDate(\DateTimeInterface $date)
//    {
//        return $date->format($this->dateFormat ?: 'Y-m-d H:i:s');
//    }

}
