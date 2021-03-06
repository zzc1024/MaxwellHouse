<?php  
namespace app\index\miaodi;  
  
class Miaodi  
{  
    //秒嘀配置  
    private $miaodi_url = "https://api.miaodiyun.com/20150822/industrySMS/sendSMS";  
    private $miaodi_token = "60236dfd5860482e933accc1f64efdec";  
    private $miaodi_sid = "17298204c18147d699820f8a4f44832a";  
  
    /**  
     * 发送POST请求  
     * auth: Lee E-mail: encircles@163.com  
     * @param $url  
     * @param null $data  
     * @return mixed  
     */  
    function https_request($url, $data = null)  
    {  
        $curl = curl_init();  
        curl_setopt($curl, CURLOPT_URL, $url);  
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);  
        curl_setopt($curl, CURLOPT_HEADER, 0);  
        if (!empty($data)) {  
            curl_setopt($curl, CURLOPT_POST, 1);  
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);  
        }  
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
        $output = curl_exec($curl);  
        curl_close($curl);  
        return $output;  
    }  
  
    /**  
     * auth: Lee E-mail: encircles@163.com  
     * @param $to 可以是字符串 ‘,’号相隔  
     * @param $content  
     * @param $param 根据content占位符个数传参  
     * @return int  
     */  
    public function sendSMS($to, $content)  
    {  
        $pattern = '/\{\d\}/';  
        $count = preg_match_all($pattern, $content);  
        $arr = array_filter(preg_split($pattern, $content));  
        // if ($count != count($param)) {  
        //     //字符串的替换内容个数与参数元素个数不相等，return false  
        //     return -1;  
        // }  
        // $smsContent = null;  
        // for ($i = 0; $i < count($arr); $i++) {  
        //     if (isset($param[$i])) {  
        //         $smsContent .= $arr[$i] . $param[$i];  
        //     } else {  
        //         $smsContent .= $arr[$i];  
        //     }  
        // }  
  
        $timestamp = date("YmdHis");  
        $sig = md5($this->miaodi_sid . $this->miaodi_token . $timestamp);  
        $to = $to;  
        $poststr = 'accountSid=' . $this->miaodi_sid . '&smsContent=' . $content . '&to=' . $to . '&timestamp=' . $timestamp . '&sig=' . $sig . '&respDataType=JSON';
        $poststr = trim($poststr);  
        $json = $this->https_request($this->miaodi_url, $poststr);  
        $arr = json_decode($json, true);  
        
        return $arr;
    }  
} 