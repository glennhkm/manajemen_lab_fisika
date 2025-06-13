<nav id="navbar" class="w-screen h-16 bg-black/20 border-b border-b-white/30 backdrop-blur-md flex justify-between px-12 fixed top-0 left-0 z-50 backdrop-blur-md transition-all duration-300">
    <div id="logo" class="flex items-center">
        <img src="{{ asset('images/logo-fisika.png') }}" alt="Logo" class="w-28">
    </div>
    <div class="flex items-center space-x-6">
        <a href="#" class="text-sm font-medium text-neutral_01 h-full hover:border-b-4 hover:border-yellow-400 hover:font-bold flex items-center duration-200 nav-link">Visi dan Misi</a>
        <a href="#" class="text-sm font-medium text-neutral_01 h-full hover:border-b-4 hover:border-yellow-400 hover:font-bold flex items-center duration-200 nav-link">Staf dan Tenaga Ahli</a>
        <a href="#" class="text-sm font-medium text-neutral_01 h-full hover:border-b-4 hover:border-yellow-400 hover:font-bold flex items-center duration-200 nav-link">Fasilitas</a>
        <a href="#" class="text-sm font-medium text-neutral_01 h-full hover:border-b-4 hover:border-yellow-400 hover:font-bold flex items-center duration-200 nav-link">Layanan</a>
        <a href="#" class="text-sm font-medium text-neutral_01 h-full hover:border-b-4 hover:border-yellow-400 hover:font-bold flex items-center duration-200 nav-link">Kontak</a>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('navbar');
        const navLinks = document.querySelectorAll('.nav-link');
        const logo = document.getElementById('logo');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
                logo.querySelector('img').src = "{{ asset('images/logo-fisika.png') }}";
                navbar.classList.remove('bg-black/20', 'border-b', 'border-b-white/15', 'backdrop-blur-md');
                navbar.classList.add('bg-neutral_01', 'shadow-lg');
                navLinks.forEach(link => {
                    link.classList.remove('text-neutral_01');
                    link.classList.add('text-black/80');
                });
            } else {
                logo.querySelector('img').src = "{{ asset('images/logo-fisika-putih.png') }}";
                navbar.classList.remove('bg-neutral_01', 'shadow-lg');
                navbar.classList.add('bg-black/20', 'border-b', 'border-b-white/30', 'backdrop-blur-md');
                navLinks.forEach(link => {
                    link.classList.remove('text-black/80');
                    link.classList.add('text-neutral_01');
                });
            }
        });
        
        // Trigger the scroll event on page load to set the correct state
        window.dispatchEvent(new Event('scroll'));
    });
</script>
