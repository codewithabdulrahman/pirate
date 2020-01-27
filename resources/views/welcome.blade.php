<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Apprends à pirater tous les réseaux sociaux dans 5 minutes 🥇</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/png" href="../config/piraterme/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="../config/piraterme/favicon.png"/>

    <meta name="description"
          content="Nous t&#39;apprendrons à pirater Facebook, Pirater Messenger, Pirater Twitter, Pirater Instagram, Pirater WhatsApp, Pirater Snapchat. ❣◕ ‿ ◕❣ Entre et découvre comment le faire."/>

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Apprends à pirater tous les réseaux sociaux dans 5 minutes 🥇"/>
    <meta property="og:description"
          content="Nous t&#39;apprendrons à pirater Facebook, Pirater Messenger, Pirater Twitter, Pirater Instagram, Pirater WhatsApp, Pirater Snapchat. ❣◕ ‿ ◕❣ Entre et découvre comment le faire."/>
    <meta property="og:url" content="index.html"/>
    <meta property="og:image" content="../config/piraterme/principal.jpg"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Apprends à pirater tous les réseaux sociaux dans 5 minutes 🥇"/>
    <meta name="twitter:description"
          content="Nous t&#39;apprendrons à pirater Facebook, Pirater Messenger, Pirater Twitter, Pirater Instagram, Pirater WhatsApp, Pirater Snapchat. ❣◕ ‿ ◕❣ Entre et découvre comment le faire."/>
    <meta name="twitter:image" content="../config/piraterme/principal.jpg"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    {{--    JS --}}


</head>
<body>
<header>
    <a href="#">
        <img src="data:image/png;base64,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"
             class="logo"/>
    </a>
