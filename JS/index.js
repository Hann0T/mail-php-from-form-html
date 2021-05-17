let button = document.querySelector('.submit__button')

let formWrapper = document.querySelectorAll('.mainForm__input')

const emailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

button.addEventListener('click', () => {

	formWrapper.forEach((form) => {

		if (form.children[0].classList[0] === "mainForm__Email") {
			validateFormEmail(form.children[0], form.children[1], form.children[2])
		} else {
			validateForm(form.children[0], form.children[1], form.children[2])
		}

	})

})


function validateFormEmail(inputEmail, errorIcon, errorMessage) {

	if (!emailFormat.test(inputEmail.value)) {
		errorIcon.classList.remove("hidden")
		errorMessage.classList.remove("hidden")
	} else {
		errorIcon.classList.add("hidden")
		errorMessage.classList.add("hidden")
	}

}

function validateForm(input, errorIcon, errorMessage) {

	if (input.value === "") {
		errorIcon.classList.remove("hidden")
		errorMessage.classList.remove("hidden")
	} else {
		errorIcon.classList.add("hidden")
		errorMessage.classList.add("hidden")
	}

}



