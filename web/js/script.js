/*
 * Добавление нескольких новых сущностей
 * http://symfony.com/doc/current/cookbook/form/form_collections.html //для одной
 */ 
function addDobavlenieAction(){
    $(".dobavlenie").each(function(){
    
        var $collectionHolder;

        var current_class = $(this).find('div').find('div').attr('class');

        if(current_class == "narushenie"){
                var $addTagLink = $('<button type="button" class="btn btn-sm btn-primary">Добавить нарушение</button>');
        }else if(current_class == "nakazanie"){
                var $addTagLink = $('<button type="button" class="btn btn-sm btn-primary">Добавить наказание</button>');
        }else if(current_class == "zamestiteli"){
                var $addTagLink = $('<button type="button" class="btn btn-sm btn-primary">Добавить заместителя</button>');
        }else if(current_class == "pokazatelsIssledovaniya"){
                var $addTagLink = $('<button type="button" class="btn btn-sm btn-primary" style="display:none">Добавить показатели</button>');
        }else if(current_class == "osugdenyi"){
                var $addTagLink = $('<button type="button" class="btn btn-sm btn-primary">Добавить осужденного</button>');
        }else if(current_class == "kontaktnyi"){
                var $addTagLink = $('<button type="button" class="btn btn-sm btn-primary">Добавить контактного</button>');
        }else if(current_class == "datesFLG"){
                var $addTagLink = $('<button type="button" class="btn btn-sm btn-primary">Добавить дату ФЛГ</button>');
        }else if(current_class == "patologiya"){
                var $addTagLink = $('<button type="button" class="btn btn-sm btn-primary">Добавить патологию</button>');
        }else if(current_class == "nakazanieFkuz"){
            var $addTagLink = $('<button type="button" class="btn btn-sm btn-primary">Добавить наказание</button>');
        }
        
        var $newLinkLi = $('<div></div>').append($addTagLink);
        $collectionHolder = $('div.' + current_class);

        // add the "add a tag" anchor and li to the tags ul
        $collectionHolder.append($newLinkLi);

        // count the current form inputs we have (e.g. 2), use that as the new
        // index when inserting a new item (e.g. 2)
        $collectionHolder.data('index', $collectionHolder.find(':input').length);

        $addTagLink.on('click', function(e) {
            // prevent the link from creating a "#" on the URL
            e.preventDefault();

            // add a new tag form (see next code block)
            addTagForm($collectionHolder, $newLinkLi);
        }); 
        
        addTagForm($collectionHolder, $newLinkLi);
    })
}

