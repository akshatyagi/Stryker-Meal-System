function afterDelete_feedback(){
    $('#feedback_table').remove();
    $('#delete_feedback').prop('disabled',true);
    $('#del_text').addClass('text-danger');
    $('#del_text').text('No Data to display!');
    $('#avg_feedback').remove();
}
function afterDelete_messages(){
    $('#messages_table').remove();
    $('#del_text_msg').addClass('text-danger');
    $('#del_text_msg').text('No Data to display!');
}
function alert_delete(id,message){
  $('#'+id).before(
    "<br><div class=' deleted_msg alert alert-danger alert-dismissable fade in'>"+
    '<button type="button" class="close close_delete" ' + 
    'data-dismiss="alert" aria-hidden="true">' + 
    '&times;' + 
    '</button>' + 
    '<h4>Data Deleted!</h4>' + "<p>"+message+"</p>"+
    '</div>');
  }
function beforeUpdate(){
  $('#new_weekly_menu').hide();
  $('#old_email').show();
  $('#new_email').hide();
  $('#old_phone').show();
  $('#new_phone').hide();
  $('#old_address').show();
  $('#new_address').hide();
  $('.update_data').show();
  $('.update_success').hide();
  $('.update_cancel').hide();
}
$(document).ready(function(){
  $('.close_delete').on('click',function(){$('.deleted_msg').remove();});
  var base_url = "http://localhost/Stryker/index.php/";
  beforeUpdate();
  var no = $('#feedback_table tbody tr').size();
  var no_msg = $('#messages_table tbody tr').size();
  var td_class= $('#feedback_table tbody td:nth-child(1)').attr('class');
  var td_class_msg = $('#messages_table tbody td:nth-child(1)').attr('class');
  if((no === 1) && (td_class ==='nodata')){
    afterDelete_feedback();
  }
  if((no_msg === 1) && (td_class_msg ==='nodata')){
    afterDelete_messages();
  }
  $.ajaxPrefilter(function( options, originalOptions, jqXHR ) {
    options.async = true;
  });
  $('#messages_table thead th h4').addClass('text-center');
	$('#all_items_menu').on('click','.delete_item',function(e){
      e.preventDefault();
    	if (confirm("Are you sure you want to delete this row?")){     
          var index = $(this).attr('id');
          var parent = $(this).parent().parent();
          $.ajax( 
           {
            type: "POST",
            url: "http://localhost/Stryker/index.php/Admin/delete_menu_item",
            data: 'index='+index,
            cache: false,
            success: function(response){            
              try{    
                if(response=='true'){
                  parent.slideUp(function() {$(this).remove();});

                }  
                else{console.log("No status");}             
              }catch(e) {   
                alert('Exception while request..');
              }   
            },
            error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }           
          });        
        }
    });
  $('#all_items_news').on('click','.delete_news',function(e){
      e.preventDefault();
      if (confirm("Are you sure you want to delete this news item?")){     
          var index = $(this).attr('id');
          var parent = $(this).parent().parent();
          console.log(index);
          console.log(parent);
          $.ajax( 
           {
            type: "POST",
            url: "http://localhost/Stryker/index.php/Admin/delete_news_item",
            data: 'index='+index,
            cache: false,
            success: function(response){            
              try{    
                if(response=='true'){
                  parent.slideUp(function() {$(this).remove();});
                }  
                else{console.log("No status");}             
              }catch(e) {   
                alert('Exception while request..');
              }   
            },
            error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }           
          });        
        }
    }); 
  $('#all_items_instruction').on('click','.delete_instruction',function(e){
      e.preventDefault();
      if (confirm("Are you sure you want to delete this row?")){     
          var index = $(this).attr('id');
          var parent = $(this).parent().parent();
          $.ajax( 
           {
            type: "POST",
            url: "http://localhost/Stryker/index.php/Admin/delete_instruction_item",
            data: 'index='+index,
            cache: false,
            success: function(response){            
              try{    
                if(response=='true'){
                  parent.slideUp(function() {$(this).remove();});

                }  
                else{console.log("No status");}             
              }catch(e) {   
                alert('Exception while request..');
              }   
            },
            error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }           
          });        
        }
    });

  $('#add_item_menu').on('click',function(e){
    e.preventDefault();
    if (confirm("Are you sure you want to add this item?")){     
        var index = $(this).attr('id');
        var parent = $(this).parent().parent().parent(); 
        $.ajax( 
           {
            type: "POST",
            url: "http://localhost/Stryker/index.php/Admin/insert_menu_item",
            data: $('#insert_form').serialize(),           
            cache: false,
            success: function(recieved){   
              try{  
                  $('#add_item_modal').modal('hide'); 
                  $('#all_items_menu').append(recieved);
                  console.log(recieved);      
                  //$("#all_items_menu").load(location.href + " #all_items_menu");          
              }catch(e) {   
                alert(e);
              }   
            },
            error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }           
          });        
        }
    });

  $('#add_item_news').on('click',function(e){
    if (confirm("Are you sure you want to add this news item?")){     
        var index = $(this).attr('id'); console.log(index);
        var parent = $(this).parent().parent().parent(); console.log(index);
        $.ajax( 
           {
            type: "POST",
            url: "http://localhost/Stryker/index.php/Admin/insert_news_item",
            data: $('#insert_form_news').serialize(),           
            cache: false,
            success: function(recieved){   
              try{       
                  $('#add_news_modal').modal('hide'); 
                  $('#all_items_news').append(recieved); 
                  
                  //$("#all_items_news").load(location.href + " #all_items_news");
                  //console.log(recieved);    
              }catch(e) {   
                alert(e);
              }   
            },
            error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }           
          });        
        }
  });

  $('#add_item_instruction').on('click',function(e){
    e.preventDefault();
    if (confirm("Are you sure you want to add this item?")){     
        var index = $(this).attr('id'); console.log(index);
        var parent = $(this).parent().parent().parent(); console.log(index);
        $.ajax( 
           {
            type: "POST",
            url: "http://localhost/Stryker/index.php/Admin/insert_instruction_item",
            data: $('#insert_form_instruction').serialize(),           
            cache: false,
            success: function(recieved){   
              try{  
                  $('#add_instruction_modal').modal('hide'); 
                  $('#all_items_instruction').append(recieved);
                  console.log(recieved);      
                  //$("#all_items_menu").load(location.href + " #all_items_menu");          
              }catch(e) {   
                alert(e);
              }   
            },
            error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }           
          });        
        }
    });

  $('.update_data').on('click',function(e){
    e.preventDefault();
    var id = $(this).parent().attr('id');
    if(id == 'foremail'){
      $('#old_email').hide();
      $('#new_email').show();
    }
    if(id == 'forphone'){
      $('#old_phone').hide();
      $('#new_phone').show();
    }
    if(id == 'foraddress'){
      $('#old_address').hide();
      $('#new_address').show();
    }
    $('#update_email_success').show();
    $('.update_email_cancel').show();
    $("#"+id+" .update_data").hide();
    $("#"+id+" .update_cancel").show();
    $("#"+id+" .update_success").show();
  });

  $(".update_cancel").on('click',function(e){
    e.preventDefault();
    var id = $(this).parent().attr('id');
    if(id == 'foremail'){
      $('#old_email').show();
      $('#new_email').hide();
      $('#new_email').text("");
    }
    if(id == 'forphone'){
      $('#old_phone').show();
      $('#new_phone').hide();
      $('#new_phone').text("");
    }
    if(id == 'foraddress'){
      $('#old_address').show();
      $('#new_address').hide();
      $('#new_address').text("");
    }
    $("#"+id+" .update_success").hide();
    $("#"+id+" .update_cancel").hide();
    $("#"+id+" .update_data").show();
  });

  $(".update_success").on('click',function(e){
    e.preventDefault();
    var id = $(this).parent().attr('id');
    if(id == 'foremail'){
      var old_email = $('#old_email').attr('placeholder');
      var new_email = $('#new_email').val();
      $.ajax({
        type:"POST",
        url: "http://localhost/Stryker/index.php/Admin/update_email",
        data: 'old_email='+old_email+'&new_email='+new_email,
        cache:false,
        success: function(recieved){
          try{
            $('#old_email').text(recieved);
            var np = $('#old_email').attr('placeholder');
            np = new_email;
            $('#old_email').show();
            $('#new_email').hide();
            $('#new_email').text('');
            $("#"+id+" .update_data").show();
            $("#"+id+" .update_success").hide();
            $("#"+id+" .update_cancel").hide();
         }catch(e){console.log(e);}
        },
        error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }
      });
    }
    else if(id == 'forphone'){
      var old_phone = $('#old_phone').attr('placeholder');
      var new_phone = $('#new_phone').val();
      $.ajax({
        type:"POST",
        url: "http://localhost/Stryker/index.php/Admin/update_phone",
        data: 'old_phone='+old_phone+'&new_phone='+new_phone,
        cache:false,
        success: function(recieved){
          try{
            $('#old_phone').text(recieved);
            var np = $('#old_phone').attr('placeholder');
            np = new_phone;
            $('#old_phone').show();
            $('#new_phone').hide();
            $('#new_phone').text('');
            $("#"+id+" .update_data").show();
            $("#"+id+" .update_success").hide();
            $("#"+id+" .update_cancel").hide();
         }catch(e){console.log(e);}
        },
        error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }
      });

    }
    else if(id == 'foraddress'){
      var old_address = $('#old_address').attr('placeholder');
      var new_address = $('#new_address').val();
      $.ajax({
        type:"POST",
        url: "http://localhost/Stryker/index.php/Admin/update_address",
        data: 'old_address='+old_address+'&new_address='+new_address,
        cache:false,
        success: function(recieved){
          try{
            $('#old_address').text(recieved);
            var np = $('#old_address').attr('placeholder');
            np = new_address;
            $('#old_address').show();
            $('#new_address').hide();
            $('#new_address').text('');
            $("#"+id+" .update_data").show();
            $("#"+id+" .update_success").hide();
            $("#"+id+" .update_cancel").hide();
         }catch(e){console.log(e);}
        },
        error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }
      });
    }

  });

  $('#delete_feedback').on('click',function(e){
    e.preventDefault();
    if(confirm("Are you sure you want to delete the feedback?")){
      var alert_id = $(this).parent().parent().parent().attr('id');
      var i=0;
      var number = $('#feedback_table th').size();
      var num_fb = parseInt($('#n_fb_2').text(),10);
      var n_total = parseInt($('#n_msg_1').text(),10);
      $.ajax({
        type: "POST",
        url:"http://localhost/Stryker/index.php/Admin/delete_feedback",
        cache:false,
        success:function(recieved){
          try{
            if(recieved == "deleted" ){
              afterDelete_feedback();
              alert_delete(alert_id,'Feedback has been deleted.');
              $('#n_msg_1').text(n_total - num_fb);
              $('#n_fb_2').text('0');
            }
            else if(recieved == "error"){
              console.log('Error from the delete_feedback function')
            }
          }catch(e){console.log(e);}
        },
        error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }
      });
    }
  }); 
  $('.view_comment').on('click',function(e){
      e.preventDefault();
      var ID = $(this).parent().parent().attr('id');
      $.ajax({
        type:"POST",
        url: base_url +"Admin/get_comment",
        data: 'ID='+ID,
        cache:false,
        success: function(recieved){
          try{
             $('#comment').html("<pre>"+recieved+"</pre>");
         }catch(e){console.log(e);}
        },
        error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }
      });
  });
  $('#messages_table').on('click','.delete_message',function(){
    if(confirm('Are you sure you want to delete this Message?')){
      var ID = $(this).parent().parent().attr('id');
      var parent = $(this).parent().parent();
      var n1 = parseInt($('#n_msg_1').text(),10);
      var n2 = parseInt($('#n_msg_2').text(),10);
      var i=0;
      $.ajax({
        type:"POST",
        url: base_url +"Admin/delete_comment",
        data: 'ID='+ID,
        cache:false,
        success:function(recieved){
          try{
            if(recieved === 'true'){
              var n3 = n1 - 1;
              
              var n4 = n2 - 1;
              parent.slideUp(function() {$(this).remove();});
              $('#n_msg_1').text(n3);
              $('#n_msg_2').text(n4);
              if(n3 === 0){
                  afterDelete_messages();
              }
            }
          }catch(e){console.log(e);}
        },
        error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }
      });
    }
  });
  $('#create_weekly_menu').on('click',function(e){
    e.preventDefault();
    $('#new_weekly_menu').fadeIn('slow');
    $(this).prop('disabled',true);
  });
  $('#new_weekly_menu_form').on('submit',function(e){
    var data_menu = $('#new_weekly_menu_form').serialize();
    $.ajax({
       type:"POST",
        url: "http://localhost/Stryker/index.php/Admin/new_weekly_menu",
        data: data_menu,
        cache:false,
        success: function(recieved){
          try{
            alert('The Menu was successfully set');
          }catch(e){console.log(e);}
        },
        error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }
    });
  });
  $('#reset_weekly_menu').on('click',function(e){
    e.preventDefault();
    $.ajax({
       type:"POST",
        url: "http://localhost/Stryker/index.php/Admin/reset_weekly_menu",
        cache:false,
        success: function(recieved){
          try{
            alert('The weekly menu was successfully reset');
            location.reload();
          }catch(e){console.log(e);}
        },
        error: function(jqXHR, textStatus, errorThrown) { console.log('Status: ' + textStatus, 'Error: ' + errorThrown); }
    });
  });
});
