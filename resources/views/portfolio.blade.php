<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0f172a] text-slate-200">
    <header class="h-screen flex flex-col justify-center items-center bg-[radial-gradient(circle_at_top,_var(--tw-gradient-stops))] from-slate-800 via-[#0f172a] to-[#0f172a]">
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
            <div class="group bg-slate-800/50 ...">
                <div class="relative overflow-hidden">
                    {{-- Gunakan $project sesuai nama di foreach --}}
                    <img src="{{ $project['images'][0] }}" class="...">
                </div>
                <div class="p-8">
                    <h3 class="...">{{ $project['title'] }}</h3>
                    <p class="...">{{ $project['desc'] }}</p>

                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tech'] as $tech)
                        <span class="...">{{ $tech }}</span>
                        @endforeach

                        {{-- Link detail taruh di luar loop tech agar tidak muncul berkali-kali --}}
                        <a href="{{ route('project.show', $project['id']) }}" class="ml-auto text-indigo-400">
                            lihat detail <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <footer class="py-16 text-center border-t border-slate-800">
        <div class="flex justify-center gap-8 mb-8 text-2xl text-slate-500">
            <a href="{{ $profile['github'] }}" target="_blank"
                class="hover:text-white transition-all duration-300 transform hover:scale-110">
                <i class="fa-brands fa-github"></i>
            </a>

            <a href="{{ $profile['linkedin'] }}" target="_blank"
                class="hover:text-[#0077B5] transition-all duration-300 transform hover:scale-110">
                <i class="fa-brands fa-linkedin"></i>
            </a>

            <a href="{{ $profile['instagram'] }}" target="_blank"
                class="hover:text-[#E4405F] transition-all duration-300 transform hover:scale-110">
                <i class="fa-brands fa-instagram"></i>
            </a>

            <a href="mailto:r.iqbal.maulana.ibrahim@gmail.com"
                class="hover:text-emerald-400 transition-all duration-300 transform hover:scale-110">
                <i class="fa-solid fa-envelope"></i>
            </a>
        </div>

        <p class="text-slate-500 text-sm tracking-wide">
            © {{ date('Y') }} <span class="text-slate-300 font-medium">{{ $profile['name'] }}</span>.
            Membangun dengan <span class="text-indigo-500">Laravel 12</span> & ❤️
        </p>
    </footer>

</body>

</html>