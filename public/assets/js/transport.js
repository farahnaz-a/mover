//selectors
const steps = document.querySelectorAll('.transport-steps-wrapper > div')
const transportElement = document.querySelector('#transport')
const transportItems = document.querySelectorAll('.transport-item')
const backBtns = document.querySelectorAll('.back')
const continueBtns = document.querySelectorAll('.continue')
const showAllBtn = document.querySelector('#all-item')
const hiddenTransportItems = document.querySelectorAll('.hidden-transport-item')
const addressSection = document.querySelector('#address')
const login = document.querySelector('#login')
const toLogin = document.querySelector('#to-login')
const registration = document.querySelector('#registration')
const toRegistration = document.querySelector('#to-registration')
const userForm = document.querySelector('#user-form')

let formSectionId

//Event listener
showAllBtn.addEventListener('click', function () {
  hiddenTransportItems.forEach((item) => item.classList.remove('d-none'))
  this.parentElement.classList.add('d-none')
})
transportItems.forEach((transportItem) => {
  transportItem.addEventListener('click', () => {
    const formId = (formSectionId = transportItem.getAttribute('data-target'))
    console.log(formSectionId)
    document.querySelector(formId).classList.remove('d-none')
    transportElement.classList.add('d-none')
    steps[0].classList.remove('active')
    steps[1].classList.add('active')
  })
})
backBtns.forEach((backBtn) => {
  backBtn.addEventListener('click', () => {
    const section = parseInt(backBtn.getAttribute('data-section'))
    vehicle1.classList.remove('d-none')
    vehicle2.classList.add('d-none')
    if (section === 0) {
      transportElement.classList.remove('d-none')
      document.querySelector(formSectionId).classList.add('d-none')
      steps[0].classList.add('active')
      steps[1].classList.remove('active')
    } else if (section === 1) {
      document.querySelector(formSectionId).classList.remove('d-none')
      addressSection.classList.add('d-none')
      steps[1].classList.add('active')
      steps[2].classList.remove('active')
    } else {
      addressSection.classList.remove('d-none')
      userForm.classList.add('d-none')
      steps[2].classList.add('active')
    }
  })
})
continueBtns.forEach((continueBtn) => {
  continueBtn.addEventListener('click', () => {
    const section = parseInt(continueBtn.getAttribute('data-section'))
    console.log(section)
    if (section === 1) {
      document.querySelector(formSectionId).classList.add('d-none')
      addressSection.classList.remove('d-none')
      steps[1].classList.remove('active')
      steps[2].classList.add('active')
    } else if (section === 2) {
      addressSection.classList.add('d-none')
      userForm.classList.remove('d-none')
      steps[2].classList.remove('active')
    }
  })
})

//if form is vehicle
const vehicle1 = document.querySelector('#vehicle1')
const vehicle2 = document.querySelector('#vehicle2')
const vehicleTypes = document.querySelectorAll('.vehicleType')
const vehicleTypeInput = document.querySelector('#vehicle-type')

vehicleTypes.forEach((vehicleType) => {
  vehicleType.classList.remove('active')
  vehicleType.addEventListener('click', () => {
    vehicle1.classList.add('d-none')
    vehicle2.classList.remove('d-none')
    vehicleTypes.forEach((vehicleType) =>
      vehicleType.classList.remove('active')
    )
    vehicleType.classList.add('active')
    vehicleTypeInput.value = vehicleType.innerHTML
    console.log(vehicleTypeInput.value)
  })
})

//user form handle
toLogin.addEventListener('click', () => {
  registration.classList.add('d-none')
  login.classList.remove('d-none')
})
toRegistration.addEventListener('click', () => {
  registration.classList.remove('d-none')
  login.classList.add('d-none')
})

// add articles functions
//selectors
const articleBtns = document.querySelectorAll('.article-btn')
const articleFormInputs = document.querySelectorAll('.article-form input')

