<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class SetLoadBalancerTCPListenerAttributeRequest extends Model
{
    /**
     * @description 设置监听的描述信息。  长度限制为1-80个字符，允许包含字母、数字、“-”、“/”、“.”和“_”等字符。支持中文描述。
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eipTransmit;

    /**
     * @description 连接超时时间。  取值：10~900（秒）。
     *
     * @var int
     */
    public $establishedTimeout;

    /**
     * @description 健康检查使用的端口。  取值：1~65535。  不设置此参数时，表示使用后端服务端口（BackendServerPort）。
     *
     * @var int
     */
    public $healthCheckConnectPort;

    /**
     * @description 每次健康检查响应的最大超时时间。  取值：1~300（秒）。  默认值：5。
     *
     * @var int
     */
    public $healthCheckConnectTimeout;

    /**
     * @description 用于健康检查的域名
     *
     * @var string
     */
    public $healthCheckDomain;

    /**
     * @description 健康检查正常的HTTP状态码，多个状态码用逗号（,）分割。  取值：http_2xx（默认值） | http_3xx | http_4xx | http_5xx。
     *
     * @var string
     */
    public $healthCheckHttpCode;

    /**
     * @description 健康检查的时间间隔。  取值：1~50（秒）。
     *
     * @var int
     */
    public $healthCheckInterval;

    /**
     * @description 健康检查类型。  取值：tcp（默认值） | http。
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description 用于健康检查的URI。长度限制为1~80，只能使用字母、数字、短横线（-）、正斜杠（/）、点号（.）、百分号（%）、#和&amp;这些字符。 URL不能只为/，但必须以/开头。  当TCP监听需要使用HTTP健康检查时可配置此参数，如不配置则按TCP健康检查。
     *
     * @var string
     */
    public $healthCheckURI;

    /**
     * @description 健康检查连续成功多少次后，将后端服务器的健康检查状态由fail判定为success。  取值： 2~10。
     *
     * @var int
     */
    public $healthyThreshold;

    /**
     * @description 负载均衡实例前端使用的端口。  取值：1-65535。
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description 负载均衡实例的ID。
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description 会话保持的超时时间。  取值：0~3600（秒）。  默认值：0，表示关闭会话保持。
     *
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @description 度算法。取值：  wrr（默认值）：权重值越高的后端服务器，被轮询到的次数（概率）也越高。 wlc：除了根据每台后端服务器设定的权重值来进行轮询，同时还考虑后端服务器的实际负载（即连接数）。当权重值相同时，当前连接数越小的后端服务器被轮询到的次数（概率）也越高。 rr：按照访问顺序依次将外部请求依序分发到后端服务器。 sch：基于源IP地址的一致性hash，相同的源地址会调度到相同的后端服务器。
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description 健康检查连续失败多少次后，将后端服务器的健康检查状态由success判定为fail。  取值：2~10。
     *
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'description'               => 'Description',
        'eipTransmit'               => 'EipTransmit',
        'establishedTimeout'        => 'EstablishedTimeout',
        'healthCheckConnectPort'    => 'HealthCheckConnectPort',
        'healthCheckConnectTimeout' => 'HealthCheckConnectTimeout',
        'healthCheckDomain'         => 'HealthCheckDomain',
        'healthCheckHttpCode'       => 'HealthCheckHttpCode',
        'healthCheckInterval'       => 'HealthCheckInterval',
        'healthCheckType'           => 'HealthCheckType',
        'healthCheckURI'            => 'HealthCheckURI',
        'healthyThreshold'          => 'HealthyThreshold',
        'listenerPort'              => 'ListenerPort',
        'loadBalancerId'            => 'LoadBalancerId',
        'persistenceTimeout'        => 'PersistenceTimeout',
        'scheduler'                 => 'Scheduler',
        'unhealthyThreshold'        => 'UnhealthyThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eipTransmit) {
            $res['EipTransmit'] = $this->eipTransmit;
        }
        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }
        if (null !== $this->healthCheckConnectPort) {
            $res['HealthCheckConnectPort'] = $this->healthCheckConnectPort;
        }
        if (null !== $this->healthCheckConnectTimeout) {
            $res['HealthCheckConnectTimeout'] = $this->healthCheckConnectTimeout;
        }
        if (null !== $this->healthCheckDomain) {
            $res['HealthCheckDomain'] = $this->healthCheckDomain;
        }
        if (null !== $this->healthCheckHttpCode) {
            $res['HealthCheckHttpCode'] = $this->healthCheckHttpCode;
        }
        if (null !== $this->healthCheckInterval) {
            $res['HealthCheckInterval'] = $this->healthCheckInterval;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->healthCheckURI) {
            $res['HealthCheckURI'] = $this->healthCheckURI;
        }
        if (null !== $this->healthyThreshold) {
            $res['HealthyThreshold'] = $this->healthyThreshold;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->unhealthyThreshold) {
            $res['UnhealthyThreshold'] = $this->unhealthyThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLoadBalancerTCPListenerAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EipTransmit'])) {
            $model->eipTransmit = $map['EipTransmit'];
        }
        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }
        if (isset($map['HealthCheckConnectPort'])) {
            $model->healthCheckConnectPort = $map['HealthCheckConnectPort'];
        }
        if (isset($map['HealthCheckConnectTimeout'])) {
            $model->healthCheckConnectTimeout = $map['HealthCheckConnectTimeout'];
        }
        if (isset($map['HealthCheckDomain'])) {
            $model->healthCheckDomain = $map['HealthCheckDomain'];
        }
        if (isset($map['HealthCheckHttpCode'])) {
            $model->healthCheckHttpCode = $map['HealthCheckHttpCode'];
        }
        if (isset($map['HealthCheckInterval'])) {
            $model->healthCheckInterval = $map['HealthCheckInterval'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['HealthCheckURI'])) {
            $model->healthCheckURI = $map['HealthCheckURI'];
        }
        if (isset($map['HealthyThreshold'])) {
            $model->healthyThreshold = $map['HealthyThreshold'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['UnhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['UnhealthyThreshold'];
        }

        return $model;
    }
}
