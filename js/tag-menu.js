const chefsContainer = document.querySelector('.chefs-background .chefs');

let isDragging = false, startX, startScrollLeft;

const dragStart = (e) => {
    isDragging = true;
    startX = e.pageX;
    startScrollLeft = chefsContainer.scrollLeft;
}

const dragging = (e) => {
    if (!isDragging) return;
    chefsContainer.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
}

chefsContainer.addEventListener('mousedown', dragStart)
chefsContainer.addEventListener('mousemove', dragging)
chefsContainer.addEventListener('mouseup', dragStop)
