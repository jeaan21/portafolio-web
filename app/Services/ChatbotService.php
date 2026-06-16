<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Exception;

class ChatbotService
{
    private $faq = [
        [
            'keywords' => ["quien", "eres", "quién", "presentate", "presentación", "habla", "sobre", "conocerte"],
            'answer' => "Soy Jean Arias, Ingeniero de Sistemas y Full Stack Developer. Estudio Ingeniería de Sistemas en la universidad y construyo soluciones empresariales con tecnologías modernas. Me especializo en arquitectura de software, APIs escalables y dashboards analíticos. Trabajo con React, Next.js, Node.js, PostgreSQL y más."
        ],
        [
            'keywords' => ["especialidad", "especializas", "especializado", "fullstack", "full stack", "frontend", "backend", "tipo", "desarrollador"],
            'answer' => "Soy Full Stack Developer con enfoque en sistemas empresariales. Trabajo tanto frontend (React, Next.js, Tailwind CSS) como backend (Node.js, Express, Python) y bases de datos (PostgreSQL, SQL Server, Prisma ORM). Mi fuerte es la arquitectura de software: diseño sistemas completos desde la base de datos hasta la interfaz de usuario."
        ],
        [
            'keywords' => ["haces", "dedicas", "trabajas", "haciendo", "actualmente"],
            'answer' => "Actualmente estudio Ingeniería de Sistemas y desarrollo proyectos freelance. Estoy construyendo sistemas de gestión empresarial como plataformas para lavanderías, clínicas veterinarias y restaurantes. También investigo integración de IA en sistemas empresariales y automatización de procesos."
        ],
        [
            'keywords' => ["diferencia", "diferente", "destaca", "único", "distinto", "por qué"],
            'answer' => "Mi enfoque en arquitectura de sistemas empresariales. No solo escribo código, diseño soluciones completas pensando en escalabilidad, seguridad y mantenibilidad. Combino conocimientos de ingeniería de sistemas con desarrollo práctico, lo que me permite entender tanto el negocio como la tecnología. Cada proyecto que entrego es un sistema listo para producción."
        ],
        [
            'keywords' => ["estudias", "estudiaste", "universidad", "carrera", "formación", "educación", "ingeniería"],
            'answer' => "Estudio Ingeniería de Sistemas en la universidad desde 2022. Mi formación incluye arquitectura de software, bases de datos distribuidas, redes, algoritmos y estructuras de datos. Complemento mi educación con cursos y proyectos prácticos en tecnologías modernas como Next.js, Prisma, Docker y cloud computing."
        ],
        [
            'keywords' => ["tecnologias", "tecnologías", "stack", "tools", "herramientas", "manejas", "sabes", "lenguajes"],
            'answer' => "Mi stack principal incluye: React, Next.js, TypeScript, Tailwind CSS (frontend); Node.js, Express, Python (backend); PostgreSQL, SQL Server, Prisma ORM (bases de datos); Docker, Vercel, Railway (deploy). También trabajo con Firebase, Redis, GraphQL, WebSockets y APIs REST. En IA uso OpenAI APIs y prompt engineering."
        ],
        [
            'keywords' => ["react", "nextjs", "next", "js", "framework", "frontend"],
            'answer' => "Tengo amplia experiencia construyendo aplicaciones empresariales con React y Next.js. Uso Next.js como mi framework principal por su rendimiento, SSR, App Router y facilidad de deploy en Vercel. He desarrollado dashboards analytics, sistemas de gestión, plataformas con autenticación y APIs REST integradas."
        ],
        [
            'keywords' => ["base", "datos", "database", "bases", "postgresql", "sql", "prisma", "orm"],
            'answer' => "Trabajo principalmente con PostgreSQL y SQL Server. Uso Prisma ORM para la capa de datos, lo que me permite modelar esquemas complejos con relaciones, índices y migraciones. También tengo experiencia con Firebase (tiempo real) y MongoDB. He diseñado bases de datos para sistemas de gestión, analytics y aplicaciones en tiempo real."
        ],
        [
            'keywords' => ["docker", "cloud", "devops", "deploy", "despliegue", "servidores", "nube"],
            'answer' => "Sí, uso Docker para contenerizar aplicaciones y asegurar entornos consistentes. Despliego en Vercel (frontend), Railway (backend) y AWS (infraestructura). Manejo CI/CD para integración y despliegue continuo. También configuro servidores con Node.js, Nginx y gestión de variables de entorno."
        ],
        [
            'keywords' => ["inteligencia", "artificial", "ia", "ai", "machine learning", "ml", "openai", "gpt"],
            'answer' => "Sí, integro IA en sistemas empresariales. Uso OpenAI APIs para chatbots inteligentes, automatización de procesos y análisis predictivo. También hago prompt engineering para optimizar respuestas de modelos de lenguaje. He desarrollado asistentes virtuales, sistemas de recomendación y dashboards con predicciones basadas en ML."
        ],
        [
            'keywords' => ["mejor", "proyecto", "destacado", "importante", "principal", "mayor"],
            'answer' => "Todos son importantes, pero Laundry Management System es el más completo: un sistema integral de gestión para lavanderías industriales con control de inventario, órdenes de servicio, facturación electrónica y dashboard analytics en tiempo real. Procesa 500+ órdenes por día. Está construido con Next.js, Node.js, PostgreSQL, Prisma y Docker."
        ],
        [
            'keywords' => ["proyectos", "muestra", "enséñame", "ver", "sistemas", "desarrollado", "hecho", "trabajos"],
            'answer' => "He desarrollado sistemas empresariales completos: Laundry Management System (gestión de lavanderías), Veterinary Management System (clínicas veterinarias), Restaurant Management Platform (restaurantes con POS y delivery), y Blockchain Legal Verification (contratos inteligentes). También tengo proyectos más recientes como SecureDrive (control vehicular minero), Minera Certrum (dashboard minero), Taurus Gamestation (LAN center) y Servicios Generales Samahadi (página corporativa)."
        ],
        [
            'keywords' => ["produccion", "producción", "live", "desplegado", "funcionando", "online"],
            'answer' => "Sí, todos mis proyectos empresariales están diseñados para producción. Los despliego en plataformas cloud como Vercel y Railway con bases de datos en producción, autenticación, y dashboards funcionando. Cada proyecto incluye documentación de API, casos de uso reales y métricas de rendimiento."
        ],
        [
            'keywords' => ["dificil", "difícil", "complejo", "reto", "desafio", "desafío"],
            'answer' => "Blockchain Legal Verification fue el más desafiante porque combinaba contratos inteligentes en Solidity con Ethereum, un backend en Node.js y un frontend en React. Integrar blockchain con sistemas tradicionales requería entender Web3, firmas digitales y trazabilidad de documentos. Fue un proyecto que me empujó a aprender tecnologías completamente nuevas."
        ],
        [
            'keywords' => ["equipo", "solo", "grupo", "colaboración", "trabajaste", "solo o acompañado"],
            'answer' => "He trabajado ambos. Algunos proyectos los desarrollé completamente solo (arquitectura, backend, frontend, deploy). En otros colaboré en equipos multidisciplinarios, especialmente en proyectos universitarios y trabajos freelance donde coordiné con diseñadores, otros desarrolladores y stakeholders del negocio."
        ],
        [
            'keywords' => ["experiencia", "laboral", "trabajo", "empleo", "años", "trayectoria"],
            'answer' => "Sí, tengo experiencia como Freelance Full Stack Developer desde 2024, desarrollando sistemas de gestión empresarial para startups y PyMEs. He creado plataformas completas para lavanderías, clínicas veterinarias y restaurantes. También tengo experiencia en investigación de blockchain y automatización con IA. Mi trayectoria incluye proyectos académicos-profesionales desde 2023."
        ],
        [
            'keywords' => ["freelance", "freelancer", "cliente", "contrato", "independiente"],
            'answer' => "Sí, trabajo como Freelance Full Stack Developer desde 2024. He desarrollado sistemas de gestión empresarial, dashboards analíticos y APIs REST para startups y PyMEs. Trabajo directamente con clientes, desde entender sus necesidades hasta entregar el producto final desplegado y funcionando."
        ],
        [
            'keywords' => ["universidad", "universitario", "académico", "estudiante", "proyectos universitarios"],
            'answer' => "En la universidad he desarrollado sistemas de gestión empresarial como proyectos académicos-profesionales, incluyendo plataformas para lavanderías, clínicas veterinarias y restaurantes. Estos proyectos usan arquitectura moderna con React, Node.js, PostgreSQL y Prisma. También he participado en investigaciones sobre blockchain y automatización."
        ],
        [
            'keywords' => ["empresarial", "empresariales", "negocio", "sistemas", "gestión", "software gestión"],
            'answer' => "Desarrollo sistemas completos de gestión empresarial: control de inventarios, facturación electrónica, dashboards analytics, gestión de clientes (CRM), órdenes de servicio, agenda inteligente, y más. Mis sistemas están diseñados para automatizar procesos de negocio reales con múltiples roles de usuario, reportes y métricas en tiempo real."
        ],
        [
            'keywords' => ["dashboard", "dashboards", "analytics", "reportes", "gráficos", "estadísticas"],
            'answer' => "Sí, he desarrollado múltiples dashboards con métricas en tiempo real, gráficos interactivos (usando Recharts), filtros dinámicos y exportación de datos. Mis dashboards incluyen analytics de ventas, rendimiento del sistema, estadísticas de usuarios y KPIs personalizados. Un ejemplo es el dashboard de Laundry Management System que muestra órdenes en tiempo real, ingresos y eficiencia operativa."
        ],
        [
            'keywords' => ["automatización", "automatizacion", "automatizar", "procesos", "eficiencia"],
            'answer' => "Sí, automatizo procesos empresariales usando IA y reglas de negocio. He implementado notificaciones automáticas, generación de reportes programados, flujos de aprobación, y respuestas automatizadas. También uso prompt engineering para automatizar tareas con modelos de lenguaje."
        ],
        [
            'keywords' => ["chatbot", "chat", "bot", "asistente", "virtual", "conversacional"],
            'answer' => "Sí, he desarrollado asistentes virtuales con IA para atención al cliente y automatización de respuestas. Integro OpenAI APIs para crear chatbots inteligentes que entienden contexto y responden naturalmente. Este mismo chatbot que estás usando es un ejemplo de mi trabajo con sistemas conversacionales."
        ],
        [
            'keywords' => ["prompt", "engineering", "ingeniería", "instrucciones", "gpt"],
            'answer' => "Sí, diseño prompts optimizados para modelos de IA generativa aplicados a automatización empresarial. Creo instrucciones estructuradas que mejoran la precisión y relevancia de las respuestas de modelos como GPT, adaptándolos a casos de uso específicos como atención al cliente, análisis de datos y generación de contenido."
        ],
        [
            'keywords' => ["api", "apis", "rest", "endpoints", "servicios", "backend"],
            'answer' => "He desarrollado APIs REST completas con autenticación JWT, CRUD completo, validación de datos con Zod, y documentación de endpoints. Mis APIs incluyen rutas para proyectos, mensajes, analytics y dashboard. Uso Next.js API Routes y Node.js con Express. Ejemplo: POST /api/messages, GET /api/projects, GET /api/analytics."
        ],
        [
            'keywords' => ["autenticación", "autenticacion", "auth", "login", "jwt", "sesión", "seguridad"],
            'answer' => "Uso NextAuth.js con estrategia de JWT para autenticación segura. Las contraseñas se almacenan hasheadas con bcryptjs. Manejo roles de usuario (admin, user), sesiones persistentes, y protección de rutas. También implemento rate limiting para prevenir abusos en las APIs."
        ],
        [
            'keywords' => ["arquitectura", "patrón", "estructura", "organización", "código", "escalable"],
            'answer' => "Diseño arquitectura basada en capas: Frontend (Next.js, React), API Layer (REST, JWT), Auth & Security (NextAuth), Database (PostgreSQL, Prisma), Business Logic (servicios, validaciones) y Deployment (Vercel, Docker). Sigo principios de código limpio, separación de responsabilidades y diseño escalable. Mis proyectos usan el patrón de módulos con servicios y controladores bien definidos."
        ],
        [
            'keywords' => ["disponible", "disponibilidad", "trabajar", "contratar", "empleo", "prácticas", "practicas"],
            'answer' => "Sí, estoy disponible para proyectos freelance y oportunidades laborales. Trabajo remoto desde Perú y acepto proyectos internacionales. Mi horario es flexible y puedo adaptarme a diferentes husos horarios. Actualmente busco oportunidades donde pueda aplicar mi experiencia en desarrollo full stack y arquitectura de sistemas."
        ],
        [
            'keywords' => ["remoto", "presencial", "hibrido", "híbrido", "modalidad", "ubicación", "país", "perú"],
            'answer' => "Sí, trabajo remoto desde Perú. Estoy abierto a modalidades 100% remoto, híbrido o presencial dependiendo de la oportunidad. Tengo experiencia trabajando con equipos distribuidos y manejo herramientas de colaboración como Git, Slack y metodologías ágiles."
        ],
        [
            'keywords' => ["horario", "horas", "tiempo", "dedicación", "full time", "part time"],
            'answer' => "Tengo disponibilidad flexible. Puedo ajustarme a horarios de oficina en Perú (GMT-5) y también a husos horarios de USA y Europa. Para proyectos freelance, coordino horarios según la necesidad del cliente."
        ],
        [
            'keywords' => ["contacto", "contactar", "comunicar", "hablar", "email", "correo", "mensaje"],
            'answer' => "Puedes contactarme a través del formulario en la sección de contacto de mi web, enviarme un correo a jean2015arias@gmail.com, o escribirme por LinkedIn. También tengo WhatsApp disponible al +51 935 515 325. Respondo en máximo 24 horas."
        ],
        [
            'keywords' => ["linkedin", "github", "perfil", "social", "redes"],
            'answer' => "Mi GitHub tiene todos mis proyectos públicos con código fuente, README y documentación. Mi LinkedIn tiene mi experiencia profesional y formación. Encuentras los enlaces directos en la sección de contacto de mi portafolio, tanto en el formulario como en el footer."
        ],
        [
            'keywords' => ["cv", "currículum", "curriculum", "resume", "hoja", "vida", "descargar"],
            'answer' => "Sí, puedes descargar mi CV en PDF desde la sección principal. Solo haz clic en el botón 'Descargar CV' en la página de inicio. Incluye mi experiencia, proyectos, tecnologías y formación académica."
        ],
        [
            'keywords' => ["estado", "state", "react", "manejo", "gestión", "context", "redux"],
            'answer' => "Uso React hooks (useState, useEffect, useReducer) para estados locales y Context API para estados globales. En proyectos más complejos, utilizo React Query (TanStack Query) para manejo de estado del servidor con caching y sincronización automática. Evito dependencias externas innecesarias, prefiero la API nativa de React."
        ],
        [
            'keywords' => ["optimizar", "optimización", "rendimiento", "performance", "rápido", "lento", "consultas"],
            'answer' => "Optimizo consultas SQL usando índices estratégicos, evitando N+1 queries con Prisma (include/select), paginación con cursor-based o offset, y planificación de consultas. También uso eager loading y lazy loading según el caso. En el frontend, implemento lazy loading de imágenes, code splitting con Next.js y memoización con useMemo/useCallback."
        ],
        [
            'keywords' => ["seguridad", "segura", "proteger", "protección", "hack", "vulnerable"],
            'answer' => "Implemento múltiples capas de seguridad: autenticación JWT con NextAuth.js, hashing de contraseñas con bcryptjs, validación de datos con Zod, rate limiting para prevenir ataques de fuerza bruta, sanitización de inputs, headers de seguridad (CORS, CSP), y manejo seguro de variables de entorno. También sigo el principio de mínimo privilegio en bases de datos."
        ],
        [
            'keywords' => ["desplegar", "deploy", "producción", "publicar", "subir"],
            'answer' => "Uso Vercel para frontends Next.js (despliegue automático desde GitHub), Railway para backends Node.js y PostgreSQL, y Docker para entornos contenerizados. Configuro CI/CD para que cada push a main despliegue automáticamente. Manejo variables de entorno, dominios personalizados y certificados SSL."
        ],
        [
            'keywords' => ["roles", "permisos", "usuarios", "admin", "administrador", "acceso"],
            'answer' => "Implemento sistemas de roles con autenticación JWT que incluyen claims de usuario. Distingo entre roles como admin y user, protegiendo rutas y componentes según el nivel de acceso. En la base de datos, uso enum para roles y middleware en las API routes para verificar permisos antes de procesar solicitudes."
        ],
    ];

