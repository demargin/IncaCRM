<?php

namespace App\Models;

/**
 * Si se descomentara, la clase User tendría que implementar el contrato MustVerifyEmail, 
 * lo que obligaría a los usuarios a verificar su dirección de correo electrónico 
 * antes de poder iniciar sesión.
 */
// use Illuminate\Contracts\Auth\MustVerifyEmail;

/**
 * Se importa la clase HasFactory, que proporciona la capacidad 
 * de crear modelos utilizando factories.
 */
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Se importa la clase Authenticatable, que proporciona la funcionalidad básica 
 * de autenticación de usuarios.
 */
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Se importa la clase Notifiable, que proporciona la capacidad de enviar 
 * notificaciones a los usuarios.
 */
use Illuminate\Notifications\Notifiable;

/**
 * Se importa la clase HasApiTokens, que proporciona la capacidad de 
 * generar tokens de API para los usuarios.
 */
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /**
     * Se agrega los traits HasApiTokens, HasFactory y Notifiable a la clase User. 
     * Los traits son una forma de reutilizar código en múltiples clases.
     */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Propiedad que indica los atributos que se pueden asignar de forma masiva 
     * al crear o actualizar un usuario.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * Propiedad indica los atributos que deben ocultarse cuando se serializa 
     * un usuario (por ejemplo, al convertirlo a JSON).
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Propiedad que indica los atributos que deben ser convertidos a un tipo específico. 
     * En este caso, email_verified_at se convierte a un tipo datetime 
     * y password se convierte a un tipo hashed
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
