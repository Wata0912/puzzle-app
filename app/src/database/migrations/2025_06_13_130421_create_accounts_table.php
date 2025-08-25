<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            #カラムの構成を指定
            $table->id();       #idカラム
            $table->string('name', 20);   #nameカラム(20文字)
            $table->timestamps();  //created_at, updated_at

            #$table->index('name');  #nameにインデックス設定
            $table->unique('name'); #nameにユニーク設定
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
