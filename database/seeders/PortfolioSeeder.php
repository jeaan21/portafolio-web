<?php

namespace Database\Seeders;

use App\Models\Proyecto;
use App\Models\Experiencia;
use App\Models\Testimonio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Proyectos
        Proyecto::create([
            'titulo' => 'NexusGG - Gaming Platform',
            'slug' => 'nexusgg',
            'descripcion' => 'Plataforma web moderna para la comunidad gamer con catálogo de juegos, noticias y sistema de perfiles.',
            'tecnologias' => ['React', 'TypeScript', 'Vite', 'Tailwind CSS'],
            'categoria' => 'Full Stack',
            'url_proyecto' => 'https://jeaan21.github.io/Taurus_GameStation/',
            'url_github' => 'https://github.com/jeaan21/Taurus_GameStation',
            'destacado' => true,
            'orden' => 1,
        ]);

        Proyecto::create([
            'titulo' => 'Portfolio Personal',
            'slug' => 'portfolio-personal',
            'descripcion' => 'Sitio web personal construido con Laravel, presentando proyectos, experiencia y habilidades técnicas.',
            'tecnologias' => ['Laravel', 'PHP', 'SQLite', 'Tailwind CSS', 'JavaScript'],
            'categoria' => 'Full Stack',
            'url_proyecto' => 'https://portafolio-web-wvv6.onrender.com',
            'url_github' => 'https://github.com/jeaan21/portafolio-web',
            'destacado' => true,
            'orden' => 2,
        ]);

        // Experiencia
        Experiencia::create([
            'titulo' => 'Desarrollador Full Stack',
            'empresa' => 'Freelance',
            'periodo' => '2023 - Presente',
            'descripcion' => 'Desarrollo de aplicaciones web modernas utilizando React, Laravel y arquitecturas cloud-native.',
            'tipo' => 'freelance',
            'orden' => 1,
        ]);

        Experiencia::create([
            'titulo' => 'Ingeniería de Sistemas',
            'empresa' => 'UNDAC',
            'periodo' => '2021 - Presente',
            'descripcion' => 'Formación académica rigurosa en ingeniería de sistemas con enfoque en desarrollo de software y arquitectura empresarial.',
            'tipo' => 'academico',
            'orden' => 2,
        ]);

        // Testimonios
        Testimonio::create([
            'nombre' => 'Cliente Satisfecho',
            'cargo' => 'CEO, Startup Tech',
            'texto' => 'Excelente profesional. Entregó el proyecto a tiempo con una calidad superior a la esperada. Altamente recomendado.',
            'valoracion' => 5,
            'activo' => true,
        ]);

        Testimonio::create([
            'nombre' => 'Colega Desarrollador',
            'cargo' => 'Senior Developer',
            'texto' => 'Jean demuestra un profundo conocimiento técnico y una habilidad excepcional para resolver problemas complejos.',
            'valoracion' => 5,
            'activo' => true,
        ]);
    }
}
