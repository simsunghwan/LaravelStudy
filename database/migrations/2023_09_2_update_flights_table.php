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
      Schema::table('flights', function (Blueprint $table) {
        // 기존 테이블에서 misc 컬람을 추가
        $table->string("misc")->nullable();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('flights', function (Blueprint $table) {
          // 기존 테이블에서 misc 컬람을 삭제
          $table->dropColumn("misc");
        });
    }
};
