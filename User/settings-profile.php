<?php

session_start();

$connection = mysqli_connect("localhost","root","","Cripto");

if(!isset($_SESSION['email'])){
    echo '
        <script>
            alert("You must login first");
            window.location = "../login/signin.php";
        </script>
    ';
    session_destroy();
    die();
}

$ID = "";
$Name = "";
$mail = "";
$birthDate = "";
$PermanentAddress = "";
$PresentAddress = "";
$city = "";
$ZipCode = "";
$Country = "";
$find = $_SESSION['email'];

$GetData = "SELECT ID, Name,mail, birthDate, PermanentAddress, PresentAdress, city, ZipCode, Country from UserInfo where mail = '$find'";

$result = mysqli_query($connection,$GetData);

if($result){
    $row = mysqli_fetch_assoc($result);
    $ID = $row['ID'];
    $Name = $row['Name'];
    $mail = $row['mail'];
    $birthDate = $row['birthDate'];
    $PermanentAddress = $row['PermanentAddress'];
    $PresentAddress = $row['PresentAdress'];
    $city = $row['city'];
    $ZipCode = $row['ZipCode'];
    $Country = $row['Country'];
}

function update(){
    global $connection;
    global $Name;
    global $mail;
    global $birthDate;
    global $PermanentAddress;
    global $PresentAddress;
    global $city;
    global $ZipCode;
    global $Country;
    global $find;

    $Name = $_POST['Name'];
    $birthDate = $_POST['birthDate'];
    $PermanentAddress = $_POST['PermanentAddress'];
    $PresentAddress = $_POST['PresentAdress'];
    $city = $_POST['city'];
    $ZipCode = $_POST['ZipCode'];
    $Country = $_POST['Country'];

    $update = "UPDATE UserInfo SET Name = '$Name', birthDate = '$birthDate', PermanentAddress = '$PermanentAddress', city = '$city', ZipCode = '$ZipCode', Country = '$Country' WHERE mail = '$find'";

    $result = mysqli_query($connection,$update);

    if($result){
        echo '
            <script>
                alert("Profile Updated Successfully");
                window.location = "settings-profile.php";
            </script>
        ';
    }
    else{
        echo '
            <script>
                alert("Profile Update Failed");
                window.location = "settings-profile.php";
            </script>
        ';
    }
}


