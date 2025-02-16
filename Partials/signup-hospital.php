<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
        window.onload = function () {
            change();
            checkCookie();
        }

    </script>
	<script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-45743661-1', 'auto');
        ga('send', 'pageview');
    </script>
	<style>
        .ui-autocomplete {
            background-color: #fff;
            width: 20%;
            float: left;
            list-style: none;
            padding: 0px;
        }

            .ui-autocomplete li {
                margin: 0px;
                width: 99%;
            }

                .ui-autocomplete li a {
                    padding: 1%;
                    margin: 0px;
                    width: 100%;
                    float: left;
                    color: #000;
                    background-color: #e7eef6;
                    cursor: pointer;
                }

                    .ui-autocomplete li a:hover {
                        color: #fff;
                        background-color: #000 !important;
                    }

        .option-name {
            display: block;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
        }
    </style>
	<link rel="stylesheet" href="signup.css">
	<title>Sign Up</title>
</head>
<body>
<h3>HOSPITAL REGISTRATION FORM</h3>
<form enctype="multipart/form-data" name="myForm" method="POST" action="../Actions/signup-hospital.php" onsubmit="return validateForm();">
    <fieldset>
        <legend><b>Information</b></legend>
        <span id="error-mess"></span>
        <div class="hospital-all-text">
            <div class="hospital-lable-text">Hospital Name&nbsp;<span style="color:red; font-weight:bold;">*</span></div>
            <div class="hospital-inputs">
                <input id="hospitalname" name="hospitalname" type="text" onchange="Duplicatehpname('hospitalname');" onblur="validateHospitalName()" ;="" autocomplete="off">
                <span id="error-mess01"></span>
            </div>
        </div>
        <div class="hospital-all-text">
            <div class="hospital-inputs">&nbsp;</div>
            <div class="hospital-inputs" style="display: flex !important;">
                <input type="radio" name="hospitaltype" value="Government/Public" checked="checked">Government/Public
                <input type="radio" name="hospitaltype" value="Private" style="margin-left: 10px;">Private
            </div>
        </div>
        <div class="hospital-all-text">
            <div class="hospital-lable-text reg_image">
                <ul>
                    <li>Accreditation</li>
                    <li>(For e.g NABH/NABL/JCI/ISO/Others)</li>
                    <li>(For Hospital/Blood Bank/ Laboratory)</li>
                </ul>
            </div>
            <div class="hospital-inputs">
                <textarea name="accreditation"></textarea>
            </div>
        </div>


        <div class="hospital-all-text">
            <div class="hospital-lable-text">Health Care Provider Type:</div>
            <div class="hospital-inputs-checkbox test_archive">
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Hospital">Hospital</span>
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Dispensary">Dispensary</span>
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Community Health Centre">Community Health Centre</span>
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Nursing Home">Nursing Home</span>
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Medical College / Institute">Medical College / Institute</span>
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Sub Centre">Sub Centre</span>
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Poly Clinic">Poly Clinic</span>
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Primary Health Centre">Primary Health Centre</span>
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Others">Others</span>
                        <span><input type="checkbox" name="hostipalcaretype[]" value="Clinic">Clinic</span>
        <span><input type="checkbox" name="hostipalcaretype" value="Others">Others</span>
        </div>
        </div>

        <div class="hospital-all-text">
        <div class="hospital-lable-text">Hospital Registration Number&nbsp;<span style="color:red; font-weight:bold;">*</span></div>
        <div class="hospital-inputs">
            <input name="hospitalregisnumber" id="hospitalregisnumber" type="text" onblur="validateRegistrationNumber()" autocomplete="off">
            <span id="error-mess02"></span>
        </div>
        </div>

        <div class="hospital-all-text">
        <div class="hospital-lable-text reg_image">
            <ul>
                <li>Registration Number Scanned Copy&nbsp;<span style="color:red; font-weight:bold;">*</span></li>
                <li>(only  JPG, GIF, PNG images with max size: 4 MB allowed)</li>
            </ul>
        </div>
        <div class="hospital-inputs test_archive">
            <input name="Registerationnumberscan" type="file" id="Registerationnumberscan" onblur="validateScannedcopy()">
            <span id="error-mess03"></span>

        </div>
        </div>
    </fieldset>
    <fieldset>
        <legend><b>For Office Use Only (This information will not be shared publicly)</b></legend>
        <div class="hospital-all-text">
            <div class="hospital-lable-text">Nodal Person for this Information - Name and Designation <span style="color:red; font-weight:bold;">*</span></div>
            <div class="hospital-inputs">
                <input name="nodalpersoninfo" id="nodalpersoninfo" type="text" onblur="validateDesignation()" autocomplete="off">
                <span id="error-mess04"></span>
            </div>
        </div>

        <div class="hospital-all-text">
            <div class="hospital-lable-text">Telephone Number of the Nodal Person for this Information <span style="color:red; font-weight:bold;">*</span></div>
            <div class="hospital-inputs">
                <input name="nodalpersontele" id="nodalpersontele" type="text" onblur="validateTelephone()" maxlength="11" autocomplete="off" onkeypress="return isNumberKey(event)" placeholder="">
                <span id="error-mess05"></span>
            </div>
        </div>

        <div class="hospital-all-text">
            <div class="hospital-lable-text">Nodal Person Email Id &nbsp;<span style="color:red; font-weight:bold;">*</span></div>
            <div class="hospital-inputs">
                <input name="nodalpersonemailid" id="nodalpersonemailid" type="text" onblur="validateNodalEmail()" autocomplete="off">
                <span id="error-mess06"></span>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend><b>Hospital Address</b></legend>
        <div class="hospital-all-text">
            <div class="hospital-lable-text">Address <span style="color:red; font-weight:bold;">*</span></div>
            <div class="hospital-inputs">
                <textarea name="address" id="address" onblur="validateAddress()"></textarea>
                <span id="error-mess07"></span>
            </div>
        </div>

        <div class="hospital-all-text">
            <div class="hospital-lable-text">State&nbsp;<span style="color:red; font-weight:bold;">*</span></div>
            <div class="hospital-inputs">
                <select id="state" name="state" onchange="binddrop(1);" onblur="validateState()">
                    <option value="">Select state</option>
                                <option value="35">Andaman &amp; Nicobar Islands</option>
                                <option value="28">Andhra Pradesh</option>
                                <option value="12">Arunachal Pradesh</option>
                                <option value="18">Assam</option>
                                <option value="10">Bihar</option>
                                <option value="4">Chandigarh</option>
                                <option value="22">Chhatisgarh</option>
                                <option value="26">Dadra &amp; Nagar Haveli</option>
                                <option value="25">Daman &amp; Diu</option>
                                <option value="7">Delhi</option>
                                <option value="30">Goa</option>
                                <option value="24">Gujarat</option>
                                <option value="6">Haryana</option>
                                <option value="2">Himachal Pradesh</option>
                                <option value="1">Jammu and Kashmir</option>
                                <option value="20">Jharkhand</option>
                                <option value="29">Karnataka</option>
                                <option value="32">Kerala</option>
                                <option value="31">Lakshadweep</option>
                                <option value="23">Madhya Pradesh</option>
                                <option value="27">Maharashtra</option>
                                <option value="14">Manipur</option>
                                <option value="17">Meghalaya</option>
                                <option value="15">Mizoram</option>
                                <option value="13">Nagaland</option>
                                <option value="21">Odisha</option>
                                <option value="34">Puducherry</option>
                                <option value="3">Punjab</option>
                                <option value="8">Rajasthan</option>
                                <option value="11">Sikkim</option>
                                <option value="33">Tamil Nadu</option>
                                <option value="36">Telangana</option>
                                <option value="16">Tripura</option>
                                <option value="9">Uttar Pradesh</option>
                                <option value="5">Uttarakhand</option>
                                <option value="19">West Bengal</option>
        </select>
        <span id="error-mess08"></span>
        <input id="statetext" name="statetext" type="hidden" value="">
        </div>
        </div>

        <div class="hospital-all-text">
            <div class="hospital-lable-text">District&nbsp;<span style="color:red; font-weight:bold;">*</span></div>
            <div class="hospital-inputs">
                <select id="district" name="district" onchange="binddrop(2);" onblur="validateDistrict()">
                    <option value="">Select district</option>
                </select>
                <span id="error-mess09"></span>
                <input id="districttext" name="districttext" type="hidden" value="">
            </div>
        </div>

        <div class="hospital-all-text">
            <div class="hospital-lable-text">Sub District&nbsp;</div>
            <div class="hospital-inputs">
                <select id="subdristrict" name="subdristrict" onchange="binddrop(3);">
                    <option value="">Select sub-district</option>
                </select>
                <span id="error-mess10"></span>
                <input id="subdristricttext" name="subdristricttext" type="hidden" value="">
            </div>
        </div>

        <div class="hospital-all-text">
            <div class="hospital-lable-text">Town</div>
            <div class="hospital-inputs">
                <select id="town" name="town" onchange="binddrop(4);">
                    <option value="">-select-</option>
                </select>
                <input id="towntext" name="towntext" type="hidden" value="">
            </div>
        </div>



        <div class="hospital-all-text">
            <div class="hospital-lable-text">Village </div>
            <div class="hospital-inputs">
                <select id="village" name="village">
                    <option value="">-select-</option>
                </select>
                <input id="villagetext" name="villagetext" type="hidden" value="">
            </div>
        </div>

        <div class="hospital-all-text">
            <div class="hospital-lable-text">Pin Code&nbsp;<span style="color:red; font-weight:bold;">*</span></div>
            <div class="hospital-inputs">
                <input name="pincode" id="pincode" class="pincode_width" type="text" onblur="validatePincode()" maxlength="6" autocomplete="off" onkeypress="return isNumberKey(event)">
                <span id="error-mess11"></span>
            </div>
        </div>


    </fieldset>
        <div class="text-center">
            <input class="button" type="submit" value="Submit" onclick="return validateForm();">
            
            <input class="button" type="reset" value="Clear">
            
        </div>   
</form>
</body>
</html>