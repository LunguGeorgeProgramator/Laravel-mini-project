function redirectRequest(url)
{
    window.location.href = url;
}

function popErrorMessage(error_str){
    alert(error_str);
}

function setHeight(id_desc, id_buttons){
    // alert('sssss');
    // console.log('aaa', id_str);
    const buttons_div = document.getElementById(id_buttons);
    const desc_div = document.getElementById(id_desc);
    buttons_div.style.marginTop = desc_div.offsetHeight - buttons_div.offsetHeight;
}

function maxStringLength(elementHtml, maxLength)
{
    const errorCheck = document.getElementById('custom-error');
    const errorElement = '<span class="invalid-feedback" id="custom-error" role="alert"><strong>The description may not be greater than '+maxLength+' characters.</strong></span>';
    const textElement = elementHtml.value.length
    if (textElement >= maxLength) {
        elementHtml.classList.add("is-invalid");
        if (!errorCheck)
            elementHtml.insertAdjacentHTML("afterend", errorElement);
    }else{
        if (errorCheck)
            errorCheck.remove();
        elementHtml.classList.remove("is-invalid"); 
    }
}