if (isset($_POST['update_button'])) {
    if (update($Name, $mail, $birthDate, $PermanentAddress, $PresentAddress, $city, $ZipCode, $Country)) {
        echo 'Los datos han sido actualizados con éxito.';
    } else {
        echo 'Error al actualizar los datos.';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tendex</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../images/favicon.png"
    />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body class="dashboard">
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
      <div class="header bg-light">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xxl-12">
              <div class="header-content">
                <div class="header-left">
                  <!-- <div class="brand-logo">
                            <a href="index.php">
                                <img src="./images/logo.png" alt="">
                            </a>
                        </div> -->
                    <div class="search">
                        <form action="Operations/search.php" method="GET">
                            <div class="input-group">
                                <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search Here"
                                />
                                <button class="input-group-text" type="submit"
                                ><i class="icofont-search"></i
                                    ></button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="header-right">
                  <div class="dark-light-toggle" onclick="themeToggle()">
                    <span class="dark"><i class="bi bi-moon"></i></span>
                    <span class="light"
                      ><i class="bi bi-brightness-high"></i
                    ></span>
                  </div>
                  <div class="notification dropdown">
                    <div class="notify-bell" data-toggle="dropdown">
                      <span><i class="bi bi-bell"></i></span>
                    </div>
                    <div
                      class="
                        dropdown-menu dropdown-menu-right
                        notification-list
                      "
                    >
                      <h4>Announcements</h4>
                      <div class="lists">
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon success"
                              ><i class="bi bi-check"></i
                            ></span>
                            <div>
                              <p>Account created successfully</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon fail"
                              ><i class="bi bi-x"></i
                            ></span>
                            <div>
                              <p>2FA verification failed</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon success"
                              ><i class="bi bi-check"></i
                            ></span>
                            <div>
                              <p>Device confirmation completed</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon pending"
                              ><i class="bi bi-exclamation-triangle"></i
                            ></span>
                            <div>
                              <p>Phone verification pending</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>

                        <a href="settings-activity.php"
                          >More <i class="icofont-simple-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <div class="brand-logo">
          <a href="../index.php"
            ><img src="../images/logow.png" alt="" width="30" />
          </a>
        </div>
        <div class="menu">
          <ul>
            <li>
              <a
                href="dashboard.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Home"
              >
                <span><i class="bi bi-house"></i></span>
              </a>
            </li>
            <li>
              <a
                href="../Wallet/Cyptos.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Trade"
              >
                <span><i class="bi bi-cash"></i></span>
              </a>
            </li>
            <li>
              <a
                href="settings-profile.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Settings"
                id="settings"
              >
                <span><i class="bi bi-gear"></i></span>
              </a>
            </li>
            <li class="logout">
              <a
                href="../login/signin.php"
                data-toggle="tooltip"
                data-placement="right"
                title="Signout"
              >
                <span><i class="bi bi-power"></i></span>
              </a>
            </li>
          </ul>

          <p class="copyright">&#169; <a href="#">Qkit</a></p>
        </div>
      </div>

      <div class="content-body">
        <div class="container">
          <div class="row">
            <div class="col-xxl-12 col-xl-12">
              <div class="page-title">
                <h4>Profile</h4>
              </div>
              <div class="card">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.html">Profile</a>
                    <a href="settings-activity.php">Activity</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">User Profile</h4>
                        </div>
                        <div class="card-body">
                          <form action="#">
                            <div class="row g-3">
                              <div class="col-xxl-12">
                                <div class="d-flex align-items-center">
                                  <img
                                    class="me-3 rounded-circle me-0 me-sm-3"
                                    src="../images/profile/2.png"
                                    width="55"
                                    height="55"
                                    alt=""
                                  />
                                </div>
                              </div>
                              <div class="col-xxl-12">
                                <div class="form-file">
                                  <input
                                    type="file"
                                    class="form-file-input"
                                    id="picture"
                                  />
                                  <label
                                    class="form-file-label"
                                    for="customFile"
                                  >
                                    <span class="form-file-text"
                                      >Choose file...</span
                                    >
                                    <span class="form-file-button">Browse</span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-xxl-12">
                                <button class="btn btn-success waves-effect">
                                  Save
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="col-xxl-12">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">Personal Information</h4>
                        </div>
                        <div class="card-body">
                          <form
                            name="myform"
                            class="personal_validate"
                            novalidate="novalidate"
                            method="POST"
                          >
                            <div class="row g-4">
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">Your Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="<?php echo $Name; ?>"
                                  name="Name"
                                />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">Date of birth</label>
                                <input
                                  type="date"
                                  class="form-control hasDatepicker"
                                  placeholder="<?php echo $birthDate; ?>"
                                  id="datepicker"
                                  autocomplete="off"
                                  name="birthDate"
                                />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label"
                                  >Present Address</label
                                >
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="<?php echo $PresentAddress; ?>"
                                  name="PresentAdress"
                                />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label"
                                  >Permanent Address</label
                                >
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="123, Central Square, Brooklyn"
                                  name="PermanentAddress"
                                />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">City</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="<?php echo $PermanentAddress; ?>"
                                  name="city"
                                />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">Postal Code</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="<?php echo $ZipCode; ?>"
                                  name="ZipCode"
                                />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">Country</label>
                                <select class="form-select" name="Country">
                                  <option value="<?php echo $Country?>"><?php echo $Country?></option>
                                  <option value="Afghanistan">
                                    Afghanistan
                                  </option>
                                  <option value="Åland Islands">
                                    Åland Islands
                                  </option>
                                  <option value="Albania">Albania</option>
                                  <option value="Algeria">Algeria</option>
                                  <option value="American Samoa">
                                    American Samoa
                                  </option>
                                  <option value="Andorra">Andorra</option>
                                  <option value="Angola">Angola</option>
                                  <option value="Anguilla">Anguilla</option>
                                  <option value="Antarctica">Antarctica</option>
                                  <option value="Antigua and Barbuda">
                                    Antigua and Barbuda
                                  </option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Armenia">Armenia</option>
                                  <option value="Aruba">Aruba</option>
                                  <option value="Australia">Australia</option>
                                  <option value="Austria">Austria</option>
                                  <option value="Azerbaijan">Azerbaijan</option>
                                  <option value="Bahamas">Bahamas</option>
                                  <option value="Bahrain">Bahrain</option>
                                  <option value="Bangladesh">Bangladesh</option>
                                  <option value="Barbados">Barbados</option>
                                  <option value="Belarus">Belarus</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="Belize">Belize</option>
                                  <option value="Benin">Benin</option>
                                  <option value="Bermuda">Bermuda</option>
                                  <option value="Bhutan">Bhutan</option>
                                  <option value="Bolivia">Bolivia</option>
                                  <option value="Bosnia and Herzegovina">
                                    Bosnia and Herzegovina
                                  </option>
                                  <option value="Botswana">Botswana</option>
                                  <option value="Bouvet Island">
                                    Bouvet Island
                                  </option>
                                  <option value="Brazil">Brazil</option>
                                  <option
                                    value="British Indian Ocean Territory"
                                  >
                                    British Indian Ocean Territory
                                  </option>
                                  <option value="Brunei Darussalam">
                                    Brunei Darussalam
                                  </option>
                                  <option value="Bulgaria">Bulgaria</option>
                                  <option value="Burkina Faso">
                                    Burkina Faso
                                  </option>
                                  <option value="Burundi">Burundi</option>
                                  <option value="Cambodia">Cambodia</option>
                                  <option value="Cameroon">Cameroon</option>
                                  <option value="Canada">Canada</option>
                                  <option value="Cape Verde">Cape Verde</option>
                                  <option value="Cayman Islands">
                                    Cayman Islands
                                  </option>
                                  <option value="Central African Republic">
                                    Central African Republic
                                  </option>
                                  <option value="Chad">Chad</option>
                                  <option value="Chile">Chile</option>
                                  <option value="China">China</option>
                                  <option value="Christmas Island">
                                    Christmas Island
                                  </option>
                                  <option value="Cocos (Keeling) Islands">
                                    Cocos (Keeling) Islands
                                  </option>
                                  <option value="Colombia">Colombia</option>
                                  <option value="Comoros">Comoros</option>
                                  <option value="Congo">Congo</option>
                                  <option
                                    value="Congo, The Democratic Republic of The"
                                  >
                                    Congo, The Democratic Republic of The
                                  </option>
                                  <option value="Cook Islands">
                                    Cook Islands
                                  </option>
                                  <option value="Costa Rica">Costa Rica</option>
                                  <option value="Cote D'ivoire">
                                    Cote D'ivoire
                                  </option>
                                  <option value="Croatia">Croatia</option>
                                  <option value="Cuba">Cuba</option>
                                  <option value="Cyprus">Cyprus</option>
                                  <option value="Czech Republic">
                                    Czech Republic
                                  </option>
                                  <option value="Denmark">Denmark</option>
                                  <option value="Djibouti">Djibouti</option>
                                  <option value="Dominica">Dominica</option>
                                  <option value="Dominican Republic">
                                    Dominican Republic
                                  </option>
                                  <option value="Ecuador">Ecuador</option>
                                  <option value="Egypt">Egypt</option>
                                  <option value="El Salvador">
                                    El Salvador
                                  </option>
                                  <option value="Equatorial Guinea">
                                    Equatorial Guinea
                                  </option>
                                  <option value="Eritrea">Eritrea</option>
                                  <option value="Estonia">Estonia</option>
                                  <option value="Ethiopia">Ethiopia</option>
                                  <option value="Falkland Islands (Malvinas)">
                                    Falkland Islands (Malvinas)
                                  </option>
                                  <option value="Faroe Islands">
                                    Faroe Islands
                                  </option>
                                  <option value="Fiji">Fiji</option>
                                  <option value="Finland">Finland</option>
                                  <option value="France">France</option>
                                  <option value="French Guiana">
                                    French Guiana
                                  </option>
                                  <option value="French Polynesia">
                                    French Polynesia
                                  </option>
                                  <option value="French Southern Territories">
                                    French Southern Territories
                                  </option>
                                  <option value="Gabon">Gabon</option>
                                  <option value="Gambia">Gambia</option>
                                  <option value="Georgia">Georgia</option>
                                  <option value="Germany">Germany</option>
                                  <option value="Ghana">Ghana</option>
                                  <option value="Gibraltar">Gibraltar</option>
                                  <option value="Greece">Greece</option>
                                  <option value="Greenland">Greenland</option>
                                  <option value="Grenada">Grenada</option>
                                  <option value="Guadeloupe">Guadeloupe</option>
                                  <option value="Guam">Guam</option>
                                  <option value="Guatemala">Guatemala</option>
                                  <option value="Guernsey">Guernsey</option>
                                  <option value="Guinea">Guinea</option>
                                  <option value="Guinea-bissau">
                                    Guinea-bissau
                                  </option>
                                  <option value="Guyana">Guyana</option>
                                  <option value="Haiti">Haiti</option>
                                  <option
                                    value="Heard Island and Mcdonald Islands"
                                  >
                                    Heard Island and Mcdonald Islands
                                  </option>
                                  <option value="Holy See (Vatican City State)">
                                    Holy See (Vatican City State)
                                  </option>
                                  <option value="Honduras">Honduras</option>
                                  <option value="Hong Kong">Hong Kong</option>
                                  <option value="Hungary">Hungary</option>
                                  <option value="Iceland">Iceland</option>
                                  <option value="India">India</option>
                                  <option value="Indonesia">Indonesia</option>
                                  <option value="Iran, Islamic Republic of">
                                    Iran, Islamic Republic of
                                  </option>
                                  <option value="Iraq">Iraq</option>
                                  <option value="Ireland">Ireland</option>
                                  <option value="Isle of Man">
                                    Isle of Man
                                  </option>
                                  <option value="Israel">Israel</option>
                                  <option value="Italy">Italy</option>
                                  <option value="Jamaica">Jamaica</option>
                                  <option value="Japan">Japan</option>
                                  <option value="Jersey">Jersey</option>
                                  <option value="Jordan">Jordan</option>
                                  <option value="Kazakhstan">Kazakhstan</option>
                                  <option value="Kenya">Kenya</option>
                                  <option value="Kiribati">Kiribati</option>
                                  <option
                                    value="Korea, Democratic People's Republic of"
                                  >
                                    Korea, Democratic People's Republic of
                                  </option>
                                  <option value="Korea, Republic of">
                                    Korea, Republic of
                                  </option>
                                  <option value="Kuwait">Kuwait</option>
                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                  <option
                                    value="Lao People's Democratic Republic"
                                  >
                                    Lao People's Democratic Republic
                                  </option>
                                  <option value="Latvia">Latvia</option>
                                  <option value="Lebanon">Lebanon</option>
                                  <option value="Lesotho">Lesotho</option>
                                  <option value="Liberia">Liberia</option>
                                  <option value="Libyan Arab Jamahiriya">
                                    Libyan Arab Jamahiriya
                                  </option>
                                  <option value="Liechtenstein">
                                    Liechtenstein
                                  </option>
                                  <option value="Lithuania">Lithuania</option>
                                  <option value="Luxembourg">Luxembourg</option>
                                  <option value="Macao">Macao</option>
                                  <option
                                    value="Macedonia, The Former Yugoslav Republic of"
                                  >
                                    Macedonia, The Former Yugoslav Republic of
                                  </option>
                                  <option value="Madagascar">Madagascar</option>
                                  <option value="Malawi">Malawi</option>
                                  <option value="Malaysia">Malaysia</option>
                                  <option value="Maldives">Maldives</option>
                                  <option value="Mali">Mali</option>
                                  <option value="Malta">Malta</option>
                                  <option value="Marshall Islands">
                                    Marshall Islands
                                  </option>
                                  <option value="Martinique">Martinique</option>
                                  <option value="Mauritania">Mauritania</option>
                                  <option value="Mauritius">Mauritius</option>
                                  <option value="Mayotte">Mayotte</option>
                                  <option value="Mexico">Mexico</option>
                                  <option
                                    value="Micronesia, Federated States of"
                                  >
                                    Micronesia, Federated States of
                                  </option>
                                  <option value="Moldova, Republic of">
                                    Moldova, Republic of
                                  </option>
                                  <option value="Monaco">Monaco</option>
                                  <option value="Mongolia">Mongolia</option>
                                  <option value="Montenegro">Montenegro</option>
                                  <option value="Montserrat">Montserrat</option>
                                  <option value="Morocco">Morocco</option>
                                  <option value="Mozambique">Mozambique</option>
                                  <option value="Myanmar">Myanmar</option>
                                  <option value="Namibia">Namibia</option>
                                  <option value="Nauru">Nauru</option>
                                  <option value="Nepal">Nepal</option>
                                  <option value="Netherlands">
                                    Netherlands
                                  </option>
                                  <option value="Netherlands Antilles">
                                    Netherlands Antilles
                                  </option>
                                  <option value="New Caledonia">
                                    New Caledonia
                                  </option>
                                  <option value="New Zealand">
                                    New Zealand
                                  </option>
                                  <option value="Nicaragua">Nicaragua</option>
                                  <option value="Niger">Niger</option>
                                  <option value="Nigeria">Nigeria</option>
                                  <option value="Niue">Niue</option>
                                  <option value="Norfolk Island">
                                    Norfolk Island
                                  </option>
                                  <option value="Northern Mariana Islands">
                                    Northern Mariana Islands
                                  </option>
                                  <option value="Norway">Norway</option>
                                  <option value="Oman">Oman</option>
                                  <option value="Pakistan">Pakistan</option>
                                  <option value="Palau">Palau</option>
                                  <option
                                    value="Palestinian Territory, Occupied"
                                  >
                                    Palestinian Territory, Occupied
                                  </option>
                                  <option value="Panama">Panama</option>
                                  <option value="Papua New Guinea">
                                    Papua New Guinea
                                  </option>
                                  <option value="Paraguay">Paraguay</option>
                                  <option value="Peru">Peru</option>
                                  <option value="Philippines">
                                    Philippines
                                  </option>
                                  <option value="Pitcairn">Pitcairn</option>
                                  <option value="Poland">Poland</option>
                                  <option value="Portugal">Portugal</option>
                                  <option value="Puerto Rico">
                                    Puerto Rico
                                  </option>
                                  <option value="Qatar">Qatar</option>
                                  <option value="Reunion">Reunion</option>
                                  <option value="Romania">Romania</option>
                                  <option value="Russian Federation">
                                    Russian Federation
                                  </option>
                                  <option value="Rwanda">Rwanda</option>
                                  <option value="Saint Helena">
                                    Saint Helena
                                  </option>
                                  <option value="Saint Kitts and Nevis">
                                    Saint Kitts and Nevis
                                  </option>
                                  <option value="Saint Lucia">
                                    Saint Lucia
                                  </option>
                                  <option value="Saint Pierre and Miquelon">
                                    Saint Pierre and Miquelon
                                  </option>
                                  <option
                                    value="Saint Vincent and The Grenadines"
                                  >
                                    Saint Vincent and The Grenadines
                                  </option>
                                  <option value="Samoa">Samoa</option>
                                  <option value="San Marino">San Marino</option>
                                  <option value="Sao Tome and Principe">
                                    Sao Tome and Principe
                                  </option>
                                  <option value="Saudi Arabia">
                                    Saudi Arabia
                                  </option>
                                  <option value="Senegal">Senegal</option>
                                  <option value="Serbia">Serbia</option>
                                  <option value="Seychelles">Seychelles</option>
                                  <option value="Sierra Leone">
                                    Sierra Leone
                                  </option>
                                  <option value="Singapore">Singapore</option>
                                  <option value="Slovakia">Slovakia</option>
                                  <option value="Slovenia">Slovenia</option>
                                  <option value="Solomon Islands">
                                    Solomon Islands
                                  </option>
                                  <option value="Somalia">Somalia</option>
                                  <option value="South Africa">
                                    South Africa
                                  </option>
                                  <option
                                    value="South Georgia and The South Sandwich Islands"
                                  >
                                    South Georgia and The South Sandwich Islands
                                  </option>
                                  <option value="Spain">Spain</option>
                                  <option value="Sri Lanka">Sri Lanka</option>
                                  <option value="Sudan">Sudan</option>
                                  <option value="Suriname">Suriname</option>
                                  <option value="Svalbard and Jan Mayen">
                                    Svalbard and Jan Mayen
                                  </option>
                                  <option value="Swaziland">Swaziland</option>
                                  <option value="Sweden">Sweden</option>
                                  <option value="Switzerland">
                                    Switzerland
                                  </option>
                                  <option value="Syrian Arab Republic">
                                    Syrian Arab Republic
                                  </option>
                                  <option value="Taiwan, Province of China">
                                    Taiwan, Province of China
                                  </option>
                                  <option value="Tajikistan">Tajikistan</option>
                                  <option value="Tanzania, United Republic of">
                                    Tanzania, United Republic of
                                  </option>
                                  <option value="Thailand">Thailand</option>
                                  <option value="Timor-leste">
                                    Timor-leste
                                  </option>
                                  <option value="Togo">Togo</option>
                                  <option value="Tokelau">Tokelau</option>
                                  <option value="Tonga">Tonga</option>
                                  <option value="Trinidad and Tobago">
                                    Trinidad and Tobago
                                  </option>
                                  <option value="Tunisia">Tunisia</option>
                                  <option value="Turkey">Turkey</option>
                                  <option value="Turkmenistan">
                                    Turkmenistan
                                  </option>
                                  <option value="Turks and Caicos Islands">
                                    Turks and Caicos Islands
                                  </option>
                                  <option value="Tuvalu">Tuvalu</option>
                                  <option value="Uganda">Uganda</option>
                                  <option value="Ukraine">Ukraine</option>
                                  <option value="United Arab Emirates">
                                    United Arab Emirates
                                  </option>
                                  <option value="United Kingdom">
                                    United Kingdom
                                  </option>
                                  <option value="United States">
                                    United States
                                  </option>
                                  <option
                                    value="United States Minor Outlying Islands"
                                  >
                                    United States Minor Outlying Islands
                                  </option>
                                  <option value="Uruguay">Uruguay</option>
                                  <option value="Uzbekistan">Uzbekistan</option>
                                  <option value="Vanuatu">Vanuatu</option>
                                  <option value="Venezuela">Venezuela</option>
                                  <option value="Viet Nam">Viet Nam</option>
                                  <option value="Virgin Islands, British">
                                    Virgin Islands, British
                                  </option>
                                  <option value="Virgin Islands, U.S.">
                                    Virgin Islands, U.S.
                                  </option>
                                  <option value="Wallis and Futuna">
                                    Wallis and Futuna
                                  </option>
                                  <option value="Western Sahara">
                                    Western Sahara
                                  </option>
                                  <option value="Yemen">Yemen</option>
                                  <option value="Zambia">Zambia</option>
                                  <option value="Zimbabwe">
                                    Zimbabweoption&gt;
                                  </option>
                                </select>
                              </div>

                              <div class="col-12">
                                <button
                                  class="btn btn-success pl-5 pr-5 waves-effect"
                                    type="submit" name="update_button"
                                >
                                  Save
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../js/scripts.js"></script>
  </body>
</html>
