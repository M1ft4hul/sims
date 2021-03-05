// === focus ===
const inputs = document.querySelectorAll(".form__input")

// === add focus ===
function addfocus(){
    let parent = this.parentNode.parentNode
    parent.classList.add("focus")
}

// === remove focus ===
function remfocus(){
    let parent = this.parentNode.parentNode
    if(this.value == ""){
        parent.classList.remove("focus")
    }
}

// === memanggil fungsi ==
inputs.forEach(input=>{
    input.addEventListener("focus",addfocus)
    input.addEventListener("blur",remfocus)
})
