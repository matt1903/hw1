<!doctype html>
<html>
    <head>
        <link rel = "stylesheet" href = "about.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />     <!--cloud-nav-->
        <meta name="viewport" content="width=device-width, initial-scale=1">    <!--tag per la visualizzazione mobile-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   <!--community-arrow icon-->
        <!-- Link per il font Open Sans-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />  <!--fine font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />  <!--Send question icon-->
        <script defer src = 'about.js'></script>
        <meta charset = 'utf-8'>
    </head> 
    <body>
        <div>
            <header>
                <nav id = 'nav-container'>
                    <div class = 'first-level-nav'>
                        <div class = 'first-menu-left'>
                            <div class = 'PRO'>
                                <a><span class = 'longPro'>PROFESSIONAL</span><span class = 'pro'>PRO</span></a>
                            </div>
                            <div class = 'EDU'>
                                <a><span class = 'longEdu'>EDUCATION</span><span class = 'edu'>EDU</span></a>
                            </div>
                            <div class = 'STORE'><a href = "store.php"><span>STORE</span></a></div>
                        </div>

                        <div class = 'first-menu-right'>
                            <div id = 'search-div'>
                                <form id = 'search-form'>
                                    <div class = 'search-icon'><img src = 'Icone\search-icon.png'></div>
                                    <input type = 'text' placeholder="Search on Arduino.cc" id = 'search-input'>
                                    <!--<span>Search on Arduino.cc</span>-->
                                </form>
                            </div>
                            <div class = 'cloud-module'>
                                <a><span class="material-symbols-outlined">filter_drama</span></a>
                            </div>
                            <div class = 'sign-in-module'>
                                <div><a href = 'login.php'><span>SIGN IN</span></a></div>
                            </div>
                        </div>
                    </div>

                    <div class = 'second-level-nav'>
                        <a class = 'logo-box' href = "index_arduino.php">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 25" fill="none" data-inject-url="https://cdn.arduino.cc/header-footer/prod/assets/headerLogo-arduino.svg" class = 'arduino-logo'>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M51.25 12.5C51.25 5.60219 45.5773 0 38.6242 0C37.984 0 37.3261 0.0364964 36.6859 0.145985C31.2799 0.930657 27.6522 4.92701 25.625 7.9927C23.5978 4.92701 19.9701 0.930657 14.5641 0.145985C13.9239 0.0547445 13.266 0 12.6258 0C5.65493 0 0 5.60219 0 12.5C0 19.3978 5.67271 25 12.6258 25C13.266 25 13.9239 24.9635 14.5819 24.854C19.9879 24.0511 23.6155 20.0547 25.6428 16.9891C27.67 20.0547 31.2977 24.0511 36.7037 24.854C37.3439 24.9453 38.0018 25 38.6598 25C45.5773 25 51.25 19.3978 51.25 12.5ZM13.9416 20.4744C13.4971 20.5474 13.0525 20.5657 12.6079 20.5657C8.01996 20.5657 4.30336 16.9343 4.30336 12.5C4.30336 8.04744 8.03774 4.4343 12.6257 4.4343C13.0703 4.4343 13.5148 4.4708 13.9594 4.52554C19.0631 5.27372 22.1751 10.4379 23.242 12.5C22.1573 14.5803 19.0275 19.7263 13.9416 20.4744ZM37.2905 4.52554C32.1868 5.27372 29.057 10.4379 28.0079 12.5C29.057 14.562 32.1868 19.7263 37.2905 20.4744C37.735 20.5292 38.1796 20.5657 38.6242 20.5657C43.1944 20.5657 46.9287 16.9525 46.9287 12.5C46.9287 8.06569 43.2121 4.4343 38.6242 4.4343C38.1796 4.4343 37.735 4.4708 37.2905 4.52554ZM9.06449 11.161H16.7004V13.5642H9.06449V11.161ZM42.1479 13.5817H39.5728V16.1077H37.1049V13.5817H34.5298V11.161H37.1049V8.63499H39.5728V11.161H42.1479V13.5817Z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <div class = 'second-level-container'>
                            <div class = 'second-level-menu'>
                                <div class = 'menu-app-div'><a><span>HARDWARE</span></a></div>
                                <div class = 'menu-app-div'><a><span>SOFTWARE</span></a></div>
                                <div class = 'menu-app-div'><a><span>CLOUD</span></a></div>
                                <div class = 'menu-app-div'><a><span>DOCUMENTATION</span></a></div>
                                <div class = 'menu-app-div'><a><span>COMMUNITY</span></a></div>
                                <div class = 'menu-app-div'><a><span>BLOG</span></a></div>
                            </div>
                        </div>
                        <!-- menu burger per quando lo schermo è troppo piccolo -->
                        <div class = 'burger-menu'>
                            <div class = 'burger-icon'>
                                <span class="material-symbols-outlined">menu</span>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>

        <div id = 'root'>
            <div id = 'side-bar'>
                <div id = 'side-title'>
                    <h5>TABLE OF CONTENTS</h5>
                </div>
                <ul id = 'side-list'>
                    <li class = 'option-list'><a href = "#what-ardu">What is Arduino?</a></li>
                    <li class = 'option-list'><a href = "#missNvis">Our mission and Vision</a></li>
                    <li class = 'option-inner-list'><a href = "#maker">Maker</a></li>
                    <li class = 'option-inner-list'><a href = "#edu">Education</a></li>
                    <li class = 'option-inner-list'><a href = "#pro">Professional</a></li>
                    <li class = 'option-list'><a href = "#ardu-team">The Arduino Team</a></li>
                    <li class = 'option-inner-list'><a href = "#founders">Founders</a></li>
                    <li class = 'option-inner-list'><a href = "#menage-team">Menagement team</a></li>
                    <li class = 'option-list'><a href = "#tech-part">Tech partnership</a></li>
                </ul>
            </div>

            <div id = 'main-content'>
                <h1 id = 'about-ardu' class = 'main-title'>About Arduino</h1>
                    <h2 id = 'what-ardu' class = 'h2-title'>What is Arduino?</h2>
                        <p>Arduino designs, manufactures, and supports electronic devices and software, allowing people around the world to easily access advanced technologies that interact with the physical world. Our products are straightforward, simple, and powerful, ready to satisfy users’ needs from students to makers and all the way to professional developers.</p>
                <h2 id = 'missNvis' class = 'h2-title'>Our mission and vision</h2>
                    <p>Arduino’s mission is to enable anyone to enhance their lives through accessible electronics and digital technologies. There was once a barrier between the electronics, design, and programming world and the rest of the world. Arduino has broken down that barrier.</p>
                    <p>Over the years, our products have been the brains behind thousands of projects, from everyday objects to complex scientific instruments. A worldwide community, comprising students, hobbyists, artists, programmers, and professionals, has gathered around this open-source platform, their contributions adding up to an incredible amount of accessible knowledge.</p>
                    <p>Our vision is to make Arduino available to everyone, whether you are a student, maker or professional, which is why we now have three segments to our business. These segments work together as an ecosystem with a shared mindset: we started with Maker, and that has evolved into Education and PRO solutions.</p>
                <h3 id = 'maker' class = 'h3-title'><b>Maker</b></h3>
                    <p><em>Find creative solutions to everyday challenges</em></p>
                    <p>For makers around the world, our goal is to democratize the most advanced technologies and create a new set of opportunities for creative people, whether that’s through connected products, advanced sensors, Cloud &amp; Apps, machine learning, AI, etc.</p>
                    <p>Arduino empowers creative minds to master technology and intuitively solve everyday problems. Our platform simplifies the use of otherwise complex tools. For example, programming a securely connected IoT device is just a few clicks away with the use of the <b>Arduino Cloud.</b></p>
                <h3 id = 'edu' class = 'h3-title'><b>Education</b></h3>
                    <p><em>Empower the next generations of students to be the disruptors of the future</em></p>
                    <p>For middle school, high school, and university educators who want to deliver relevant, fun, and creative STEAM lessons that enable all students to thrive, Arduino Education’s open-source approach and cross-curriculum content are essential tools that develop and empower students as they progress through their STEAM education.</p>
                    <p>Our classroom programs include kits, bundles, and boards with project-based learning paths for individual and collaborative educational approaches. Teaching remotely? We have kits designed for remote, individual learning, making hands-on STEAM education accessible even when the classroom isn’t.</p>
                <h3 id = 'pro' class = 'h3-title'><b>Professional</b></h3>
                    <p><em>Enable businesses of any size to exploit the potential of AI and IoT</em></p>
                    <p>The PRO line is designed to enable businesses to quickly and securely connect remote sensors to business logic within one simple IoT application development platform, transferring the productivity and creativity that makers enjoy with Arduino into the business world.</p>
                    <p>We aim to help companies transform their business models with IoT, providing robust, hackable, and understandable IoT hardware and SaaS platforms.</p>
                    <p>Arduino can support the full development, production, and operation lifecycle, from hardware and firmware to low code, Cloud, and mobile apps.</p>
                <h2 id = 'ardu-team' class = 'h2-title'>Arduino team</h2>
                <h3 id = "founders" class = 'h3-title'><b>Founders</b></h3>
                    <table>
                        <tr>
                            <th>Image</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><img src = "Immagini/about/arduino_team/massimo-banzi.png"></td>
                            <td>
                                <b>Massimo Banzi</b><br>
                                <em>Co-founder, Chairman &amp; CMO</em>
                                <p>Massimo Banzi is an interaction designer, educator, open-source hardware pioneer, and TED speaker. His background is in electrical engineering, but he spent most of his early career working as a software architect before spending four years at the Interaction Design Institute Ivrea as an Associate Professor. He has taught workshops and has been a guest speaker at institutions all over the world.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="Immagini/about/arduino_team/david-cuartielles.png"></td>
                            <td>
                                <b>David Cuartielles</b><br>
                                <em>Co-founder</em>
                                <p>David is a university lecturer and leads the Content Unit at Arduino.  He holds an MSc in Telecommunications Engineering and a PhD in Interaction Design, and has lectured at Malmö University in Sweden since 2000. David has been a visiting scholar at universities in the Americas, Europe, and Asia, has written several books on programming, and is an international speaker on open-source hardware and STEAM education. </p>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="Immagini/about/arduino_team/tom-igoe.png"></td>
                            <td>
                                <b>Tom Igoe</b><br>
                                <em>Co-founder</em>
                                <p>Tom Igoe is the area head for physical computing courses, in which students learn to consider the motivations and actions of the people for whom they're designing as the foundation for physical interaction design. His research interests also include networks, lighting design, the environmental and social impacts of technology development, and monkeys. He has written four books and a number of articles related to electronics and physical interaction. </p>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="Immagini/about/arduino_team/david-mellis.png"></td>
                            <td>
                                <b>David Mellis</b><br>
                                <em>Co-founder</em>
                                <p>David A. Mellis is a software architect at Autodesk, building software for circuit design. His work seeks to engage new audiences in using electronics for creative and do-it-yourself practices. Previously, David was a postdoc at UC Berkeley with Björn Hartmann. David completed his graduate studies at the MIT Media Lab, getting his PhD in Mitchel Resnick's Lifelong Kindergarten group and his master's in Leah Buechley's High-Low Tech group. </p>
                            </td>
                        </tr>
                    </table>
                <h3 id = 'menage-team' class = 'h3-title'><b>Menagement team</b></h2>
                    <table>
                        <tr>
                            <td><img src="Immagini/about/arduino_team/fabio-violante.png"></td>
                            <td>
                                <b>Fabio Violante</b><br>
                                <em>CEO</em>
                                <p>Fabio has been working with Arduino since late 2015, and became CEO in 2017. Prior to joining Arduino, he co-founded enterprise software firm Neptuny, before selling it to BMC Software and acting as CTO for five years.</p>
                                <p> Fabio is also a co-founder of The Moviri Group (which includes Moviri, Cleafy, Contentwise, and Akamas), and holds a Ph.D. in Computer Engineering from Politecnico di Milano.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="Immagini/about/arduino_team/pietro-dore.png"></td>
                            <td>
                                <b>Pietro Dore</b><br>
                                <em>Group GM &amp; CBO</em>
                                <p>Pietro joined Arduino in 2014 following more than 15 years of executive experience at high-growth tech companies across Europe.</p>
                                <p> Prior to that, he was a Senior Manager at Bain &amp; Co. Pietro holds an MBA from Columbia Business School.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="Immagini/about/arduino_team/giuseppe-ferrara.png" ></td>
                            <td>
                                <b>Giuseppe Ferrara</b><br>
                                <em>Finance director</em>
                                <p>Giuseppe has been with Arduino since 2017 and has more than 20 years of experience in the finance field, with experience across different sectors in Italy and the UK.</p>
                            </td>
                        </tr>
                    </table>
                <h2 id = 'tech-part' class = 'h2-title'>Tech partnership</h2>
                    <p>We work closely with technology leaders around the world to ensure our products are always cutting edge, aligned with the latest trends, and grounded in the real world.</p>
                    <table>
                        <tr>
                            <td><img src = "Immagini/about/tech-partner/altium.svg"></td>
                            <td><p>Altium is a leading CAD software tool manufacturer. We collaborate on desktop and web-based electronic design tools.</p></td>
                        </tr>
                        <tr>
                            <td><img src = "Immagini/about/tech-partner/arm.svg"></td>
                            <td><p>ARM is a key MCU technology and operating system partner. Our deep collaboration includes market development. </p></td>
                        </tr>
                        <tr>
                            <td><img src = "Immagini/about/tech-partner/bosch.svg"></td>
                            <td><p>Bosch is a development partner and hardware supplier for a variety of sensors including pressure, temperature, and humidity.</p></td>
                        </tr>
                        <tr>
                            <td><img src = "Immagini/about/tech-partner/google.svg"></td>
                            <td><p>Google is an Arduino partner in the development of machine learning for microcontrollers with TensorFlow Lite, and a partner in Education with Arduino taking on the next generation of the Science Journal enabling children to learn interactively. </p></td>
                        </tr>
                        <tr>
                            <td><img src = "Immagini/about/tech-partner/intel.svg"></td>
                            <td><p>Intel is a technology on hardware partner of low power FPGA. </p></td>
                        </tr>
                        <tr>
                            <td><img src = "Immagini/about/tech-partner/microchip.svg"></td>
                            <td><p>Microchip is a chip supplier in Arduino solutions providing microcontroller units, Bluetooth® Low Energy, touch sensors, and memory chips.</p></td>
                        </tr>
                        <tr>
                            <td><img src = "Immagini/about/tech-partner/raspberry-pi.svg"></td>
                            <td><p>Raspberry Pi is an ecosystem partner and chip supplier for the latest Arduino Nano RP2040 Connect.  </p></td>
                        </tr>
                        <tr>
                            <td><img src = "Immagini/about/tech-partner/Renesas_Electronics_logo.svg"></td>
                            <td><p>Renesas Electronics Corporation is a global leader in microcontrollers, analog, power, and SoC products. </p></td>
                        </tr>
                        <tr>
                            <td><img src = "Immagini/about/tech-partner/st-microelectronics.svg"></td>
                            <td><p>ST is a partner and supplier for chips for microcontroller units, security, motion sensors, and a variety of other chips. </p></td>
                        </tr>
                    </table>
            </div>
        </div>
        
        <footer id = 'footer'>
            <div class = 'footer-head'>
                <div class = 'arduino-text'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="102" height="14" fill="none" data-inject-url="https://cdn.arduino.cc/header-footer/prod/assets/footerLogo-arduino.svg">
                        <path d="M0 13.812L4.162.19h3.784l4.351 13.622H8.703l-.757-2.649H4.162l-.757 2.649H0zM6.054 3.595L4.73 8.515h2.648l-1.324-4.92zM14.378.19h5.486c3.784 0 5.108 1.891 5.108 4.54 0 1.892-.756 3.216-2.27 3.973l2.649 4.919h-3.973l-1.892-4.163h-1.703v4.352h-3.405V.189zm7.19 4.54c0-1.135-.38-1.892-2.082-1.892h-1.703v3.784h1.703c1.324.189 2.081-.379 2.081-1.892zM27.811.19h4.352c5.108 0 6.81 2.459 6.81 6.62 0 3.217-.945 6.812-6.81 6.812h-4.54V.189h.188zm3.406 2.648v7.946h1.324c2.838 0 3.027-1.703 3.027-3.973 0-2.649-.19-3.973-3.216-3.973h-1.135zM48.81.19h3.217V9.08C52.027 13.054 49 14 46.541 14c-2.27 0-5.298-.757-5.298-4.919V.19h3.406v8.324c0 2.27.756 2.838 2.08 2.838 1.514 0 2.082-.756 2.082-2.838V.19zM55.054 10.973h3.594V3.027h-3.405V.189h10.405v2.838h-3.594v7.946h3.594v2.838H55.243v-2.838h-.19zM71.325 13.622h-3.217V.189h3.784l4.352 8.135V.19h3.216v13.622h-3.406l-4.54-8.703-.19 8.514zM93.082 7c0 3.973-1.514 7-5.865 7-3.973 0-5.676-2.27-5.676-6.81 0-4.163 1.514-7.19 5.676-7.19 3.973 0 5.865 1.703 5.865 7zm-3.595 0c0-3.405-.19-4.162-2.27-4.162-1.703-.19-2.081.946-2.081 4.351 0 2.649.189 4.162 2.08 4.162 2.082-.189 2.271-1.324 2.271-4.351zM95.352 3.027C95.352 1.324 96.676 0 98.189 0c1.703 0 3.027 1.324 3.027 3.027s-1.324 3.027-3.027 3.027c-1.513-.19-2.837-1.513-2.837-3.027zm5.297 0c0-1.324-.946-2.46-2.46-2.46-1.324 0-2.27.947-2.27 2.46 0 1.514 1.135 2.46 2.27 2.46 1.514 0 2.46-.946 2.46-2.46zm-3.973-1.892h1.703c1.135 0 1.513.568 1.513 1.135 0 .379-.19.757-.567 1.135l.567 1.325h-1.135l-.378-1.135H98V4.73h-1.135V1.135h-.19zm1.513 1.703c.379 0 .568-.19.568-.568 0-.378-.19-.378-.568-.378h-.378v.946h.378z" fill="currentColor"></path>
                  </svg>
                </div>
                <!-- pulsante per tornare in cima alla pagina-->
                <div class = 'back-top'>
                    <div class = 'row-icon'>
                        <svg xmlns = "http://www.w3.org/2000/svg" id="control-icon-back2top" viewBox="0 0 15 14" data-inject-url="https://cdn.arduino.cc/header-footer/prod/assets/footerControl-back2top.svg">
                            <path d="M10.3125 8.40628C10.2508 8.40664 10.1896 8.39481 10.1325 8.37149C10.0754 8.34816 10.0235 8.31379 9.97965 8.27034L7.49996 5.78597L5.02028 8.27034C4.97657 8.31405 4.92469 8.34872 4.86758 8.37237C4.81048 8.39603 4.74927 8.4082 4.68746 8.4082C4.62566 8.4082 4.56445 8.39603 4.50735 8.37237C4.45024 8.34872 4.39836 8.31405 4.35465 8.27034C4.31095 8.22664 4.27628 8.17475 4.25262 8.11765C4.22897 8.06054 4.2168 7.99934 4.2168 7.93753C4.2168 7.87572 4.22897 7.81452 4.25262 7.75742C4.27628 7.70031 4.31095 7.64843 4.35465 7.60472L7.16715 4.79222C7.21073 4.74828 7.26257 4.71341 7.31969 4.68961C7.37682 4.66582 7.43808 4.65356 7.49996 4.65356C7.56185 4.65356 7.62311 4.66582 7.68023 4.68961C7.73736 4.71341 7.7892 4.74828 7.83278 4.79222L10.6453 7.60472C10.6892 7.6483 10.7241 7.70014 10.7479 7.75726C10.7717 7.81438 10.7839 7.87565 10.7839 7.93753C10.7839 7.99941 10.7717 8.06068 10.7479 8.1178C10.7241 8.17492 10.6892 8.22677 10.6453 8.27034C10.6015 8.31379 10.5495 8.34816 10.4924 8.37149C10.4353 8.39481 10.3742 8.40664 10.3125 8.40628Z" fill="currentColor"></path>
                            <path d="M7.5 13.5625C6.20206 13.5625 4.93327 13.1776 3.85407 12.4565C2.77488 11.7354 1.93374 10.7105 1.43704 9.51136C0.940343 8.31222 0.810384 6.99272 1.0636 5.71972C1.31682 4.44672 1.94183 3.2774 2.85961 2.35961C3.7774 1.44183 4.94672 0.816815 6.21972 0.5636C7.49272 0.310384 8.81222 0.440343 10.0114 0.937043C11.2105 1.43374 12.2354 2.27488 12.9565 3.35407C13.6776 4.43327 14.0625 5.70206 14.0625 7C14.0625 8.74049 13.3711 10.4097 12.1404 11.6404C10.9097 12.8711 9.24049 13.5625 7.5 13.5625ZM7.5 1.375C6.38748 1.375 5.29995 1.7049 4.37492 2.32299C3.44989 2.94107 2.72892 3.81957 2.30318 4.84741C1.87744 5.87524 1.76604 7.00624 1.98309 8.09738C2.20013 9.18853 2.73586 10.1908 3.52253 10.9775C4.3092 11.7641 5.31148 12.2999 6.40262 12.5169C7.49376 12.734 8.62476 12.6226 9.6526 12.1968C10.6804 11.7711 11.5589 11.0501 12.177 10.1251C12.7951 9.20006 13.125 8.11252 13.125 7C13.125 5.50816 12.5324 4.07742 11.4775 3.02253C10.4226 1.96764 8.99185 1.375 7.5 1.375Z" fill="currentColor"></path>
                        </svg>
                    </div>

                    <span class = 'back-top-button'>Back to top</span>
                </div>
            </div>

            <div class = 'main-content-footer'>
                <div class = 'footer-menu'>
                    <div class = 'left-menu'>
                        <a class = 'first-menu-item'><span>Trademark</span></a>
                        <a><span>Contact Us</span></a>
                        <a><span>Distributors</span></a>
                        <a class = 'last-menu-item'><span>Careers</span></a>
                    </div>
                    <div class = 'right-menu'>
                        <a class = 'first-menu-item'><span>Help Center</span></a>
                        <a class = 'last-menu-item'><span>Whistleblowing</span></a>
                    </div>
                </div>
                <!-- Newsletter di arduino, inserisci l'email per iscriverti-->
                <div id = 'newsletter-arduino'>
                    <h4>NEWSLETTER</h4>
                    <div class = 'news-form'>
                        <input id = 'newsletter-email' placeholder = 'Enter your email to sign up'>
                        <button class = 'subscribe-button'>SUBSCRIBE</button>
                    </div>
                </div>

                <div id = 'social-container'>
                    <h4>FOLLOW US</h4>
                    <div class = 'social-icons-container'>
                        <!--Collegamento e icona di Facebook-->
                        <div class = 'icon-container'>
                            <a href = 'https://www.facebook.com/official.arduino' class = 'facebook'>
                                <div class = 'icon-container'>
                                    <svg xmlns="http://www.w3.org/2000/svg" id="social-facebook" viewBox="0 0 7 13" data-inject-url="https://cdn.arduino.cc/header-footer/prod/assets/footerSocial-facebook.svg">
                                        <path d="M4.66301 3.54026V4.93745H6.72426L6.39488 7.08901H4.66301V12.3749H2.33613V7.08901H0.450195V4.93745H2.33613V3.3012C2.33613 1.43651 3.44645 0.405884 5.14645 0.405884C5.70345 0.413533 6.25917 0.46147 6.80926 0.549321V2.38213H5.87426C5.71438 2.35869 5.55126 2.37203 5.39731 2.42112C5.24336 2.47021 5.10264 2.55377 4.98585 2.66544C4.86906 2.77711 4.77927 2.91395 4.72333 3.06554C4.66739 3.21713 4.64676 3.37949 4.66301 3.54026Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <!--Collegamento e icona di Instagram-->
                        <div class = 'icon-container'>
                            <a href = "https://www.instagram.com/arduino.cc/" class = 'instagram'>
                                <div class = 'icon-container'>
                                    <svg xmlns="http://www.w3.org/2000/svg" id = 'social-instagram'>
                                        <path d="M6.5 1.772c1.7 0 1.902 0 2.577.038.404.006.805.081 1.184.223a2.066 2.066 0 011.206 1.206c.142.379.217.78.223 1.184.032.675.037.877.037 2.577s0 1.902-.037 2.577a3.541 3.541 0 01-.223 1.184 2.065 2.065 0 01-1.206 1.206c-.379.142-.78.217-1.184.223-.675.032-.877.037-2.577.037s-1.902 0-2.577-.037a3.542 3.542 0 01-1.184-.223 2.066 2.066 0 01-1.206-1.206 3.543 3.543 0 01-.223-1.184C1.278 8.902 1.272 8.7 1.272 7s0-1.902.038-2.577c.006-.404.081-.805.223-1.184a2.066 2.066 0 011.206-1.206c.379-.142.78-.217 1.184-.223.675-.032.877-.038 2.577-.038zm0-1.147c-1.732 0-1.95 0-2.63.037A4.654 4.654 0 002.324.96 3.224 3.224 0 00.46 2.824 4.654 4.654 0 00.162 4.37C.125 5.05.125 5.268.125 7c0 1.732 0 1.95.037 2.63.01.528.111 1.05.298 1.546a3.225 3.225 0 001.864 1.864 4.65 4.65 0 001.546.298c.68.037.898.037 2.63.037 1.732 0 1.95 0 2.63-.037a4.65 4.65 0 001.546-.298 3.226 3.226 0 001.864-1.864c.184-.487.284-1 .298-1.52.037-.706.037-.924.037-2.656 0-1.732 0-1.95-.037-2.63a4.65 4.65 0 00-.298-1.546A3.226 3.226 0 0010.676.96c-.487-.184-1-.284-1.52-.298C8.45.625 8.232.625 6.5.625z" fill="currentColor"></path><path d="M6.5 3.728a3.273 3.273 0 100 6.545 3.273 3.273 0 000-6.545zm0 5.397a2.125 2.125 0 110-4.25 2.125 2.125 0 010 4.25zM9.906 4.36a.765.765 0 100-1.53.765.765 0 000 1.53z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <!--Collegamento e icona di X (Twitter)-->
                        <div class = 'icon-container'>
                            <a href = "https://twitter.com/arduino" class = 'twitter'>
                                <div class = 'icon-container'>
                                    <svg xmlns="http://www.w3.org/2000/svg" id="social-twitter" viewBox="0 0 24 24" data-inject-url="https://cdn.arduino.cc/header-footer/prod/assets/footerSocial-twitter.svg">
                                        <path fill="currentColor" d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>  
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <!--Collegamento e icona di Github-->
                        <div class = 'icon-container'>
                            <a href = 'https://github.com/arduino/' class = 'github'>
                                <div class = 'icon-container'>
                                    <svg xmlns="http://www.w3.org/2000/svg" id="social-github" viewBox="0 0 11 13" data-inject-url="https://cdn.arduino.cc/header-footer/prod/assets/footerSocial-github.svg">
                                        <path d="M6.85 8.337a1.77 1.77 0 01.504 1.382v2.008a.531.531 0 01-.409.531 7.52 7.52 0 01-2.869 0 .531.531 0 01-.409-.531v-1.233c-2.066.447-2.502-.998-2.502-.998a1.97 1.97 0 00-.829-1.09c-.674-.456.054-.451.054-.451a1.562 1.562 0 011.136.77 1.594 1.594 0 002.168.617c.03-.377.196-.73.467-.994C2.515 8.157.777 7.52.777 4.672a2.869 2.869 0 01.744-2.003A2.656 2.656 0 011.596.687s.621-.201 2.045.76a7.066 7.066 0 013.719 0C8.783.502 9.405.687 9.405.687c.275.622.302 1.325.074 1.966.503.542.777 1.258.765 1.998 0 2.874-1.737 3.5-3.394 3.686z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <!--Collegamento e icona di LinkedIn-->
                        <div class = 'icon-container'>
                            <a href = 'https://www.linkedin.com/company/arduino' class = 'linkedin'>
                                <div class = 'icon-container'>
                                    <svg xmlns="http://www.w3.org/2000/svg" id="social-linkedin" viewBox="0 0 11 12" data-inject-url="https://cdn.arduino.cc/header-footer/prod/assets/footerSocial-linkedin.svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.863 11.313h2.125V7.338c-.006-.18.02-.36.075-.531A1.222 1.222 0 017.237 6c.967 0 1.307.616 1.307 1.525v3.787h2.167V7.239c0-2.067-.632-3.188-2.576-3.188A2.183 2.183 0 006.01 5.33V4.205H3.885c.031.633 0 7.109 0 7.109h-.022z" fill="currentColor"></path>
                                        <path d="M1.361 3.248a1.28 1.28 0 100-2.56 1.28 1.28 0 000 2.56zM2.45 4.204H.247v7.109h2.205V4.204z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <!--Collegamento e icona di Youtube-->
                        <div class = 'icon-container'>
                            <a href = 'https://www.youtube.com/user/arduinoteam' class = 'youtube'>
                                <div class = 'icon-container'>
                                    <svg xmlns="http://www.w3.org/2000/svg" id="social-youtube" viewBox="0 0 15 12" data-inject-url="https://cdn.arduino.cc/header-footer/prod/assets/footerSocial-youtube.svg">
                                        <path d="M14.624 2.398a1.854 1.854 0 00-1.312-1.323C12.154.762 7.5.762 7.5.762s-4.653 0-5.811.313A1.854 1.854 0 00.376 2.398 19.407 19.407 0 00.063 6a19.407 19.407 0 00.313 3.602 1.855 1.855 0 001.313 1.323c1.158.313 5.811.313 5.811.313s4.654 0 5.812-.313a1.855 1.855 0 001.313-1.323c.216-1.188.32-2.394.313-3.602a19.412 19.412 0 00-.314-3.602zM5.981 8.21V3.79L9.864 6 5.981 8.21z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id = 'footer-info'>
                <a class = 'arduino-license'>
                    <span>© 2024 Arduino</span>
                </a>

                <div class = 'info-container'>
                    <div>
                        <a id = 'terms-service'><span>Terms Of Service</span></a>
                        <a id = 'privacy-policy'><span><b>Privacy Policy</b></span></a>
                        <a id = 'security'><span>Security</span></a>
                        <a id = 'cookie-settings'><span>Cookie Settings</span></a>
                    </div>
                </div>
            </div>
        </footer>
        <!--Modale per mostrare le impostazioni dei cookies-->
        <div id = 'modal-hidden' class = 'hidden'>
            <div id = 'cookie-modal-container'>
                <div id = cookie-modal>
                    <div class = 'cookie-header'>
                        <div>
                            <button id = 'cookie-arrow'>
                                <span class="material-symbols-outlined">arrow_back</span>
                            </button>
                        </div>
                        <div>
                            <button id = 'full-cookie'>
                                <span>
                                    See full Cookie Policy
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class = 'cookie-content'>
                        <div id = 'first-h1'>
                            <h1 class = 'h1-text'>Your Privacy Choices</h1>
                            <p class = "header-text">In this panel you can express some preferences related to the processing of your personal information.<br>You may review and change expressed choices at any time by resurfacing this panel via the provided link.<br>To deny your consent to the specific processing activities described below, switch the toggles to off or use the Reject all button and confirm you want to save your choices.
                            </p>
                        </div>
                    </div>
                    <div id = 'cookie-choice'>
                        <div>
                            <button class = 'option-all'>
                                <img src = 'Icone/close_FILL0_wght400_GRAD0_opsz24.png'>Reject All
                            </button>
                        </div>
                        <div>
                            <button class = 'option-all'>
                                <img src = 'Icone/done_FILL0_wght400_GRAD0_opsz24.png'>Accept All
                            </button>
                        </div>
                    </div>
                    <div class = 'cookie-content'>
                        <div>
                            <h1 id = 'second-h1'>Your consent preferences for tracking technologies</h1>
                            <p class = 'header-text'>The options provided in this section allow you to customize your consent preferences for any tracking technology used for the purposes described below. 
                                To learn more about how these trackers help us and how they work, refer to the <u style = "cursor: pointer">cookie policy</u>. Please be aware that denying consent for a particular purpose may make related features unavailable.
                            </p>
                        </div>
                    </div>
                    <div id = 'save-button'>
                        <button id = 'snc-button'>
                            SAVE AND CONTINUE
                        </button>
                    </div>
                </div>
            </div>
        </div>
                    <!-- modale per il chatbot in Help
        <div id = 'chatbot-modal-hidden' class = 'hidden'>
            <div id = 'chatbot-modal-container'>
                <div id = 'chatbot-modal'>
                    <div id = 'chatbot-header'>
                        <div>
                            <button id = 'chat-arrow'>
                                <img src = '/Icone/chevron_left_FILL0_wght400_GRAD0_opsz24.png'>
                            </button>
                        </div>
                    </div>
                    <div id = chat-answer></div>
                    <div id = chat-question>
                        <form id = 'question-form'>
                            <div id = 'chat-form-container'>
                                <input id = 'chat-input' type = 'text' placeholder = "Come posso aiutarti oggi?...">
                                <button id = 'chat-enter' type = 'submit'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                    -->
    </body>
</html>