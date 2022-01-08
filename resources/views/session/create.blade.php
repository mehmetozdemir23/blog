<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Questrial&family=Space+Grotesk:wght@700&display=swap"
        rel="stylesheet">

    <title>Login</title>
</head>

<body>
    <div class="w-full h-screen bg-personal-gray space-y-4 flex flex-col justify-center items-center">
        <img src="{{ asset('personal-logo.png') }}" alt="">

        <p class="font-montserrat text-xl text-gray-200">Sign in</p>
        <form id="login-form" method="post" action="/login"
            class="space-y-4 md:grid md:grid-cols-2 gap-4 px-4 max-w-xl">
            @csrf
            <div class="block md:block form-step flex flex-col space-y-4 ">
                <x-form-input type="text" name="email" placeholder="Email" />
                <x-form-input type="password" name="password" placeholder="Password" />
            </div>
            <button type="button" class="submit-btn col-span-2 p-4 rounded bg-transparent border-2 border-personal-red text-lg font-montserrat text-personal-red placeholder-gray-400 w-full h-16">
                Sign in
            </button>
        </form>
        <div class="error-text text-transparent text-md font-montserrat">
            Fields cannot be empty!
        </div>
    </div>

    <script>
        const loginForm = document.querySelector('#login-form')
        const submitBtn = document.querySelector('.submit-btn')
        const inputs = loginForm.querySelectorAll('input')
        const errorText = document.querySelector('.error-text')
        submitBtn.onclick = () => {
            for(let i = 1;i<inputs.length;i++){
                if(!inputs[i].value){
                    errorText.classList.remove('text-transparent')
                    errorText.classList.add('text-personal-red')
                    return
                }
                loginForm.submit()
            }
        }

        inputs.forEach(input=>{
            input.onfocus = () => {
                errorText.classList.remove('text-personal-red')
                errorText.classList.add('text-transparent')
            }
        })



    </script>
</body>

</html>
