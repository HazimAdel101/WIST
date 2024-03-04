
/*
navbar collapse

DOMContentLoaded event is fired when the initial HTML document has been completely loaded and parsed */

document.addEventListener('DOMContentLoaded', function () {
    var toggleBtn = document.getElementById('toggle');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleBtn.addEventListener('click', handleClick);
});


// carousel

document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.carousel-item');
    const dots = document.querySelector('.carousel-dots');

    items.forEach((item, index) => {
        const dot = document.createElement('div');
        dot.classList.add('carousel-dot');
        if (index === 0) {
            dot.classList.add('active');
        }
        dot.addEventListener('click', () => {
            setActiveItem(index);
        });
        dots.appendChild(dot);
    });

    let activeIndex = 0;

    function setActiveItem(index) {
        items.forEach(item => {
            item.style.transform = `translateX(-${index * 100}%)`;
        });
        const activeDot = document.querySelector('.carousel-dot.active');
        activeDot.classList.remove('active');
        dots.children[index].classList.add('active');
        activeIndex = index;
    }

    function nextItem() {
        activeIndex = (activeIndex + 1) % items.length;
        setActiveItem(activeIndex);
    }

    setInterval(nextItem, 3000); // Auto slide every 3 seconds
});
