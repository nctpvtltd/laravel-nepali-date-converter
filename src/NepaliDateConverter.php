<?php

namespace NepaliDateConverter;

use NepaliDateConverter\Data\BsDates;

class NepaliDateConverter
{
    private array $_nep_date = [];
    private array $_eng_date = [];


    /**
     * Calculates wheather english year is leap year or not
     *
     * @param int $year
     * @return bool
     */
    public function is_leap_year($year)
    {
        $a = $year;
        if ($a % 100 == 0) {
            if ($a % 400 == 0) {
                return true;
            } else {
                return false;
            }
        } else {
            if ($a % 4 == 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Convert English date to Nepali date
     */
    public function engToNep(string $date): array|string
    {
        $dt = new \DateTime($date);
        $yy = (int)$dt->format('Y');
        $mm = (int)$dt->format('m');
        $dd = (int)$dt->format('d');

        // Check for date range
        $chk = true; // $this->_is_in_range_eng($yy, $mm, $dd);

        if ($chk !== true) {
            return  $chk;
        } else {
            // Month data.
            $month  = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

            // Month for leap year
            $lmonth = array(31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

            $def_eyy     = 1944;    // initial english date.
            $def_nyy     = 2000;
            $def_nmm     = 9;
            $def_ndd     = 17 - 1;    // inital nepali date.
            $total_eDays = 0;
            $total_nDays = 0;
            $a           = 0;
            $day         = 7 - 1;
            $m           = 0;
            $y           = 0;
            $i           = 0;
            $j           = 0;
            $numDay      = 0;

            // Count total no. of days in-terms year
            for ($i = 0; $i < ($yy - $def_eyy); $i++) { //total days for month calculation...(english)
                if ($this->is_leap_year($def_eyy + $i) === true) {
                    for ($j = 0; $j < 12; $j++) {
                        $total_eDays += $lmonth[$j];
                    }
                } else {
                    for ($j = 0; $j < 12; $j++) {
                        $total_eDays += $month[$j];
                    }
                }
            }

            // Count total no. of days in-terms of month
            for ($i = 0; $i < ($mm - 1); $i++) {
                if ($this->is_leap_year($yy) === true) {
                    $total_eDays += $lmonth[$i];
                } else {
                    $total_eDays += $month[$i];
                }
            }

            // Count total no. of days in-terms of date
            $total_eDays += $dd;


            $i           = 0;
            $j           = $def_nmm;
            $total_nDays = $def_ndd;
            $m           = $def_nmm;
            $y           = $def_nyy;

            // Count nepali date from array
            while ($total_eDays != 0) {
                $a = BsDates::$bs[$i][$j];

                $total_nDays++;        //count the days
                $day++;                //count the days interms of 7 days

                if ($total_nDays > $a) {
                    $m++;
                    $total_nDays = 1;
                    $j++;
                }

                if ($day > 7) {
                    $day = 1;
                }

                if ($m > 12) {
                    $y++;
                    $m = 1;
                }

                if ($j > 12) {
                    $j = 1;
                    $i++;
                }

                $total_eDays--;
            }
            
            return $y . "-" . $m . "-" . $total_nDays;
        }
    }

    /**
     * Convert Nepali date to English date
     */
    public function nepToEng($yy, $mm, $dd): array|string
    {
        // Logic from `nep_to_eng` method
    }

    // Other helper methods: _get_day_of_week, _get_nepali_month, _get_english_month, is_leap_year, etc.
}
