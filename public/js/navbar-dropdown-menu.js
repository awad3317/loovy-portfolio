  document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.custom-dropdown');
    const dropdownMenu = document.querySelector('.custom-dropdown-menu');
    
    // للشاشات الصغيرة
    if (window.innerWidth < 992) {
        dropdown.addEventListener('click', function(e) {
            e.preventDefault();
            const isOpen = dropdownMenu.style.display === 'block';
            dropdownMenu.style.display = isOpen ? 'none' : 'block';
            dropdownMenu.style.opacity = isOpen ? '0' : '1';
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
    
    mobileDropdowns.forEach(dropdown => {
        const link = dropdown.querySelector('.nav-link');
        const menu = dropdown.querySelector('.mobile-dropdown-menu');
        
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // إغلاق جميع القوائم المفتوحة أولاً
            document.querySelectorAll('.mobile-dropdown-menu').forEach(m => {
                if (m !== menu) m.style.display = 'none';
            });
            
            // تبديل القائمة الحالية
            if (menu.style.display === 'block') {
                menu.style.display = 'none';
                dropdown.classList.remove('active');
            } else {
                menu.style.display = 'block';
                dropdown.classList.add('active');
            }
        });
    });
    
    // إغلاق القوائم عند النقر خارجها
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.mobile-dropdown')) {
            document.querySelectorAll('.mobile-dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
                menu.parentElement.classList.remove('active');
            });
        }
    });
});