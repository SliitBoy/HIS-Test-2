//var my_skins = ["skin-blue", "skin-black", "skin-red", "skin-yellow", "skin-purple", "skin-green"];
var demo_settings;
var demo_results ="";
$(function () {
  /* For demo purposes */
  var demo = $("<div />").css({
    position: "fixed",
    top: "70px",
    right: "0",
    background: "#e7e7e7",
    "border-radius": "5px 0px 0px 5px",
    padding: "10px 15px",
    "font-size": "16px",
    "z-index": "99999",
    cursor: "pointer",
    "box-shadow": "0 1px 3px rgba(0,0,0,0.5)"
  }).html("<i class='fa fa-search'></i>").addClass("no-print");

  demo_settings = $("<div />").css({
    "padding": "10px",
    position: "fixed",
    top: "70px",
    right: "-250px",
    background: "#e7e7e7",
    border: "0px solid #ddd",
    "width": "250px",
    "z-index": "99999",
    "box-shadow": "0 1px 3px rgba(0,0,0,0.5)"
  }).addClass("no-print").addClass("list-group");

  demo_results = $("<div id='result' />").css({
    "height": "200px",
    "overflow-y":"auto",
    "padding": "10px",
    position: "fixed",
    top: "220px",
    right: "-250px",
    background: "#e7e7e7",
    border: "0px solid #ddd",
    "width": "250px",
    "z-index": "99999",
    "box-shadow": "0 1px 3px rgba(0,0,0,0.5)"
  });

  demo_settings.append(
          "<h4 style='margin: 0 0 5px 0; padding-bottom: 15px;'><b>SNOMED Search</b>"
          + "<br><small style='color:'#555;';'>Edition "+version.substring(0,4)+"</small></h4>"
          + "<div class='form-group'>"
          + "<input class='form-control' type='text' id='searchSnoMed' placeholder='eg: heart attack' onchange='searchResults()'/>"
          + "</div>"
          + "</div>"
          +"<div class='result'>"
          +"<h4 style='margin: 0 0 5px 0; color:'#555; padding-bottom: 15px;'>Results</h4>"
          
          );


  demo.click(function () {
    if (!$(this).hasClass("open")) {
      $(this).animate({"right": "250px"});
      demo_settings.animate({"right": "0"});
      demo_results.animate({"right": "0"});
      $(this).addClass("open");
    } else {
      $(this).animate({"right": "0"});
      demo_settings.animate({"right": "-250px"});
      demo_results.animate({"right": "-250px"});
      $(this).removeClass("open");
    }
  });

  $("body").append(demo);
  $("body").append(demo_settings);
  $("body").append(demo_results);

  //setup();
});

var baseUrl = "http://browser.ihtsdotools.org/api/snomed/";
var edition = "en-edition";
var version = "20180131";


http://browser.ihtsdotools.org/api/server/releases

function searchResults() {

    var searchValue = $('#searchSnoMed').val();


    $.ajax({
      type: "GET",
      url: "http://browser.ihtsdotools.org/api/server/releases",
      dataType: 'json',
      success: function (output) {

        version = output[0]["collectionName"];
        edition = output[0]["databaseName"];
       $.ajax({
      type: "GET",
      url: baseUrl + '/' + edition + '/v' + version + '/descriptions?query=' 
      + encodeURIComponent(searchValue) + '&limit=50&searchMode=partialMatching'
      + '&lang=english&statusFilter=activeOnly&skipTo=0' + '&returnLimit=100&normalize=true',
      dataType: 'json',
      success: function (output) {
        console.log(output);
        $('#result').html('');
        for (var i = 0; i < output['matches'].length; i++) {
          
          $('#result').append('<a href="#" class="list-group-item list-group-item-action" style="margin: 0 0 5px 0; border-bottom: 1px solid #ddd;"><b>'+output['matches'][i]['term']+"</b><div>"+output['matches'][i]['fsn']+"</div></a>");
        }
        
      }
  });
        
      }
  });
    

}

