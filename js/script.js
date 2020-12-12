document.getElementById('limpar').addEventListener("click",limpar)
document.getElementById('calcular').addEventListener("click",verificar)
let txtAltura = document.getElementById('altura')
let txtPeso = document.getElementById('peso')

function limpar() {
	txtAltura.value = ''
	txtPeso.value = ''
}


function verificar() {
	if(txtAltura.value == '' || txtPeso.value == '') {
		alert('Preencha todos os campos para fazer o calculo!')
	} else if(txtAltura.value < 0 || txtPeso.value < 0) {
		alert('Os valores inseridos não são válidos')
	}
}