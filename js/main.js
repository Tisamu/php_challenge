$(document).ready(function(){
    //Init the DataTable
    var game_table = $('#game_table').DataTable({
        paging: false
    });
   
   //On value validate click
   $('#data_validate').click(function(){
    //Check if input is empty or not by removing white spaces and compare with ''
    if($('#data_value').val().replace(/ /g, '') !== ''){
        game_table.row.add([ $('#game_table tr').length, $('#data_value').val()  ]).draw();
        console.log();
    }
      
   });
    
});