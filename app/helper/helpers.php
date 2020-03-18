<?php


/********************************************
 * @param $email
 * @param int $size
 * @return string
 ********************************************/

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

/**************************************************************이니시스 *************************************************************/
if (! function_exists('inicis_info')) {
    function inicis_info(){
        $SignatureUtil = new \INIStdPayUtil();
        //############################################
        // 1.전문 필드 값 설정(***가맹점 개발수정***)
        //############################################
        // 여기에 설정된 값은 Form 필드에 동일한 값으로 설정

        //$mid = "INIpayTest";                                                                                      // 가맹점 ID(가맹점 수정후 고정) 테스트계정
        //$signKey = "SU5JTElURV9UUklQTEVERVNfS0VZU1RS";                                                            // 가맹점에 제공된 웹 표준 사인키(가맹점 수정후 고정)*/

        $mid 			= env('INICIS_MARKET_ID');  								                            // 가맹점 ID(가맹점 수정후 고정)
        $signKey 		= env('INICIS_SIGN_KEY'); 			                                                    // 가맹점에 제공된 키(이니라이트키) (가맹점 수정후 고정) !!!절대!! 전문 데이터로 설정금지
        $cardNoInterestQuota = "11-2:3:,34-5:12,14-6:12:24,12-12:36,06-9:12,01-3:4";                                // 카드 무이자 여부 설정(가맹점에서 직접 설정)
        $cardQuotaBase       = "2:3:4:5:6:11:12:24:36";                                                             // 가맹점에서 사용할 할부 개월수 설정
        $timestamp 		= $SignatureUtil->getTimestamp();   			                                            // util에 의해서 자동생성
        $orderNumber 	= $mid . "_" . $timestamp; 						                                            // 가맹점 주문번호(가맹점에서 직접 설정)
        //$price = $option_total_cost;
        $price=200;
        //
        //###################################
        // 2. 가맹점 확인을 위한 signKey를 해시값으로 변경 (SHA-256방식 사용)
        //###################################
        $mKey 					= $SignatureUtil->makeHash($signKey, "sha256");

        /*
         **** 위변조 방지체크를 signature 생성 ***
         * oid, price, timestamp 3개의 키와 값을
         * key=value 형식으로 하여 '&'로 연결한 하여 SHA-256 Hash로 생성 된값
         * ex) oid=INIpayTest_1432813606995&price=819000&timestamp=2012-02-01 09:19:04.004
         * key기준 알파벳 정렬
         * timestamp는 반드시 signature생성에 사용한 timestamp 값을 timestamp input에 그데로 사용하여야함
         */
        $params = array(
            "oid" => $orderNumber,
            "price" => $price,
            "timestamp" => $timestamp
        );
        $sign		= $SignatureUtil->makeSignature($params);
        $http_host 	= $_SERVER['HTTP_HOST'];
        /* 기타 */
        $siteDomain = get_connet_protocol().$_SERVER['HTTP_HOST'].'/project_support';                                                              //가맹점 도메인 입력
    }
}

