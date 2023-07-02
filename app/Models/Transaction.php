<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
  use HasFactory;

  protected $table = 'transactions';

  protected $fillable = [
    'transaction_code',
    'user_id',
    'book_id',
    'order',
    'amount',
    'status'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function book()
  {
    return $this->belongsTo(Book::class);
  }
}
