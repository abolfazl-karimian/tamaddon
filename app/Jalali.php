<?php

namespace App;
use Verta;  // i used the verta --should be installed by composer-- to change the Date to Jalali and use it with inject

class Jalali
{
    // These all take the -Full Date- and return in Jalali/Shamsi

    public function DayNumber($date)
    {
        return verta($date)->day;                    /*  29  */
    }
    public function DayWord($date)
    {
        return verta($date)->formatWord('d');      /*  بیست و نه  */
    }
    public function DayInWeek($date)
    {
        return verta($date)->formatWord('l');      /*  چهارشنبه  */
    }


    public function MonthNumber($date)
    {
        return verta($date)->month;                 /*  8  */
    }
    public function MonthWord($date)
    {
        return verta($date)->formatWord('F');      /*  بهمن  */
    }

    public function YearNumber($date)
    {
        return verta($date)->year;                 /*  29  */
    }
    public function YearWord($date)
    {
        return verta($date)->formatWord('Y');      /*  هزار و سیصد و نود و نه  */
    }

    // this gets the Full Date And Your Preferred Format
    public function PopularFormat($date)             /*    29 بهمن 1398    */
    {
        return verta($date)->day.' '.verta($date)->formatWord('F').' '.verta($date)->year;
    }

    public function PersianFormat($date)         /*   1399-01-20 12:34:00  */
    {
        return verta($date);
    }


}

