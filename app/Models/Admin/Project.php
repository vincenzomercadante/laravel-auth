<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function get_description($n_char){
        return ($n_char < strlen($this->description)) ? substr($this->description, 0, $n_char) . '...' : substr($this->description, 0, $n_char);
    }
}
