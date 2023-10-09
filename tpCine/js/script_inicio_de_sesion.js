let formLogin = document.getElementById("formLogin")
formLogin.addEventListener("submit",iniciarSesion)

function iniciarSesion(eventoSubmit)
{
    let emailLogin = document.getElementById("emailLogin")
    let passwordLogin = document.getElementById("passwordLogin")
    let usuarios = [
        {email:"cliente1@gmail.com",password:"cliente1",rol:"cliente"},
        {email:"admin1@gmail.com",password:"admin1",rol:"admin"},
        {email:"gerente1@gmail.com",password:"gerente1",rol:"gerente"}
    ]

    if(validarEmail(emailLogin.value,usuarios) == true)
    {
        emailLogin.classList.remove("is-invalid")

        if(validarPassword(passwordLogin.value,usuarios) == true)
        {
           
            passwordLogin.classList.remove("is-invalid")
        }

        else
        {
            passwordLogin.classList.add("is-invalid")
            eventoSubmit.preventDefault()
        }

    }

    else
    {
        emailLogin.classList.add("is-invalid")
        eventoSubmit.preventDefault()
    }

}

function validarEmail(emailIngresado,usuarios)
{
    for(let usuario of usuarios)
    {
        if(emailIngresado == usuario.email)
            return true
    }
    return false;
}

function validarPassword(passwordIngresada,usuarios)
{
    for(let usuario of usuarios)
    {
        if(passwordIngresada == usuario.password)
            return true
    }
    return false;
}