<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ข้อมูลส่วนตัวและบัญชีธนาคาร</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><i class="material-icons">contact_phone</i><a href="<?php echo base_url(); ?>contact/contact/contact_des"> ข้อมูลร้านค้า</a></li>           
                <li class="breadcrumb-item active"><i class="material-icons">supervisor_account</i><a href="<?php echo base_url(); ?>merchant/merchant/merchant_bank_detail"> ข้อมูลส่วนตัวและบัญชีธนาคาร</a></li>
                <li class="breadcrumb-item active"><i class="material-icons">chrome_reader_mode</i> แก้ไขข้อมูลบัญชีธนาคาร</li>
            </ul>
        </div>
        
        


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                    <div class="header">
                        <h2>แก้ไขบัญชีธนาคาร</h2>                     
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                               <label class="form-label">Merchant ID:</label>
                               <div class="form-float">
                                   <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">perm_identity</i> </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" Value="48509355" name="Merchant_ID" required disabled>
                                        </div>
                                    </div>

                             <div class="">
                             <label class="form-label">ชื่อบัญชี:*</label>
                                </div>
                                <div class=" form-float">
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">label</i> </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" value="เพย์โซลูชัน" required>
                                        </div>
                                    </div>
                                    </div>
                                <div class="">
                                    <label class="form-label">เลขที่บัญชี:*</label>
                                </div>
                                <div class=" form-float">
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">credit_card</i> </span>
                                        <div class="form-line">
                                            <input type="number" class="form-control date" value="1234567890" required>
                                        </div>
                                    </div>
                                    </div>
                                <div class="">
                                <label class="form-label">สาขา:*</label>
                                <div class=" form-float">
                                    <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">domain</i> </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" value="รัชดา" required>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="">
                                <label class="form-label">ประเภท:*</label>
                                <div class=" form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" required>
                                            <option  selected="selected" value="S">ออมทรัพย์</option>
                                            <option value="F">ฝากประจำ</option>
                                            <option value="C">กระแสรายวัน</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="">
                                <label class="form-label">ธนาคาร:*</label>
                                <div class=" form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" required>
                                            <option value="BBL">ธ. กรุงเทพฯ</option>
                                            <option value="KTB">ธ. กรุงไทย</option>
                                            <option value="KSRI">ธ. กรุงศรีอยุธยา</option>
                                            <option selected="selected" value="KBANK">ธ. กสิกรไทย</option>
                                            <option value="KK">ธ. เกียรตินาคิน จำกัด (มหาชน)</option>
                                            <option value="CIMB">ธ. ซีไอเอ็มบี ไทย จำกัด (มหาชน)</option>
                                            <option value="TMB">ธ. ทหารไทย จำกัด (มหาชน)</option>
                                            <option value="TISCO">ธ. ทิสโก้ จำกัด (มหาชน)</option>
                                            <option value="SCB">ธ. ไทยพาณิชย์</option>
                                            <option value="TNC">ธ. ธนชาต</option>
                                            <option value="BOA">ธ. ยูโอบี</option>
                                            <option value="SC">ธ. สแตนดาร์ดชาร์เตอร์ด (ไทย) จำกัด (มหาชน)</option>
                                            <option value="HSBC">ธ. เอชเอสบีซี</option>
                                            <option value="ICBC">ธ. ไอซีบีซี (ไทย) จำกัด (มหาชน)</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="">
                                <label class="form-label">เขต:*</label>
                                <div class=" form-float">
                                    <div class=" form-line">
                                        <div class="demo-radio-button">
                                            <input name="group1" type="radio" class="with-gap radio-col-blue" id="radio_3" checked="checked" />
                                            <label for="radio_3">กรุงเทพฯ</label>
                                            <input name="group1" type="radio" id="radio_4" class="with-gap radio-col-blue" />
                                            <label for="radio_4">ต่างจังหวัด</label> 
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="">
                                <label class="form-label">ประเทศ:*</label>
                                <div class=" form-float">
                                    <div class="form-line">
                                        <select class="form-control show-tick" required>
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
                                </div>
                            </div>

                             <div class="form-group text-center">
                                <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                            </div>
                        </div>    
                    </div>
  
                </div>
            </div>
        </div>


