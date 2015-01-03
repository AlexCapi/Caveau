var showShareButton = function(){
    $('.facebook .facebookDiv').fadeOut("slow");
    $('.facebook .buttonShare').fadeIn("slow");
};

var hideShareButton = function(){
    $('.facebook .facebookDiv').fadeIn("slow");
    $('.facebook .buttonShare').fadeOut("slow");
};

var showModal = function(titre, imageUri, image)
{
    $('#myModalLabel').html(titre);
    $('#myModalImg').attr('src', imageUri.replace('.documents/$doc->fichier.', 'documents/'+image));
    $('#myModal').modal()
};