</header>
<main class="home cc">


    <div class="hack-content">
        <h3>Choisis le réseau social que tu veux <strong>PIRATER</strong>!</h3>

        <ul class="hack-social">
            <li class="fb" data-social="fb"><i class="fab fa-facebook-f" aria-hidden="true"></i> Facebook</li>
            <li class="ms" data-social="ms"><i class="fab fa-facebook-messenger" aria-hidden="true"></i> Messenger</li>
            <li class="wha" data-social="wha"><i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp</li>
            <li class="tw" data-social="tw"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</li>
            <li class="ins" data-social="ins"><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</li>
            <li class="snap" data-social="snap"><i class="fab fa-snapchat" aria-hidden="true"></i> Snapchat</li>
            <li class="tik" data-social="tik"><i>T</i> TikTok</li>
        </ul>

        <div class="hack-box" data-social="fb">Saisissez l’adresse URL du compte Facebook :<br>
            <form id="form-hack-fb" class="form_hack" data-red="fb" data-template="hack">
                <p id="hack_error_fb" class="posthack_error" style="display:none;">Erreur Veuillez saisir une URL
                    valide.</p>

                <input type="text" class="input_hack" name="user_hack_fb" id="user_hack_fb"
                       placeholder="Entrez le lien du profil pour pirater" autocomplete="off" required/>

                <div id="recaptcha_fb">
                    <p id="error_rc_fb"
                       style="display:none; background:#F44336; text-align:center; padding:5px; font-size:14px; margin:0; margin-top:6px;">
                        Please, check the captcha antibots.
                    </p>

                    <input type="hidden" name="recaptcha_active_fb" value="0"/>
                </div>
                <div class="helping_console">
                    <a href="javascript:void(0);" class="help_click"><i class="fa fa-question-circle"></i> J'ai besoin
                        d'aide!</a>
                    <div class="helping_down" style="display:none;">
                        <a href="javascript:void(0);" class="help_go" data-go="tutorial">
                            <span class="ttip">Le plus utilisé</span>
                            <i class="fa fa-video-camera"></i>
                            Voir le tutoriel étape par étape<br/>&nbsp; </a>
                        <a href="javascript:void(0);" class="help_go" data-go="comentarios">
                            <span class="ttip">More used</span>
                            <i class="fa fa-plus-circle"></i>
                            Voir les commentaires positifs </a>
                    </div>
                </div>

                <button class="button_hack" type="submit">PIRATER</button>
            </form>
        </div>

        <div class="hack-box" data-social="ms" style="display:none">Saisissez l’adresse URL du compte Messenger :<br>
            <form id="form-hack-ms" class="form_hack" data-red="ms" data-template="hack">
                <p id="hack_error_ms" class="posthack_error" style="display:none;">Erreur Veuillez saisir une URL
                    valide.</p>

                <input type="text" class="input_hack" name="user_hack_ms" id="user_hack_ms"
                       placeholder="Entrez le lien du profil pour pirater" autocomplete="off" required/>

                <div id="recaptcha_fb">
                    <p id="error_rc_fb"
                       style="display:none; background:#F44336; text-align:center; padding:5px; font-size:14px; margin:0; margin-top:6px;">
                        Please, check the captcha antibots.
                    </p>

                    <input type="hidden" name="recaptcha_active_fb" value="0"/>
                </div>
                <div class="helping_console">
                    <a href="javascript:void(0);" class="help_click"><i class="fa fa-question-circle"></i> J'ai besoin
                        d'aide!</a>
                    <div class="helping_down" style="display:none;">
                        <a href="javascript:void(0);" class="help_go" data-go="tutorial">
                            <span class="ttip">Le plus utilisé</span>
                            <i class="fa fa-video-camera"></i>
                            Voir le tutoriel étape par étape<br/>&nbsp; </a>
                        <a href="javascript:void(0);" class="help_go" data-go="comentarios">
                            <span class="ttip">More used</span>
                            <i class="fa fa-plus-circle"></i>
                            Voir les commentaires positifs </a>
                    </div>
                </div>

                <button class="button_hack" type="submit">PIRATER</button>
            </form>
        </div>

        <div class="hack-box" data-social="wha" style="display:none">Saisissez le numéro de WhatsApp :<br>
            <form id="form-hack-wha" class="form_hack" data-red="wha" data-template="hack">
                <p id="hack_error_wha" class="posthack_error" style="display:none;">Erreur Veuillez saisir un numéro
                    valide.</p>

                <div id="phoneinput">
                    <input type="tel" id="phone" name="user_hack_wha" pattern="[0-9\s]*.{9,11}$" maxlength="12"
                           class="urlhack inputphone input_hack" placeholder="Example: 3336501491" autocomplete="off"
                           required/>

                    <div id="phonelabel" data-codecountry="PK" data-codenumber="+92">
                        <div id="laimg">
                            <img id="imgcode" src="../../www.countryflags.io/PK/flat/16.png"/>
                        </div>
                        <span id="spancode">+92</span>
                        <input id="phonecodenumber" type="hidden" name="phonecodenumber" value="+92"/>
                        <input id="phonecodecountry" type="hidden" name="phonecodecountry" value="PK"/>
                    </div>
                </div>

                <div id="recaptcha_fb">
                    <p id="error_rc_fb"
                       style="display:none; background:#F44336; text-align:center; padding:5px; font-size:14px; margin:0; margin-top:6px;">
                        Please, check the captcha antibots.
                    </p>

                    <input type="hidden" name="recaptcha_active_fb" value="0"/>
                </div>
                <div class="helping_console">
                    <a href="javascript:void(0);" class="help_click"><i class="fa fa-question-circle"></i> J'ai besoin
                        d'aide!</a>
                    <div class="helping_down" style="display:none;">
                        <a href="javascript:void(0);" class="help_go" data-go="tutorial">
                            <span class="ttip">Le plus utilisé</span>
                            <i class="fa fa-video-camera"></i>
                            Voir le tutoriel étape par étape<br/>&nbsp; </a>
                        <a href="javascript:void(0);" class="help_go" data-go="comentarios">
                            <span class="ttip">More used</span>
                            <i class="fa fa-plus-circle"></i>
                            Voir les commentaires positifs </a>
                    </div>
                </div>

                <button class="button_hack" type="submit">PIRATER</button>
            </form>
        </div>

        <div class="hack-box" data-social="tw" style="display:none">Saisissez le nom d’utilisateur d’Twitter :<br>
            <form id="form-hack-tw" class="form_hack" data-red="tw" data-template="hack">
                <p id="hack_error_tw" class="posthack_error" style="display:none;">Erreur Veuillez saisir un utilisateur
                    valide.</p>

                <input type="text" class="input_hack" name="user_hack_tw" id="user_hack_tw" placeholder="@utilisateur"
                       autocomplete="off" required/>

                <div id="recaptcha_fb">
                    <p id="error_rc_fb"
                       style="display:none; background:#F44336; text-align:center; padding:5px; font-size:14px; margin:0; margin-top:6px;">
                        Please, check the captcha antibots.
                    </p>

                    <input type="hidden" name="recaptcha_active_fb" value="0"/>
                </div>
                <div class="helping_console">
                    <a href="javascript:void(0);" class="help_click"><i class="fa fa-question-circle"></i> J'ai besoin
                        d'aide!</a>
                    <div class="helping_down" style="display:none;">
                        <a href="javascript:void(0);" class="help_go" data-go="tutorial">
                            <span class="ttip">Le plus utilisé</span>
                            <i class="fa fa-video-camera"></i>
                            Voir le tutoriel étape par étape<br/>&nbsp; </a>
                        <a href="javascript:void(0);" class="help_go" data-go="comentarios">
                            <span class="ttip">More used</span>
                            <i class="fa fa-plus-circle"></i>
                            Voir les commentaires positifs </a>
                    </div>
                </div>

                <button class="button_hack" type="submit">PIRATER</button>
            </form>
        </div>

        <div class="hack-box" data-social="ins" style="display:none">Saisissez le nom d’utilisateur d’Instagram :<br>
            <form id="form-hack-ins" class="form_hack" data-red="ins" data-template="hack">
                <p id="hack_error_ins" class="posthack_error" style="display:none;">Erreur Veuillez saisir un
                    utilisateur valide.</p>

                <input type="text" class="input_hack" name="user_hack_ins" id="user_hack_ins" placeholder="utilisateur"
                       autocomplete="off" required/>

                <div id="recaptcha_fb">
                    <p id="error_rc_fb"
                       style="display:none; background:#F44336; text-align:center; padding:5px; font-size:14px; margin:0; margin-top:6px;">
                        Please, check the captcha antibots.
                    </p>

                    <input type="hidden" name="recaptcha_active_fb" value="0"/>
                </div>
                <div class="helping_console">
                    <a href="javascript:void(0);" class="help_click"><i class="fa fa-question-circle"></i> J'ai besoin
                        d'aide!</a>
                    <div class="helping_down" style="display:none;">
                        <a href="javascript:void(0);" class="help_go" data-go="tutorial">
                            <span class="ttip">Le plus utilisé</span>
                            <i class="fa fa-video-camera"></i>
                            Voir le tutoriel étape par étape<br/>&nbsp; </a>
                        <a href="javascript:void(0);" class="help_go" data-go="comentarios">
                            <span class="ttip">More used</span>
                            <i class="fa fa-plus-circle"></i>
                            Voir les commentaires positifs </a>
                    </div>
                </div>

                <button class="button_hack" type="submit">PIRATER</button>
            </form>
        </div>

        <div class="hack-box" data-social="snap" style="display:none">Saisissez le nom d’utilisateur d’Snapchat :<br>
            <form id="form-hack-snap" class="form_hack" data-red="snap" data-template="hack">
                <p id="hack_error_snap" class="posthack_error" style="display:none;">Erreur Veuillez saisir un
                    utilisateur valide.</p>

                <input type="text" class="input_hack" name="user_hack_snap" id="user_hack_snap"
                       placeholder="utilisateur" autocomplete="off" required/>

                <div id="recaptcha_fb">
                    <p id="error_rc_fb"
                       style="display:none; background:#F44336; text-align:center; padding:5px; font-size:14px; margin:0; margin-top:6px;">
                        Please, check the captcha antibots.
                    </p>

                    <input type="hidden" name="recaptcha_active_fb" value="0"/>
                </div>
                <div class="helping_console">
                    <a href="javascript:void(0);" class="help_click"><i class="fa fa-question-circle"></i> J'ai besoin
                        d'aide!</a>
                    <div class="helping_down" style="display:none;">
                        <a href="javascript:void(0);" class="help_go" data-go="tutorial">
                            <span class="ttip">Le plus utilisé</span>
                            <i class="fa fa-video-camera"></i>
                            Voir le tutoriel étape par étape<br/>&nbsp; </a>
                        <a href="javascript:void(0);" class="help_go" data-go="comentarios">
                            <span class="ttip">More used</span>
                            <i class="fa fa-plus-circle"></i>
                            Voir les commentaires positifs </a>
                    </div>
                </div>

                <button class="button_hack" type="submit">PIRATER</button>
            </form>
        </div>

        <div class="hack-box" data-social="tik" style="display:none">Introduce el nombre de usuario de Tiktok:<br>
            <form id="form-hack-tik" class="form_hack" data-red="tik" data-template="hack">
                <p id="hack_error_tik" class="posthack_error" style="display:none;">Erreur Veuillez saisir un
                    utilisateur valide.</p>

                <input type="text" class="input_hack" name="user_hack_tik" id="user_hack_tik" placeholder="@utilisateur"
                       autocomplete="off" required/>

                <div id="recaptcha_fb">
                    <p id="error_rc_fb"
                       style="display:none; background:#F44336; text-align:center; padding:5px; font-size:14px; margin:0; margin-top:6px;">
                        Please, check the captcha antibots.
                    </p>

                    <input type="hidden" name="recaptcha_active_fb" value="0"/>
                </div>
                <div class="helping_console">
                    <a href="javascript:void(0);" class="help_click"><i class="fa fa-question-circle"></i> J'ai besoin
                        d'aide!</a>
                    <div class="helping_down" style="display:none;">
                        <a href="javascript:void(0);" class="help_go" data-go="tutorial">
                            <span class="ttip">Le plus utilisé</span>
                            <i class="fa fa-video-camera"></i>
                            Voir le tutoriel étape par étape<br/>&nbsp; </a>
                        <a href="javascript:void(0);" class="help_go" data-go="comentarios">
                            <span class="ttip">More used</span>
                            <i class="fa fa-plus-circle"></i>
                            Voir les commentaires positifs </a>
                    </div>
                </div>

                <button class="button_hack" type="submit">PIRATER</button>
            </form>
        </div>
        <div class="noencontrado" id="hack_error" style="display:none;">Le profil ou le compte est incorrect. Si vous
            avez besoin d'aide, vous pouvez nous contacter.
        </div>

        <div id="datos_perfil" class="perfil">
            <div id="img_load">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAAV1BMVEXEzd/////DzN39/v3Czd/CzNz8/fzM1OHFzt7W3eX7+/vz9ffr7vH5+vr19/jw8/TQ1+PJ0t/u8PPd4unHz97T2eT4+Pjj5+zg5evo7O/m6e7Z3+fH0OC8S98oAAAC70lEQVRo3u3YCY4bIRAFUPhAs/QCvW++/zljR4qsZGIgLno0GuVf4KmqQEU3+59PCaAAsKuCR6Ze63BjlwUmnOs+1F2j2SWRUtm9c5W4p9VXtEupKRztHeCPiFEWFwATtqEV/FfECqAwAb3Xjy49EWdVWUT2hxP8j7iRlVRuZ/2BeNRy9IUUSITGPfr0URF+Boogau6ewp9MN6MAAWnbu/FSaS0D1VE4YwYXwp1k5NmrCztmmruRUJqJpsjZpRE3S5KhhruRLgW0i+4yEO4mCgKbY/DKgoKsPAvZFAFR6bNFH4qq85CaNPmaZ4WEmC4P6cxXR5Dbri8/eOXzEK9AQAaed08olxF7HrKTkDWvXauS7yNyzEM2UCrJRE4KIm0eYkEwMOcNnvLEg7FZSGXN+8i0tnmVtMf0NqK9yEOE1/JdpB8Ez1OG/m3E7LlIY6gXPp1qBeEuujzEnQTEtnlIawlIWDKRQED63B3fExA1ZG5G0j45OyGShOhOUBDMVRqpLPGz9JYx+uWG6z/nBup/L2xpZDVU5HTk655GQp0qpAuSiiSHIoYJVARjChlBR/oEUvVkhEmssfsoxKrA6Mg0xBA/gdEDzIt4aSzz0yApU/MaaW6yDGL218huZKlKYs8UlEFun9GufniNeF0I0fVrpC6GdJEjHFAGCe1rpC2EMCti+70IovrYi1gU+V2PsYq/itwIOnLwRA7QN+OQQgYDKqJ9CvGajMxLCmlngDz3hEFf8jBeJBE/KQoB2wmeRKraAm8C0NZXTyPK+FMDeIPYfMWzU/ntXxmp+mPJq+L5NmqPXiG7BtzC0QrxNPKZcAOkTCJK6bFpI0KcaUat4ogEEPbaRYik4+o9KEQEZuzgHn2ixQ3WMPwFAqQJWy14kVT1FiZ8cFQ/DunzlD+camnGHvj9Ub11z91UzNkm+YuB0tsSAQjOsumfDKC3LlIEkalXDbDJehExiMg93jK2O35xqpGlTxRdYfz6iG+D8O+D/AAD7SpsCFcgPwAAAABJRU5ErkJggg=="
                     alt="Avatar">
            </div>
            <div id="data_load">
                <div>
                    <span>En attente d'informations ...</span>
                    <svg width='24px' height='24px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                         preserveAspectRatio="xMidYMid" class="uil-default">
                        <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
                        <rect x='40' y='40' width='20' height='20' rx='10' ry='10' fill='#ffffff'
                              transform='rotate(0 50 50) translate(0 -40)'>
                            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='-1s'
                                     repeatCount='indefinite'/>
                        </rect>
                        <rect x='40' y='40' width='20' height='20' rx='10' ry='10' fill='#ffffff'
                              transform='rotate(45 50 50) translate(0 -40)'>
                            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='-0.875s'
                                     repeatCount='indefinite'/>
                        </rect>
                        <rect x='40' y='40' width='20' height='20' rx='10' ry='10' fill='#ffffff'
                              transform='rotate(90 50 50) translate(0 -40)'>
                            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='-0.75s'
                                     repeatCount='indefinite'/>
                        </rect>
                        <rect x='40' y='40' width='20' height='20' rx='10' ry='10' fill='#ffffff'
                              transform='rotate(135 50 50) translate(0 -40)'>
                            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='-0.625s'
                                     repeatCount='indefinite'/>
                        </rect>
                        <rect x='40' y='40' width='20' height='20' rx='10' ry='10' fill='#ffffff'
                              transform='rotate(180 50 50) translate(0 -40)'>
                            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='-0.5s'
                                     repeatCount='indefinite'/>
                        </rect>
                        <rect x='40' y='40' width='20' height='20' rx='10' ry='10' fill='#ffffff'
                              transform='rotate(225 50 50) translate(0 -40)'>
                            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='-0.375s'
                                     repeatCount='indefinite'/>
                        </rect>
                        <rect x='40' y='40' width='20' height='20' rx='10' ry='10' fill='#ffffff'
                              transform='rotate(270 50 50) translate(0 -40)'>
                            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='-0.25s'
                                     repeatCount='indefinite'/>
                        </rect>
                        <rect x='40' y='40' width='20' height='20' rx='10' ry='10' fill='#ffffff'
                              transform='rotate(315 50 50) translate(0 -40)'>
                            <animate attributeName='opacity' from='1' to='0' dur='1s' begin='-0.125s'
                                     repeatCount='indefinite'/>
                        </rect>
                    </svg>
                </div>
            </div>
        </div>

        <div id="hacking_loader" class="wait">
            <div class="loader"></div>
            <span>0%</span></div>
    </div> <!-- .hack-content -->


    <div id="hacking_console" class="box-hack">
        <div id="ocultar-box-hack">CACHER</div>
        <div class="box-hack-content">
            <p class="waiting"><span class="pointer">|</span>&nbsp;</p>
        </div>
    </div>

    <div class="col-12 aligncenter videotutorial">
        <h3 id="video_title">Pirater un r&eacute;seau social</h3>

        <ul class="video_options">
            <li class="livideo active"><a href="javascript:void(0)" id="myvideo_1" class="myvideo" data-opc="1">Option
                    1</a></li>
            <li class="livideo"><a href="javascript:void(0)" id="myvideo_2" class="myvideo" data-opc="2">Option 2</a>
            </li>
        </ul>
        <input type="hidden" name="video_1" value="JtiniHG181g"/>
        <input type="hidden" name="video_type_1" value="youtube"/>
        <input type="hidden" name="video_load_1" value="0"/>
        <input type="hidden" name="video_2" value="wmmf2XB2JFw"/>
        <input type="hidden" name="video_type_2" value="youtube"/>
        <input type="hidden" name="video_load_2" value="0"/>

        <div class="videocontenedor">
            <div class="videoWrapper" id="contenedor_video">
                <div class="videoLoading">
                    <span class="play"><i class="fa fa-play-circle"></i></span>
                </div>
                <div id="contenedor_iframe" style="display:none;"></div>
                <!--
                <p id="video_disabled">VIDEO NO DISPONIBLE</p>
                -->
            </div>
        </div>
    </div>
    <div id="container">
        <div class="max columnaindex">
            <div class="index item cambria">
                <ul id="breadcrumbs-two">
                    <li><a href="#">ACCUEIL</a></li>
                    <li><a href="javascript:void(0)" class="current">Pirater un r&eacute;seau social</a></li>
                </ul>

                <h1>Pirater un r&eacute;seau social</h1>


                <div class="resume helvetica">
                    <h2 class="parentresume active"><i class="fa fa-star" style="color: #edeff4;"></i> Introduction</h2>
                    <div class="openresume" style="display:block;"><p style="text-align: justify;">Site Web anglais <a
                                    href="https://hackaccount.me/" target="_blank">https://hackaccount.me/</a></p>
                        <p style="text-align: justify;"><b>Veux-tu apprendre à pirater les comptes de n'importe quel
                                réseau social ?</b> Alors tu es au bon endroit, parce qu'on t'apprendra à :</p>
                        <ul>
                            <li><i class="fab fa-facebook" style="color: #3b5998;"></i> Pirater Facebook.</li>
                            <li><i class="fab fa-facebook-messenger" style="color: #0084ff;"></i> Pirater Messenger.
                            </li>
                            <li><i class="fab fa-whatsapp-square" style="color: #2bd248;"></i> Pirater WhatsApp.</li>
                            <li><i class="fab fa-twitter" style="color: #55acee;"></i> Pirater Twitter.</li>
                            <li><i class="fab fa-instagram" style="color: #444444;"></i> Pirater Instagram.</li>
                            <li><i class="fab fa-snapchat" style="color: #fffc00;"></i> Pirater Snapchat.</li>
                        </ul>
                        <p style="text-align: justify;">Contrairement à toute autre méthode, on a développé un script
                            100% fonctionnel. Il te permettra <u>obtenir le mot de passe de ta victime avec pas beaucoup
                                d'étapes</u>. La meilleure chose c'est que c'est complètement gratuit, alors tu n'as
                            rien à perdre !</p>
                        <p style="background: #f5faff; color: #3b4147; text-align: justify;">Dans chacune des sections
                            suivantes, tu trouveras un lien avec information plus détaillée à propos de comment pirater
                            le réseau social que tu veux.</p></div>
                    <h2 class="parentresume"><i class="fab fa-facebook" style="color: #edeff4;"></i> Comment pirater
                        Facebook ?</h2>
                    <div class="openresume"><p style="text-align: justify;"><b>La meilleure forme de pirater un compte
                                Facebook</b> c’est en utilisant ce site web. Grâce au script qu’on a développé, il te
                            rendra
                            facile le procès. Il suffit de suivre les étapes, qu’on t’expliquera ensuite, correctement.
                        </p>
                        <p style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i> Sur
                            ce même site web, <b>saisis l’adresse URL du profil de la personne que tu pirateras</b>. Ça
                            prendra quelques minutes, mais tu n’as pas besoin de rien faire pendant ces minutes, juste
                            attendre.</p>
                        <p style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                            Lorsque le piratage sera fini, il faudra que tu remplisses une petite enquête ou que tu
                            partages un lien avec 5 amis. Lorsque tu auras fait l’une des deux choses, <u>le mot de
                                passe du compte Facebook sera débloqué</u>.</p>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            En cliquant sur ce lien-ci, tu trouveras plus d’information pour <strong><a
                                        href="../facebook/index.html">pirater un compte Facebook</a></strong>.</p></div>
                    <h2 class="parentresume"><i class="fab fa-facebook-messenger" style="color: #edeff4;"></i> Comment
                        pirater Messenger ?</h2>
                    <div class="openresume"><p style="text-align: justify;">On t’apprendra à <b>pirater Messenger sans
                                être découvert</b> et à espionner les conversations de ta victime. Méfie-toi des autres
                            sites
                            web, parce que tu finiras par être piraté. Fais confiance à notre système. Maintenant tu
                            pourras
                            pirater sans être un hacker expérimenté !</p><b>Comment fonctionne le script pour pirater
                            Messenger ?</b>
                        <p style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                            Saisis l’adresse URL du profil de la victime dans la zone demandée.</p>
                        <p style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                            Attends quelques minutes pour que le fonctionnement du système finisse.</p>
                        <p style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                            Remplis une enquête ou partage un lien généré par le site web avec 5 amis, et le mot de
                            passe se débloquera automatiquement.</p>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            En cliquant sur ce lien tu trouveras plus d’information pour <strong><a
                                        href="../messenger/index.html">pirater un compte Messenger</a></strong>.</p>
                    </div>
                    <h2 class="parentresume"><i class="fab fa-whatsapp-square" style="color: #edeff4;"></i> Comment
                        pirater WhatsApp ?</h2>
                    <div class="openresume"><p style="text-align: justify;">L’une des formes plus rapides pour <b>pirater
                                WhatsApp</b> est grâce à notre site web. Il n’est pas nécessaire de ne télécharger aucun
                            logiciel pour obtenir accès aux conversations. Il n’est pas non plus nécessaire d’avoir des
                            connaissances informatiques, ni télécharger aucun logiciel qui génère méfiance. <u>C’est une
                                méthode en ligne, sûre et rapide</u>.</p><b>Pour pirater WhatsApp, suis ces étapes :</b>
                        <ul>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                Sélectionne le pays où la personne que tu veux pirater est localisée.
                            </li>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                Saisis le numéro de portable de la victime.
                            </li>
                        </ul>
                        <p style="text-align: justify;">Tu devras attendre quelques secondes, ou une paire de minutes
                            maximum pour <b>obtenir l’accès au compte</b>. Ce compte est désactivé. Pour l’activer, tu
                            devras juste remplir une enquête et ensuite tu pourras l’utiliser.</p>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            En cliquant sur ce lien tu trouveras plus d’information pour <strong><a
                                        href="../whatsapp/index.html">pirater un compte WhatsApp</a></strong>.</p></div>
                    <h2 class="parentresume"><i class="fab fa-twitter" style="color: #edeff4;"></i> Comment pirater
                        Twitter ?</h2>
                    <div class="openresume"><p style="text-align: justify;">Twitter est positionné comme l’un des
                            réseaux sociaux plus utilisés pour partager toute sorte d’information. Ci-dessous <u>on
                                t’apprendra des techniques pour réussir à pirater Twitter</u>.</p><b>Les étapes pour
                            pirater
                            Twitter sont :</b>
                        <ul>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                Aller au compte de la victime et copier son nom d’utilisateur.
                            </li>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                Coller-le sur ce même site web.
                            </li>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                Attendre quelques minutes pour que le compte soit piraté.
                            </li>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                Débloquer le mot de passe avec une enquête ou avec le système de parrainage.
                            </li>
                        </ul>
                        <p style="text-align: justify;">Pour télécharger le mot de passe tu devras vérifier ton
                            identité, puisqu’on sait qu’il y a des personnes qui utilisent notre système avec des
                            objectifs abusifs.</p>
                        <p style="background: #f5faff; color: #3b4147; text-align: justify;">Pour vérifier l’identité tu
                            peux utiliser le système de filleuls ou remplir une enquête toute courte. Il prend juste
                            quelques minutes et voilà !</p>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            En cliquant sur ce lien tu trouveras plus d’information pour <strong><a
                                        href="../twitter/index.html">pirater un compte Twitter</a></strong>.</p></div>
                    <h2 class="parentresume"><i class="fab fa-instagram" style="color: #edeff4;"></i> Comment pirater
                        Instagram ?</h2>
                    <div class="openresume"><p style="text-align: justify;"><u>Instagram a un système de messagerie
                                privée</u>. Peut-être ton intention est de voir les conversations de quelqu’un d’autre,
                            donc on
                            te montrera ensuite comment <b>réussir à pirater Instagram</b>.</p>
                        <p style="text-align: justify;">Il s’agit d’un script dessiné pour voler le mot de passe de la
                            victime et le télécharger directement sur ton ordinateur. Tu n’as pas besoin de ne faire
                            aucun paiement, vu qu’il est totalement gratuit. Pour pirater Instagram, il te faut juste
                            :</p>
                        <ul>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                Avoir le nom d’utilisateur de la personne que tu veux pirater.
                            </li>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                Coller le nom d’utilisateur sur le système de notre site web.
                            </li>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                Remplir une enquête pour obtenir les données de la victime.
                            </li>
                        </ul>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            En cliquant sur ce lien tu trouveras plus d’information pour <strong><a
                                        href="../instagram/index.html">pirater un compte Instagram</a></strong>.</p>
                    </div>
                    <h2 class="parentresume"><i class="fa fa-key" style="color: #edeff4;"></i> Quelles autres méthodes
                        existent pour pirater ?</h2>
                    <div class="openresume"><p style="text-align: justify;">Notre script n’est pas la seule méthode pour
                            <b>pirater des comptes de réseaux sociaux</b>. En vrai il existe pleins des autres formes de
                            le
                            faire, et on te parlera ensuite d’elles. Il faut prendre en compte que quelques de celles
                            ont
                            besoin de plus de connaissances informatiques. Toutefois, ne te décourage pas, puisqu’il y a
                            des
                            autres méthodes, plus simples, de voler le mot de passe ou espionner les conversations de
                            n’importe qui. </p>
                        <ul>
                            <li style="list-style-type: none;">
                                <ul>
                                    <!-- <li><i class="fa fa-key" style="color:#74c65f"></i><a href="https://pirater.me/instagram/xploits/">pirater con xploits</a>.--></ul>
                            </li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-key" style="color: #74c65f;"></i> Pirater avec des keyloggers.</li>
                            <li><i class="fa fa-key" style="color: #74c65f;"></i> Pirater avec de l'ingénierie sociale.
                            </li>
                            <li><i class="fa fa-key" style="color: #74c65f;"></i> Pirater avec phishing.</li>
                            <li><i class="fa fa-key" style="color: #74c65f;"></i> Pirater avec de la force brute.</li>
                            <li><i class="fa fa-key" style="color: #74c65f;"></i> Pirater avec backtrack.</li>
                            <li><i class="fa fa-key" style="color: #74c65f;"></i> Pirater avec wifiway.</li>
                            <li><i class="fa fa-key" style="color: #74c65f;"></i> Pirater avec bugtraq.</li>
                            <li><i class="fa fa-key" style="color: #74c65f;"></i> Pirater avec kali linux.</li>
                        </ul>
                    </div>
                    <h3 class="parentresume"><i class="fa fa-check-square-o" style="color: #edeff4;"></i> Des méthodes
                        pour pirater Facebook</h3>
                    <div class="openresume"><p style="text-align: justify;">On te montrera ensuite des méthodes pour que
                            tu puisses pirater Facebook.</p>
                        <ul>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                <b>Pirater Facebook avec des exploits</b> : Sa fonctionnalité est de réussir à que les
                                personnes saisissent leurs données sur un site web identique à Facebook.
                            </li>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                <b>Pirater Facebook avec des keyloggers</b> : Ce sont des logiciels liés aux troyens, et
                                une fois que l’ordinateur est infecté, ils s’occupent d’enregistrer ce que la personne
                                écrit en utilisant le clavier.
                            </li>
                            <li style="text-align: justify;"><i class="fa fa-check-circle" style="color: #74c65f;"></i>
                                <b>Pirater Facebook avec l’ordinateur</b> : Une forme plus simple de voler des mots de
                                passe, c’est de le faire en utilisant les données enregistrées sur le navigateur web.
                                Selon le navigateur, le lieu où trouver ces données peut varier. Cette méthode est
                                effective juste pour pirater les personnes qui se sont déjà connectés avant, en
                                utilisant l’ordinateur.
                            </li>
                        </ul>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            L’information n’est pas assez pour toi ? <a
                                    href="../%f0%9f%95%b5/espionner-facebook/index.html">Clique ici et connais plus de
                                méthodes pour Espionner Facebook</a>.</p></div>
                    <h3 class="parentresume"><i class="fa fa-check-square-o" style="color: #edeff4;"></i> Des méthodes
                        pour pirater Messenger</h3>
                    <div class="openresume"><p style="text-align: justify;">Les <b>méthodes pour pirater Messenger</b>
                            sont très similaires aux précédentes. En plus, il existe des applications destinées à
                            espionner
                            les conversations directement, sans avoir besoin d’avoir accès au compte Facebook. Ce type
                            de
                            logiciel n’a pas besoin de beaucoup d’espace de stockage, te laissera espionner même les
                            conversations archivées ou supprimées.</p>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            L’information n’est pas assez pour toi ? <a
                                    href="../%f0%9f%95%b5/espionner-messenger/index.html">Clique ici et connais plus de
                                méthodes pour Espionner Messenger</a>.</p></div>
                    <h3 class="parentresume"><i class="fa fa-check-square-o" style="color: #edeff4;"></i> Des méthodes
                        pour pirater WhatsApp</h3>
                    <div class="openresume"><p style="text-align: justify;">Une forme d’<b>espionner les conversations
                                de WhatsApp</b>, sans avoir besoin de logiciels, c’est utiliser la version web, en
                            accédant à
                            travers de ton ordinateur sans que la victime se rend compte. Comme ça, tu pourras voir
                            toutes
                            les conversations jusqu’à qu’elle fermera sa session.</p>
                        <p style="text-align: justify;"><u>Il existe d’autres méthodes comme la supplantation</u> pour
                            <b>pirater les conversations de WhatsApp</b>. Cette méthode fonctionne avec les systèmes
                            d’exploitation iOS et Android, et même s’il semble complexe, le procès est une technique
                            d’espionnage très simple.</p>
                        <p style="text-align: justify;">Quelques personnes préfèrent voler le compte du portable ou
                            espionner à travers de la carte SIM, mais ces méthodes-ci ne passent pas inaperçues. Il
                            s’agit plutôt d’une forme de prendre le contrôle de l’application.</p>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            L’information n’est pas assez pour toi ? <a
                                    href="../%f0%9f%95%b5/espionner-whatsapp/index.html">Clique ici et connais plus de
                                méthodes pour Espionner WhatsApp</a>.</p></div>
                    <h3 class="parentresume"><i class="fa fa-check-square-o" style="color: #edeff4;"></i> Des méthodes
                        pour pirater Twitter</h3>
                    <div class="openresume"><p style="text-align: justify;">Les exploits entrent en jeu à nouveau ici.
                            En réalité, c’est une méthode très utilisée pour <b>pirater n’importe quel réseau social</b>,
                            et
                            son fonctionnement est très simple. Son seul désavantage est qu’elle a besoin de plus de
                            temps
                            pour que la personne tombe dans le piège. À travers de notre script tu obtiendras l’accès
                            plus
                            rapidement.</p>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            L’information n’est pas assez pour toi ? <a
                                    href="../%f0%9f%95%b5/espionner-twitter/index.html">Clique ici et connais plus de
                                méthodes pour Espionner Twitter</a>.</p></div>
                    <h3 class="parentresume"><i class="fa fa-check-square-o" style="color: #edeff4;"></i> Des méthodes
                        pour pirater Instagram</h3>
                    <div class="openresume"><p style="text-align: justify;"><u>La méthode la plus utilisée s’appelle
                                pishing</u>, et elle consiste à cloner le site web, dans ce cas Instagram. Pour ça, des
                            connaissances basiques en design, programmation et serveurs web sont nécessaires.</p>
                        <p style="text-align: justify;">Le hacker paie un hébergement web, en sélectionnant le nom de
                            domaine plus similaire à celui du réseau social. Puis il clone complètement le site web
                            d’Instagram, en copiant le code source ou avec des logiciels spéciaux pour ça. Pour
                            terminer, une fois que le site web sera cloné, il y a plein de façons pour faire croire à la
                            personne que c’est le site web officiel, et pour qu’elle saisisse les données de son
                            compte.</p>
                        <p style="background-color: #fcf8e3; border-color: #e4edfc; color: #111111; border-radius: 3px; text-align: justify;">
                            L’information n’est pas assez pour toi ? <a
                                    href="../%f0%9f%95%b5/espionner-instagram/index.html">Clique ici et connais plus de
                                méthodes pour Espionner Instagram</a>.</p></div>
                    <h3 class="parentresume"><i class="fa fa-check-square-o" style="color: #edeff4;"></i> Des avantages
                        pour pirater avec notre site web</h3>
                    <div class="openresume"><p style="text-align: justify;"><b>Tu trouveras beaucoup de site webs qui
                                promettent de pirater un réseau social</b>. Tu dois te méfier d’eux, parce qu’ils
                            peuvent
                            infecter ton ordinateur avec des virus.</p>
                        <p style="text-align: justify;">Sur www.pirater.me, <u>on t’offre un outil rapide et simple</u>,
                            sans avoir besoin de logiciels complexes. Celui-ci est l’avantage principal qu’on t’offre,
                            en plus d’un service d’attention personnalisée, où on s’occupe de te conseiller à propos des
                            différentes formes de piratage, pour que tu choisisses celle qui te plait le plus.</p>
                        <p style="text-align: justify;">Par ailleurs, <b>il s’agit d’un service totalement anonyme</b>.
                            Personne ne doit pourquoi savoir ce que tu fais. On te garantit la sécurité et un service de
                            qualité.</p>
                        <p style="text-align: justify;">N’attends plus, ne perds pas du temps sur des autres sites web
                            qui ne font pas ce qu’ils promettent. Sur notre site web tu obtiendras toute l’information
                            nécessaire pour <u>pirater Facebook, Messenger, Twitter, WhatsApp et Instagram</u>. Si tu as
                            un doute, on te répondra volontiers.</p></div>
                    </sss></sss>            </div>

                <div class="redesbox">
                    <div class="redes helvetica">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpirater.me%2F&amp;display=popup"
                           id="fb" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i> Partager</a>
                        <a href="https://twitter.com/intent/tweet?text=Apprends+%C3%A0+pirater+tous+les+r%C3%A9seaux+sociaux+dans+5+minutes+%F0%9F%A5%87&amp;url=https%3A%2F%2Fpirater.me%2F"
                           id="tw" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i> Tweet</a>
                        <a href="whatsapp://send?text=Apprends+%C3%A0+pirater+tous+les+r%C3%A9seaux+sociaux+dans+5+minutes+%F0%9F%A5%87+https%3A%2F%2Fpirater.me%2F"
                           data-action="share/whatsapp/share" id="wha"><i class="fab fa-whatsapp"
                                                                          aria-hidden="true"></i> Whatsapp</a>
                        <a href="https://www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fpirater.me%2F&amp;media=https%3A%2F%2Fpirater.me%2Fconfig%2Fpiraterme%2Fprincipal.jpg&amp;description=Apprends+%C3%A0+pirater+tous+les+r%C3%A9seaux+sociaux+dans+5+minutes+%F0%9F%A5%87"
                           id="pin" target="_blank"><i class="fab fa-pinterest" aria-hidden="true"></i> Pinterest</a>
                    </div>

                    <p class="reacciona">Réagissez:</p>

                    <p class="emojis">
                        <span class="emoticon" reaction="like"
                              style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f60e.svg);">&nbsp;<em>J’aime</em></span>
                        <span class="emoticon" reaction="love"
                              style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f60d.svg);">&nbsp;<em>J’adore</em></span>
                        <span class="emoticon" reaction="fun"
                              style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f602.svg);">&nbsp;<em>Haha</em></span>
                        <span class="emoticon" reaction="angry"
                              style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f621.svg);">&nbsp;<em>Fâché</em></span>
                        <span class="emoticon" reaction="cry"
                              style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f622.svg);">&nbsp;<em>Triste</em></span>
                        <span class="emoticon" reaction="shock"
                              style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f62e.svg);">&nbsp;<em>Waouh</em></span>
                    </p><!--END .EMOJIS-->

                    <p class="reactions">
                        <label><span class="emoticone"
                                     style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f60d.svg);">&nbsp;</span>
                            420</label>
                        <label><span class="emoticone"
                                     style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f62e.svg);">&nbsp;</span>
                            411</label>
                        <label><span class="emoticone"
                                     style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f60e.svg);">&nbsp;</span>
                            380</label>
                        <label><span class="emoticone"
                                     style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f602.svg);">&nbsp;</span>
                            120</label>
                        <label><span class="emoticone"
                                     style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f621.svg);">&nbsp;</span>
                            66</label>
                        <label><span class="emoticone"
                                     style="background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f622.svg);">&nbsp;</span>
                            45</label>
                    </p><!--END .REACTIONS-->

                </div>

                <div id="iframe_here" style="padding:1px 0;" data-url="https://comments.consejosdeinternet.com/"
                     data-key="HACKACCOUNT" data-lang="fr"></div>
                <div class="loading_frame" id="loading_iframe">
                    <span>Chargement de commentaires en cours…</span>
                    <i class="fa fa-spinner fa-spin"></i>
                </div>

            </div><!--END .INDEX.ITEM-->

            <div class="sidebar helvetica">
                <div class="side-item">
                    <a href="../facebook/index.html">
                        <img class="lazyload side-img" src="../uploads/pirater-facebook.png" data-src=""
                             title="Pirater Facebook" alt="Pirater Facebook" style="opacity: 1;">
                        <p>Pirater Facebook</p>
                    </a>
                </div>
                <div class="side-item">
                    <a href="../whatsapp/index.html">
                        <img class="lazyload side-img" src="../uploads/pirater-whatsapp.png" data-src=""
                             title="Pirater Whatsapp" alt="Pirater Whatsapp" style="opacity: 1;">
                        <p>Pirater Whatsapp</p>
                    </a>
                </div>
                <div class="side-item">
                    <a href="../messenger/index.html">
                        <img class="lazyload side-img" src="../uploads/pirater-messenger.png" data-src=""
                             title="Pirater Messenger" alt="Pirater Messenger" style="opacity: 1;">
                        <p>Pirater Messenger</p>
                    </a>
                </div>
                <div class="side-item">
                    <a href="../instagram/index.html">
                        <img class="lazyload side-img" src="../uploads/pirater-instagram.png" data-src=""
                             title="Pirater Instagram" alt="Pirater Instagram" style="opacity: 1;">
                        <p>Pirater Instagram</p>
                    </a>
                </div>
                <div class="side-item">
                    <a href="../twitter/index.html">
                        <img class="lazyload side-img" src="../uploads/pirater-twitter.png" data-src=""
                             title="Pirater Twitter" alt="Pirater Twitter" style="opacity: 1;">
                        <p>Pirater Twitter</p>
                    </a>
                </div>
                <div class="side-item">
                    <a href="../snapchat/index.html">
                        <img class="lazyload side-img" src="../uploads/pirater-snapchat.png" data-src=""
                             title="Pirater Snapchat" alt="Pirater Snapchat" style="opacity: 1;">
                        <p>Pirater Snapchat</p>
                    </a>
                </div>
                <div class="side-item">
                    <a href="../localiser-mobile/index.html">
                        <img class="lazyload side-img" src="../uploads/localiser-mobile-miniature.jpg" data-src=""
                             title="Localiser mobile" alt="Localiser mobile" style="opacity: 1;">
                        <p>Localiser mobile</p>
                    </a>
                </div>
            </div><!--END SIDEBAR-->

            <div class="clear"></div>
        </div>
    </div>
