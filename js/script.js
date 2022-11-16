"use strict"
// **************************************
// плавный скролл по якорям
document.querySelectorAll('a.yakor').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault()

        const href = this.getAttribute('href').substring(1)

        const scrollTarget = document.getElementById(href)

        // значение регулирует высоту шапки для точного позиционирования конечной остановки якоря
        const topOffset = -5
        const elementPosition = scrollTarget.getBoundingClientRect().top
        const offsetPosition = elementPosition - topOffset

        window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth',
        })
    })
})
// Конец плавного скролла по якорям
// **************************************
// Popup
const popupLinks = document.querySelectorAll('.popup-link');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll('.lock-padding');

let unlock = true;

// та же цифра что указана в свойстве транзишен css - должны быть одинаковы
const timeout = 800;

if (popupLinks.length > 0){
    for (let index = 0; index < popupLinks.length; index++) {
        const popupLink = popupLinks[index];
        popupLink.addEventListener("click", function (e) {
            const popupName = popupLink.getAttribute('href').replace('#', '');
            const curentPopup = document.getElementById(popupName);
            popupOpen(curentPopup);
            e.preventDefault();
        });
    }
}
const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
    for (let index = 0; index < popupCloseIcon.length; index++) {
        const el = popupCloseIcon[index];
        el.addEventListener('click', function (e) {
            popupClose(el.closest('.popup'));
            e.preventDefault();
        });
    }
}

function popupOpen(curentPopup) {
    if (curentPopup && unlock) {
        const popupActive = document.querySelector('.popup.open');
        if (popupActive) {
            popupClose(popupActive, false);
        } else {
            bodyLock();
        }
        curentPopup.classList.add('open');
        curentPopup.addEventListener("click", function (e) {
            if (!e.target.closest('.popup__content')) {
                popupClose(e.target.closest('.popup'));
            }
        });
    }
}
function popupClose(popupActive, doUnlock = true) {
    if (unlock) {
        popupActive.classList.remove('open');
        if (doUnlock) {
            bodyUnlock();
        }
    }
}

// обратить внимание что в хтмл коде поАп не в зоне врапера который указывается ниже
// попробовать его заменить другим именем и включить его в хтмл - дёргает фоновую страницу при открытии поАпа, возможно из-за этого
function bodyLock() {
    const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';

    if (lockPadding.length > 0) {
    for (let index = 0; index < lockPadding.length; index++) {
        const el = lockPadding[index];
        el.style.paddingRight = lockPaddingValue;
    }
}
    body.style.paddingRight = lockPaddingValue;
    body.classList.add('lock');

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}

function bodyUnlock() {
    setTimeout(function () {
        if (lockPadding.length > 0) {
        for (let index = 0; index < lockPadding.length; index++) {
            const el = lockPadding[index];
            el.style.paddingRight = '0px';
        }
    }
        body.style.paddingRight = '0px';
        body.classList.remove('lock');
    }, timeout);

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        const popupActive = document.querySelector('.popup.open');
        popupClose(popupActive);
    }
});

// дописать полифилы под старые браузеры с видеоурока

// The end - Popup




// Выпадающий список в popup
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
// function myFunction() {
//     document.getElementById("myDropdown").classList.toggle("show");
// }

// Close the dropdown menu if the user clicks outside of it
// window.onclick = function(event) {
// if (!event.target.matches('.dropbtn')) {

//     var dropdowns = document.getElementsByClassName("dropdown-content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//     var openDropdown = dropdowns[i];
//     if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//     }
//     }
// }
// }
// Конец выпадающего списка в popup





// Выпадающий список в popup
let coll = document.getElementsByClassName("collapsible");
for(let i = 0; i < coll.length; i++) {
    coll[i].addEventListener('click', function() {
        this.classList.toggle('active');
        let content = this.nextElementSibling;
        if(content.style.maxHeight) {
             content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + 'px'
        }
    })
}
// Конец выпадающего списка в popup