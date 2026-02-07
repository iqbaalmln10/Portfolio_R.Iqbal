<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#0f172a] text-slate-200"> <header class="h-screen flex flex-col justify-center items-center bg-[radial-gradient(circle_at_top,_var(--tw-gradient-stops))] from-slate-800 via-[#0f172a] to-[#0f172a]">
        <div class="text-center">
            <h1 class="text-6xl md:text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">
                {{ $profile['name'] }}
            </h1>
            <p class="text-xl md:text-2xl mt-6 text-slate-400 font-light tracking-wide uppercase">
                {{ $profile['role'] }}
            </p>
            <div class="mt-10">
                <a href="#projects" class="px-8 py-4 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-500 transition-all shadow-lg shadow-indigo-500/20">
                    Lihat Portofolio
                </a>
            </div>
        </div>
    </header>

    <section id="projects" class="py-24 px-6 max-w-6xl mx-auto">
        <div class="flex items-center justify-between mb-16">
            <h2 class="text-3xl font-bold border-l-4 border-indigo-500 pl-4">Project Pilihan</h2>
            <div class="h-[1px] bg-slate-800 flex-grow ml-8"></div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-10">
            @foreach($projects as $project)
            <div class="group bg-slate-800/50 border border-slate-700/50 rounded-2xl overflow-hidden hover:border-indigo-500/50 transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="{{ $project['images'][0] }}" class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-indigo-900/20 group-hover:bg-transparent transition duration-500"></div>
                </div>
                <div class="p-8">
                    <h3 class="font-bold text-xl mb-3 text-white group-hover:text-indigo-400 transition">{{ $project['title'] }}</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">{{ $project['desc'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tech'] as $tech)
                            <span class="text-[10px] uppercase tracking-wider font-bold bg-slate-900 text-indigo-400 border border-indigo-500/30 px-3 py-1 rounded-full">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <footer class="py-16 text-center border-t border-slate-800">
        <p class="text-slate-500 text-sm">
            © {{ date('Y') }} <span class="text-slate-300">{{ $profile['name'] }}</span>. 
            Built with <span class="text-indigo-500">Laravel 12</span> & Tailwind.
        </p>
    </footer>

</body>
</html>