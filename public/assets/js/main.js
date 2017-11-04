$(document).ready(function(){
    // $("#hide").click(function(){
    //     $("#show").slideToggle("slow");
    // });
    //  $("#show_form").click(function(){
    //     $("#hide_form").slideToggle("slow");
    // });
    $("#Positionen").click(function(){
    $("#Position").append('<div class="general"><div class="form-group"><label class="control-label col-sm-2 text-right" for="pwd">Positionstext:</label><div class="col-sm-6 text-left"><textarea class="form-control"></textarea></div></div><div class="form-group"><label class="control-label col-sm-2 text-right" for="pwd">Positionssumme:</label><div class="col-sm-3 text-left"><input type="text" name="" class="form-control"></div></div><div class="form-group"><label class="control-label col-sm-2 text-right" for="pwd">MwSt:</label><div class="col-sm-3 text-left"><select class="form-control"><option>Voll</option><option>Ermäßigt</option><option>Durchlaufend</option><option>Steuerfrei</option></select></div></div><div id="delete text-left"><label class="control-label " style="color: blue;">Löschen</label></div></div>');
});
    
$('#renderButton').on('click', function() {
    $('#mytab a[href="#menu1"]').tab('show');
});
$('#rechnungen').on('click', function() {
    $('#finance a[href="#voice"]').tab('show');
});
$('#Filiale').on('click', function() {
    $('#mytab1 a[href="#new2"]').tab('show');
});
$('#Neue').on('click', function() {
    $('#mytab1 a[href="#new3"]').tab('show');
});
});