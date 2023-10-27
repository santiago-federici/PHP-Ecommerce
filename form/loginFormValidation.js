const username = document.querySelector('#username')
const password = document.querySelector('#password')

const loginForm = document.querySelector('.login-form')

const errorsContainer = document.querySelector('.errors-container')

loginForm.addEventListener('submit', (e) => {
    let errors = []
    
    if(username.value === ''){
        errors.push('Username cannot be empty')
    }

    if(password.value === ''){
        errors.push('Password cannot be empty')
    }

    if(errors.length > 0){
        e.preventDefault()
        errorsContainer.innerHTML = errors.join('<br/>')
    }
})