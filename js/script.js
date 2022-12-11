"use strict"

// **************************************
// определение моб устройства для переключения мыши на тач-скрин
const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (
            isMobile.Android() ||
            isMobile.BlackBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows());
    }
}

if (isMobile.any()) {
    document.body.classList.add('_touch');

    let menuArrows = document.querySelectorAll('.menu__arrow');
    if (menuArrows.length > 0) {
        for (let index = 0; index < menuArrows.length; index++) {
            const menuArrow = menuArrows[index];
            menuArrow.addEventListener("click", function (e) {
                menuArrow.parentElement.classList.toggle('_active-menu-arrow');
            })
        }
    }

    let menuMobile = document.querySelectorAll('.menu__mobile');
    if (menuMobile.length > 0) {
        for (let index = 0; index < menuMobile.length; index++) {
            const menuArrow = menuMobile[index];
            menuArrow.addEventListener("click", function (e) {
                menuArrow.parentElement.classList.toggle('_active-menu-arrow');
            })
        }
    }

} else {
    document.body.classList.add('_pc');
}
// конец определения моб устройства для переключения мыши на тач-скрин
// **************************************


// **************************************
// меню бургер
const iconMenu = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__body');
if (iconMenu) {
    iconMenu.addEventListener("click", function (e) {
        document.body.classList.toggle('_lock-scroll');
        iconMenu.classList.toggle('_active-menu-arrow');
        menuBody.classList.toggle('_active-menu-arrow');
    });
}
// конец меню бургер
// **************************************




// **************************************
// прокрутка при клике для меню
const menuLinks = document.querySelectorAll('.menu__link[data-goto]');
if (menuLinks.length > 0) {
    menuLinks.forEach(menuLink => {
        menuLink.addEventListener("click", onMenuLinkClick);
    });

    function onMenuLinkClick(e) {
        const menuLink = e.target;
        if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
            const gotoBlock = document.querySelector(menuLink.dataset.goto);
            const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('header').offsetHeight;

            if (iconMenu.classList.contains('_active-menu-arrow')) {
                document.body.classList.remove('_lock-scroll');
                iconMenu.classList.remove('_active-menu-arrow');
                menuBody.classList.remove('_active-menu-arrow');
            }

            window.scrollTo({
                top: gotoBlockValue,
                behavior: "smooth"
            });
            e.preventDefault();
        }
    }
}

// Конец прокрутке при клике для меню
// **************************************



// **************************************
// плавный скролл по якорям для карточки на главном меню
document.querySelectorAll('a.yakor').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault()

        const href = this.getAttribute('href').substring(1)

        const scrollTarget = document.getElementById(href)

        // значение регулирует высоту шапки для точного позиционирования конечной остановки якоря
        const topOffset = 60
        const elementPosition = scrollTarget.getBoundingClientRect().top
        const offsetPosition = elementPosition - topOffset

        window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth',
        })
    })
})
// Конец плавного скролла по якорям для карточки на главном меню
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
// **************************************




// **************************************
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
// **************************************




// **************************************
// Действие клика на кнопке
document.addEventListener("click", function (e) {
    const targetItem = e.target;
    if (targetItem.closest('[data-ripple]')) {
        //константы
        const button = targetItem.closest('[data-ripple]');
        const ripple = document.createElement('span');
        const diametr = Math.max(button.clientWidth, button.clientHeight);
        const radius = diametr / 2;

        //формирование элемента
        ripple.style.width = ripple.style.height = `${diametr}px`;
        ripple.style.left = `${e.pageX - (button.getBoundingClientRect().left + scrollX) - radius}px`;
        ripple.style.top = `${e.pageY - (button.getBoundingClientRect().top + scrollY) - radius}px`;
        ripple.classList.add('ripple');

        //добавление элемента
        button.appendChild(ripple);

        //Получение времени действия анимации
        const timeout = this.getAnimationDuration(ripple);

        //Удаление элемента
        setTimeout(() => {
            ripple ? ripple.remove() : null;
        }, timeout)

        //Функция получения времени действии анимации
        function getAnimationDuration() {
            const aDuration = window.getComputedStyle(ripple).animationDuration;
            return aDuration.includes('ms') ?
                aDuration.replace("ms", '') : aDuration.replace("s", '') * 1000;
        }

    }
});
// The end - Действие клика на кнопке
// **************************************






