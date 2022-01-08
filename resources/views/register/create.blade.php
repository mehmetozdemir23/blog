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

    <title>Register</title>
</head>

<body>
    <div class="w-full h-screen bg-personal-gray space-y-4 flex flex-col justify-center items-center">
        <img src="{{ asset('personal-logo.png') }}" alt="">

        <p class="font-montserrat text-xl text-gray-200">Sign up</p>
        <form id="register-form" method="post" action="/register" onsubmit="formIsValid(this);"
            class="space-y-4 md:grid md:grid-cols-2 gap-4 px-4 max-w-xl">
            @csrf
            <div class="block md:block form-step flex flex-col space-y-4 ">
                <x-form-input type="text" name="user_last_name" placeholder="Last name" />
                <x-form-input type="text" name="user_first_name" placeholder="First name" />
                <x-form-input type="text" name="user_user_name" placeholder="Username" />
            </div>
            <div class="hidden md:block form-step flex flex-col space-y-4 ">
                <x-form-input type="email" name="user_email" placeholder="Email" />
                <x-form-input type="password" name="user_password" placeholder="Password" />
                <x-form-input type="password" name="password-confirm" placeholder="Confirm password" />
            </div>
            <div class="md:hidden col-span-2 flex space-x-4">
                <button type="button"
                    class="prev-btn col-span-2 p-4 rounded bg-transparent border-2 border-gray-600 text-lg font-montserrat text-gray-600 placeholder-gray-400 w-full h-16">Previous</button>
                <button type="button"
                    class="next-btn col-span-2 p-4 rounded bg-transparent border-2 border-personal-red text-lg font-montserrat text-personal-red placeholder-gray-400 w-full h-16">Next</button>
            </div>
            <button type="button" class="submit-btn hidden md:block col-span-2 p-4 rounded bg-transparent border-2 border-personal-red text-lg font-montserrat text-personal-red placeholder-gray-400 w-full h-16">
                Register
            </button>
        </form>
    </div>
    <script>
        const registerForm = document.querySelector('#register-form')
        const formStepDivs = document.querySelectorAll('.form-step')
        const inputs = document.querySelectorAll('input')
        const prevBtn = document.querySelector('.prev-btn')
        const nextBtn = document.querySelector('.next-btn')
        const submitBtn = document.querySelector('.submit-btn')

        const startStep = 0
        const finalStep = 1
        let step = startStep

        inputs.forEach(input => {
            input.onfocus = () => {
                console.log('focused')
                input.parentNode.querySelector('i').classList.remove('text-personal-red')
                input.parentNode.querySelector('i').classList.add('text-transparent')
            }
        });

        nextBtn.onclick = () => {
            if (!stepIsValid(formStepDivs, step))
                return
            if (step === 0) {
                prevBtn.classList.remove('border-gray-600', 'text-gray-600')
                prevBtn.classList.add('border-personal-red', 'text-personal-red')
            }
            step++
            if (step === finalStep) {
                nextBtn.innerText = "Register"
            }
            if (step === finalStep + 1) {
                registerForm.submit()
                return
            }
            formStepDivs[step - 1].classList.remove('block')
            formStepDivs[step - 1].classList.add('hidden')
            formStepDivs[step].classList.remove('hidden')
            formStepDivs[step].classList.add('block')


        }

        prevBtn.onclick = () => {
            if (step === 0) {
                return
            }
            if (step === finalStep) {
                nextBtn.setAttribute('type', 'button')
                nextBtn.innerText = "Next"
            }
            step--
            if (step === 0) {
                prevBtn.classList.remove('border-personal-red', 'text-personal-red')
                prevBtn.classList.add('border-gray-600', 'text-gray-600')
            }
            formStepDivs[step + 1].classList.remove('block')
            formStepDivs[step + 1].classList.add('hidden')
            formStepDivs[step].classList.remove('hidden')
            formStepDivs[step].classList.add('block')

        }

        submitBtn.onclick = () => {
            if(formIsValid(registerForm))
                registerForm.submit()
        }

        const stepIsValid = (form, step) => {
            let inputs = form[step].querySelectorAll('input')
            let valid = true
            for (let i = 0;i<inputs.length;i++) {

                const input = inputs[i]

                if (!input.value){
                    const asterisk = input.parentNode.querySelector('i')
                    asterisk.classList.remove('text-transparent')
                    asterisk.classList.add('text-personal-red')
                    valid = false
                }
            }
            return valid
        }
        const formIsValid = (form)=>{
            let inputs = form.querySelectorAll('input')
            let valid = true
            for (let i = 1 ; i<inputs.length;i++) {
                const input = inputs[i]
                if (!input.value)
                {
                    const asterisk = input.parentNode.querySelector('i')
                    asterisk.classList.remove('text-transparent')
                    asterisk.classList.add('text-personal-red')
                    valid = false
                }

            }

            return valid
        }

    </script>
</body>

</html>
