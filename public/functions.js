
const volumes = {
    bd1: 0,
    bd2: 0,
    bd3: 0,
    bd4: 0,
    bd5: 0
}

function checkout() {
    const inputs = document.getElementsByTagName("input");

    for (let i = 0; i < 5; i++) {
        volumes['bd' + (i + 1)] = !inputs[i].value || isNaN(inputs[i].value) ? 0 : parseInt(inputs[i].value);
    }

    console.log("POST:", volumes);
    
    $("#result").html("");
    $("#loader").show();

    $.ajax({
        url: "/calculate",
        method: "POST",
        data: volumes,
        dataType: "json"
    }).done(resp => {
        setTimeout(() => {
            $("#loader").hide();
            $("#result").html(resp + " EUR");
            console.log("RESPONSE:", resp);
        }, 250);
    });
}