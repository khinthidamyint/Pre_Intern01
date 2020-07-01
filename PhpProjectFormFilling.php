<!DOCTYPE html>
<html>

    <head>
        <title> Php Project Form Filling </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

        <style>
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
            }

            li {
            float: left;
            }

            li a {
            display: block;
            color: white;
            text-align: center;
            padding-right: 80px;
            text-decoration: none;
            }
           
        </style>

    </head>

    <body>
        <?php
            include 'db2.php';  
            //applicant fields
            $valid=true;
            $title = '';
            $ename='';
            $mmname='';
            $gender='';
            $email = '';
            $syllabus = '';
            $school = '';
            $level = '';
            $major = '';
            $mark = '';
            $citizenid = '';
            $addressno = '';
            $street = '';
            $township = '';
            $city = '';
            $mobile = '';

            //father fields
            $fname = '';
            $ftownship = '';            
            $fcity = '';
            $fmobile = '';

            //mother fields
            $mname = '';
            $mtownship = '';
            $mcity = '';
            $mmobile = '';

            //guardian fields
            $gname = '';
            $gtownship = '';
            $gcity = '';
            $gmobile = '';

            // to validate inputs
            if(!empty($_POST))
            {
                // $applicantfields=[
                //     "title"=>$_POST['title'],
                //     "ename"=>$_POST['ename'],
                //     "mmname"=>$_POST['mmname'],
                //     "gender"=>$_POST['gender'], 
                //     "email"=>$_POST['email'],
                //     "syllabus"=>$_POST['syllabus'],
                //     "school"=>$_POST['school'],
                //     "level"=>$_POST['level'], 
                //     "major"=>$_POST['major'],
                //     "mark"=>$_POST['mark'],
                //     "citizenid"=>$_POST['citizenid'],
                //     "addressno"=>$_POST['addressno'],
                //     "street"=>$_POST['street'],
                //     "township"=>$_POST['township'],
                //     "city"=>$_POST['city'],
                //     "mobile"=>$_POST['mobile']   
                // ];  
                
                // $fatherfields=[
                //     "fname"=>$_POST['fname'],
                //      "ftownship"=>$_POST['ftownship']
                //     // "fcity"=>$_POST['fcity'],
                //     // "fmobile"=>$_POST['fmobile']       
                // ];

                // $motherfields=[
                //     "mname"=>$_POST['mname'],
                //     "mtownship"=>$_POST['mtownship'],
                //     "mcity"=>$_POST['mcity'],
                //     "mmobile"=>$_POST['mmobile']       
                // ]; 

                // $guardianfields=[
                //     "gname"=>$_POST['gname'],
                //     "gtownship"=>$_POST['gtownship'],
                //     "gcity"=>$_POST['gcity'],
                //     "gmobile"=>$_POST['gmobile']       
                // ]; 

//                 $answer = $_POST['fstatus'];  
// if ($answer == "fdecesed") {          
//     echo 'Correct';  
//     echo '<script>$("#showorhide").hide(); </script>';
       
// }

                if(isset($_POST['title'])){
                    $title=$_POST['title'];
                    if(empty($title))
                    {
                        $titleError='Please choose title';
                        $valid=false;
                    }
                }
                
                   
                
                if(isset($_POST['ename']))
                {
                    $ename=$_POST['ename'];
                    if(empty($ename))
                    {
                        $enameError='Please add Name (Eng)';
                        $valid=false;
                    }
                }
                if(isset($_POST['mmname']))
                {
                    $mmname=$_POST['mmname'];
                    if(empty($mmname))
                    {
                        $mmnameError='Please add Name (MM)';
                        $valid=false;
                    }
                }
                if(isset($_POST['gender']))
                {
                    $gender=$_POST['gender'];
                    if(empty($gender))
                    {
                        $genderError='Please choose gender';
                        $valid=false;
                    }
                }
                if(isset($_POST['email']))
                {
                    $email=$_POST['email'];
                    if(empty($email))
                    {
                        $emailError='Please add email';
                        $valid=false;
                    }
                }
                if(isset($_POST['syllabus']))
                {
                    $syllabus=$_POST['syllabus'];
                    if(empty($syllabus))
                    {
                        $syllabusError='Please choose syllabus';
                        $valid=false;
                    }
                }
                if(isset($_POST['school']))
                {
                    $school=$_POST['school'];
                    if(empty($school))
                    {
                        $schoolError='Please add school';
                        $valid=false;
                    }
                }
                if(isset($_POST['level']))
                {
                    $level=$_POST['level'];
                    if(empty($level))
                    {
                        $levelError='Please choose level';
                        $valid=false;
                    }
                }
                if(isset($_POST['major']))
                {
                    $major=$_POST['major'];
                    if(empty($major))
                    {
                        $majorError='Please add major';
                        $valid=false;
                    }
                }
                if(isset($_POST['mark']))
                {
                    $mark=$_POST['mark'];
                    if(empty($mark))
                    {
                        $markError='Please add mark';
                        $valid=false;
                    }
                }
                if(isset($_POST['citizenid']))
                {
                    $citizenid=$_POST['citizenid'];
                    if(empty($citizenid))
                    {
                        $citizenidError='Please add citizenid';
                        $valid=false;
                    }
                }
                if(isset($_POST['addressno']))
                {
                    $addressno=$_POST['addressno'];
                    if(empty($addressno))
                    {
                        $addressnoError='Please add addressno';
                        $valid=false;
                    }
                }
                if(isset($_POST['street']))
                {
                    $street=$_POST['street'];
                    if(empty($street))
                    {
                        $streetError='Please add street';
                        $valid=false;
                    }
                }
                if(isset($_POST['township']))
                {
                    $township=$_POST['township'];
                    if(empty($township))
                    {
                        $townshipError='Please add township';
                        $valid=false;
                    }
                }
                if(isset($_POST['city']))
                {
                    $city=$_POST['city'];
                    if(empty($city))
                    {
                        $cityError='Please add city';
                        $valid=false;
                    }
                }
                if(isset($_POST['mobile']))
                {
                    $mobile=$_POST['mobile'];
                    if(empty($mobile))
                    {
                        $mobileError='Please add mobile';
                        $valid=false;
                    }
                }

                //father require fields
                if(isset($_POST['fname']))
                {
                    $fname=$_POST['fname'];
                    if(empty($fname))
                    {
                        $fnameError='Please add father name';
                        $valid=false;
                    }
                }
                if(isset($_POST['ftownship']))
                {
                    $ftownship=$_POST['ftownship'];
                    if(empty($ftownship))
                    {
                        $ftownshipError='Please add father township';
                        $valid=false;
                    }
                }
                if(isset($_POST['fcity']))
                {
                    $fcity=$_POST['fcity'];
                    if(empty($fcity))
                    {
                        $fcityError='Please add father city';
                        $valid=false;
                    }
                }
                if(isset($_POST['fmobile']))
                {
                    $fmobile=$_POST['fmobile'];
                    if(empty($fmobile))
                    {
                        $fmobileError='Please add father mobile no:';
                        $valid=false;
                    }
                }

                //mother require fields
                if(isset($_POST['mname']))
                {
                    $mname=$_POST['mname'];
                    if(empty($mname))
                    {
                        $mnameError='Please add mother name';
                        $valid=false;
                    }
                }
                if(isset($_POST['mtownship']))
                {
                    $mtownship=$_POST['mtownship'];
                    if(empty($mtownship))
                    {
                        $mtownshipError='Please add mother township';
                        $valid=false;
                    }
                }
                if(isset($_POST['mcity']))
                {
                    $mcity=$_POST['mcity'];
                    if(empty($mcity))
                    {
                        $mcityError='Please add mother city';
                        $valid=false;
                    }
                }
                if(isset($_POST['mmobile']))
                {
                    $mmobile=$_POST['mmobile'];
                    if(empty($mmobile))
                    {
                        $mmobileError='Please add father mobile no:';
                        $valid=false;
                    }
                }

                //guardian require fields
                if(isset($_POST['gname']))
                {
                    $gname=$_POST['gname'];
                    if(empty($gname))
                    {
                        $gnameError='Please add guardian name';
                        $valid=false;
                    }
                }
                if(isset($_POST['gtownship']))
                {
                    $gtownship=$_POST['gtownship'];
                    if(empty($gtownship))
                    {
                        $gtownshipError='Please add guardian township';
                        $valid=false;
                    }
                }
                if(isset($_POST['gcity']))
                {
                    $gcity=$_POST['gcity'];
                    if(empty($gcity))
                    {
                        $gcityError='Please add guardian city';
                        $valid=false;
                    }
                }
                if(isset($_POST['gmobile']))
                {
                    $gmobile=$_POST['gmobile'];
                    if(empty($gmobile))
                    {
                        $gmobileError='Please add guardian mobile no';
                        $valid=false;
                    }
                }   
                
                

            }

          //  to connect database
    //  if ($valid) {
    //     $pdo = Database::connect();
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sql = "INSERT INTO applicant(ename,mmname,gender) values('$eng_name','$mm_name','$gender')";
    //     $q = $pdo->prepare($sql); 
    //     $q->execute(array($eng_name,$mm_name,$gender));
    //     Database::disconnect();
    //  }
            
            // table1, table2 
            // id primary auto increment, 
            // addressid fk key, email and citizenid unique key, true code
            if(!empty($_POST))
            {   $ename = $_POST['ename'];
                $mmname = $_POST['mmname'];
                $email = $_POST['email'];
                $citizenid = $_POST['citizenid'];
                $addressno = $_POST['addressno'];
                $street = $_POST['street'];

            }
                
            if(isset($_POST['submit'])) {
                $cont = Database::connect();                
                $cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO table2(addressno,street) values('$addressno','$street')";               
                $q = $cont->prepare($sql); 
                $q->execute(array($addressno,$street));
                
                $currentid = Database::currentid();                
                echo "Insertion ID Current ID $currentid";
                
                $sql = "INSERT INTO table1(addressid,ename,email,citizenid) values('$currentid','$ename','$email','$citizenid')";
                $q = $cont->prepare($sql); 
                $q->execute(array($ename,$email,$citizenid));
               
                Database::disconnect();
            }

           


           
           
        ?>
        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="d-flex w-50 order-0">
                <a class="navbar-brand mr-1" href="#">Uni of OXFORD</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon" onclick="dropdownMenu()"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
                <ul class="navbar-nav" id="collapsingList">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME <span class="sr-only">HOME</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Online-Application <span class="sr-only">Online-Application</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Login <span class="sr-only">Login</span></a>
                    </li>

                </ul>
            </div>
            <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"></span>
        </nav>

        <!-- Image -->
        <div>
            <img src="img/boot8.jpg" style="width: 100%;height: 300px;">
        </div>

        <!-- Container Form -->
        <form class="container" action="PhpProjectFormFilling.php" method="POST">

            
                <div class="form-group">
                    <label for="formControlRange">Admission Progress</label>
                    <ol >
                        <li><a>Fill in Application      </a></li>
                        <li><a>Verify Data</a></li>
                        <li><a>Print Application Form</a></li>
                        <li><a>Login</a></li>
                    </ol>
                    <input type="range" class="form-control-range" id="formControlRange">
                </div>
            
            <hr>
            <!-- Applicant Information -->
            <div>
                <h1>Applicant's Information</h1>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label" for="title">Title:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="title" id="title"  >                       
                            <option>---- Select Title ----</option>                            
                            <option <?php if (isset($_POST['title']) && $_POST['title']=="Mr") echo "selected";?> >Mr</option>
                            <option <?php if (isset($_POST['title']) && $_POST['title']=="Ms") echo "selected";?> >Ms</option>
                            <option <?php if (isset($_POST['title']) && $_POST['title']=="Mrs") echo "selected";?> >Mrs</option>                        
                        </select>
                        <?php if (!empty($titleError)): ?>
                        <span class="help-inline"><?php echo $titleError;?></span>
                        <?php endif; ?>
                    </div>
                </div>               

                
            
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" for="ename">Name(ENG):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ename" id="ename" placeholder="Eng Name:" value="<?php if(isset($_POST['ename'])){echo $_POST['ename'];}?>">
                        <?php if (!empty($enameError)): ?>
                        <span class="help-inline"><?php echo $enameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" for="mmname">Name(MM):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mmname" id="mmname" placeholder="Myan Name:" value="<?php if(isset($_POST['mmname'])){echo $_POST['mmname'];}?>">
                        <?php if (!empty($mmnameError)): ?>
                        <span class="help-inline"><?php echo $mmnameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender:</legend>
                    <label class="radio-inline"><input type="radio" name="gender" id="male" <?php if (isset($_POST['gender']) && $_POST['gender']=="Male") echo "checked";?> value="Male" checked> Male</label>
                    <label class="radio-inline"><input type="radio" name="gender" id="female" <?php if (isset($_POST['gender']) && $_POST['gender']=="Female") echo "checked";?> value="Female" > Female</label>
                    <?php if (!empty($genderError)): ?>
                    <span class="help-inline"><?php echo $genderError;?></span>
                    <?php endif; ?>            
                </div>              
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email"  placeholder="Email:" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
                        <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div id="emailcheck">    </div>

                <div id="emailresponse"> </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Syllabus:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="syllabus" id="syllabus">
                            <option>---- Select Syllabus ----</option>
                            <option <?php if (isset($_POST['syllabus']) && $_POST['syllabus']=="Computer Science") echo "selected";?> >Computer Science</option>
                            <option <?php if (isset($_POST['syllabus']) && $_POST['syllabus']=="Computer Technology") echo "selected";?>>Computer Technology</option>  
                            <?php if (!empty($syllabusError)): ?>
                            <span class="help-inline"><?php echo $syllabusError;?></span>
                            <?php endif; ?>                      
                        </select>
                    </div>
                </div>
            
                

            </div>
            <hr>
            <!-- Education -->
            <div>
                <h1>Education</h1>
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Study in:</legend>
                    <label class="radio-inline"><input type="radio" name="studyplace" id="myanmar" <?php if (isset($_POST['studyplace']) && $_POST['studyplace']=="Myanmar") echo "checked";?> value="Myanmar" checked> Myanmar</label>
                    <label class="radio-inline"><input type="radio" name="studyplace" id="abroad" <?php if (isset($_POST['studyplace']) && $_POST['studyplace']=="Abroad") echo "checked";?> value="Abroad"> Abroad</label>
                    
            
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">School:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="school" id="school">
                            <option>---- Select Your School ----</option>
                            <option <?php if (isset($_POST['school']) && $_POST['school']=="Yangon") echo "selected";?> >Yangon</option>
                            <option <?php if (isset($_POST['school']) && $_POST['school']=="Mandalay") echo "selected";?>>Mandalay</option>
                            <option <?php if (isset($_POST['school']) && $_POST['school']=="Bago") echo "selected";?>>Bago</option>
                            <option <?php if (isset($_POST['school']) && $_POST['school']=="Pyin Oo Lwin") echo "selected";?>>Pyin Oo Lwin</option>
                            <?php if (!empty($schoolError)): ?>
                            <span class="help-inline"><?php echo $schoolError;?></span>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Level Of Completion:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="level" id="level">
                            <option>---- Select Your Completion Level ----</option>
                            <option <?php if (isset($_POST['level']) && $_POST['level']=="Grade 11") echo "selected";?>>Grade 11</option>
                            <option <?php if (isset($_POST['level']) && $_POST['level']=="Bachelor") echo "selected";?>>Bachelor</option>
                            <option <?php if (isset($_POST['level']) && $_POST['level']=="Master") echo "selected";?>>Master</option>   
                            <?php if (!empty($levelError)): ?>
                            <span class="help-inline"><?php echo $levelError;?></span>
                            <?php endif; ?>                     
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Major:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="major" id="major" >
                            <option>---- Select Major ----</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Computer Science") echo "selected";?>>Computer Science</option>                       
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Bio") echo "selected";?>>Bio</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Myanmar") echo "selected";?>>Myanmar</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="English") echo "selected";?>>English</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Math") echo "selected";?>>Math</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Physics") echo "selected";?>>Physics</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Chemistry") echo "selected";?>>Chemistry</option>
                            <?php if (!empty($majorError)): ?>
                            <span class="help-inline"><?php echo $majorError;?></span>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>           
                

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Marks</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mark" id="mark" placeholder="Enter Your Marks" value="<?php if(isset($_POST['mark'])){echo $_POST['mark'];}?>">
                        <?php if (!empty($markError)): ?>
                        <span class="help-inline"><?php echo $markError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <hr>
            <!-- Personal Detail -->
            <div>
                <h1>Personal Details</h1>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Birthdate:</label>
                    <div class="col">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Jan</option>
                            <option>Feb</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>Jun</option>
                            <option>July</option>
                            <option>Aug</option>
                            <option>Sep</option>
                            <option>Oct</option>
                            <option>Nov</option>
                            <option>Dec</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Jan</option>
                            <option>Feb</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>Jun</option>
                            <option>July</option>
                            <option>Aug</option>
                            <option>Sep</option>
                            <option>Oct</option>
                            <option>Nov</option>
                            <option>Dec</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Jan</option>
                            <option>Feb</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>Jun</option>
                            <option>July</option>
                            <option>Aug</option>
                            <option>Sep</option>
                            <option>Oct</option>
                            <option>Nov</option>
                            <option>Dec</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="nationality" id="nationality">
                            <option values>---- Select Nationality ----</option>
                            <option <?php if (isset($_POST['nationality']) && $_POST['nationality']=="Kachin") echo "selected";?>>Kachin</option>
                            <option <?php if (isset($_POST['nationality']) && $_POST['nationality']=="Kayah") echo "selected";?>>Kayah</option>
                            <option <?php if (isset($_POST['nationality']) && $_POST['nationality']=="Kayin") echo "selected";?>>Kayin</option>
                            <option <?php if (isset($_POST['nationality']) && $_POST['nationality']=="Chin") echo "selected";?>>Chin</option>
                            <option <?php if (isset($_POST['nationality']) && $_POST['nationality']=="Mon") echo "selected";?>>Mon</option>
                            <option <?php if (isset($_POST['nationality']) && $_POST['nationality']=="Burma") echo "selected";?>>Burma</option>
                            <option <?php if (isset($_POST['nationality']) && $_POST['nationality']=="Rachine") echo "selected";?>>Rachine</option>
                            <option <?php if (isset($_POST['nationality']) && $_POST['nationality']=="Shan") echo "selected";?>>Shan</option>                       
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Religion:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="religion" id="religion">
                            <option value="">---- Select Religion ----</option>
                            <option <?php if (isset($_POST['religion']) && $_POST['religion']=="Buddhism") echo "selected";?>>Buddhism</option>
                            <option <?php if (isset($_POST['religion']) && $_POST['religion']=="Hinduism") echo "selected";?>>Hinduism</option>
                            <option <?php if (isset($_POST['religion']) && $_POST['religion']=="Islam") echo "selected";?>>Islam</option>
                            <option <?php if (isset($_POST['religion']) && $_POST['religion']=="Confucianism") echo "selected";?>>Confucianism</option>
                            <option <?php if (isset($_POST['religion']) && $_POST['religion']=="Christianity") echo "selected";?>>Christianity</option>
                            <option <?php if (isset($_POST['religion']) && $_POST['religion']=="Taoism") echo "selected";?>>Taoism</option>
                            <option <?php if (isset($_POST['religion']) && $_POST['religion']=="Judaism") echo "selected";?>>Judaism</option>                       
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Blood Group:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="bloodgroup" id="bloodgroup">
                            <option value="">---- Select Blood Group ----</option>
                            <option <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="A") echo "selected";?>>A</option>
                            <option <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="B") echo "selected";?>>B</option>                       
                            <option <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="AB") echo "selected";?>>AB</option>
                            <option <?php if (isset($_POST['bloodgroup']) && $_POST['bloodgroup']=="O") echo "selected";?>>O</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Citizenship:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="citizenship" id="citizenship">
                            <option value="">---- Select Citizenship ----</option>
                            <option <?php if (isset($_POST['citizenship']) && $_POST['citizenship']=="Myanmar") echo "selected";?>>Myanmar</option>
                            <option <?php if (isset($_POST['citizenship']) && $_POST['citizenship']=="American") echo "selected";?>>American</option>
                            <option <?php if (isset($_POST['citizenship']) && $_POST['citizenship']=="Other") echo "selected";?>>Other</option>                       
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Citizen ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="citizenid" id="citizenid"  placeholder="Citizen ID:" value="<?php if(isset($_POST['citizenid'])){echo $_POST['citizenid'];}?>">
                        <?php if (!empty($citizenidError)): ?>
                        <span class="help-inline"><?php echo $citizenidError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div id="citizenidcheck">   </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">if not Myan please insert Passport No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="passportid" id="passportid" placeholder="Passport No:" value="<?php if(isset($_POST['passportid'])){echo $_POST['passportid'];}?>">
                    </div>
                </div>
            </div>

            <hr>
            <!-- Mailing Address -->
            <div>
                <h1>Mailing Address</h1>    

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="addressno" id="addressno" value="<?php if(isset($_POST['addressno'])){echo $_POST['addressno'];}?>" placeholder="Address No:">
                        <?php if (!empty($addressnoError)): ?>
                        <span class="help-inline"><?php echo $addressnoError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Street:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="street" id="street" value="<?php if(isset($_POST['street'])){echo $_POST['street'];}?>" placeholder="Street:">
                        <?php if (!empty($streetError)): ?>
                        <span class="help-inline"><?php echo $streetError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Township:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="township" id="township" value="<?php if(isset($_POST['township'])){echo $_POST['township'];}?>" placeholder="Township:">
                        <?php if (!empty($townshipError)): ?>
                        <span class="help-inline"><?php echo $townshipError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">City:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="city" id="city">
                            <option <?php if (isset($_POST['city']) && $_POST['city']=="1") echo "selected";?>>1</option>
                            <option <?php if (isset($_POST['city']) && $_POST['city']=="2") echo "selected";?>>2</option>
                            <option <?php if (isset($_POST['city']) && $_POST['city']=="3") echo "selected";?>>3</option>
                            <option <?php if (isset($_POST['city']) && $_POST['city']=="4") echo "selected";?>>4</option>
                            <option <?php if (isset($_POST['city']) && $_POST['city']=="5") echo "selected";?>>5</option>
                            <?php if (!empty($cityError)): ?>
                            <span class="help-inline"><?php echo $cityError;?></span>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="zipcode" id="zipcode" value="<?php if(isset($_POST['zipcode'])){echo $_POST['zipcode'];}?>" placeholder="Zip Code:">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telephone" id="telephone" value="<?php if(isset($_POST['telephone'])){echo $_POST['telephone'];}?>" placeholder="Telephone:">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mobile" id="mobile" value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];}?>" placeholder="Mobile:">
                        <?php if (!empty($mobileError)): ?>
                        <span class="help-inline"><?php echo $mobileError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Fax:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fax" id="fax" value="<?php if(isset($_POST['fax'])){echo $_POST['fax'];}?>" placeholder="Fax:">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Facebook:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="facebook" id="facebook" value="<?php if(isset($_POST['facebook'])){echo $_POST['facebook'];}?>" placeholder="Facebook:">
                    </div>
                </div>
            </div>

            <hr>
            <!-- Father Information -->
            <div>
                <h1>Father's Information</h1>                

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name(TH):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fname" id="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" placeholder="Name">
                        <?php if (!empty($fnameError)): ?>
                        <span class="help-inline"><?php echo $fnameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="fnationality" id="fnationality">
                        <option values>---- Select Nationality ----</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Kachin") echo "selected";?>>Kachin</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Kayah") echo "selected";?>>Kayah</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Kayin") echo "selected";?>>Kayin</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Chin") echo "selected";?>>Chin</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Mon") echo "selected";?>>Mon</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Burma") echo "selected";?>>Burma</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Rachine") echo "selected";?>>Rachine</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Shan") echo "selected";?>>Shan</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <label class="radio-inline"><input type="radio" name="fstatus" id="fliving" <?php if (isset($_POST['fstatus']) && $_POST['fstatus']=="fliving") echo "checked";?> value="fliving" >  fliving</label>
                    <label class="radio-inline"><input type="radio" name="fstatus" id="fdecesed" <?php if (isset($_POST['fstatus']) && $_POST['fstatus']=="fdecesed") {echo "checked"; } ?> value="fdecesed" checked > fdecesed</label>

                </div>

            <!-- live decese show (or) hide -->
            <div class="showorhide" id="showorhide" style="display:none;">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Age:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fage" id="fage" placeholder="Age">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Occupation:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="foccupation" id="foccupation" placeholder="Occupation">
                    </div>
                </div>

                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Father Address:</legend>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="fsameaddress" id="fsameaddress">
                        <label class="form-check-label" for="fsameaddress">
                            Same as Applicant Address
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="faddressno" id="faddressno" placeholder="Address No:">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fstreet" id="fstreet" placeholder="Street">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Township</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ftownship" id="ftownship" placeholder="Township">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fzipcode" id="fzipcode" placeholder="Zip Code">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ftelephone" id="ftelephone" placeholder="Telephone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fmobile" id="fmobile" placeholder="Mobile">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fcity" id="fcity" placeholder="City">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="femail" id="femail" placeholder="Email:">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fposition" id="fposition" placeholder="Position">
                    </div>
                </div>
            </div>

                
            
                
                <div id="fatherliving">
                            
                </div>
                
            </div>
            <hr>


            <!-- Mother Information -->
            <div>
                <h1>Mother's Information</h1>                

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mname" id="mname" value="<?php if(isset($_POST['mname'])){echo $_POST['mname'];}?>" placeholder="Name">
                        <?php if (!empty($mnameError)): ?>
                        <span class="help-inline"><?php echo $mnameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="mnationality" id="mnationality">
                        <option values>---- Select Nationality ----</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Kachin") echo "selected";?>>Kachin</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Kayah") echo "selected";?>>Kayah</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Kayin") echo "selected";?>>Kayin</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Chin") echo "selected";?>>Chin</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Mon") echo "selected";?>>Mon</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Burma") echo "selected";?>>Burma</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Rachine") echo "selected";?>>Rachine</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Shan") echo "selected";?>>Shan</option>
                        </select>
                    </div>
                </div>



                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <label class="radio-inline"><input type="radio" name="mstatus" id="mliving" value="mliving" > Living</label>
                    <label class="radio-inline"><input type="radio" name="mstatus" id="mdecesed" value="mdecesed" checked> Deceased</label>

                </div>
                
                <!-- mother live or decese show or hide -->
            <div class="mshoworhide" id="mshoworhide" style="display:none;">

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Age:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mage" id="mage" placeholder="Year">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Occupation:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="moccupation" id="moccupation" placeholder="Occupation">
                    </div>
                </div>

                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Mother Address:</legend>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="msameaddress" id="msameaddress">
                        <label class="form-check-label" for="autoSizingCheck">
                            Same as Applicant Address
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="maddressno" id="maddressno" placeholder="Address No:">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mstreet" id="mstreet" placeholder="Street">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Township</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mtownship" id="mtownship" placeholder="Township">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mzipcode" id="mzipcode" placeholder="Zip Code">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mtelephone" id="mtelephone" placeholder="Telephone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mmobile" id="mmobile" placeholder="Mobile">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mcity" id="mcity" placeholder="City">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="memail" id="memail" placeholder="Email:">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mposition" id="mposition" placeholder="Position">
                    </div>
                </div>
                
                </div>

                <div id="motherliving"></div>

                
            </div>

            <hr>
            <!-- Guardian Status -->
            <div>
                <h1>Guardian's Information</h1>
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Guardian is:</legend>
                    <label class="radio-inline"><input type="radio" name="gstatus" value="father" id="father"  checked>Father</label>
                    <label class="radio-inline"><input type="radio" name="gstatus" value="mother" id="mother">Mother</label>
                    <label class="radio-inline"><input type="radio" name="gstatus" value="other" id="other" >Other</label>

                </div>

            </div>
            <hr>

            <!-- other show or hide -->
            <div class="othershoworhide" id="othershoworhide" style="display:none;">
                <h1>Guardian Information</h1>                

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gname" id="gname" placeholder="Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="gnationality" id="gnationality">
                        <option values>---- Select Nationality ----</option>
                            <option value="Kachin">Kachin</option>
                            <option value="Kayah">Kayah</option>
                            <option value="Kayin">Kayin</option>
                            <option value="Chin">Chin</option>
                            <option value="Mon">Mon</option>
                            <option value="Burma">Burma</option>
                            <option value="Rachine">Rachine</option>
                            <option value="Shan">Shan</option>
                        </select>
                    </div>
                </div>



                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <label class="radio-inline"><input type="radio" name="gstatus" id="gliving" checked> Living</label>
                    <label class="radio-inline"><input type="radio" name="gstatus" id="gdecesed"> Deceased</label>

                </div>
                
                <!-- Guardian live or decesed -->
                <div class="gshoworhide" id="gshoworhide">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Age:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gage" id="gage" placeholder="Year">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Occupation:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="goccupation" id="goccupation" placeholder="Occupation">
                    </div>
                </div>

                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Guardian Address:</legend>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="gsameaddress" id="gsameaddress">
                        <label class="form-check-label" for="autoSizingCheck">
                            Same as Applicant Address
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address No:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gaddressno" id="gaddressno" placeholder="Address No:">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gstreet" id="gstreet" placeholder="Street">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Township</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gtownship" id="gtownship" placeholder="Township">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gzipcode" id="gzipcode" placeholder="Zip Code">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gtelephone" id="gtelephone" placeholder="Telephone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gmobile" id="gmobile" placeholder="Mobile">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gcity" id="gcity" placeholder="City">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gemail" id="gemail" placeholder="Email:">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="gposition" id="gposition" placeholder="Position">
                    </div>
                </div>      
                
                </div>
                
            
            </div>

            <!-- Guardian Information -->
            <div id="guardianInfo"></div>
            <hr>

            <!-- Submit Button -->
            <div>
                <input type="submit"  name="submit" id="submit" value="Submit" >
                <input type="reset" name="reset" id="reset" value="reset">
            </div>
        </form>

        <!-- Footer -->
        <div class="footer-copyright text-center py-3" style="background-color: gray;">© 2020 Copyright:
            <a href="https://www.google.com" style="color: white;"> khinthida.lkw@gmail.com </a>
        </div>


             
            
            
        
            
        
        <script>
                $(document).ready(function(){

                  
                    $('#fliving').on('change', function () {
                    $("#showorhide").show();
                    });

                    $('#fdecesed').on('change', function () {
                    $("#showorhide").hide();
                    });

                    $('#mliving').on('change', function () {
                    $("#mshoworhide").show();
                    });

                    $('#mdecesed').on('change', function () {
                    $("#mshoworhide").hide();
                    });

                    $('#father').on('change', function () {
                    $("#othershoworhide").hide();
                    });

                    $('#mother').on('change', function () {
                    $("#othershoworhide").hide();
                    });

                    $('#other').on('change', function () {
                    $("#othershoworhide").show();
                    });

                    $('#gliving').on('change', function () {
                    $("#gshoworhide").show();
                    });

                    $('#gdecesed').on('change', function () {
                    $("#gshoworhide").hide();
                    });

                    $("#fsameaddress").click(copyData1);
                        function copyData1()
                        {
                        var addressno = $("#addressno").val();
                        var street = $("#street").val();
                        var township = $("#township").val();

                        if (this.checked==true)
                            $("#faddressno").val(addressno);
                            $("#fstreet").val(street);
                            $("#ftownship").val(township);

                        } 

                        $("#msameaddress").click(copyData2);
                        function copyData2()
                        {
                        var addressno = $("#addressno").val();
                        var street = $("#street").val();
                        var township = $("#township").val();

                        if (this.checked==true)
                            $("#maddressno").val(addressno);
                            $("#mstreet").val(street);
                            $("#mtownship").val(township);

                        } 

                        $("#gsameaddress").click(copyData3);
                        function copyData3()
                        {
                        var addressno = $("#addressno").val();
                        var street = $("#street").val();
                        var township = $("#township").val();

                        if (this.checked==true)
                            $("#gaddressno").val(addressno);
                            $("#gstreet").val(street);
                            $("#gtownship").val(township);

                        } 

                        $("#email").keyup(function(){

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
                            }else{
                            $("#emailcheck").html("");
                            }

                            });

                            $("#citizenid").keyup(function(){

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
                            }else{
                            $("#citizenidcheck").html("");
                            }

                            });

                       


                // $('#other').on('change', function () {

                //     var gstatus = $(this).val();
                //     console.log(gstatus);

                    
                //     $.ajax({
                //         type: "POST",
                //         url: "GuardianInformation.php",
                //         // dataType: 'json',
                //         data: {'gstatus': gstatus },
                //         success: function (html) {
                            
                //             console.log(html);
                //             $('#guardianInfo').html(html);
                            
                        
                //         }
                //     });
                // });


                // $('#father').on('change', function () {
                // var gstatus = $(this).val();
                // console.log(gstatus);

                // $.ajax({
                //     type: "POST",
                //     url: "GuardianInformation.php",
                //     // dataType: 'json',
                //     data: {'gstatus': gstatus },
                //     success: function (json) {
                        
                //         console.log(json);
                //         $('#guardianInfo').html(json);                        
                    
                //     }
                // });
                // });

                // $('#mother').on('change', function () {
                // var gstatus = $(this).val();
                // console.log(gstatus);


                // $.ajax({
                //     type: "POST",
                //     url: "GuardianInformation.php",
                //     // dataType: 'json',
                //     data: {'gstatus': gstatus },
                //     success: function (json) {
                        
                //         console.log(json);
                //         $('#guardianInfo').html(json);
                        
                    
                //     }
                // });
                // });



                    // $('#mliving').on('change', function () {

                    // var mstatus = $(this).val();
                    // console.log(mstatus);


                    // $.ajax({
                    //     type: "POST",
                    //     url: "mliveordecese.php",
                    //     // dataType: 'json',
                    //     data: {'mstatus': mstatus },
                    //     success: function (html) {
                            
                    //         console.log(html);
                    //         $('#motherliving').html(html);
                            
                        
                    //     }
                    // });
                    // });


                    // $('#mdecesed').on('change', function () {

                    // var mstatus = $(this).val();
                    // console.log(mstatus);


                    // $.ajax({
                    // type: "POST",
                    // url: "mliveordecese.php",
                    // // dataType: 'json',
                    // data: {'mstatus': mstatus },
                    // success: function (json) {                        
                    //     console.log(json);
                    //     $('#motherliving').html(json);
                    // }
                    // });
                    // }); 



                    // $('#fliving').on('change', function () {

                    // var fstatus = $(this).val();
                    // console.log(fstatus);


                    // $.ajax({
                    //     type: "POST",
                    //     url: "fliveordecese.php",
                    //     // dataType: 'json',
                    //     data: {'fstatus': fstatus },
                    //     success: function (html) {
                            
                    //         console.log(html);
                    //         $('#fatherliving').html(html);
                            
                        
                    //     }
                    // });
                    // });


                    // $('#fdecesed').on('change', function () {

                    // var fstatus = $(this).val();
                    // console.log(fstatus);


                    // $.ajax({
                    // type: "POST",
                    // url: "fliveordecese.php",
                    // // dataType: 'json',
                    // data: {'fstatus': fstatus },
                    // success: function (json) {
                        
                    //     console.log(json);
                    //     $('#fatherliving').html(json);                       

                    // }
                    // });
                    // });

                      // $('#submit').click(function () {
                    //     if (isset($_POST['fstatus']) && $_POST['fstatus']=="fliving"){
                    //         $("#showorhide").show();
                    //     }  
                    //     else if (isset($_POST['fstatus']) && $_POST['fstatus']=="fdecesed"){
                    //         $("#showorhide").hide();
                    //     }                    
                    // });
                
                                    


            });

           

                
        </script>
    </body>
</html>