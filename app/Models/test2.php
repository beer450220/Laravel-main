<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
class test2 extends Model implements AuthenticatableContract
// class test2 extends Model
    {
        public $table="test";
        public$primarykey="id";
        protected $fillable=[
            'password',
            'username',
            'role',

        ];
        /**
         * Get the name of the unique identifier for the user.
         *
         * @return string
         */
        public function getAuthIdentifierName()
        {
            return 'id'; // ชื่อฟิลด์ที่ใช้เป็นไอเดนติไฟเออร์
        }

        /**
         * Get the unique identifier for the user.
         *
         * @return mixed
         */
        public function getAuthIdentifier()
        {
            return $this->id; // ชื่อฟิลด์ที่ใช้เป็นไอเดนติไฟเออร์
        }

        /**
         * Get the password for the user.
         *
         * @return string
         */
        public function getAuthPassword()
        {
            return $this->password; // ชื่อฟิลด์ที่ใช้เก็บรหัสผ่าน
        }

        /**
         * Get the token value for the "remember me" session.
         *
         * @return string|null
         */
        public function getRememberToken()
        {
            return $this->remember_token; // ชื่อฟิลด์ที่ใช้เก็บ token สำหรับการจดจำผู้ใช้
        }

        /**
         * Set the token value for the "remember me" session.
         *
         * @param  string|null  $value
         * @return void
         */
        public function setRememberToken($value)
        {
            $this->remember_token = $value; // ชื่อฟิลด์ที่ใช้เก็บ token สำหรับการจดจำผู้ใช้
        }

        /**
         * Get the column name for the "remember me" token.
         *
         * @return string
         */
        public function getRememberTokenName()
        {
            return 'remember_token'; // ชื่อฟิลด์ที่ใช้เป็นไอเดนติไฟเออร์สำหรับการจดจำผู้ใช้
        }
        public function Users(){
            return $this->hasOne(Users::class,'id','name');
        }
    }

