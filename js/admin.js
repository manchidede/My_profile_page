
$(document).ready(function(){
//pic edit
$("#profilepicupload").click(function(){
    $("#uploadhide").click();
});

$("#upload").click(function(){
    $("#profileuploadhide").click();
});


$("#skills").click(function(){
    $(".skillsedit").toggle();
});

$("#hobbies").click(function(){
    $(".hobbiesedit").toggle();
});

$("#bio").click(function(){
    $(".bioedit").toggle();
});

$("#profileuploadhide").change(function(){
    alert('Its me');
});
//Upload profile picture event
// $("#profileuploadhide").change(function(){
//     var file_data = $('#profileuploadhide').prop('files')[0];  
//     var form_data = new FormData();                  
//     form_data.append('fileToUpload', file_data);
//     alert('Its me');
//     // console.log(file_data);                           
//     $.ajax({
//         url: 'upload.php', // point to server-side PHP script 
//         // dataType: 'text',  // what to expect back from the PHP script, if anything
//         cache: false,
//         data: form_data, 
//         contentType: false,
//         processData: false,                       
//         type: 'post',
//         success: function(php_response){
//             $("#profilepic").attr('src', php_response);
//         }
//      });
// });

//Ajax update skills
$("#updateskills").click(function(){
    var skills={skill:$("#skillsinput").val()};
    $.ajax({
        method:"post",
        data: skills,
        url:"update.php",
        success: function(response){
            console.log(response);
        },
        error: function(e){
            console.log(e);
        }
    });
            
            });
//End Ajax skills

//Ajax update hobbies
$("#updatehobbies").click(function(){
    var hobbies={hobbies:$("#hobbiesinput").val()};
    $.ajax({
        method:"post",
        data: hobbies,
        url:"update.php",
        success: function(response){
            console.log(response);
        },
        error: function(e){
            console.log(e);
        }
    });
            
            });
//End Ajax hobbies

//Ajax update bio
$("#updatebio").click(function(){
    var bio={bio:$("#bioinput").val()};
    $.ajax({
        method:"post",
        data: bio,
        url:"update.php",
        success: function(response){
            console.log(response);
        },
        error: function(e){
            console.log(e);
        }
    });
            
            });
//End Ajax hobbies


//Ajax insert completed project
// $("#submit").click(function(){
//     // var bio={title:$("#title").val(), content:$("#content").val()};
//     var file_dat = $('#uploadproject').prop('files')[0];  
//     var form = new FormData();                  
//     form.append('fileToUpload', file_dat);
//     form.append('title', $("#title").val());
//     form.append('content', $("#content").val());
//     // console.log(file_data);                           
//     $.ajax({
//         url: 'upload.php', // point to server-side PHP script 
//         // dataType: 'text',  // what to expect back from the PHP script, if anything
//         cache: false,
//         data: form, 
//         contentType: false,
//         processData: false,                       
//         type: 'post',
//         success: function(php_response){
//             alert(php_response);
//             // $("#profilepic").attr('src', php_response);
//         }
//      });
            
//             });
//End completed project


});