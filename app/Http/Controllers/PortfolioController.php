<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        // Detect language from query param, session, or default to Spanish
        $lang = $request->query('lang', session('lang', 'es'));

        // Validate language
        if (! in_array($lang, ['es', 'en'])) {
            $lang = 'es';
        }

        // Store in session for persistence
        session(['lang' => $lang]);

        // Localized content
        $content = [
            'es' => [
                'nav' => [
                    'projects' => 'Proyectos',
                    'skills' => 'Habilidades',
                    'experience' => 'Experiencia',
                    'contact' => 'Contacto',
                ],
                'hero' => [
                    'role' => 'Ingeniero de Sistemas | Desarrollador Full-Stack',
                    'bio' => 'Egresado de Ingeniería en Sistemas con experiencia en desarrollo Full Stack utilizando Java (Spring Boot), React, PHP (Laravel) y bases de datos relacionales. Experiencia en diseño e integración de APIs REST, desarrollo de interfaces web modernas y automatización de procesos. Orientado a la calidad del código, resolución de problemas y aprendizaje rápido en entornos colaborativos.',
                    'view_projects' => 'Ver Proyectos',
                    'download_cv' => 'Descargar CV',
                ],
                'projects' => [
                    'title' => 'Proyectos Destacados',
                    'subtitle' => 'Proyectos que he construido, desde APIs hasta aplicaciones móviles.',
                ],
                'skills' => [
                    'title' => 'Habilidades Técnicas',
                    'subtitle' => 'Tecnologías y herramientas que utilizo para construir soluciones digitales.',
                    'languages' => 'Idiomas',
                ],
                'experience' => [
                    'title' => 'Experiencia Profesional',
                    'subtitle' => 'Mi trayectoria profesional y contribuciones más recientes.',
                ],
                'certifications' => [
                    'title' => 'Certificaciones',
                    'subtitle' => 'Certificaciones y cursos profesionales completados.',
                ],
                'education' => [
                    'title' => 'Educación',
                    'subtitle' => 'Formación académica y desarrollo profesional.',
                ],
                'contact' => [
                    'title' => 'Contacto',
                    'subtitle' => '¿Buscas un desarrollador para tu próximo proyecto o ofreces oportunidades laborales? Escríbeme.',
                    'use_form' => 'Usa el formulario para contactarme',
                    'linkedin' => 'Kevin Venegas Bermúdez',
                    'form' => [
                        'name' => 'Nombre',
                        'email' => 'Email',
                        'message' => 'Mensaje',
                        'name_placeholder' => 'Tu nombre',
                        'email_placeholder' => 'tu@email.com',
                        'message_placeholder' => '¿En qué puedo ayudarte?',
                        'submit' => 'Enviar Mensaje',
                        'sent' => '¡Mensaje enviado! Me pondré en contacto contigo lo antes posible.',
                    ],
                ],
            ],
            'en' => [
                'nav' => [
                    'projects' => 'Projects',
                    'skills' => 'Skills',
                    'experience' => 'Experience',
                    'contact' => 'Contact',
                ],
                'hero' => [
                    'role' => 'Systems Engineer | Full-Stack Developer',
                    'bio' => 'Systems Engineering graduate with experience in Full Stack development using Java (Spring Boot), React, PHP (Laravel), and relational databases. Experience in REST API design and integration, modern web interface development, and process automation. Focused on code quality, problem-solving, and quick learning in collaborative environments.',
                    'view_projects' => 'View Projects',
                    'download_cv' => 'Download CV',
                ],
                'projects' => [
                    'title' => 'Featured Projects',
                    'subtitle' => 'Projects I\'ve built, from APIs to mobile applications.',
                ],
                'skills' => [
                    'title' => 'Technical Skills',
                    'subtitle' => 'Technologies and tools I use to build digital solutions.',
                    'languages' => 'Languages',
                ],
                'experience' => [
                    'title' => 'Professional Experience',
                    'subtitle' => 'My professional journey and most recent contributions.',
                ],
                'certifications' => [
                    'title' => 'Certifications',
                    'subtitle' => 'Professional certifications and courses completed.',
                ],
                'education' => [
                    'title' => 'Education',
                    'subtitle' => 'Academic background and professional development.',
                ],
                'contact' => [
                    'title' => 'Contact',
                    'subtitle' => 'Looking for a developer for your next project or offering job opportunities? Reach out.',
                    'use_form' => 'Use the form to contact me',
                    'linkedin' => 'Kevin Venegas Bermúdez',
                    'form' => [
                        'name' => 'Name',
                        'email' => 'Email',
                        'message' => 'Message',
                        'name_placeholder' => 'Your name',
                        'email_placeholder' => 'your@email.com',
                        'message_placeholder' => 'How can I help you?',
                        'submit' => 'Send Message',
                        'sent' => 'Message sent! I\'ll get back to you as soon as possible.',
                    ],
                ],
            ],
        ];

        // Experience and projects - localized
        $experience = [
            'es' => [
                [
                    'company' => 'LetParley',
                    'role' => 'Pasante de Desarrollo de Software',
                    'location' => 'Remoto — Costa Rica',
                    'date' => '2025',
                    'bullets' => [
                        'Desarrollo de asistentes virtuales empresariales utilizando n8n con flujos conversacionales, lógica condicional y programación de tareas.',
                        'Optimización de arquitectura serverless en n8n mediante refinamiento de flujos lógicos, reduciendo el consumo de tokens de LLM y costos operativos.',
                        'Diseño e implementación de 15+ flujos de automatización para reservas y gestión de calendarios.',
                        'Desarrollo de la landing page LPTrips con React, Vite y Tailwind CSS, mejorando SEO y accesibilidad.',
                        'Colaboración en la optimización de la landing page MenuPlatz.',
                        'Documentación técnica de integraciones, analítica y control de accesos.',
                        'Trabajo bajo metodología Scrum utilizando Azure DevOps, Notion y GitHub.',
                    ],
                ],
            ],
            'en' => [
                [
                    'company' => 'LetParley',
                    'role' => 'Software Development Intern',
                    'location' => 'Remote — Costa Rica',
                    'date' => '2025',
                    'bullets' => [
                        'Development of enterprise virtual assistants using n8n with conversational flows, conditional logic, and task scheduling.',
                        'Serverless architecture optimization in n8n through logical flow refinement, reducing LLM token consumption and operational costs.',
                        'Design and implementation of 15+ automation workflows for booking and calendar management.',
                        'Development of LPTrips landing page with React, Vite and Tailwind CSS, improving SEO and accessibility.',
                        'Collaboration on optimization of MenuPlatz landing page.',
                        'Technical documentation of integrations, analytics, and access control.',
                        'Work under Scrum methodology using Azure DevOps, Notion, and GitHub.',
                    ],
                ],
            ],
        ];

        $projectDetails = [
            'es' => [
                [
                    'name' => 'Force Gym',
                    'description' => 'Sistema de gestión integral para gimnasio (Enterprise Suite). API REST con Java Spring Boot, autenticación JWT, control de acceso basado en roles, gestión de usuarios, membresías y notificaciones automáticas. Dashboard administrativo con métricas en tiempo real para optimización de finanzas. Implementación real para Force Gym. Estrategia de ambientes: diseño de arquitectura híbrida utilizando Supabase para prototipado rápido y migración a SQL Server para entornos de producción de alta disponibilidad.',
                    'tech' => ['Java', 'Spring Boot', 'React', 'SQL Server', 'Supabase', 'Jest', 'GitHub Actions', 'JWT', 'CI/CD'],
                    'year' => '2024–2025',
                    'github' => null,
                    'demo' => null,
                ],
                [
                    'name' => 'Orbis',
                    'description' => 'Aplicación web para planificación de viajes con IA. Integración de múltiples APIs REST (REST Countries, Wikipedia). Chatbot utilizando modelos de IA de Hugging Face con Transformers. Participación en arquitectura, base de datos y UI/UX.',
                    'tech' => ['React', 'REST APIs', 'IA', 'Hugging Face', 'Transformers'],
                    'year' => '2025',
                    'github' => null,
                    'demo' => null,
                ],
                [
                    'name' => 'Yetify',
                    'description' => 'Aplicación móvil con Kotlin y Jetpack Compose siguiendo arquitectura MVVM. Persistencia local con Room y consumo de APIs con Retrofit. Funcionalidades de tareas, recordatorios y notificaciones.',
                    'tech' => ['Kotlin', 'Jetpack Compose', 'MVVM', 'Room', 'Retrofit'],
                    'year' => '2024',
                    'github' => null,
                    'demo' => null,
                ],
            ],
            'en' => [
                [
                    'name' => 'Force Gym',
                    'description' => 'Gym management Enterprise Suite. REST API with Java Spring Boot, JWT authentication, role-based access control, user management, memberships, and automatic notifications. Administrative dashboard with real-time metrics for financial optimization. Real implementation for Force Gym. Environment Strategy: hybrid architecture design using Supabase for rapid prototyping and migration to SQL Server for high-availability production environments.',
                    'tech' => ['Java', 'Spring Boot', 'React', 'SQL Server', 'Supabase', 'Jest', 'GitHub Actions', 'JWT', 'CI/CD'],
                    'year' => '2024–2025',
                    'github' => null,
                    'demo' => null,
                ],
                [
                    'name' => 'Orbis',
                    'description' => 'Web application for travel planning with AI. Integration of multiple REST APIs (REST Countries, Wikipedia). Chatbot using Hugging Face Transformers models. Participation in architecture, database, and UI/UX.',
                    'tech' => ['React', 'REST APIs', 'IA', 'Hugging Face', 'Transformers'],
                    'year' => '2025',
                    'github' => null,
                    'demo' => null,
                ],
                [
                    'name' => 'Yetify',
                    'description' => 'Mobile application with Kotlin and Jetpack Compose following MVVM architecture. Local persistence with Room and API consumption with Retrofit. Task, reminders, and notifications features.',
                    'tech' => ['Kotlin', 'Jetpack Compose', 'MVVM', 'Room', 'Retrofit'],
                    'year' => '2024',
                    'github' => null,
                    'demo' => null,
                ],
            ],
        ];

        $personal = [
            'name' => 'Kevin Abel Venegas Bermúdez',
            'location' => 'Heredia, Costa Rica',
            'email' => 'kevinabelvenegasbermudez@gmail.com',
            'linkedin' => 'https://www.linkedin.com/in/kevin-venegas-berm%C3%BAdez/',
            'phone' => '+506 8558 7494',
        ];

        $skills = [
            'Lenguajes' => ['Java', 'JavaScript', 'TypeScript', 'Kotlin', 'PHP', 'SQL'],
            'Frameworks' => ['Spring Boot', 'React', 'React Native', 'Laravel', '.NET', 'Node.js'],
            'Backend y APIs' => ['APIs REST', 'JWT Auth', 'RBAC', 'Arquitectura en Capas'],
            'Bases de Datos' => ['SQL Server', 'MySQL', 'PostgreSQL'],
            'Desarrollo Móvil' => ['Kotlin', 'Jetpack Compose', 'Room', 'Retrofit'],
            'DevOps' => ['Git', 'Gitflow', 'GitHub Actions', 'Azure DevOps', 'Docker'],
            'Herramientas' => ['Postman', 'Figma', 'Jira', 'Notion'],
            'Metodologías' => ['Agile', 'Scrum (Certificado)'],
        ];

        $languages = [
            ['name' => 'Español', 'level' => 'Nativo'],
            ['name' => 'Inglés', 'level' => 'Intermedio'],
        ];

        $certifications = [
            [
                'name' => 'Scrum Foundation Professional Certification (SFPC)',
                'issuer' => 'CertiProf',
                'year' => null,
            ],
            [
                'name' => 'Introducción al Desarrollo con IA: De 0 a Producción',
                'issuer' => 'BIG School',
                'year' => '2026',
            ],
            [
                'name' => 'Career Accelerator con Power BI + IA',
                'issuer' => 'Daxus Latam',
                'year' => '2026',
            ],
        ];

        $education = [
            [
                'institution' => 'Universidad Nacional de Costa Rica',
                'degree' => 'Bachillerato en Ingeniería en Sistemas de Información',
                'years' => '2022 — 2025',
                'gpa' => '8.66',
            ],
        ];

        return view('portfolio', compact(
            'personal', 'skills', 'languages', 'projectDetails',
            'experience', 'education', 'certifications', 'lang', 'content'
        ));
    }
}
