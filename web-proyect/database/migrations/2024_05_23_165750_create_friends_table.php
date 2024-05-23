<?php

/**
 * Migration class for creating the friends table.
 *
 * This class handles the creation and deletion of the friends table.
 *
 * @category Database
 * @package  Database\Migrations
 * @author   Tu Nombre <tuemail@ejemplo.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://www.tu-sitio-web.com
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration class for creating the friends table.
 *
 * This class handles the creation and deletion of the friends table.
 */
return new class extends Migration {
    /**
     * Run the migrations.
     *
     * This method creates the friends table.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            'friends',
            function (Blueprint $table) {
                $table->id();
                $table->foreignId('from_id')->constrained('users')->onDelete('cascade');
                $table->foreignId('to_id')->constrained('users')->onDelete('cascade');
                $table->boolean('accepted')->default(false);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * This method drops the friends table.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('friends');
    }
};
