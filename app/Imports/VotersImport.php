<?php

namespace App\Imports;

use App\Voter;
use Maatwebsite\Excel\Concerns\ToModel;

class VotersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Voter([
            
            'name' => $row[0],
            'email' => $row[1],
            'present' => false,
            'vote_id' => 1,
        ]);
    }
}
