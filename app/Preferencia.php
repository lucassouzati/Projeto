<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Preferencia extends Eloquent implements UserInterface
{
      use Notifiable;

 protected $fillable = [
     'idCategoria','idUsuario',
 ];
}
