<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeSecurityGroupRequest extends Model
{
    /**
     * @example all
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @example 22/22
     *
     * @var string
     */
    public $portRange;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example sg-bp67acfmxazb4ph***
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example 10.0.XX.XX/8
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @example 22/22
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description 2017-11-10
     *
     * @example 2017-11-10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'ipProtocol'      => 'IpProtocol',
        'policy'          => 'Policy',
        'portRange'       => 'PortRange',
        'priority'        => 'Priority',
        'securityGroupId' => 'SecurityGroupId',
        'sourceCidrIp'    => 'SourceCidrIp',
        'sourcePortRange' => 'SourcePortRange',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeSecurityGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
