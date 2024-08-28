const productSlider = document.getElementById('product-slider');
        const productTrack = document.getElementById('product-track');

        productSlider.addEventListener('mouseenter', () => {
            productTrack.classList.add('paused');
        });

        productSlider.addEventListener('mouseleave', () => {
            productTrack.classList.remove('paused');
        });