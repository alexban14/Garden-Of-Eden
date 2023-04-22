<?php

namespace Database\Factories\Helpers;

class FactoryHelper
{
    /**
     * This function well get a random ID from the database
     * @param string | HasFactory $model
     */
    public static function getRandomModelId(string $model)
    {
        // seeding relationships (2 ways)

        // 1) get model count,
        $count = $model::query()->count();
        if ($count === 0) {
            // model count = 0 ? create new record and retrieve the record id
            return $model::factory()->create()->id;
        } else {
            // generate random nr based on the count
            return rand(1, $count);
        }

        // 2) get all model records and randomly get one of the records
    }
}
