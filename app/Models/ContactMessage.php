<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/** An enquiry sent from the contact page form. */
class ContactMessage extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'company', 'message', 'ip_address'];
}
