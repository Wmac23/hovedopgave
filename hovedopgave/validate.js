const navn = document.getElementById(`name`)
const mail = document.getElementById(`mail`)
const form = document.getElementById(`form`)
const errorElement = document.getElementById(`error`)


form.addEventListener(`submit`, (e) => {
  let messages = []
  if (navn.value === `` || navn.value == null) {
    messages.push("Udfyld navn")
  }

  if (mail.value.length <= 6) {
    messages.push(`Indtast korrekt mail`)

  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(` og `)
  }

})