if (! class_exists('CreateIdModule')) {
    class CreateIdModule{

        function makeTid($payMetod, $mid, $mobileType){
            date_default_timezone_set('Asia/Seoul');
            $date = new DateTime();

            $prefix = "";

            if ($mobileType) {
                $prefix = "StdMX_";
            } else {
                $prefix = "Stdpay";
            }


            /////////////
            list($usec, $sec) = explode(" ", microtime());
            $time =  date("YmdHis",$sec).intval(round($usec*1000));
            if(strlen($time) == 17){

            } elseif (strlen($time) == 16) {
                $time = $time."0";
            } else {
                $time = $time."00";
            }
            /////////////

            $tid = $prefix.$this->getPGID($payMetod).$mid.$time.$this->makeRandNum();


            return $tid;
        }

        function getPGID($payMethod){
            $pgid = "";

            if ($payMethod == "Card") {
                $pgid = "CARD";
            } elseif ($payMethod == "Account") {
                $pgid = "ACCT";
            } elseif ($payMethod == "DirectBank") {
                $pgid = "DBNK";
            } elseif ($payMethod == "OCBPoint") {
                $pgid = "OCBP";
            } elseif ($payMethod == "VCard") {
                $pgid = "ISP_";
            }elseif ($payMethod == "HPP") {
                $pgid = "HPP_";
            } elseif ($payMethod == "Nemo") {
                $pgid = "NEMO";
            } elseif ($payMethod == "ArsBill") {
                $pgid = "ARSB";
            } elseif ($payMethod == "PhoneBill") {
                $pgid = "PHNB";
            } elseif ($payMethod == "Ars1588Bill") {
                $pgid = "1588";
            } elseif ($payMethod == "VBank") {
                $pgid = "VBNK";
            } elseif ($payMethod == "Culture") {
                $pgid = "CULT";
            } elseif ($payMethod == "CMS") {
                $pgid = "CMS_";
            } elseif ($payMethod == "AUTH") {
                $pgid = "AUTH";
            } elseif ($payMethod == "INIcard") {
                $pgid = "INIC";
            } elseif ($payMethod == "MDX") {
                $pgid = "MDX_";
            } elseif ($payMethod == "CASH") {
                $pgid = "CASH";
            }elseif (strlen($payMethod) > 4) {
                $pgid = strtoupper($payMethod);
                $pgid = substr($pgid, 0, 4);
            } else {
                $pgid = trim($pgid);
            }

            return $pgid;
        }

        //랜덤 숫자 생성
        function makeRandNum(){
            $strNum = "";
            $randNum = rand(0,300);

            if ($randNum<10) {
                $strNum = $strNum."00".$randNum;
            } elseif ($randNum<100) {
                $strNum = $strNum."0".$randNum;
            } else {
                $strNum = $randNum;
            }

            return $strNum;
        }

    }
}

if (! class_exists('HttpClient')) {
    define ("CONNECT_TIMEOUT", 5);
    define ("READ_TIMEOUT", 15);
    //$explode_data = explode('/', $P_REQ_URL);
    //$host = $explode_data[2];
    //$path = "/" . $explode_data[3] . "/" . $explode_data[4];
    class HttpClient
    {
        var $sock=0;
        var $ssl;
        var $host;
        var $port;
        var $path;
        var $status;
        var $headers="";
        var $body="";
        var $reqeust;
        var $errorcode;
        var $errormsg;

        function processHTTP($url, $param) {

            $data = "";
            foreach ($param as $key => $value) {
                $key2 = urlencode($key);
                $value2 = urlencode($value);
                $data .= "&$key2=$value2";
            }

            $data = substr($data, 1); // remove leading "&"
            $url_data = parse_url($url);


            if ($url_data["scheme"]=="https")
            {
                $this->ssl = "ssl://";
                $this->port = 443;
            }

            $this->host = $url_data["host"];
            /*

                    if (is_null($url_data["port"])) {
                        $this->port = "80";
                    } else {
                        $this->port = $url_data["port"];
                    }
                    */

            $this->path = $url_data["path"];

            if (!$this->sock = @fsockopen($this->ssl.$this->host, $this->port, $errno, $errstr, CONNECT_TIMEOUT)) {

                switch($errno) {
                    case -3:
                        $this->errormsg = 'Socket creation failed (-3)';
                    case -4:
                        $this->errormsg = 'DNS lookup failure (-4)';
                    case -5:
                        $this->errormsg = 'Connection refused or timed out (-5)';
                    default:
                        $this->errormsg = 'Connection failed ('.$errno.')';
                        $this->errormsg .= ' '.$errstr;
                }
                return false;
            }

            $this->headers="";
            $this->body="";

            /*Write*/
            $request  = "POST ".$this->path." HTTP/1.0\r\n";
            $request .= "Connection: close\r\n";
            $request .= "Host: ".$this->host."\r\n";
            $request .= "Content-type: application/x-www-form-urlencoded\r\n";
            $request .= "Content-length: ".strlen($data)."\r\n";
            $request .= "Accept: */*\r\n";
            $request .= "\r\n";
            $request .= $data."\r\n";
            $request .= "\r\n";
            fwrite($this->sock, $request);

            /*Read*/
            stream_set_blocking($this->sock, FALSE );
            $atStart = true;
            $IsHeader = true;
            $timeout = false;
            $start_time= time();
            while ( !feof($this->sock) && !$timeout ) {
                $line = fgets($this->sock, 4096);
                $diff=time()-$start_time;
                if( $diff >= READ_TIMEOUT){
                    $timeout = true;
                }
                if( $IsHeader ) {
                    if( $line == "" ) {
                        continue;
                    }
                    if( substr( $line, 0, 2 ) == "\r\n" ) {
                        $IsHeader = false;
                        continue;
                    }
                    $this->headers .= $line;
                    if ($atStart) {
                        $atStart = false;
                        if (!preg_match('/HTTP\/(\\d\\.\\d)\\s*(\\d+)\\s*(.*)/', $line, $m)) {
                            $this->errormsg = "Status code line invalid: ".htmlentities($line).$m[1].$m[2].$m[3];
                            fclose( $this->sock );
                            return false;
                        }
                        $http_version = $m[1];
                        $this->status = $m[2];
                        $status_string = $m[3];
                        continue;
                    }
                }
                else {
                    $this->body .= $line;
                }
            }


            fclose( $this->sock );

            if( $timeout )
            {
                $this->errorcode = READ_TIMEOUT_ERR;
                $this->errormsg = "Socket Timeout(".$diff."SEC)";
                return false;
            }

            return true;
            //	return false;
        }

        function getErrorCode()
        {
            return $this->errorcode;
        }

        function getErrorMsg()
        {
            return $this->errormsg;
        }

        function getBody()
        {
            return $this->body;
        }

    }
}

