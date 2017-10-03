
Dropzone.autoDiscover=false;
$(document).ready(function () {

  Dropzone.autoDiscover = false;
  $('#some-dropzone').dropzone({
     url:"/uploadimage",
      uploadMultiple : false,
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 5, // MB
      maxFiles: 1 ,
      parallelUploads : 1,
      addRemoveLinks : true,
      dictResponseError: "No se puede subir esta imagen!",
      autoProcessQueue: true,
      thumbnailWidth: 138,
      thumbnailHeight: 120,
      acceptedFiles:"image/*",
      previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name style:"font-weight: bold;"></span></div><div class="dz-size">File size: <span data-dz-size></span></div><div class="dz-thumbnail-wrapper"><div class="dz-thumbnail"><img data-dz-thumbnail><span class="dz-nopreview">No preview</span><div class="dz-success-mark"><i class="fa fa-check-circle-o"></i></div><div class="dz-error-mark"><i class="fa fa-times-circle-o"></i></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div></div><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" data-dz-uploadprogress></div></div></div>',
      resize: function(file) {
          var info = { srcX: 0, srcY: 0, srcWidth: file.width, srcHeight: file.height },
              srcRatio = file.width / file.height;
          if (file.height > this.options.thumbnailHeight || file.width > this.options.thumbnailWidth) {
              info.trgHeight = this.options.thumbnailHeight;
              info.trgWidth = info.trgHeight * srcRatio;
              if (info.trgWidth > this.options.thumbnailWidth) {
                  info.trgWidth = this.options.thumbnailWidth;
                  info.trgHeight = info.trgWidth / srcRatio;
              }
          } else {
              info.trgHeight = file.height;
              info.trgWidth = file.width;
          }
          return info;
      },
      sending : function(file, xhr, formData){
          formData.append("file-post",2);
          formData.append("agreement",$("#name-agreement").val());
      },
      success: function(file, response){
          var name_image = response;
          $(".dz-preview").addClass("dz-success");
          $("div.progress").remove();
          file.previewElement.accessKey = name_image.name;
          $("#image-2").val(name_image.name);
      },
      removedfile: function(file) {
          $(file.previewElement).remove();
          name = file.previewElement.accessKey;
          $.ajax({
              url: "/deleteimage",
              type: "post",
              data: { "image":name},
              dataType:"json",
              success : function(response){
                  if(response.message=="SUCCESS" && response.code==200){
                      $(file.previewElement).remove();
                      $("#image-2").val('');
                  }else{
                      $(file.previewElement).remove();
                  }
              },
              error : function(){
                  alert("Ha ocurrido un error");
              }
          });
      }
  });
});