$(document).ready(function(){
               
               $("#showorhide").hide();
               
               $('#fliving').on('click', function () {
                   $("#showorhide").show();
               });

               $('#fdecesed').on('click', function () {
                   $("#showorhide").hide();
               });               
               

               $('#mliving').on('click', function () {
                   $("#mshoworhide").show();
               });

               $('#mdecesed').on('click', function () {
               $("#mshoworhide").hide();
               });

               $('#father').on('click', function () {
               $("#othershoworhide").hide();
               });

               $('#mother').on('click', function () {
               $("#othershoworhide").hide();
               });

               $('#other').on('click', function () {
               $("#othershoworhide").show();
               });

               $('#gliving').on('click', function () {
               $("#gshoworhide").show();
               });

               $('#gdecesed').on('click', function () {
               $("#gshoworhide").hide();
               });

               $("#fsameaddress").click(copyData1);
               function copyData1()
               {
                   var addressno = $("#addressno").val();
                   var street = $("#street").val();
                   var township = $("#township").val();
                   var city = $("#city").val();


                   if (this.checked==true){
                       $("#faddressno").val(addressno);
                       $("#fstreet").val(street);
                       $("#ftownship").val(township);
                       $("#fcity").val(city);
                   }                           
               } 

               $("#msameaddress").click(copyData2);
               function copyData2()
               {
                   var addressno = $("#addressno").val();
                   var street = $("#street").val();
                   var township = $("#township").val();
                   var city = $("#city").val();

                   if (this.checked==true){
                       $("#maddressno").val(addressno);
                       $("#mstreet").val(street);
                       $("#mtownship").val(township);
                       $("#mcity").val(city);
                   }                          
               } 

               $("#gsameaddress").click(copyData3);
               function copyData3()
               {
                   var addressno = $("#addressno").val();
                   var street = $("#street").val();
                   var township = $("#township").val();
                   var city = $("#city").val();

                   if (this.checked==true){
                       $("#gaddressno").val(addressno);
                       $("#gstreet").val(street);
                       $("#gtownship").val(township);
                       $("#gcity").val(city);
                   }                         
               } 

               $("#email").mouseleave(function(){

                   var email = $(this).val().trim();
                   if(email != ''){
                       $.ajax({
                           url: 'emailcheck.php',
                           type: 'post',
                           data: {email:email},
                           success: function(response){
                               // Show response
                               $("#emailcheck").html(response);
                           
                           }
                       });
                       var echeck = $('#emailcheck').text();
                       if(echeck === 'Available'){
                           valid = true;
                       }
                       else if(echeck ==='Not Available'){
                           valid = false;                                    
                       }
                   }

                   else{
                       $("#emailcheck").html("");
                   }

               });

               $("#citizenid").mouseleave(function(){

                   var citizenid = $(this).val().trim();
                   if(citizenid != ''){
                       $.ajax({
                           url: 'citizenidcheck.php',
                           type: 'post',
                           data: {citizenid:citizenid},
                           success: function(response){
                               // Show response
                               $("#citizenidcheck").html(response);
                           }
                       });
                       var cid = $('#citizenidcheck').text();
                           if(cid === 'Available'){
                               valid = true;
                           }
                           else if(cid ==='Not Available'){
                               valid = false;                                    
                           }
                   }
                   else{
                       $("#citizenidcheck").html("");
                   }

               });


               

   
           });  