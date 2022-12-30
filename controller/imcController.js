$(document).ready(function () {

    $("#calcular").click(function () {
        var altura = $("#altura").val();
        var peso = $("#peso").val();

        if (altura == '' || peso == '') {
            alert('Preencha os campos !')
        } else {
            imc = parseFloat(peso / (altura * altura)).toFixed(2)
            $("#campoResultado").val('Seu IMC é :' + ' ' + imc).css("background-color", "#54B4D3")

            if (imc < 18.5) {
                var color = $("#magreza").css("background-color", "#54B4D3")
                return color

            } else if (imc >= 18.5 && imc < 24.9) {
                var color = $("#normal").css("background-color", "#54B4D3");
                return color
            } else if (imc >= 25 && imc < 29.9) {
                var color = $("#sobrepeso").css("background-color", "#54B4D3");
                return color
            } else if (imc >= 30 && imc < 39.9) {
                var color = $("#obesidade").css("background-color", "#E4A11B");
                return color
            } else if (imc > 40) {
                var color = $("#obesidadeGrave").css("background-color", "#DC4C64",);
                return color
            }
        }
    })
});