    private $greetings = ["hola", "buenas", "hey", "saludos", "buenos dias", "buenas tardes", "que tal"];
    private $farewells = ["adios", "chao", "bye", "gracias", "luego", "nos vemos"];

    private $greetingResponses = [
        "¡Hola! Soy el asistente virtual de Jean Arias. Puedo responderte preguntas sobre su experiencia, proyectos, tecnologías y más. ¿En qué puedo ayudarte?",
        "¡Hola! Bienvenido al portafolio de Jean. Puedes preguntarme lo que quieras saber sobre él."
    ];

    private $farewellResponses = [
        "¡Gracias por tu interés! Si tienes más preguntas, aquí estoy. ¡Que tengas un excelente día!",
        "¡Gracias por visitar el portafolio! No dudes en volver si necesitas algo más."
    ];

    private $defaultResponse = "No encontré una respuesta exacta a tu pregunta. ¿Podrías ser más específico? O puedes escribirme directamente en la sección de contacto y te responderé personalmente.";

    private function normalize($str)
    {
        $str = strtolower($str);
        $str = preg_replace('/[áàäâ]/u', 'a', $str);
        $str = preg_replace('/[éèëê]/u', 'e', $str);
        $str = preg_replace('/[íìïî]/u', 'i', $str);
        $str = preg_replace('/[óòöô]/u', 'o', $str);
        $str = preg_replace('/[úùüû]/u', 'u', $str);
        $str = preg_replace('/ñ/u', 'n', $str);
        return preg_replace('/[^a-z0-9\s]/', '', $str);
    }

