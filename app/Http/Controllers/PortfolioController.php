<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $personal = [
            'name' => 'Kevin Abel Venegas Bermúdez',
            'role' => 'Junior Systems Engineer',
            'location' => 'Heredia, Costa Rica',
            'email' => 'kevinabelvenegasbermudez@gmail.com',
            'linkedin' => 'https://linkedin.com/in/kevin-venegas-bermudez-22b314239',
            'phone' => '+506 8558 7494',
            'bio' => 'Egresado de Ingeniería en Sistemas con experiencia en desarrollo Full Stack utilizando Java (Spring Boot), React, PHP (Laravel) y bases de datos relacionales. Experiencia en diseño e integración de APIs REST, desarrollo de interfaces web modernas y automatización de procesos. Orientado a la calidad del código, resolución de problemas y aprendizaje rápido en entornos colaborativos.',
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

        $experience = [
            [
                'company' => 'LetParley',
                'role' => 'Pasante de Desarrollo de Software',
                'location' => 'Remoto — Costa Rica',
                'date' => '2025',
                'bullets' => [
                    'Desarrollo de asistentes virtuales empresariales utilizando n8n con flujos conversacionales, lógica condicional y programación de tareas.',
                    'Diseño e implementación de 15+ flujos de automatización para reservas y gestión de calendarios.',
                    'Desarrollo de la landing page LPTrips con React, Vite y Tailwind CSS, mejorando SEO y accesibilidad.',
                    'Colaboración en la optimización de la landing page MenuPlatz.',
                    'Documentación técnica de integraciones, analítica y control de accesos.',
                    'Trabajo bajo metodología Scrum utilizando Azure DevOps, Notion y GitHub.',
                ],
            ],
        ];

        $projects = [
            [
                'name' => 'Force Gym',
                'description' => 'Aplicación Web Full Stack para gestión de gimnasio. API REST con Java Spring Boot, autenticación JWT, control de acceso basado en roles, gestión de usuarios, membresías y notificaciones automáticas. Frontend con React y dashboard administrativo con gráficas y exportación de datos.',
                'tech' => ['Java', 'Spring Boot', 'React', 'SQL Server', 'Jest', 'GitHub Actions', 'JWT', 'CI/CD'],
                'year' => '2024–2025',
                'github' => null,
                'demo' => null,
            ],
            [
                'name' => 'Orbis',
                'description' => 'Aplicación web para planificación de viajes con IA. Integración de múltiples APIs REST (REST Countries, Wikipedia). Chatbot utilizando modelos de IA open source. Participación en arquitectura, base de datos y UI/UX.',
                'tech' => ['React', 'REST APIs', 'IA', 'REST Countries', 'Wikipedia API'],
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
            'personal', 'skills', 'languages', 'projects',
            'experience', 'education', 'certifications'
        ));
    }
}
