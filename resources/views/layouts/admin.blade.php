<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
  
    <!-- endinject -->

    <!--fontawose cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
  </head>
  <body class="with-welcome-text">

    @yield('maincontent')


    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin/assets/vendors/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/assets/js/template.js')}}"></script>
    <script src="{{asset('admin/assets/js/settings.js')}}"></script>
    <script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>



    <script>
      //hero form validation---------------------------start
      $(document).ready(function(){
        $("#heroform").validate({
          rules:{
            personalText:{
              required:true
            },
            username:{
              required:true
            },
            shortDis:{
              required:true
            },
            btn_text:{
              required:true
            },
            btn_url:{
              required:true
            }
      
            },
            messages:{
              personalText:{
                required:"Write a title "
              },
         
              username:{
                  required:"Write your sub title"
                },
                shortDis:{
                  required:"write your description"
                },
                btn_text:{
                  required:"write your button text"
                },
                btn_url:{
                  required:"write your button url"
                }
              
          }
        });
      });

      //hero form validation---------------------------end



      //about person details  form validation---------------------------start

      $(document).ready(function(){
        $("#persondetsform").validate({
          rules:{
            main_titile:{
              required:true
            },
            sub_titile:{
              required:true
            },
            discription:{
              required:true
            },
            btn_text:{
              required:true
            },
            btn_url:{
              required:true
            }
      
            },
            messages:{
              main_titile:{
                required:"Write a title "
              },
         
              sub_titile:{
                  required:"Write your sub title"
                },
                discription:{
                  required:"write your description"
                },
                btn_text:{
                  required:"write your button text"
                },
                btn_url:{
                  required:"write your button url"
                }
              
          }
        });
      });
      //about person details  form validation---------------------------end

      //about expertise  form validation---------------------------start

      $(document).ready(function(){
        $("#aboutexpertiseform").validate({
          rules:{
            designation:{
              required:true
            },
            discription:{
              required:true
            },
            icon:{
              required:true
            }
      
            },
            messages:{
              designation:{
                required:"Write a designation "
              },
         
              discription:{
                  required:"Write your description"
                },
                icon:{
                  required:"Set your icon"
                }
              
          }
        });
      });
      //about expertise  form validation---------------------------end


    //resume education    form validation---------------------------start


      $(document).ready(function(){
        $("#resumeeducation").validate({
          rules:{
            year:{
              required:true
            },
            designation:{
              required:true
            },
            discription:{
              required:true
            }
      
            },
            messages:{
              year:{
                required:"You have to enter year "
              },
         
              designation:{
                  required:"set your user designation plz"
                },
                discription:{
                  required:"write your description"
                }
              
          }
        });
      });
      
   //resume education  form validation---------------------------end

    //resume expertise    form validation---------------------------start


      $(document).ready(function(){
        $("#resumeexpertiseform").validate({
          rules:{
            year:{
              required:true
            },
            designation:{
              required:true
            },
            discription:{
              required:true
            }
      
            },
            messages:{
              year:{
                required:"You have to enter year "
              },
         
              designation:{
                  required:"set your user designation plz"
                },
                discription:{
                  required:"write your description"
                }
              
          }
        });
      });
      
   //resume expertise  form validation---------------------------end

    //resume skill    form validation---------------------------start


      $(document).ready(function(){
        $("#skillform").validate({
          rules:{
            skill_name:{
              required:true
            },
            skill_persentense:{
              required:true
            }
      
            },
            messages:{
              skill_name:{
                required:"Write your skill  "
              },
         
              skill_persentense:{
                  required:"Write your skill persentense"
                }
              
          }
        });
      });
      
   //resume skill  form validation---------------------------end


    // counter     form validation---------------------------start


      $(document).ready(function(){
        $("#counterform").validate({
          rules:{
            count_number:{
              required:true
            },
            sub:{
              required:true
            },
            icon:{
              required:true
            }
      
            },
            messages:{
              count_number:{
                required:"You have to enter counter nubmer "
              },
         
              sub:{
                  required:"set youru subject"
                },
                icon:{
                  required:"Set icon"
                }
              
          }
        });
      });
      
   //counter  form validation---------------------------end


    // service form validation---------------------------start


      $(document).ready(function(){
        $("#serviceform").validate({
          rules:{
            title:{
              required:true
            },
            discription:{
              required:true
            },
            icon:{
              required:true
            }
      
            },
            messages:{
              title:{
                required:"Write a title"
              },
         
              discription:{
                  required:"Write a title"
                },
                icon:{
                  required:"Set icon"
                }
              
          }
        });
      });
      
   //service  form validation---------------------------end


    // call to action form validation---------------------------start


      $(document).ready(function(){
        $("#calltoactionform").validate({
          rules:{
            title:{
              required:true
            },
            btn_text:{
              required:true
            },
            btn_url:{
              required:true
            }
      
            },
            messages:{
              title:{
                required:"Write a title"
              },
         
              btn_text:{
                  required:"Write a button text"
                },
                btn_url:{
                  required:"Give here button url"
                }
              
          }
        });
      });
      
   //call to action  form validation---------------------------end

    // post form validation---------------------------start


      $(document).ready(function(){
        $("#postform").validate({
          rules:{
            title:{
              required:true
            },
            short_dis:{
              required:true
            },
            long_dis:{
              required:true
            },
            feature_image:{
              required:true
            },
            cat_id:{
              required:true
            }
      
            },
            messages:{
              title:{
                required:"Write a title"
              },
         
              short_dis:{
                  required:"Write a short discription"
                },
                long_dis:{
                  required:"Write a long discription"
                },
                feature_image:{
                  required:"Select a feature image"
                },
                cat_id:{
                  required:"Select a category"
                }
              
          }
        });
      });
      
   //post  form validation---------------------------end


    // category form validation---------------------------start


      $(document).ready(function(){
        $("#categoryform").validate({
          rules:{
            category_name:{
              required:true
            }
      
            },
            messages:{
              category_name:{
                required:"Write a category"
              }
          }
        });
      });
      
   //post  form validation---------------------------end


 
  //packes pricing form validation---------------------------start

      $(document).ready(function(){
        $("#packspricing").validate({
          rules:{
            package_name:{
              required:true
            },
            price:{
              required:true
            },
            button_text:{
              required:true
            },
            button_url:{
              required:true
            },
            package_feature:{
              required:true
            }
      
      
      
            },
            messages:{
              package_name:{
                required:"You have to enter package name "
              },
         
              price:{
                  required:"Please set price"
                },
                button_text:{
                  required:"write button text"
                },
                button_url:{
                  required:"write button url"
                },
                package_feature:{
                  required:"Please add more feature"
                }
              
          }
        });
      });
      
    //packes pricing form validation---------------------------end

      
      // add more feature start for packe pricing -------------------start
      
      $(document).ready(function(){
          var maxField = 10; //Input fields increment limitation
          var addButton = $('.add_button'); //Add button selector
          var wrapper = $('.field_wrapper'); //Input field wrapper
          var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="{{asset('images/remove.png')}}"/></a></div>'; //New input field html 
          var x = 1; //Initial field counter is 1
          
          // Once add button is clicked
          $(addButton).click(function(){
              //Check maximum number of input fields
              if(x < maxField){ 
                  x++; //Increase field counter
                  $(wrapper).append(fieldHTML); //Add field html
              }else{
                  alert('A maximum of '+maxField+' fields are allowed to be added. ');
              }
          });
          
          // Once remove button is clicked
          $(wrapper).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent('div').remove(); //Remove field html
              x--; //Decrease field counter
          });
      });

      // add more feature start for packe pricing -------------------end



    CKEDITOR.replace('editor');


      
      </script>




  </body>
</html>