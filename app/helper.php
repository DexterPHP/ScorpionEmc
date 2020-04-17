<?php

class Agent{


    public function __call ($fname,$farray){
        die ('<center><h2>This Function <font color="red">'.$fname.'</font> Not found in Class <font color="red">'.__CLASS__.'</font></h2></center>');
    }



    private $agent = "";
    private $info = array();

    function __construct(){
        $this->agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : NULL;
        $this->lang = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : NULL;
    }
    /*-------=\BrowserV\=-------*/
    private function BrowserV($browser, $search, $string){
        $browser = $this->info['Browser'];
        $version = "";
        $browser = strtolower($browser);
        preg_match_all($search,$string,$match);
        switch($browser){
            case "firefox": $version = str_replace("/","",$match[1][0]);
                break;

            case "internet explorer": $version = substr($match[1][0],0,4);
                break;

            case "opera": $version = str_replace("/","",substr($match[1][0],0,5));
                break;

            case "navigator": $version = substr($match[1][0],1,7);
                break;

            case "maxthon": $version = str_replace(")","",$match[1][0]);
                break;

            case "Google  Chrome": $version = substr($match[1][0],1,10);
        }
        return $version;
    }
    /*-------=\Browser\=-------*/
    public function Browser(){
        $browser = array(
            "Navigator"             => "/Navigator(.*)/i",
            "Mozilla Firefox"       => "/Firefox(.*)/i",
            "Shiira"                => "/Shiira(.*)/i",
            "Internet Explorer"     => "/MSIE(.*)/i",
            "Internet Explorer "     => "/Internet Explorer(.*)/i",
            "Google Chrome"         => "/chrome(.*)/i",
            "MAXTHON"               => "/MAXTHON(.*)/i",
            "Opera"                 => "/Opera(.*)/i",
            'Chimera'               => '/Chimera(.*)/i',
            'Phoenix'               => '/Phoenix(.*)/i',
            'Firebird'              => '/Firebird(.*)/i',
            'Camino'                => '/Camino(.*)/i',
            'Netscape'              => '/Netscape(.*)/i',
            'OmniWeb'               => '/OmniWeb(.*)/i',
            'Safari'                => '/Safari(.*)/i',
            'Konqueror'             => '/Konqueror(.*)/i',
            'icab'                  => '/iCab(.*)/i',
            'Lynx'                  => '/Lynx(.*)/i',
            'Links'                 => '/Links(.*)/i',
            'hotjava'               => '/HotJava(.*)/i',
            'amaya'                 => '/Amaya(.*)/i',
            'IBrowse'               => '/IBrowse(.*)/i'
        );
        foreach($browser as $key => $value){
            if(preg_match($value, $this->agent)){
                $this->info = array_merge($this->info,array("Browser" => $key));
                $this->info = array_merge($this->info,array("BVersion" => $this->BrowserV($key, $value, $this->agent)));
                break;
            }else{
                $this->info = array_merge($this->info,array("Browser" => "UnKnown"));
                $this->info = array_merge($this->info,array("BVersion" => "UnKnown"));
            }
        }
        return $this->info['Browser'];
    }
    /*-------=\System\=-------*/
    public function MobileBrowser () {
        $Mbrowser = array (
            'Mobile Explorer'           => '/mobileexplorer/i',
            'Openwave Browser'          => '/openwave/i',
            'Opera Mini'                => '/opera mini/i',
            'Opera Mini '               => '/operamini/i',
            'Palm'                      => '/elaine/i',
            'Palm '                     => '/palmsource/i',
            'Palm  '                    => '/palm/i',
            'Digital Paths'             => '/digital paths/i',
            'AvantGo'                   => '/avantgo/i',
            'Xiino'                     => '/xiino/i',
            'Palmscape'                 => '/palmscape/i',
            'Motorola'                  => '/motorola/i',
            'Nokia'                     => '/nokia/i',
            'Motorola'                  => '/mot-/i',
            'Apple iPhone'              => '/iphone/i',
            'Apple iPod Touch'          => '/ipod/i',
            'Apple iPad'                => '/ipad/i',
            'Sony Ericsson'             => '/sony/i',
            'Sony Ericsson '            => '/ericsson/i',
            'BlackBerry'                => '/blackberry/i',
            'O2 Cocoon'                 => '/cocoon/i',
            'Treo'                      => '/blazer/i',
            'LG'                        => '/lg/i',
            'Amoi'                      => '/amoi/i',
            'XDA'                       => '/xda/i',
            'MDA'                       => '/mda/i',
            'Vario'                     => '/vario/i',
            'HTC'                       => '/htc/i',
            'Samsung'                   => '/samsung/i',
            'Sharp'                     => '/sharp/i',
            'Siemens'                   => '/sie-/i',
            'Alcatel'                   => '/alcatel/i',
            'BenQ'                      => '/benq/i',
            'HP iPaq'                   => '/ipaq/i',
            'PlayStation Portable'      => '/playstation portable/i',
            'Danger Hiptop'             => '/hiptop/i',
            'NEC'                       => '/nec-/i',
            'Panasonic'                 => '/panasonic/i',
            'Philips'                   => '/philips/i',
            'Sagem'                     => '/sagem/i',
            'Sanyo'                     => '/sanyo/i',
            'SPV'                       => '/spv/i',
            'ZTE'                       => '/zte/i',
            'Sendo'                     => '/sendo/i',
            'Symbian'                   => '/symbian/i',
            'SymbianOS'                 => '/SymbianOS/i',
            'Symbian S60'               => '/series60/i',
            'Windows CE'                => '/windows ce/i',
            'Obigo'                     => '/obigo/i',
            'Netfront Browser'          => '/netfront/i',
            'Mobile Explorer '          => '/mobilexplorer/i',
            'Novarra Transcoder'        => '/novarra/i',
            'Vodafone'                  => '/vodafone/i',
            'NTT DoCoMo'                => '/docomo/i',
            'Android'                   => '/android/i',
            'O2'                        => '/o2/i'
        ) ;

        foreach($Mbrowser as $key => $value){
            if(preg_match($value, $this->agent)){
                $this->info = array_merge($this->info,array("Mbrowser" => $key));
                break;
            }else{
                $this->info = array_merge($this->info,array("Mbrowser" => "Browser is Not Mobile"));
            }
        }
        return $this->info['Mbrowser'];


    }
    /*-------=\System\=-------*/
    public function System(){
        /*        $OS = array(
                            "Windows 7"            =>     "/Windows NT 6.1/i",
                            "Windows"              =>     "/Windows/i",
                            "Linux"                =>    "/Linux/i",
                            "Unix"                 =>    "/Unix/i",
                            "Mac"                  =>    "/Mac/i"
                            );
        */
        $OS =   array (
            'Windows XP'                                     => '/(Windows XP)/i'                                               ,
            'Windows XP '                                    => '/(Windows NT 5.1|Windows NT5.1)/i'                             ,
            'Windows 2000'                                   => '/(Windows 2000)/i'                                             ,
            'Windows 2000 '                                  => '/(Windows NT 5.0)/i'                                           ,
            'Windows NT'                                     => '/(Windows NT 4.0|WinNT4.0)/i'                                  ,
            'Windows Server 2003'                            => '/(Windows NT 5.2)/i'                                           ,
            'Windows Vista'                                  => '/(Windows NT 6.0)/i'                                           ,
            'Windows 7 '                                     => '/(Windows NT 6.1)/i'                                           ,
            'Windows 7'                                      => '/(Windows NT 7.0)/i'                                           ,
            'Windows 10'                                     => '/(Windows NT 10.0)/i'                                           ,
            'Windows 8 Enterprise'                           => '/(Windows NT 6.2)/i'                                           ,
            'Windows CE'                                     => '/(Windows CE)/i'                                               ,
            'Windows CE'                                     => '/(UP.Browser)/i'                                               ,
            'Windows Media Center'                           => '/(media center pc).([0-9]{1,2}\\.[0-9]{1,2})/i'                ,
            'Windows'                                        => '/(win)([0-9]{1,2}\\.[0-9x]{1,2})/i'                            ,
            'Windows '                                       => '/(win)([0-9]{2})/i'                                            ,
            'Windows  '                                      => '/(windows)([0-9x]{2})/i'                                       ,
            'Windows ME'                                     => '/(Windows ME)/i'                                               ,
            'Windows ME '                                    => '/(Win 9x 4.90)/i'                                              ,
            'Windows 98'                                     => '/(Windows 98|Win98)/i'                                         ,
            'Windows 95'                                     => '/(Windows 95)/i'                                               ,
            'Windows   '                                     => '/(windows)([0-9]{1,2}\\.[0-9]{1,2})/i'                         ,
            'Windows    '                                    => '/(win32)/i'                                                    ,
            'Windows     '                                   => '/(GetRight)/i'                                                 ,
            'Windows      '                                  => '/(go!zilla)/i'                                                 ,
            'Windows       '                                 => '/(gozilla)/i'                                                  ,
            'Windows        '                                => '/(gulliver)/i'                                                 ,
            'Windows         '                               => '/(ia archiver)/i'                                              ,
            'Windows          '                              => '/(NetPositive)/i'                                              ,
            'Windows           '                             => '/(mass downloader)/i'                                          ,
            'Windows            '                            => '/(microsoft)/i'                                                ,
            'Windows             '                           => '/(offline explorer)/i'                                         ,
            'Windows              '                          => '/(teleport)/i'                                                 ,
            'Windows               '                         => '/(web downloader)/i'                                           ,
            'Windows                '                        => '/(webcapture)/i'                                               ,
            'Windows                 '                       => '/(webcollage)/i'                                               ,
            'Windows                  '                      => '/(webcopier)/i'                                                ,
            'Windows                   '                     => '/(webstripper)/i'                                              ,
            'Windows                    '                    => '/(webzip)/i'                                                   ,
            'Windows                     '                   => '/(wget)/i'                                                     ,
            'Windows                      '                  => '/(flashget)/i'                                                 ,
            'Windows                       '                 => '/(MS FrontPage)/i'                                             ,
            'Windows                        '                => '/(msproxy)\\/([0-9]{1,2}.[0-9]{1,2})/i'                        ,
            'Windows                         '               => '/(msie)([0-9]{1,2}.[0-9]{1,2})/i'                              ,
            'Windows                          '              => '/(NetAnts)/i'                                                  ,
            'Java'                                           => '/(java)([0-9]{1,2}\\.[0-9]{1,2}\\.[0-9]{1,2})/i'               ,
            'Solaris'                                        => '/(Solaris)([0-9]{1,2}\\.[0-9x]{1,2}){0,1}/i'                   ,
            'DOS'                                            => '/(dos x86)/i'                                                  ,
            'Unix'                                           => '/(unix)/i'                                                     ,
            'Mac OS X'                                       => '/(Mac OS X)/i'                                                 ,
            'Macintosh PowerPC'                              => '/(Mac_PowerPC)/i'                                              ,
            'Mac OS'                                         => '/(mac|Macintosh)/i'                                            ,
            'SunOS'                                          => '/(sunos)([0-9]{1,2}\\.[0-9]{1,2}){0,1}/i'                      ,
            'BeOS'                                           => '/(beos)([0-9]{1,2}\\.[0-9]{1,2}){0,1}/i'                       ,
            'RISC OS'                                        => '/(risc os)([0-9]{1,2}\\.[0-9]{1,2})/i'                         ,
            'OS/2'                                           => '/(os\\/2)/i'                                                   ,
            'FreeBSD'                                        => '/(freebsd)/i'                                                  ,
            'OpenBSD'                                        => '/(openbsd)/i'                                                  ,
            'NetBSD'                                         => '/(netbsd)/i'                                                   ,
            'IRIX'                                           => '/(irix)/i'                                                     ,
            'Plan9'                                          => '/(plan9)/i'                                                    ,
            'OSF'                                            => '/(osf)/i'                                                      ,
            'AIX'                                            => '/(aix)/i'                                                      ,
            'GNU Hurd'                                       => '/(GNU Hurd)/i'                                                 ,
            'Linux - Fedora'                                 => '/(fedora)/i'                                                   ,
            'Linux - Kubuntu'                                => '/(kubuntu)/i'                                                  ,
            'Linux - Ubuntu'                                 => '/(ubuntu)/i'                                                   ,
            'Linux - Debian'                                 => '/(debian)/i'                                                   ,
            'Linux - CentOS'                                 => '/(CentOS)/i'                                                   ,
            'Linux - Mandriva'                               => '/(Mandriva).([0-9]{1,3}(\\.[0-9]{1,3})?(\\.[0-9]{1,3})?)/i'     ,
            'Linux - SUSE'                                   => '/(SUSE).([0-9]{1,3}(\\.[0-9]{1,3})?(\\.[0-9]{1,3})?)/i'         ,
            'Linux - Slackware'                              => '/(Dropline)/i'                                                  ,
            'Linux - ASPLinux'                               => '/(ASPLinux)/i'                                                  ,
            'Linux - Red Hat'                                => '/(Red Hat)/i'                                                   ,
            'Linux'                                          => '/(linux)/i'                                                     ,
            'Unix'                                           => '/(libwww-perl)/i'                                               ,
            'AmigaOS'                                        => '/(amigaos)([0-9]{1,2}\\.[0-9]{1,2})/i'                          ,
            'AmigaOS '                                       => '/(amiga-aweb)/i'                                               ,
            'Amiga'                                          => '/(amiga)/i'                                                     ,
            'PalmOS'                                         => '/(AvantGo)/i'                                                   ,
            'WebTV'                                          => '/(webtv)\\/([0-9]{1,2}\\.[0-9]{1,2})/i'                         ,
            'Dreamcast OS'                                   => '/(Dreamcast)/i'
        );
        foreach($OS as $key => $value){
            if(preg_match($value, $this->agent)){
                $this->info = array_merge($this->info,array("System" => $key));
                break;
            }
        }
        return $this->info['System'];
    }
    /*-------=\Lang\=-------*/
    public function LangB(){
        $blang = $this->lang;
        $havel = 0;
        $language = substr (strtolower ($blang), 0, 2);
        if ($language == 'ja') $language = 'jp';
        if ($language == 'dk') $language = 'da';
        if ($language == 'us') $language = 'en';

        $blangs = array (
            'aa','ab','af','am','ar','as','ay','az','ba','be','bg','bh','bi','bn','bo','br','jp','jw','za',
            'ca','co','cs','cy','da','de','dz','el','en','eo','es','et','eu','fa','fi','fj','fo','fr','fy',
            'ga','gd','gl','gn','gu','ia','id','ie','ik','is','it','iu','ha','he','hi','hr','hu','hy','yi',
            'ka','kk','kl','km','kn','ko','ks','ku','ky','la','ln','lo','lt','lv','rm','rn','ro','ru','rw',
            'mg','mi','mk','ml','mn','mo','mr','ms','mt','my','ta','te','tg','th','ti','tk','tl','tn','to',
            'na','ne','nl','no','uk','ur','uz','pa','pl','ps','pt','oc','om','or','qu','vi','vo','wo','xh',
            'sa','sd','sg','si','sk','sl','sm','sn','so','sq','sr','ss','st','su','sv','sw','tr','ts','tt',
            'tw','zh'
        );

        foreach ($blangs as $la => $lu){
            if ($language == $lu) $havel = 1;
        }
        if ($language == ''){
            $htt = explode (';', $bagent);
            foreach ($htt as $la => $lu){
                foreach ($blangs as $le => $li){
                    if (substr (trim ($lu), 0, 2) == $li) $havel = 1;
                }
            }
        }
        if (!$havel) $language = 'other';
        return($language);
    }
    /*-------=\BVersion\=-------*/
    public function BVersion () {
        return $this->info['BVersion'] ;
    }
    /*-------=\Cmptname\=-------*/
    public function Cmptname(){
        $Env = $_ENV[COMPUTERNAME] ;
        return $Env ;
    }

    public function getIp(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }



}

