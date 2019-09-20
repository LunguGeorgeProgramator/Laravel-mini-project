// js pentru pagina de category
export let categoryObject = {
    'setHeight': function (id_desc, id_buttons){
        const buttons_div = document.getElementById(id_buttons);
        const desc_div = document.getElementById(id_desc);
        buttons_div.style.marginTop = desc_div.offsetHeight - buttons_div.offsetHeight;
    },
    'request': function (url){
        console.log('sss');
        // window.location.href = url;
    },
    'popErrorMessage': function (error_str){
        alert(error_str);
    },
}
// js pentru pagina de produse
export let categoryProducts = {
    'request': function (url){
        window.location.href = url;
    }
}

// js pagina de welcome
export let welcomePageJS = {
    'animatieButton': function (){
        const categoryButton = $('#categoryButton')
        $(document).ready(function() {
            var withNew = '70';
            var fondSize = '3'; 
            setInterval(function() {
                categoryButton.animate({ width: withNew+"%", fontSize: fondSize+"em"}, 200, function() {
                    if(withNew==='70'){
                        withNew = '30';
                        fondSize = '1';
                    }
                    else{
                        withNew='70';
                        fondSize = '3';
                    }
                })
            }, 2000);
        });
    } 
}

// se poate pune si  assa tot continutu jquery in functie si exportat
// export function animation(){
//     // $(document).ready(function(){
//     //     console.log($('.links').text());
//     //     // console.log($( ".list-group222" ).text());
//     // });
// }