if (! class_exists('INIStdPayUtil')) {
    class INIStdPayUtil	{
        function getTimestamp()	{
            // timezone 을 설정하지 않으면 getTimestapme() 실행시 오류가 발생한다.
            // php.ini 에 timezone 설정이 되어 잇으면 아래 코드가 필요없다.
            // php 5.3 이후로는 반드시 timezone 설정을 해야하기 때문에 아래 코드가 필요없을 수 있음. 나중에 확인 후 수정필요.
            // 이니시스 플로우에서 timestamp 값이 중요하게 사용되는 것으로 보이기 때문에 정확한 timezone 설정후 timestamp 값이 필요하지 않을까 함.
            date_default_timezone_set('Asia/Seoul');
            $date = new DateTime();

            $milliseconds = round(microtime(true) * 1000);
            $tempValue1 = round($milliseconds/1000);		//max integer 자릿수가 9이므로 뒤 3자리를 뺀다
            $tempValue2 = round((float)microtime(false) * 1000);	//뒤 3자리를 저장
            switch (strlen($tempValue2)) {
                case '3':
                    break;
                case '2':
                    $tempValue2 = "0".$tempValue2;
                    break;
                case '1':
                    $tempValue2 = "00".$tempValue2;
                    break;
                default:
                    $tempValue2 = "000";
                    break;
            }

            return "".$tempValue1.$tempValue2;
        }

        /*
         //*** 위변조 방지체크를 signature 생성 ***

         mid, price, timestamp 3개의 키와 값을
         key=value 형식으로 하여 '&'로 연결한 하여 SHA-256 Hash로 생성 된값
         ex) mid=INIpayTest&price=819000&timestamp=2012-02-01 09:19:04.004

         * key기준 알파벳 정렬
         * timestamp는 반드시 signature생성에 사용한 timestamp 값을 timestamp input에 그데로 사용하여야함
         */
        function makeSignature($signParam) {
            ksort($signParam);
            $string = "";
            foreach ($signParam as $key => $value) {
                $string .= "&$key=$value";
            }
            $string = substr($string, 1); // remove leading "&"

            $sign = $this->makeHash($string, "sha256");
            //$this->hash256($string);

            return $sign;
        }

        function makeHash($data, $alg) {
            // $s = hash_hmac('sha256', $data, 'secret', true);
            // return base64_encode($s);

            $ret = openssl_digest($data, $alg);
            return $ret;
        }

        //결제보안 추가 인증.
        function makeSignatureAuth($parameters) {

            if ($parameters == null || sizeof($parameters) == 0) {
                throw new Exception("<p>Parameters can not be empty.</P>");
            }

            $stringToSign = "";															//반환용 text
            $mid          = $parameters["mid"];                                                //mid
            $tstamp       = $parameters["tstamp"];												//auth timestamp
            $MOID         = $parameters["MOID"];												//OID
            $TotPrice     = $parameters["TotPrice"];											//total price
            $tstampKey    = substr($parameters["tstamp"], strlen($parameters["tstamp"]) - 1);	// timestamp 마지막 자리 1자리 숫자

            switch (intval($tstampKey)){
                case 1 :
                    $stringToSign = "MOID=" . $MOID . "&mid=" . $mid . "&tstamp=" . $tstamp ;
                    break;
                case 2 :
                    $stringToSign = "MOID=" . $MOID . "&tstamp=" . $tstamp . "&mid=" . $mid ;
                    break;
                case 3 :
                    $stringToSign = "mid=" . $mid . "&MOID=" . $MOID . "&tstamp=" . $tstamp ;
                    break;
                case 4 :
                    $stringToSign = "mid=" . $mid . "&tstamp=" . $tstamp . "&MOID=" . $MOID ;
                    break;
                case 5 :
                    $stringToSign = "tstamp=" . $tstamp . "&mid=" . $mid . "&MOID=" . $MOID ;
                    break;
                case 6 :
                    $stringToSign = "tstamp=" . $tstamp . "&MOID=" . $MOID . "&mid=" . $mid ;
                    break;
                case 7 :
                    $stringToSign = "TotPrice=" . $TotPrice . "&mid=" . $mid . "&tstamp=" . $tstamp ;
                    break;
                case 8 :
                    $stringToSign = "TotPrice=" . $TotPrice . "&tstamp=" . $tstamp . "&mid=" . $mid ;
                    break;
                case 9 :
                    $stringToSign = "TotPrice=" . $TotPrice . "&MOID=" . $MOID . "&tstamp=" . $tstamp ;
                    break;
                case 0 :
                    $stringToSign = "TotPrice=" . $TotPrice . "&tstamp=" . $tstamp . "&MOID=" . $MOID ;
                    break;
            }

            $signature = hash("sha256", $stringToSign);            				// sha256 처리하여 hash 암호화
            //$signature = $this->makeHash($stringToSign, "sha256");            // sha256 처리하여 hash 암호화

            return $signature;
        }

    }
}

