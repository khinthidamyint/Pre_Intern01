
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
        <script src="readyEvent.js"></script>

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
      <?php include_once 'getData.php';    ?>                                                         
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
            <img src="house.jpg" style="width: 100%;height: 300px;">
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
                    <label  class="col-sm-2 col-form-label" for="title">Title:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="title" id="title" >                       
                            <option></option>                            
                            <option <?php if (isset($_POST['title']) && $_POST['title']=="Mr") echo "selected";?> >Mr</option>
                            <option <?php if (isset($_POST['title']) && $_POST['title']=="Ms") echo "selected";?> >Ms</option>
                            <option <?php if (isset($_POST['title']) && $_POST['title']=="Mrs") echo "selected";?> >Mrs</option>                        
                        </select>
                        <?php if (!empty($titleError)): ?>
                        <span style='color: red;' class="help-inline"><?php echo $titleError;?></span>
                        <?php endif; ?>
                        
                    </div>
                </div>               

                
            
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" for="ename">Name(ENG):<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ename" id="ename"  value="<?php if(isset($_POST['ename'])){echo $_POST['ename'];}?>">
                        <?php if (!empty($enameError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $enameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" for="mmname">Name(MM):<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mmname" id="mmname"  value="<?php if(isset($_POST['mmname'])){echo $_POST['mmname'];}?>">
                        <?php if (!empty($mmnameError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $mmnameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender:<span class="help-inline">  ***</span></legend>
                    <label class="radio-inline"><input type="radio" name="gender" id="male" <?php if (isset($_POST['gender']) && $_POST['gender']=="M") echo "checked";?> value="M" > Male</label>
                    <label class="radio-inline"><input type="radio" name="gender" id="female" <?php if (isset($_POST['gender']) && $_POST['gender']=="F") echo "checked";?> value="F" > Female</label>
                    <?php if (!empty($genderError)): ?>
                        <span style='color: red;' class="help-inline"><?php echo $genderError;?></span>
                    <?php endif; ?>            
                </div>              
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label" for="email">Email:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email"   value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
                        <?php if (!empty($emailError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $emailError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div id="emailcheck">    </div>

                <div id="emailresponse"> </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Syllabus:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="syllabus" id="syllabus">
                            <option></option>
                            <option <?php if (isset($_POST['syllabus']) && $_POST['syllabus']=="Computer Science") echo "selected";?> >Computer Science</option>
                            <option <?php if (isset($_POST['syllabus']) && $_POST['syllabus']=="Computer Technology") echo "selected";?>>Computer Technology</option>  
                                                  
                        </select>
                        <?php if (!empty($syllabusError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $syllabusError;?></span>
                            <?php endif; ?>
                    </div>
                </div>
            
                

            </div>
            <hr>
            <!-- Education -->
            <div>
                <h1>Education</h1>
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Study in:<span class="help-inline">  ***</span></legend>
                    <label class="radio-inline"><input type="radio" name="studyplace" id="myanmar" <?php if (isset($_POST['studyplace']) && $_POST['studyplace']=="Myanmar") echo "checked";?> value="Myanmar" > Myanmar</label>
                    <label class="radio-inline"><input type="radio" name="studyplace" id="abroad" <?php if (isset($_POST['studyplace']) && $_POST['studyplace']=="Abroad") echo "checked";?> value="Abroad"> Abroad</label>
                    
            
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">School:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="school" id="school">
                            <option></option>
                            <option <?php if (isset($_POST['school']) && $_POST['school']=="Yangon") echo "selected";?> >Yangon</option>
                            <option <?php if (isset($_POST['school']) && $_POST['school']=="Mandalay") echo "selected";?>>Mandalay</option>
                            <option <?php if (isset($_POST['school']) && $_POST['school']=="Bago") echo "selected";?>>Bago</option>
                            <option <?php if (isset($_POST['school']) && $_POST['school']=="Pyin Oo Lwin") echo "selected";?>>Pyin Oo Lwin</option>
                            
                        </select>
                        <?php if (!empty($schoolError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $schoolError;?></span>
                            <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Level Of Completion:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="level" id="level">
                            <option></option>
                            <option <?php if (isset($_POST['level']) && $_POST['level']=="Grade 11") echo "selected";?>>Grade 11</option>
                            <option <?php if (isset($_POST['level']) && $_POST['level']=="Bachelor") echo "selected";?>>Bachelor</option>
                            <option <?php if (isset($_POST['level']) && $_POST['level']=="Master") echo "selected";?>>Master</option>   
                                                 
                        </select>
                        <?php if (!empty($levelError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $levelError;?></span>
                            <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Major:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="major" id="major" >
                            <option></option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Computer Science") echo "selected";?>>Computer Science</option>                       
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Bio") echo "selected";?>>Bio</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Myanmar") echo "selected";?>>Myanmar</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="English") echo "selected";?>>English</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Math") echo "selected";?>>Math</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Physics") echo "selected";?>>Physics</option>
                            <option <?php if (isset($_POST['major']) && $_POST['major']=="Chemistry") echo "selected";?>>Chemistry</option>
                            
                        </select>
                        <?php if (!empty($majorError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $majorError;?></span>
                            <?php endif; ?>
                    </div>
                </div>           
                

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Marks:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mark" id="mark"  value="<?php if(isset($_POST['mark'])){echo $_POST['mark'];}?>">
                        <?php if (!empty($markError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $markError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <hr>
            <!-- Personal Detail -->
            <div>
                <h1>Personal Details</h1>
                <div class="form-group row">
                <label class="control-label col-md-2" for="birthdate">Birthdate</label>
                    <div class="controls col-md-4">
                    <input type="date" id="birthdate" name="birthdate">                            
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="nationality" id="nationality">
                            <option values></option>
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
                            <option value=""></option>
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
                            <option value=""></option>
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
                            <option value=""></option>
                            <option <?php if (isset($_POST['citizenship']) && $_POST['citizenship']=="Myanmar") echo "selected";?>>Myanmar</option>
                            <option <?php if (isset($_POST['citizenship']) && $_POST['citizenship']=="American") echo "selected";?>>American</option>
                            <option <?php if (isset($_POST['citizenship']) && $_POST['citizenship']=="Other") echo "selected";?>>Other</option>                       
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Citizen ID:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="citizenid" id="citizenid"   value="<?php if(isset($_POST['citizenid'])){echo $_POST['citizenid'];}?>">
                        <?php if (!empty($citizenidError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $citizenidError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div id="citizenidcheck">   </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">if not Myan please insert Passport No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="passportid" id="passportid"  value="<?php if(isset($_POST['passportid'])){echo $_POST['passportid'];}?>">
                    </div>
                </div>
            </div>

            <hr>
            <!-- Mailing Address -->
            <div>
                <h1>Mailing Address</h1>    

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address No:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="addressno" id="addressno" value="<?php if(isset($_POST['addressno'])){echo $_POST['addressno'];}?>" >
                        <?php if (!empty($addressnoError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $addressnoError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Street:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="street" id="street" value="<?php if(isset($_POST['street'])){echo $_POST['street'];}?>" >
                        <?php if (!empty($streetError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $streetError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Township:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="township" id="township" value="<?php if(isset($_POST['township'])){echo $_POST['township'];}?>" >
                        <?php if (!empty($townshipError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $townshipError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">City:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="city" id="city" value="<?php if(isset($_POST['city'])){echo $_POST['city'];}?>" >
                        <?php if (!empty($cityError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $cityError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="zipcode" id="zipcode" value="<?php if(isset($_POST['zipcode'])){echo $_POST['zipcode'];}?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="telephone" id="telephone" value="<?php if(isset($_POST['telephone'])){echo $_POST['telephone'];}?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mobile" id="mobile" value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];}?>" >
                        <?php if (!empty($mobileError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $mobileError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Fax:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fax" id="fax" value="<?php if(isset($_POST['fax'])){echo $_POST['fax'];}?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Facebook:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="facebook" id="facebook" value="<?php if(isset($_POST['facebook'])){echo $_POST['facebook'];}?>" >
                    </div>
                </div>
            </div>

            <hr>
            <!-- Father Information -->
            <div>
                <h1>Father's Information</h1>                

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name(TH):<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fname" id="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" >
                        <?php if (!empty($fnameError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $fnameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="fnationality" id="fnationality">
                        <option values></option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Kachin") echo "selected";?>>Kachin</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Kayah") echo "selected";?>>Kayah</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Kayin") echo "selected";?>>Kayin</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Chin") echo "selected";?>>Chin</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Mon") echo "selected";?>>Mon</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Burma") echo "selected";?>>Burma</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Rachine") echo "selected";?>>Rachine</option>
                            <option <?php if (isset($_POST['fnationality']) && $_POST['fnationality']=="Shan") echo "selected";?>>Shan</option>
                        </select>
                        <?php if (!empty($fnationalityError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $fnationalityError;?></span>
                            <?php endif; ?>
                    </div>
                </div>

                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <label class="radio-inline"><input type="radio" name="fstatus" id="fliving"   <?php if (isset($_POST['fstatus']) && $_POST['fstatus']=="fliving") echo "checked";?> value="fliving">  fliving</label>
                    <label class="radio-inline"><input type="radio" name="fstatus" id="fdecesed" <?php if (isset($_POST['fstatus']) && $_POST['fstatus']=="fdecesed") echo "checked";?> value="fdecesed"  > fdecesed</label>

                </div>

            <!-- live decese show (or) hide -->
           
            
                <div class="showorhide" id="showorhide" >
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Age:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fage" id="fage"  value="<?php if(isset($_POST['fage'])){echo $_POST['fage'];}?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Occupation:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="foccupation" id="foccupation" value="<?php if(isset($_POST['foccupation'])){echo $_POST['foccupation'];}?>">
                        </div>

                    </div>

                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Father Address:</legend>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" name="fsameaddress" id="fsameaddress"  <?php if(isset($_POST['fsameaddress'])) echo "checked='checked'"; ?>  >
                            <label class="form-check-label" for="fsameaddress">
                                Same as Applicant Address
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Address No:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="faddressno" id="faddressno"  value="<?php if(isset($_POST['faddressno'])){echo $_POST['faddressno'];}?>">
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Street</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fstreet" id="fstreet"  value="<?php if(isset($_POST['fstreet'])){echo $_POST['fstreet'];}?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Township:<span class="help-inline">  ***</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ftownship" id="ftownship"  value="<?php if(isset($_POST['ftownship'])){echo $_POST['ftownship'];}?>">
                            <?php if (!empty($ftownshipError)): ?>
                                <span style='color: red;' class="help-inline"><?php echo $ftownshipError;?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fzipcode" id="fzipcode"  value="<?php if(isset($_POST['fzipcode'])){echo $_POST['fzipcode'];}?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ftelephone" id="ftelephone"  value="<?php if(isset($_POST['ftelephone'])){echo $_POST['ftelephone'];}?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile:<span class="help-inline">  ***</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fmobile" id="fmobile"  value="<?php if(isset($_POST['fmobile'])){echo $_POST['fmobile'];}?>">
                            <?php if (!empty($fmobileError)): ?>
                                <span style='color: red;' class="help-inline"><?php echo $fmobileError;?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">City:<span class="help-inline">  ***</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fcity" id="fcity"  value="<?php if(isset($_POST['fcity'])){echo $_POST['fcity'];}?>">
                            <?php if (!empty($fcityError)): ?>
                                <span style='color: red;' class="help-inline"><?php echo $fcityError;?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="femail" id="femail" value="<?php if(isset($_POST['femail'])){echo $_POST['femail'];}?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="fposition" id="fposition"  value="<?php if(isset($_POST['fposition'])){echo $_POST['fposition'];}?>">
                        </div>
                    </div>
                </div>

           
                
                
            </div>
            <hr>


            <!-- Mother Information -->
            <div>
                <h1>Mother's Information</h1>                

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mname" id="mname" value="<?php if(isset($_POST['mname'])){echo $_POST['mname'];}?>" >
                        <?php if (!empty($mnameError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $mnameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="mnationality" id="mnationality">
                        <option values></option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Kachin") echo "selected";?>>Kachin</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Kayah") echo "selected";?>>Kayah</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Kayin") echo "selected";?>>Kayin</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Chin") echo "selected";?>>Chin</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Mon") echo "selected";?>>Mon</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Burma") echo "selected";?>>Burma</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Rachine") echo "selected";?>>Rachine</option>
                            <option <?php if (isset($_POST['mnationality']) && $_POST['mnationality']=="Shan") echo "selected";?>>Shan</option>
                        </select>
                        <?php if (!empty($mnationalityError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $mnationalityError;?></span>
                        <?php endif; ?>
                    </div>
                </div>



                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <label class="radio-inline"><input type="radio" name="mstatus" id="mliving" <?php if (isset($_POST['mstatus']) && $_POST['mstatus']=="mliving") echo "checked";?> value="mliving" > Living</label>
                    <label class="radio-inline"><input type="radio" name="mstatus" id="mdecesed" <?php if (isset($_POST['mstatus']) && $_POST['mstatus']=="mdecesed") echo "checked";?> value="mdecesed" > Deceased</label>

                </div>
                
                <!-- mother live or decese show or hide -->
            <div class="mshoworhide" id="mshoworhide" style="display:none;">

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Age:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mage" id="mage"  value="<?php if(isset($_POST['mage'])){echo $_POST['mage'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Occupation:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="moccupation" id="moccupation"  value="<?php if(isset($_POST['moccupation'])){echo $_POST['moccupation'];}?>">
                    </div>
                </div>

                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Mother Address:</legend>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="msameaddress" id="msameaddress" <?php if(isset($_POST['msameaddress'])) echo "checked='checked'"; ?>>
                        <label class="form-check-label" for="autoSizingCheck">
                            Same as Applicant Address
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="maddressno" id="maddressno"  value="<?php if(isset($_POST['maddressno'])){echo $_POST['maddressno'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mstreet" id="mstreet"  value="<?php if(isset($_POST['mstreet'])){echo $_POST['mstreet'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Township:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mtownship" id="mtownship"  value="<?php if(isset($_POST['mtownship'])){echo $_POST['mtownship'];}?>">
                        <?php if (!empty($mtownshipError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $mtownshipError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mzipcode" id="mzipcode"  value="<?php if(isset($_POST['mzipcode'])){echo $_POST['mzipcode'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mtelephone" id="mtelephone"  value="<?php if(isset($_POST['mtelephone'])){echo $_POST['mtelephone'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mmobile" id="mmobile"  value="<?php if(isset($_POST['mmobile'])){echo $_POST['mmobile'];}?>">
                        <?php if (!empty($mmobileError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $mmobileError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">City:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mcity" id="mcity"  value="<?php if(isset($_POST['mcity'])){echo $_POST['mcity'];}?>">
                        <?php if (!empty($mcityError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $mcityError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="memail" id="memail"  value="<?php if(isset($_POST['memail'])){echo $_POST['memail'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mposition" id="mposition"  value="<?php if(isset($_POST['mposition'])){echo $_POST['mposition'];}?>">
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
                    <label class="radio-inline"><input type="radio" name="fmostatus" id="father" <?php if (isset($_POST['fmostatus']) && $_POST['fmostatus']=="father") echo "checked";?> value="father" >Father</label>
                    <label class="radio-inline"><input type="radio" name="fmostatus" id="mother" <?php if (isset($_POST['fmostatus']) && $_POST['fmostatus']=="mother") echo "checked";?> value="mother">Mother</label>
                    <label class="radio-inline"><input type="radio" name="fmostatus" id="other" <?php if (isset($_POST['fmostatus']) && $_POST['fmostatus']=="other") echo "checked";?> value="other">Other</label>

                </div>

            </div>
            <hr>

            <!-- other show or hide -->
            <div class="othershoworhide" id="othershoworhide" style="display:none;">
                <h1>Guardian Information</h1>                

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gname" id="gname"  value="<?php if(isset($_POST['gname'])){echo $_POST['gname'];}?>">
                        <?php if (!empty($gnameError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $gnameError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nationality:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <select class="form-control" name="gnationality" id="gnationality">
                        <option values></option>
                            <option <?php if (isset($_POST['gnationality']) && $_POST['gnationality']=="Kachin") echo "selected";?>>Kachin</option>
                            <option <?php if (isset($_POST['gnationality']) && $_POST['gnationality']=="Kayah") echo "selected";?>>Kayah</option>
                            <option <?php if (isset($_POST['gnationality']) && $_POST['gnationality']=="Kayin") echo "selected";?>>Kayin</option>
                            <option <?php if (isset($_POST['gnationality']) && $_POST['gnationality']=="Chin") echo "selected";?>>Chin</option>
                            <option <?php if (isset($_POST['gnationality']) && $_POST['gnationality']=="Mon") echo "selected";?>>Mon</option>
                            <option <?php if (isset($_POST['gnationality']) && $_POST['gnationality']=="Burma") echo "selected";?>>Burma</option>
                            <option <?php if (isset($_POST['gnationality']) && $_POST['gnationality']=="Rachine") echo "selected";?>>Rachine</option>
                            <option <?php if (isset($_POST['gnationality']) && $_POST['gnationality']=="Shan") echo "selected";?>>Shan</option>
                        </select>
                        <?php if (!empty($gnationalityError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $gnationalityError;?></span>
                        <?php endif; ?>
                    </div>
                </div>



                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <label class="radio-inline"><input type="radio" name="gstatus" id="gliving" <?php if (isset($_POST['gstatus']) && $_POST['gstatus']=="gliving") echo "checked";?> value="gliving"> Living</label>
                    <label class="radio-inline"><input type="radio" name="gstatus" id="gdecesed" <?php if (isset($_POST['gstatus']) && $_POST['gstatus']=="gdecesed") echo "checked";?> value="gdecesed"> Deceased</label>

                </div>
                
                <!-- Guardian live or decesed -->
                <div class="gshoworhide" id="gshoworhide" style="display:none;">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Age:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gage" id="gage"  value="<?php if(isset($_POST['gage'])){echo $_POST['gage'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Occupation:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="goccupation" id="goccupation"  value="<?php if(isset($_POST['goccupation'])){echo $_POST['goccupation'];}?>">
                    </div>
                </div>

                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Guardian Address:</legend>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="gsameaddress" id="gsameaddress" <?php if(isset($_POST['gsameaddress'])) echo "checked='checked'"; ?>>
                        <label class="form-check-label" for="autoSizingCheck">
                               Same as Applicant Address
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address No:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gaddressno" id="gaddressno"  value="<?php if(isset($_POST['gaddressno'])){echo $_POST['gaddressno'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gstreet" id="gstreet"  value="<?php if(isset($_POST['gstreet'])){echo $_POST['gstreet'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Township:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gtownship" id="gtownship"  value="<?php if(isset($_POST['gtownship'])){echo $_POST['gtownship'];}?>">
                        <?php if (!empty($gtownshipError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $gtownshipError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gzipcode" id="gzipcode"  value="<?php if(isset($_POST['gzipcode'])){echo $_POST['gzipcode'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gtelephone" id="gtelephone"  value="<?php if(isset($_POST['gtelephone'])){echo $_POST['gtelephone'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gmobile" id="gmobile"  value="<?php if(isset($_POST['gmobile'])){echo $_POST['gmobile'];}?>">
                        <?php if (!empty($gmobileError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $gmobileError;?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">City:<span class="help-inline">  ***</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gcity" id="gcity"  value="<?php if(isset($_POST['gcity'])){echo $_POST['gcity'];}?>">
                        <?php if (!empty($gcityError)): ?>
                            <span style='color: red;' class="help-inline"><?php echo $gcityError;?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="gemail" id="gemail"  value="<?php if(isset($_POST['gemail'])){echo $_POST['gemail'];}?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gposition" id="gposition"  value="<?php if(isset($_POST['gposition'])){echo $_POST['gposition'];}?>">
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


             
            
            
        
            
        
             

    </body>
</html>