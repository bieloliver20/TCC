let onSelectChange = () => { //Começo da função
    $(".select").change(function () { // quando select mudar
        let val = $(this).val(); //Cria a variavel val e ela recebe o valor do select que mudar
        $(".select").each(function () { //Para cada select ele faz a função
            $(this).find(`option[value='${val}']`).attr("disabled", "disabled"); //Ele encontra a option que tem o valor do que mudou para desabilitá-lo
        });
    })
    $(".select:disabled").each(function () { //Tiramos o script de dentro da função de cima 
        $(this).find(`option[value='${$(this).val()}']`).attr("disabled", "disabled");
        // get todos os disabled e da disabled tbm
    });
}

$(document).ready(() => {
    let options = servicosJson.map(servico => `<option value="${servico.tipo_servico}">${servico.tipo_servico} - R$ ${Number(servico.preco_servico).toFixed(2).replace(".", ",")}</option>`) //Faz a variavel options receber um array das options montadas com os dados recebidos do json do php
    options.unshift("<option disabled selected>Selecione um serviço...</option>")
    //Usa a função unshift para que isso apareça primeiro do que todas as opções/ Unshift adiciona um elemento no começo da array. 
    /*O join no meio do selectModel serve para juntar as options e inserir no modelo do select */
    //Gera um select com as options que estavam no array e um botao para removê-lo 
    let selectModel = `
        <br><select class="select">
            ${options.join("")}  
        </select>
        <a class="removeSelect" href="#" style="display:inline-block;border:1px solid black;width:20px;height:20px;">-</a>`;
    $(".select-first").html(options); // add as options no primeiro select
    $("#selectsServicos #addService").click(e => { // click para add novo select
        e.preventDefault(); //Para o botao n fizer nada mais do que eu quero
        $("#selectsServicos").append(selectModel); //Adiciona no div de selects um novo modelo
        onSelectChange() //Função que adiciona no novo modelo um evento de change
        //Tentativa para usarmos a função de change, para que quando adicionarmos outro serviço, o serviço adicionado fique desabilitado
    })

    onSelectChange()
    //Adiciona um novo modelo de change no primeiro select
})