const userCardTemplate = document.querySelector("[data-user-template]")
const userCardContainer = document.querySelector("[data-user-cards-container]")

searchInput.addEventListener("input", e => {
    const value = e.target.value
    console.log(value)
})

fetch("https://jsonplaceholder.typicode.com/users")
.then(res => res.json())
.then(data => {
data.forEach(user => {
    user = data.map(user => {

    
    const card = userCardTemplate.textContent.cloneNode(True).children[0]
    const head = card.querySelector("[data-head]")
    const contain = card.querySelector("[data-contain]")
    head.textContent = user.name
    body.textContent = user.email
    userCardContainer.append(card)
    return { name: user.name, email: user.email}
})
})