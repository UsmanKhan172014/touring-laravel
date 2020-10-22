<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class BookingStatus extends Enum
{
    const Reserved =   'Reserved';
    const UnderReview =   'Under Review';
    const Booked =   'Booked';
}