// изучить вопрос, можно ли эти 2 функции обьеденить в одну, например через обьект элементов!!!

// Выпадающий список в других страницах
let collOtherPages = document.getElementsByClassName("collapsible__other-pages");
for(let i = 0; i < collOtherPages.length; i++) {
    collOtherPages[i].addEventListener('click', function() {
        this.classList.toggle('active');
        let content = this.nextElementSibling;
        if(content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + 'px'
        }
    })
}
// Конец выпадающего списка в других страницах
// **************************************



// Поменять стиль кнопки, с которой выпадает вложенный список на странице "Контакты"
let item = document.getElementsByClassName("collapsible__other-pages");
for(let i = 0; i < item.length; i++) {
    item[i].addEventListener('click', function() {
        this.classList.toggle('change__style-button');
    })
}
// Конец смены стиля кнопки, с которой выпадает вложенный список на странице "Контакты"
// **************************************



// Поменять стиль кнопки, с которой выпадает вложенный список на главной странице в попапах
let itemInPopup = document.getElementsByClassName("collapsible");
for(let i = 0; i < itemInPopup.length; i++) {
    itemInPopup[i].addEventListener('click', function() {
        this.classList.toggle('change__style-collapsible');
    })
}
// Конец смены стиля кнопки, с которой выпадает вложенный список на главной странице попапах
// **************************************



// Развернуть стрелку во кнопке выпадающего списка
// let arrow = document.getElementsByClassName("arrow__bottom");
// for(let i = 0; i < arrow.length; i++) {
//     arrow[i].addEventListener('click', function() {
//         // this.classList.add('arrow__top');
//         this.classList += " arrow__top";
//     })
// }
// Конец смены положения стрелки в кнопке выпадающего спсика
// **************************************




// Тёмная/светлая тема
window.addEventListener("load", windowLoad);

function windowLoad() {
	// HTML
	const htmlBlock = document.documentElement;

	// Отримуємо збережену тему
	const saveUserTheme = localStorage.getItem('user-theme');

	// Робота з системними налаштуваннями
	let userTheme;
	if (window.matchMedia) {
		userTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
	}
	window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
		!saveUserTheme ? changeTheme() : null;
	});

	// Зміна теми по кліку
	const themeButton = document.querySelector('.page__theme');
	const resetButton = document.querySelector('.page__reset');
	if (themeButton) {
		themeButton.addEventListener("click", function (e) {
			resetButton.classList.add('active');
			changeTheme(true);
		});
	}
	if (resetButton) {
		resetButton.addEventListener("click", function (e) {
			resetButton.classList.remove('active');
			localStorage.setItem('user-theme', '');
		});
	}

	// Функція додавання класу теми
	function setThemeClass() {
		if (saveUserTheme) {
			htmlBlock.classList.add(saveUserTheme)
			resetButton.classList.add('active');
		} else {
			htmlBlock.classList.add(userTheme);
		}
	}
	// Додаємо клас теми
	setThemeClass();

	// Функція зміни теми
	function changeTheme(saveTheme = false) {
		let currentTheme = htmlBlock.classList.contains('light') ? 'light' : 'dark';
		let newTheme;

		if (currentTheme === 'light') {
			newTheme = 'dark';
		} else if (currentTheme === 'dark') {
			newTheme = 'light';
		}
		htmlBlock.classList.remove(currentTheme);
		htmlBlock.classList.add(newTheme);
		saveTheme ? localStorage.setItem('user-theme', newTheme) : null;
	}


}



// Конец - Тёмная/светлая тема
// **************************************