//http://symfony.com/doc/current/cookbook/form/form_collections.html
function addTagForm($collectionHolder, $newLinkLi) {
    
    var flag_empty_inputs = true;
    var object_last = "";
    
     $collectionHolder.children().each(function(index){

        //прячем добавленные сущности, и проверяем не пустые и валидны ли поля, при попытке добаваить новую сущность
        if(index == "1" && $(this).parent().attr("class") != "pokazatelsIssledovaniya"){
            $(this).find("input").each(function () {

                $(this).css('border', '1px solid #dce4ec');

                if ($(this).val() == "" && $(this).attr("required") == "required" || $(this).hasClass("error")) {
                    $(this).css('border', '1px solid red');
                    return flag_empty_inputs = false;
                }

            });

            if(flag_empty_inputs){
                if($(this).parent().attr("class") == "narushenie"){
                    var val1 = $collectionHolder.children().find('div select option:selected').eq(0).text();
                    var val2 = $collectionHolder.children().find('div input').eq(0).val();
                    var val3 = $collectionHolder.children().find('div input').eq(1).val();
                }else if($(this).parent().attr("class") == "nakazanie"){
                    var val1 = $collectionHolder.children().find('div input').eq(0).val();
                    var val2 = $collectionHolder.children().find('div input').eq(1).val();
                    var val3 = $collectionHolder.children().find('div input').eq(2).val();
                }else if($(this).parent().attr("class") == "zamestiteli"){
                    var val1 = $collectionHolder.children().find('div input').eq(0).val();
                    var val2 = $collectionHolder.children().find('div select option:selected').eq(0).text();
                    var val3 = $collectionHolder.children().find('div input').eq(1).val();
                }else if($(this).parent().attr("class") == "datesFLG"){
                    var val1 = $collectionHolder.children().find('div input').eq(0).val();
                    var val2 = $collectionHolder.children().find('div select option:selected').eq(0).text();
                }else if($(this).parent().attr("class") == "patologiya"){
                    var val1 = $collectionHolder.children().find('div select option:selected').eq(0).text();
                }else if($(this).parent().attr("class") == "kontaktnyi"){
                    var val1 = $collectionHolder.children().find('div input').eq(0).val();
                    var val2 = $collectionHolder.children().find('div input').eq(1).val();
                }else if($(this).parent().attr("class") == "pokazatelsIssledovaniya"){
                    var val1 = $collectionHolder.children().find('div input').eq(0).val();
                    var val2 = $collectionHolder.children().find('div input').eq(1).val();
                }
                else if($(this).parent().attr("class") == "nakazanieFkuz"){
                    var val1 = $collectionHolder.children().find('div input').eq(0).val();
                    var val2 = $collectionHolder.children().find('div input').eq(1).val();
                }

                var val = "";
                if(typeof(val2) == "undefined" && typeof(val3) == "undefined"){
                    val = val1;
                }else if(typeof(val3) == "undefined"){
                    val = val1 + ", " + val2; 
                }else{
                    val = val1 + ", " + val2 + ", " + val3;
                }
                
                //список добавленных сущностей для возможности удаления перед записью в бд
                $newLinkLi.parent().parent().siblings(".list_add").append("<div>Добавлен <strong>"+ val +"</strong><button type='button' class='close' id_zam='"+ $collectionHolder.children().eq(1).attr("id") +"' style='float:none'><span aria-hidden='true'>&times;</span></button></div>")
                $(this).css('display', 'none');
                
                //сохраняем объект нарушения, чтобы при новом добавлении он оставался в select
                object_last = $collectionHolder.children().find('div select.objects').val();
            }
        }
    });

    if(!flag_empty_inputs){
        return false;
    }

    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    // var $newFormLi = $('<div></div>').append(newForm);
    $newLinkLi.after(newForm);

    if(object_last != ""){
        $("select.objects option[value='"+ object_last +"']").attr("selected", "selected");
    }
}

