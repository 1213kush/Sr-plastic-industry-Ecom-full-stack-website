document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section, .left, .right');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    });
    sections.forEach(section => {
        observer.observe(section);
    });
})