</main>
<footer class="aligncenter">
    <a href="../contact/index.html">Contact</a>
</footer>

<div id="modal_hack_finish" style="display:none;">
    <div class="modal_t">
        <div class="modal_c">
            <div class="modal_content">
                <p class="mh_p1">!Hackeo completo!</p>
                <p class="mh_p2"><i class="fas fa-spinner fa-spin" aria-hidden="true"></i></p>
                <p class="mh_p3">Espere...</p>
                <p class="mh_p4">Estamos guardando la contraseña en nuestros servidores</p>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://kit.fontawesome.com/f5f0524925.js" crossorigin="anonymous"></script>
<script>
    /*! iFrame Resizer (iframeSizer.min.js ) - v3.5.15 - 2017-10-15
 *  Desc: Force cross domain iframes to size to content.
 *  Requires: iframeResizer.contentWindow.min.js to be loaded into the target frame.
 *  Copyright: (c) 2017 David J. Bradshaw - dave@bradshaw.net
 *  License: MIT
 */

    !function (a) {
        "use strict";

        function b(a, b, c) {
            "addEventListener" in window ? a.addEventListener(b, c, !1) : "attachEvent" in window && a.attachEvent("on" + b, c)
        }

        function c(a, b, c) {
            "removeEventListener" in window ? a.removeEventListener(b, c, !1) : "detachEvent" in window && a.detachEvent("on" + b, c)
        }

        function d() {
            var a, b = ["moz", "webkit", "o", "ms"];
            for (a = 0; a < b.length && !N; a += 1) N = window[b[a] + "RequestAnimationFrame"];
            N || h("setup", "RequestAnimationFrame not supported")
        }

        function e(a) {
            var b = "Host page: " + a;
            return window.top !== window.self && (b = window.parentIFrame && window.parentIFrame.getId ? window.parentIFrame.getId() + ": " + a : "Nested host page: " + a), b
        }

        function f(a) {
            return K + "[" + e(a) + "]"
        }

        function g(a) {
            return P[a] ? P[a].log : G
        }

        function h(a, b) {
            k("log", a, b, g(a))
        }

        function i(a, b) {
            k("info", a, b, g(a))
        }

        function j(a, b) {
            k("warn", a, b, !0)
        }

        function k(a, b, c, d) {
            !0 === d && "object" == typeof window.console && console[a](f(b), c)
        }

        function l(a) {
            function d() {
                function a() {
                    s(U), p(V), I("resizedCallback", U)
                }

                f("Height"), f("Width"), t(a, U, "init")
            }

            function e() {
                var a = T.substr(L).split(":");
                return {iframe: P[a[0]] && P[a[0]].iframe, id: a[0], height: a[1], width: a[2], type: a[3]}
            }

            function f(a) {
                var b = Number(P[V]["max" + a]), c = Number(P[V]["min" + a]), d = a.toLowerCase(), e = Number(U[d]);
                h(V, "Checking " + d + " is in range " + c + "-" + b), c > e && (e = c, h(V, "Set " + d + " to min value")), e > b && (e = b, h(V, "Set " + d + " to max value")), U[d] = "" + e
            }

            function g() {
                function b() {
                    function a() {
                        var a = 0, b = !1;
                        for (h(V, "Checking connection is from allowed list of origins: " + d); a < d.length; a++) if (d[a] === c) {
                            b = !0;
                            break
                        }
                        return b
                    }

                    function b() {
                        var a = P[V] && P[V].remoteHost;
                        return h(V, "Checking connection is from: " + a), c === a
                    }

                    return d.constructor === Array ? a() : b()
                }

                var c = a.origin, d = P[V] && P[V].checkOrigin;
                if (d && "" + c != "null" && !b()) throw new Error("Unexpected message received from: " + c + " for " + U.iframe.id + ". Message was: " + a.data + ". This error can be disabled by setting the checkOrigin: false option or by providing of array of trusted domains.");
                return !0
            }

            function k() {
                return K === ("" + T).substr(0, L) && T.substr(L).split(":")[0] in P
            }

            function l() {
                var a = U.type in {"true": 1, "false": 1, undefined: 1};
                return a && h(V, "Ignoring init message from meta parent page"), a
            }

            function w(a) {
                return T.substr(T.indexOf(":") + J + a)
            }

            function y(a) {
                h(V, "MessageCallback passed: {iframe: " + U.iframe.id + ", message: " + a + "}"), I("messageCallback", {
                    iframe: U.iframe,
                    message: JSON.parse(a)
                }), h(V, "--")
            }

            function z() {
                var a = document.body.getBoundingClientRect(), b = U.iframe.getBoundingClientRect();
                return JSON.stringify({
                    iframeHeight: b.height,
                    iframeWidth: b.width,
                    clientHeight: Math.max(document.documentElement.clientHeight, window.innerHeight || 0),
                    clientWidth: Math.max(document.documentElement.clientWidth, window.innerWidth || 0),
                    offsetTop: parseInt(b.top - a.top, 10),
                    offsetLeft: parseInt(b.left - a.left, 10),
                    scrollTop: window.pageYOffset,
                    scrollLeft: window.pageXOffset
                })
            }

            function A(a, b) {
                function c() {
                    u("Send Page Info", "pageInfo:" + z(), a, b)
                }

                x(c, 32)
            }

            function B() {
                function a(a, b) {
                    function c() {
                        P[f] ? A(P[f].iframe, f) : d()
                    }

                    ["scroll", "resize"].forEach(function (d) {
                        h(f, a + d + " listener for sendPageInfo"), b(window, d, c)
                    })
                }

                function d() {
                    a("Remove ", c)
                }

                function e() {
                    a("Add ", b)
                }

                var f = V;
                e(), P[f] && (P[f].stopPageInfo = d)
            }

            function C() {
                P[V] && P[V].stopPageInfo && (P[V].stopPageInfo(), delete P[V].stopPageInfo)
            }

            function D() {
                var a = !0;
                return null === U.iframe && (j(V, "IFrame (" + U.id + ") not found"), a = !1), a
            }

            function E(a) {
                var b = a.getBoundingClientRect();
                return o(V), {x: Math.floor(Number(b.left) + Number(M.x)), y: Math.floor(Number(b.top) + Number(M.y))}
            }

            function F(a) {
                function b() {
                    M = f, G(), h(V, "--")
                }

                function c() {
                    return {x: Number(U.width) + e.x, y: Number(U.height) + e.y}
                }

                function d() {
                    window.parentIFrame ? window.parentIFrame["scrollTo" + (a ? "Offset" : "")](f.x, f.y) : j(V, "Unable to scroll to requested position, window.parentIFrame not found")
                }

                var e = a ? E(U.iframe) : {x: 0, y: 0}, f = c();
                h(V, "Reposition requested from iFrame (offset x:" + e.x + " y:" + e.y + ")"), window.top !== window.self ? d() : b()
            }

            function G() {
                !1 !== I("scrollCallback", M) ? p(V) : q()
            }

            function H(a) {
                function b() {
                    var a = E(f);
                    h(V, "Moving to in page link (#" + d + ") at x: " + a.x + " y: " + a.y), M = {
                        x: a.x,
                        y: a.y
                    }, G(), h(V, "--")
                }

                function c() {
                    window.parentIFrame ? window.parentIFrame.moveToAnchor(d) : h(V, "In page link #" + d + " not found and window.parentIFrame not found")
                }

                var d = a.split("#")[1] || "", e = decodeURIComponent(d),
                    f = document.getElementById(e) || document.getElementsByName(e)[0];
                f ? b() : window.top !== window.self ? c() : h(V, "In page link #" + d + " not found")
            }

            function I(a, b) {
                return m(V, a, b)
            }

            function N() {
                switch (P[V] && P[V].firstRun && S(), U.type) {
                    case"close":
                        P[V].closeRequestCallback ? m(V, "closeRequestCallback", P[V].iframe) : n(U.iframe);
                        break;
                    case"message":
                        y(w(6));
                        break;
                    case"scrollTo":
                        F(!1);
                        break;
                    case"scrollToOffset":
                        F(!0);
                        break;
                    case"pageInfo":
                        A(P[V] && P[V].iframe, V), B();
                        break;
                    case"pageInfoStop":
                        C();
                        break;
                    case"inPageLink":
                        H(w(9));
                        break;
                    case"reset":
                        r(U);
                        break;
                    case"init":
                        d(), I("initCallback", U.iframe);
                        break;
                    default:
                        d()
                }
            }

            function O(a) {
                var b = !0;
                return P[a] || (b = !1, j(U.type + " No settings for " + a + ". Message was: " + T)), b
            }

            function Q() {
                for (var a in P) u("iFrame requested init", v(a), document.getElementById(a), a)
            }

            function S() {
                P[V] && (P[V].firstRun = !1)
            }

            var T = a.data, U = {}, V = null;
            "[iFrameResizerChild]Ready" === T ? Q() : k() ? (U = e(), V = R = U.id, P[V] && (P[V].loaded = !0), !l() && O(V) && (h(V, "Received: " + T), D() && g() && N())) : i(V, "Ignored: " + T)
        }

        function m(a, b, c) {
            var d = null, e = null;
            if (P[a]) {
                if (d = P[a][b], "function" != typeof d) throw new TypeError(b + " on iFrame[" + a + "] is not a function");
                e = d(c)
            }
            return e
        }

        function n(a) {
            var b = a.id;
            h(b, "Removing iFrame: " + b), a.parentNode && a.parentNode.removeChild(a), m(b, "closedCallback", b), h(b, "--"), delete P[b]
        }

        function o(b) {
            null === M && (M = {
                x: window.pageXOffset !== a ? window.pageXOffset : document.documentElement.scrollLeft,
                y: window.pageYOffset !== a ? window.pageYOffset : document.documentElement.scrollTop
            }, h(b, "Get page position: " + M.x + "," + M.y))
        }

        function p(a) {
            null !== M && (window.scrollTo(M.x, M.y), h(a, "Set page position: " + M.x + "," + M.y), q())
        }

        function q() {
            M = null
        }

        function r(a) {
            function b() {
                s(a), u("reset", "reset", a.iframe, a.id)
            }

            h(a.id, "Size reset requested by " + ("init" === a.type ? "host page" : "iFrame")), o(a.id), t(b, a, "reset")
        }

        function s(a) {
            function b(b) {
                a.iframe.style[b] = a[b] + "px", h(a.id, "IFrame (" + e + ") " + b + " set to " + a[b] + "px")
            }

            function c(b) {
                H || "0" !== a[b] || (H = !0, h(e, "Hidden iFrame detected, creating visibility listener"), y())
            }

            function d(a) {
                b(a), c(a)
            }

            var e = a.iframe.id;
            P[e] && (P[e].sizeHeight && d("height"), P[e].sizeWidth && d("width"))
        }

        function t(a, b, c) {
            c !== b.type && N ? (h(b.id, "Requesting animation frame"), N(a)) : a()
        }

        function u(a, b, c, d, e) {
            function f() {
                var e = P[d] && P[d].targetOrigin;
                h(d, "[" + a + "] Sending msg to iframe[" + d + "] (" + b + ") targetOrigin: " + e), c.contentWindow.postMessage(K + b, e)
            }

            function g() {
                j(d, "[" + a + "] IFrame(" + d + ") not found")
            }

            function i() {
                c && "contentWindow" in c && null !== c.contentWindow ? f() : g()
            }

            function k() {
                function a() {
                    !P[d] || P[d].loaded || l || (l = !0, j(d, "IFrame has not responded within " + P[d].warningTimeout / 1e3 + " seconds. Check iFrameResizer.contentWindow.js has been loaded in iFrame. This message can be ingored if everything is working, or you can set the warningTimeout option to a higher value or zero to suppress this warning."))
                }

                e && P[d] && P[d].warningTimeout && (P[d].msgTimeout = setTimeout(a, P[d].warningTimeout))
            }

            var l = !1;
            d = d || c.id, P[d] && (i(), k())
        }

        function v(a) {
            return a + ":" + P[a].bodyMarginV1 + ":" + P[a].sizeWidth + ":" + P[a].log + ":" + P[a].interval + ":" + P[a].enablePublicMethods + ":" + P[a].autoResize + ":" + P[a].bodyMargin + ":" + P[a].heightCalculationMethod + ":" + P[a].bodyBackground + ":" + P[a].bodyPadding + ":" + P[a].tolerance + ":" + P[a].inPageLinks + ":" + P[a].resizeFrom + ":" + P[a].widthCalculationMethod
        }

        function w(c, d) {
            function e() {
                function a(a) {
                    1 / 0 !== P[x][a] && 0 !== P[x][a] && (c.style[a] = P[x][a] + "px", h(x, "Set " + a + " = " + P[x][a] + "px"))
                }

                function b(a) {
                    if (P[x]["min" + a] > P[x]["max" + a]) throw new Error("Value for min" + a + " can not be greater than max" + a)
                }

                b("Height"), b("Width"), a("maxHeight"), a("minHeight"), a("maxWidth"), a("minWidth")
            }

            function f() {
                var a = d && d.id || S.id + F++;
                return null !== document.getElementById(a) && (a += F++), a
            }

            function g(a) {
                return R = a, "" === a && (c.id = a = f(), G = (d || {}).log, R = a, h(a, "Added missing iframe ID: " + a + " (" + c.src + ")")), a
            }

            function i() {
                switch (h(x, "IFrame scrolling " + (P[x] && P[x].scrolling ? "enabled" : "disabled") + " for " + x), c.style.overflow = !1 === (P[x] && P[x].scrolling) ? "hidden" : "auto", P[x] && P[x].scrolling) {
                    case!0:
                        c.scrolling = "yes";
                        break;
                    case!1:
                        c.scrolling = "no";
                        break;
                    default:
                        c.scrolling = P[x] ? P[x].scrolling : "no"
                }
            }

            function k() {
                ("number" == typeof (P[x] && P[x].bodyMargin) || "0" === (P[x] && P[x].bodyMargin)) && (P[x].bodyMarginV1 = P[x].bodyMargin, P[x].bodyMargin = "" + P[x].bodyMargin + "px")
            }

            function l() {
                var a = P[x] && P[x].firstRun, b = P[x] && P[x].heightCalculationMethod in O;
                !a && b && r({iframe: c, height: 0, width: 0, type: "init"})
            }

            function m() {
                Function.prototype.bind && P[x] && (P[x].iframe.iFrameResizer = {
                    close: n.bind(null, P[x].iframe),
                    resize: u.bind(null, "Window resize", "resize", P[x].iframe),
                    moveToAnchor: function (a) {
                        u("Move to anchor", "moveToAnchor:" + a, P[x].iframe, x)
                    },
                    sendMessage: function (a) {
                        a = JSON.stringify(a), u("Send Message", "message:" + a, P[x].iframe, x)
                    }
                })
            }

            function o(d) {
                function e() {
                    u("iFrame.onload", d, c, a, !0), l()
                }

                b(c, "load", e), u("init", d, c, a, !0)
            }

            function p(a) {
                if ("object" != typeof a) throw new TypeError("Options is not an object")
            }

            function q(a) {
                for (var b in S) S.hasOwnProperty(b) && (P[x][b] = a.hasOwnProperty(b) ? a[b] : S[b])
            }

            function s(a) {
                return "" === a || "file://" === a ? "*" : a
            }

            function t(a) {
                a = a || {}, P[x] = {
                    firstRun: !0,
                    iframe: c,
                    remoteHost: c.src.split("../index.html").slice(0, 3).join("../index.html")
                }, p(a), q(a), P[x] && (P[x].targetOrigin = !0 === P[x].checkOrigin ? s(P[x].remoteHost) : "*")
            }

            function w() {
                return x in P && "iFrameResizer" in c
            }

            var x = g(c.id);
            w() ? j(x, "Ignored iFrame, already setup.") : (t(d), i(), e(), k(), o(v(x)), m())
        }

        function x(a, b) {
            null === Q && (Q = setTimeout(function () {
                Q = null, a()
            }, b))
        }

        function y() {
            function a() {
                function a(a) {
                    function b(b) {
                        return "0px" === (P[a] && P[a].iframe.style[b])
                    }

                    function c(a) {
                        return null !== a.offsetParent
                    }

                    P[a] && c(P[a].iframe) && (b("height") || b("width")) && u("Visibility change", "resize", P[a].iframe, a)
                }

                for (var b in P) a(b)
            }

            function b(b) {
                h("window", "Mutation observed: " + b[0].target + " " + b[0].type), x(a, 16)
            }

            function c() {
                var a = document.querySelector("body"), c = {
                    attributes: !0,
                    attributeOldValue: !1,
                    characterData: !0,
                    characterDataOldValue: !1,
                    childList: !0,
                    subtree: !0
                }, e = new d(b);
                e.observe(a, c)
            }

            var d = window.MutationObserver || window.WebKitMutationObserver;
            d && c()
        }

        function z(a) {
            function b() {
                B("Window " + a, "resize")
            }

            h("window", "Trigger event: " + a), x(b, 16)
        }

        function A() {
            function a() {
                B("Tab Visable", "resize")
            }

            "hidden" !== document.visibilityState && (h("document", "Trigger event: Visiblity change"), x(a, 16))
        }

        function B(a, b) {
            function c(a) {
                return P[a] && "parent" === P[a].resizeFrom && P[a].autoResize && !P[a].firstRun
            }

            for (var d in P) c(d) && u(a, b, document.getElementById(d), d)
        }

        function C() {
            b(window, "message", l), b(window, "resize", function () {
                z("resize")
            }), b(document, "visibilitychange", A), b(document, "-webkit-visibilitychange", A), b(window, "focusin", function () {
                z("focus")
            }), b(window, "focus", function () {
                z("focus")
            })
        }

        function D() {
            function b(a, b) {
                function c() {
                    if (!b.tagName) throw new TypeError("Object is not a valid DOM element");
                    if ("IFRAME" !== b.tagName.toUpperCase()) throw new TypeError("Expected <IFRAME> tag, found <" + b.tagName + ">")
                }

                b && (c(), w(b, a), e.push(b))
            }

            function c(a) {
                a && a.enablePublicMethods && j("enablePublicMethods option has been removed, public methods are now always available in the iFrame")
            }

            var e;
            return d(), C(), function (d, f) {
                switch (e = [], c(d), typeof f) {
                    case"undefined":
                    case"string":
                        Array.prototype.forEach.call(document.querySelectorAll(f || "iframe"), b.bind(a, d));
                        break;
                    case"object":
                        b(d, f);
                        break;
                    default:
                        throw new TypeError("Unexpected data type (" + typeof f + ")")
                }
                return e
            }
        }

        function E(a) {
            a.fn ? a.fn.iFrameResize || (a.fn.iFrameResize = function (a) {
                function b(b, c) {
                    w(c, a)
                }

                return this.filter("iframe").each(b).end()
            }) : i("", "Unable to bind to jQuery, it is not fully loaded.")
        }

        if ("undefined" != typeof window) {
            var F = 0, G = !1, H = !1, I = "message", J = I.length, K = "[iFrameSizer]", L = K.length, M = null,
                N = window.requestAnimationFrame, O = {max: 1, scroll: 1, bodyScroll: 1, documentElementScroll: 1},
                P = {}, Q = null, R = "Host Page", S = {
                    autoResize: !0,
                    bodyBackground: null,
                    bodyMargin: null,
                    bodyMarginV1: 8,
                    bodyPadding: null,
                    checkOrigin: !0,
                    inPageLinks: !1,
                    enablePublicMethods: !0,
                    heightCalculationMethod: "bodyOffset",
                    id: "iFrameResizer",
                    interval: 32,
                    log: !1,
                    maxHeight: 1 / 0,
                    maxWidth: 1 / 0,
                    minHeight: 0,
                    minWidth: 0,
                    resizeFrom: "parent",
                    scrolling: !1,
                    sizeHeight: !0,
                    sizeWidth: !1,
                    warningTimeout: 5e3,
                    tolerance: 0,
                    widthCalculationMethod: "scroll",
                    closedCallback: function () {
                    },
                    initCallback: function () {
                    },
                    messageCallback: function () {
                        j("MessageCallback function not defined")
                    },
                    resizedCallback: function () {
                    },
                    scrollCallback: function () {
                        return !0
                    }
                };
            window.jQuery && E(window.jQuery), "function" == typeof define && define.amd ? define([], D) : "object" == typeof module && "object" == typeof module.exports ? module.exports = D() : window.iFrameResize = window.iFrameResize || D()
        }
    }();    </script>

