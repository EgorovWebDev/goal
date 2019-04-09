$('.buy-copa').click(function(event){
    let buyCopa = $(event.target).attr('data-hipeOrder');
    console.log(buyCopa);
    $.ajax({
        url: 'api/copaCol',
        data: {'hipeOrder':buyCopa},
        type: 'POST',
        cache: false,
        success: function(data) {
            let resp=JSON.parse(data);
               // if (resp.error==0){
                    location.href='goal/catalogs?'+data.order;
                //}
            alert("Данные успешно отправлены на сервер");
        }
    });
});