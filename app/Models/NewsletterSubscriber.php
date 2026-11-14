<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/** An email address submitted through the footer newsletter form. */
class NewsletterSubscriber extends Model
{
    protected $fillable = ['email'];
}