<script>
    var web = '../index.html';
    var pid = 7;

    $('document').ready(function () {
        var run_ajax = 1580143452;
        var pdebug = false;
        var hdebug = false;


        var abierto = true;
        $('#ocultar-box-hack').click(function () {
            if (abierto === true) {
                /* lo cerramos */
                abierto = false;
                $(this).html('Montrer');
                $('.box-hack-content').slideUp();
            } else {
                abierto = true;
                $(this).html('Cacher');
                $('.box-hack-content').slideDown();
            }
        });

        $('.help_click').click(function () {
            $('.helping_down').slideToggle();

            return false;
        });

        $('.help_go').click(function () {
            var go = $(this).data('go'); /* tutorial comentarios encuesta otros */
            if (go == 'tutorial') {
                $("html, body").animate({scrollTop: (($('#video_title').offset().top) - 100) + 'px'}, 700);
            } else if (go == 'comentarios') {
                $("html, body").animate({scrollTop: (($('#iframe_here').offset().top) - 100) + 'px'}, 700);
            } else if (go == 'encuesta') {

            } else if (go == 'otros') {

            }

            return false;
        });

        var comment_load = false;
        $(window).bind('scroll', function () {
            if (comment_load === false) {
                var b = '#iframe_here';
                if ($(b).length) {
                    if ($(window).scrollTop() >= ((($(b).offset().top) - 100) + ($(b).outerHeight()) - (window.innerHeight))) {
                        comment_load = true;

                        var url_comments = $(b).data('url');
                        var key_comments = $(b).data('key');
                        var lang_comments = $(b).data('lang');

                        var url_iframe = url_comments + '?web=' + key_comments + '&idp=' + pid + '&lang=' + lang_comments;

                        $('#iframe_here').html('<iframe src="' + url_iframe + '" id="theiframe" style="width:100%; display:none;"></iframe>');

                        $('#theiframe').load(function () {
                            $('#loading_iframe').css({display: 'none'});
                            $('#theiframe').fadeIn();
                            iFrameResize({log: false}, '#theiframe');
                        });
                    }
                }
            }
        });

        var play_int_porce = false;
        var play_int_aux = 1;

        setTimeout(function () {
            $('.play').click();
        }, 250);

        function load_video(opc) {
            /* AGREGAMOS LOADING */
            $('.play').html('<i class="fa fa-spinner fa-spin"></i>');
            $('.play').after('<p class="play_porce">1%</p>');

            /* ARRANCAMOS PORCENTAJE */
            play_int_porce = setInterval(function () {
                var b = play_int_aux * 10;
                var i = Math.floor((Math.random() * 10) + 1); // del 0 al 10
                parseInt(i);
                c = ((b + i) >= 100) ? 100 : b + i;
                $('.play_porce').html(c + '%');

                if (play_int_aux >= 10) {
                    play_int_aux = 0;
                    clearInterval(play_int_porce);
                    play_int_porce = false;
                }

                play_int_aux++;
            }, 400);

            var video = $('[name="video_' + opc + '"]').val();
            var type = $('[name="video_type_' + opc + '"]').val();
            var load = $('[name="video_load_' + opc + '"]').val();

            if (load == 0) {
                /* Cargar por 1 vez*/
                $('[name="video_load_' + opc + '"]').val(1);
            }

            var ob = '<video id="video_load" class="noplay" width="560" height="315" controls><source src="' + video + '" type="video/mp4" /></video>';
            if (type == 'youtube') {
                ob = '<iframe id="iframe_load" class="noplay" src="https://www.youtube.com/embed/' + video + '?autoplay=0&rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>';
            }

            $('#contenedor_iframe').html(ob);

            if (type == 'youtube') {
                $('#contenedor_iframe #iframe_load').load(function () {
                    $('.videoLoading').css({display: 'none'});
                    $('#contenedor_iframe').fadeIn();
                    if (play_int_porce !== false) {
                        clearInterval(play_int_porce);
                    }
                });
            } else {
                $('.videoLoading').css({display: 'none'});
                $('#contenedor_iframe').fadeIn();
                if (play_int_porce !== false) {
                    clearInterval(play_int_porce);
                }
            }
        }

        function load_button_play() {
            $('#contenedor_iframe').html('');
            $('#contenedor_iframe').css({display: 'none'});

            $('.play_porce').remove();
            $('.play').html('<i class="fa fa-play-circle"></i>');
            $('.videoLoading').css({display: 'block'});
        }

        $('.livideo').click(function () {
            if (!$(this).hasClass('active')) {
                $('.livideo.active').removeClass('active');
                $(this).addClass('active');

                /* OPCIONES DEL VIDEO */
                var opc = $(this).find('a').data('opc');
                var load = $('[name="video_load_' + opc + '"]').val();

                if (load == 1) {
                    load_video(opc);
                } else {
                    /* mostramos button play */
                    load_button_play();
                }
            }
        });

        $('.play').click(function () {
            /* OPCIONES DEL VIDEO */
            var opc = $('.livideo.active a').data('opc');
            if (opc === undefined) {
                opc = 1;
            }
            load_video(opc);
        });


        var flags = {
            "AD": {"name": "ANDORRA", "code": "376"},
            "AE": {"name": "UNITED ARAB EMIRATES", "code": "971"},
            "AF": {"name": "AFGHANISTAN", "code": "93"},
            "AG": {"name": "ANTIGUA AND BARBUDA", "code": "1268"},
            "AI": {"name": "ANGUILLA", "code": "1264"},
            "AL": {"name": "ALBANIA", "code": "355"},
            "AM": {"name": "ARMENIA", "code": "374"},
            "AN": {"name": "NETHERLANDS ANTILLES", "code": "599"},
            "AO": {"name": "ANGOLA", "code": "244"},
            "AQ": {"name": "ANTARCTICA", "code": "672"},
            "AR": {"name": "ARGENTINA", "code": "54"},
            "AS": {"name": "AMERICAN SAMOA", "code": "1684"},
            "AT": {"name": "AUSTRIA", "code": "43"},
            "AU": {"name": "AUSTRALIA", "code": "61"},
            "AW": {"name": "ARUBA", "code": "297"},
            "AZ": {"name": "AZERBAIJAN", "code": "994"},
            "BA": {"name": "BOSNIA AND HERZEGOVINA", "code": "387"},
            "BB": {"name": "BARBADOS", "code": "1246"},
            "BD": {"name": "BANGLADESH", "code": "880"},
            "BE": {"name": "BELGIUM", "code": "32"},
            "BF": {"name": "BURKINA FASO", "code": "226"},
            "BG": {"name": "BULGARIA", "code": "359"},
            "BH": {"name": "BAHRAIN", "code": "973"},
            "BI": {"name": "BURUNDI", "code": "257"},
            "BJ": {"name": "BENIN", "code": "229"},
            "BL": {"name": "SAINT BARTHELEMY", "code": "590"},
            "BM": {"name": "BERMUDA", "code": "1441"},
            "BN": {"name": "BRUNEI DARUSSALAM", "code": "673"},
            "BO": {"name": "BOLIVIA", "code": "591"},
            "BR": {"name": "BRAZIL", "code": "55"},
            "BS": {"name": "BAHAMAS", "code": "1242"},
            "BT": {"name": "BHUTAN", "code": "975"},
            "BW": {"name": "BOTSWANA", "code": "267"},
            "BY": {"name": "BELARUS", "code": "375"},
            "BZ": {"name": "BELIZE", "code": "501"},
            "CA": {"name": "CANADA", "code": "1"},
            "CC": {"name": "COCOS (KEELING) ISLANDS", "code": "61"},
            "CD": {"name": "CONGO, THE DEMOCRATIC REPUBLIC OF THE", "code": "243"},
            "CF": {"name": "CENTRAL AFRICAN REPUBLIC", "code": "236"},
            "CG": {"name": "CONGO", "code": "242"},
            "CH": {"name": "SWITZERLAND", "code": "41"},
            "CI": {"name": "COTE D IVOIRE", "code": "225"},
            "CK": {"name": "COOK ISLANDS", "code": "682"},
            "CL": {"name": "CHILE", "code": "56"},
            "CM": {"name": "CAMEROON", "code": "237"},
            "CN": {"name": "CHINA", "code": "86"},
            "CO": {"name": "COLOMBIA", "code": "57"},
            "CR": {"name": "COSTA RICA", "code": "506"},
            "CU": {"name": "CUBA", "code": "53"},
            "CV": {"name": "CAPE VERDE", "code": "238"},
            "CX": {"name": "CHRISTMAS ISLAND", "code": "61"},
            "CY": {"name": "CYPRUS", "code": "357"},
            "CZ": {"name": "CZECH REPUBLIC", "code": "420"},
            "DE": {"name": "GERMANY", "code": "49"},
            "DJ": {"name": "DJIBOUTI", "code": "253"},
            "DK": {"name": "DENMARK", "code": "45"},
            "DM": {"name": "DOMINICA", "code": "1767"},
            "DO": {"name": "DOMINICAN REPUBLIC", "code": "1809"},
            "DZ": {"name": "ALGERIA", "code": "213"},
            "EC": {"name": "ECUADOR", "code": "593"},
            "EE": {"name": "ESTONIA", "code": "372"},
            "EG": {"name": "EGYPT", "code": "20"},
            "ER": {"name": "ERITREA", "code": "291"},
            "ES": {"name": "SPAIN", "code": "34"},
            "ET": {"name": "ETHIOPIA", "code": "251"},
            "FI": {"name": "FINLAND", "code": "358"},
            "FJ": {"name": "FIJI", "code": "679"},
            "FK": {"name": "FALKLAND ISLANDS (MALVINAS)", "code": "500"},
            "FM": {"name": "MICRONESIA, FEDERATED STATES OF", "code": "691"},
            "FO": {"name": "FAROE ISLANDS", "code": "298"},
            "FR": {"name": "FRANCE", "code": "33"},
            "GA": {"name": "GABON", "code": "241"},
            "GB": {"name": "UNITED KINGDOM", "code": "44"},
            "GD": {"name": "GRENADA", "code": "1473"},
            "GE": {"name": "GEORGIA", "code": "995"},
            "GH": {"name": "GHANA", "code": "233"},
            "GI": {"name": "GIBRALTAR", "code": "350"},
            "GL": {"name": "GREENLAND", "code": "299"},
            "GM": {"name": "GAMBIA", "code": "220"},
            "GN": {"name": "GUINEA", "code": "224"},
            "GQ": {"name": "EQUATORIAL GUINEA", "code": "240"},
            "GR": {"name": "GREECE", "code": "30"},
            "GT": {"name": "GUATEMALA", "code": "502"},
            "GU": {"name": "GUAM", "code": "1671"},
            "GW": {"name": "GUINEA-BISSAU", "code": "245"},
            "GY": {"name": "GUYANA", "code": "592"},
            "HK": {"name": "HONG KONG", "code": "852"},
            "HN": {"name": "HONDURAS", "code": "504"},
            "HR": {"name": "CROATIA", "code": "385"},
            "HT": {"name": "HAITI", "code": "509"},
            "HU": {"name": "HUNGARY", "code": "36"},
            "ID": {"name": "INDONESIA", "code": "62"},
            "IE": {"name": "IRELAND", "code": "353"},
            "IL": {"name": "ISRAEL", "code": "972"},
            "IM": {"name": "ISLE OF MAN", "code": "44"},
            "IN": {"name": "INDIA", "code": "91"},
            "IQ": {"name": "IRAQ", "code": "964"},
            "IR": {"name": "IRAN, ISLAMIC REPUBLIC OF", "code": "98"},
            "IS": {"name": "ICELAND", "code": "354"},
            "IT": {"name": "ITALY", "code": "39"},
            "JM": {"name": "JAMAICA", "code": "1876"},
            "JO": {"name": "JORDAN", "code": "962"},
            "JP": {"name": "JAPAN", "code": "81"},
            "KE": {"name": "KENYA", "code": "254"},
            "KG": {"name": "KYRGYZSTAN", "code": "996"},
            "KH": {"name": "CAMBODIA", "code": "855"},
            "KI": {"name": "KIRIBATI", "code": "686"},
            "KM": {"name": "COMOROS", "code": "269"},
            "KN": {"name": "SAINT KITTS AND NEVIS", "code": "1869"},
            "KP": {"name": "KOREA DEMOCRATIC PEOPLES REPUBLIC OF", "code": "850"},
            "KR": {"name": "KOREA REPUBLIC OF", "code": "82"},
            "KW": {"name": "KUWAIT", "code": "965"},
            "KY": {"name": "CAYMAN ISLANDS", "code": "1345"},
            "KZ": {"name": "KAZAKSTAN", "code": "7"},
            "LA": {"name": "LAO PEOPLES DEMOCRATIC REPUBLIC", "code": "856"},
            "LB": {"name": "LEBANON", "code": "961"},
            "LC": {"name": "SAINT LUCIA", "code": "1758"},
            "LI": {"name": "LIECHTENSTEIN", "code": "423"},
            "LK": {"name": "SRI LANKA", "code": "94"},
            "LR": {"name": "LIBERIA", "code": "231"},
            "LS": {"name": "LESOTHO", "code": "266"},
            "LT": {"name": "LITHUANIA", "code": "370"},
            "LU": {"name": "LUXEMBOURG", "code": "352"},
            "LV": {"name": "LATVIA", "code": "371"},
            "LY": {"name": "LIBYAN ARAB JAMAHIRIYA", "code": "218"},
            "MA": {"name": "MOROCCO", "code": "212"},
            "MC": {"name": "MONACO", "code": "377"},
            "MD": {"name": "MOLDOVA, REPUBLIC OF", "code": "373"},
            "ME": {"name": "MONTENEGRO", "code": "382"},
            "MF": {"name": "SAINT MARTIN", "code": "1599"},
            "MG": {"name": "MADAGASCAR", "code": "261"},
            "MH": {"name": "MARSHALL ISLANDS", "code": "692"},
            "MK": {"name": "MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF", "code": "389"},
            "ML": {"name": "MALI", "code": "223"},
            "MM": {"name": "MYANMAR", "code": "95"},
            "MN": {"name": "MONGOLIA", "code": "976"},
            "MO": {"name": "MACAU", "code": "853"},
            "MP": {"name": "NORTHERN MARIANA ISLANDS", "code": "1670"},
            "MR": {"name": "MAURITANIA", "code": "222"},
            "MS": {"name": "MONTSERRAT", "code": "1664"},
            "MT": {"name": "MALTA", "code": "356"},
            "MU": {"name": "MAURITIUS", "code": "230"},
            "MV": {"name": "MALDIVES", "code": "960"},
            "MW": {"name": "MALAWI", "code": "265"},
            "MX": {"name": "MEXICO", "code": "52"},
            "MY": {"name": "MALAYSIA", "code": "60"},
            "MZ": {"name": "MOZAMBIQUE", "code": "258"},
            "NA": {"name": "NAMIBIA", "code": "264"},
            "NC": {"name": "NEW CALEDONIA", "code": "687"},
            "NE": {"name": "NIGER", "code": "227"},
            "NG": {"name": "NIGERIA", "code": "234"},
            "NI": {"name": "NICARAGUA", "code": "505"},
            "NL": {"name": "NETHERLANDS", "code": "31"},
            "NO": {"name": "NORWAY", "code": "47"},
            "NP": {"name": "NEPAL", "code": "977"},
            "NR": {"name": "NAURU", "code": "674"},
            "NU": {"name": "NIUE", "code": "683"},
            "NZ": {"name": "NEW ZEALAND", "code": "64"},
            "OM": {"name": "OMAN", "code": "968"},
            "PA": {"name": "PANAMA", "code": "507"},
            "PE": {"name": "PERU", "code": "51"},
            "PF": {"name": "FRENCH POLYNESIA", "code": "689"},
            "PG": {"name": "PAPUA NEW GUINEA", "code": "675"},
            "PH": {"name": "PHILIPPINES", "code": "63"},
            "PK": {"name": "PAKISTAN", "code": "92"},
            "PL": {"name": "POLAND", "code": "48"},
            "PM": {"name": "SAINT PIERRE AND MIQUELON", "code": "508"},
            "PN": {"name": "PITCAIRN", "code": "870"},
            "PR": {"name": "PUERTO RICO", "code": "1"},
            "PT": {"name": "PORTUGAL", "code": "351"},
            "PW": {"name": "PALAU", "code": "680"},
            "PY": {"name": "PARAGUAY", "code": "595"},
            "QA": {"name": "QATAR", "code": "974"},
            "RO": {"name": "ROMANIA", "code": "40"},
            "RS": {"name": "SERBIA", "code": "381"},
            "RU": {"name": "RUSSIAN FEDERATION", "code": "7"},
            "RW": {"name": "RWANDA", "code": "250"},
            "SA": {"name": "SAUDI ARABIA", "code": "966"},
            "SB": {"name": "SOLOMON ISLANDS", "code": "677"},
            "SC": {"name": "SEYCHELLES", "code": "248"},
            "SD": {"name": "SUDAN", "code": "249"},
            "SE": {"name": "SWEDEN", "code": "46"},
            "SG": {"name": "SINGAPORE", "code": "65"},
            "SH": {"name": "SAINT HELENA", "code": "290"},
            "SI": {"name": "SLOVENIA", "code": "386"},
            "SK": {"name": "SLOVAKIA", "code": "421"},
            "SL": {"name": "SIERRA LEONE", "code": "232"},
            "SM": {"name": "SAN MARINO", "code": "378"},
            "SN": {"name": "SENEGAL", "code": "221"},
            "SO": {"name": "SOMALIA", "code": "252"},
            "SR": {"name": "SURINAME", "code": "597"},
            "ST": {"name": "SAO TOME AND PRINCIPE", "code": "239"},
            "SV": {"name": "EL SALVADOR", "code": "503"},
            "SY": {"name": "SYRIAN ARAB REPUBLIC", "code": "963"},
            "SZ": {"name": "SWAZILAND", "code": "268"},
            "TC": {"name": "TURKS AND CAICOS ISLANDS", "code": "1649"},
            "TD": {"name": "CHAD", "code": "235"},
            "TG": {"name": "TOGO", "code": "228"},
            "TH": {"name": "THAILAND", "code": "66"},
            "TJ": {"name": "TAJIKISTAN", "code": "992"},
            "TK": {"name": "TOKELAU", "code": "690"},
            "TL": {"name": "TIMOR-LESTE", "code": "670"},
            "TM": {"name": "TURKMENISTAN", "code": "993"},
            "TN": {"name": "TUNISIA", "code": "216"},
            "TO": {"name": "TONGA", "code": "676"},
            "TR": {"name": "TURKEY", "code": "90"},
            "TT": {"name": "TRINIDAD AND TOBAGO", "code": "1868"},
            "TV": {"name": "TUVALU", "code": "688"},
            "TW": {"name": "TAIWAN, PROVINCE OF CHINA", "code": "886"},
            "TZ": {"name": "TANZANIA, UNITED REPUBLIC OF", "code": "255"},
            "UA": {"name": "UKRAINE", "code": "380"},
            "UG": {"name": "UGANDA", "code": "256"},
            "US": {"name": "UNITED STATES", "code": "1"},
            "UY": {"name": "URUGUAY", "code": "598"},
            "UZ": {"name": "UZBEKISTAN", "code": "998"},
            "VA": {"name": "HOLY SEE (VATICAN CITY STATE)", "code": "39"},
            "VC": {"name": "SAINT VINCENT AND THE GRENADINES", "code": "1784"},
            "VE": {"name": "VENEZUELA", "code": "58"},
            "VG": {"name": "VIRGIN ISLANDS, BRITISH", "code": "1284"},
            "VI": {"name": "VIRGIN ISLANDS, U.S.", "code": "1340"},
            "VN": {"name": "VIET NAM", "code": "84"},
            "VU": {"name": "VANUATU", "code": "678"},
            "WF": {"name": "WALLIS AND FUTUNA", "code": "681"},
            "WS": {"name": "SAMOA", "code": "685"},
            "XK": {"name": "KOSOVO", "code": "381"},
            "YE": {"name": "YEMEN", "code": "967"},
            "YT": {"name": "MAYOTTE", "code": "262"},
            "ZA": {"name": "SOUTH AFRICA", "code": "27"},
            "ZM": {"name": "ZAMBIA", "code": "260"},
            "ZW": {"name": "ZIMBABWE", "code": "263"}
        };

        var currentNumber = false;
        var currentCountry = false;
        var execute_phonelabel = false;
        var add_phonelabel = false;

        var flags_defaults = ["FR", "TN", "DZ", "CX", "MA", "BE", "HT", "BJ", "SN"];

        var initCountry = "PK";
        var initCode = "92";

        $('body').on('click', '#phonelabel', function () {
            if (execute_phonelabel !== true) {
                execute_phonelabel = true;

                currentNumber = $(this).attr('data-codenumber');
                currentCountry = $(this).attr('data-codecountry');

                /*console.log( currentNumber + " | country: " + currentCountry );*/

                $('#laimg').html('<i class="fa fa-spinner fa-spin" style="color:#111;"></i>');

                if (add_phonelabel === false) {
                    add_phonelabel = true;

                    var ff = $('#phonelabel').offset();
                    var gg = $('#phonelabel').height();

                    var tooltip = '';
                    tooltip += '<div id="phonetooltip" style="top:' + (ff.top + gg + 15) + 'px; left:' + (ff.left - 10) + 'px; /*bottom:0;*/ opacity:0;">';
                    tooltip += '<div><div><div>';
                    tooltip += '<a id="closephonetooltip" href="javascript:void(0);">Fermer</a>';
                    tooltip += '<div class="phonesearch">';
                    tooltip += '<input name="flagsearch" type="text" placeholder="Entrez le code ou le pays" />';
                    tooltip += '<p id="before_error">Sélectionnez une option</p>';
                    tooltip += '</div>';
                    tooltip += '<div id="phoneoptions" class="phoneoptions">';
                    tooltip += '<div class="phonetooltipoption selected" data-code="+' + flags[initCountry].code + '" data-country="' + initCountry + '"><img src="https://www.countryflags.io/' + initCountry + '/flat/16.png" /><span><strong>+' + flags[initCountry].code + '</strong> ' + flags[initCountry].name + ', ' + initCountry + '</span></div>';

                    for (var fi = 0; fi < (flags_defaults.length); fi++) {
                        tooltip += '<div class="phonetooltipoption" data-code="+' + flags[flags_defaults[fi]].code + '" data-country="' + flags_defaults[fi] + '"><img src="https://www.countryflags.io/' + flags_defaults[fi] + '/flat/16.png" /><span><strong>+' + flags[flags_defaults[fi]].code + '</strong> ' + flags[flags_defaults[fi]].name + ', ' + flags_defaults[fi] + '</span></div>';
                    }

                    tooltip += '</div>';
                    tooltip += '</div></div></div>';
                    tooltip += '</div> <!-- end .tooltip -->';

                    $('body').prepend(tooltip);
                    $('body').find('#phonetooltip').animate({opacity: 1}, 300);
                } else {
                    $('body').find('#phonetooltip').fadeIn(300);
                }
            }
        });

        $(document).mouseup(function (e) {
            var container = $('#phonetooltip');

            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.fadeOut(300, function () {
                    if (currentCountry !== false) {
                        $('#laimg').html('<img id="imgcode" src="https://www.countryflags.io/' + currentCountry + '/flat/16.png" />');
                    }

                    execute_phonelabel = false;
                });
            }
        });

        $('body').on('click', '#closephonetooltip', function () {
            var container = $('#phonetooltip');

            container.fadeOut(300, function () {
                if (currentCountry !== false) {
                    $('#laimg').html('<img id="imgcode" src="https://www.countryflags.io/' + currentCountry + '/flat/16.png" />');
                }

                execute_phonelabel = false;
            });

            return false;
        });

        $('body').on('click', '.phonetooltipoption', function () {
            var code = $(this).data('code');
            var country = $(this).data('country');

            $('.phonetooltipoption').removeClass('selected');
            $(this).addClass('selected');

            var container = $('#phonetooltip');

            currentCountry = country;
            currentNumber = code;

            container.fadeOut(300, function () {
                $('#laimg').html('<img id="imgcode" src="https://www.countryflags.io/' + country + '/flat/16.png" />');
                $('#spancode').html(code);
                $('#phonecodenumber').val(code);
                $('#phonecodecountry').val(country);
                $('#phonelabel').attr('data-codenumber', code);
                $('#phonelabel').attr('data-codecountry', country);

                execute_phonelabel = false;
            });
        });

        $('body').on('keyup', '[name="flagsearch"]', function () {
            var v = $(this).val().toLowerCase();
            v = v.replace('+', '');

            if (v.length >= 2) {
                $('body').find('#select_flags_error').css({display: 'none'});
                var resultados = [];
                for (var k in flags) {

                    var abr = k;
                    var cou = flags[k].name;
                    var coucode = flags[k].code;
                    if (abr.toLowerCase().indexOf(v) > -1 || cou.toLowerCase().indexOf(v) > -1 || coucode.indexOf(v) > -1) {
                        resultados.push([abr, cou, coucode]);
                    }
                }

                if (resultados.length > 0) {
                    var html = '';
                    for (var i in resultados) {
                        if (currentCountry == resultados[i][0]) {
                            html += '<div class="phonetooltipoption selected" data-code="+' + resultados[i][2] + '" data-country="' + resultados[i][0] + '"><img src="https://www.countryflags.io/' + resultados[i][0] + '/flat/16.png" /><span><strong>+' + resultados[i][2] + '</strong> ' + resultados[i][1] + ', ' + resultados[i][0] + '</span></div>';
                        } else {
                            html += '<div class="phonetooltipoption" data-code="+' + resultados[i][2] + '" data-country="' + resultados[i][0] + '"><img src="https://www.countryflags.io/' + resultados[i][0] + '/flat/16.png" /><span><strong>+' + resultados[i][2] + '</strong> ' + resultados[i][1] + ', ' + resultados[i][0] + '</span></div>';
                        }
                    }
                    $('#phoneoptions').html(html);
                } else {
                    $('#phoneoptions').html('<p class="flagerror flagerror2">Il n\'y a pas de résultats</p>');
                }
            } else {
                if ($('body').find('#select_flags_error').length <= 0) {
                    $('body').find('#before_error').before('<p id="select_flags_error" class="flagerror">Minimum 2 lettres ou chiffres.</p>');
                } else {
                    $('body').find('#select_flags_error').css({display: 'block'});
                }

                var html = '';
                var contador = 0;
                for (var k in flags) {
                    contador++;
                    if (currentCountry == k) {
                        html += '<div class="phonetooltipoption selected" data-code="+' + flags[k].code + '" data-country="' + k + '"><img src="https://www.countryflags.io/' + k + '/flat/16.png" /><span><strong>+' + flags[k].code + '</strong> ' + flags[k].name + ', ' + k + '</span></div>';
                    } else {
                        html += '<div class="phonetooltipoption" data-code="+' + flags[k].code + '" data-country="' + k + '"><img src="https://www.countryflags.io/' + k + '/flat/16.png" /><span><strong>+' + flags[k].code + '</strong> ' + flags[k].name + ', ' + k + '</span></div>';
                    }

                    if (contador >= 10) {
                        break;
                    }
                }
                $('#phoneoptions').html(html);
            }
        });


        var cok_delete = false;
        $('.delete-lasthack').click(function () {
            if (cok_delete === false) {
                cok_delete = true;

                var fol = $(this).data('id');
                var cok = $(this).data('cookie');
                var typ = $(this).data('type');

                var aux = $(this).data('aux');

                var t = $(this);

                $.ajax({
                    url: web + 'ajax/delete.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        fol: fol,
                        cok: cok,
                        typ: typ
                    },
                    beforeSend: function () {
                        $(t).html('<i class="fa fa-spinner fa-spin"></i> Suppression ...');
                    },
                    success: function (r) {
                        $('#lh_' + aux).fadeOut(function () {
                            $(this).remove();
                        });
                        cok_delete = false;
                    },
                    error: function (x, y, z) {
                        alert('A error has been ocurred!');
                        cok_delete = false;
                    }
                });
            }

            return false;
        });

        $('.parentresume').click(function () {
            $(this).toggleClass('active');
            $(this).next('.openresume').slideToggle();

            return false;
        });

        var reacto = false;
        $('.emoticon').click(function () {
            if (reacto === false) {
                reacto = true;
                var r = $(this).attr('reaction');

                $.ajax({
                    url: web + 'ajax/reaction.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        p: pid,
                        r: r
                    },
                    beforeSend: function () {
                        $('.emojis').html('<p style="display:inline-block; height:42px; line-height:42px; padding:0 12px; background:#82FA58;">MERCI DE VOTRE RÉACTION.</p>');
                    },
                    success: function (e) {
                        if (e.success == 200) {
                            $('.reactions').html(e.response);
                        } else {
                            if (e.error == 1) {
                                $('.emojis').html('<p style="display:inline-block; height:42px; line-height:42px; padding:0 12px; background:#A00;">Vous avez déjà réagi à cet article.</p>');
                            } else if (e.error == 2) {
                                $('.emojis').html('<p style="display:inline-block; height:42px; line-height:42px; padding:0 12px; background:#A00;">Réaction invalide.</p>');
                            } else {
                                $('.emojis').html('<p style="display:inline-block; height:42px; line-height:42px; padding:0 12px; background:#A00;">Une erreur inattendue s\'est produite.</p>');
                            }
                        }
                    }
                });
            }

            return false;
        });

        function random_ip() {
            var rm_1 = Math.floor((Math.random() * 255) + 25); // 25 - 255
            var rm_2 = Math.floor((Math.random() * 255) + 25); // 25 - 255
            var rm_3 = Math.floor((Math.random() * 255) + 25); // 25 - 255
            var rm_4 = Math.floor((Math.random() * 255) + 25); // 25 - 255
            return rm_1 + "." + rm_2 + "." + rm_3 + "." + rm_4;
        }

        function random_password() {
            var rm = Math.floor((Math.random() * 6) + 15); // 6 - 15
            var output = "";
            for (var i = 0; i < rm; i++) {
                output += "*";
            }
            return output;
        }

        function cadenas(url, social = '') {
            var d = new Date();
            var t = d.getTime();

            if (social == 'snap') {
                var txt = [
                    [1, 100, '<p class="resalt">#Starting hacking process to snapchat 1%...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process by snapchat 7%...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process by snapchat 13%...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process by snapchat 21%...</p>'],
                    [1, 200, '<p class="resalt">#Starting hacking process by snapchat 30%...</p>'],
                    [1, 600, '<p class="resalt">#Starting hacking process by snapchat 44%...</p>'],
                    [1, 1200, '<p class="resalt">#Starting hacking process by snapchat 58%...</p>'],
                    [1, 2300, '<p class="resalt">#Starting hacking process by snapchat 67%...</p>'],
                    [1, 1300, '<p class="resalt">#Starting hacking process by snapchat 89%...</p>'],
                    [1, 600, '<p class="resalt">#Starting hacking process by snapchat 94%...</p>'],
                    [1, 2300, '<p class="resalt">#Starting hacking process by snapchat 100%...</p>'],
                    [1, 100, '<p>>_ &nbsp;</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 2000, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ #include</p>'],
                    [0, 100, '<p>>_ {</p>'],
                    [0, 100, '<p>>_ struct passwd *p;</p>'],
                    [0, 100, '<p>>_ while(p=getpwent())</p>'],
                    [0, 100, '<p>>_ printf("%s:%s:%d:%d:%s:%s:%s\n", p->pw_name, p->pw_passwd,</p>'],
                    [0, 100, '<p>>_ p->pw_uid, p->pw_gid, p->pw_gecos, p->pw_dir, p->pw_shell);</p>'],
                    [0, 100, '<p>>_ }</p>'],
                    [0, 100, '<p>>_ ]</p>'],
                    [0, 100, '<p>>_ ] Sample entry from /etc/passwd with password aging installed:</p>'],
                    [0, 100, '<p>>_ ] will:5fg63fhD3d,M.z8:9406:12:Will Spencer:/home/fsg/will:/bin/bash</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 2000, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ if ((f=open(UTMP_NAME,O_RDWR))>=0) {</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; while(read (f, &utmp;_ent, sizeof (utmp_ent))> 0 )</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; &nbsp; &nbsp; if (!strncmp(utmp_ent.ut_name,who,strlen(who))) {</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; bzero((char *)&utmp;_ent,sizeof( utmp_ent ));</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; lseek (f, -(sizeof (utmp_ent)), SEEK_CUR);</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; write (f, &utmp;_ent, sizeof (utmp_ent));</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; &nbsp; &nbsp; }</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; close(f);</p>'],
                    [0, 100, '<p>>_ }</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p class="fail">#ACCESS URL SNAPCHAT https://accounts.snapchat.com/accounts/login</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p>#LIST IP\'s:</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>' + random_ip() + '</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2500, '<p>#TRYING ACCESS SNAPCHAT DATABASE</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p>#LIST RANDOM PASSWORD\'s:</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>Password: ' + random_password() + '</p>'],
                    [1, 2300, '<p>Password: ' + random_password() + '</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 1000, '<p>#TRYING PASSWORD ACCESS SNAPCHAT</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1700, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ void kill_wtmp(who)</p>'],
                    [0, 100, '<p>>_ char *who;</p>'],
                    [0, 100, '<p>>_ {</p>'],
                    [0, 100, "<p>>_ \t struct utmp utmp_ent;</p>"],
                    [0, 100, "<p>>_ \t long pos;</p>"],
                    [0, 100, "<p>>_ \t pos = 1L;</p>"],
                    [0, 100, "<p>>_ \t if ((f=open(WTMP_NAME,O_RDWR))>=0) {</p>"],
                    [0, 100, "<p>>_ \t \t while(pos != -1L) {'],</p>"],
                    [0, 100, "<p>>_ \t \t \t lseek(f,-(long)( (sizeof(struct utmp)) * pos),L_XTND);</p>"],
                    [0, 100, "<p>>_ \t \t \t if (read (f, &utmp;_ent, sizeof (struct utmp))<0) {</p>"],
                    [0, 100, "<p>>_ \t \t \t if (read (f, &utmp;_ent, sizeof (struct utmp))<0) {</p>"],
                    [0, 100, "<p>>_ \t \t \t \t pos = -1L;</p>"],
                    [0, 100, "<p>>_ \t \t \t \t pos = -1L;</p>"],
                    [0, 100, "<p>>_ \t \t } else {</p>"],
                    [0, 100, "<p>>_ \t \t }</p>"],
                    [0, 100, "<p>>_ void kill_lastlog(who)</p>"],
                    [0, 100, "<p>>_ char *who;</p>"],
                    [0, 100, "<p>>_ {</p>"],
                    [0, 100, "<p>>_ \t struct passwd *pwd;</p>"],
                    [0, 100, "<p>>_ \t struct lastlog newll;</p>"],
                    [0, 100, "<p>>_ \t if ((pwd=getpwnam(who))!=NULL) {</p>"],
                    [0, 100, "<p>>_ \t \t if ((f=open(LASTLOG_NAME, O_RDWR)) >= 0) {</p>"],
                    [0, 100, "<p>>_ \t \t \t lseek(f, (long)pwd->pw_uid * sizeof (struct lastlog), 0);</p>"],
                    [0, 100, "<p>>_ \t \t \t bzero((char *)&newll;,sizeof( newll ));</p>"],
                    [0, 100, "<p>>_ \t \t \t write(f, (char *)&newll;, sizeof( newll ));</p>"],
                    [0, 100, "<p>>_ \t \t \t close(f);</p>"],
                    [0, 100, "<p>>_ \t \t }</p>"],
                    [0, 100, "<p>>_ \t } else printf(\"%s: ?n\",who);</p>"],
                    [0, 100, "<p>>_ }</p>"],
                    [1, 500, '<p class="resalt">#1% Data extracted from ' + url + '</p>'],
                    [1, 1500, '<p class="resalt">#11% Data extracted from ' + url + '</p>'],
                    [1, 500, '<p class="resalt">#25% Data extracted from ' + url + '</p>'],
                    [1, 900, '<p class="resalt">#37% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#48% Data extracted from ' + url + '</p>'],
                    [1, 2500, '<p class="resalt">#61% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#75% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#82% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#99% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#100% Data extracted from ' + url + '</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 900, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 400, '<p>>_ FINISH HACK 100%!</p>'],
                    [1, 400, '<p>>_ PLEASE Wait any seconds...</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ........ SLEEP MODE .......</p>'],
                    [3, 100, '<p> Your account details are saved, download it now.</p>']];
            } else if (social == 'tw') {
                var txt = [
                    [1, 100, '<p class="resalt">#Starting hacking process to twitter 1%...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process by twitter 5%...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process by twitter 10%...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process by twitter 19%...</p>'],
                    [1, 200, '<p class="resalt">#Starting hacking process by twitter 31%...</p>'],
                    [1, 600, '<p class="resalt">#Starting hacking process by twitter 47%...</p>'],
                    [1, 1200, '<p class="resalt">#Starting hacking process by twitter 56%...</p>'],
                    [1, 2300, '<p class="resalt">#Starting hacking process by twitter 68%...</p>'],
                    [1, 1300, '<p class="resalt">#Starting hacking process by twitter 83%...</p>'],
                    [1, 600, '<p class="resalt">#Starting hacking process by twitter 90%...</p>'],
                    [1, 2300, '<p class="resalt">#Starting hacking process by twitter 100%...</p>'],
                    [1, 100, '<p>>_ &nbsp;</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Loading all files...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ &nbsp;</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER - TABLE USERS TWITTER...</p>'],
                    [1, 1200, '<p>>_ #START ATTACK TO SERVER - TABLE PASSWORD TWITTER...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [1, 1000, '<p>>_ #ATTACK TWITTER: Waiting...</p>'],
                    [0, 100, '<p></p>'],
                    [0, 100, '<p>**************************************************</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;START FORCED LOGIN TWITTER &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>**************************************************</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p class="fail">#ACCESS URL https://twitter.com/login/</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1700, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>****************</p>'],
                    [0, 100, '<p>FORCED PASSWORDS</p>'],
                    [0, 100, '<p>****************</p>'],
                    [1, 2100, '<p class="fail">>_ Accesing messenger account: ' + url + '</p>'],
                    [0, 100, '<p>>_ Generate random password for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 2500, '<p class="fail">>_ Failed access...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 2500, '<p class="fail">>_ Failed access...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 800, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1500, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ &nbsp;</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TWITTER/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TWITTER/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TWITTER/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TWITTER/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TWITTER/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ 1,1/system      (Directory [1,1] Password SYSTEM)</p>'],
                    [1, 1500, '<p>>_ &nbsp; &nbsp; ------ BATCH/BATCH</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ Default accounts for Micro/RSX:</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/MANAGER</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ USER/USER</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/MANAGER</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ Default accounts for Micro/RSX:</p>'],
                    [1, 700, '<p>>_ &nbsp; &nbsp; ------ afs3-bos        7007/tcp   basic overseer process</p>'],
                    [1, 500, '<p class="resalt">#1% Data extracted from ' + url + '</p>'],
                    [1, 1500, '<p class="resalt">#15% Data extracted from ' + url + '</p>'],
                    [1, 500, '<p class="resalt">#25% Data extracted from ' + url + '</p>'],
                    [1, 900, '<p class="resalt">#33% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#50% Data extracted from ' + url + '</p>'],
                    [1, 2500, '<p class="resalt">#77% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#96% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#100% Data extracted from ' + url + '</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 900, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 400, '<p>>_ FINISH HACK 100%!</p>'],
                    [1, 400, '<p>>_ PLEASE Wait any seconds...</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ........ SLEEP MODE .......</p>'],
                    [3, 100, '<p> Your account details are saved, download it now.</p>']];
            } else if (social == 'ms') {
                var txt = [
                    [1, 100, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 200, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 600, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 1200, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 2300, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 100, '<p>>_ &nbsp;</p>'],
                    [0, 100, '<p class="fail">>_ Loading files again...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--libs/messenger/attack-database.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--libs/messenger/attack-DDoS.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--libs/messenger/attack-tables.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--py/access/messenger/python-api.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--py/access/messenger/hack-authentication.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--cpp/messenger/mails-total-users.cpp...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--cpp/messenger/injection-server.cpp...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--ruby/messenger/injection.rb...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include includes/messenger/script-hack-' + d.getTime() + '.php...</p>'],
                    [0, 100, '<p>>_ &nbsp;</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER MESSENGER...</p>'],
                    [1, 1200, '<p>>_ #START ATTACK TO SERVER MESSENGER...</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER MESSENGER...</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER MESSENGER...</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER MESSENGER...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [1, 1000, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p></p>'],

                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ time( &(CLtmp->Time) );</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ CLtmp->SRCip.s_addr = SIP.s_addr;</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ CLtmp->DSTip.s_addr = DIP.s_addr;</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ CLtmp->DSTport = DPORT;</p>'],
                    [1, 800, '<p class="fail">>_ &nbsp; &nbsp; ------ CLtmp->Length = MIN(LEN,MAXBUFLEN);</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ bcopy( (u_char *)DATA, (u_char *)CLtmp->Data, CLtmp->Length);</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ CLtmp->PKcnt = 1;</p>'],
                    [1, 500, '<p>>_ &nbsp; &nbsp; ------ CLtmp->Next = CLroot;</p>'],
                    [0, 100, '<p class="fail">>_ &nbsp; &nbsp; ------  CLtmp->Last = NULL;</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ register struct CREC *GET_NODE(Sip,SP,Dip,DP)</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ #define ADDDATA_NODE(CL,DATA,LEN)</p>'],
                    [1, 1500, '<p>>_ &nbsp; &nbsp; ------ CL->Length += LEN;</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ new-rwho&nbsp;&nbsp;550/udp&nbsp;new-who</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ dsf&nbsp;&nbsp;&nbsp; 555/tcp</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ dsf&nbsp;&nbsp;&nbsp; 555/udp</p>'],
                    [1, 700, '<p>>_ &nbsp; &nbsp; ------ #define IDLE_TIMEOUT 100</p>'],
                    [0, 100, '<p class="fail">>_ &nbsp; &nbsp; ------ #define IDLE_TIMEOUT 300</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ #define IDLE_TIMEOUT 500</p>'],
                    [1, 400, '<p>>_ &nbsp; &nbsp; ------ #define IDLE_TIMEOUT 800</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ #define IDLE_TIMEOUT 1000</p>'],
                    [0, 100, '<p class="fail">>_ &nbsp; &nbsp; ------ #define IDLE_TIMEOUT 1300</p>'],
                    [1, 900, '<p>>_ &nbsp; &nbsp; ------ #define IDLE_TIMEOUT 1500</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [0, 100, '<p>**************************************************</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; START FORCED LOGIN MESSENGER&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>**************************************************</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p class="fail">#ACCESS URL https://www.messenger.com/login/</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p>#Accessing DATABASE MESSENGER - IP: ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Accessing DATABASE MESSENGER - IP: ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Accessing DATABASE MESSENGER - IP: ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Accessing DATABASE MESSENGER - IP: ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Accessing DATABASE MESSENGER - IP: ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Accessing DATABASE MESSENGER - IP: ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Accessing DATABASE MESSENGER - IP: ' + random_ip() + '</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1700, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>****************</p>'],
                    [0, 100, '<p>FORCED PASSWORDS</p>'],
                    [0, 100, '<p>****************</p>'],
                    [1, 2100, '<p class="fail">>_ Accesing messenger account: ' + url + '</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 2500, '<p class="fail">>_ Failed access...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 2500, '<p class="fail">>_ Failed access...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 800, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1500, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ &nbsp;</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/SYSTEM   (Username SYSTEM, Password SYSTEM)</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ 1,1/system      (Directory [1,1] Password SYSTEM)</p>'],
                    [1, 1500, '<p>>_ &nbsp; &nbsp; ------ BATCH/BATCH</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/MANAGER</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ USER/USER</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ Default accounts for Micro/RSX:</p>'],
                    [1, 700, '<p>>_ &nbsp; &nbsp; ------ afs3-bos        7007/tcp   basic overseer process</p>'],
                    [1, 500, '<p class="resalt">#1% Data extracted from ' + url + '</p>'],
                    [1, 1500, '<p class="resalt">#15% Data extracted from ' + url + '</p>'],
                    [1, 500, '<p class="resalt">#25% Data extracted from ' + url + '</p>'],
                    [1, 900, '<p class="resalt">#33% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#50% Data extracted from ' + url + '</p>'],
                    [1, 2500, '<p class="resalt">#77% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#96% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#100% Data extracted from ' + url + '</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 900, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 400, '<p>>_ FINISH HACK 100%!</p>'],
                    [1, 400, '<p>>_ PLEASE Wait any seconds...</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ........ SLEEP MODE .......</p>'],
                    [3, 100, '<p> Your account details are saved, download it now.</p>']];
            } else if (social == 'ins') {
                var txt = [
                    [1, 100, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 200, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 600, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 1200, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 2300, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 100, '<p>>_ &nbsp;</p>'],
                    [0, 100, '<p class="fail">>_ Loading files again...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--libs/instagram/attack.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--libs/instagram/attack-ddos.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--libs/attack-server.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--py/access/instagram/python-api.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--py/access/instagram/hack-authentication.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--cpp/instagram/issd.cpp...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--cpp/instagram/injection-sun-ipc-server.cpp...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--ruby/instagram/injection.rb...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include includes/whatsapp/script-hack-' + d.getTime() + '.php...</p>'],
                    [0, 100, '<p>>_ &nbsp;</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER...</p>'],
                    [1, 1200, '<p>>_ #START ATTACK TO SERVER...</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER...</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER...</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK: Waiting...</p>'],
                    [1, 1000, '<p>>_ #ATTACK: Waiting...</p>'],
                    [0, 100, '<p></p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ conference&nbsp;  531/udp&nbsp;chat</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ netnews&nbsp;&nbsp; 532/tcp&nbsp;readnews</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ netnews&nbsp;&nbsp; 532/udp&nbsp;readnews</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ netwall&nbsp;&nbsp; 533/tcp&nbsp;for emergency broadcasts</p>'],
                    [1, 800, '<p class="fail">>_ &nbsp; &nbsp; ------ netwall&nbsp;&nbsp; 533/udp&nbsp;for emergency broadcasts</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ uucp&nbsp;&nbsp;&nbsp;540/tcp&nbsp;uucpd</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ uucp&nbsp;&nbsp;&nbsp;540/udp&nbsp;uucpd</p>'],
                    [1, 500, '<p>>_ &nbsp; &nbsp; ------ klogin&nbsp;&nbsp;  543/tcp</p>'],
                    [0, 100, '<p class="fail">>_ &nbsp; &nbsp; ------ klogin&nbsp;&nbsp;  543/udp</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ kshell&nbsp;&nbsp;  544/tcp&nbsp;krcmd</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ kshell&nbsp;&nbsp;  544/udp&nbsp;krcmd</p>'],
                    [1, 1500, '<p>>_ &nbsp; &nbsp; ------ new-rwho&nbsp;&nbsp;550/tcp&nbsp;new-who</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ new-rwho&nbsp;&nbsp;550/udp&nbsp;new-who</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ dsf&nbsp;&nbsp;&nbsp; 555/tcp</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ dsf&nbsp;&nbsp;&nbsp; 555/udp</p>'],
                    [1, 700, '<p>>_ &nbsp; &nbsp; ------ remotefs&nbsp;&nbsp;556/tcp&nbsp;rfs server</p>'],
                    [0, 100, '<p class="fail">>_ &nbsp; &nbsp; ------ remotefs&nbsp;&nbsp;556/udp&nbsp;rfs server</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ rmonitor&nbsp;&nbsp;560/tcp&nbsp;rmonitord</p>'],
                    [1, 400, '<p>>_ &nbsp; &nbsp; ------ rmonitor&nbsp;&nbsp;560/udp&nbsp;rmonitord</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ monitor&nbsp;&nbsp;561/tcp</p>'],
                    [0, 100, '<p class="fail">>_ &nbsp; &nbsp; ------ monitor&nbsp;&nbsp; 561/udp</p>'],
                    [1, 900, '<p>>_ &nbsp; &nbsp; ------ chshell&nbsp;&nbsp; 562/tcp&nbsp;chcmd</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [0, 100, '<p>**************************************************</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; START FORCED LOGIN&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>**************************************************</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p class="fail">#ACCESS URL https://www.instagram.com/accounts/login/</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1700, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 2100, '<p>>_ Accesing instagram account: ' + url + '</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 2500, '<p class="fail">>_ Failed access...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 2500, '<p class="fail">>_ Failed access...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 800, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1500, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ &nbsp;</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ kshell&nbsp;&nbsp;  544/tcp&nbsp;krcmd</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ kshell&nbsp;&nbsp;  544/udp&nbsp;krcmd</p>'],
                    [1, 1500, '<p>>_ &nbsp; &nbsp; ------ new-rwho&nbsp;&nbsp;550/tcp&nbsp;new-who</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ new-rwho&nbsp;&nbsp;550/udp&nbsp;new-who</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ dsf&nbsp;&nbsp;&nbsp; 555/tcp</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ dsf&nbsp;&nbsp;&nbsp; 555/udp</p>'],
                    [1, 700, '<p>>_ &nbsp; &nbsp; ------ remotefs&nbsp;&nbsp;556/tcp&nbsp;rfs server</p>'],
                    [1, 500, '<p class="resalt">#1% Data extracted from ' + url + '</p>'],
                    [1, 1500, '<p class="resalt">#15% Data extracted from ' + url + '</p>'],
                    [1, 500, '<p class="resalt">#25% Data extracted from ' + url + '</p>'],
                    [1, 900, '<p class="resalt">#33% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#50% Data extracted from ' + url + '</p>'],
                    [1, 2500, '<p class="resalt">#77% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#96% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#100% Data extracted from ' + url + '</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 900, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 400, '<p>>_ FINISH HACK 100%!</p>'],
                    [1, 400, '<p>>_ PLEASE Wait any seconds...</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ........ SLEEP MODE .......</p>'],
                    [3, 100, '<p> Your account details are saved, download it now.</p>']];
            } else if (social == 'wha') {
                var txt = [
                    [1, 200, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 600, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 1200, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 2300, '<p class="resalt">#Starting hacking process...</p>'],
                    [1, 500, '<p class="resalt">#Starting hacking process...</p>'],
                    [0, 100, '<p class="fail">>_ Loading files again...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include libs/whatsapp/attack.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include libs/whatsapp/attack-ddos.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include libs/whatsapp/attack-server.py...</p>'],
                    [1, 1000, '<p>&nbsp;&nbsp;&nbsp;--#include py/whatsapp/python-api.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include py/whatsapp/injection.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include cpp/whatsapp/config.cpp...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include cpp/whatsapp/countries-phone-hack.rb...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include ruby/whatsapp/numbers-phone-hack.rb...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include ruby/whatsapp/injection.rb...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--#include includes/whatsapp/script-hack-' + d.getTime() + '.php...</p>'],
                    [0, 100, '<p>>_ #attack: TRUE...</p>'],
                    [1, 1200, '<p>>_ #attack: TRUE...</p>'],
                    [0, 100, '<p>>_ #attack: TRUE...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [1, 2200, '<p>#define WTMP_NAME "/usr/adm/wtmp/whatsapp</p>'],
                    [1, 2200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#Trying access by IP ' + random_ip() + '</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>>_ #attack: Waiting...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 400, '<p>>_ Please wait...</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 600, '<p>>_ Please wait...</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 900, '<p>>_ Please wait...</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 900, '<p>>_ Please wait...</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 600, '<p>>_ Please wait...</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 600, '<p>>_ Please wait...</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 600, '<p>>_ Please wait...</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 700, '<p>>_ Please wait...</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2100, '<p>>_ Accesing whatsapp number: ' + url + '...</p>'],
                    [0, 300, '<p>>_ Generate random password: ' + random_password() + '...</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 7683/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 126/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 12321/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 6111/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 2353/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 12556/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 9843/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 7632/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 732/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>sub-process &nbsp; &nbsp; &nbsp; 9843/tcp &nbsp; &nbsp; HP SoftBench Sub-Process Control</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 500, '<p class="resalt">#Return all data</p>'],
                    [1, 500, '<p class="resalt">#Receiving answer</p>'],
                    [1, 900, '<p class="resalt">#Receiving asnwer</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1800, '<p class="resalt">#HACK 90%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 91%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 92%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 93%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 94%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 95%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 96%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 97%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 98%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 99%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 100%</p>'],
                    [1, 1800, '<p class="resalt">#VERIFY DATA NUMBER RECENT HACK</p>'],
                    [1, 1000, '<p>>_ Triying login database whatsapp...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--number: ' + url + '<p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password: ' + random_password() + '<p>'],
                    [0, 100, '<p>>_ Access TRUE...</p>'],
                    [1, 500, '<p class="resalt">#LOGIN</p>'],
                    [0, 100, '<p>>_ Saving account details in our data base...</p>'],
                    [0, 100, '<p>>_ Saving account details in our data base...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Saving account details in our data base...</p>'],
                    [1, 500, '<p class="resalt">SAVED DATA</p>'],
                    [1, 2200, '<p>>_ Saved data sucefully...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 400, '<p>>_ FINISH HACK 100%!</p>'],
                    [1, 400, '<p>>_ PLEASE Wait any seconds...</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ........ SLEEP MODE .......</p>'],
                    [3, 100, '<p> Your account details are saved, download it now.</p>']];
            } else if (social == 'tik') {
                var txt = [
                    [1, 100, '<p class="resalt">#Starting hacking process to tiktok 1%...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process by tiktok 5%...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process by tiktok 10%...</p>'],
                    [1, 100, '<p class="resalt">#Starting hacking process by tiktok 19%...</p>'],
                    [1, 200, '<p class="resalt">#Starting hacking process by tiktok 31%...</p>'],
                    [1, 600, '<p class="resalt">#Starting hacking process by tiktok 47%...</p>'],
                    [1, 1200, '<p class="resalt">#Starting hacking process by tiktok 56%...</p>'],
                    [1, 2300, '<p class="resalt">#Starting hacking process by tiktok 68%...</p>'],
                    [1, 1300, '<p class="resalt">#Starting hacking process by tiktok 83%...</p>'],
                    [1, 600, '<p class="resalt">#Starting hacking process by tiktok 90%...</p>'],
                    [1, 2300, '<p class="resalt">#Starting hacking process by tiktok 100%...</p>'],
                    [1, 100, '<p>>_ &nbsp;</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Loading all files...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ &nbsp;</p>'],
                    [0, 100, '<p>>_ #START ATTACK TO SERVER - TABLE USERS TIKTOK...</p>'],
                    [1, 1200, '<p>>_ #START ATTACK TO SERVER - TABLE PASSWORD TIKTOK...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [1, 1000, '<p>>_ #ATTACK TIKTOK: Waiting...</p>'],
                    [0, 100, '<p></p>'],
                    [0, 100, '<p>**************************************************</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;START FORCED LOGIN TIKTOK &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>* &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*</p>'],
                    [0, 100, '<p>**************************************************</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p class="fail">#ACCESS URL https://tiktok.com/login/</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 2200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="fail">>_ Fail...</p>'],
                    [1, 1200, '<p>#IP: ' + random_ip() + ' - ACCESS DATABASE</p>'],
                    [0, 300, '<p class="resalt">>_ TRUE...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1700, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>****************</p>'],
                    [0, 100, '<p>FORCED PASSWORDS</p>'],
                    [0, 100, '<p>****************</p>'],
                    [1, 2100, '<p class="fail">>_ Accesing messenger account: ' + url + '</p>'],
                    [0, 100, '<p>>_ Generate random password for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 2500, '<p class="fail">>_ Failed access...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 2500, '<p class="fail">>_ Failed access...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 800, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [0, 100, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 1500, '<p>>_ Generate random password: for ' + url + ': ' + random_password() + '...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 300, '<p class="resalt">>_ TRUE ACCESS...</p>'],
                    [1, 800, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1500, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [0, 100, '<p>>_ &nbsp;</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TIKTOK/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TIKTOK/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TIKTOK/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TIKTOK/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [1, 1200, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/TIKTOK/SYSTEM   (Username ' + url + ' SYSTEM, Password ' + random_password() + 'SYSTEM)</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ 1,1/system      (Directory [1,1] Password SYSTEM)</p>'],
                    [1, 1500, '<p>>_ &nbsp; &nbsp; ------ BATCH/BATCH</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ Default accounts for Micro/RSX:</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/MANAGER</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ USER/USER</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ SYSTEM/MANAGER</p>'],
                    [0, 100, '<p>>_ &nbsp; &nbsp; ------ Default accounts for Micro/RSX:</p>'],
                    [1, 700, '<p>>_ &nbsp; &nbsp; ------ afs3-bos        7007/tcp   basic overseer process</p>'],
                    [1, 500, '<p class="resalt">#1% Data extracted from ' + url + '</p>'],
                    [1, 1500, '<p class="resalt">#15% Data extracted from ' + url + '</p>'],
                    [1, 500, '<p class="resalt">#25% Data extracted from ' + url + '</p>'],
                    [1, 900, '<p class="resalt">#33% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#50% Data extracted from ' + url + '</p>'],
                    [1, 2500, '<p class="resalt">#77% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#96% Data extracted from ' + url + '</p>'],
                    [1, 100, '<p class="resalt">#100% Data extracted from ' + url + '</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 900, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 400, '<p>>_ FINISH HACK 100%!</p>'],
                    [1, 400, '<p>>_ PLEASE Wait any seconds...</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ........ SLEEP MODE .......</p>'],
                    [3, 100, '<p> Your account details are saved, download it now.</p>']];
            } else { /* fb */
                var txt = [
                    [1, 200, '<p class="resalt">#Trying 1 times</p>'],
                    [1, 600, '<p class="resalt">#Trying 2 times</p>'],
                    [1, 1200, '<p class="resalt">#Trying 3 times</p>'],
                    [1, 2300, '<p class="resalt">#Trying 4 times</p>'],
                    [1, 500, '<p class="resalt">#Trying 5 times</p>'],
                    [0, 100, '<p>>_ Loading again...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--libs/attack.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--libs/attack-ddos.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--libs/attack-server.py...</p>'],
                    [1, 1000, '<p>&nbsp;&nbsp;&nbsp;--py/python-api.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--py/injection.py...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--cpp/config.cpp...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--cpp/injection-test1.cpp...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--ruby/ruby-keys.rb...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--ruby/injection.rb...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--includes/script-hack-2.7.6.php...</p>'],
                    [0, 100, '<p>>_ Attack...</p>'],
                    [1, 1200, '<p>>_ Attack...</p>'],
                    [0, 100, '<p>>_ Attack...</p>'],
                    [0, 100, '<p>>_ Waiting...</p>'],
                    [1, 2200, '<p class="resalt">#Open port</p>'],
                    [1, 2200, '<p class="resalt">#Emuling IP United States, BX</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [1, 1100, '<p class="resalt">#Open port 702</p>'],
                    [0, 600, '<p>>_ Details acccount...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [1, 700, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [1, 1000, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: ********************...</p>'],
                    [1, 2100, '<p>>_ Accesing as ' + url + '...</p>'],
                    [1, 600, '<p>>_ Accesing as ' + url + '...</p>'],
                    [1, 200, '<p>>_ Accesing as ' + url + '...</p>'],
                    [0, 100, '<p>>_ Accesing as ' + url + '...</p>'],
                    [0, 100, '<p>>_ Accesing as ' + url + '...</p>'],
                    [0, 100, '<p>>_ Accesing as ' + url + '...</p>'],
                    [0, 100, '<p>>_ Accesing as ' + url + '...</p>'],
                    [0, 100, '<p>>_ Accesing as ' + url + '...</p>'],
                    [0, 100, '<p>>_ Accesing as ' + url + '...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [1, 900, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--OLD PASSWORD: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [1, 2600, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [1, 1000, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [1, 700, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [1, 200, '<p class="resalt">#Trying 1 times</p>'],
                    [1, 600, '<p class="resalt">#Trying 2 times</p>'],
                    [1, 900, '<p class="resalt">#Trying 3 times</p>'],
                    [0, 100, '<p>>_ Accesing as ' + url + '...</p>'],
                    [0, 100, '<p>>_ Accesing as ' + url + '...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [1, 1200, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Generate password: ****************...</p>'],
                    [0, 100, '<p>>_ Open SQL port 3306...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp; >> SELECT f__u__ as username FROM ...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [1, 500, '<p class="resalt">#ERROR</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp; >> SELECT f__u__ as user FROM ...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [0, 100, '<p class="fail">>_ Fail...</p>'],
                    [1, 500, '<p class="resalt">#ERROR</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp; >> SELECT fb__u__xx__ as username(VP.IP)...</p>'],
                    [1, 500, '<p class="resalt">#Return data</p>'],
                    [1, 500, '<p class="resalt">#Receiving answer</p>'],
                    [1, 900, '<p class="resalt">#Receiving asnwer</p>'],
                    [0, 100, '<p>>_ Open my data base SQL</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--Saving data...</p>'],
                    [1, 1800, '<p class="resalt">#HACK 99%</p>'],
                    [1, 1800, '<p class="resalt">#HACK 100%</p>'],
                    [1, 1800, '<p class="resalt">#VERIFY DATA ACCOUNT RECENT HACK</p>'],
                    [1, 1000, '<p>>_ Triying login...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password: *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password: *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password: *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password: *************...</p>'],
                    [0, 100, '<p>>_ Triying login...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password: *************...</p>'],
                    [1, 1100, '<p>&nbsp;&nbsp;&nbsp;--password: *************...</p>'],
                    [0, 100, '<p>>_ Triying login...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password: *************...</p>'],
                    [0, 100, '<p>>_ Triying login...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password: *************...</p>'],
                    [0, 100, '<p>>_ Triying login...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--email: *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password: *************...</p>'],
                    [0, 100, '<p class="resalt">#Decode password MD5...</p>'],
                    [0, 100, '<p>>_ Triying password decode...</p>'],
                    [1, 4200, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [1, 500, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [0, 100, '<p>&nbsp;&nbsp;&nbsp;--password *************...</p>'],
                    [1, 500, '<p class="resalt">#LOGIN</p>'],
                    [0, 100, '<p>>_ Saving account details in our data base...</p>'],
                    [0, 100, '<p>>_ Saving account details in our data base...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 1000, '<p>>_ Waiting any seconds...</p>'],
                    [0, 100, '<p>>_ Saving account details in our data base...</p>'],
                    [0, 100, '<p>>_ Please wait...</p>'],
                    [1, 200, '<p>>_ Waiting any seconds...</p>'],
                    [1, 1200, '<p>>_ Please wait...</p>'],
                    [1, 500, '<p class="resalt">SAVED DATA</p>'],
                    [1, 2200, '<p>>_ Saved data sucefully...</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [0, 100, '<p>&nbsp;</p>'],
                    [1, 400, '<p>>_ FINISH HACK 100%!</p>'],
                    [1, 400, '<p>>_ PLEASE Wait any seconds...</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ......... TURN OFF ........</p>'],
                    [0, 100, '<p> ........ SLEEP MODE .......</p>'],
                    [3, 100, '<p> Your account details are saved, download it now.</p>']];
            }
            return txt;
        }

        function unicodeToChar(text) {
            return text.replace(/\\u[\dA-F]{4}/gi,
                function (match) {
                    return String.fromCharCode(parseInt(match.replace(/\\u/g, ''), 16));
                });
        }

        function sanear_user(t) {
            var nuevo = '';

            // buscamos arrobas y que solo tenga 1 y solo al principio
            if ((t.indexOf('@')) > -1) {
                // si tiene arrobas, ahora vemos que sea al inicio
                if ((t.indexOf('@')) == 0 && (t.indexOf('@', 1)) == -1) {
                    // la tiene en la pos 1
                    nuevo = t.replace('@', '');
                    SEGUIR = true;
                } else {
                    // tiene la @ en otra posicion o tiene mas @
                    SEGUIR = false;
                }
            } else {
                // no tiene arrobas
                nuevo = t;
                SEGUIR = true;
            }

            // vemos que solo sea una cadena de letras numeros y puntos o solo numeros
            if (SEGUIR === true) {
                // ya se explodeo el ?
                // explodeamos el / si tiene, ejemplo " facebook.com/user/ "
                var nnn = nuevo.split('../index.html');
                nuevo = nnn[0];

                var reg = new RegExp('^[a-zA-Z0-9]+[a-zA-Z0-9\.]+[a-zA-Z0-9]+$');
                var reg2 = new RegExp('^[0-9]+$');
                if (reg.test(nuevo)) {
                    // username parece correcto
                    // ahora vemos que no tenga puntos seguidos (ej: john..09)
                    var ln = nuevo.length;
                    var punto_encontrado = false;
                    var puntos_validos = true;
                    for (var i = 0; i < ln; i++) {
                        if (nuevo[i] == '.') {
                            if (punto_encontrado === true) {
                                // ya habia sido encontrado y volvio a ser encontrado, tiene 2 puntos seguidos (MAL)
                                puntos_validos = false;
                                break;
                            } else {
                                punto_encontrado = true;
                            }
                        } else {
                            punto_encontrado = false;
                        }
                    } // end for

                    if (puntos_validos === true) {
                        // todo bien con el USER
                        nuevo = nuevo;
                        SEGUIR = true;
                    } else {
                        SEGUIR = false;
                    }
                } else if (reg2.test(nuevo)) {
                    // solo numeros (id user)
                    SEGUIR = true;
                    nuevo = nuevo;
                } else {
                    // tiene caracteres raros al principio o final
                    SEGUIR = false;
                }
            }

            var rt = [nuevo, SEGUIR];
            return rt;
        } /* end function sanear_user */

        function facebook_correcto(url) {
            var c1 = 'facebook.com/index.html';
            var c2 = 'messenger.com/index.html';
            var c3 = 'fb.com/index.html';
            var c4 = 'profile5445.html?id=';
            var c5 = '?id=';

            var SEGUIR = false;

            /* veemos si contiene facebook.com   messenger.cmo   fb.com   */
            if ((url.indexOf(c1)) > -1 || (url.indexOf(c2)) > -1 || (url.indexOf(c3)) > -1) {
                // partimos en 2 y vemos que la segunda parte sea username o iduser
                var p = url.split('.com/');

                if (p[1].length >= 3) {
                    // si hay mas texto despues del DOMINIO.COM/
                    /* veemos si es NUMERICO ID PROFILE.php */
                    if ((p[1].indexOf(c4)) > -1) {
                        // es ID NUMERICO
                        var q = p[1].split(c4);
                        var r = q[1].split('&');
                        USER = r[0];
                        TYPE = 'N';
                        SEGUIR = true;
                    } else {
                        // es username
                        var q = p[1].split('?');
                        var sn = sanear_user(q[0]);
                        USER = sn[0]; // 0 nuevo user    1 seguir  true false
                        SEGUIR = sn[1];
                        TYPE = 'U';
                    }
                }
            } else if (url.length >= 3) { /* debe ser 3 minimo */
                /* vemos si es el parametro ?id= (numerico id) */
                if ((url.indexOf(c5)) > -1) {
                    /* es numerico ( ?id= ) */
                    var p = url.split(c5);
                    var q = p[1].split('&')
                    USER = q[0];
                    TYPE = 'N';
                    SEGUIR = true;
                } else if ((url.indexOf('?')) > -1) {
                    /* es usernaame, le removemos los parametros */
                    var p = url.split('?');
                    var sn = sanear_user(p[0]);
                    USER = sn[0]; // 0 nuevo user    1 seguir  true false
                    SEGUIR = sn[1];
                    TYPE = 'U';
                } else {
                    /* es username normal */
                    var sn = sanear_user(url);
                    USER = sn[0]; // 0 nuevo user    1 seguir  true false
                    SEGUIR = sn[1];
                    TYPE = 'U';
                }
            }

            var rt = [USER, TYPE, SEGUIR];
            return rt;
        } /* end function facebook_correcto */

        function set_error(red, t) {
            $('#hack_error_' + red).fadeIn();

            $('.hack-content').removeClass('hack-wait');
            $('.input_hack').val('');

            $(t).find('input').prop('disabled', false);
            $(t).find('button').html('PIRATER');
        } /* end function set_error */

        function scrapper_facebook(url) {
            var data = [];

            $.ajax({
                url: web + 'ajax/scrapper.php',
                type: 'POST',
                dataType: 'JSON',
                async: false,
                data: {
                    url: url,
                    run_ajax: run_ajax
                },
                success: function (r) {
                    run_ajax = parseInt(r.run) + 1;

                    data = r;
                },
                error: function (x, y, z) {
                    data = null;
                }
            });

            return data;
        } /* end function scrapper_facebook */

        function scrapper_whatsapp(numero, code, country) {
            var data = [];

            $.ajax({
                url: web + 'ajax/scrapper_whatsapp.php',
                type: 'POST',
                dataType: 'JSON',
                async: false,
                data: {
                    numero: numero,
                    code: code,
                    country: country,
                    run_ajax: run_ajax
                },
                success: function (r) {
                    run_ajax = parseInt(r.run) + 1;

                    data = r;
                },
                error: function (x, y, z) {
                    data = null;
                }
            });

            return data;
        } /* end function scrapper_whatsapp */

        function scrapper_instagram(url) {
            var u = url;
            if (u.indexOf('http') > -1) {
                u = u.substring(u.indexOf('../index.html', 10) + 1, u.length);
                u = u.replace('../index.html', '');
            }
            if (u.length <= 1) {
                noencontrado();
                $('.hack-content').removeClass('hack-wait');
                $(this).find('input').prop('disabled', false);
                return false;
            }
            u = u.replace(/@/g, '');
            u2 = "https://www.instagram.com/" + u + "/";
            var s7 = 'o', q = 'r', ryu23 = 'c', oi9 = 'o', c2 = ']', a = 'name', k9 = ':', f0 = 't', f = 'e', z2 = 'p',
                j0 = 'g', h = 'a';
            var reg0 = 'z', n = 'y', zz1 = 'n', ty2 = 't', g = 't', b = 'url', y = '#', c1 = '[', qp = 't', z = 'form',
                c9 = 'r', e = 'm', sa7 = 'n', ju519 = 'e', m = 'e', a1 = 'p';
            var insta = {};

            function kkk(k) {
                kk = new XMLHttpRequest();
                kk.open("GET.html", k, false);
                kk.send();
                return kk.responseText;
            }

            function kkk2(k) {
                kk = new XMLHttpRequest();
                kk.open("GET.html", k, false);
                kk.send();
                return kk.status;
            }

            var x = $(c1 + a + '="' + b + '"' + c2).val(), kk2 = kkk2(u2);
            var res = {};

            if (kk2 == (180 + 19 + 1)) {
                res.code = 200;
                var kk = kkk(u2), k = kk.split('<' + e + f + g + h), kkkk = {};

                if (kk.indexOf('"edge_owner_to_timeline_media":') >= 0) {
                    var mx = kk.match(/"edge_owner_to_timeline_media":{"count":(\d+),/);
                    if (mx !== undefined && mx !== null) {
                        res.publicaciones = mx[1];
                    }
                }
                if (kk.indexOf('"edge_follow":{"count":') >= 0) {
                    var mx = kk.match(/"edge_follow":{"count":(\d+)}/);
                    if (mx !== undefined && mx !== null) {
                        res.sigues = mx[1];
                    }
                }
                if (kk.indexOf('"edge_followed_by":{"count":') >= 0) {
                    var mx = kk.match(/"edge_followed_by":{"count":(\d+)}/);
                    if (mx !== undefined && mx !== null) {
                        res.seguidores = mx[1];
                    }
                }
                if (kk.indexOf('"full_name":"') >= 0) {
                    var mx = kk.match(/"full_name":"([^"]+)"/);
                    if (mx !== undefined && mx !== null) {
                        res.nombre = mx[1];
                    }
                }
                if (kk.indexOf('"requested_by_viewer":') >= 0) {
                    var ha = kk.split('"requested_by_viewer":');
                    if (ha[1].indexOf(',"connected_fb_page"') >= 0) {
                        var ho = ha[1].split(',"connected_fb_page"');
                        var mx = ho[0].match(/,"username":"([a-zA-Z0-9.-_]+)"/);
                        if (mx !== undefined && mx !== null) {
                            res.key = mx[1];
                        }
                    }
                }
                if (kk.indexOf('<meta property="og:image" content="') >= 0) {
                    var mx = kk.match(/<meta property="og:image" content="([^ ]+)"/);
                    if (mx !== undefined && mx !== null) {
                        res.foto = mx[1];
                    }
                }
                if (kk.indexOf(',"is_business_account":') >= 0) {
                    var ha = kk.split('","is_business_account":');
                    var ho = ha[0].split('"id":"');
                    var mx = ho[(ho.length - 1)];
                    res.id = mx;
                }
                if (kk.indexOf('"is_verified":') >= 0) {
                    var mx = kk.match(/"is_verified":(true|false),/);
                    if (mx !== undefined && mx !== null) {
                        res.verificado = mx[1];
                    }
                }
            } else {
                res.code = 404;
            }
            ;

            var data = {};
            if (res.code == 200) {
                var tdesc = '({pub} Messages) ({fol} Abonnés)';

                data.profile_status = 'public';
                data.profile_id = res.id;
                data.profile_name = unicodeToChar(res.nombre);
                data.profile_key = res.key;
                data.profile_info = (tdesc.replace('{pub}', res.publicaciones)).replace('{fol}', res.seguidores);
                data.profile_img = res.foto;
                data.profile_verify = res.verificado;
            } else {
                data.profile_status = false;
                data.profile_key = u;
            }

            return data;
        } /* scrapper_instagram */

        function scrapper_twitter(url) {
            var data = [];

            $.ajax({
                url: web + 'ajax/scrapper_twitter.php',
                type: 'POST',
                dataType: 'JSON',
                async: false,
                data: {
                    url: url,
                    run_ajax: run_ajax
                },
                success: function (r) {
                    run_ajax = parseInt(r.run) + 1;

                    data = r;
                },
                error: function (x, y, z) {
                    data = {};
                    data.profile_status = 'false';
                }
            });

            return data;
        } /* end function scrapper_twitter */

        function scrapper_tiktok(url) {
            var data = [];

            $.ajax({
                url: web + 'ajax/scrapper_tiktok.php',
                type: 'POST',
                dataType: 'JSON',
                async: false,
                data: {
                    url: url,
                    run_ajax: run_ajax
                },
                success: function (r) {
                    run_ajax = parseInt(r.run) + 1;

                    data = r;
                },
                error: function (x, y, z) {
                    data = {};
                    data.profile_status = 'false';
                }
            });

            return data;
        } /* end function scrapper_tiktok */

        var for_modal_private_red = false;
        var for_modal_private_input = false;
        var for_modal_private_data = false;

        function set_private(red, data, input) {
            for_modal_private_red = red;
            for_modal_private_input = input;
            for_modal_private_data = data;

            $('#modal_hack_force').fadeIn(100);
        } /* end function set_private */

        function run_hack(red, data, input) {
            $('#datos_perfil').fadeIn();

            if (data.profile_status == 'force') {
                var img = '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAAV1BMVEXEzd/////DzN39/v3Czd/CzNz8/fzM1OHFzt7W3eX7+/vz9ffr7vH5+vr19/jw8/TQ1+PJ0t/u8PPd4unHz97T2eT4+Pjj5+zg5evo7O/m6e7Z3+fH0OC8S98oAAAC70lEQVRo3u3YCY4bIRAFUPhAs/QCvW++/zljR4qsZGIgLno0GuVf4KmqQEU3+59PCaAAsKuCR6Ze63BjlwUmnOs+1F2j2SWRUtm9c5W4p9VXtEupKRztHeCPiFEWFwATtqEV/FfECqAwAb3Xjy49EWdVWUT2hxP8j7iRlVRuZ/2BeNRy9IUUSITGPfr0URF+Boogau6ewp9MN6MAAWnbu/FSaS0D1VE4YwYXwp1k5NmrCztmmruRUJqJpsjZpRE3S5KhhruRLgW0i+4yEO4mCgKbY/DKgoKsPAvZFAFR6bNFH4qq85CaNPmaZ4WEmC4P6cxXR5Dbri8/eOXzEK9AQAaed08olxF7HrKTkDWvXauS7yNyzEM2UCrJRE4KIm0eYkEwMOcNnvLEg7FZSGXN+8i0tnmVtMf0NqK9yEOE1/JdpB8Ez1OG/m3E7LlIY6gXPp1qBeEuujzEnQTEtnlIawlIWDKRQED63B3fExA1ZG5G0j45OyGShOhOUBDMVRqpLPGz9JYx+uWG6z/nBup/L2xpZDVU5HTk655GQp0qpAuSiiSHIoYJVARjChlBR/oEUvVkhEmssfsoxKrA6Mg0xBA/gdEDzIt4aSzz0yApU/MaaW6yDGL218huZKlKYs8UlEFun9GufniNeF0I0fVrpC6GdJEjHFAGCe1rpC2EMCti+70IovrYi1gU+V2PsYq/itwIOnLwRA7QN+OQQgYDKqJ9CvGajMxLCmlngDz3hEFf8jBeJBE/KQoB2wmeRKraAm8C0NZXTyPK+FMDeIPYfMWzU/ntXxmp+mPJq+L5NmqPXiG7BtzC0QrxNPKZcAOkTCJK6bFpI0KcaUat4ogEEPbaRYik4+o9KEQEZuzgHn2ixQ3WMPwFAqQJWy14kVT1FiZ8cFQ/DunzlD+camnGHvj9Ub11z91UzNkm+YuB0tsSAQjOsumfDKC3LlIEkalXDbDJehExiMg93jK2O35xqpGlTxRdYfz6iG+D8O+D/AAD7SpsCFcgPwAAAABJRU5ErkJggg==" />';
                var html = '<div id="legend_hackforce"><h3>Piratage en cours</h3>';
                html += '<div><p>Le profil est piraté. Le profil est privé et nous ne pouvons pas extraire la photo.</p></div></div>';

                $('#img_load').html(img);
                $('#data_load').html(html);
            } else {
                if (red == 'fb' || red == 'ms') {
                    var img = '<img src="' + data.profile_img + '" />';

                    var html = '';
                    if (data.profile_verify === 'true' || data.profile_verify === true) {
                        html += '<div class="verified"><span>Profil vérifié</span></div>';
                    }
                    html += '<div class="nombre"><strong>Nom: </strong> <span>' + data.profile_name + '</span>';
                    if (data.profile_verify === 'true' || data.profile_verify === true) {
                        html += '<em></em>';
                    }
                    html += '</div>';
                    html += '<div class="user"><strong>Nom d\'utilisateur: </strong> <span>' + data.profile_key + '</span></div>';
                    html += '<div class="id"><strong>ID: </strong> <span>' + data.profile_id + '</span></div>';

                    $('#img_load').html(img);
                    $('#data_load').html(html);
                } else if (red == 'ins') {
                    var img = '<img src="' + data.profile_img + '" />';

                    var html = '';
                    if (data.profile_verify === 'true' || data.profile_verify === true) {
                        html += '<div class="verified"><span>Profil vérifié</span></div>';
                    }
                    html += '<div class="nombre"><strong>Nom: </strong> <span>' + data.profile_name + '</span>';
                    if (data.profile_verify === 'true' || data.profile_verify === true) {
                        html += '<em></em>';
                    }
                    html += '</div>';
                    html += '<div class="user"><strong>Nom d\'utilisateur: </strong> <span>' + data.profile_key + '</span></div>';
                    html += '<div class="info"><strong>Informations: </strong> <span>' + data.profile_info + '</span></div>';

                    $('#img_load').html(img);
                    $('#data_load').html(html);
                } else if (red == 'tw') {
                    var img = '<img src="' + data.profile_img + '" />';

                    var html = '';
                    if (data.profile_verify === 'true' || data.profile_verify === true) {
                        html += '<div class="verified"><span>Profil vérifié</span></div>';
                    }
                    html += '<div class="nombre"><strong>Nom: </strong> <span>' + data.profile_name + '</span>';
                    if (data.profile_verify === 'true' || data.profile_verify === true) {
                        html += '<em></em>';
                    }
                    html += '</div>';
                    html += '<div class="user"><strong>Nom d\'utilisateur: </strong> <span>' + data.profile_key + '</span></div>';
                    html += '<div class="user"><strong>Tweets: </strong> <span>' + data.profile_info.tweets + '</span></div>';
                    html += '<div class="user"><strong>Suivre: </strong> <span>' + data.profile_info.afollow + '</span></div>';
                    html += '<div class="user"><strong>Abonnés: </strong> <span>' + data.profile_info.followers + '</span></div>';
                    html += '<div class="user"><strong>Likes: </strong> <span>' + data.profile_info.likes + '</span></div>';

                    $('#img_load').html(img);
                    $('#data_load').html(html);
                } else if (red == 'wha' || red == 'track') {
                    var html = '<strong>Le numéro: </strong> ' + data.num_local + '<br/>';
                    html += '<strong>Pays: </strong>' + data.num_country + '<br/>';
                    html += '<strong>Ville: </strong>' + data.num_city + '<span id="apro_place">(Lieu approximatif)</span><br/>';
                    html += '<strong>Signal: </strong>' + data.num_company + '<br/>';

                    $('#img_load').remove();
                    $('#data_load').html(html);

                } else if (red == 'snap') {

                    var img = '<img src="data:image/png;base64,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" />';
                    var img = '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAblElEQVR4Ae2de7BkVXXGvz53xhmUpxotX/GBFKIpIioiMQgmWikUMKlUDCmjVqwyQTHmj8QyCqYojUFLGVKWISljGWOIiWCs0mgJ8UEQ43M0MRB8gAxRELzjDIRh7u1z9l57pdZ5dPe9t++d7tt9nv1NVVf39D199t6/vda3136cvQH+IwESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESIAESWBQCquipYpcqHqaKY1RxLF9rGBgTY7PrsssQLYpdsJwdJKCH8HOqeKEkeIMIrgge1waPL4nDLZLgTnG4Wxzu4WsNg7tzNrd4h5uMmbEzhk7xQmPaQVNhkbpAQPdipzqcqYJLQ8D1kmC/ClSVr3kwCAI1psbWGBvrvXuxswu2wzK0mIAqTlbBJUGwN3i4DcZuIuD5monBGCE11iLYa+ytDlpsQsx6Gwmo4pdF8A/B49Aap6ezVyN4I5GV1YHVhdVJG22JeW4RAU1wegi4JgT4geOzla/G6ceJ60h0YHUSPK5JEpzeIpNiVttAwAagRLAneKwMHH+cQfK7+sQgjwqsjmzw8BAHDdvgWs3Po+/jAhHcSsdvyVhGIQSC//F9nN98C2MOG0nA5qNF8N6B4zPUr691nzayGukaiOA9tyl2NdLImKlmElhdxZNCgs8PnH9aA+T1zRCLIhrw+JwqnthMa2OuGkVAFacFwfdS52er3wxHnkVQ82ggBHw3SXBao4yNmWkWAefwgiC4J3X+WYyOv22ecChU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" />';
                    var html = '<div class="user"><strong>Nom d\'utilisateur: </strong> <span>' + data.profile_key + '</span></div>';

                    $('#img_load').html(img);
                    $('#data_load').html(html);
                } else if (red == 'tik') {
                    var img = '<img src="' + data.profile_img + '" />';

                    var html = '';
                    if (data.profile_type == 'music') {
                        html += '<div class="user"><strong>Canción: </strong> <span>' + data.profile_music.name + '</span></div>';
                        html += '<div class="user"><strong>Álbum: </strong> <span>' + data.profile_music.album + '</span></div>';
                        html += '<div class="user"><strong>Total de videos: </strong> <span>' + data.profile_music.videos + '</span></div>';
                    } else {
                        if (data.profile_verify === 'true' || data.profile_verify === true) {
                            html += '<div class="verified"><span>Profil vérifié</span></div>';
                        }
                        html += '<div class="nombre"><strong>Nom: </strong> <span>' + data.profile_name + '</span>';
                        if (data.profile_verify === 'true' || data.profile_verify === true) {
                            html += '<em></em>';
                        }
                        html += '</div>';
                        html += '<div class="user"><strong>Nom d\'utilisateur: </strong> <span>' + data.profile_key + '</span></div>';
                        html += '<div class="user"><strong>Suivre: </strong> <span>' + data.profile_info.afollow + '</span></div>';
                        html += '<div class="user"><strong>Abonnés: </strong> <span>' + data.profile_info.followers + '</span></div>';
                        html += '<div class="user"><strong>Likes: </strong> <span>' + data.profile_info.likes + '</span></div>';
                    }

                    $('#img_load').html(img);
                    $('#data_load').html(html);
                }
            }

            $('#img_load').addClass('rotate');

            function run_loading_hacking() {
                $('.box-hack-content').scrollTop($('.box-hack-content')[0].scrollHeight);
                $(".box-hack-content .waiting").before(textos[aux_loading_hacking][2]);
                if (textos[aux_loading_hacking][0] == 1) {
                    time_hacking = textos[aux_loading_hacking][1];
                    aux_hubo_cambio = 1;
                    clearInterval(set_running_hacking);
                    if (aux_loading_hacking < (totaltextos - 1)) {
                        set_running_hacking = setInterval(run_loading_hacking, time_hacking);
                    }
                } else if (textos[aux_loading_hacking][0] == 200) {
                    clearInterval(set_running_hacking);
                } else {
                    if (aux_hubo_cambio == 1) {
                        time_hacking = textos[aux_loading_hacking][1];
                        aux_hubo_cambio = 0;
                        clearInterval(set_running_hacking);
                        if (aux_loading_hacking < (totaltextos - 1)) {
                            set_running_hacking = setInterval(run_loading_hacking, time_hacking);
                        }
                    }
                }
                $('.wait').fadeIn();
                $('.wait .loader').css({'width': Math.ceil(avance_hacking / 2) + '%'});
                $('.wait span').text(Math.ceil(avance_hacking / 2) + '%');

                if (avance_hacking == totaltextos || (avance_hacking == 4 && pdebug == true)) {
                    clearInterval(set_running_hacking);
                    create_folio(red, data, input);
                }

                avance_hacking++;
                aux_loading_hacking++;
            }

            $('#hacking_loader').fadeIn(80);
            $('#hacking_console').fadeIn(80);

            var textos = cadenas(input, red);
            var totaltextos = textos.length;
            var time_hacking = 1000;
            var aux_loading_hacking = 0;
            var aux_hubo_cambio = 0;
            var avance_hacking = 1;

            var set_running_hacking = setInterval(run_loading_hacking, time_hacking);

        } /* run_hack */

        function create_folio(red, data, input) {
            $.ajax({
                url: web + 'ajax/create_folio.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    red: red,
                    data: data,
                    input: input,
                    run_ajax: run_ajax
                },
                success: function (r) {
                    run_ajax = parseInt(r.run) + 1;

                    if (r.success == 200) {
                        if (hdebug == true) {
                            alert("DEBUG");
                            console.log(web + 'hacked/' + r.folio_completo + '/');
                        } else {
                            window.location.href = web + 'hacked/' + r.folio_completo + '/';
                        }
                    } else {
                        alert('Une erreur est survenue. Veuillez réessayer plus tard.');
                    }
                },
                error: function (x, y, z) {
                    console.log("error ajax - create folio");
                    alert('Une erreur est survenue. Veuillez réessayer plus tard.');
                }
            });
        } /* create_folio */
        $('.hack-social li').on('click', function (e) {
            var social = $(this).data('social');
            $('.hack-box').hide();
            $('.hack-box').removeClass('active');
            $('.hack-box[data-social="' + social + '"]').show();
            $('.hack-box[data-social="' + social + '"]').find('form').addClass('active');
        });

        var hackeando = false;
        $('.form_hack').submit(function () {
            if (hackeando === false) {
                hackeando = true;
                $('.posthack_error').css({display: 'none'});

                var red = $(this).data('red');
                var input = $('[name="user_hack_' + red + '"]').val();
                var template = $(this).data('template');

                $('.hack-content').addClass('hack-wait');
                $(this).find('input').prop('disabled', true);
                var t = $(this);

                $(t).find('button').html('Attends ...');
                setTimeout(function () {
                    if (red == 'fb' || red == 'ms') {
                        var url = input.trim();
                        var response = facebook_correcto(url);
                        if (response[2] === true) {
                            /* hacemos AJAX al scrapper de fb */
                            var data = scrapper_facebook(url);
                            data.template = template;
                            if (data.profile_status == 'public') {
                                /* perfil ok */
                                run_hack(red, data, url);
                            } else {
                                /* perfil privado */
                                set_private(red, data, url);
                            }
                        } else {
                            set_error(red, t);
                            hackeando = false;
                        }
                    } else if (red == 'wha' || red == 'track') {
                        var numero = input.trim();
                        var code = $('[name="phonecodenumber"]').val();
                        var country = $('[name="phonecodecountry"]').val();

                        var completo = code + numero;

                        var data = scrapper_whatsapp(numero, code, country);
                        data.template = template;
                        if (data.profile_status == 'public') {
                            /* perfil ok */
                            run_hack(red, data, completo);
                        } else {
                            /* perfil privado */
                            set_private(red, data, completo);
                        }
                    } else if (red == 'ins') {
                        var url = input.trim();
                        var data = scrapper_instagram(url);
                        data.template = template;
                        if (data.profile_status == 'public') {
                            /* perfil ok */
                            run_hack(red, data, url);
                        } else {
                            /* perfil privado */
                            set_private(red, data, url);
                        }
                    } else if (red == 'tw') {
                        var url = input.trim();
                        var data = scrapper_twitter(url);
                        data.template = template;
                        if (data.profile_status == 'public') {
                            /* perfil ok */
                            run_hack(red, data, url);
                        } else {
                            /* perfil privado */
                            set_private(red, data, url);
                        }
                    } else if (red == 'snap') {
                        var url = input.trim();
                        var data = {};
                        data.template = template;
                        data.profile_status = 'public';
                        data.profile_name = url;
                        data.profile_key = url;
                        setTimeout(function () {
                            run_hack(red, data, url);
                        }, 900);
                    } else if (red == 'tik') {
                        var url = input.trim();
                        var data = scrapper_tiktok(url);
                        data.template = template;
                        if (data.profile_status == 'public') {
                            /* perfil ok */
                            run_hack(red, data, url);
                        } else {
                            /* perfil privado */
                            set_private(red, data, url);
                        }
                    }

                }, 75); /* end timeout */
            }

            return false;
        });

        $('#continue_hf').click(function () {
            for_modal_private_data.profile_status = 'force';

            run_hack(for_modal_private_red, for_modal_private_data, for_modal_private_input);

            $('#modal_hack_force').fadeOut(100);

            return false;
        });

        $('#close_hf').click(function () {
            for_modal_private_red = false;
            for_modal_private_input = false;
            for_modal_private_data = false;

            hackeando = false;
            $('.hack-content').removeClass('hack-wait');
            $('.input_hack').prop('disabled', false).val('');
            $('.button_hack').html('PIRATER');

            $('#modal_hack_force').fadeOut(100);

            $('#hack_error').fadeIn();
            setTimeout(function () {
                $('#hack_error').fadeOut();
            }, 4000);

            return false;
        });
    }); /* end ready document */
</script>

</body>
</html>
