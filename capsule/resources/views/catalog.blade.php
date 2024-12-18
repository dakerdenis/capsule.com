@extends('layouts.app')

@section('title', 'Capsule - car proection')

@section('content')

    <div class="main__container">
        <!---header-->
        <header class="header" id="header">
            <div class="header__wrapper">
                <a href="#">
                    <img src="{{ asset('./images/logo_main.png') }}" alt="">
                </a>

                <div class="header__navigation">
                    <div class="header__nav__burger">
                        <img src="{{ asset('./images/circum_menu-burger.png') }}" alt="" srcset="">
                    </div>
                    <div class="header__nav__element">
                        <button data-target="home">Home</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="about_us">About</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="catalog">Catalogue</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="gallery">Gallery</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="contact">Contacts</button>
                    </div>
                    <img src="{{ asset('./images/header_rectangle.png') }}" id="header_rectangle" class="header_rectangle"
                        alt="" />
                </div>


                <div class="header__languages">
                    <button id="languageButton">EN</button>
                    <div class="language-dropdown" id="languageDropdown">
                        <a href="?lang=en">EN</a>
                        <a href="?lang=ru">RU</a>
                        <a href="?lang=az">AZ</a>
                    </div>
                </div>


            </div>
        </header>

       
        <!--- Catalogue --->
        <section class="catalog" id="catalog">

            <div class="ctalog__placeholder">
                <img src="{{ asset('./images/catalog_placeholder.png') }}" alt="" srcset="">
            </div>

            <div class="catalog__wrapper">
                <div class="catalog__name">
                    <p>Catalogue</p>
                </div>

                <div class="catalog__swiper">
                    <div class="catalog__swiper-button">
                        <a href="#">
                            VIEW ALL items
                        </a>
                    </div>

                    <div class="catalog__swiper__wrapper">
                        <div class="glide">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                    <img src="{{ asset('./images/arrow_catalog.png') }}" alt="" srcset="">
                                </button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                    <img src="{{ asset('./images/arrow_catalog.png') }}" alt="" srcset="">
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!---car--->

        <!------Gallery---->
        <section class="gallery" id="gallery">
            <div class="gallery__car__placeholder">
                <img src="{{ asset('./images/gallery_car.png') }}" alt="" srcset="">
            </div>
            <div class="gallery__wrapper">
                <div class="gallery__name">
                    <div class="gallery__name-text">
                        Gallery
                    </div>
                </div>

                <div class="gallery__images__wrapper">
                    <div class="gallery__images__small">
                        <a href="{{ asset('./images/car2.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car2.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('./images/car1.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car1.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__big">
                        <a href="{{ asset('./images/car3.jpeg') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car3.jpeg') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('./images/car4.jpeg') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car4.jpeg') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('./images/car5.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car5.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small gallery__images__medium">
                        <a href="{{ asset('./images/car5.jpeg') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car5.jpeg') }}" alt="Gallery Image" />
                        </a>

                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('./images/car7.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car7.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('./images/car6.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car6.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                </div>



            </div>
        </section>

        <!----contact us car--->

        <!---COntact US----->
        <section class="contact" id="contact">
            <div class="contact_wrapper">
                <div class="contact_wrapper__animation">
                    <div class="contact__text__block">
                        <img src="{{ asset('./images/contact_us.png') }}" alt="">
                    </div>
                    <div class="contact__car__block">
                        <img src="{{ asset('./images/contact_car.png') }}" alt="">
                    </div>
                </div>

                <div class="contact__main__container">
                    <div class="contact__form__container">
                        <form action="#">
                            <div class="contact__form__name-message">
                                <div class="contact__form__block name">
                                    <div class="contact__form__block-name">
                                        Name
                                    </div>
                                    <div class="contact__form__block-input">
                                        <input type="text" name="name" id="name" placeholder="Your name">
                                    </div>
                                </div>

                                <div class="contact__form__block message">
                                    <div class="contact__form__block-name">
                                        How can we help you?
                                    </div>
                                    <div class="contact__form__block-input">
                                        <textarea placeholder="Leave your message" name="" id=""></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="contact__form__number-country">
                                <div class="contact__form__block number">
                                    <div class="contact__form__block-name">
                                        Number
                                    </div>
                                    <div class="contact__form__block-input">
                                        <input type="number" name="number" id="number"
                                            placeholder="Your mobile number">
                                    </div>
                                </div>

                                <div class="contact__form__block country">
                                    <div class="contact__form__block-name">
                                        Country
                                    </div>
                                    <div class="contact__form__block-input">

                                        <select class="contact__form__block-select" id="countries">
                                            <option value="TT" data-capital="Kabul">Select Counry</option>
                                            <option value="AF" data-capital="Kabul">Afghanistan</option>
                                            <option value="AX" data-capital="Mariehamn">Aland Islands</option>
                                            <option value="AL" data-capital="Tirana">Albania</option>
                                            <option value="DZ" data-capital="Algiers">Algeria</option>
                                            <option value="AS" data-capital="Pago Pago">American Samoa</option>
                                            <option value="AD" data-capital="Andorra la Vella">Andorra</option>
                                            <option value="AO" data-capital="Luanda">Angola</option>
                                            <option value="AI" data-capital="The Valley">Anguilla</option>
                                            <option value="AG" data-capital="St. John's">Antigua and Barbuda</option>
                                            <option value="AR" data-capital="Buenos Aires">Argentina</option>
                                            <option value="AM" data-capital="Yerevan">Armenia</option>
                                            <option value="AW" data-capital="Oranjestad">Aruba</option>
                                            <option value="AU" data-capital="Canberra">Australia</option>
                                            <option value="AT" data-capital="Vienna">Austria</option>
                                            <option value="AZ" data-capital="Baku">Azerbaijan</option>
                                            <option value="BS" data-capital="Nassau">Bahamas</option>
                                            <option value="BH" data-capital="Manama">Bahrain</option>
                                            <option value="BD" data-capital="Dhaka">Bangladesh</option>
                                            <option value="BB" data-capital="Bridgetown">Barbados</option>
                                            <option value="BY" data-capital="Minsk">Belarus</option>
                                            <option value="BE" data-capital="Brussels">Belgium</option>
                                            <option value="BZ" data-capital="Belmopan">Belize</option>
                                            <option value="BJ" data-capital="Porto-Novo">Benin</option>
                                            <option value="BM" data-capital="Hamilton">Bermuda</option>
                                            <option value="BT" data-capital="Thimphu">Bhutan</option>
                                            <option value="BO" data-capital="Sucre">Bolivia</option>
                                            <option value="BA" data-capital="Sarajevo">Bosnia and Herzegovina</option>
                                            <option value="BW" data-capital="Gaborone">Botswana</option>
                                            <option value="BR" data-capital="Brasília">Brazil</option>
                                            <option value="IO" data-capital="Diego Garcia">British Indian Ocean
                                                Territory</option>
                                            <option value="BN" data-capital="Bandar Seri Begawan">Brunei Darussalam
                                            </option>
                                            <option value="BG" data-capital="Sofia">Bulgaria</option>
                                            <option value="BF" data-capital="Ouagadougou">Burkina Faso</option>
                                            <option value="BI" data-capital="Bujumbura">Burundi</option>
                                            <option value="CV" data-capital="Praia">Cabo Verde</option>
                                            <option value="KH" data-capital="Phnom Penh">Cambodia</option>
                                            <option value="CM" data-capital="Yaoundé">Cameroon</option>
                                            <option value="CA" data-capital="Ottawa">Canada</option>
                                            <option value="KY" data-capital="George Town">Cayman Islands</option>
                                            <option value="CF" data-capital="Bangui">Central African Republic</option>
                                            <option value="TD" data-capital="N'Djamena">Chad</option>
                                            <option value="CL" data-capital="Santiago">Chile</option>
                                            <option value="CN" data-capital="Beijing">China</option>
                                            <option value="CX" data-capital="Flying Fish Cove">Christmas Island
                                            </option>
                                            <option value="CC" data-capital="West Island">Cocos (Keeling) Islands
                                            </option>
                                            <option value="CO" data-capital="Bogotá">Colombia</option>
                                            <option value="KM" data-capital="Moroni">Comoros</option>
                                            <option value="CK" data-capital="Avarua">Cook Islands</option>
                                            <option value="CR" data-capital="San José">Costa Rica</option>
                                            <option value="HR" data-capital="Zagreb">Croatia</option>
                                            <option value="CU" data-capital="Havana">Cuba</option>
                                            <option value="CW" data-capital="Willemstad">Curaçao</option>
                                            <option value="CY" data-capital="Nicosia">Cyprus</option>
                                            <option value="CZ" data-capital="Prague">Czech Republic</option>
                                            <option value="CI" data-capital="Yamoussoukro">Côte d'Ivoire</option>
                                            <option value="CD" data-capital="Kinshasa">Democratic Republic of the
                                                Congo</option>
                                            <option value="DK" data-capital="Copenhagen">Denmark</option>
                                            <option value="DJ" data-capital="Djibouti">Djibouti</option>
                                            <option value="DM" data-capital="Roseau">Dominica</option>
                                            <option value="DO" data-capital="Santo Domingo">Dominican Republic
                                            </option>
                                            <option value="EC" data-capital="Quito">Ecuador</option>
                                            <option value="EG" data-capital="Cairo">Egypt</option>
                                            <option value="SV" data-capital="San Salvador">El Salvador</option>
                                            <option value="GQ" data-capital="Malabo">Equatorial Guinea</option>
                                            <option value="ER" data-capital="Asmara">Eritrea</option>
                                            <option value="EE" data-capital="Tallinn">Estonia</option>
                                            <option value="ET" data-capital="Addis Ababa">Ethiopia</option>
                                            <option value="FK" data-capital="Stanley">Falkland Islands</option>
                                            <option value="FO" data-capital="Tórshavn">Faroe Islands</option>
                                            <option value="FM" data-capital="Palikir">Federated States of Micronesia
                                            </option>
                                            <option value="FJ" data-capital="Suva">Fiji</option>
                                            <option value="FI" data-capital="Helsinki">Finland</option>
                                            <option value="MK" data-capital="Skopje">Former Yugoslav Republic of
                                                Macedonia</option>
                                            <option value="FR" data-capital="Paris">France</option>
                                            <option value="PF" data-capital="Papeete">French Polynesia</option>
                                            <option value="GA" data-capital="Libreville">Gabon</option>
                                            <option value="GM" data-capital="Banjul">Gambia</option>
                                            <option value="GE" data-capital="Tbilisi">Georgia</option>
                                            <option value="DE" data-capital="Berlin">Germany</option>
                                            <option value="GH" data-capital="Accra">Ghana</option>
                                            <option value="GI" data-capital="Gibraltar">Gibraltar</option>
                                            <option value="GR" data-capital="Athens">Greece</option>
                                            <option value="GL" data-capital="Nuuk">Greenland</option>
                                            <option value="GD" data-capital="St. George's">Grenada</option>
                                            <option value="GU" data-capital="Hagåtña">Guam</option>
                                            <option value="GT" data-capital="Guatemala City">Guatemala</option>
                                            <option value="GG" data-capital="Saint Peter Port">Guernsey</option>
                                            <option value="GN" data-capital="Conakry">Guinea</option>
                                            <option value="GW" data-capital="Bissau">Guinea-Bissau</option>
                                            <option value="GY" data-capital="Georgetown">Guyana</option>
                                            <option value="HT" data-capital="Port-au-Prince">Haiti</option>
                                            <option value="VA" data-capital="Vatican City">Holy See</option>
                                            <option value="HN" data-capital="Tegucigalpa">Honduras</option>
                                            <option value="HK" data-capital="Hong Kong">Hong Kong</option>
                                            <option value="HU" data-capital="Budapest">Hungary</option>
                                            <option value="IS" data-capital="Reykjavik">Iceland</option>
                                            <option value="IN" data-capital="New Delhi">India</option>
                                            <option value="ID" data-capital="Jakarta">Indonesia</option>
                                            <option value="IR" data-capital="Tehran">Iran</option>
                                            <option value="IQ" data-capital="Baghdad">Iraq</option>
                                            <option value="IE" data-capital="Dublin">Ireland</option>
                                            <option value="IM" data-capital="Douglas">Isle of Man</option>
                                            <option value="IL" data-capital="Jerusalem">Israel</option>
                                            <option value="IT" data-capital="Rome">Italy</option>
                                            <option value="JM" data-capital="Kingston">Jamaica</option>
                                            <option value="JP" data-capital="Tokyo">Japan</option>
                                            <option value="JE" data-capital="Saint Helier">Jersey</option>
                                            <option value="JO" data-capital="Amman">Jordan</option>
                                            <option value="KZ" data-capital="Astana">Kazakhstan</option>
                                            <option value="KE" data-capital="Nairobi">Kenya</option>
                                            <option value="KI" data-capital="South Tarawa">Kiribati</option>
                                            <option value="KW" data-capital="Kuwait City">Kuwait</option>
                                            <option value="KG" data-capital="Bishkek">Kyrgyzstan</option>
                                            <option value="LA" data-capital="Vientiane">Laos</option>
                                            <option value="LV" data-capital="Riga">Latvia</option>
                                            <option value="LB" data-capital="Beirut">Lebanon</option>
                                            <option value="LS" data-capital="Maseru">Lesotho</option>
                                            <option value="LR" data-capital="Monrovia">Liberia</option>
                                            <option value="LY" data-capital="Tripoli">Libya</option>
                                            <option value="LI" data-capital="Vaduz">Liechtenstein</option>
                                            <option value="LT" data-capital="Vilnius">Lithuania</option>
                                            <option value="LU" data-capital="Luxembourg City">Luxembourg</option>
                                            <option value="MO" data-capital="Macau">Macau</option>
                                            <option value="MG" data-capital="Antananarivo">Madagascar</option>
                                            <option value="MW" data-capital="Lilongwe">Malawi</option>
                                            <option value="MY" data-capital="Kuala Lumpur">Malaysia</option>
                                            <option value="MV" data-capital="Malé">Maldives</option>
                                            <option value="ML" data-capital="Bamako">Mali</option>
                                            <option value="MT" data-capital="Valletta">Malta</option>
                                            <option value="MH" data-capital="Majuro">Marshall Islands</option>
                                            <option value="MQ" data-capital="Fort-de-France">Martinique</option>
                                            <option value="MR" data-capital="Nouakchott">Mauritania</option>
                                            <option value="MU" data-capital="Port Louis">Mauritius</option>
                                            <option value="MX" data-capital="Mexico City">Mexico</option>
                                            <option value="MD" data-capital="Chișinău">Moldova</option>
                                            <option value="MC" data-capital="Monaco">Monaco</option>
                                            <option value="MN" data-capital="Ulaanbaatar">Mongolia</option>
                                            <option value="ME" data-capital="Podgorica">Montenegro</option>
                                            <option value="MS" data-capital="Little Bay, Brades, Plymouth">Montserrat
                                            </option>
                                            <option value="MA" data-capital="Rabat">Morocco</option>
                                            <option value="MZ" data-capital="Maputo">Mozambique</option>
                                            <option value="MM" data-capital="Naypyidaw">Myanmar</option>
                                            <option value="NA" data-capital="Windhoek">Namibia</option>
                                            <option value="NR" data-capital="Yaren District">Nauru</option>
                                            <option value="NP" data-capital="Kathmandu">Nepal</option>
                                            <option value="NL" data-capital="Amsterdam">Netherlands</option>
                                            <option value="NZ" data-capital="Wellington">New Zealand</option>
                                            <option value="NI" data-capital="Managua">Nicaragua</option>
                                            <option value="NE" data-capital="Niamey">Niger</option>
                                            <option value="NG" data-capital="Abuja">Nigeria</option>
                                            <option value="NU" data-capital="Alofi">Niue</option>
                                            <option value="NF" data-capital="Kingston">Norfolk Island</option>
                                            <option value="KP" data-capital="Pyongyang">North Korea</option>
                                            <option value="MP" data-capital="Capitol Hill">Northern Mariana Islands
                                            </option>
                                            <option value="NO" data-capital="Oslo">Norway</option>
                                            <option value="OM" data-capital="Muscat">Oman</option>
                                            <option value="PK" data-capital="Islamabad">Pakistan</option>
                                            <option value="PW" data-capital="Ngerulmud">Palau</option>
                                            <option value="PA" data-capital="Panama City">Panama</option>
                                            <option value="PG" data-capital="Port Moresby">Papua New Guinea</option>
                                            <option value="PY" data-capital="Asunción">Paraguay</option>
                                            <option value="PE" data-capital="Lima">Peru</option>
                                            <option value="PH" data-capital="Manila">Philippines</option>
                                            <option value="PN" data-capital="Adamstown">Pitcairn</option>
                                            <option value="PL" data-capital="Warsaw">Poland</option>
                                            <option value="PT" data-capital="Lisbon">Portugal</option>
                                            <option value="PR" data-capital="San Juan">Puerto Rico</option>
                                            <option value="QA" data-capital="Doha">Qatar</option>
                                            <option value="CG" data-capital="Brazzaville">Republic of the Congo
                                            </option>
                                            <option value="RO" data-capital="Bucharest">Romania</option>
                                            <option value="RU" data-capital="Moscow">Russia</option>
                                            <option value="RW" data-capital="Kigali">Rwanda</option>
                                            <option value="BL" data-capital="Gustavia">Saint Barthélemy</option>
                                            <option value="KN" data-capital="Basseterre">Saint Kitts and Nevis
                                            </option>
                                            <option value="LC" data-capital="Castries">Saint Lucia</option>
                                            <option value="VC" data-capital="Kingstown">Saint Vincent and the
                                                Grenadines</option>
                                            <option value="WS" data-capital="Apia">Samoa</option>
                                            <option value="SM" data-capital="San Marino">San Marino</option>
                                            <option value="ST" data-capital="São Tomé">Sao Tome and Principe</option>
                                            <option value="SA" data-capital="Riyadh">Saudi Arabia</option>
                                            <option value="SN" data-capital="Dakar">Senegal</option>
                                            <option value="RS" data-capital="Belgrade">Serbia</option>
                                            <option value="SC" data-capital="Victoria">Seychelles</option>
                                            <option value="SL" data-capital="Freetown">Sierra Leone</option>
                                            <option value="SG" data-capital="Singapore">Singapore</option>
                                            <option value="SX" data-capital="Philipsburg">Sint Maarten</option>
                                            <option value="SK" data-capital="Bratislava">Slovakia</option>
                                            <option value="SI" data-capital="Ljubljana">Slovenia</option>
                                            <option value="SB" data-capital="Honiara">Solomon Islands</option>
                                            <option value="SO" data-capital="Mogadishu">Somalia</option>
                                            <option value="ZA" data-capital="Pretoria">South Africa</option>
                                            <option value="KR" data-capital="Seoul">South Korea</option>
                                            <option value="SS" data-capital="Juba">South Sudan</option>
                                            <option value="ES" data-capital="Madrid">Spain</option>
                                            <option value="LK" data-capital="Sri Jayawardenepura Kotte, Colombo">Sri
                                                Lanka</option>
                                            <option value="PS" data-capital="Ramallah">State of Palestine</option>
                                            <option value="SD" data-capital="Khartoum">Sudan</option>
                                            <option value="SR" data-capital="Paramaribo">Suriname</option>
                                            <option value="SZ" data-capital="Lobamba, Mbabane">Swaziland</option>
                                            <option value="SE" data-capital="Stockholm">Sweden</option>
                                            <option value="CH" data-capital="Bern">Switzerland</option>
                                            <option value="SY" data-capital="Damascus">Syrian Arab Republic</option>
                                            <option value="TW" data-capital="Taipei">Taiwan</option>
                                            <option value="TJ" data-capital="Dushanbe">Tajikistan</option>
                                            <option value="TZ" data-capital="Dodoma">Tanzania</option>
                                            <option value="TH" data-capital="Bangkok">Thailand</option>
                                            <option value="TL" data-capital="Dili">Timor-Leste</option>
                                            <option value="TG" data-capital="Lomé">Togo</option>
                                            <option value="TK" data-capital="Nukunonu, Atafu,Tokelau">Tokelau</option>
                                            <option value="TO" data-capital="Nukuʻalofa">Tonga</option>
                                            <option value="TT" data-capital="Port of Spain">Trinidad and Tobago
                                            </option>
                                            <option value="TN" data-capital="Tunis">Tunisia</option>
                                            <option value="TR" data-capital="Ankara">Turkey</option>
                                            <option value="TM" data-capital="Ashgabat">Turkmenistan</option>
                                            <option value="TC" data-capital="Cockburn Town">Turks and Caicos Islands
                                            </option>
                                            <option value="TV" data-capital="Funafuti">Tuvalu</option>
                                            <option value="UG" data-capital="Kampala">Uganda</option>
                                            <option value="UA" data-capital="Kiev">Ukraine</option>
                                            <option value="AE" data-capital="Abu Dhabi">United Arab Emirates</option>
                                            <option value="GB" data-capital="London">United Kingdom</option>
                                            <option value="US" data-capital="Washington, D.C.">United States of
                                                America</option>
                                            <option value="UY" data-capital="Montevideo">Uruguay</option>
                                            <option value="UZ" data-capital="Tashkent">Uzbekistan</option>
                                            <option value="VU" data-capital="Port Vila">Vanuatu</option>
                                            <option value="VE" data-capital="Caracas">Venezuela</option>
                                            <option value="VN" data-capital="Hanoi">Vietnam</option>
                                            <option value="VG" data-capital="Road Town">Virgin Islands (British)
                                            </option>
                                            <option value="VI" data-capital="Charlotte Amalie">Virgin Islands (U.S.)
                                            </option>
                                            <option value="EH" data-capital="Laayoune">Western Sahara</option>
                                            <option value="YE" data-capital="Sana'a">Yemen</option>
                                            <option value="ZM" data-capital="Lusaka">Zambia</option>
                                            <option value="ZW" data-capital="Harare">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="contact__form__email-contact">
                                <div class="contact__form__block email">
                                    <div class="contact__form__block-name">
                                        E-mail
                                    </div>
                                    <div class="contact__form__block-input">
                                        <input type="email" name="email" id="email"
                                            placeholder="Your mobile number">
                                    </div>
                                </div>

                                <div class="contact__form__block method">
                                    <div class="contact__form__block-name">
                                        How can we contact you?
                                    </div>
                                    <div class="contact__form__block-input">
                                        <div class="radio-group">
                                            <label class="radio">
                                                <input type="radio" name="contact-method" value="email" />
                                                <span class="radio-label">E-Mail</span>
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="contact-method" value="phone" />
                                                <span class="radio-label">Phone</span>
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="contact-method" value="both" />
                                                <span class="radio-label">Both</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="contact__from-terms">
                                <div class="checkbox-wrapper">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="consent" />
                                        <span class="checkbox-label"></span>
                                    </label>
                                    <span class="checkbox-text">
                                        I give my consent to the processing of personal data in accordance with the <a
                                            href="#">Terms*</a>
                                    </span>
                                </div>

                            </div>



                            <div class="contact__form-submit">
                                <button type="submit">
                                    SEND REQUEST
                                </button>
                            </div>
                        </form>
                        <div class="contact__form__container-blur"></div>
                        <div class="contact__form__container-bg"></div>
                    </div>

                    <div class="contact__map__logo">
                        <div class="contact__map-logo">
                            <img src="{{ './images/logo_main.png' }}" alt="" srcset="">
                        </div>

                        <div class="contact__map-map">


                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2504.3025876326838!2d-80.16251344978679!3d32.95325042867251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sru!2saz!4v1734336701034!5m2!1sru!2saz"
                                width="100%" height="100%" style="border: none;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="contact__adress__block">
                        <div class="contact__adress__element">
                            <div class="contact__adress__name">
                                Address:
                            </div>
                            <div class="contact__adress__content">
                                91 Main St. New York, USA
                            </div>
                        </div>
                        <div class="contact__adress__element">
                            <div class="contact__adress__name">
                                Phone:
                            </div>
                            <div class="contact__adress__content">
                                +994 44 444 44 44
                            </div>
                        </div>
                        <div class="contact__adress__element">
                            <div class="contact__adress__name">
                                Email:
                            </div>
                            <div class="contact__adress__content">
                                hello@capsule.com
                            </div>
                        </div>
                    </div>
                </div>



                <div class="footer__copyright">
                    <p>Copyright {{ date('Y') }} &copy;</p>
                </div>


            </div>
        </section>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const glide = new Glide('.glide', {
                type: 'carousel',
                startAt: 0,
                perView: 4,
                focusAt: 'center',
                gap: 40,
                autoplay: 10000,

                animationDuration: 800,
                breakpoints: {
                    1024: {
                        perView: 2
                    },
                    600: {
                        perView: 2
                    }
                }
            });

            glide.on('move', () => {
                const slides = document.querySelectorAll('.glide__slide');
                slides.forEach(slide => slide.classList.remove('is-next'));
                const nextIndex = (glide.index + 1) % slides.length;
                slides[nextIndex].classList.add('is-next');
            });

            glide.mount();
        });
    </script>

    <script>
        function format(item, state) {
            if (!item.id) {
                return item.text;
            }
            var countryUrl = "https://hatscripts.github.io/circle-flags/flags/";
            var stateUrl = "https://oxguy3.github.io/flags/svg/us/";
            var url = state ? stateUrl : countryUrl;
            var img = $("<img>", {
                class: "img-flag",
                width: 26,
                src: url + item.element.value.toLowerCase() + ".svg"
            });
            var span = $("<span>", {
                text: " " + item.text
            });
            span.prepend(img);
            return span;
        }

        $(document).ready(function() {
            $("#countries").select2({
                templateResult: function(item) {
                    return format(item, false);
                }
            });
            $("#us-states").select2({
                templateResult: function(item) {
                    return format(item, true);
                }
            });
        });
    </script>







@endsection
