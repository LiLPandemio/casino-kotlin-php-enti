<?php

//Site settings
$config["sitename"]             =   "casino";                      //El nombre que se mostrara en toda la pagina web.
$config["fullsiteurl"]          =   "https://casino.societyplus.net/";            //La URL que se muestra en tu navegador.
$config["maintainanceMode"]     =   false;                          //Pagina en mantenimiento
$config["register_mode"]        =   "closed";                       //Permitir que se registren nuevos usuarios. closed, invite, open
$config["theme"]                =   "default";                      //el tema que se usará, puedes verlos en WEB_ROOT/themes

//Sistema economico
$config["comision"]             =   0.1;                            //Que comision cobras, en formato decimal (1 = 100%, 0.5 = 50%); 

//PayPal settings
$paypal["enabled"]  =   false;      //Activar el metodo de pago paypal
$paypal["mode"]     =   "sandbox";  //Modo sandbox (Pruebas) o live (Activado en produccion)
$paypal["clientID"] =   "";         //Id de cliente, se ve similar a: AdYq9MlwKgxj9vAsF538fEP8YQO9gR39ZyyGy0TgT2YyBFwKODtJy_9TTFQcaCaEvxVsi02y7rKBwcgb
$paypal["secretKey"]=   "";         //Clave de cliente, se ve similar a: ECQdJBCIAKEDu7I_Q3p1Ka61M20SaJAIWDZobY3Xf5vhwGLEndsX5VxKf-Jg9m-Exf0zh_aJDlDMIGt5
$paypal["currency"] =   "EUR";      //Moneda usada (USD, EUR...)

//CryptoPayment
$coinbase["enabled"]=   false;      //Habilitar sistema de pago por criptomonedas (Monero XMR, Bitcoin BTC, Ethercash ECH, Bitcash BCH y Etherum ETH)
$coinbase["apikey"] =   "";         //Clave de api para usar coinbase como gateway de pago.

//Palabras clave para google o otros buscadores (SEO KeyWords)
$config["metakeywords"] =   "patreon, onlyfans, instagram, social";
$config["default_lang"] =   "es";                           //La URL que se muestra en tu navegador.

//Database configuration
$database["username"]   =   "root";                         //el nombre de usuario de tu base de datos
$database["password"]   =   "";                             //la contraseña de tu base de datos
$database["hostname"]   =   "localhost";                    //el host de tu base de datos 
$database["database"]   =   "casino";                      //la base de datos que se usa