//подсчет итоговых значений в таблицах
function calcAll($table){
    var object_nakazaniya = 0;
    var quantity_temp = 0;
    var vsego = 0;
    var quantity = [];
    var plan = 0, vneplan =0;
    var length_tr = $table.find("tbody tr").length;

    if(typeof($table.find("thead tr:first td:last").attr("id")) == "undefined"){
        
        var length_td = $table.find("tbody tr.pokazatels1 td").length - 2;
       
        for(i = 1; i <= length_tr; i++){
        
            $table.find("tbody tr.pokazatels"+ i).each(function(index){

                //нарушения по каждой организации
                $(this).find("td").each(function(){

                    if($(this).text() !="" && !isNaN($(this).text())){
                        object_nakazaniya += parseInt($(this).text());
                    }
                    
                }); 

                $(this).find("td:last").append(object_nakazaniya);
                object_nakazaniya = 0;
            });        
        }
    }else if($table.find("thead tr:first td:last").attr("id") == "zabolevaniya"){
        
        //другая верстка страницы у заболевших
        var length_td = $table.find("tbody tr.pokazatels1 td").length - 1;
        
        for(i = 1; i <= length_tr; i++){
        
            $table.find("tbody tr td.pokazatel" + i).each(function(index){
                
                if($(this).text() !=""){
                     quantity_temp += parseInt($(this).text());
                }

            });
        }

        $table.find("#vsego_zabolevchih").append(quantity_temp);
        
    }else if($table.find("thead tr:first td:last").attr("id") == "narusheniya"){
        
    }else if($table.find("thead tr:first td:last").attr("id") == "otryad"){
        
    }else if($table.find("thead tr:first td:last").attr("id") == "issledovaniya"){
        
        var length_td = $table.find("tbody tr.pokazatels1 td").length - 2;
       
        for(i = 1; i <= length_tr; i++){
        
            $table.find("tbody tr.pokazatels"+ i).each(function(index){

                //нарушения по каждой организации
                $(this).find("td span").each(function(){

                    if($(this).text() !="" && !isNaN($(this).text())){
                        object_nakazaniya += parseInt($(this).text());
                    }
                    
                }); 

                $(this).find("td:last").append(object_nakazaniya);
                object_nakazaniya = 0;
            });        
        }
    }else{
        
        var length_td = $table.find("tbody tr.pokazatels1 td").length - 3;
        
        for(i = 1; i <= length_tr; i++){
        
            $table.find("tbody tr.pokazatels"+ i).each(function(index){
                
                //нарушения по каждой организации
                $(this).find("td.plan").each(function(){

                    if($(this).text() !="" && !isNaN($(this).text())){
                        object_nakazaniya += parseInt($(this).text());
                        plan += parseInt($(this).text());
                    }
                    
                }); 

                $(this).find("td:nth-last-child(2)").append(object_nakazaniya);
                object_nakazaniya = 0;
                
                //нарушения по каждой организации
                $(this).find("td.vneplan").each(function(){

                    if($(this).text() !="" && !isNaN($(this).text())){
                        object_nakazaniya += parseInt($(this).text());
                        vneplan += parseInt($(this).text());
                    }
                    
                }); 

                $(this).find("td:nth-last-child(1)").append(object_nakazaniya);
                object_nakazaniya = 0;                
            });        
        }
        
        $("#result8").append(plan);
        $("#result9").append(vneplan);
    }

    for(i = 0; i <= length_td; i++){
        
        quantity[i] = 0;
    }

    for(i = 1; i <= length_td; i++){
        
        $table.find("tbody tr td.pokazatel" + i).each(function(index){

            if($(this).text() !=""){
                 quantity_temp += parseInt($(this).text());
            }

            quantity[i] = quantity[i] + parseInt($(this).text());
            quantity_temp = 0;
        });
    }

    for(i=1; i<= length_td; i++){
        
        $table.find("#result"+ i).append(quantity[i]);
        vsego += quantity[i];
    }
    
    if($table.find("thead tr:first td:last").attr("id") != "narusheniya" && $table.find("thead tr:first td:last").attr("id") != "otryad"){
        $table.find("#vsego").append(vsego);
    }
    
}