if (!class_exists('Inicis')) {
        class Inicis {
            const INICIS_API_URL="https://iniapi.inicis.com/";
            const CANCEL_PAYMENT_URL = '/api/v1/refund';
            const TOKEN_HEADER = 'Authorization';
            const TEST_API_URL ='http://api.test2:8000/api/v1/test';
            private $imp_key = null;
            private $imp_secret = null;
            protected $access_token = null;
            protected $expired_at = null;
            protected $now = null;


            public function refundHash($method = null, $timestamp = null , $ip =null, $tid =null){
                $key = env('INICIS_API_KEY');
                $mid = env('INICIS_MARKET_ID');
                $hash ="KEY=".$key."&type=Refund&paymethod=".$method ."&timestamp=".$timestamp."&clientIp=".$ip."&mid=".$mid."&tid=".$tid;
                return hash('sha256',$hash);
            }

            public function cancel ($data) {
                try {
                    $access_token = $this->getAccessCode();
                    $keys = array_flip(array("type","paymethod","timestamp","clientIp","mid","tid","msg","hashData"));
                    $cancel_data = array_intersect_key($data , $keys);
                    $response = $this->postResponse(
                        self::INICIS_API_URL.self::CANCEL_PAYMENT_URL ,
                        $cancel_data ,
                        array(self::TOKEN_HEADER . ': ' . $access_token)
                    );
                    return $response;
                } catch (Exception $e) {
                    return array('code' => $e->getCode() , 'message' => $e->getMessage());
                }
            }


            protected function getAccessCode () {
                    return '';
            }



            protected function postResponse ($request_url , $post_data  , $headers = array()) {
                $default_header = array('Content-Type: application/x-www-form-urlencoded;charset=utf-8' ,"cache-control: no-cache");
                $data = http_build_query($post_data);
                $headers = array_merge($default_header , $headers);
                $ch = curl_init();
                curl_setopt($ch , CURLOPT_URL , $request_url);
                curl_setopt($ch , CURLOPT_TIMEOUT , 3);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
                curl_setopt($ch , CURLOPT_POST , true);
                curl_setopt($ch , CURLOPT_HTTPHEADER , $headers);
                curl_setopt($ch , CURLOPT_POSTFIELDS , $data);
                curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);
                //execute post
                $response = curl_exec($ch);
                $error_code = curl_errno($ch);
                $errMsg = curl_error($ch);
                $status_code = curl_getinfo($ch , CURLINFO_HTTP_CODE);
                curl_close($ch);
                if ($error_code > 0) throw new Exception("AccessCode Error(HTTP STATUS : " . $status_code. ", error msg =>" .$errMsg. ")" , $error_code);
                return $response;
            }



            protected function getResponse ($request_url , $request_data = null) {
                $access_token = $this->getAccessCode();
                $headers = array(self::TOKEN_HEADER . ': ' . $access_token , 'Content-Type: application/json');
                $ch = curl_init();
                curl_setopt($ch , CURLOPT_URL , $request_url);
                curl_setopt($ch , CURLOPT_POST , false);
                curl_setopt($ch , CURLOPT_HTTPHEADER , $headers);
                curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);
                //execute get
                $body = curl_exec($ch);
                $error_code = curl_errno($ch);
                $status_code = curl_getinfo($ch , CURLINFO_HTTP_CODE);
                $response = $body;
                curl_close($ch);

                return $response;
            }


            protected function deleteResponse ($request_url , $headers = array()) {
                $default_header = array('Content-Type: application/json');
                $headers = array_merge($default_header , $headers);
                $ch = curl_init();
                curl_setopt($ch , CURLOPT_URL , $request_url);
                curl_setopt($ch , CURLOPT_CUSTOMREQUEST , 'DELETE');
                curl_setopt($ch , CURLOPT_HTTPHEADER , $headers);
                curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);
                //execute delete
                $body = curl_exec($ch);
                $error_code = curl_errno($ch);
                $status_code = curl_getinfo($ch , CURLINFO_HTTP_CODE);
                $response = $body;
                curl_close($ch);
                return $response;
            }
        }

}
/************************************************************이니시스 끝 ************************************************************/
if (! function_exists('summernote_save_image')) {

    function summernote_save_image($content,$path) {

        $dom = new \DOMDocument();
        $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $filename = uniqid();
                $filepath = "$path$filename.$mimetype";
                $image = Image::make($src)->encode($mimetype, 100);                                              // encode file to the specified mimetype
                Storage::disk('public')->put($filepath,$image->encode());
                $new_src = asset('storage/'.$filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }
        return $dom->saveHTML();
    }
}