    private function callGemini($message)
    {
        $apiKey = env('GEMINI_API_KEY') ?: config('app.gemini_api_key');

        if (empty($apiKey) || $apiKey === 'TU_GEMINI_API_KEY_AQUI') {
            return null;
        }

        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-flash-latest:generateContent?key=" . $apiKey;

        // Build official context from FAQ data dynamically
        $faqContext = "Base de conocimiento oficial sobre Jean Arias:\n";
        foreach ($this->faq as $item) {
            $faqContext .= "- Temas: " . implode(', ', $item['keywords']) . "\n  Respuesta: " . $item['answer'] . "\n\n";
        }

        $systemInstruction = "Eres el asistente virtual inteligente oficial de Jean Arias. "
            . "Jean Arias es un Ingeniero de Sistemas y Desarrollador Full Stack. "
            . "Tu objetivo es responder de forma amable, profesional, concisa y siempre en español a preguntas sobre él basándote exclusivamente en esta base de conocimientos oficiales:\n\n"
            . $faqContext
            . "\nInstrucciones críticas:\n"
            . "1. Habla de Jean Arias en tercera persona (él) o actúa como su representante oficial.\n"
            . "2. Mantén respuestas concisas, legibles y directas (no más de 3-4 párrafos).\n"
            . "3. Si te preguntan sobre temas totalmente ajenos a Jean Arias, su portafolio o tecnología, responde educadamente que tu propósito es dar información sobre la trayectoria de Jean Arias y ofréceles contactarlo directamente por correo (jean2015arias@gmail.com) o WhatsApp (+51 935 515 325).\n"
            . "4. No inventes datos que no estén en la base de conocimientos.";

        try {
            $response = Http::timeout(10)->post($url, [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $message]
                        ]
                    ]
                ],
                'systemInstruction' => [
                    'parts' => [
                        ['text' => $systemInstruction]
                    ]
                ],
                'generationConfig' => [
                    'temperature' => 0.7,
                    'maxOutputTokens' => 800
                ]
            ]);

            if ($response->successful()) {
                $result = $response->json();
                if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
                    return trim($result['candidates'][0]['content']['parts'][0]['text']);
                }
            }
        } catch (Exception $e) {
            logger()->error('Error llamando a Gemini en ChatbotService: ' . $e->getMessage());
        }

        return null;
    }

    public function processMessage($message)
    {
        // 1. Intentar responder usando Gemini API
        try {
            $geminiResponse = $this->callGemini($message);
            if ($geminiResponse !== null) {
                return $geminiResponse;
            }
        } catch (Exception $e) {
            // Silenciosamente continuar al fallback local en caso de error
        }

        // 2. Fallback: Lógica local clásica
        $normalizedMsg = $this->normalize($message);

        // Check Greetings
        foreach ($this->greetings as $g) {
            if (str_contains($normalizedMsg, $g)) {
                return $this->greetingResponses[array_rand($this->greetingResponses)];
            }
        }

        // Check Farewells
        foreach ($this->farewells as $f) {
            if (str_contains($normalizedMsg, $f)) {
                return $this->farewellResponses[array_rand($this->farewellResponses)];
            }
        }

        // Search in FAQ
        $inputWords = array_filter(explode(' ', $normalizedMsg), function ($w) {
            return strlen($w) > 1;
        });

        if (empty($inputWords)) return $this->defaultResponse;

        $bestMatch = null;
        $highestScore = 0;

        foreach ($this->faq as $item) {
            $matched = 0;
            foreach ($inputWords as $iw) {
                foreach ($item['keywords'] as $kw) {
                    if ($iw === $kw || str_starts_with($kw, $iw) || str_starts_with($iw, $kw)) {
                        $matched++;
                    }
                }
            }

            $score = $matched / max(count($item['keywords']), count($inputWords));
            if ($score > $highestScore) {
                $highestScore = $score;
                $bestMatch = $item['answer'];
            }
        }

        if ($highestScore >= 0.2) {
            return $bestMatch;
        }

        return $this->defaultResponse;
    }
}
