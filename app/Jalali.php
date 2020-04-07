<?php

namespace App;
use Verta;  // i used the verta --should be installed by composer-- to change the Date to Jalali and use it with inject

class Jalali
{
    // These all take the -Full Date- and return in Jalali/Shamsi

    public function dayNumber($date)
    {
        return verta($date)->day;                    /*  29  */
    }
    public function dayWord($date)
    {
        return verta($date)->formatWord('d');      /*  بیست و نه  */
    }
    public function dayInWeek($date)
    {
        return verta($date)->formatWord('l');      /*  چهارشنبه  */
    }


    public function monthNumber($date)
    {
        return verta($date)->month;                 /*  8  */
    }
    public function monthWord($date)
    {
        return verta($date)->formatWord('F');      /*  بهمن  */
    }

    public function yearNumber($date)
    {
        return verta($date)->year;                 /*  29  */
    }
    public function yearWord($date)
    {
        return verta($date)->formatWord('Y');      /*  هزار و سیصد و نود و نه  */
    }

    // this gets the Full Date And Your Preferred Format
    public function popularFormat($date)             /*    29 بهمن 1398    */
    {
        return verta($date)->day.' '.verta($date)->formatWord('F').' '.verta($date)->year;
    }

    public function persianFormat($date)         /*   1399-01-20 12:34:00  */
    {
        return verta($date);
    }


}

