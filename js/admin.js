
$(document).ready(function(){
//pic edit
$("#profilepicupload").click(function(){
    $("#profileuploadhide").click();
});

$("#projectupload").click(function(){
    $("#projectuploadhide").click();
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


//Upload profile picture event
$("#profileuploadhide").change(function(){
    var file_data = $('#profileuploadhide').prop('files')[0];  
    var form_data = new FormData();                  
    form_data.append('fileToUpload', file_data);
    // console.log(file_data);                           
    $.ajax({
        url: 'upload.php', // point to server-side PHP script 
        // dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        data: form_data, 
        contentType: false,
        processData: false,                       
        type: 'post',
        success: function(php_response){
            $("#profilepic").attr('src', php_response);
        }
     });
});

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

//preview project image
$("#projectuploadhide").change(function(){
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgpreview').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);
        $("#imgpreview").css("display", "inline-block");
    }
});



//Ajax insert completed project
$("#submit").click(function(){
    // var bio={title:$("#title").val(), content:$("#content").val()};
    var file_dat = $('#projectuploadhide').prop('files')[0];  
    var form = new FormData();                  
    form.append('projectupload', file_dat);
    form.append('title', $("#title").val());
    form.append('content', $("#content").val());
    // console.log(file_data);                           
    $.ajax({
        url: 'insertproject.php', // point to server-side PHP script 
        // dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        data: form, 
        contentType: false,
        processData: false,                       
        type: 'post',
        success: function(php_response){
            alert(php_response);
            // $(".projectlist:first").prepend('');

            // var divmain=document.createElement("div");
            // var divmiddle=document.createElement("div");
            // var divimg=document.createElement("div");
            // var img=document.createElement("img");
            // var h1=document.createElement("h1");
            // var p=document.createElement("p");
            // var nodeh1=document.createTextNode("Manchidede Title");
            // var nodep=document.createTextNode("This is the paragraph");
            // var br=document.createElement("br");
            // var hr=document.createElement("hr");
            // img.src="images/chidi.jpg";

            // divmain.appendChild(divmiddle);
            // divmiddle.appendChild(h1);
            // h1.appendChild(nodeh1);
            // divmiddle.appendChild(p);
            // p.appendChild(nodep);
            // divmain.appendChild(divimg);
            // divimg.appendChild(img);
            // divmain.appendChild(br);
            // divmain.appendChild(br);
            // divmain.appendChild(hr);

            // document.getElementsByClassName("projectlist")[0].appendChild(divmain);
        }
     });
            
            });
//End completed project


});