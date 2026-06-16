<?php

namespace App\Helpers;

class SvglHelper
{
    protected static $mapping = [
        'react' => [
            'light' => 'https://svgl.app/library/react_light.svg',
            'dark' => 'https://svgl.app/library/react_dark.svg',
        ],
        'next.js' => 'https://svgl.app/library/nextjs_icon_dark.svg',
        'nextjs' => 'https://svgl.app/library/nextjs_icon_dark.svg',
        'typescript' => 'https://svgl.app/library/typescript.svg',
        'tailwind css' => 'https://svgl.app/library/tailwindcss.svg',
        'tailwindcss' => 'https://svgl.app/library/tailwindcss.svg',
        'framer' => [
            'light' => 'https://svgl.app/library/framer.svg',
            'dark' => 'https://svgl.app/library/framer_dark.svg',
        ],
        'framer motion' => [
            'light' => 'https://svgl.app/library/framer.svg',
            'dark' => 'https://svgl.app/library/framer_dark.svg',
        ],
        'node.js' => 'https://svgl.app/library/nodejs.svg',
        'nodejs' => 'https://svgl.app/library/nodejs.svg',
        'node' => 'https://svgl.app/library/nodejs.svg',
        'express.js' => [
            'light' => 'https://svgl.app/library/expressjs.svg',
            'dark' => 'https://svgl.app/library/expressjs_dark.svg',
        ],
        'expressjs' => [
            'light' => 'https://svgl.app/library/expressjs.svg',
            'dark' => 'https://svgl.app/library/expressjs_dark.svg',
        ],
        'express' => [
            'light' => 'https://svgl.app/library/expressjs.svg',
            'dark' => 'https://svgl.app/library/expressjs_dark.svg',
        ],
        'python' => 'https://svgl.app/library/python.svg',
        'php' => [
            'light' => 'https://svgl.app/library/php.svg',
            'dark' => 'https://svgl.app/library/php_dark.svg',
        ],
        'graphql' => 'https://svgl.app/library/graphql.svg',
        'postgresql' => 'https://svgl.app/library/postgresql.svg',
        'postgres' => 'https://svgl.app/library/postgresql.svg',
        'sql server' => 'https://svgl.app/library/sql-server.svg',
        'microsoft sql server' => 'https://svgl.app/library/sql-server.svg',
        'prisma' => [
            'light' => 'https://svgl.app/library/prisma.svg',
            'dark' => 'https://svgl.app/library/prisma_dark.svg',
        ],
        'prisma orm' => [
            'light' => 'https://svgl.app/library/prisma.svg',
            'dark' => 'https://svgl.app/library/prisma_dark.svg',
        ],
        'firebase' => 'https://svgl.app/library/firebase.svg',
        'mongodb' => [
            'light' => 'https://svgl.app/library/mongodb-icon-light.svg',
            'dark' => 'https://svgl.app/library/mongodb-icon-dark.svg',
        ],
        'docker' => 'https://svgl.app/library/docker.svg',
        'vercel' => [
            'light' => 'https://svgl.app/library/vercel.svg',
            'dark' => 'https://svgl.app/library/vercel_dark.svg',
        ],
        'railway' => [
            'light' => 'https://svgl.app/library/railway.svg',
            'dark' => 'https://svgl.app/library/railway_dark.svg',
        ],
        'amazon web services' => [
            'light' => 'https://svgl.app/library/aws_light.svg',
            'dark' => 'https://svgl.app/library/aws_dark.svg',
        ],
        'aws' => [
            'light' => 'https://svgl.app/library/aws_light.svg',
            'dark' => 'https://svgl.app/library/aws_dark.svg',
        ],
        'git' => 'https://svgl.app/library/git.svg',
        'github' => [
            'light' => 'https://svgl.app/library/github_light.svg',
            'dark' => 'https://svgl.app/library/github_dark.svg',
        ],
        'linkedin' => 'https://svgl.app/library/linkedin.svg',
        'whatsapp' => 'https://svgl.app/library/whatsapp-icon.svg',
    ];

    public static function getIcon($name, $fallback = '')
    {
        $key = strtolower(trim($name));
        if (isset(self::$mapping[$key])) {
            return self::$mapping[$key];
        }
        return $fallback;
    }

    public static function renderIconHtml($name, $class = 'w-4 h-4', $fallback = '')
    {
        $icon = self::getIcon($name);
        if (!$icon) {
            return $fallback;
        }

        if (is_array($icon)) {
            $lightUrl = $icon['light'];
            $darkUrl = $icon['dark'];
            return '<img src="' . $lightUrl . '" class="' . $class . ' dark:hidden object-contain" alt="' . $name . '" loading="lazy">' .
                   '<img src="' . $darkUrl . '" class="hidden dark:block ' . $class . ' object-contain" alt="' . $name . '" loading="lazy">';
        }

        return '<img src="' . $icon . '" class="' . $class . ' object-contain" alt="' . $name . '" loading="lazy">';
    }
}
