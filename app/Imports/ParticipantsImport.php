<?php

namespace App\Imports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\ToModel;

class ParticipantsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Participant([
            'name' => $row['1'],
            'email' => $row['2'],
            'competition' => $row['3'],
            'position' => $row['4'],
            'place' => $row['5']
        ]);
    }
}
