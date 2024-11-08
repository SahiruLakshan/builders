<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandProduct extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'brandproduct';

    // Define fillable fields to allow mass assignment
    protected $fillable = [
        'brand_id',
        'product_id',
        'created_by',
    ];

    // Define the relationship to the Brand model
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // Define the relationship to the Product model
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Define the relationship to the User model for the creator
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
