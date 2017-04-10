var bg = 0;
$('#global1').on('click', function() {
    if(bg === 0) {
        $('body').css('background', 'url("../glitch.jpg") no-repeat fixed');
        $('body').css('background-size', 'cover');
        bg = 1;
    } else {
       $('body').css('background', 'url("../castle.jpg") no-repeat fixed');
       $('body').css('background-size', 'cover');
       bg = 0;    
    }
});

$('#catName').on('keyup', function (){
    var name = $('#catName').val();
    console.log(name)
    if (name.length === 0){
     $('button[type=submit]').attr('disabled', 'true');  
    }
    else {
        $('button[type=submit]').removeAttr('disabled');
    }
})

$('#title_id,#content_id').on('keyup', function (){
    var title = $('#title_id').val();
    var content = $('#content_id').val();
    
    if (title.length > 0 && content.length > 0){
         $('button[type=submit]').removeAttr('disabled');
    }
    else {
        $('button[type=submit]').attr('disabled', 'true'); 
    }
})