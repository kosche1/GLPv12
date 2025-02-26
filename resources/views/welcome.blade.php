<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnQuest - Gamified Learning Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-blue-50 to-white min-h-screen">
    <header class="w-full py-4 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">LearnQuest</a>
            <nav>
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ route('login') }}" wire:navigate class="inline-block px-4 py-2 text-blue-600 border border-blue-600 rounded hover:bg-blue-600 hover:text-white transition-colors">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" wire:navigate class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">Register</a>
                    </li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="py-20 px-4 sm:px-6 lg:px-8 text-center">
            <div class="container mx-auto">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
                    Learn, Play, Achieve
                </h1>
                <p class="text-xl sm:text-2xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    Embark on an exciting learning journey with our gamified platform. Master new skills while having fun!
                </p>
                <a href="{{ route('login') }}" wire:navigate class="inline-block px-8 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                    Start Learning
                </a>
            </div>
        </section>

        <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Why Choose LearnQuest?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Earn Rewards</h3>
                        <p class="text-gray-600">Complete challenges and earn badges as you progress through your learning journey.</p>
                    </div>
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Compete with Friends</h3>
                        <p class="text-gray-600">Join leaderboards and compete with friends to stay motivated and engaged.</p>
                    </div>
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Adaptive Learning</h3>
                        <p class="text-gray-600">Our AI-powered system adapts to your learning style for a personalized experience.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 px-4 sm:px-6 lg:px-8 bg-blue-600 text-white">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4">Ready to Start Your Learning Adventure?</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">
                    Join thousands of learners who are already enjoying our gamified learning experience.
                </p>
                <a href="{{ route('register') }}" wire:navigate class="inline-block px-8 py-3 bg-white text-blue-600 text-lg font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                    Create Your Free Account
                </a>
            </div>
        </section>
    </main>

    <footer class="w-full py-4 px-4 sm:px-6 lg:px-8 bg-gray-800 text-white">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 LearnQuest. All rights reserved.</p>
        </div>
    </footer>
	@if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
</body>
</html>

