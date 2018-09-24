function loadContent(url){
    $("#main_content").html("<span style='color: #ffffff; font-size: 3em;'><i class='fa fa-spinner fa-spin'></i> Loading Content.... Please wait</span>");
    $("#main_content").load(url);
}

function error(msg){
	$.pgwModal({
        content: '<div style="background-color: #990000; color: #f9f9f9;font-size: 14px;font-weight: bold; height:50px;" align="center"><div class="glyphicon glyphicon-warning-sign"></div> '+msg+'</div>',
        title: 'EasySolve',
        closeOnEscape:false,
        closeOnBackgroundClick:false
    });
    return false;
}