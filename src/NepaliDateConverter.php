<?php

namespace NepaliDateConverter;

use NepaliDateConverter\Data\BsDates;

class NepaliDateConverter
{
    private array $_nep_date = [];
    private array $_eng_date = [];

    /**
     * Convert English date to Nepali date
     */
    public function engToNep($yy, $mm, $dd): array|string
    {
        // Here, move the logic from your `eng_to_nep` method
        // Replace $this->_bs with BsDates::$bs
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
