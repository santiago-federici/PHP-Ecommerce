const username = document.querySelector('#username')
const password = document.querySelector('#password')
const repeatPassword = document.querySelector('#repeatpassword')

const registerForm = document.querySelector('.register-form')

const errorsContainer = document.querySelector('.errors-container')

registerForm.addEventListener('submit', (e) => {
    let errors = []
    
    if(username.value === '' || password.value === '' || repeatPassword === ''){
        errors.push('Some fields are empty')
    }
    
    if(username.value.length < 3){
        errors.push('Name must be at least 3 characters long')
    }
    
    if(username.value.length > 15){
        errors.push('Name must be less than 15 characters long')
    }
    
    if(password.value.length < 6){
        errors.push('Password must be at least 6 characters long')
    }

    if(password.value.length > 15){
        errors.push('Password must be less than 15 characters long')
    }

    if(repeatPassword.value !== password.value){
        errors.push('Passwords must be the same')
    }

    if(errors.length > 0){
        e.preventDefault()
        errorsContainer.innerHTML = errors.join('<br/>')
    }
})