var dragElement = null,
    items = document.getElementsByClassName('macro_icons_grid');

function dragStartHandler(event) {
    dragElement = event.target;
    event.dataTransfer.setData('dragItem', dragElement.innerHTML);
}

function dragOverHandler(event) {
    event.preventDefault();
    event.dataTransfer.dropEffect = 'move';
}

function dropHandler(event) {
    var dropElement = event.target;
    event.stopPropagation();
    dragElement.innerHTML = dropElement.innerHTML;
    dropElement.innerHTML = event.dataTransfer.getData('dragItem');
}

Array.prototype.forEach.call(items, function (item) {
    item.addEventListener('dragstart', dragStartHandler);
    item.addEventListener('dragover', dragOverHandler);
    item.addEventListener('drop', dropHandler);
});