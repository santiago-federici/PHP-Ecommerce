function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

const formBtnsContainer = document.querySelector('.form-btns-container')
const profileContainer = document.querySelector('.profile-container')

let loggedInUsername

function onPageLoad() {
    loggedInUsername = getCookie('username')
    return loggedInUsername
}


window.addEventListener("load", onPageLoad);

if(loggedInUsername !== null){
    formBtnsContainer.style.display = 'none'
    profileContainer.style.display = 'block'
}
