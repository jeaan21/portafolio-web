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
        // Table: proyectos
        if (!Schema::hasTable('proyectos')) {
            Schema::create('proyectos', function (Blueprint $table) {
                $table->id();
                $table->string('titulo', 255);
                $table->string('slug', 255)->unique();
                $table->text('descripcion')->nullable();
                $table->text('contenido')->nullable();
                $table->string('imagen', 500)->nullable();
                $table->longText('tecnologias')->nullable();
                $table->string('categoria', 100)->nullable();
                $table->string('url_proyecto', 500)->nullable();
                $table->string('url_github', 500)->nullable();
                $table->tinyInteger('destacado')->default(0)->index('idx_proyectos_destacado');
                $table->integer('orden')->default(0)->index('idx_proyectos_orden');
                $table->timestamps();
            });
        }

        // Table: testimonios
        if (!Schema::hasTable('testimonios')) {
            Schema::create('testimonios', function (Blueprint $table) {
                $table->id();
                $table->string('nombre', 255);
                $table->string('cargo', 255)->nullable();
                $table->string('avatar', 500)->nullable();
                $table->text('texto');
                $table->integer('valoracion')->default(5);
                $table->tinyInteger('activo')->default(1)->index('idx_testimonios_activo');
                $table->timestamp('created_at')->useCurrent();
            });
        }

        // Table: experiencia
        if (!Schema::hasTable('experiencia')) {
            Schema::create('experiencia', function (Blueprint $table) {
                $table->id();
                $table->string('titulo', 255);
                $table->string('empresa', 255);
                $table->string('periodo', 100)->nullable();
                $table->text('descripcion')->nullable();
                $table->enum('tipo', ['freelance', 'academico', 'investigacion', 'educacion', 'equipo'])->default('freelance');
                $table->integer('orden')->default(0)->index('idx_experiencia_orden');
                $table->timestamp('created_at')->useCurrent();
            });
        }

        // Table: mensajes
        if (!Schema::hasTable('mensajes')) {
            Schema::create('mensajes', function (Blueprint $table) {
                $table->id();
                $table->string('nombre', 100);
                $table->string('email', 255);
                $table->string('tipo_servicio', 100)->nullable();
                $table->string('presupuesto', 50)->nullable();
                $table->string('plazo', 50)->nullable();
                $table->text('proyecto_url')->nullable();
                $table->string('asunto', 255)->nullable();
                $table->text('mensaje');
                $table->tinyInteger('leido')->default(0)->index('idx_mensajes_leido');
                $table->timestamp('created_at')->useCurrent();
            });
        }

        // Table: eventos_analytics
        if (!Schema::hasTable('eventos_analytics')) {
            Schema::create('eventos_analytics', function (Blueprint $table) {
                $table->id();
                $table->string('evento', 100);
                $table->string('path', 255)->nullable();
                $table->longText('metadata')->nullable();
                $table->timestamp('created_at')->useCurrent();
            });
        }

        // Table: visitantes
        if (!Schema::hasTable('visitantes')) {
            Schema::create('visitantes', function (Blueprint $table) {
                $table->id();
                $table->string('ip', 45)->nullable();
                $table->text('user_agent')->nullable();
                $table->string('path', 255)->nullable();
                $table->string('referrer', 500)->nullable();
                $table->timestamp('created_at')->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitantes');
        Schema::dropIfExists('eventos_analytics');
        Schema::dropIfExists('mensajes');
        Schema::dropIfExists('experiencia');
        Schema::dropIfExists('testimonios');
        Schema::dropIfExists('proyectos');
    }
};