const articleHtml = (
  articleName,
  length,
  height,
  weight,
  width,
  quantity,
  estimationValue,
  make,
  model,
  dim,
  animalBreed,
  specialNeeds,
  vaccinations,
  movingVehicle,
  conveyors
) => `<div class="p-3 bg-light-gray rounded mb-3 article-item">
                  <div class="
                      border-bottom
                      mb-3
                      pb-2
                      d-flex
                      flex-wrap
                      text-nowrap
                      justify-content-between
                    ">
                    <div>
                      <span class="mr-3 text-navy-blue">${articleName}</span>
                    </div>
                  </div>
                  <div class="badges">
                    <small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Name ${articleName}</small>
                    ${
                      length
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Length (cm) ${length}</small>`
                        : ''
                    }
                    ${
                      width
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Width (cm) ${width}</small>`
                        : ''
                    }
                    ${
                      height
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Height (cm) ${height}</small>`
                        : ''
                    }
                   ${
                     weight
                       ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Weight (kg) ${weight}</small>`
                       : ''
                   }
                    ${
                      quantity
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Quantity ${quantity}</small>`
                        : ''
                    }
                    ${
                      make
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Make ${make}</small>`
                        : ''
                    }
                    ${
                      model
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Model ${model}</small>`
                        : ''
                    }
                    ${
                      dim
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Dim ${dim}</small>`
                        : ''
                    }
                    ${
                      animalBreed
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Animal breed ${animalBreed}</small>`
                        : ''
                    }
                    ${
                      specialNeeds
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Special needs ${specialNeeds}</small>`
                        : ''
                    }
                    ${
                      vaccinations
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Are the vaccinations up to date? ${vaccinations}</small>`
                        : ''
                    }
                    ${
                      estimationValue
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Estimation value ${estimationValue}</small>`
                        : ''
                    }
                    ${
                      movingVehicle
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Moving vehicle ${movingVehicle}</small>`
                        : ''
                    }
                    ${
                      conveyors
                        ? `<small class="
                        bg-white
                        text-navy-blue
                        mr-2
                        rounded
                        px-3
                        py-2
                        mb-2
                        d-inline-block
                      ">Conveyors ${conveyors}</small>`
                        : ''
                    }
                  </div>
                </div>`
articleBtns.forEach((articleBtn) =>
  articleBtn.addEventListener('click', () => {
    const formElement = articleBtn.getAttribute('data-target')
    const articleForm = document.querySelector(formElement)
    const formAlert = document.querySelector(
      articleBtn.getAttribute('data-alert')
    )
    const articles = document.querySelector(
      articleBtn.getAttribute('data-article')
    )
    // const articleFormInputs = document.querySelectorAll(formElement + ' input')
    // let checkInputs = false
    // console.log(articleFormInputs.includes(''))
    // articleFormInputs.forEach((input, index) => {
    //   console.log(input.value === '')
    //   if (input.value !== '') {
    //     checkInputs = true
    //   }
    // if (input.value === '') {
    //   input.classList.add('border', 'border-danger')
    //   console.log('border ' + true)
    // } else {
    //   if (
    //     articleForm.articleName.value !== '' &&
    //     articleForm.length.value !== '' &&
    //     articleForm.height.value !== '' &&
    //     articleForm.weight.value !== '' &&
    //     articleForm.width.value !== '' &&
    //     articleForm.quantity.value !== ''
    //   ) {
    //     articles.classList.remove('d-none')
    //     formAlert.classList.add('d-none')
    //     articles.innerHTML += articleHtml(
    //       articleForm.articleName.value,
    //       articleForm.length.value,
    //       articleForm.height.value,
    //       articleForm.weight.value,
    //       articleForm.width.value,
    //       articleForm.quantity.value
    //     )
    //     articleForm.reset()
    //   } else {
    //     formAlert.classList.remove('d-none')
    //     input.classList.remove('border', 'border-danger')
    //     console.log('border ' + false)
    //   }
    // }
    // })
    if (
      articleForm?.articleName?.value ||
      articleForm?.vehicleName?.value ||
      articleForm?.length?.value ||
      articleForm?.height?.value ||
      articleForm?.weight?.value ||
      articleForm?.width?.value ||
      articleForm?.quantity?.value ||
      articleForm?.estimationValue?.value ||
      articleForm?.make?.value ||
      articleForm?.model?.value ||
      articleForm?.dim?.value ||
      articleForm?.animalBreed?.value ||
      articleForm?.specialNeeds?.value ||
      articleForm?.vaccinations?.value ||
      articleForm?.movingVehicle?.checked ||
      articleForm?.conveyors?.checked
    ) {
      // articleFormInputs.forEach((input) => {
      //   input.classList.remove('border', 'border-danger')
      // })
      articles.classList.remove('d-none')
      formAlert.classList.add('d-none')
      articles.innerHTML += articleHtml(
        articleForm?.articleName?.value ||
          articleForm?.vehicleName?.value ||
          articleForm?.boatName?.value ||
          articleForm?.animalName?.value,
        articleForm?.length?.value,
        articleForm?.height?.value,
        articleForm?.weight?.value,
        articleForm?.width?.value,
        articleForm?.quantity?.value,
        articleForm?.estimationValue?.value,
        articleForm?.make?.value,
        articleForm?.model?.value,
        articleForm?.dim?.value,
        articleForm?.animalBreed?.value,
        articleForm?.specialNeeds?.value,
        articleForm?.vaccinations?.value,
        articleForm?.movingVehicle?.checked,
        articleForm?.conveyors?.checked
      )
      articleForm.reset()
    } else {
      formAlert.classList.remove('d-none')
      // articleFormInputs.forEach((input) => {
      //   input.classList.add('border', 'border-danger')
      // })
    }
  })
)
