<?php
/**
 * Official Brand Icons & Technology Badges Helper
 * GeerSoft IT Solutions
 * 
 * Provides authentic, pixel-perfect, colored vector SVGs for all programming languages,
 * frameworks, databases, cloud, and AI tools used across the website.
 */

if (!function_exists('get_tech_icon')) {
    function get_tech_icon($name, $size = 32, $class = '') {
        $n = strtolower(trim($name));
        $s = (int)$size;
        $cls = !empty($class) ? ' class="' . htmlspecialchars($class) . '"' : '';

        // 1. React / React.js / React Native
        if (strpos($n, 'react native') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 115.3 100" fill="none"'.$cls.' aria-label="React Native">
                <rect x="36" y="10" width="43" height="80" rx="8" fill="#1e293b" stroke="#61DAFB" stroke-width="4"/>
                <circle cx="57.5" cy="80" r="3" fill="#61DAFB"/>
                <ellipse cx="57.5" cy="46" rx="30" ry="12" stroke="#61DAFB" stroke-width="3" fill="none"/>
                <ellipse cx="57.5" cy="46" rx="30" ry="12" stroke="#61DAFB" stroke-width="3" fill="none" transform="rotate(60 57.5 46)"/>
                <ellipse cx="57.5" cy="46" rx="30" ry="12" stroke="#61DAFB" stroke-width="3" fill="none" transform="rotate(120 57.5 46)"/>
                <circle cx="57.5" cy="46" r="4.5" fill="#61DAFB"/>
            </svg>';
        }

        if (strpos($n, 'react') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="-11.5 -10.23174 23 20.46348" fill="none"'.$cls.' aria-label="React">
                <circle cx="0" cy="0" r="2.05" fill="#61DAFB"/>
                <g stroke="#61DAFB" stroke-width="1" fill="none">
                    <ellipse rx="11" ry="4.2"/>
                    <ellipse rx="11" ry="4.2" transform="rotate(60)"/>
                    <ellipse rx="11" ry="4.2" transform="rotate(120)"/>
                </g>
            </svg>';
        }

        // 2. Next.js
        if (strpos($n, 'next') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 180 180" fill="none"'.$cls.' aria-label="Next.js">
                <mask id="maskNext_'.$s.'" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="180" height="180">
                    <circle cx="90" cy="90" r="90" fill="#000"/>
                </mask>
                <g mask="url(#maskNext_'.$s.')">
                    <circle cx="90" cy="90" r="90" fill="#000"/>
                    <path d="M149.508 157.438L69.147 54H54V125.97H66.1136V69.3836L139.999 164.845C143.333 162.614 146.509 160.137 149.508 157.438Z" fill="url(#paintNext1_'.$s.')"/>
                    <rect x="115" y="54" width="12" height="72" fill="url(#paintNext2_'.$s.')"/>
                </g>
                <defs>
                    <linearGradient id="paintNext1_'.$s.'" x1="109" y1="116.5" x2="144.5" y2="160.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#fff"/>
                        <stop offset="1" stop-color="#fff" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paintNext2_'.$s.'" x1="121" y1="54" x2="120.799" y2="106.875" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#fff"/>
                        <stop offset="1" stop-color="#fff" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>';
        }

        // 3. TypeScript
        if (strpos($n, 'typescript') !== false || $n === 'ts') {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="TypeScript">
                <rect width="128" height="128" rx="20" fill="#3178C6"/>
                <path d="M72.2 40h-48v12.5h17.5v59.5h13V52.5h17.5V40zM87.4 83.2c5.8 4.2 12.3 6.6 18.8 6.6 6.8 0 10.6-3.2 10.6-8.1 0-4.6-3.7-7.2-12.7-10.7-13.7-5.1-19.8-12-19.8-21.7 0-12.4 9.9-21.4 25.8-21.4 7.6 0 14.5 2.1 20.2 6.1l-4.7 11.2c-5.1-3.4-10.8-5.1-15.8-5.1-7.2 0-10.8 3.5-10.8 7.8 0 4.6 3.7 6.8 13.5 10.7 13.7 5.4 19.3 12.5 19.3 21.8 0 13.4-10.5 22.3-27.1 22.3-9.5 0-18.4-3.1-24.5-8.2l7.2-11.3z" fill="#fff"/>
            </svg>';
        }

        // 4. JavaScript
        if (strpos($n, 'javascript') !== false || $n === 'js') {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="JavaScript">
                <rect width="128" height="128" rx="20" fill="#F7DF1E"/>
                <path d="M31.2 100.8l10.9-6.6c2.5 4.3 5.4 7.5 11 7.5 5.6 0 9.2-2.3 9.2-11.1V43h13.2v47.7c0 15.6-9.1 22.3-22.3 22.3-11.4 0-18.2-5.9-22-12.2zM80.8 98.4l10.9-6.3c3.3 5.4 8 8.8 14.5 8.8 6 0 9.8-3.1 9.8-7.4 0-5.2-4.8-7.1-13.6-10.9-12.8-5.5-18.5-12.1-18.5-22.1 0-11 8.5-19.5 21.8-19.5 9.4 0 16.3 3.6 20.8 11.5l-10.1 6.5c-2.4-4.2-5.4-6-10.7-6-4.6 0-7.7 2.9-7.7 6.5 0 4.5 3.3 6.3 12.3 10.2 13.9 6 19.9 12.4 19.9 22.9 0 12.4-9.8 20.8-24.5 20.8-13.5 0-21.7-6.5-25.6-14.7z" fill="#000"/>
            </svg>';
        }

        // 5. HTML5 & CSS3
        if (strpos($n, 'html') !== false && strpos($n, 'css') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="HTML5 & CSS3">
                <path d="M14 10l9.5 106.5L64 128l40.5-11.5L114 10H14z" fill="#E34F26"/>
                <path d="M64 117.5l32.5-9 8-90H64v99z" fill="#EF652A"/>
                <path d="M64 36.5h20.5l-1.5 16H64v15.5h17.5l-2.5 28.5L64 100.8V117l24.5-6.8 3.5-40.2h-28V54h31l3.5-39H64v21.5z" fill="#fff"/>
                <path d="M64 36.5H43.5l3.5 39.5H64V54H50l-1.5-17.5H64v-21.5H35l-7 78.5L64 102.5V86l-15.5-4.2-1-11.3H64V36.5z" fill="#EBEBEB"/>
            </svg>';
        }

        if (strpos($n, 'html') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="HTML5">
                <path d="M14 10l9.5 106.5L64 128l40.5-11.5L114 10H14z" fill="#E34F26"/>
                <path d="M64 117.5l32.5-9 8-90H64v99z" fill="#EF652A"/>
                <path d="M64 36.5h20.5l-1.5 16H64v15.5h17.5l-2.5 28.5L64 100.8V117l24.5-6.8 3.5-40.2h-28V54h31l3.5-39H64v21.5z" fill="#fff"/>
                <path d="M64 36.5H43.5l3.5 39.5H64V54H50l-1.5-17.5H64v-21.5H35l-7 78.5L64 102.5V86l-15.5-4.2-1-11.3H64V36.5z" fill="#EBEBEB"/>
            </svg>';
        }

        if (strpos($n, 'css') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="CSS3">
                <path d="M14 10l9.5 106.5L64 128l40.5-11.5L114 10H14z" fill="#1572B6"/>
                <path d="M64 117.5l32.5-9 8-90H64v99z" fill="#33A9DC"/>
                <path d="M64 36.5h20.5l-1.5 16H64v15.5h17.5l-2.5 28.5L64 100.8V117l24.5-6.8 3.5-40.2h-28V54h31l3.5-39H64v21.5z" fill="#fff"/>
                <path d="M64 36.5H43.5l3.5 39.5H64V54H50l-1.5-17.5H64v-21.5H35l-7 78.5L64 102.5V86l-15.5-4.2-1-11.3H64V36.5z" fill="#EBEBEB"/>
            </svg>';
        }

        // 6. Bootstrap 5
        if (strpos($n, 'bootstrap') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Bootstrap">
                <rect width="128" height="128" rx="28" fill="url(#bs_grad_'.$s.')"/>
                <path d="M42 34h26.8c12.2 0 19.2 6.1 19.2 15.6 0 7.2-4.5 12.3-11.6 14.1v.6c9 1.6 14.8 7.3 14.8 15.8 0 11.2-8.5 17.9-22.6 17.9H42V34zm15.4 23.4h10c5.3 0 8.4-2.8 8.4-7s-3.1-6.8-8.4-6.8h-10v13.8zm0 29.8h11.2c5.9 0 9.6-3 9.6-7.5 0-4.7-3.7-7.4-9.6-7.4H57.4v14.9z" fill="#fff"/>
                <defs>
                    <linearGradient id="bs_grad_'.$s.'" x1="16" y1="16" x2="112" y2="112" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7952B3"/>
                        <stop offset="1" stop-color="#563D7C"/>
                    </linearGradient>
                </defs>
            </svg>';
        }

        // 7. Tailwind CSS
        if (strpos($n, 'tailwind') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Tailwind CSS">
                <path d="M64 28c-18.7 0-26.7 9.3-32 23.3 6.7-5.3 14.7-8 21.3-4 4.3 2.6 7.3 7.8 11.8 13.9 7.3 9.9 16.5 22.1 38.9 22.1 18.7 0 26.7-9.3 32-23.3-6.7 5.3-14.7 8-21.3 4-4.3-2.6-7.3-7.8-11.8-13.9-7.3-9.9-16.5-22.1-38.9-22.1zM28 64c-18.7 0-26.7 9.3-32 23.3 6.7-5.3 14.7-8 21.3-4 4.3 2.6 7.3 7.8 11.8 13.9 7.3 9.9 16.5 22.1 38.9 22.1 18.7 0 26.7-9.3 32-23.3-6.7 5.3-14.7 8-21.3 4-4.3-2.6-7.3-7.8-11.8-13.9-7.3-9.9-16.5-22.1-38.9-22.1z" fill="#06B6D4"/>
            </svg>';
        }

        // 8. Vue.js
        if (strpos($n, 'vue') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Vue.js">
                <path d="M78.8 10.7L64 36.3 49.2 10.7H10l54 93.6 54-93.6H78.8z" fill="#42B883"/>
                <path d="M78.8 10.7L64 36.3 49.2 10.7H31.5l32.5 56.3 32.5-56.3H78.8z" fill="#35495E"/>
            </svg>';
        }

        // 9. Node.js / Express
        if (strpos($n, 'node') !== false || strpos($n, 'express') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Node.js">
                <path d="M64 8l52 30v60l-52 30-52-30V38L64 8z" fill="#339933"/>
                <path d="M64 16.5L20 42v51l44 25.5 44-25.5V42L64 16.5z" fill="#5FA04E"/>
                <path d="M64 42c-12.2 0-19.8 6.5-19.8 16.8 0 18.2 26 12.5 26 21.8 0 4.2-3.8 6.5-9.8 6.5-6.5 0-11.2-2.8-14.8-6.2l-6.5 9.5c5.3 4.8 13.2 8.5 21.5 8.5 13.5 0 21.2-7.2 21.2-18.2 0-19.2-26-13.8-26-22.2 0-3.8 3.2-5.8 8.8-5.8 5.8 0 10.2 2.2 13.5 5.2l6-9.2C79.8 44.5 72.8 42 64 42z" fill="#fff"/>
            </svg>';
        }

        // 10. PHP & Laravel
        if (strpos($n, 'laravel') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Laravel">
                <path d="M117.8 37.8L73.2 12.1c-2.3-1.3-5.2-1.3-7.5 0L21.2 37.8C18.9 39.1 17.5 41.6 17.5 44.2v51.5c0 2.6 1.4 5.1 3.7 6.4l44.5 25.7c2.3 1.3 5.2 1.3 7.5 0l44.5-25.7c2.3-1.3 3.7-3.8 3.7-6.4V44.2c.1-2.6-1.3-5.1-3.6-6.4z" fill="#FF2D20"/>
                <path d="M64 68.2L35.8 51.9v32.6L64 100.8l28.2-16.3V51.9L64 68.2z" fill="#fff" fill-opacity="0.95"/>
                <path d="M64 68.2l28.2-16.3L64 35.6 35.8 51.9 64 68.2z" fill="#fff" fill-opacity="0.75"/>
            </svg>';
        }

        if (strpos($n, 'php') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="PHP">
                <ellipse cx="64" cy="64" rx="58" ry="34" fill="#777BB4"/>
                <path d="M38.5 73.5H30l6-25h14.5c6.2 0 10.2 3.8 8.8 9.5-1.5 6.2-7.2 15.5-15.8 15.5h-5zm3.8-15.8h4.2c3.5 0 5.8-3.2 6.4-5.8.5-2.2-.8-3.8-3.2-3.8h-4.8l-2.6 9.6zM61.8 73.5l6-25h8.5l-2.2 9.2h.5c2.8-5.8 7.8-9.8 13.8-9.8 5.8 0 7.8 3.5 6.8 7.8l-4.2 17.8h-8.5l3.8-16.2c.5-2.2 0-3.5-1.8-3.5-3.5 0-7.8 4.8-9.2 11l-2.2 8.8h-11.2v-.1zm32.5 0H85.8l6-25h14.5c6.2 0 10.2 3.8 8.8 9.5-1.5 6.2-7.2 15.5-15.8 15.5h-5zm3.8-15.8h4.2c3.5 0 5.8-3.2 6.4-5.8.5-2.2-.8-3.8-3.2-3.8h-4.8l-2.6 9.6z" fill="#fff"/>
            </svg>';
        }

        // 11. Python
        if (strpos($n, 'python') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Python">
                <path d="M63.5 10c-26.2 0-24.6 11.4-24.6 11.4l.1 11.8h25.1v3.5H29.6S10 34.4 10 64.2c0 29.7 17.2 28.7 17.2 28.7h10.2v-14.4s-.6-17.2 16.9-17.2h28.9s16.3-.2 16.3-15.8V25.8S101.4 10 63.5 10zm-13.8 9a4.8 4.8 0 1 1 0 9.6 4.8 4.8 0 0 1 0-9.6z" fill="#3776AB"/>
                <path d="M64.5 118c26.2 0 24.6-11.4 24.6-11.4l-.1-11.8H63.9v-3.5h34.5s19.6 2.3 19.6-27.5c0-29.7-17.2-28.7-17.2-28.7h-10.2v14.4s.6 17.2-16.9 17.2H44.8S28.5 67 28.5 82.5v19.7S26.6 118 64.5 118zm13.8-9a4.8 4.8 0 1 1 0-9.6 4.8 4.8 0 0 1 0 9.6z" fill="#FFD43B"/>
            </svg>';
        }

        // 12. REST & GraphQL
        if (strpos($n, 'graphql') !== false || strpos($n, 'rest') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="GraphQL">
                <path d="M64 12l45 26v52l-45 26-45-26V38l45-26z" stroke="#E10098" stroke-width="6" fill="none"/>
                <circle cx="64" cy="12" r="8" fill="#E10098"/>
                <circle cx="109" cy="38" r="8" fill="#E10098"/>
                <circle cx="109" cy="90" r="8" fill="#E10098"/>
                <circle cx="64" cy="116" r="8" fill="#E10098"/>
                <circle cx="19" cy="90" r="8" fill="#E10098"/>
                <circle cx="19" cy="38" r="8" fill="#E10098"/>
                <path d="M64 12L109 90H19L64 12zm0 104L19 38h90L64 116z" stroke="#E10098" stroke-width="4" fill="none"/>
            </svg>';
        }

        // 13. Flutter
        if (strpos($n, 'flutter') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Flutter">
                <path d="M78.6 10L21 67.6l17.7 17.7L96.3 27.7H78.6V10z" fill="#02569B"/>
                <path d="M78.6 57.2L47.5 88.3l17.7 17.7 31.1-31.1v-17.7H78.6z" fill="#0175C2"/>
                <path d="M65.2 106L82.9 123.7h17.7L78.6 99.4 65.2 106z" fill="#02569B"/>
                <path d="M47.5 88.3l17.7 17.7 13.4-6.6-13.4-13.4-17.7 2.3z" fill="#54C5F8"/>
            </svg>';
        }

        // 14. Swift / iOS
        if (strpos($n, 'swift') !== false || strpos($n, 'ios') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Swift">
                <rect width="128" height="128" rx="28" fill="url(#swift_grad_'.$s.')"/>
                <path d="M102.8 98.5c-7.2-6.5-16.5-12.8-24.8-16.8 14.5-5.2 26.2-15.5 31.2-29.2-2.8 2.5-6.5 5.5-10.2 7.5 1.5-2.8 2.8-6.2 3.8-9.8-3.2 2.5-7.2 4.8-11.2 6.5.8-2.5 1.2-5.2 1.2-8.2 0-7.8-4.5-15.8-11.8-21.8 1.5 5.2 1 10.5-1.5 15.2-4.5 8.2-13.8 13.2-23.2 14.5C40.2 58.8 26 44 26 44s11.5 17.5 25.2 24.8c-12.2-.2-23.8-5.8-29.2-11.8 1.8 5.8 7.5 13.5 15.8 18.5-8.2 0-16.2-3.2-21.8-7.5 2.5 6.2 9.5 14.2 19.5 18.5C18.5 87.2 10 82 10 82s12.8 11.2 32.2 14.5c23.5 4 44.5-5.2 60.6 2z" fill="#fff"/>
                <defs>
                    <linearGradient id="swift_grad_'.$s.'" x1="16" y1="16" x2="112" y2="112" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FA7343"/>
                        <stop offset="1" stop-color="#E83B26"/>
                    </linearGradient>
                </defs>
            </svg>';
        }

        // 15. Kotlin / Android
        if (strpos($n, 'kotlin') !== false || strpos($n, 'android') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Kotlin & Android">
                <rect width="128" height="128" rx="24" fill="#1e293b"/>
                <path d="M112 112H16V16h96L64 64l48 48z" fill="url(#kt_grad_'.$s.')"/>
                <defs>
                    <linearGradient id="kt_grad_'.$s.'" x1="16" y1="16" x2="112" y2="112" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7F52FF"/>
                        <stop offset="0.5" stop-color="#C711E1"/>
                        <stop offset="1" stop-color="#E4485D"/>
                    </linearGradient>
                </defs>
            </svg>';
        }

        // 16. PostgreSQL
        if (strpos($n, 'postgre') !== false || strpos($n, 'postgres') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="PostgreSQL">
                <path d="M64 12c-28.7 0-52 23.3-52 52 0 21.8 13.4 40.5 32.5 48.2 2.6.5 3.5-1.1 3.5-2.5v-8.8c-13.8 3-16.7-6.6-16.7-6.6-2.3-5.8-5.5-7.3-5.5-7.3-4.5-3.1.3-3 .3-3 5 .3 7.6 5.1 7.6 5.1 4.4 7.6 11.6 5.4 14.5 4.1 1.6-4.5 4.8-7.6 8.5-9.3-15.5-2.5-31.8-8-31.8-35.2 0-7.8 2.8-14.2 7.4-19.2-.7-1.8-3.2-9.1.7-18.9 0 0 6-1.9 19.6 7.3 5.7-1.6 11.8-2.4 17.9-2.4 6.1 0 12.2.8 17.9 2.4 13.6-9.2 19.6-7.3 19.6-7.3 3.9 9.8 1.4 17.1.7 18.9 4.6 5 7.4 11.4 7.4 19.2 0 27.3-16.3 32.7-31.9 35.1 5 4.3 9.4 12.8 9.4 25.8v38.3c0 1.4.9 3.1 3.6 2.5 19-7.7 32.4-26.4 32.4-48.2 0-28.7-23.3-52-52-52z" fill="#336791"/>
            </svg>';
        }

        // 17. MySQL
        if (strpos($n, 'mysql') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="MySQL">
                <path d="M64 16c-26.5 0-48 21.5-48 48s21.5 48 48 48 48-21.5 48-48-21.5-48-48-48z" fill="#00758F"/>
                <path d="M84.2 44.5c-4.2-1.5-8.5-2.2-13.2-1.8-9.8.8-17.5 6.5-21.2 15.5-2.5 6.2-2.8 12.8-.8 19.2 1.5 4.8 4.2 9.2 8.2 12.5 6.5 5.5 14.8 7.8 23.2 6.8 5.8-.8 11.2-3.5 15.8-7.2-2.8-.5-5.5-1.5-8-3-6.5-4-10.8-10.2-12.2-17.8-.5-2.5-.5-5.2 0-7.8 1.2-6.5 5.2-11.8 11-14.8-1-1.2-1.8-1.5-2.8-1.6z" fill="#F29111"/>
                <path d="M42 68c2-6 6-11 12-14-1 6-1 12 1 18-4-1-9-2-13-4z" fill="#fff"/>
            </svg>';
        }

        // 18. MongoDB
        if (strpos($n, 'mongo') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="MongoDB">
                <path d="M64 8s-38 34-38 66c0 23.2 16.5 42 38 46 21.5-4 38-22.8 38-46 0-32-38-66-38-66z" fill="#47A248"/>
                <path d="M64 8v112c21.5-4 38-22.8 38-46 0-32-38-66-38-66z" fill="#499D4A"/>
                <path d="M64 120c-.5 0-1-.2-1.5-.5-1.2-1-1.5-2.8-.8-4.2L64 80v40z" fill="#fff" fill-opacity="0.3"/>
                <path d="M64 16c-.5 15-1.5 55-1.5 65 0 20 1.5 35 1.5 39V16z" fill="#fff" fill-opacity="0.2"/>
            </svg>';
        }

        // 19. Redis
        if (strpos($n, 'redis') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Redis">
                <path d="M16 48L64 24l48 24-48 24L16 48z" fill="#DC382D"/>
                <path d="M16 48v32l48 24V72L16 48z" fill="#A8251B"/>
                <path d="M112 48v32l-48 24V72l48-24z" fill="#B82E24"/>
                <path d="M40 50l24-12 24 12-24 12-24-12z" fill="#fff" fill-opacity="0.9"/>
                <path d="M60 52h8v16h-8z" fill="#DC382D"/>
            </svg>';
        }

        // 20. WordPress
        if (strpos($n, 'word') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="WordPress">
                <circle cx="64" cy="64" r="54" fill="#21759B"/>
                <path d="M18.8 64c0 19.5 12.2 36.2 29.5 43L26.5 47.8C21.6 52.6 18.8 58 18.8 64zm72.8-2.2c0-6.5-2.3-11-4.3-14.5-2.6-4.3-5.1-8-5.1-12.3 0-4.8 3.7-9.3 8.8-9.3.2 0 .5 0 .8.1-9.5-8.5-22.1-13.7-36-13.7-14.8 0-28.2 5.9-38 15.4 1 .1 2.1.1 3 .1 4.8 0 12.3-.6 12.3-.6 2.5-.2 2.8 3.5.3 3.8 0 0-2.5.3-5.3.5l16.8 50.1 10.1-30.3-7.2-19.8c-2.5-.2-4.9-.5-4.9-.5-2.5-.2-2.2-3.9.3-3.8 0 0 7.6.6 12.1.6 4.8 0 12.3-.6 12.3-.6 2.5-.2 2.8 3.5.3 3.8 0 0-2.5.3-5.3.5l16.6 49.3 4.6-15.5c2.3-7.2 4-12.4 4-16.9v.3zM64.8 74l-13.8 40.1c4.2 1.2 8.6 1.9 13.2 1.9 5.5 0 10.7-1 15.6-2.8L64.8 74zm39.5-30.8c.4 2.8.6 5.8.6 9.1 0 8.9-1.6 18.9-6.5 31.2l14.4-41.6c-2.4.4-5.3.8-8.5 1.3z" fill="#fff"/>
            </svg>';
        }

        // 21. Shopify
        if (strpos($n, 'shop') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Shopify">
                <path d="M102.5 34.2c-.4-.9-1.3-1.4-2.2-1.3l-12.6 1.4-8.5-22.2c-.4-1.1-1.5-1.8-2.7-1.7-.3 0-.6.1-.9.3L64 21.5 52.4 10.7c-.5-.5-1.2-.7-1.9-.6-1.1.2-2.1 1-2.4 2.1L39.8 34.2 27.2 32.8c-.9-.1-1.8.4-2.2 1.3-.4.9-.2 1.9.4 2.6l17.8 21.5L25 112.5c-.3 1.1.1 2.3 1 3 .5.4 1.1.6 1.8.6h72.4c.7 0 1.3-.2 1.8-.6.9-.7 1.3-1.9 1-3L84.8 58.2l17.3-21.4c.6-.7.8-1.7.4-2.6z" fill="#96BF48"/>
                <path d="M72.2 44.8c-1.2-1.5-3.3-2.5-6.1-2.5-3.8 0-6.4 1.8-6.4 4.5 0 2.2 1.5 3.5 5.5 4.8 5.8 1.9 9.8 4.2 9.8 9.8 0 6.5-5.2 10.8-12.8 10.8-4.5 0-8.2-1.5-10.5-3.8l2.2-4.5c1.8 1.8 4.8 3.2 8.2 3.2 4.2 0 7.2-2.2 7.2-5.2 0-2.8-2.2-4.2-6.5-5.5-6.2-2-8.8-4.5-8.8-9.2 0-6.2 5-10.2 12-10.2 3.8 0 7.2 1.2 9.2 2.8l-3 4.8z" fill="#fff"/>
            </svg>';
        }

        // 22. WooCommerce
        if (strpos($n, 'woo') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="WooCommerce">
                <rect width="128" height="128" rx="28" fill="#96588A"/>
                <path d="M106.8 44.5c-3.8-6.2-10.8-9.8-19.5-9.8-14.8 0-26.8 11.2-26.8 25.8 0 13.8 11.2 24.5 25.5 24.5 8.2 0 15.2-3.8 19.2-9.8l-8.5-5.5c-2.5 3.8-6.5 6-10.8 6-7.8 0-14.2-6.2-14.2-15.2s6.5-15.2 14.2-15.2c4.5 0 8.5 2.2 11 6l9.9-6.8zM43.5 35.8c-14.8 0-26.8 11.2-26.8 25.8 0 13.8 11.2 24.5 25.5 24.5 8.2 0 15.2-3.8 19.2-9.8l-8.5-5.5c-2.5 3.8-6.5 6-10.8 6-7.8 0-14.2-6.2-14.2-15.2s6.5-15.2 14.2-15.2c4.5 0 8.5 2.2 11 6l9.9-6.8c-4-6.2-11-9.8-19.5-9.8z" fill="#fff"/>
            </svg>';
        }

        // 23. AWS Cloud
        if (strpos($n, 'aws') !== false || strpos($n, 'amazon') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="AWS">
                <rect width="128" height="128" rx="20" fill="#232F3E"/>
                <path d="M41.5 62.5c0 4.2-1.5 7.8-4.5 10.8-3 3-6.8 4.5-11.2 4.5s-8.2-1.5-11.2-4.5c-3-3-4.5-6.6-4.5-10.8 0-4.5 1.5-8.2 4.5-11.2 3-3 6.8-4.5 11.2-4.5s8.2 1.5 11.2 4.5c3 3 4.5 6.7 4.5 11.2zm28.2 14.8h-7.5l-3.2-11.2h-11l-3.2 11.2h-7.5l12.2-37.5h8l12.2 37.5zm48.5 0h-7.5l-7.2-24.8-7.2 24.8h-7.5l-10-37.5h7.5l6.5 25.2 7-25.2h7.2l7 25.2 6.5-25.2h7.5l-9.8 37.5z" fill="#fff"/>
                <path d="M22 92c28.5 14 58.5 14 84 0 2.5-1.5 5.5.8 4 3-14 13-44 19-72 6-3.5-1.8-2.5-7.5 2-9z" fill="#FF9900"/>
                <path d="M106 90c-2.5-.5-8.5-1-12 1.5-1 .8-.5 2 .5 2 4.5.2 9.5 2 12.5 4.5 1 .8 2 0 1.5-1.2-1-2.2-1.5-5.5-2.5-6.8z" fill="#FF9900"/>
            </svg>';
        }

        // 24. Docker
        if (strpos($n, 'docker') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Docker">
                <path d="M121.5 58.2c-2.2-.8-8.5-1.5-12.8 1.5-.8.5-1.2.5-1.8.2-4.5-3.5-10.5-4.8-16.5-3.8-1.5.2-2.5 1.2-3.2 2.2-6.5-3.8-15.2-3.8-22.5 0v-2.5c0-1.2-.8-2.2-2-2.2H50.5c-1.2 0-2.2 1-2.2 2.2v9H36c-1.2 0-2.2 1-2.2 2.2v9.5H21.5c-1.2 0-2.2 1-2.2 2.2v9.5H8c-1.2 0-2.2 1-2.2 2.2v10.5c0 14.8 11.8 28.5 29.5 32.5 29.5 6.8 62.5 2.2 81.2-15.5 10.8-10.2 12.8-23.2 6.2-34.8 0 0-1.2-1.8-1.2-2.7z" fill="#2496ED"/>
                <rect x="52" y="58" width="9" height="8" rx="1" fill="#fff"/>
                <rect x="64" y="58" width="9" height="8" rx="1" fill="#fff"/>
                <rect x="76" y="58" width="9" height="8" rx="1" fill="#fff"/>
                <rect x="38" y="69" width="9" height="8" rx="1" fill="#fff"/>
                <rect x="52" y="69" width="9" height="8" rx="1" fill="#fff"/>
                <rect x="64" y="69" width="9" height="8" rx="1" fill="#fff"/>
                <rect x="76" y="69" width="9" height="8" rx="1" fill="#fff"/>
                <rect x="24" y="80" width="9" height="8" rx="1" fill="#fff"/>
                <rect x="38" y="80" width="9" height="8" rx="1" fill="#fff"/>
                <rect x="52" y="80" width="9" height="8" rx="1" fill="#fff"/>
            </svg>';
        }

        // 25. Kubernetes
        if (strpos($n, 'kuber') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Kubernetes">
                <circle cx="64" cy="64" r="54" fill="#326CE5"/>
                <path d="M64 24l34.6 20v40L64 104 29.4 84V44L64 24z" stroke="#fff" stroke-width="5" fill="none"/>
                <circle cx="64" cy="64" r="14" stroke="#fff" stroke-width="5" fill="none"/>
                <line x1="64" y1="24" x2="64" y2="50" stroke="#fff" stroke-width="5"/>
                <line x1="64" y1="78" x2="64" y2="104" stroke="#fff" stroke-width="5"/>
                <line x1="29.4" y1="44" x2="52" y2="57" stroke="#fff" stroke-width="5"/>
                <line x1="76" y1="71" x2="98.6" y2="84" stroke="#fff" stroke-width="5"/>
                <line x1="29.4" y1="84" x2="52" y2="71" stroke="#fff" stroke-width="5"/>
                <line x1="76" y1="57" x2="98.6" y2="44" stroke="#fff" stroke-width="5"/>
            </svg>';
        }

        // 26. Git / GitHub
        if (strpos($n, 'git') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Git">
                <path d="M123.5 56.4L71.6 4.5c-4.2-4.2-11-4.2-15.2 0L4.5 56.4c-4.2 4.2-4.2 11 0 15.2l51.9 51.9c4.2 4.2 11 4.2 15.2 0l51.9-51.9c4.2-4.2 4.2-11 0-15.2z" fill="#F05032"/>
                <path d="M88.5 61.2c-2.8-1.5-6.2-1.5-9 0L68.8 50.5v-10c2.8-1.5 4.8-4.5 4.8-8 0-5-4-9-9-9s-9 4-9 9c0 3.5 2 6.5 4.8 8v22.5c-2.8 1.5-4.8 4.5-4.8 8 0 3.5 2 6.5 4.8 8v16.5c-2.8 1.5-4.8 4.5-4.8 8 0 5 4 9 9 9s9-4 9-9c0-3.5-2-6.5-4.8-8V68.5l10.8 10.8c-.2.8-.2 1.8-.2 2.8 0 5 4 9 9 9s9-4 9-9c-.1-5-4.1-9.1-9.1-8.9z" fill="#fff"/>
            </svg>';
        }

        // 27. OpenAI / ChatGPT
        if (strpos($n, 'openai') !== false || strpos($n, 'chatgpt') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="OpenAI">
                <rect width="128" height="128" rx="28" fill="#10A37F"/>
                <path d="M101.4 56.2a27.6 27.6 0 0 0-2.4-23.2 28.5 28.5 0 0 0-27.4-14.2 27.7 27.7 0 0 0-21.5 10.4 28.5 28.5 0 0 0-17 12.3 27.8 27.8 0 0 0-3.9 23.6 28.5 28.5 0 0 0 6.6 27.8 27.7 27.7 0 0 0 2.4 23.2 28.5 28.5 0 0 0 27.4 14.2 27.7 27.7 0 0 0 21.5-10.4 28.5 28.5 0 0 0 17-12.3 27.8 27.8 0 0 0 3.9-23.6 28.5 28.5 0 0 0-6.6-27.8zm-29.8 46.2a15.7 15.7 0 0 1-11.8 0l-16-9.2v-18.4l16 9.2 11.8 18.4zm22.4-12.9a15.8 15.8 0 0 1-5.9 10.2l-16-9.2 16-9.2v8.2zm-4.7-27.1v18.4l-16-9.2 16-9.2zm-35.8-26.6a15.7 15.7 0 0 1 11.8 0l16 9.2v18.4l-16-9.2-11.8-18.4zm-22.4 12.9a15.8 15.8 0 0 1 5.9-10.2l16 9.2-16 9.2v-8.2zm4.7 27.1v-18.4l16 9.2-16 9.2z" fill="#fff"/>
            </svg>';
        }

        // 28. Custom LLM / RAG / AI Agent
        if (strpos($n, 'rag') !== false || strpos($n, 'llm') !== false || strpos($n, 'ai') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="AI LLM">
                <rect width="128" height="128" rx="28" fill="url(#ai_grad_'.$s.')"/>
                <circle cx="64" cy="64" r="16" fill="#fff" fill-opacity="0.9"/>
                <circle cx="32" cy="40" r="8" fill="#67e8f9"/>
                <circle cx="96" cy="40" r="8" fill="#a78bfa"/>
                <circle cx="32" cy="88" r="8" fill="#38bdf8"/>
                <circle cx="96" cy="88" r="8" fill="#ec4899"/>
                <circle cx="64" cy="20" r="7" fill="#fbbf24"/>
                <circle cx="64" cy="108" r="7" fill="#34d399"/>
                <path d="M32 40l32 24M96 40l-32 24M32 88l32-24M96 88l-32-24M64 20v28M64 80v28M32 40v48M96 40v48" stroke="#fff" stroke-width="3" stroke-dasharray="4 2" stroke-opacity="0.75"/>
                <defs>
                    <linearGradient id="ai_grad_'.$s.'" x1="16" y1="16" x2="112" y2="112" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4F46E5"/>
                        <stop offset="0.5" stop-color="#7C3AED"/>
                        <stop offset="1" stop-color="#06B6D4"/>
                    </linearGradient>
                </defs>
            </svg>';
        }

        // 29. API Automation / Webhooks
        if (strpos($n, 'automation') !== false || strpos($n, 'api') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="API Automation">
                <rect width="128" height="128" rx="28" fill="url(#auto_grad_'.$s.')"/>
                <path d="M42 44h44M42 64h44M42 84h44" stroke="#fff" stroke-width="8" stroke-linecap="round"/>
                <circle cx="36" cy="44" r="10" fill="#22d3ee" stroke="#fff" stroke-width="3"/>
                <circle cx="92" cy="64" r="10" fill="#a855f7" stroke="#fff" stroke-width="3"/>
                <circle cx="56" cy="84" r="10" fill="#10b981" stroke="#fff" stroke-width="3"/>
                <defs>
                    <linearGradient id="auto_grad_'.$s.'" x1="16" y1="16" x2="112" y2="112" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0284C7"/>
                        <stop offset="1" stop-color="#0F172A"/>
                    </linearGradient>
                </defs>
            </svg>';
        }

        // 30. Figma / Design
        if (strpos($n, 'figma') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Figma">
                <rect width="128" height="128" rx="24" fill="#1E1E1E"/>
                <path d="M44 32h20v20H44a10 10 0 0 1-10-10 10 10 0 0 1 10-10z" fill="#F24E1E"/>
                <path d="M64 32h20a10 10 0 0 1 10 10 10 10 0 0 1-10 10H64V32z" fill="#FF7262"/>
                <path d="M64 52h20a10 10 0 0 1 10 10 10 10 0 0 1-10 10H64V52z" fill="#1ABCFE"/>
                <path d="M44 52h20v20H44a10 10 0 0 1-10-10 10 10 0 0 1 10-10z" fill="#A259FF"/>
                <path d="M44 72h20v10a10 10 0 0 1-10 10 10 10 0 0 1-10-10V72z" fill="#0ACF83"/>
                <circle cx="74" cy="62" r="10" fill="#1ABCFE"/>
            </svg>';
        }

        // 31. Firebase
        if (strpos($n, 'firebase') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Firebase">
                <path d="M26.2 92.5L42.5 14.8c.8-3.8 5.6-4.9 7.8-1.9l19.5 26.5L26.2 92.5z" fill="#FFA000"/>
                <path d="M26.2 92.5l2-8.5 41.6-54.6L26.2 92.5z" fill="#F57C00"/>
                <path d="M72.5 50.8L83.2 30.5c1.6-3.1 6.1-3.1 7.8 0l21.2 62-39.7-41.7z" fill="#FFA000"/>
                <path d="M112.2 92.5L98.5 106.8c-3.8 3.8-10 3.8-13.8 0L26.2 92.5l43.6 24.5c4.5 2.5 10 2.5 14.5 0l27.9-24.5z" fill="#FFCA28"/>
            </svg>';
        }

        // 32. Google / Google Analytics / Search Console / Google Ads
        if (strpos($n, 'google') !== false || strpos($n, 'seo') !== false || strpos($n, 'lighthouse') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Google">
                <path d="M120 65.2c0-4.8-.4-9.5-1.2-14H64v26.5h31.5c-1.4 7.2-5.4 13.4-11.5 17.5v14.5h18.6c10.9-10 17.4-24.8 17.4-44.5z" fill="#4285F4"/>
                <path d="M64 122c15.6 0 28.8-5.2 38.4-14l-18.6-14.5c-5.2 3.5-11.8 5.6-19.8 5.6-15.2 0-28.1-10.3-32.7-24.2H12.1v15C21.8 109.2 41.5 122 64 122z" fill="#34A853"/>
                <path d="M31.3 74.9c-1.2-3.5-1.9-7.2-1.9-10.9s.7-7.4 1.9-10.9v-15H12.1C8 46.2 5.8 54.8 5.8 64s2.2 17.8 6.3 25.9l19.2-15z" fill="#FBBC05"/>
                <path d="M64 26.9c8.5 0 16.2 2.9 22.2 8.6l16.6-16.6C92.7 9.7 79.5 6 64 6 41.5 6 21.8 18.8 12.1 38.1l19.2 15c4.6-13.9 17.5-26.2 32.7-26.2z" fill="#EA4335"/>
            </svg>';
        }

        // 33. Linux & Nginx
        if (strpos($n, 'linux') !== false || strpos($n, 'nginx') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Nginx">
                <rect width="128" height="128" rx="24" fill="#009639"/>
                <path d="M36 28h14.5l41.5 54.5V28H106v72H91.5L50 45.5V100H36V28z" fill="#fff"/>
            </svg>';
        }

        // 34. Adobe Creative Suite
        if (strpos($n, 'adobe') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="Adobe">
                <rect width="128" height="128" rx="24" fill="#FA0F00"/>
                <path d="M80.8 28L106 100H87.5l-8.5-24.5H62.2L74.8 39.5 80.8 28zM22 28h33.5L22 100V28zm35.2 72l14-41.5L92 100H57.2z" fill="#fff"/>
            </svg>';
        }

        // 35. LangChain
        if (strpos($n, 'langchain') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 128 128" fill="none"'.$cls.' aria-label="LangChain">
                <rect width="128" height="128" rx="24" fill="#1C3C3C"/>
                <path d="M42 48a16 16 0 0 1 22.6 0l5.7 5.7a16 16 0 0 1-22.6 22.6l-5.7-5.7a16 16 0 0 1 0-22.6zm44 32a16 16 0 0 1-22.6 0l-5.7-5.7a16 16 0 0 1 22.6-22.6l5.7 5.7a16 16 0 0 1 0 22.6z" stroke="#2ECC71" stroke-width="8" stroke-linecap="round" fill="none"/>
            </svg>';
        }

        // Default Modern Tech Core Icon
        return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"'.$cls.' aria-label="'.htmlspecialchars($name).'">
            <rect x="4" y="4" width="16" height="16" rx="3" stroke="#38bdf8"/>
            <circle cx="12" cy="12" r="3" fill="#38bdf8"/>
            <path d="M9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 15h3M1 9h3M1 15h3" stroke="#38bdf8"/>
        </svg>';
    }
}

