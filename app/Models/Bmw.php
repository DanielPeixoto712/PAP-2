<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bmw extends Model
{
    use HasFactory;
    protected $primaryKey="id_bmw";
    protected $table="bmw";

       protected $fillable=[
       'motor',
       'preco',
       'observacoes',
       'info',
       'imagem_capa'
   ];
   
    }
   