$("document").ready(function(){

    //выбрать все объекты организаций
    $("#checkedObjectsAll").click(function(){
    
        if($(".dogovor_objects input[type=checkbox]").prop("checked")){
            
            $(".dogovor_objects input[type=checkbox]").prop("checked", false)
            $(this).text("Выделить все");
        }else{
        
            $(".dogovor_objects input[type=checkbox]").prop("checked", true);
            $(this).text("Снять все");
        }

    });
    
    //добавление действий, подобных "добавлению заместителя" при добавлении организации
    addDobavlenieAction();

    $("select#proverka_proverkaType").change(function(){
        
        //если плановая или ЦГСЭН внеплановая
        if($(this).val() == "1" || $(this).val() == "7" || $(this).val() == "8" || $(this).val() == "9" || $(this).val() == "5"){
            $(".proverka .dates").css({'display':'block'});
        }else{
            $(".proverka .dates").css({'display':'none'});            
        }

    });

    $("table.numbers").each(function(){
        calcAll($(this));
    });

    //на предыдущую страницу
    $("#back_page").click(function(){
        window.history.go(-2); 
    });
    
    //валидация форм
    $.validate({modules : 'date'});

    //добавление показателей
    $("select.type_issledovaniya").on("change", function(){
        var ne_sootv = $("#issledovanie_ne_sootv").val();
        $.ajax({
            type: "POST",
            data: "parent_id=" + $("select.type_issledovaniya option:selected").val(),
            url: "/issledovanie/showPodkat",
            success: function(msg){
                $(".pokazatelsIssledovaniya > div:has('div')").remove();
                $(".pokazatelsIssledovaniya").css("display", "block");
                pokazatels = JSON.parse(msg);
                if(pokazatels.length != 0) {
                    for (i = 0; i < pokazatels.length; i++) {
                        $(".pokazatelsIssledovaniya button").click();
                    };
                    var i = 0;
                    $(".pokazatelsIssledovaniya > div:has('div')").each(function () {
                        $(this).find("input:first").val(pokazatels[i].name);
                        i++;
                    });
                }else{
                    $(".pokazatelsIssledovaniya button").click();
                    $(".pokazatelsIssledovaniya > div input:first").val("Комментарий");
                }
            }
        });
    });
    $("select.type_issledovaniya").change();

    //удаление пустой формы при множественном добавлении и удаление существующих сущностей при редактировании, если есть
    $("form input[type='submit']").click(function(){
        if($(".dobavlenie > div > div").attr("class") != "pokazatelsIssledovaniya") {
            $(".dobavlenie > div > div ").find("div:eq(1)").remove();
        }

        if($("#deleteListNow").length == "0"){
            if(delete_after_save.length != 0){
                $(this).val("Подождите...");
                for(i = 0; i < delete_after_save.length; i++){
                    $.ajax({
                        type: "POST",
                        async: false,
                        url: delete_after_save[i],
                    }); 
                }
                delete_after_save = [];
            }
        }
    });
    
    //переход на выбранное исследование
    $("#showIssledovanie").click(function(){
        window.location = "/issledovanie/editIssledovanie/"+ $("select option:selected").val();
    });     
    
    //переход на выбранное исследование фкуз
    $("#showIssledovanieFkuz").click(function(){
        window.location = "/fkuz/editLabCon/"+ $("select option:selected").val();
    }); 
    
    //переход на выбранное нарушение
    $("#showNarusheniya").click(function(){
		console.log($("select#narusheniyaProverka option:selected").val());
        if(typeof($("select#narusheniyaProverka option:selected").val()) != "undefined"){
            window.location = "/organization/"+ $("select#narusheniyaProverka option:selected").val() +"/editNarushenie";
        }
    });
 
    //переход на выбранное наказание
    $("#showNakazaniya").click(function(){
        if(typeof($("select#nakazaniyaProverka option:selected").val()) != "undefined"){
            window.location = "/organization/"+ $("select#nakazaniyaProverka option:selected").val() +"/editNakazanie";
        }
    });   
    
    //переход на выбранное исследование
    $("#showIssledovaniya").click(function(){
        if(typeof($("select#labIssl option:selected").val()) != "undefined"){
            window.location = "/issledovanie/"+ $("select#labIssl option:selected").val() +"/editIssledovanieObject";
        }
    }); 
    
    //переход на выбранное исследование
    $("#showIssledovaniyaFkuz").click(function(){
        if(typeof($("select#labIssl option:selected").val()) != "undefined"){
            window.location = "/fkuz/editIssledovanieObject/"+ $("select#labIssl option:selected").val();
        }
    }); 
  
    //переход на создание нового очага
    $("#createOchag").click(function(){
        window.location = "/zabolevaniya/createZabolevanieOchag";
    });

    //получение списка нарушений
    $("#proverkiNarusheniya").change(function(){
        $("#narusheniya select").remove();
        $("#narusheniya div").remove();
        $("#narusheniya").append("<div>Подождите пожалуйста...</div>");

        $.ajax({
            type: "POST",
            url: "/organization/"+ $("select option:selected").val() +"/showNarusheniya",
            success: function(msg){
                $("#narusheniya div").remove();
                $("#narusheniya").append(msg);
            }
        });
    });
	
    //получение списка наказаний
    $("#proverkiNakazaniya").change(function(){
        $("#nakazaniya select").remove();
        $("#nakazaniya div").remove();
        $("#nakazaniya").append("<div>Подождите пожалуйста...</div>");

        $.ajax({
            type: "POST",
            url: "/organization/"+ $("select option:selected").val() +"/showNakazaniya",
            success: function(msg){
                $("#nakazaniya div").remove();
                $("#nakazaniya").append(msg);
            }
        });
    });  
    
    //получение списка исследований
    $("#labIssledovaniya").change(function(){
        $("#issledovanie select").remove();
        $("#issledovanie div").remove();
        $("#issledovanie").append("<div>Подождите пожалуйста...</div>");

        $.ajax({
            type: "POST",
            url: "/issledovanie/showIssledovanie/"+ $("select option:selected").val(),
            success: function(msg){
                $("#issledovanie div").remove();
                $("#issledovanie").append(msg);
            }
        });
    });  
    
    //получение списка исследований фкуз
    $("#labIssledovaniyaFkuz").change(function(){
        $("#issledovanie select").remove();
        $("#issledovanie div").remove();
        $("#issledovanie").append("<div>Подождите пожалуйста...</div>");

        $.ajax({
            type: "POST",
            url: "/fkuz/showIssledovanie/"+ $("select option:selected").val(),
            success: function(msg){
                $("#issledovanie div").remove();
                $("#issledovanie").append(msg);
            }
        });
    });     

	//инициализируем данными select
    $("#proverkiNarusheniya").change();
	$("#proverkiNakazaniya").change();
	$("#labIssledovaniya").change();
    $("#labIssledovaniyaFkuz").change();
	
    //подгружаем по дате
    $(".onDate").click(function(e){
        e.preventDefault();
        tableClass = $(this).attr('id');
        $("table."+ $(this).attr('id') +" tbody tr").remove();
        $("table."+ $(this).attr('id') +" tbody").append("<tr><td>Подождите пожалуйста...</td></tr>");
        $("table."+ tableClass +" tfoot tr td").html("");
        
        $.ajax({
            type: "POST",
            url: $(this).attr("href"),
            success: function(msg){
                $("table."+ tableClass +" tbody tr").remove();
                $("table."+ tableClass +" tfoot tr td").html("");
                $("table."+ tableClass +" tbody").append(msg);
                calcAll($("table." + tableClass));
            }
        });
    });
    
    delete_after_save = [];
    //подготовка для удаления после сохранения
    $(".list_now").on("click", "button.delete_after_save", function(){
        
        var answer = confirm("Удалить?");
        if(answer){
            delete_after_save.push($(this).attr("id"));
            $(this).parent().remove();
            console.log(delete_after_save);
        }
    });
    
    //удаление сущности при добавлении
    $(".list_add").on("click", "button", function(){
        $("div#"+ $(this).attr("id_zam")).remove();
        $(this).parent().remove();
    });

    //предупреждение об удалении большой сущности: организации, проверки, договора и т.п.
    $(".delete_entity").click(function(e){
        e.preventDefault();
        var answer = confirm("Удалить?");
        if(answer){
            window.location = $(this).attr("href");
        }
    });
    
    //удаление сразу
    $(".delete_now").click(function(){
        var answer = confirm("Удалить?");
        if(answer){
            $delete = $(this).parent().parent();
            $(this).replaceWith("<span>...</span>");
            $.ajax({
                type: "POST",
                url: $(this).attr("id_now"),
                success: function(msg){
                    alert("Удалено");
                    $delete.remove();
                }
            });
        }
    });
    
    //редактирование в фкуз
    $(".edit_in_fkuz").click(function(){
        window.location = $(this).attr("id_now");
    });

    //при добавлении показателя исследования проверяем определенное заполнение полей
    $("#createPokazatel").click(function(){

        if($("#issledovanie_pokazatel_normativ_znak").val() != "" && $("#issledovanie_pokazatel_normativ").val() != "" && $("#issledovanie_pokazatel_normativ_dob").val()){
            $("#issledovanie_pokazatel_normativ_znak").css("border", "1px solid #b94a48");
            $("#issledovanie_pokazatel_normativ").css("border", "1px solid #b94a48");
            $("#issledovanie_pokazatel_normativ_dob").css("border", "1px solid #b94a48");
            return false;
        }else{
            $("#issledovanie_pokazatel_normativ_znak").css("border", "medium none");
            $("#issledovanie_pokazatel_normativ").css("border", "medium none");
            $("#issledovanie_pokazatel_normativ_dob").css("border", "medium none");
        }
    });
    
    $("#deleteListNow").click(function(){
        $(this).val("Подождите...");
        if(delete_after_save.length != 0){
            for(i = 0; i < delete_after_save.length; i++){
                $.ajax({
                    type: "POST",
                    async: false,
                    url: delete_after_save[i],
                }); 
            }
            delete_after_save = [];
            window.location = "/addSuccess";
        }
    });
    
    $("select.otmetka").change(function(){
        var proverka_id = $(this).find("option:selected").attr("id");        
        var otmetka = $(this).find("option:selected").attr("otmetka");        
        $.ajax({
            type: "POST",
            data: { otmetka: otmetka },
            url: "/organization/changeOtmetka/"+ proverka_id,
            success: function(msg){
                alert("Отметка изменена");
            }
        });
    });
    
    
});