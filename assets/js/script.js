// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Simple form validation
const contactForm = document.querySelector('form');
if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const name = this.querySelector('input[type="text"]').value;
        const phone = this.querySelector('input[type="tel"]').value;
        const message = this.querySelector('textarea').value;

        if (!name || !phone || !message) {
            alert('Harap isi semua field dengan benar.');
            return;
        }

        alert('Terima kasih! Pesanan Anda telah kami terima. Kami akan menghubungi Anda segera.');
        this.reset();
    });
}

// Mobile menu toggle (simple implementation)
const menuButton = document.querySelector('button.md\\:hidden');
if (menuButton) {
    menuButton.addEventListener('click', function () {
        alert('Menu navigasi mobile akan ditampilkan di sini');
    });
}