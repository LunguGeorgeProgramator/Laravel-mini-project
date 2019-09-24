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

// search ajax js content
export let postsObject = {
    "processPage": function(url, token, method, data, baseUrl){
        $( "#SearchPost" ).keyup(function(element) {
            data['query'] = element.target.value;
            postsObject.ajax_call(url, token, method, data, baseUrl);
        });
        document.addEventListener("click", function(event){
            var paginationUrl = event.target.getAttribute("pageUrlAjax");
            if(paginationUrl !== null){
                var urlNew = postsObject.pagination(url, paginationUrl);
                postsObject.ajax_call(urlNew, token, method, data, baseUrl);
            }
        });
    },
    "ajax_call": function (url, token, method, data, baseUrl){
        if(data['query'] == '')
            location.reload();
        $.ajax({
            method: method,
            url: url,
            headers: {
                'X-CSRF-Token': token,
            },
            data: data,
        }).done(function(html) {
            postsObject.postDataProcess(html, baseUrl);
        });
    },
    "pagination": function (url, newUrl){
        return url+newUrl;
    },
    "postDataProcess": function(json, baseUrl){
        $( "#results_ajax" ).empty();
        var html = buildList(json, baseUrl);
        html += postsObject.buildPagination(json); 
        $( "#results_ajax" ).append(html);
    },
    "buildPagination": function (json){
        console.log(json);
        var firstPage = json.first_page_url;
        var prevPage = json.prev_page_url;
        var nextPage = json.next_page_url;
        var lastPage = json.last_page_url;
        prevPage = (prevPage !== null ? prevPage : firstPage);
        nextPage = (nextPage !== null ? nextPage : lastPage);
        var html = '<ul class="pagination" role="navigation">';
        html += '<li class="btn" style="cursor: auto;">Showing page '+json.current_page+' from '+json.last_page+'.</li>';
        html += '<li class="page-link" rel="prev" aria-label="« Previous" pageUrlAjax="'+prevPage+'">‹</li>'
        html += '<li class="page-item active" title="Current page" aria-current="page"><span class="page-link">'+json.current_page+'</span></li>';
        html += '<li class="page-link" rel="next" aria-label="Next »" pageUrlAjax="'+nextPage+'">›</li>';
        html += '</ul>';
        return html;
    }
};

function buildList(json, baseUrl){
    var html = '<div class="list-group mb-2">';
    html += '<h1 class="my-4">Posts Page, <small>see all interesting posts.</small></h1>';
    json.data.forEach(function(element) {
        html +=     '<div class="card mb-4">';
        html +=     '<div class="card-body">';
        html +=     '<h2 class="card-title">'+element.title+'</h2>';
        html +=     '<p class="card-text" >'+element.description+'</p>';
        html +=     '<a href="'+baseUrl+'/'+element.id+'" class="btn btn-primary">Read More →</a>'
        html +=     '</div>';
        html +=     '<div class="card-footer text-muted">';
        html +=     '   Posted on '+element.created_at+' by';
        html +=     '   <a href="http://georgeldev.ro/test_project/profile/'+element.user_id+'">View profile.</a>';
        html +=     '</div>';
        html +=     '</div>';
    });
    html +=     '</div>';
    return html;
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