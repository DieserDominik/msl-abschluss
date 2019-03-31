$(document).ready(function(){
    //alert("go");
});

$(".CalcInput").click(function () {
    $(this).select();
});

function calcSum(){
    var counter = 0;
    $.each($(".CalcInput"),function(i,e){
        if (e.value !== ""){
            var tempSum = parseInt(e.value);
            if ($(this).attr("id") === "jn-awt" || $(this).attr("id") === "jn-technik" || $(this).attr("id") === "jn-sport" || $(this).attr("id") === "pn-sport") {
                counter += tempSum;
            }else{
                counter += tempSum*2;
            }
        }
    });

    // write current sum in
    $('#input_sum').val(counter);
    let result = counter/18;

    $('#input_result').val(result.toFixed(2));

    if($('#input_result').val() <= 3.09){
        $('#passed').html('<p class="text-weight-bold" style="color: #27ae60;">Quali BESTANDEN!</p>');
    }else{
        $('#passed').html('<p class="text-weight-bold" style="color: #e74c3c;">Quali NICHT BESTANDEN!</p>');
    }
}

//////////////////////
/* keyup functions */
//////////////////////

$( "#jn-german" ).keyup(function() {
    calcSum();
});
$( "#pn-german").keyup(function() {
    calcSum();
});

$( "#jn-math").keyup(function() {
    calcSum();
});
$( "#pn-math").keyup(function() {
    calcSum();
});

$( "#jn-english").keyup(function() {
    calcSum();
});
$( "#pn-english").keyup(function() {
    calcSum();
});

$( "#jn-awt").keyup(function() {
    calcSum();
});


$( "#jn-technik").keyup(function() {
    calcSum();
});

$( "#pn-project").keyup(function() {
    calcSum();
});

$( "#jn-sport").keyup(function() {
    calcSum();
});

$( "#pn-sport").keyup(function() {
    calcSum();
});
