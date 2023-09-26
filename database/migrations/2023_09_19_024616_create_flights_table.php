<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            // UnsignedBigInt  타입의 auto_increment primary key id칼럼 생성
            // laravel에서는 null을 명시하지 않으면 기본적으로 not null이다.
            $table->id();
            $table->string('name');
            $table->string('airline');
            // datatime 데이터 타입으로 created_at, updated_at 이라는 두 개의 칼럼을 생성
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
