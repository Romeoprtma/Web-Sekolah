<nav class="fixed top-0 left-0 right-0 flex flex-col md:flex-row justify-between bg-white items-center p-4 z-50 shadow-md">
  <div class="flex justify-between w-full md:w-auto items-center">
    <h1 class="text-[20px] ml-2 md:mr-20">
        SMP AL ABROR
    </h1>
    <div class="burger-menu md:hidden cursor-pointer" onclick="toggleMenu()">
        <i data-feather="menu"></i>
    </div>
  </div>
  
  <ul id="nav-links" class="nav-links hidden md:flex flex-col md:flex-row justify-center items-center mt-4 md:mt-0 text-[12px] text-slate-500">
    <li class="mx-4 my-6 md:my-0 rounded-[50px] duration-300 {{ request()->is('/') ? 'bg-[#F7C151] text-black' : 'hover:bg-[#F7C151] hover:text-black' }}">
      <a href="#home" class="px-4 py-2 block text-center">HOME</a>
    </li>
    <li class="mx-4 my-6 md:my-0 rounded-[50px] duration-300 {{ request()->is('sejarah') ? 'bg-[#F7C151] text-black' : 'hover:bg-[#F7C151] hover:text-black' }}">
      <a href="#sejarah" class="px-4 py-2 block text-center">SEJARAH</a>
    </li>
    <li class="mx-4 my-6 md:my-0 rounded-[50px] duration-300 {{ request()->is('visiMisi') ? 'bg-[#F7C151] text-black' : 'hover:bg-[#F7C151] hover:text-black' }}">
      <a href="#visiMisi" class="px-4 py-2 block text-center">VISI DAN MISI</a>
    </li>
    <li class="mx-4 my-6 md:my-0 rounded-[50px] duration-300 {{ request()->is('kurikulum') ? 'bg-[#F7C151] text-black' : 'hover:bg-[#F7C151] hover:text-black' }}">
      <a href="#kurikulum" class="px-4 py-2 block text-center">KURIKULUM</a>
    </li>
    <li class="mx-4 my-6 md:my-0 rounded-[50px] duration-300 {{ request()->is('fasilitas') ? 'bg-[#F7C151] text-black' : 'hover:bg-[#F7C151] hover:text-black' }}">
      <a href="#fasilitas" class="px-4 py-2 block text-center">FASILITAS</a>
    </li>
    <li class="mx-4 my-6 md:my-0 rounded-[50px] duration-300 {{ request()->is('ppdb') ? 'bg-[#F7C151] text-black' : 'hover:bg-[#F7C151] hover:text-black' }}">
      <a href="#ppdb" class="px-4 py-2 block text-center">PPDB</a>
    </li>
    <li class="mx-4 my-6 md:my-0 rounded-[50px] duration-300 {{ request()->is('kontak') ? 'bg-[#F7C151] text-black' : 'hover:bg-[#F7C151] hover:text-black' }}">
      <a href="#kontak" class="px-4 py-2 block text-center">KONTAK</a>
    </li>
    <li class="flex justify-center items-center my-6 md:my-0">
      <button class="leading-5 hover:text-black text-black bg-[#F7C151] bg-opacity-[80%] hover:bg-opacity-100 rounded-full px-6 py-2 md:ml-4 ml-0" onclick="login()">LOGIN</button>
    </li>
  </ul>
</nav>

<script>
function toggleMenu() {
  const navLinks = document.getElementById('nav-links');
  navLinks.classList.toggle('hidden');
}

function login() {
  window.location.href = '/login';
}

document.addEventListener('DOMContentLoaded', () => {
  const currentHash = window.location.hash;
  if (currentHash) {
    const activeLink = document.querySelector(`a[href="${currentHash}"]`);
    if (activeLink) {
      activeLink.parentElement.classList.add('bg-[#F7C151]', 'text-black');
    }
  }
});

window.addEventListener('scroll', () => {
  const sections = document.querySelectorAll('section');
  const navLinks = document.querySelectorAll('#nav-links li a');
  let currentSection = '';

  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    if (window.scrollY >= sectionTop - 60) {
      currentSection = section.getAttribute('id');
    }
  });

  navLinks.forEach(link => {
    link.parentElement.classList.remove('active');
    if (link.getAttribute('href') === `#${currentSection}`) {
      link.parentElement.classList.add('active');
    }
  });
});
</script>
