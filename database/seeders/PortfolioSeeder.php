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
            'titulo' => 'Laundry Management System',
            'slug' => 'laundry-system',
            'descripcion' => 'Sistema integral de gesti??n para lavander??as industriales con control de inventario, ??rdenes de servicio, facturaci??n electr??nica y dashboard analytics en tiempo real.',
            'contenido' => 'Sistema desarrollado con Next.js, Node.js y PostgreSQL. Incluye gesti??n de inventario, facturaci??n y dashboard.',
            'imagen' => 'public/images/proyectos/laundry-management-system.png',
            'tecnologias' => '[\"Next.js\", \"Node.js\", \"PostgreSQL\", \"Prisma\", \"Tailwind CSS\", \"Docker\"]',
            'categoria' => 'Full Stack',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => true,
            'orden' => 1,
        ]);

        Proyecto::create([
            'titulo' => 'Veterinary Management System',
            'slug' => 'veterinary-system',
            'descripcion' => 'Plataforma completa para cl??nicas veterinarias con historial cl??nico digital, agenda inteligente, recetas electr??nicas y telemedicina integrada.',
            'contenido' => 'Plataforma completa con React y SQL Server. Gesti??n de historial cl??nico y CRM de pacientes.',
            'imagen' => 'public/images/proyectos/veterinary-management-system.png',
            'tecnologias' => '[\"React\", \"Express.js\", \"SQL Server\", \"Prisma\", \"Firebase\", \"TypeScript\"]',
            'categoria' => 'Full Stack',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => true,
            'orden' => 2,
        ]);

        Proyecto::create([
            'titulo' => 'Restaurant Management Platform',
            'slug' => 'restaurant-platform',
            'descripcion' => 'Sistema de gesti??n restaurantil con POS integrado, men?? digital QR, delivery tracking, gesti??n de inventarios y analytics de ventas.',
            'contenido' => 'Sistema con Next.js y Python. POS integrado y gesti??n de inventarios.',
            'imagen' => 'public/images/proyectos/restaurant-management-platform.webp',
            'tecnologias' => '[\"Next.js\", \"Python\", \"PostgreSQL\", \"Prisma\", \"Docker\", \"Redis\"]',
            'categoria' => 'Full Stack',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => true,
            'orden' => 3,
        ]);

        Proyecto::create([
            'titulo' => 'Blockchain Legal Verification',
            'slug' => 'blockchain-legal',
            'descripcion' => 'Plataforma de verificaci??n legal basada en blockchain para contratos inteligentes, certificados digitales y trazabilidad de documentos legales.',
            'contenido' => 'Plataforma basada en Ethereum y Solidity para trazabilidad legal de documentos.',
            'imagen' => 'public/images/proyectos/blockchain-legal-verification.jpg',
            'tecnologias' => '[\"React\", \"Node.js\", \"PostgreSQL\", \"Solidity\", \"Ethereum\", \"Web3\"]',
            'categoria' => 'Full Stack',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => true,
            'orden' => 4,
        ]);

        Proyecto::create([
            'titulo' => 'SecureDrive',
            'slug' => 'securedrive',
            'descripcion' => 'App m??vil para control vehicular de diferentes tipos en minas, tracking en tiempo real, gesti??n de flota y reportes de operaciones mineras.',
            'contenido' => 'App h??brida con React Native para control de flotas mineras.',
            'imagen' => null,
            'tecnologias' => '[\"React Native\", \"Node.js\", \"PostgreSQL\", \"Firebase\", \"Google Maps API\", \"TypeScript\"]',
            'categoria' => 'App',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => true,
            'orden' => 5,
        ]);

        Proyecto::create([
            'titulo' => 'Minera Certrum',
            'slug' => 'minera-certrum',
            'descripcion' => 'Web app para empresa minera con tecnolog??a de servidores para el control de concentrados de mina en rutas largas con dashboard de reportes y exportaci??n en PDF.',
            'contenido' => 'Dashboard de reportes para miner??a con exportaci??n PDF y rastreo de rutas.',
            'imagen' => 'public/images/proyectos/minera-certrum.jpg',
            'tecnologias' => '[\"Next.js\", \"Node.js\", \"PostgreSQL\", \"Prisma\", \"Docker\", \"Tailwind CSS\"]',
            'categoria' => 'App',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => true,
            'orden' => 6,
        ]);

        Proyecto::create([
            'titulo' => 'Taurus Gamestation',
            'slug' => 'taurus-gamestation',
            'descripcion' => 'Sal??n de LAN center para publicidad y control de cuentas para clientes con sistema de puntos y registro a torneos por r??gimen de puntos para ganar premios.',
            'contenido' => 'Sistema de gesti??n de LAN center con control de cuentas y torneos.',
            'imagen' => 'public/images/proyectos/taurus-gamestation.png',
            'tecnologias' => '[\"React\", \"Node.js\", \"SQL Server\", \"Prisma\", \"Tailwind CSS\", \"TypeScript\"]',
            'categoria' => 'Full Stack',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 7,
        ]);

        Proyecto::create([
            'titulo' => 'Servicios Generales Samahadi',
            'slug' => 'samahadi',
            'descripcion' => 'Empresa de servicios generales dedicada a servicios generales, p??gina web para promover publicidad y mostrar sus trabajos realizados.',
            'contenido' => 'Landing page corporativa para empresa de servicios generales.',
            'imagen' => 'public/images/proyectos/servicios-generales-samahadi.png',
            'tecnologias' => '[\"React\", \"Tailwind CSS\", \"Framer Motion\", \"TypeScript\"]',
            'categoria' => 'Frontend',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 8,
        ]);

        Proyecto::create([
            'titulo' => 'API RESTful para E-commerce',
            'slug' => 'api-ecommerce',
            'descripcion' => 'API REST documentada para plataforma de comercio electr??nico con autenticaci??n JWT y pagos integrados.',
            'contenido' => 'API desarrollada con Node.js y Express. Implementa autenticaci??n JWT, CRUD completo, integraci??n de pagos y documentaci??n con Swagger.',
            'imagen' => null,
            'tecnologias' => '[\"Node.js\", \"Express\", \"JWT\", \"MySQL\", \"Swagger\"]',
            'categoria' => 'Backend',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 9,
        ]);

        Proyecto::create([
            'titulo' => 'E-learning Platform Pro',
            'slug' => 'e-learning-platform',
            'descripcion' => 'Plataforma educativa con streaming de video, ex??menes interactivos y sistema de certificados.',
            'contenido' => 'Sistema integral para gesti??n de cursos online con dashboard para instructores y alumnos.',
            'imagen' => null,
            'tecnologias' => '[\"Next.js\", \"Node.js\", \"PostgreSQL\", \"AWS S3\", \"Tailwind CSS\"]',
            'categoria' => 'Full Stack',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 10,
        ]);

        Proyecto::create([
            'titulo' => 'Real Estate Management CRM',
            'slug' => 'real-estate-crm',
            'descripcion' => 'Sistema de gesti??n inmobiliaria con tours virtuales, agenda de visitas y CRM de clientes.',
            'contenido' => 'Plataforma para agencias inmobiliarias con integraci??n de mapas y gesti??n de propiedades.',
            'imagen' => null,
            'tecnologias' => '[\"React\", \"Python\", \"FastAPI\", \"SQL Server\", \"Docker\"]',
            'categoria' => 'Full Stack',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 11,
        ]);

        Proyecto::create([
            'titulo' => 'Inventory & Sales SaaS',
            'slug' => 'inventory-saas',
            'descripcion' => 'Software como servicio para control de inventarios multialmac??n y punto de venta en la nube.',
            'contenido' => 'SaaS escalable para PYMES con reportes financieros y control de stock en tiempo real.',
            'imagen' => null,
            'tecnologias' => '[\"Vue.js\", \"Express.js\", \"MongoDB\", \"Redis\", \"Google Cloud\"]',
            'categoria' => 'Full Stack',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 12,
        ]);

        Proyecto::create([
            'titulo' => 'Design System Component Library',
            'slug' => 'design-system-lib',
            'descripcion' => 'Librer??a de componentes UI reutilizables basada en principios de dise??o at??mico y accesibilidad.',
            'contenido' => 'Documentaci??n interactiva de componentes para acelerar el desarrollo frontend.',
            'imagen' => null,
            'tecnologias' => '[\"React\", \"Storybook\", \"Tailwind CSS\", \"TypeScript\", \"Vite\"]',
            'categoria' => 'Frontend',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 13,
        ]);

        Proyecto::create([
            'titulo' => 'Interactive Analytics UI',
            'slug' => 'analytics-ui-dashboard',
            'descripcion' => 'Dashboard de an??lisis de datos de alta fidelidad con gr??ficos din??micos y filtros avanzados.',
            'contenido' => 'Interfaz de usuario centrada en datos para visualizaci??n compleja de KPIs.',
            'imagen' => null,
            'tecnologias' => '[\"Next.js\", \"D3.js\", \"Framer Motion\", \"Recharts\", \"Lucide Icons\"]',
            'categoria' => 'Frontend',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 14,
        ]);

        Proyecto::create([
            'titulo' => 'Creative Agency Showcase',
            'slug' => 'creative-agency-portfolio',
            'descripcion' => 'Sitio web inmersivo para agencia creativa con animaciones 3D y scroll interactivo.',
            'contenido' => 'Experiencia de usuario vanguardista utilizando tecnolog??as de renderizado 3D en web.',
            'imagen' => null,
            'tecnologias' => '[\"Three.js\", \"GSAP\", \"CSS Grid\", \"JavaScript Vanilla\", \"WebGL\"]',
            'categoria' => 'Frontend',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 15,
        ]);

        Proyecto::create([
            'titulo' => 'Secure Payment Gateway API',
            'slug' => 'payment-gateway-api',
            'descripcion' => 'API de procesamiento de pagos con integraci??n de m??ltiples pasarelas y seguridad bancaria.',
            'contenido' => 'Servicio backend robusto para manejo de transacciones financieras y webhooks.',
            'imagen' => null,
            'tecnologias' => '[\"Node.js\", \"Stripe API\", \"Redis\", \"Jest\", \"Microservices\"]',
            'categoria' => 'Backend',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 16,
        ]);

        Proyecto::create([
            'titulo' => 'Big Data Scraping Engine',
            'slug' => 'data-scraping-engine',
            'descripcion' => 'Motor de extracci??n y normalizaci??n de datos a gran escala para an??lisis de mercado.',
            'contenido' => 'Sistema distribuido para recolecci??n de informaci??n web y procesamiento ETL.',
            'imagen' => null,
            'tecnologias' => '[\"Python\", \"BeautifulSoup\", \"PostgreSQL\", \"Celery\", \"RabbitMQ\"]',
            'categoria' => 'Backend',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 17,
        ]);

        Proyecto::create([
            'titulo' => 'Centralized Auth Microservice',
            'slug' => 'auth-microservice',
            'descripcion' => 'Microservicio de autenticaci??n y autorizaci??n centralizado con OAuth2 y OpenID Connect.',
            'contenido' => 'Soluci??n de identidad escalable para ecosistemas de aplicaciones empresariales.',
            'imagen' => null,
            'tecnologias' => '[\"Go\", \"JWT\", \"Docker\", \"gRPC\", \"Kubernetes\"]',
            'categoria' => 'Backend',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 18,
        ]);

        Proyecto::create([
            'titulo' => 'Smart Fitness Tracker',
            'slug' => 'fitness-tracker-app',
            'descripcion' => 'Aplicaci??n m??vil para seguimiento de entrenamiento con integraci??n de wearables y GPS.',
            'contenido' => 'App h??brida para salud y bienestar con planes personalizados de entrenamiento.',
            'imagen' => null,
            'tecnologias' => '[\"React Native\", \"Firebase\", \"Google Fit API\", \"TypeScript\", \"Redux\"]',
            'categoria' => 'App',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 19,
        ]);

        Proyecto::create([
            'titulo' => 'Logistic Delivery & Tracking',
            'slug' => 'delivery-app-tracker',
            'descripcion' => 'App de log??stica para repartidores con optimizaci??n de rutas y tracking en tiempo real.',
            'contenido' => 'Soluci??n m??vil para ??ltima milla con comunicaci??n directa y gesti??n de pedidos.',
            'imagen' => null,
            'tecnologias' => '[\"Flutter\", \"Dart\", \"Mapbox SDK\", \"Firebase\", \"State Management\"]',
            'categoria' => 'App',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 20,
        ]);

        Proyecto::create([
            'titulo' => 'Corporate Event Manager',
            'slug' => 'event-manager-app',
            'descripcion' => 'App para gesti??n de eventos corporativos con registro QR, agenda y networking.',
            'contenido' => 'Aplicaci??n nativa para la organizaci??n y participaci??n en eventos a gran escala.',
            'imagen' => null,
            'tecnologias' => '[\"Kotlin\", \"Android SDK\", \"SQLite\", \"Material Design 3\", \"Retrofit\"]',
            'categoria' => 'App',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => false,
            'orden' => 21,
        ]);

        Proyecto::create([
            'titulo' => 'Luxe Grooming - Sistema de Gestion',
            'slug' => 'luxe-grooming',
            'descripcion' => 'Sistema integral de gesti??n para barber??a premium con reservas online, chatbot IA, panel administrativo y tickets con c??digo QR.',
            'contenido' => 'Sistema web desarrollado para Luxe Grooming que permite a los clientes gestionar sus citas de forma aut??noma. Incluye un asistente virtual inteligente para consultas frecuentes, un panel de administraci??n completo para el seguimiento de citas y barberos, y un sistema de tickets digitales con QR para la validaci??n de servicios.',
            'imagen' => 'public/images/proyectos/luxe-grooming.png',
            'tecnologias' => '[\"PHP\", \"MySQL\", \"JavaScript Vanilla\", \"Tailwind CSS\", \"SweetAlert2\", \"QRCode.js\"]',
            'categoria' => 'Full Stack',
            'url_proyecto' => '#',
            'url_github' => '#',
            'destacado' => true,
            'orden' => 0,
        ]);

        // Experiencia
        Experiencia::create([
            'titulo' => 'Freelance Full Stack Developer',
            'empresa' => 'Proyectos empresariales',
            'periodo' => '2024 - Presente',
            'descripcion' => 'Desarrollo de sistemas de gesti??n empresarial, dashboards anal??ticos y APIs REST para startups y PyMEs.',
            'tipo' => 'freelance',
            'orden' => 1,
        ]);

        Experiencia::create([
            'titulo' => 'Sistemas de Gesti??n Empresarial',
            'empresa' => 'Proyectos acad??micos-profesionales',
            'periodo' => '2023 - 2024',
            'descripcion' => 'Creaci??n de sistemas completos para lavander??as, cl??nicas veterinarias y restaurantes con arquitectura moderna.',
            'tipo' => 'freelance',
            'orden' => 2,
        ]);

        Experiencia::create([
            'titulo' => 'Investigaci??n & Prototipos',
            'empresa' => 'Blockchain & Automatizaci??n',
            'periodo' => '2024',
            'descripcion' => 'Investigaci??n en verificaci??n legal blockchain y automatizaci??n de procesos empresariales con IA.',
            'tipo' => 'investigacion',
            'orden' => 3,
        ]);

        Experiencia::create([
            'titulo' => 'Ingenier??a de Sistemas',
            'empresa' => 'Universidad',
            'periodo' => '2022 - Presente',
            'descripcion' => 'Formaci??n en ingenier??a de software, arquitectura de sistemas, bases de datos distribuidas e innovaci??n tecnol??gica.',
            'tipo' => 'educacion',
            'orden' => 4,
        ]);

        Experiencia::create([
            'titulo' => 'Colaboraciones en Equipo',
            'empresa' => 'Proyectos grupales',
            'periodo' => '2023 - Presente',
            'descripcion' => 'Trabajo en equipos multidisciplinarios para desarrollar soluciones tecnol??gicas integrales.',
            'tipo' => 'equipo',
            'orden' => 5,
        ]);

        // Testimonios
        Testimonio::create([
            'nombre' => 'Carlos Mendoza',
            'cargo' => 'CEO, TechStartup Per??',
            'avatar' => null,
            'texto' => 'Jean desarroll?? nuestro sistema de gesti??n completo. La arquitectura y calidad del c??digo son excepcionales. Un verdadero ingeniero de sistemas.',
            'valoracion' => 5,
            'activo' => true,
        ]);

        Testimonio::create([
            'nombre' => 'Mar??a Garc??a',
            'cargo' => 'CTO, DigitalSolutions',
            'avatar' => null,
            'texto' => 'Trabajar con Jean fue una experiencia incre??ble. Su enfoque en arquitectura escalable y buenas pr??cticas hizo la diferencia en nuestro producto.',
            'valoracion' => 5,
            'activo' => true,
        ]);

        Testimonio::create([
            'nombre' => 'Andr??s L??pez',
            'cargo' => 'Project Manager, InnovaTech',
            'avatar' => null,
            'texto' => 'Profesionalismo y calidad t??cnica superior. Jean no solo escribe c??digo, construye soluciones empresariales completas con visi??n de arquitecto.',
            'valoracion' => 5,
            'activo' => true,
        ]);

    }
}
