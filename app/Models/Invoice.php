<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = array("campanyId","deliveryGuyId","isPaid","delivaryFees","status","city","street","buildingNumber","floorNumber","apartmentNumber","totalPrice",'orderDate',"clientName","clienPhone");

}
