<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table    =   'users';
    protected $fillable =   [
                                'name',
                                'email',
                                'password',
                                'role',
                                'user_code'
                            ];
}
?>