/**
 * Premium Duotone Service Visual Icons Helper
 * Provides high-impact, multi-layer gradient vector icons for all core services
 */
if (!function_exists('get_service_icon')) {
    function get_service_icon($serviceName, $size = 48, $class = '') {
        $n = strtolower(trim($serviceName));
        $s = (int)$size;
        $cls = !empty($class) ? ' class="' . htmlspecialchars($class) . '"' : '';

        // 1. Website Development
        if (strpos($n, 'web') !== false || strpos($n, 'site') !== false || strpos($n, 'portal') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="Website Development">
                <defs>
                    <linearGradient id="srv_web_g1_'.$s.'" x1="4" y1="4" x2="60" y2="60" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0284c7"/>
                        <stop offset="1" stop-color="#06b6d4"/>
                    </linearGradient>
                    <linearGradient id="srv_web_g2_'.$s.'" x1="16" y1="20" x2="48" y2="44" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#38bdf8"/>
                        <stop offset="1" stop-color="#818cf8"/>
                    </linearGradient>
                </defs>
                <rect x="6" y="10" width="52" height="44" rx="10" fill="#0f172a" stroke="url(#srv_web_g1_'.$s.')" stroke-width="2.5"/>
                <path d="M6 22h52" stroke="url(#srv_web_g1_'.$s.')" stroke-width="1.5" stroke-opacity="0.6"/>
                <circle cx="14" cy="16" r="2" fill="#ef4444"/>
                <circle cx="21" cy="16" r="2" fill="#f59e0b"/>
                <circle cx="28" cy="16" r="2" fill="#10b981"/>
                <path d="M22 38l-7-7 7-7M42 24l7 7-7 7M35 23l-6 18" stroke="url(#srv_web_g2_'.$s.')" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="50" cy="46" r="6" fill="#06b6d4" fill-opacity="0.2" stroke="#06b6d4" stroke-width="1.5"/>
                <path d="M48 46l1.5 1.5 3-3" stroke="#38bdf8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>';
        }

        // 2. Custom Software & SaaS Architecture
        if (strpos($n, 'software') !== false || strpos($n, 'saas') !== false || strpos($n, 'custom') !== false || strpos($n, 'app development') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="Custom Software">
                <defs>
                    <linearGradient id="srv_soft_g1_'.$s.'" x1="8" y1="8" x2="56" y2="56" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#2563eb"/>
                        <stop offset="1" stop-color="#7c3aed"/>
                    </linearGradient>
                </defs>
                <rect x="10" y="10" width="44" height="44" rx="12" fill="#0f172a" stroke="url(#srv_soft_g1_'.$s.')" stroke-width="2.5"/>
                <rect x="22" y="22" width="20" height="20" rx="5" fill="#1e1b4b" stroke="#818cf8" stroke-width="2"/>
                <circle cx="32" cy="32" r="4" fill="#a855f7"/>
                <path d="M22 10v6M32 10v6M42 10v6M22 48v6M32 48v6M42 48v6M10 22h6M10 32h6M10 42h6M48 22h6M48 32h6M48 42h6" stroke="#60a5fa" stroke-width="2" stroke-linecap="round"/>
                <circle cx="48" cy="16" r="3" fill="#22d3ee"/>
            </svg>';
        }

        // 3. Mobile App Development
        if (strpos($n, 'mobile') !== false || strpos($n, 'ios') !== false || strpos($n, 'android') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="Mobile App Development">
                <defs>
                    <linearGradient id="srv_mob_g1_'.$s.'" x1="12" y1="6" x2="52" y2="58" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#06b6d4"/>
                        <stop offset="1" stop-color="#10b981"/>
                    </linearGradient>
                </defs>
                <rect x="18" y="8" width="28" height="48" rx="8" fill="#0f172a" stroke="url(#srv_mob_g1_'.$s.')" stroke-width="2.5"/>
                <path d="M27 13h10" stroke="#64748b" stroke-width="2" stroke-linecap="round"/>
                <circle cx="32" cy="49" r="2.5" fill="#34d399"/>
                <rect x="23" y="19" width="18" height="24" rx="4" fill="#022c22" stroke="#10b981" stroke-width="1.2"/>
                <path d="M26 25h12M26 29h8M26 33h10" stroke="#6ee7b7" stroke-width="1.5" stroke-linecap="round"/>
                <circle cx="44" cy="18" r="6" fill="#10b981" fill-opacity="0.25" stroke="#10b981" stroke-width="1.5"/>
                <path d="M42 18h4M44 16v4" stroke="#6ee7b7" stroke-width="1.5" stroke-linecap="round"/>
            </svg>';
        }

        // 4. AI Integration & Automation
        if (strpos($n, 'ai') !== false || strpos($n, 'automation') !== false || strpos($n, 'bot') !== false || strpos($n, 'intelligence') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="AI Integration">
                <defs>
                    <linearGradient id="srv_ai_g1_'.$s.'" x1="8" y1="8" x2="56" y2="56" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#9333ea"/>
                        <stop offset="0.5" stop-color="#ec4899"/>
                        <stop offset="1" stop-color="#3b82f6"/>
                    </linearGradient>
                </defs>
                <circle cx="32" cy="32" r="24" fill="#0f172a" stroke="url(#srv_ai_g1_'.$s.')" stroke-width="2.5"/>
                <circle cx="32" cy="32" r="7" fill="#a855f7"/>
                <circle cx="18" cy="24" r="4" fill="#60a5fa"/>
                <circle cx="46" cy="24" r="4" fill="#f43f5e"/>
                <circle cx="22" cy="44" r="4" fill="#34d399"/>
                <circle cx="42" cy="44" r="4" fill="#38bdf8"/>
                <path d="M18 24l14 8 14-8M32 32l-10 12M32 32l10 12M18 24v20M46 24v20" stroke="#c084fc" stroke-width="1.8" stroke-dasharray="3 2"/>
                <circle cx="32" cy="14" r="3" fill="#fbbf24"/>
                <line x1="32" y1="17" x2="32" y2="25" stroke="#f59e0b" stroke-width="1.5"/>
            </svg>';
        }

        // 5. ERP & Business Solutions
        if (strpos($n, 'erp') !== false || strpos($n, 'business') !== false || strpos($n, 'management') !== false || strpos($n, 'crm') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="ERP Solutions">
                <defs>
                    <linearGradient id="srv_erp_g1_'.$s.'" x1="6" y1="6" x2="58" y2="58" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#f59e0b"/>
                        <stop offset="1" stop-color="#f97316"/>
                    </linearGradient>
                </defs>
                <rect x="8" y="12" width="22" height="18" rx="5" fill="#1e293b" stroke="url(#srv_erp_g1_'.$s.')" stroke-width="2"/>
                <rect x="34" y="12" width="22" height="18" rx="5" fill="#1e293b" stroke="url(#srv_erp_g1_'.$s.')" stroke-width="2"/>
                <rect x="21" y="36" width="22" height="18" rx="5" fill="#1e293b" stroke="url(#srv_erp_g1_'.$s.')" stroke-width="2"/>
                <path d="M19 30v12h4M45 30v12h-4" stroke="#fbbf24" stroke-width="2" stroke-dasharray="3 2"/>
                <circle cx="19" cy="21" r="3" fill="#fbbf24"/>
                <circle cx="45" cy="21" r="3" fill="#38bdf8"/>
                <circle cx="32" cy="45" r="3" fill="#34d399"/>
                <path d="M13 18h12M39 18h12M26 42h12" stroke="#64748b" stroke-width="1.5" stroke-linecap="round"/>
            </svg>';
        }

        // 6. Digital Marketing & SEO
        if (strpos($n, 'marketing') !== false || strpos($n, 'seo') !== false || strpos($n, 'growth') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="Digital Marketing">
                <defs>
                    <linearGradient id="srv_mkt_g1_'.$s.'" x1="10" y1="10" x2="54" y2="54" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3b82f6"/>
                        <stop offset="0.5" stop-color="#10b981"/>
                        <stop offset="1" stop-color="#f59e0b"/>
                    </linearGradient>
                </defs>
                <circle cx="32" cy="32" r="24" fill="#0f172a" stroke="url(#srv_mkt_g1_'.$s.')" stroke-width="2.5"/>
                <path d="M16 44l10-12 8 6 14-16" stroke="#34d399" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M40 22h8v8" stroke="#34d399" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="26" cy="32" r="2.5" fill="#38bdf8"/>
                <circle cx="34" cy="38" r="2.5" fill="#fbbf24"/>
                <circle cx="48" cy="22" r="3" fill="#10b981"/>
            </svg>';
        }

        // 7. Cloud Hosting & DevOps
        if (strpos($n, 'cloud') !== false || strpos($n, 'devops') !== false || strpos($n, 'host') !== false || strpos($n, 'infra') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="Cloud & DevOps">
                <defs>
                    <linearGradient id="srv_cld_g1_'.$s.'" x1="8" y1="12" x2="56" y2="52" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0284c7"/>
                        <stop offset="1" stop-color="#6366f1"/>
                    </linearGradient>
                </defs>
                <path d="M46 44h4a10 10 0 0 0 2-19.8 15 15 0 0 0-29.4-4.2A11 11 0 0 0 12 30a11 11 0 0 0 4 8.7" stroke="url(#srv_cld_g1_'.$s.')" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"/>
                <rect x="18" y="36" width="28" height="18" rx="4" fill="#0f172a" stroke="#38bdf8" stroke-width="2"/>
                <circle cx="24" cy="42" r="2" fill="#34d399"/>
                <circle cx="24" cy="48" r="2" fill="#34d399"/>
                <line x1="30" y1="42" x2="40" y2="42" stroke="#64748b" stroke-width="1.8" stroke-linecap="round"/>
                <line x1="30" y1="48" x2="38" y2="48" stroke="#64748b" stroke-width="1.8" stroke-linecap="round"/>
            </svg>';
        }

        // 8. UI/UX Design & Prototyping
        if (strpos($n, 'ui') !== false || strpos($n, 'ux') !== false || strpos($n, 'design') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="UI/UX Design">
                <defs>
                    <linearGradient id="srv_des_g1_'.$s.'" x1="10" y1="8" x2="54" y2="56" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#ec4899"/>
                        <stop offset="1" stop-color="#8b5cf6"/>
                    </linearGradient>
                </defs>
                <rect x="10" y="10" width="30" height="36" rx="6" fill="#1e1b4b" stroke="url(#srv_des_g1_'.$s.')" stroke-width="2.5"/>
                <rect x="24" y="18" width="30" height="36" rx="6" fill="#0f172a" stroke="#f43f5e" stroke-width="2" stroke-opacity="0.7"/>
                <circle cx="34" cy="28" r="4" fill="#a855f7"/>
                <path d="M28 42l5-5 5 5" stroke="#f472b6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="46" cy="46" r="5" fill="#38bdf8"/>
            </svg>';
        }

        // 9. E-Commerce Solutions
        if (strpos($n, 'commerce') !== false || strpos($n, 'shop') !== false) {
            return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="E-Commerce">
                <defs>
                    <linearGradient id="srv_ecom_g1_'.$s.'" x1="8" y1="10" x2="56" y2="54" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#06b6d4"/>
                        <stop offset="1" stop-color="#3b82f6"/>
                    </linearGradient>
                </defs>
                <path d="M10 14h8l5 24h24l6-16H21" stroke="url(#srv_ecom_g1_'.$s.')" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="26" cy="46" r="4" fill="#38bdf8"/>
                <circle cx="44" cy="46" r="4" fill="#38bdf8"/>
                <rect x="29" y="18" width="16" height="12" rx="3" fill="#1e293b" stroke="#10b981" stroke-width="1.8"/>
                <path d="M37 21v6M34 24h6" stroke="#34d399" stroke-width="1.5" stroke-linecap="round"/>
            </svg>';
        }

        // 10. Maintenance & SLA Support
        return '<svg width="'.$s.'" height="'.$s.'" viewBox="0 0 64 64" fill="none"'.$cls.' aria-label="Technical Support">
            <defs>
                <linearGradient id="srv_sup_g1_'.$s.'" x1="10" y1="10" x2="54" y2="54" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#10b981"/>
                    <stop offset="1" stop-color="#06b6d4"/>
                </linearGradient>
            </defs>
            <path d="M32 8l18 8v16c0 14-18 24-18 24S14 46 14 32V16l18-8z" fill="#0f172a" stroke="url(#srv_sup_g1_'.$s.')" stroke-width="2.5" stroke-linejoin="round"/>
            <path d="M24 32l6 6 12-12" stroke="#34d399" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="48" cy="18" r="4" fill="#10b981" fill-opacity="0.3"/>
        </svg>';
    }
}
