let onSelectChange = () => {
    $(".select").change(function() { // quando select mudar
        let val = $(this).val();
        $(".select").each(function() {
            $(this).find(`option[value='${val}']`).attr("disabled", "disabled");
        }); 
    })
    $(".select:disabled").each(function() {
        $(this).find(`option[value='${$(this).val()}']`).attr("disabled", "disabled");
        // get todos os disabled e da disabled tbm
    }); 
}

$(document).ready(() => {
    let options = servicosJson.map(servico => `<option value="${servico.tipo_servico}">${servico.tipo_servico} - R$ ${Number(servico.preco_servico).toFixed(2).replace(".", ",")}</option>`)
    options.unshift("<option disabled selected>Selecione um serviço...</option>")
    let selectModel = `
        <br><select class="select">
            ${options.join("")}
        </select>
        <a class="removeSelect" href="#" style="display:inline-block;border:1px solid black;width:20px;height:20px;">-</a>`;
    $(".select-first").html(options); // add no primeiro select
    $("#selectsServicos #addService").click(e => { // add novo select
        e.preventDefault();
        $("#selectsServicos").append(selectModel);
        onSelectChange()
    })
    onSelectChange()
})