<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Test</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-purple-900 text-purple-400 dark:bg-gray-900 dark:text-gray-200">

    <div class="flex items-center justify-center min-h-screen flex-col gap-4">
        <h1 class="text-4xl font-bold">Dark Mode Toggle Test</h1>

        <button id="toggle-button" class="px-4 py-2 rounded bg-gray-800 text-white">
            <span id="moon-icon" class="">🌙</span>
            <span id="sun-icon" class="hidden">☀️</span>
        </button>

    </div>
    <div class="bg-white dark:bg-black text-black dark:text-white p-4 rounded-lg">
        <p>This box should switch background and text colors in dark mode.</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggle-button');
    const html = document.documentElement;
    const iconSun = document.getElementById('sun-icon');
    const iconMoon = document.getElementById('moon-icon');

    function setTheme(isDark) {
        if (isDark) {
            html.classList.add('dark');
            iconSun.classList.remove('hidden');
            iconMoon.classList.add('hidden');
            localStorage.setItem('theme', 'dark');
        } else {
            html.classList.remove('dark');
            iconSun.classList.add('hidden');
            iconMoon.classList.remove('hidden');
            localStorage.setItem('theme', 'light');
        }
    }

    // Init theme
    const userPref = localStorage.getItem('theme');
    const systemPref = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const isDarkMode = userPref === 'dark' || (!userPref && systemPref);
    setTheme(isDarkMode);

    toggleButton?.addEventListener('click', () => {
        const isDark = html.classList.contains('dark');
        setTheme(!isDark);
    });
});

    </script>
</body>
</html>
