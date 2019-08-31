<?php
 
  // session_start();
include('./includes/db_connect.php');// connecting the db


?>


<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./vendors/css/ionicons.min.css">
    <link rel="stylesheet" href="./css/useradd1.css">
    <title>smart app</title>
</head>
<body>
    <div class="left-right"> 
        <!-- section left -->
        <div class="section-left">

            <!-- dropping menu -->
            <div class="dropping-menu">
                <section class="sidemenu">
                    <div class="logo">
                        <img src="./img/banner.jpg" alt="Our logo">
                    </div>
            
                    <div class="sidebar"> 
                        <div class="s_sidebar">
                            <li class="item"><a href="index.php"class="btn">Home</a></li>
                            <li class="item" id="Data maintenance">
                                <a href="#Data maintenance"class="btn">Data maintenance</a>
                                <div class="smenu" >
                                    <a href="#" id="import"><i class="fa ion-arrow-down-a downl"></i>Import Attendance checking Data</a>
                                    <a href="#" id="export"><i class="fa ion-arrow-up-a upl"></i>Export Attendance Checking Data</a>
                                    <a href="#"><i class="fa ion-ios-folder"></i>Backup Database</a>
                                    <a href="#" id="usbman"><i class="fa ion-archive"></i>Usb Disk Manage</a>
            
                                </div>
            
                            </li>
            
                            <li class="item" id="Device Management">
                                    <a href="#Device Management" class="btn">Device Management</a>
                                    <div class="smenu" >
                                        <a href="#"><i class="fa ion-arrow-down-a downl"></i>Download Attendance Logs</a>
                                        <a href="#"><i class="fa ion-arrow-down-a upl"></i>Download User info and Fp</a>
                                        <a href="#"><i class="fa ion-arrow-up-a"></i>Upload User info and Fp</a>
                                        <a href="apm.html"><i class="fa ion-camera"></i>Attendance Photo management</a>
                                        <a href="#"><i class="fa ion-ios-contact-outline"></i>AC Manage</a>
                    
                                    </div>
                    
                            </li>
            
                            <li class="item" id="Maintance/Options">
                                <a href="#Maintance/Options" class="btn">Maintance/Options</a>
                                <div class="smenu" >
                                    <a href="dptment.php"><i class="fa ion-android-options"></i>Department List</a>
                                    <a href="#" id="admin_modal"><i class="fa ion-android-contact"></i>Administrator</a>
                                    <a href="user.php"><i class="fa ion-android-people"></i>Users</a>
                                    <a href="#" id="dboptions"><i class="fa ion-soup-can"></i>Database Option</a>
                        
                                </div>
                        
                            </li>
                            <li class="item" id="User Schedule">
                                <a href="#User Schedule" class="btn">User Schedule</a>
                                <div class="smenu" >
                                        <a href="#"><i class="fa ion-ios-calendar"></i>Maintainance timetables</a>
                                        <a href="#"><i class="fa ion-ios-alarm"></i>Shifts Management</a>
                                        <a href="#"><i class="fa ion-ios-time"></i>User schedule</a>
                                        <a href="#"><i class="fa ion-ios-compose"></i>Attendence rule</a>
                        
                                </div>
                        
                            </li>
            
                        </div>
                    </div>   
                
                </section>
            </div>
        </div>

        <!-- section right -->
        <div class="section-right">
            <!-- navbar -->
            <div class="search-and-navbar" >

                <!-- navigation bar -->
                <div class="nav-bar">
                    <ul>
                        <li class="attendance"> 
                            <div class="dropdown">
                                <a class="dropbtn">Attendance</a>
                                <div class="dropdown-content">
                                    <a href="">User permissions to LEAVE</a>
                                    <a href="">Forgetting to clock in/out</a>
                                    <a href="">Coming Late collectively</a>
                                </div>
                            </div> 
                        </li>

                        <li class="attendance"> 
                            <div class="dropdown">
                                <a class="dropbtn">Device</a>
                                <div class="dropdown-content">
                                    <a href="">Connect</a>
                                    <a href="">Add New</a>
                                    <a href="">Edit Current Device</a>
                                    <a href="">Edit All Devices</a>
                                    <a href="">Delete Device</a>
                                    <a href="">Disconnect Device</a>
                                </div> 
                            </div> 
                        </li>
                        <li class="attendance"> 
                            <div class="dropdown">
                                <a class="dropbtn">Search/Print</a>
                                <div class="dropdown-content">
                                    <a href="">Attendance Record</a>
                                    <a href="">Users on Duty status</a>
                                    <a href="">Attendance Calculating and Reports</a>
                                    <a href="">System Operate Log</a>
                                </div>
                            </div> 
                        </li>
                        <li class="attendance"> 
                            <div class="dropdown">
                                <a class="dropbtn">More</a>
                                <div class="dropdown-content">
                                    <a href="">Help</a>
                                    <a href="">Exit System</a>
                                </div>
                            </div> 
                        </li>
                        
                    </ul>
                </div>
                <!-- search -->
                <div class="search-box">
                    <i class=" ion-search forsearch" ></i>
                    <input type="text"  placeholder="search here ...">
                    
                </div>
            </div>

             <!-- -----------------------USER----------- ----- -->

        <form class="user-panels" method="post" action="user.php">
        <?php include('errors.php'); ?>
            <div class="user-pannel-menu"> 
                <ul>
                    <li> <a href="#">Add</a> </li>
                    <li> <a href="#" name="adduser">Save</a> </li>
                    <li> <a href="#">Delete</a> </li>
                    <li> <a href="#">Cancel</a> </li>
                    <li> <a href="#">batch</a> </li>
                    <li><input type="text" placeholder="search here ..."></a> </li>
                    <li> <a href="#">search</a> </li>
                    <li> <a href="#">Next</a> </li>
                    <li> <a href="#">Import</a> </li>
                    <li> <a href="#">FaceGroup</a> </li>  
                </ul>
            </div>
            <div class="user-pannel-first">
                <div class="user-pannel-first-column">
                    <div class="checkbox">
                        <label><input type="checkbox">Include sub department</label>
                    </div>
                    <div class="first-box">
                        

                    </div>
                </div>
                <div class="user-table">
                    <table class="user-table-start" id="table_usersADD">
                        <thead>
                            <th>AC No</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Title</th>
                            <th>Mobile/Pager</th>
                        </thead>
                        <tbody>

                        <?php
                            $q="SELECT * FROM theuser INNER JOIN gender ON theuser.id_gender = gender.id_gender ";
                            $query = mysqli_query($db,$q);
                    while ($res = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td><?php echo $res['ac_no'] ?></td>
                                    <td><?php echo $res['emailno'] ?></td>
                                    <td><?php echo $res['uname'] ?></td>
                                    <td><?php echo $res['thegender'] ?></td>
                                    <td><?php echo $res['jobtitle'] ?></td>
                                    <td><?php echo $res['mobno'] ?></td>
                                  
                            
		                        </tr>
                        <?php }
                        ?>
                        </tbody>
                    </table>

                </div>

            </div>
            <div class="user-pannel-second">
                <div class="user-pannel-1nputs">
                    <div class="user-pannel-1nputs1">
                        <ul>
                            <li><label>AC No.  </label></li>
                            <li><label> Gender</label></li>
                            <li><label>Nationality.</label> </li>
                            <li><label>Title</label> </li>
                            <li><label>Date of birth</label> </li>
                            <li><label>card number</label> </li>
                            <li><label>Home Add</label> </li>
                        </ul>

                    </div>
                    <div class="user-pannel-1nputs2">
                        <ul>
                            <li> <input type="text" name="acno"></li>
                            <li><select name="gender">
                                <?php 
                                    $query = $db->query("SELECT * FROM gender");
                                    while ($row=$query->fetch_object()) {
                                    echo " <option value=' " .$row->id_gender." ' >  ".$row->thegender."  </option>   ";

                                    }
    			                 ?> 
                                    
                                </select>     
                            </li>
                            <li><input type="text" name="natility"> </li>
                            <li><input type="text" name="jobtitle"></li>
                            <li><input type="date" name="dob"> </li>
                            <li><input type="text" name="cadNo" ></li>
                            <li><input type="text" name="homadd" > </li>
                        </ul>

                    </div>

                </div>
                <div class="user-pannel-1nputs22">

                    <div class="lables-user-pannel">
                        <ul>
                            <li><label>Name</label></li>
                            <li><label>Email</label></li>
                            <li> <label>Office Tel</label></li>
                            <li><label>Privilage</label></li>
                            <li><label>Date of employement</label><li>
                            <li><label>Mobile No</label></li>
                            </ul>
                        
                    </div>
                    <div class="lables-user-pannel-1nputs">
                        <ul>
                            <li><input type="text" name="UName"></li>
                            <li><input type="text" name="emailNo"></li>
                            <li> <input type="text" name="ofTel"></li>
                            <li>
                                <select name="prev">
                                    <?php 
                                        $query = $db->query("SELECT * FROM priv");
                                        while ($row=$query->fetch_object()) {
                                            echo " <option value=' " .$row->id_priv." ' >  ".$row->theprevil."  </option>   ";

                                        }
                                    ?>
                                </select>
                                
                            </li>
                            <li><input type="date" name="doe"></li>
                            <li><input type="text" name="mobNo" ></li>
                            
                        </ul>
                            
                    </div>

                </div>

                <div class="user-photo22">
                        <!-- <div>people</div> -->
                        <div class="photo22"><img src="./img/user.jpg" alt="user-photo" "></div>
                        <!-- style="margin-left: -60px; padding-left: -60px;" -->
                        <div class="thebut">
                            <ul class="userbtn">
                                <li><button> Delete</button></li>
                                <li><button> Change</button></li>
                            </ul> 
                        </div>
                        
                        

                </div>

                <div class="user-fingerprint">
                    <div class="fingermanage">
                        <h3> Finger print manage</h3>

                    </div>
                    
                    <div class="fingercombo">
                        <label>
                            <select>
                            <option value="text">1</option>
                            <option value="text">2</option> 
                            <option value="text">3</option>
                            </select>
                        </label>
                    </div>
                    <div class="forthebut userbtn">
                        <button>Connect Device</button>
                    </div> 
                    <div class="user-horiradio">
                        <div><label><input type="radio">Fingerprint Device</label></div>
                        <div><label><input type="radio">Sensor</label></div>

                    </div>

                    <div class="user-horibut userbtn">
                        <button>Enroll</button>

                    </div>

                    <div class ="user-add ">
                    <button name="addtheuser" value="submit" > Add User</button>
                    </div>
                            
                </div>
        </div>

            <!-- End of user -->
        </form>
    </div> 


   <!-- ................modal for the import............... -->

    <div class="theimport">  
        <div class="the_content">
            <div class="to_import">
                <div class="theimport_head">
                        <h3> Import Attendance Checking Data</h3>
                </div>

                <div class="da_text">
                    <input type="radio" name="number" value="number"> Import from files<br>
                </div>
                <div class="margin">
                    <input type="textbox" name="">

                </div>
                <div class="da_text">
                    <input type="radio" name="number" value="number"> Import from Databases<br>
                </div>
                <div class="margin">
                    <input type="textbox" name="">
                </div>
                

                <div class="buttons" >
                    <a href="#" class="square_btn">Import</a>
                    <a href="#" class="square_btn">Close</a><br>
                </div>


            </div>

            
            <div class="close">
                +

            </div>


        </div>
    </div> 


    <!-- ................modal for the Export............... -->

    <div class="theExport">  
        <div class="the_content">
            <div class="to_Export">
                <div class="theExport_head">
                        <h3> Export Attendance Checking Data</h3>
                </div>

                <div class="da_text1">
                    <input type="radio" name="number" value="number"> Export to files<br>
                </div>
                <div class="margin1">
                    <input type="textbox" name="">

                </div>
                <div class="theExport_head11">
                        <h3> Conditions And Range for Exporting Data Records</h3>
                </div>

                <div class="margin11">
                    <label>Beginning Date: 
                        <input type="date" value="Wednesday, 2010-12-16;" class="resizedTextbox">--
                        <input type="date" value="Wednesday, 2010-12-16;" class="resizedTextbox"><br>  
                    </label>
                    
                </div>
                

                <div class="buttons" >
                    <a href="#" class="square_btn">Export</a>
                    <a href="#" class="square_btn">Close</a><br>
                </div>


            </div>

            
            <div class="btnclose">
                +

            </div>


        </div>
    </div> 

    <!-- ................modal for the Export............... -->

    <div class="theusb">  
        <div class="the_content1">
            <div class="usb_man">
                <div class="usb_head">
                    <h3> Usb Import/Export</h3>
                </div>

                <div class="da_text2">
                    <h3>  Please select the below item by Machine</h3> 
                </div>
                <div class="margin2">
                    <li><label><input type="radio" name="number" value="number" class="margin"> 5code (Max Ac no. is 65535)</label></li>
                    <li><label><input type="radio" name="number" value="number" class="margin"> 9code OEM</label></li>
                    <li><label><input type="radio" name="number" value="number" class="margin"> Self service Reader</label></li>
                </div>
                

                <div class="buttons1" >
                    <a href="#" class="square_btn">OK</a>
                    <a href="#" class="square_btn">Cancel</a><br>
                </div>


            </div>

            
            <div class="btnclose1">
                +

            </div>


        </div>
    </div> 

    <!-- ................modal for the Administrator............... -->

    <div class="theadmin">  
        <div class="the_content2">
            <div class="the_admin">
                <div class="admin_head">
                    <h3> Administrator</h3>
                </div>
                <div class="admin_table">
                    <table >
                        <thead>
                            <th height="60">AC/No</th>
                            <th height="60"><b>Name</b></th>
                            <th height="60"><b>Privilege</b></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SMT1001</td>
                                <td>Kindagaire Partrick</td>
                                <td>All</td>
                            </tr>
                            <tr>
                                <td>SMT1002</td>
                                <td>Nyiramucyo Rachel</td>
                                <td>Progrogrammer</td>

                            </tr>
                            <tr>
                                <td>SMT1002</td>
                                <td>Waisana Bosco</td>
                                <td>Progrogrammer</td>

                            </tr>


                        </tbody>

                    </table>
                </div>
                

                <div class="buttons2" >
                    <a href="#" class="square_btn">Administrator</a>
                    <a href="#" class="square_btn">Modify Password</a>
                    <a href="#" class="square_btn">Operation Preview</a>
                </div>


            </div>

            
            <div class="btnclose2">
                +

            </div>


        </div>
    </div> 
        
    <!-- ................modal for the Database options............... -->

    <div class="thedboptions">  
        <div class="the_content3">
            <div class="the_dboptions">
                <div class="dboptions_head">
                    <h3> Data link properties</h3>
                </div>
                <div class="main_fo_tab">

                    <div class="button_s">
                        <ul class="tabs">
                            <li data-tab-target="#Provider" class="active tab">Provider</li>
                            <li data-tab-target="#Connection" class="tab">Connection</li>
                            <li data-tab-target="#Advanced" class="tab">Advanced</li>
                            <li data-tab-target="#All" class="tab">All</li>
                        </ul>
                        
                    </div>
                
                
                    
                
                    <div class="tab-content">
                        <div id="Provider" data-tab-content class="active">
                            <h3>Select the data you wanty to connect to:</h3>
                            <h3>OLE DB provider(s)</h3>
                            <ul>
                                <li>Microsoft Jet 4.0 OLE DB provider</li>
                                <li>Microsoft OLE DB Provider for ODBC Drivers</li>
                                <li>Microsoft OLE DB Provider for Oracle</li>
                                <li>Microsoft OLE DB Provider for search</li>
                                <li>Microsoft OLE DB Provider for SQL Server</li>
                                <li>Microsoft OLE DB Simple Provider </li>
                                <li>MSDataShape</li>
                                <li>OLE Db provider for Microsoft Directory Services</li>
                            </ul>	
                        </div>
                        <div id="Connection" data-tab-content>
                        <!-- <h1>Pricing</h1> -->
                        <p>Some information on pricing</p>
                        </div>
                        <div id="Advanced" data-tab-content>
                        <!-- <h1>About</h1> -->
                        <p>Let me tell you about me</p>
                        </div>
                        <div id="All" data-tab-content>
                        <!-- <h1>All</h1> -->
                        <p>It's all</p>
                        </div>
                    </div>

                    <div class="btn_next">
                        <a href="#" class="square_btn">Next</a>
                    </div>
                
                </div>
                <hr>

                <div class="buttons3" >
                    <a href="#" class="square_btn">Ok</a>
                    <a href="#" class="square_btn">Cancel </a>
                    <a href="#" class="square_btn">Help</a>
                </div>


            </div>

            
            <div class="btnclose3">
                +

            </div>


        </div>
    </div> 


     <!-- ................modal for the Reports ............... -->

     <div class="thereport">  
        <div class="the_content4">

            <div class="the_report">
                <div class="report_herder">
                    
                </div>

                <div class="main_fo_report">
                    <div class="report-content">
                        <div class="report_head">
                            <h3> Select the report by id.</h3>
                        </div>

                        <select id="report_select" onchange="getselectedValue();">
                            <option value=" ">---Select---</option>
                            <option value="New Users">1.New Users</option>
                            <option value="Summery of departments">2.Summery of departments</option>
                            <option value="Absentees">3.Absentees</option>
                            <option value="Late reporting">4.Late reporting</option>
                            <option value="Work Overtime">5.Work Overtime</option>
                            <option value="Work Under time">6.Work Under time</option>
                        </select>
                        
                        
                    </div>

                    <div class="buttons4" >
                        <a href="#" class="square_btn capt_ok" onclick="startnew()">Ok</a>
                        <a href="#" class="square_btn">Cancel </a>
                        
                    </div>
                
                </div>

            </div>

                


            

            
            <div class="btnclose4">
                +

            </div>


        </div>
    </div> 


    <!-- ................modal for the select Reports next page............... -->

    <div class="select_thereport">  
        <div class="the_select_content4">

            <div class="select_the_report">
                <div class="select_report_herder">
                    
                </div>

                <div class="select_main_fo_report">
                    <div class="select_report-content">
                        <div class="select_report_head">
                            <h3> Select the Department.</h3>
                        </div>
                        <div class="finalt_select"> 
                            <li>
                                <div class="captured_txt">
                                <input type="text" id="decapt"  >
                                </div>
                            </li>
                            <li>
                                <div class="da_se">
                                    <select name="select_report_select">
                                        <option value="">---Select---</option>
                                        <option value="1">1.Department1</option>
                                        <option value="2">2.Department2</option>
                                        <option value="3">3.Department3</option>
                                        <option value="4">4.Department4 </option>
                                        <option value="5">5.Department5 </option>
                                        <option value="6">6.Department6  </option>
                                    </select>
                                </div>
                            </li>
                        </div> 
                        
                        <div class="da_condition">
                            <li> <h3>Period:</h3> </li>
                            <li><input type="date" ></li>
                            <li><input type="date" ></li>
                            <li><input type="checkbox" class="ipt_cond"></li>
                            <li> <p>All</p> </li>
                        </div>
                        
                    </div>

                    <div class="select_buttons4" >
                        <a href="Report.html" class="square_btn "  >Ok</a>
                        <a href="#" class="square_btn">Cancel </a>
                        
                    </div>
                
                </div>

            </div>
            
            <div class="select_btnclose4">
                +

            </div>


        </div>
    </div> 
            









    <script src="./js/index.js"></script>
</body>
</html>