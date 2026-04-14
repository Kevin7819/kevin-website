import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Intersection Observer for scroll animations
document.addEventListener('DOMContentLoaded', () => {
    // Fade-in sections
    const fadeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    document.querySelectorAll('.fade-in-section').forEach(el => {
        fadeObserver.observe(el);
    });

    // Staggered badge animations
    const badgeObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const badges = entry.target.querySelectorAll('.badge-stagger');
                badges.forEach((badge, index) => {
                    setTimeout(() => {
                        badge.classList.add('is-visible');
                    }, index * 50);
                });
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.skills-group').forEach(el => {
        badgeObserver.observe(el);
    });

    // Active nav link highlight on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');

    const navObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navLinks.forEach(link => {
                    link.classList.toggle('active',
                        link.getAttribute('href') === `#${id}`);
                });
            }
        });
    }, {
        threshold: 0.3,
        rootMargin: '-80px 0px -50% 0px'
    });

    sections.forEach(section => {
        navObserver.observe(section);
    });
});
