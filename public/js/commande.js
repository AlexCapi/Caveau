var vins = [];

var ajoutVin = function (id, prix, libelle, specificite)
{
    var bExists = false;
    var quantite = 1;

    if(vins.length > 0){
        $.each(vins, function(index, value){
            if(value.id == id){
                bExists = true;
                vins[index].qt++;
                quantite = vins[index].qt;
            }
        });
    }
    if(!bExists){
        ajoutTableauVin(id, prix, libelle, specificite, quantite);
    }
    ajoutDomVin(id, libelle, specificite, quantite);
    calculTotal();
};

var ajoutTableauVin = function(id, prix, libelle, specificite, qt)
{
    vins.push({
        id: id,
        qt: qt,
        libelle: libelle,
        specificite: specificite,
        prix: prix
    });
};

var ajoutDomVin = function(id, libelle, specificite, quantite)
{
    if ($('#vinSelectionEmpty').length != 0) {
        $('#vinSelectionEmpty').remove();
    }
    $('#btnCommander').attr('disabled', false);
    if(quantite > 1 && $('#vin_'+id).length != 0){
        $('#vin_'+id+' td.quantite').html(quantite);
    } else {
        var ligneVin = '<tr id="vin_'+id+'"><td>'+libelle+' '+specificite+'</td><td class="quantite">'+quantite+'</td><td><span onclick="supprimerVin('+id+')" class="glyphicon glyphicon-remove icone-remove-commande"></span> </td></tr>';
        $('table#vin-selection').append(ligneVin);
    }
};

var supprimerVin = function(id)
{
    $.each(vins, function(index, value){
        console.log('vin', value);
        if(typeof value !== 'undefined'){
            if(id == value.id){
                if(value.qt > 1){
                    vins[index].qt--;
                    $('#vin_'+id+' td.quantite').html(vins[index].qt);
                } else {
                    $('#vin_'+id).remove();
                    vins.splice(index, 1);
                    if(vins.length == 0){
                        $( "table#vin-selection" ).append( '<tr id="vinSelectionEmpty"><td><p>Aucun vin sélectionné</p></td></tr>');
                        $('#btnCommander').attr('disabled', true);
                    }
                }
            }
        }
    });
    calculTotal();
};

var calculTotal = function()
{
    var prix = 0;
    $.each(vins, function(index, value){
        prix += value.prix * value.qt;
    });
    $('.block-total .price').html(prix.toFixed(2));
    $('.block-total-recap .price').html(prix.toFixed(2));
};

var commander = function()
{
    $.each(vins, function(index, vin){
        var ligneRecap = '<tr id="vin_'+vin.id+'"><td>'+vin.libelle+' '+vin.specificite+'</td><td>'+vin.qt+'</td></tr>';
        $('#recapitulatif table#vin-recapitulatif').append(ligneRecap);
    });
    $.ajax({
        url : "commander",
        type : 'POST',
        data : {vins: vins}
    });
    $('#commander').slideUp("slow");
    $('#recapitulatif').slideDown("slow");
};

var backToCommand = function()
{
    $('#commander').slideDown("slow");
    $('#recapitulatif').slideUp("slow");
    $('#recapitulatif table#vin-recapitulatif').html('');
};

var initVins = function(sessionVins)
{
    vins = sessionVins;

    $.each(vins, function(index, vin){
        ajoutDomVin(vin.id, vin.libelle, vin.specificite, vin.qt);
        var ligneRecap = '<tr id="vin_'+vin.id+'"><td>'+vin.libelle+' '+vin.specificite+'</td><td>'+vin.qt+'</td></tr>';
        $('#recapitulatif table#vin-recapitulatif').append(ligneRecap);
    });
    calculTotal();
};