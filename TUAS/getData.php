<?php  
        include 'includes/class-autoload.inc.php';           
             $valid = true;
            // to validate inputs
            if(isset($_POST['submit']))
            {          
                $applicant = [
                    'title' => $_POST['title'],
                    'ename' => $_POST['ename'],
                    'mmname' => $_POST['mmname'],
                    'gender' => $_POST['gender'],
                    'syllabus' => $_POST['syllabus'],
                    'studyplace' => $_POST['studyplace'],
                    'school' => $_POST['school'],
                    'level' => $_POST['level'],
                    'major' => $_POST['major'],
                    'mark' => $_POST['mark'],
                    'birthdate' => $_POST['birthdate'],
                    'nationality' => $_POST['nationality'],
                    'citizenship' => $_POST['citizenship'],
                    'religion' => $_POST['religion'],
                    'bloodgroup' => $_POST['bloodgroup'],
                    'citizenid' => $_POST['citizenid'],
                    'passportid' => $_POST['passportid'],
                    'status' => '',
                    'mobile' => $_POST['mobile'],
                    'facebook' => $_POST['facebook']
                ]; 

                $appAddress['addressno'] =$_POST['addressno'];
                $appAddress['street'] =$_POST['street'];
                $appAddress['township'] =$_POST['township'];
                $appAddress['city'] =$_POST['city'];                
                $appAddress['zipcode']  = $_POST['zipcode'];
                $appAddress['telephone']  = $_POST['telephone'];
                $appAddress['mobile'] =$_POST['mobile'];
                $appAddress['facebook']  = $_POST['facebook'];
                $appAddress['email'] =$_POST['email'];
                $appAddress['fax']  = $_POST['fax'];
                
                $fatherAddress = [
                    'addressno' => $_POST['faddressno'],
                    'street' => $_POST['fstreet'],
                    'township' => $_POST['ftownship'],                    
                    'zipcode' => $_POST['fzipcode'],
                    'telephone' => $_POST['ftelephone'],
                    'mobile' => $_POST['fmobile'],  
                    'city' => $_POST['fcity']                  
                                                         
                ];

                $motherAddress = [
                    'addressno' => $_POST['maddressno'],
                    'street' => $_POST['mstreet'],
                    'township' => $_POST['mtownship'],                    
                    'zipcode' => $_POST['mzipcode'],
                    'telephone' => $_POST['mtelephone'],
                    'mobile' => $_POST['mmobile'],  
                    'city' => $_POST['mcity']                  
                                                         
                ];

                $father = [                    
                    'name' => $_POST['fname'],
                    'nationality' => $_POST['fnationality'],
                    'status' => $_POST['fstatus'],
                    'age' => $_POST['fage'],
                    'occupation' => $_POST['foccupation'],
                    'position' => $_POST['fposition'],                    
                    'fmostatus' => $_POST['fmostatus']
                ];

                $mother = [                   
                    'name' => $_POST['mname'],
                    'nationality' => $_POST['mnationality'],
                    'status' => $_POST['mstatus'],
                    'age' => $_POST['mage'],
                    'occupation' => $_POST['moccupation'],
                    'position' => $_POST['mposition'],                    
                    'fmostatus' => $_POST['fmostatus']
                ];

                $guardian = [                   
                    'name' => $_POST['gname'],
                    'nationality' => $_POST['gnationality'],
                    'status' => $_POST['fmostatus'],
                    'age' => $_POST['gage'],
                    'occupation' => $_POST['goccupation'],
                    'position' => $_POST['gposition'],                    
                    'fmostatus' => $_POST['fmostatus']
                ];

                $guardianAddress = [
                    'addressno' => $_POST['gaddressno'],
                    'street' => $_POST['gstreet'],
                    'township' => $_POST['gtownship'],                    
                    'zipcode' => $_POST['gzipcode'],
                    'telephone' => $_POST['gtelephone'],
                    'mobile' => $_POST['gmobile'],  
                    'city' => $_POST['gcity']                                                                     
                ];
                
               
                if(isset($_POST['title'])){                    
                    if(empty($applicant['title']))
                    {
                        $titleError='Please choose title';
                         $valid=false;
                    }
                }                  
                
                if(isset($_POST['ename']))
                {                    
                    if(empty($applicant['ename']))
                    {
                        $enameError='Please add Name (Eng)';
                         $valid=false;
                    }
                }
                if(isset($_POST['mmname']))
                {                    
                    if(empty($applicant['mmname']))
                    {
                        $mmnameError='Please add Name (MM)';
                         $valid=false;
                    }
                }
                if(isset($_POST['gender']))
                {                  
                    if(empty($applicant['gender']))
                    {
                        $genderError='Please choose gender';
                         $valid=false;
                    }
                }
               
                if(isset($_POST['syllabus']))
                {                 
                    if(empty($applicant['syllabus']))
                    {
                        $syllabusError='Please choose syllabus';
                         $valid=false;
                    }
                }                

                if(isset($_POST['school']))
                {                  
                    if(empty($applicant['school']))
                    {
                        $schoolError='Please add school';
                         $valid=false;
                    }
                }

                if(isset($_POST['level']))
                {
                    
                    if(empty($applicant['level']))
                    {
                        $levelError='Please choose level';
                         $valid=false;
                    }
                }

                if(isset($_POST['major']))
                {
                   
                    if(empty($applicant['major']))
                    {
                        $majorError='Please add major';
                         $valid=false;
                    }
                }

                if(isset($_POST['mark']))
                {
                   
                    if(empty($applicant['mark']))
                    {
                        $markError='Please add mark';
                         $valid=false;
                    }
                }

                if(isset($_POST['citizenid']))
                {
                   
                    if(empty($applicant['citizenid']))
                    {
                        $citizenidError='Please add citizenid';
                         $valid=false;
                    }
                }               

                if(isset($_POST['addressno']))
                {                    
                    if(empty($appAddress['addressno']))
                    {
                        $addressnoError='Please add addressno';
                         $valid=false;
                    }
                }

                if(isset($_POST['street']))
                {                    
                    if(empty($appAddress['street']))
                    {
                        $streetError='Please add street';
                         $valid=false;
                    }
                }

                if(isset($_POST['township']))
                {                   
                    if(empty($appAddress['township']))
                    {
                        $townshipError='Please add township';
                         $valid=false;
                    }
                }

                if(isset($_POST['city']))
                {                   
                    if(empty($appAddress['city']))
                    {
                        $cityError='Please add city';
                         $valid=false;
                    }
                }                

                if(isset($_POST['mobile']))
                {                    
                    if(empty($appAddress['mobile']))
                    {
                        $mobileError='Please add mobile';
                         $valid=false;
                    }
                }               

                if(isset($_POST['email']))
                {                    
                    if(empty($appAddress['email']))
                    {
                        $emailError='Please add email';
                         $valid=false;
                    }
                }

                //father require fields
                if(isset($_POST['fname']))
                {                    
                    if(empty($father['fname']))
                    {
                        $fnameError='Please add father name';
                         $valid=false;
                    }
                }

                if(isset($_POST['fnationality']))
                {                   
                    if(empty($father['fnationality']))
                    {
                        $fnationalityError='Please add father nationality';
                         $valid=false;
                    }
                }
                
               
                if((isset($_POST['fstatus']) && $_POST['fstatus']=="fliving")){
                    if(isset($_POST['ftownship']))
                    {                    
                        if(empty($fatherAddress['ftownship']))
                        {
                            $ftownshipError='Please add father township';
                            $valid=false;
                        }
                    }

                    if(isset($_POST['fcity']))
                    {                   
                        if(empty($fatherAddress['fcity']))
                        {
                            $fcityError='Please add father city';
                            $valid=false;
                        }
                    }

                    if(isset($_POST['fmobile']))
                    {                  
                        if(empty($fatherAddress['fmobile']))
                        {
                            $fmobileError='Please add father mobile';
                            $valid=false;
                        }
                    } 
            
                }
                       
                
                //mother require fields
                if(isset($_POST['mname']))
                {                 
                    if(empty($mother['mname']))
                    {
                        $mnameError='Please add mother name';
                         $valid=false;
                    }
                }

                if(isset($_POST['mnationality']))
                {                   
                    if(empty($mother['mnationality']))
                    {
                        $mnationalityError='Please add mother nationality';
                         $valid=false;
                    }
                }
                
                if((isset($_POST['mstatus']) && $_POST['mstatus']=="mliving")){
                    if(isset($_POST['mtownship']))
                    {                
                        if(empty($motherAddress['mtownship']))
                        {
                            $mtownshipError='Please add mother township';
                            $valid=false;
                        }
                    }
        
                    if(isset($_POST['mmobile']))
                    {              
                        if(empty($motherAddress['mmobile']))
                        {
                            $mmobileError='Please add mother mobile no:';
                            $valid=false;
                        }
                    }

                    if(isset($_POST['mcity']))
                    {                   
                        if(empty($motherAddress['mcity']))
                        {
                            $mcityError='Please add mother city';
                            $valid=false;
                        }
                    }                

                }
                       
                
                
                //Guardian status
                if((isset($_POST['fmostatus']) && $_POST['fmostatus']=="other")){
                    if(isset($_POST['gname']))
                    {                 
                        if(empty($guardian['gname']))
                        {
                            $gnameError='Please add guardian name';
                            $valid=false;
                        }
                    }
    
                    if(isset($_POST['gnationality']))
                    {                   
                        if(empty($guardian['gnationality']))
                        {
                            $gnationalityError='Please add guardian nationality';
                            $valid=false;
                        }
                    }

                    if((isset($_POST['gstatus']) && $_POST['gstatus']=="gliving")){
                            if(isset($_POST['gtownship']))
                            {                  
                                if(empty($guardianAddress['gtownship']))
                                {
                                    $gtownshipError='Please add guardian township';
                                    $valid=false;
                                }
                            }
                        
                            if(isset($_POST['gmobile']))
                            {                 
                                if(empty($guardianAddress['gmobile']))
                                {
                                    $gmobileError='Please add guardian mobile no:';
                                    $valid=false;
                                }
                            }
            
                            if(isset($_POST['gcity']))
                            {                  
                                if(empty($guardianAddress['gcity']))
                                {
                                    $gcityError='Please add guardian city';
                                    $valid=false;
                                }
                            }
        
                    }
                            
                }
                   
                        

                
 
            
            if($valid=true){
                
                $addresscontr =  new addresscontroller();
                $caddid =   $addresscontr -> insertData($appAddress);
                echo "Child Address ID from $caddid"; 

                $applicantcontr =  new applicantcontroller();
                $appid =   $applicantcontr -> insertData($applicant);
                echo "Applicant ID from $appid"; 

                $addresscontr =  new addresscontroller();
                $faddid =   $addresscontr -> insertParentData($fatherAddress);
                echo "Father Address ID from $faddid";

                $addresscontr =  new addresscontroller();
                $maddid =   $addresscontr -> insertParentData($motherAddress);
                echo "Mother Address ID from $maddid";

                if((isset($_POST['fstatus']) && $_POST['fstatus']=="fliving")) {
                    $parentscontr = new parentscontr();
                    $parentscontr -> createParentsAlive($father,$appid,$faddid);               
                }

                if((isset($_POST['mstatus']) && $_POST['mstatus']=="mliving")){
                    $parentscontr = new parentscontr();
                    $parentscontr -> createParentsAlive($mother,$appid,$maddid);
                }

                if((isset($_POST['fstatus']) && $_POST['fstatus']=="fdecesed")) {
                    $parentscontr = new parentscontr();
                    $parentscontr -> createParentsDecesed($father,$appid,$faddid);                
                }

                if( (isset($_POST['mstatus']) && $_POST['mstatus']=="mdecesed")){
                    $parentscontr = new parentscontr();
                    $parentscontr -> createParentsDecesed($mother,$appid,$maddid);
                }
            
                if((isset($_POST['fmostatus']) && $_POST['fmostatus']=="other")) {
                    if((isset($_POST['gstatus']) && $_POST['gstatus']=="gliving")){
                        $addresscontr =  new addresscontroller();
                        $gaddid =   $addresscontr -> insertParentData($guardianAddress);
                        echo "Guardian Address ID from $gaddid";
                        $parentscontr = new parentscontr();
                        $parentscontr -> createParentsAlive($guardian,$appid,$gaddid);
                    }

                    if((isset($_POST['gstatus']) && $_POST['gstatus']=="gdecesed")){
                        $parentscontr = new parentscontr();
                        $parentscontr -> createParentsDecesed($guardian,$appid,$gaddid);
                    }
                    
                }

                
            }

            else if($valid==false){
                echo 'valid false';
            }
                
            }
  
            

        ?> 