// History Func
function goBack() {
    window.history.back();
}
// Add color field
function add_row() {
    $rowNumber = $("#color_table tr").length;
    $rowNumber = $rowNumber + 1;
    $("#color_table tbody").after("<tr id='color_row_" + $rowNumber + "'><td><input type='text' name='color_name[]' placeholder='Nova cor'></td><td><a onclick=delete_row('color_row_" + $rowNumber + "')><i class='fa fa-times' aria-hidden='true'></i></a></td></tr>");
}
// Remove color field
function delete_row(rowNumber) {
    $('#' + rowNumber).remove();
}
// Spectrum
$(function() {
    $("#spectum-picker").spectrum({
        allowEmpty: true,
        preferredFormat: "hex",
        showInput: true,
        showPalette: true,
    });
});