if (! function_exists('check_ssl_protocol')) {

    function check_ssl_protocol(){
        // $CI		=& get_instance();
        $ssl = "";
        $ssl = ((!empty($_SERVER['HTTPS'])) && ($_SERVER['HTTPS']=='on')) ? true : false;
        return $ssl;
    }
}

if (! function_exists('get_connet_protocol')) {

    function get_connet_protocol(){
        // $CI		=get_http_protocol& get_instance();
        $protocol = "";
        $protocol = (check_ssl_protocol())? 'https://' : 'http://';
        return $protocol;
    }
}


if (! function_exists('project_status')) {

    function project_status($status){
        switch ($status){
            case 0 : return "입력중";
            break;
            case 1: return "대기중";
            break;
            case 2: return "진행중";
            break;
            case 3: return "반려";
            break;
            case 4: return "실패";
            break;
            case 5: return "성공";
            break;
            default : return "잘못된데이터";
            break;
        }

    }
}

if (! function_exists('support_condition')) {

    function support_condition($status){
        switch ($status){
            case 0 : return "대기";
                break;
            case 1 : return "후원요청";
                break;
            case 2 : return "후원결제완료";
                break;
            case 10 : return "환불요청";
                break;
            case 11: return "부분환불";
                break;
            case 12: return "전체환불";
                break;
            case 13: return "환불실패";
                break;
            case 98: return "결제실패";
                break;
            case 99: return "결제취";
                break;
        }

    }
}
