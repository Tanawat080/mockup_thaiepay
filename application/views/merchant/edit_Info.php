<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ข้อมูลส่วนตัวและบัญชีธนาคาร</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="material-icons">contact_phone</i><a href="<?php echo base_url(); ?>contact/contact/contact_des"> ข้อมูลร้านค้า</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">supervisor_account</i><a href="<?php echo base_url(); ?>merchant/merchant/merchant_bank_detail"> ข้อมูลส่วนตัวและบัญชีธนาคาร</a></li>
                <li class="breadcrumb-item active"><i class="material-icons">chrome_reader_mode</i> แก้ไขข้อมูลส่วนตัว</li>
            </ul>
        </div>
        


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class="col-blue-grey">แก้ไขข้อมูลส่วนตัว</h2>                     
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                             <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#thaiInfo">ข้อมูลภาษาไทย</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#engInfo">English Information</a></li> 
                             <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#websiteUrl">Website Url</a></li> 
                              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#changePassword">เปลี่ยนรหัสผ่าน</a></li>                       
                        </ul>                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="thaiInfo"> 
                               
                                            <div class="col-sm-12">
                                                <label class="form-label">ชื่อบริษัท/ชื่อร้าน: *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">store_mall_directory</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="merchantName_th" class="form-control" Value="Test" required>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
            
                                            <div class="col-sm-12">
                                                <label class="form-label">คำอธิบายร้านแบบย่อ: * (ไม่เกิน 500 ตัวอักษร)</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-float">
                                                <div class="input-group "> <span class="input-group-addon"> <i class="material-icons">assignment</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="descriptionBrief_th" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">ชื่อ: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group "> <span class="input-group-addon"> <i class="material-icons">accessibility</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="name_th" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class="col-sm-12">
                                                <label class="form-label">นามสกุล: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">accessibility</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="surname_th" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">ที่อยู่: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group "> <span class="input-group-addon"> <i class="material-icons">domain</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="address_th" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">ที่อยู่เพิ่มเติม: </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group  "> <span class="input-group-addon"> <i class="material-icons">domain</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="addressOptional_th" class="form-control"  Value="" >
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">เขต/อำเภอ: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group  "> <span class="input-group-addon"> <i class="material-icons">terrain</i> </span>
                                                    <div class="form-line">
                                                        <input type="text"  name="city_th" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">จังหวัด: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <select class="form-control show-tick" name="province_th" required>
                                                    <option selected="selected" value="73">กรุงเทพ ฯ</option>
                                                    <option value="1">เชียงใหม่</option>
                                                    <option value="45">ภูเก็ต</option>
                                                    <option value="19">อำนาจเจริญ</option>
                                                    <option value="52">อ่างทอง</option>
                                                    <option value="20">บุรีรัมย์</option>
                                                    <option value="66">ฉะเชิงเทรา</option>
                                                    <option value="18">ชัยนาท</option>
                                                    <option value="21">ชัยภูมิ</option>
                                                    <option value="67">จันทบุรี</option>
                                                    <option value="2">เชียงราย</option>
                                                    <option value="68">ชลบุรี</option>
                                                    <option value="38">ชุมพร</option>
                                                    <option value="22">กาฬสินธุ์</option>
                                                    <option value="9">กำแพงเพชร</option>
                                                    <option value="54">กาญจนบุรี</option>
                                                    <option value="23">ขอนแก่น</option>
                                                    <option value="39">กระบี่</option>
                                                    <option value="3">ลำปาง</option>
                                                    <option value="4">ลำพูน</option>
                                                    <option value="24">เลย</option>
                                                    <option value="55">ลพบุรี</option>
                                                    <option value="5">แม่ฮ่องสอน</option>
                                                    <option value="25">มหาสารคาม</option>
                                                    <option value="26">มุกดาหาร</option>
                                                    <option value="56">นครนายก</option>
                                                    <option value="57">นครปฐม</option>
                                                    <option value="27">นครพนม</option>
                                                    <option value="28">นครราชสีมา</option>
                                                    <option value="7">นครสวรรค์</option>
                                                    <option value="40">นครศรีธรรมราช</option>
                                                    <option value="8">น่าน</option>
                                                    <option value="41">นราธิวาส</option>
                                                    <option value="29">หนองบัวลำภู</option>
                                                    <option value="30">หนองคาย</option>
                                                    <option value="74">นนทบุรี</option>
                                                    <option value="75">ปทุมธานี</option>
                                                    <option value="42">ปัตตานี</option>
                                                    <option value="43">พังงา</option>
                                                    <option value="44">พัทลุง</option>
                                                    <option value="6">พะเยา</option>
                                                    <option value="10">เพชรบูรณ์</option>
                                                    <option value="58">เพชรบุรี</option>
                                                    <option value="11">พิจิตร</option>
                                                    <option value="12">พิษณุโลก</option>
                                                    <option value="53">พระนครศรีอยุธยา</option>
                                                    <option value="13">แพร่</option>
                                                    <option value="69">ปราจีนบุรี</option>
                                                    <option value="59">ประจวบคีรีขันธ์</option>
                                                    <option value="46">ระนอง</option>
                                                    <option value="60">ราชบุรี</option>
                                                    <option value="70">ระยอง</option>
                                                    <option value="31">ร้อยเอ็ด</option>
                                                    <option value="71">สระแก้ว</option>
                                                    <option value="32">สกลนคร</option>
                                                    <option value="76">สมุทรปราการ</option>
                                                    <option value="61">สมุทรสาคร</option>
                                                    <option value="62">สมุทรสงคราม</option>
                                                    <option value="63">สระบุรี</option>
                                                    <option value="47">สตูล</option>
                                                    <option value="33">ศรีสะเกษ</option>
                                                    <option value="64">สิงห์บุรี</option>
                                                    <option value="48">สงขลา</option>
                                                    <option value="14">สุโขทัย</option>
                                                    <option value="65">สุพรรณบุรี</option>
                                                    <option value="49">สุราษฎร์ธานี</option>
                                                    <option value="34">สุรินทร์</option>
                                                    <option value="15">ตาก</option>
                                                    <option value="50">ตรัง</option>
                                                    <option value="72">ตราด</option>
                                                    <option value="35">อุบลราชธานี</option>
                                                    <option value="36">อุดรธานี</option>
                                                    <option value="16">อุทัยธานี</option>
                                                    <option value="17">อุตรดิตถ์</option>
                                                    <option value="51">ยะลา</option>
                                                    <option value="37">ยโสธร</option>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">รหัสไปรษณีย์: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">location_city</i> </span>
                                                    <div class="form-line">
                                                        <input type="number" name="zipCode_th" class="form-control"  Value="10210" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">ประเทศ *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <select class="form-control show-tick" name="country_th" required>
                                                    <option value="AF">AFGHANISTAN</option>
                                                    <option value="AL">ALBANIA</option>
                                                    <option value="DZ">ALGERIA</option>
                                                    <option value="AS">AMERICAN SAMOA</option>
                                                    <option value="AD">ANDORRA</option>
                                                    <option value="AO">ANGOLA</option>
                                                    <option value="AI">ANGUILLA</option>
                                                    <option value="AQ">ANTARCTICA</option>
                                                    <option value="AG">ANTIGUA AND BARBUDA</option>
                                                    <option value="AR">ARGENTINA</option>
                                                    <option value="AM">ARMENIA</option>
                                                    <option value="AW">ARUBA</option>
                                                    <option value="AU">AUSTRALIA</option>
                                                    <option value="AT">AUSTRIA</option>
                                                    <option value="AZ">AZERBAIJAN</option>
                                                    <option value="BS">BAHAMAS</option>
                                                    <option value="BH">BAHRAIN</option>
                                                    <option value="BD">BANGLADESH</option>
                                                    <option value="BB">BARBADOS</option>
                                                    <option value="BY">BELARUS</option>
                                                    <option value="BE">BELGIUM</option>
                                                    <option value="BZ">BELIZE</option>
                                                    <option value="BJ">BENIN</option>
                                                    <option value="BM">BERMUDA</option>
                                                    <option value="BT">BHUTAN</option>
                                                    <option value="BO">BOLIVIA</option>
                                                    <option value="BA">BOSNIA AND HERZEGOWINA</option>
                                                    <option value="BW">BOTSWANA</option>
                                                    <option value="BV">BOUVET ISLAND</option>
                                                    <option value="BR">BRAZIL</option>
                                                    <option value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
                                                    <option value="BN">BRUNEI DARUSSALAM</option>
                                                    <option value="BG">BULGARIA</option>
                                                    <option value="BF">BURKINA FASO</option>
                                                    <option value="BI">BURUNDI</option>
                                                    <option value="KH">CAMBODIA</option>
                                                    <option value="CM">CAMEROON</option>
                                                    <option value="CA">CANADA</option>
                                                    <option value="CV">CAPE VERDE</option>
                                                    <option value="KY">CAYMAN ISLANDS</option>
                                                    <option value="CF">CENTRAL AFRICAN REPUBLIC</option>
                                                    <option value="TD">CHAD</option>
                                                    <option value="CL">CHILE</option>
                                                    <option value="CN">CHINA</option>
                                                    <option value="CX">CHRISTMAS ISLAND</option>
                                                    <option value="CC">COCOS (KEELING) ISLANDS</option>
                                                    <option value="CO">COLOMBIA</option>
                                                    <option value="KM">COMOROS</option>
                                                    <option value="CG">CONGO</option>
                                                    <option value="CK">COOK ISLANDS</option>
                                                    <option value="CR">COSTA RICA</option>
                                                    <option value="CI">COTE D&#39;IVOIRE</option>
                                                    <option value="HR">CROATIA (local name: Hrvatska)</option>
                                                    <option value="CU">CUBA</option>
                                                    <option value="CY">CYPRUS</option>
                                                    <option value="CZ">CZECH REPUBLIC</option>
                                                    <option value="DK">DENMARK</option>
                                                    <option value="DJ">DJIBOUTI</option>
                                                    <option value="DM">DOMINICA</option>
                                                    <option value="DO">DOMINICAN REPUBLIC</option>
                                                    <option value="TP">EAST TIMOR</option>
                                                    <option value="EC">ECUADOR</option>
                                                    <option value="EG">EGYPT</option>
                                                    <option value="SV">EL SALVADOR</option>
                                                    <option value="GQ">EQUATORIAL GUINEA</option>
                                                    <option value="ER">ERITREA</option>
                                                    <option value="EE">ESTONIA</option>
                                                    <option value="ET">ETHIOPIA</option>
                                                    <option value="FK">FALKLAND ISLANDS (MALVINAS)</option>
                                                    <option value="FO">FAROE ISLANDS</option>
                                                    <option value="FJ">FIJI</option>
                                                    <option value="FI">FINLAND</option>
                                                    <option value="FR">FRANCE</option>
                                                    <option value="GF">FRENCH GUIANA</option>
                                                    <option value="PF">FRENCH POLYNESIA</option>
                                                    <option value="TF">FRENCH SOUTHERN TERRITORIES</option>
                                                    <option value="GA">GABON</option>
                                                    <option value="GM">GAMBIA</option>
                                                    <option value="GE">GEORGIA</option>
                                                    <option value="DE">GERMANY</option>
                                                    <option value="GH">GHANA</option>
                                                    <option value="GI">GIBRALTAR</option>
                                                    <option value="GR">GREECE</option>
                                                    <option value="GL">GREENLAND</option>
                                                    <option value="GD">GRENADA</option>
                                                    <option value="GP">GUADELOUPE</option>
                                                    <option value="GU">GUAM</option>
                                                    <option value="GT">GUATEMALA</option>
                                                    <option value="GN">GUINEA</option>
                                                    <option value="GW">GUINEA-BISSAU</option>
                                                    <option value="GY">GUYANA</option>
                                                    <option value="HT">HAITI</option>
                                                    <option value="HM">HEARD AND MC DONALD ISLANDS</option>
                                                    <option value="VA">HOLY SEE (VATICAN CITY STATE)</option>
                                                    <option value="HN">HONDURAS</option>
                                                    <option value="HK">HONG KONG</option>
                                                    <option value="HU">HUNGARY</option>
                                                    <option value="IS">ICELAND</option>
                                                    <option value="IN">INDIA</option>
                                                    <option value="ID">INDONESIA</option>
                                                    <option value="IR">IRAN (ISLAMIC REPUBLIC OF)</option>
                                                    <option value="IQ">IRAQ</option>
                                                    <option value="IE">IRELAND</option>
                                                    <option value="IL">ISRAEL</option>
                                                    <option value="IT">ITALY</option>
                                                    <option value="JM">JAMAICA</option>
                                                    <option value="JP">JAPAN</option>
                                                    <option value="JO">JORDAN</option>
                                                    <option value="KZ">KAZAKHSTAN</option>
                                                    <option value="KE">KENYA</option>
                                                    <option value="KI">KIRIBATI</option>
                                                    <option value="KW">KUWAIT</option>
                                                    <option value="KG">KYRGYZSTAN</option>
                                                    <option value="LA">LAO PEOPLE&#39;S DEMOCRATIC REPUBLIC</option>
                                                    <option value="LV">LATVIA</option>
                                                    <option value="LB">LEBANON</option>
                                                    <option value="LS">LESOTHO</option>
                                                    <option value="LR">LIBERIA</option>
                                                    <option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
                                                    <option value="LI">LIECHTENSTEIN</option>
                                                    <option value="LT">LITHUANIA</option>
                                                    <option value="LU">LUXEMBOURG</option>
                                                    <option value="MO">MACAU</option>
                                                    <option value="MK">MACEDONIA</option>
                                                    <option value="MG">MADAGASCAR</option>
                                                    <option value="MW">MALAWI</option>
                                                    <option value="MY">MALAYSIA</option>
                                                    <option value="MV">MALDIVES</option>
                                                    <option value="ML">MALI</option>
                                                    <option value="MT">MALTA</option>
                                                    <option value="MH">MARSHALL ISLANDS</option>
                                                    <option value="MQ">MARTINIQUE</option>
                                                    <option value="MR">MAURITANIA</option>
                                                    <option value="MU">MAURITIUS</option>
                                                    <option value="YT">MAYOTTE</option>
                                                    <option value="MX">MEXICO</option>
                                                    <option value="FM">MICRONESIA</option>
                                                    <option value="MD">MOLDOVA</option>
                                                    <option value="MC">MONACO</option>
                                                    <option value="MN">MONGOLIA</option>
                                                    <option value="MS">MONTSERRAT</option>
                                                    <option value="MA">MOROCCO</option>
                                                    <option value="MZ">MOZAMBIQUE</option>
                                                    <option value="MM">MYANMAR</option>
                                                    <option value="NA">NAMIBIA</option>
                                                    <option value="NR">NAURU</option>
                                                    <option value="NP">NEPAL</option>
                                                    <option value="NL">NETHERLANDS</option>
                                                    <option value="AN">NETHERLANDS ANTILLES</option>
                                                    <option value="NC">NEW CALEDONIA</option>
                                                    <option value="NZ">NEW ZEALAND</option>
                                                    <option value="NI">NICARAGUA</option>
                                                    <option value="NE">NIGER</option>
                                                    <option value="NG">NIGERIA</option>
                                                    <option value="NU">NIUE</option>
                                                    <option value="NF">NORFOLK ISLAND</option>
                                                    <option value="KP">NORTH KOREA</option>
                                                    <option value="MP">NORTHERN MARIANA ISLANDS</option>
                                                    <option value="NO">NORWAY</option>
                                                    <option value="OM">OMAN</option>
                                                    <option value="PK">PAKISTAN</option>
                                                    <option value="PW">PALAU</option>
                                                    <option value="PA">PANAMA</option>
                                                    <option value="PG">PAPUA NEW GUINEA</option>
                                                    <option value="PY">PARAGUAY</option>
                                                    <option value="PE">PERU</option>
                                                    <option value="PH">PHILIPPINES</option>
                                                    <option value="PN">PITCAIRN</option>
                                                    <option value="PL">POLAND</option>
                                                    <option value="PT">PORTUGAL</option>
                                                    <option value="PR">PUERTO RICO</option>
                                                    <option value="QA">QATAR</option>
                                                    <option value="RE">REUNION</option>
                                                    <option value="RO">ROMANIA</option>
                                                    <option value="RU">RUSSIAN FEDERATION</option>
                                                    <option value="RW">RWANDA</option>
                                                    <option value="KN">SAINT KITTS AND NEVIS</option>
                                                    <option value="LC">SAINT LUCIA</option>
                                                    <option value="VC">SAINT VINCENT AND THE GRENADINES</option>
                                                    <option value="WS">SAMOA</option>
                                                    <option value="SM">SAN MARINO</option>
                                                    <option value="ST">SAO TOME AND PRINCIPE</option>
                                                    <option value="SA">SAUDI ARABIA</option>
                                                    <option value="SN">SENEGAL</option>
                                                    <option value="SC">SEYCHELLES</option>
                                                    <option value="SL">SIERRA LEONE</option>
                                                    <option value="SG">SINGAPORE</option>
                                                    <option value="SK">SLOVAKIA (Slovak Republic)</option>
                                                    <option value="SI">SLOVENIA</option>
                                                    <option value="SB">SOLOMON ISLANDS</option>
                                                    <option value="SO">SOMALIA</option>
                                                    <option value="ZA">SOUTH AFRICA</option>
                                                    <option value="GS">SOUTH GEORGIA &amp; SOUTH SANDWICH ISLANDS</option>
                                                    <option value="KR">SOUTH KOREA</option>
                                                    <option value="ES">SPAIN</option>
                                                    <option value="LK">SRI LANKA</option>
                                                    <option value="SH">ST. HELENA</option>
                                                    <option value="PM">ST. PIERRE AND MIQUELON</option>
                                                    <option value="SD">SUDAN</option>
                                                    <option value="SR">SURINAME</option>
                                                    <option value="SJ">SVALBARD AND JAN MAYEN ISLANDS</option>
                                                    <option value="SZ">SWAZILAND</option>
                                                    <option value="SE">SWEDEN</option>
                                                    <option value="CH">SWITZERLAND</option>
                                                    <option value="SY">SYRIAN ARAB REPUBLIC</option>
                                                    <option value="TW">TAIWAN</option>
                                                    <option value="TJ">TAJIKISTAN</option>
                                                    <option value="TZ">TANZANIA</option>
                                                    <option selected="selected" value="TH">THAILAND</option>
                                                    <option value="TG">TOGO</option>
                                                    <option value="TK">TOKELAU</option>
                                                    <option value="TO">TONGA</option>
                                                    <option value="TT">TRINIDAD AND TOBAGO</option>
                                                    <option value="TN">TUNISIA</option>
                                                    <option value="TR">TURKEY</option>
                                                    <option value="TM">TURKMENISTAN</option>
                                                    <option value="TC">TURKS AND CAICOS ISLANDS</option>
                                                    <option value="TV">TUVALU</option>
                                                    <option value="UG">UGANDA</option>
                                                    <option value="UA">UKRAINE</option>
                                                    <option value="AE">UNITED ARAB EMIRATES</option>
                                                    <option value="UK">UNITED KINGDOM</option>
                                                    <option value="US">UNITED STATES</option>
                                                    <option value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                                    <option value="UY">URUGUAY</option>
                                                    <option value="UZ">UZBEKISTAN</option>
                                                    <option value="VU">VANUATU</option>
                                                    <option value="VE">VENEZUELA</option>
                                                    <option value="VN">VIET NAM</option>
                                                    <option value="VG">VIRGIN ISLANDS (BRITISH)</option>
                                                    <option value="VI">VIRGIN ISLANDS (U.S.)</option>
                                                    <option value="WF">WALLIS AND FUTUNA ISLANDS</option>
                                                    <option value="EH">WESTERN SAHARA</option>
                                                    <option value="YE">YEMEN</option>
                                                    <option value="YU">YUGOSLAVIA</option>
                                                    <option value="ZR">ZAIRE</option>
                                                    <option value="ZM">ZAMBIA</option>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">โทร: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">phone_in_talk</i> </span>
                                                    <div class="form-line">
                                                        <input type="number" name="phoneNumber_th" class="form-control"  Value="0616245961" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">แฟกซ์:  </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">print</i> </span>
                                                    <div class="form-line">
                                                        <input type="number" name="fax_th" class="form-control"  Value="" >
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                            </div><!-- thaiinfo -->
                            <div role="tabpanel" class="tab-pane" id="engInfo"> 
                                 <div class="col-sm-12">
                                                <label class="form-label">Company/Shop Name: *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">store_mall_directory</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="merchantName_eng" class="form-control" Value="Test" required>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
            
                                            <div class="col-sm-12">
                                                <label class="form-label">Shop Brief Detail: * (500 characters max)</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group "> <span class="input-group-addon"> <i class="material-icons">assignment</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="descriptionBrief_eng" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">Name: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group "> <span class="input-group-addon"> <i class="material-icons">accessibility</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="name_eng" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class="col-sm-12">
                                                <label class="form-label">Surname: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">accessibility</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="surname_eng" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">Address 1: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">domain</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="address_eng" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">Address 2: </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group  "> <span class="input-group-addon"> <i class="material-icons">domain</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="addressOptional_eng" class="form-control"  Value="" >
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                               <label class="form-label">City: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group  form-float"> <span class="input-group-addon"> <i class="material-icons">terrain</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="city_eng" class="form-control"  Value="Test" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">Province: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <select class="form-control show-tick" name="province_eng" required>
                                                    <option selected="selected" value="73">กรุงเทพ ฯ</option>
                                                    <option value="1">เชียงใหม่</option>
                                                    <option value="45">ภูเก็ต</option>
                                                    <option value="19">อำนาจเจริญ</option>
                                                    <option value="52">อ่างทอง</option>
                                                    <option value="20">บุรีรัมย์</option>
                                                    <option value="66">ฉะเชิงเทรา</option>
                                                    <option value="18">ชัยนาท</option>
                                                    <option value="21">ชัยภูมิ</option>
                                                    <option value="67">จันทบุรี</option>
                                                    <option value="2">เชียงราย</option>
                                                    <option value="68">ชลบุรี</option>
                                                    <option value="38">ชุมพร</option>
                                                    <option value="22">กาฬสินธุ์</option>
                                                    <option value="9">กำแพงเพชร</option>
                                                    <option value="54">กาญจนบุรี</option>
                                                    <option value="23">ขอนแก่น</option>
                                                    <option value="39">กระบี่</option>
                                                    <option value="3">ลำปาง</option>
                                                    <option value="4">ลำพูน</option>
                                                    <option value="24">เลย</option>
                                                    <option value="55">ลพบุรี</option>
                                                    <option value="5">แม่ฮ่องสอน</option>
                                                    <option value="25">มหาสารคาม</option>
                                                    <option value="26">มุกดาหาร</option>
                                                    <option value="56">นครนายก</option>
                                                    <option value="57">นครปฐม</option>
                                                    <option value="27">นครพนม</option>
                                                    <option value="28">นครราชสีมา</option>
                                                    <option value="7">นครสวรรค์</option>
                                                    <option value="40">นครศรีธรรมราช</option>
                                                    <option value="8">น่าน</option>
                                                    <option value="41">นราธิวาส</option>
                                                    <option value="29">หนองบัวลำภู</option>
                                                    <option value="30">หนองคาย</option>
                                                    <option value="74">นนทบุรี</option>
                                                    <option value="75">ปทุมธานี</option>
                                                    <option value="42">ปัตตานี</option>
                                                    <option value="43">พังงา</option>
                                                    <option value="44">พัทลุง</option>
                                                    <option value="6">พะเยา</option>
                                                    <option value="10">เพชรบูรณ์</option>
                                                    <option value="58">เพชรบุรี</option>
                                                    <option value="11">พิจิตร</option>
                                                    <option value="12">พิษณุโลก</option>
                                                    <option value="53">พระนครศรีอยุธยา</option>
                                                    <option value="13">แพร่</option>
                                                    <option value="69">ปราจีนบุรี</option>
                                                    <option value="59">ประจวบคีรีขันธ์</option>
                                                    <option value="46">ระนอง</option>
                                                    <option value="60">ราชบุรี</option>
                                                    <option value="70">ระยอง</option>
                                                    <option value="31">ร้อยเอ็ด</option>
                                                    <option value="71">สระแก้ว</option>
                                                    <option value="32">สกลนคร</option>
                                                    <option value="76">สมุทรปราการ</option>
                                                    <option value="61">สมุทรสาคร</option>
                                                    <option value="62">สมุทรสงคราม</option>
                                                    <option value="63">สระบุรี</option>
                                                    <option value="47">สตูล</option>
                                                    <option value="33">ศรีสะเกษ</option>
                                                    <option value="64">สิงห์บุรี</option>
                                                    <option value="48">สงขลา</option>
                                                    <option value="14">สุโขทัย</option>
                                                    <option value="65">สุพรรณบุรี</option>
                                                    <option value="49">สุราษฎร์ธานี</option>
                                                    <option value="34">สุรินทร์</option>
                                                    <option value="15">ตาก</option>
                                                    <option value="50">ตรัง</option>
                                                    <option value="72">ตราด</option>
                                                    <option value="35">อุบลราชธานี</option>
                                                    <option value="36">อุดรธานี</option>
                                                    <option value="16">อุทัยธานี</option>
                                                    <option value="17">อุตรดิตถ์</option>
                                                    <option value="51">ยะลา</option>
                                                    <option value="37">ยโสธร</option>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">ZIP/Postal Code: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">location_city</i> </span>
                                                    <div class="form-line">
                                                        <input type="number" name="zipCode_eng" class="form-control"  Value="10210" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">Country *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <select class="form-control show-tick" name="country_eng" required>
                                                    <option value="AF">AFGHANISTAN</option>
                                                    <option value="AL">ALBANIA</option>
                                                    <option value="DZ">ALGERIA</option>
                                                    <option value="AS">AMERICAN SAMOA</option>
                                                    <option value="AD">ANDORRA</option>
                                                    <option value="AO">ANGOLA</option>
                                                    <option value="AI">ANGUILLA</option>
                                                    <option value="AQ">ANTARCTICA</option>
                                                    <option value="AG">ANTIGUA AND BARBUDA</option>
                                                    <option value="AR">ARGENTINA</option>
                                                    <option value="AM">ARMENIA</option>
                                                    <option value="AW">ARUBA</option>
                                                    <option value="AU">AUSTRALIA</option>
                                                    <option value="AT">AUSTRIA</option>
                                                    <option value="AZ">AZERBAIJAN</option>
                                                    <option value="BS">BAHAMAS</option>
                                                    <option value="BH">BAHRAIN</option>
                                                    <option value="BD">BANGLADESH</option>
                                                    <option value="BB">BARBADOS</option>
                                                    <option value="BY">BELARUS</option>
                                                    <option value="BE">BELGIUM</option>
                                                    <option value="BZ">BELIZE</option>
                                                    <option value="BJ">BENIN</option>
                                                    <option value="BM">BERMUDA</option>
                                                    <option value="BT">BHUTAN</option>
                                                    <option value="BO">BOLIVIA</option>
                                                    <option value="BA">BOSNIA AND HERZEGOWINA</option>
                                                    <option value="BW">BOTSWANA</option>
                                                    <option value="BV">BOUVET ISLAND</option>
                                                    <option value="BR">BRAZIL</option>
                                                    <option value="IO">BRITISH INDIAN OCEAN TERRITORY</option>
                                                    <option value="BN">BRUNEI DARUSSALAM</option>
                                                    <option value="BG">BULGARIA</option>
                                                    <option value="BF">BURKINA FASO</option>
                                                    <option value="BI">BURUNDI</option>
                                                    <option value="KH">CAMBODIA</option>
                                                    <option value="CM">CAMEROON</option>
                                                    <option value="CA">CANADA</option>
                                                    <option value="CV">CAPE VERDE</option>
                                                    <option value="KY">CAYMAN ISLANDS</option>
                                                    <option value="CF">CENTRAL AFRICAN REPUBLIC</option>
                                                    <option value="TD">CHAD</option>
                                                    <option value="CL">CHILE</option>
                                                    <option value="CN">CHINA</option>
                                                    <option value="CX">CHRISTMAS ISLAND</option>
                                                    <option value="CC">COCOS (KEELING) ISLANDS</option>
                                                    <option value="CO">COLOMBIA</option>
                                                    <option value="KM">COMOROS</option>
                                                    <option value="CG">CONGO</option>
                                                    <option value="CK">COOK ISLANDS</option>
                                                    <option value="CR">COSTA RICA</option>
                                                    <option value="CI">COTE D&#39;IVOIRE</option>
                                                    <option value="HR">CROATIA (local name: Hrvatska)</option>
                                                    <option value="CU">CUBA</option>
                                                    <option value="CY">CYPRUS</option>
                                                    <option value="CZ">CZECH REPUBLIC</option>
                                                    <option value="DK">DENMARK</option>
                                                    <option value="DJ">DJIBOUTI</option>
                                                    <option value="DM">DOMINICA</option>
                                                    <option value="DO">DOMINICAN REPUBLIC</option>
                                                    <option value="TP">EAST TIMOR</option>
                                                    <option value="EC">ECUADOR</option>
                                                    <option value="EG">EGYPT</option>
                                                    <option value="SV">EL SALVADOR</option>
                                                    <option value="GQ">EQUATORIAL GUINEA</option>
                                                    <option value="ER">ERITREA</option>
                                                    <option value="EE">ESTONIA</option>
                                                    <option value="ET">ETHIOPIA</option>
                                                    <option value="FK">FALKLAND ISLANDS (MALVINAS)</option>
                                                    <option value="FO">FAROE ISLANDS</option>
                                                    <option value="FJ">FIJI</option>
                                                    <option value="FI">FINLAND</option>
                                                    <option value="FR">FRANCE</option>
                                                    <option value="GF">FRENCH GUIANA</option>
                                                    <option value="PF">FRENCH POLYNESIA</option>
                                                    <option value="TF">FRENCH SOUTHERN TERRITORIES</option>
                                                    <option value="GA">GABON</option>
                                                    <option value="GM">GAMBIA</option>
                                                    <option value="GE">GEORGIA</option>
                                                    <option value="DE">GERMANY</option>
                                                    <option value="GH">GHANA</option>
                                                    <option value="GI">GIBRALTAR</option>
                                                    <option value="GR">GREECE</option>
                                                    <option value="GL">GREENLAND</option>
                                                    <option value="GD">GRENADA</option>
                                                    <option value="GP">GUADELOUPE</option>
                                                    <option value="GU">GUAM</option>
                                                    <option value="GT">GUATEMALA</option>
                                                    <option value="GN">GUINEA</option>
                                                    <option value="GW">GUINEA-BISSAU</option>
                                                    <option value="GY">GUYANA</option>
                                                    <option value="HT">HAITI</option>
                                                    <option value="HM">HEARD AND MC DONALD ISLANDS</option>
                                                    <option value="VA">HOLY SEE (VATICAN CITY STATE)</option>
                                                    <option value="HN">HONDURAS</option>
                                                    <option value="HK">HONG KONG</option>
                                                    <option value="HU">HUNGARY</option>
                                                    <option value="IS">ICELAND</option>
                                                    <option value="IN">INDIA</option>
                                                    <option value="ID">INDONESIA</option>
                                                    <option value="IR">IRAN (ISLAMIC REPUBLIC OF)</option>
                                                    <option value="IQ">IRAQ</option>
                                                    <option value="IE">IRELAND</option>
                                                    <option value="IL">ISRAEL</option>
                                                    <option value="IT">ITALY</option>
                                                    <option value="JM">JAMAICA</option>
                                                    <option value="JP">JAPAN</option>
                                                    <option value="JO">JORDAN</option>
                                                    <option value="KZ">KAZAKHSTAN</option>
                                                    <option value="KE">KENYA</option>
                                                    <option value="KI">KIRIBATI</option>
                                                    <option value="KW">KUWAIT</option>
                                                    <option value="KG">KYRGYZSTAN</option>
                                                    <option value="LA">LAO PEOPLE&#39;S DEMOCRATIC REPUBLIC</option>
                                                    <option value="LV">LATVIA</option>
                                                    <option value="LB">LEBANON</option>
                                                    <option value="LS">LESOTHO</option>
                                                    <option value="LR">LIBERIA</option>
                                                    <option value="LY">LIBYAN ARAB JAMAHIRIYA</option>
                                                    <option value="LI">LIECHTENSTEIN</option>
                                                    <option value="LT">LITHUANIA</option>
                                                    <option value="LU">LUXEMBOURG</option>
                                                    <option value="MO">MACAU</option>
                                                    <option value="MK">MACEDONIA</option>
                                                    <option value="MG">MADAGASCAR</option>
                                                    <option value="MW">MALAWI</option>
                                                    <option value="MY">MALAYSIA</option>
                                                    <option value="MV">MALDIVES</option>
                                                    <option value="ML">MALI</option>
                                                    <option value="MT">MALTA</option>
                                                    <option value="MH">MARSHALL ISLANDS</option>
                                                    <option value="MQ">MARTINIQUE</option>
                                                    <option value="MR">MAURITANIA</option>
                                                    <option value="MU">MAURITIUS</option>
                                                    <option value="YT">MAYOTTE</option>
                                                    <option value="MX">MEXICO</option>
                                                    <option value="FM">MICRONESIA</option>
                                                    <option value="MD">MOLDOVA</option>
                                                    <option value="MC">MONACO</option>
                                                    <option value="MN">MONGOLIA</option>
                                                    <option value="MS">MONTSERRAT</option>
                                                    <option value="MA">MOROCCO</option>
                                                    <option value="MZ">MOZAMBIQUE</option>
                                                    <option value="MM">MYANMAR</option>
                                                    <option value="NA">NAMIBIA</option>
                                                    <option value="NR">NAURU</option>
                                                    <option value="NP">NEPAL</option>
                                                    <option value="NL">NETHERLANDS</option>
                                                    <option value="AN">NETHERLANDS ANTILLES</option>
                                                    <option value="NC">NEW CALEDONIA</option>
                                                    <option value="NZ">NEW ZEALAND</option>
                                                    <option value="NI">NICARAGUA</option>
                                                    <option value="NE">NIGER</option>
                                                    <option value="NG">NIGERIA</option>
                                                    <option value="NU">NIUE</option>
                                                    <option value="NF">NORFOLK ISLAND</option>
                                                    <option value="KP">NORTH KOREA</option>
                                                    <option value="MP">NORTHERN MARIANA ISLANDS</option>
                                                    <option value="NO">NORWAY</option>
                                                    <option value="OM">OMAN</option>
                                                    <option value="PK">PAKISTAN</option>
                                                    <option value="PW">PALAU</option>
                                                    <option value="PA">PANAMA</option>
                                                    <option value="PG">PAPUA NEW GUINEA</option>
                                                    <option value="PY">PARAGUAY</option>
                                                    <option value="PE">PERU</option>
                                                    <option value="PH">PHILIPPINES</option>
                                                    <option value="PN">PITCAIRN</option>
                                                    <option value="PL">POLAND</option>
                                                    <option value="PT">PORTUGAL</option>
                                                    <option value="PR">PUERTO RICO</option>
                                                    <option value="QA">QATAR</option>
                                                    <option value="RE">REUNION</option>
                                                    <option value="RO">ROMANIA</option>
                                                    <option value="RU">RUSSIAN FEDERATION</option>
                                                    <option value="RW">RWANDA</option>
                                                    <option value="KN">SAINT KITTS AND NEVIS</option>
                                                    <option value="LC">SAINT LUCIA</option>
                                                    <option value="VC">SAINT VINCENT AND THE GRENADINES</option>
                                                    <option value="WS">SAMOA</option>
                                                    <option value="SM">SAN MARINO</option>
                                                    <option value="ST">SAO TOME AND PRINCIPE</option>
                                                    <option value="SA">SAUDI ARABIA</option>
                                                    <option value="SN">SENEGAL</option>
                                                    <option value="SC">SEYCHELLES</option>
                                                    <option value="SL">SIERRA LEONE</option>
                                                    <option value="SG">SINGAPORE</option>
                                                    <option value="SK">SLOVAKIA (Slovak Republic)</option>
                                                    <option value="SI">SLOVENIA</option>
                                                    <option value="SB">SOLOMON ISLANDS</option>
                                                    <option value="SO">SOMALIA</option>
                                                    <option value="ZA">SOUTH AFRICA</option>
                                                    <option value="GS">SOUTH GEORGIA &amp; SOUTH SANDWICH ISLANDS</option>
                                                    <option value="KR">SOUTH KOREA</option>
                                                    <option value="ES">SPAIN</option>
                                                    <option value="LK">SRI LANKA</option>
                                                    <option value="SH">ST. HELENA</option>
                                                    <option value="PM">ST. PIERRE AND MIQUELON</option>
                                                    <option value="SD">SUDAN</option>
                                                    <option value="SR">SURINAME</option>
                                                    <option value="SJ">SVALBARD AND JAN MAYEN ISLANDS</option>
                                                    <option value="SZ">SWAZILAND</option>
                                                    <option value="SE">SWEDEN</option>
                                                    <option value="CH">SWITZERLAND</option>
                                                    <option value="SY">SYRIAN ARAB REPUBLIC</option>
                                                    <option value="TW">TAIWAN</option>
                                                    <option value="TJ">TAJIKISTAN</option>
                                                    <option value="TZ">TANZANIA</option>
                                                    <option selected="selected" value="TH">THAILAND</option>
                                                    <option value="TG">TOGO</option>
                                                    <option value="TK">TOKELAU</option>
                                                    <option value="TO">TONGA</option>
                                                    <option value="TT">TRINIDAD AND TOBAGO</option>
                                                    <option value="TN">TUNISIA</option>
                                                    <option value="TR">TURKEY</option>
                                                    <option value="TM">TURKMENISTAN</option>
                                                    <option value="TC">TURKS AND CAICOS ISLANDS</option>
                                                    <option value="TV">TUVALU</option>
                                                    <option value="UG">UGANDA</option>
                                                    <option value="UA">UKRAINE</option>
                                                    <option value="AE">UNITED ARAB EMIRATES</option>
                                                    <option value="UK">UNITED KINGDOM</option>
                                                    <option value="US">UNITED STATES</option>
                                                    <option value="UM">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                                    <option value="UY">URUGUAY</option>
                                                    <option value="UZ">UZBEKISTAN</option>
                                                    <option value="VU">VANUATU</option>
                                                    <option value="VE">VENEZUELA</option>
                                                    <option value="VN">VIET NAM</option>
                                                    <option value="VG">VIRGIN ISLANDS (BRITISH)</option>
                                                    <option value="VI">VIRGIN ISLANDS (U.S.)</option>
                                                    <option value="WF">WALLIS AND FUTUNA ISLANDS</option>
                                                    <option value="EH">WESTERN SAHARA</option>
                                                    <option value="YE">YEMEN</option>
                                                    <option value="YU">YUGOSLAVIA</option>
                                                    <option value="ZR">ZAIRE</option>
                                                    <option value="ZM">ZAMBIA</option>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">Tel: * </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">phone_in_talk</i> </span>
                                                    <div class="form-line">
                                                        <input type="number" name="phoneNumber_eng" class="form-control"  Value="0616245961" required>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <label class="form-label">Fax:  </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group  form-float"> <span class="input-group-addon"> <i class="material-icons">print</i> </span>
                                                    <div class="form-line">
                                                        <input type="number" name="fax_eng" class="form-control"  Value="" >
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                
                            </div> <!-- englishinfo --> 
                            <div role="tabpanel" class="tab-pane" id="websiteUrl">
                                            <div class="col-sm-12">
                                               <label class="form-label">Website Url: *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group "> <span class="input-group-addon"> <i class="material-icons">web</i> </span>
                                                    <div class="form-line">
                                                        <input type="url" name="websiteURL_web" class="form-control" Value="http://paysolutions.asia" required>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                               <label class="form-label">Domain Name:</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">domain</i> </span>
                                                    <div class="form-line">
                                                        <input type="text" name="domainName_web" class="form-control" Value="" >
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">Email: *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">email</i> </span>
                                                    <div class="form-line">
                                                        <input type="Email" name="email_web" class="form-control" Value="support@thaiepay.com" required>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">Orders Email: *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">local_mall</i> </span>
                                                    <div class="form-line">
                                                        <input type="email" name="orderEmail_web" class="form-control" Value="support@thaiepay.com" required>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">Mobile: Ex. 0893334444 (หมายเลขนี้จะถูกเก็บเป็นความลับ และไม่แสดงบนหน้าเว็บไซต์) </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">phone_android</i> </span>
                                                    <div class="form-line">
                                                        <input type="number" name="phoneNumber_web" class="form-control" Value="" >
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                
                            </div> <!-- website url -->   
                            <div role="tabpanel" class="tab-pane" id="changePassword">
                                            <div class="col-sm-12">
                                                <label class="form-label">รหัสผ่านเดิม: *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">keyboard</i> </span>
                                                    <div class="form-line">
                                                        <input type="password" name="oldPassword" class="form-control" Value="" required>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">รหัสผ่านใหม่: *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">keyboard</i> </span>
                                                    <div class="form-line">
                                                        <input type="password" name="newPassword" class="form-control" Value="" >
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label">รหัสผ่านใหม่อีกครั้ง: *</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class=" form-float">
                                                <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">keyboard</i> </span>
                                                    <div class="form-line">
                                                        <input type="password" name="rePassword" class="form-control" Value="" required>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                            </div> <!-- change password -->                        
                        </div><!-- tab content -->

                         <div class="form-group text-center">
                                <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                            </div>

                            </div>
                        </div>    
                        </form>
                    </div>
                        </center>
                    </div>
                </div>
            </div>
