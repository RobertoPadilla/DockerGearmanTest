var input = document.getElementById("contractNumber");

window.onload = preLoadFunc();


/**
 * Clean input
 */
function preLoadFunc()
{
    input.value = "";
}

/**
 * Letters are not allowed and verify if number is less than other
 */
function onInputContractNumber()
{
    replaceLetters();
    this.minorThan(1000);
}

/**
 * This function delete letter from input value
 */
function replaceLetters()
{
    var reg = new RegExp('^[0-9]$');
    value = input.value;
    lastChar = value.slice(-1);
    if(!reg.test(lastChar))
    {
        input.value = value.substring(0, value.length - 1);
    }
}

/**
 * Verify if input value is less than the etsablished number if it is not, show an error message
 * @param {integer} maxValue Maximum value to introduce in input field
 */
function minorThan(maxValue)
{
    labelError = document.getElementById("errorLabel");
    btnSend = document.getElementById("btnSend");

    var inputValue = input.value;

    if(maxValue - inputValue < 0)
    {
        input.classList.add("error");
        labelError.classList.add("d-block");
        btnSend.setAttribute("disabled", true);

    }
    else 
    {
        input.classList.remove("error");
        labelError.classList.remove("d-block");
        btnSend.removeAttribute("disabled");
    }
}