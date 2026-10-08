document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('[data-filter]');
    const serviceCards = document.querySelectorAll('.service-column .service-card');
    const emptyFilter = document.getElementById('empty-filter');

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const filter = button.dataset.filter;
            let visibleCount = 0;
            filterButtons.forEach((item) => {
                const active = item === button;
                item.classList.toggle('active', active);
                item.setAttribute('aria-pressed', String(active));
            });
            serviceCards.forEach((card) => {
                const visible = filter === 'all' || card.dataset.category === filter;
                card.closest('.service-column').classList.toggle('d-none', !visible);
                if (visible) visibleCount += 1;
            });
            if (emptyFilter) emptyFilter.classList.toggle('d-none', visibleCount !== 0);
        });
    });

    const modal = document.getElementById('galleryModal');
    if (modal) {
        modal.addEventListener('show.bs.modal', (event) => {
            const trigger = event.relatedTarget;
            const image = modal.querySelector('#galleryModalImage');
            image.src = trigger.dataset.image;
            image.alt = trigger.dataset.alt;
        });
        modal.addEventListener('hidden.bs.modal', () => {
            const image = modal.querySelector('#galleryModalImage');
            image.removeAttribute('src');
            image.alt = '';
        });
    }

    const bookingDate = document.getElementById('booking-date');
    if (bookingDate) bookingDate.min = new Date(Date.now() - new Date().getTimezoneOffset() * 60000).toISOString().slice(0, 10);

    const bookingForm = document.getElementById('booking-form');
    if (bookingForm) {
        bookingForm.addEventListener('submit', (event) => {
            if (!bookingForm.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            bookingForm.classList.add('was-validated');
        });
    }

    const revealItems = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const observer = new IntersectionObserver((entries, revealObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        revealItems.forEach((item) => observer.observe(item));
    } else {
        revealItems.forEach((item) => item.classList.add('is-visible'));
    }
});
