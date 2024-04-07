let i = 1
function cambiarImagen() {
  document.querySelector('.zp-mirai').classList.replace(`img${i}`, `img${i+1}`)
  i++
  if(i > 4) i = 1
}

setInterval(cambiarImagen, 3000) 