const bodyL = document.querySelector('#l-b');

bodyL.classList.remove('opacity0');
bodyL.classList.add('opacity1');

function layoutInit() {
    const eml = document.querySelector('#eml');
    eml.classList.add('layout-active');
}

setTimeout(layoutInit, 1000);

document.querySelector('#btn-next-pss').onclick = function () {
    const emlUsr = document.querySelector('#usr').value;
    const alertEmlL = document.querySelector('#alert-eml-l');
    const spanEml = document.querySelector('#span-eml');
    const emlValid = validateEmail(emlUsr);

    if (!emlValid) {
        alertEmlL.innerHTML = '<p style="color: red;">Escribe una dirección de correo electrónico.</p>';
        alertEmlL.style.display = "block";
    } else {
        alertEmlL.style.display = "none";
        spanEml.innerHTML = emlUsr;
        nextLayout('#eml', '#pss');
    }
}

document.querySelector('#btn-prev').onclick = function () {
    prevLayout('#pss', '#eml');
}

function nextLayout(parent, next) {
    const parentDiv = document.querySelector(parent);
    const nextDiv = document.querySelector(next);

    parentDiv.classList.remove('layout-left', 'layout-right', 'layout-active');
    nextDiv.classList.remove('layout-left', 'layout-right', 'layout-active');

    parentDiv.classList.toggle('layout-left');
    nextDiv.classList.toggle('layout-active');
}

function prevLayout(parent, prev) {
    const parentDiv = document.querySelector(parent);
    const prevDiv = document.querySelector(prev);

    parentDiv.classList.remove('layout-left', 'layout-right', 'layout-active');
    prevDiv.classList.remove('layout-left', 'layout-right', 'layout-active');

    parentDiv.classList.toggle('layout-right');
    prevDiv.classList.toggle('layout-active');
}

function validateEmail(eml) {
    const stringEml = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9-]{2,4})+$/);
    return stringEml.test(eml);
}

function cancelEnter(e) {
    key = (document.querySelectorAll) ? e.keyCode : e.which;
    return (key != 13);
}