<?php

namespace Madalin\RomanianDate;

use DateTimeInterface;
use Exception;
use Laravel\Nova\Fields\Date;

class RomanianDate extends Date
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'romanian-date';

    /**
     * Create a new field.
     *
     * @param  string      $name
     * @param  string|null $attribute
     * @param  mixed|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback ?? function ($value) {
            if (! is_null($value)) {
                if ($value instanceof DateTimeInterface) {
                    return $value->format('Y-m-d');
                }

                throw new Exception("Date field must cast to 'date' in Eloquent model.");
            }
        });
    }

    /**
     * Set the date format (Moment.js) that should be used to display the date.
     *
     * @param  string $format
     * @return $this
     */
    public function format($format)
    {
        return $this->withMeta(['format' => $format]);
    }
}
