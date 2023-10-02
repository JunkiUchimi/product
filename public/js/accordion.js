const accordionButtons = document.querySelectorAll('.accordion-btn');

accordionButtons.forEach(button => {
    button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null; // アコーディオンが開いている場合は高さをリセット
        } else {
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
        }
    });
});