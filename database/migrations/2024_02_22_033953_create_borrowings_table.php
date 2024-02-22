<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id('id');
            $table->integer('user_id');
            $table->integer('book_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('quantity');
            $table->string('status');
            $table->timestamps();
        });
        DB::unprepared('
        CREATE TRIGGER borrow_book AFTER INSERT ON borrowings
        FOR EACH ROW
        BEGIN
            IF status = 1 THEN
            UPDATE books SET availability = availability - new.quantity WHERE id = new.book_id;
            END iF;
        END
        ');
        DB::unprepared('
        CREATE TRIGGER return_book AFTER UPDATE ON borrowings
        FOR EACH ROW
        BEGIN
            IF status = 0 AND old.status != 0 THEN
            UPDATE books SET availability = availability + new.quantity WHERE id = new.book_id;
            END iF;
        END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
