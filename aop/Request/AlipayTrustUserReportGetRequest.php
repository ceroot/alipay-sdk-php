<?php
/**
 * ALIPAY API: alipay.trust.user.report.get request
 *
 * @author auto create
 * @since  1.0, 2018-02-02 17:40:14
 */

namespace Alipay\Request;

class AlipayTrustUserReportGetRequest extends AbstractAlipayRequest
{

    /**
     * 指定该接口在商户端的使用场景。具体枚举值在样例代码中给出
     **/
    private $scene;
    
    /**
     * FN_S（金融简版）
     **/
    private $type;

    private $apiParas = array();
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion = "1.0";
    private $notifyUrl;
    private $returnUrl;
    

    
    public function setScene($scene)
    {
        $this->scene = $scene;
        $this->apiParas["scene"] = $scene;
    }

    public function getScene()
    {
        return $this->scene;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function getTerminalType()
    {
        return $this->terminalType;
    }

    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }

    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
    }

    public function getProdCode()
    {
        return $this->prodCode;
    }

    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function getApiVersion()
    {
        return $this->apiVersion;
    }
}
