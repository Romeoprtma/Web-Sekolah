<nav class="fixed top-0 left-0 right-0 flex flex-col md:flex-row justify-center items-center font-bold bg-[#FFFFFF] p-2 z-50">
    <div class="flex justify-between w-full md:w-auto items-center">
        <h1 class="text-[20px] ml-2 md:mr-[200px] w-full md:w-auto text-left">
            SMP AL ABROR
        </h1>
        <div class="burger-menu md:hidden cursor-pointer" onclick="toggleMenu()">
            <i data-feather="menu"></i>
        </div>
    </div>
    <ul id="nav-links" class="nav-links flex-col md:flex-row justify-between items-center my-[20px] text-[12px] text-slate-500 md:flex">
        <li class="nav-link mt-2  md:mt-0 mr-[20px] md:mr-[30px]">
            <a href="#home">
                <p class="rounded-md px-4 py-2">
                    HOME
                </p>
            </a>
        </li>
        <li class="nav-link dropdown mt-2 md:mt-0 md:mr-[40px] relative">
            <a href="#sejarah">
                <p class="rounded-md px-4 py-2">
                    SEJARAH
                </p>
            </a>
        </li>
        <li class="nav-link mt-2 md:mt-0 md:mr-[40px]">
            <a href="#visiMisi">
                <p class="rounded-md px-4 py-2">
                    VISI DAN MISI
                </p>
            </a>
        </li>
        <li class="nav-link mt-2 md:mt-0 md:mr-[40px]">
            <a href="#kurikulum">
                <p class="rounded-md px-4 py-2">
                    KURIKULUM
                </p>
            </a>
        </li>
        <li class="nav-link mt-2 md:mt-0 md:mr-[40px]">
            <a href="#fasilitas">
                <p class="rounded-md px-4 py-2">
                    FASILITAS
                </p>
            </a>
        </li>
        <li class="nav-link mt-2 md:mt-0 md:mr-[40px]">
            <a href="#ppdb">
                <p class="rounded-md px-4 py-2">
                    PPDB
                </p>
            </a>
        </li>
        <li class="nav-link mt-2 md:mt-0 md:mr-[40px]">
            <a href="#kontak">
                <p class="rounded-md px-4 py-2">
                    KONTAK
                </p>
            </a>
        </li>
        <li class="nav-link mt-4 md:mt-0">
            <button class="leading-[20px] hover:text-black text-black bg-[#F7C151] bg-opacity-[80%] hover:bg-opacity-100 rounded-[50px] pt-[10px] pr-[24px] pb-[10px] pl-[24px]" onclick="login()">
                LOGIN
            </button>
        </li>
    </ul>
</nav>

<script>
    feather.replace();

function login() {
    window.location.href = "/login";
}
    document.querySelectorAll('.nav-link a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
    
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
    
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
    
                // Remove 'active' class from all links
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
    
                // Add 'active' class to the clicked link
                this.parentElement.classList.add('active');
            });
        });
    
        // Function to toggle menu visibility on mobile
        function toggleMenu() {
            const navLinks = document.getElementById('nav-links');
            navLinks.classList.toggle('flex');
            
        }
</script>