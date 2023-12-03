// Полифилл для метода forEach для NodeList
if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = function (callback, thisArg) {
        thisArg = thisArg || window;
        for (let i = 0; i < this.length; i++) {
            callback.call(thisArg, this[i], i, this);
        }
    };
}

document.querySelectorAll('.dropdown').forEach(function (dropDawnWrapper){
    const dropDownList = dropDawnWrapper.querySelector('.dropdown__list');
    const dropDownBtn = dropDawnWrapper.querySelector('.dropdown__button');
    const dropDownListItems = dropDownList.querySelectorAll('.dropdown__list-item');
    const dropDownInput = dropDawnWrapper.querySelector('.dropdown__input-hidden');

    dropDownBtn.addEventListener('click', function (){
        dropDownList.classList.toggle('dropdown__list--visible');
        this.classList.add('dropdown__button--active')
    })

    dropDownListItems.forEach(function (listItem){
        listItem.addEventListener('click', function (e){
            e.stopPropagation();
            dropDownBtn.innerText = this.innerText;
            dropDownBtn.focus();
            dropDownInput.value = this.dataset.value;
            dropDownList.classList.remove('dropdown__list--visible');
        })
    })
    document.addEventListener('click', function (e){
        if(e.target !== dropDownBtn){
            dropDownBtn.classList.remove('dropdown__button--active');
            dropDownList.classList.remove('dropdown__list--visible');
        }
    })

    document.addEventListener('keydown', function (e){
        if (e.key === 'Tab' || e.key === 'Escape'){
            dropDownBtn.classList.remove('dropdown__button--active');
            dropDownList.classList.remove('dropdown__list--visible');
        }
    })
})

