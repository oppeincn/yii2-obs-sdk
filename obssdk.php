<?php
namespace oppeincn\obssdk;
use Obs\ObsClient;
use yii\base\Component;


class ObsSdk extends Component
{

    public $_key = null;
    

    public $_secret = null;

    public $_endpoint = null;


    protected $_obssdk;
    

    public function getObsSdk()
    {
        if (empty($this->_obssdk) || !$this->_obssdk instanceof ObsClient) {
            $this->setObsSdk();
        }
        return $this->_obssdk;
    }


    public function setObsSdk()
    {
        $this->_obssdk = new ObsClient([
            'key' => $this->_key,
            'secret' => $this->_secret,
            'endpoint' => $this->_endpoint
        ]);;
    }
}
