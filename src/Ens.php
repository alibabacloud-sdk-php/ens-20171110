<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddDeviceInternetPortRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddDeviceInternetPortResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddNetworkInterfaceToInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddNetworkInterfaceToInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AllocateEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AllocateEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEnsEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEnsEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachEnsInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachEnsInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CheckQuotaRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CheckQuotaResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ConfigureSecurityGroupPermissionsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ConfigureSecurityGroupPermissionsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ConfigureSecurityGroupPermissionsShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateDiskBuyOrderRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateDiskBuyOrderResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEipInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEipInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateElbBuyOrderRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateElbBuyOrderResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsServiceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsServiceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEPInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEPInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateKeyPairRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateKeyPairResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerHTTPListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerHTTPListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerHTTPSListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerHTTPSListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerTCPListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerTCPListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerUDPListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerUDPListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVmAndSaveStockRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVmAndSaveStockResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVSwitchRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVSwitchResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteDeviceInternetPortRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteDeviceInternetPortResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteKeyPairsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteKeyPairsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVmRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVmResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVSwitchRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVSwitchResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationResourceSummaryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationResourceSummaryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandwitdhByInternetChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandwitdhByInternetChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandWithdChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandWithdChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskTypesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskTypesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEipAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEipAddressesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeElbAvailableResourceInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetDistrictRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetDistrictResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdIpv6InfoRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdIpv6InfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsResourceUsageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsResourceUsageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandWidthDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandWidthDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandwitdhByInternetChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandwitdhByInternetChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageInfoRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageStatusRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageStatusResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageSharePermissionRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageSharePermissionResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceTypesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceTypesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceVncUrlRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceVncUrlResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeKeyPairsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeKeyPairsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerHTTPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerHTTPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerHTTPSListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerHTTPSListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerSpecRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerSpecResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerTCPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerTCPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerUDPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerUDPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePrePaidInstanceStockRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePrePaidInstanceStockResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionIspsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionIspsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportBillDetailDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportBillDetailDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportMeasurementDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportMeasurementDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetDeviceInternetPortRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetDeviceInternetPortResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetVmListRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetVmListResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ImportKeyPairRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ImportKeyPairResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinPublicIpsToEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinPublicIpsToEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinVSwitchesToEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinVSwitchesToEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\LeaveSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\LeaveSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\MigrateVmRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\MigrateVmResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEnsEipAddressAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEnsEipAddressAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageSharePermissionRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageSharePermissionResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyNetworkAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyNetworkAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyVSwitchAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyVSwitchAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\PreCreateEnsServiceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PreCreateEnsServiceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReInitDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReInitDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePostPaidInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePostPaidInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePrePaidInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePrePaidInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveBackendServersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveBackendServersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveBackendServersShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemovePublicIpsFromEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemovePublicIpsFromEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveVSwitchesFromEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveVSwitchesFromEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleDeviceServiceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleDeviceServiceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDeviceInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDeviceInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RestartDeviceInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RestartDeviceInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SchedulePodRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SchedulePodResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerHTTPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerHTTPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerHTTPSListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerHTTPSListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerStatusRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerStatusResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerTCPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerTCPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerUDPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerUDPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnAssociateEnsEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnAssociateEnsEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeApplicationResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ens extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ens', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddBackendServersRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return AddBackendServersResponse
     */
    public function addBackendServersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddBackendServersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->backendServers)) {
            $request->backendServersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->backendServers, 'BackendServers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->backendServersShrink)) {
            $query['BackendServers'] = $request->backendServersShrink;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBackendServers',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddBackendServersRequest $request
     *
     * @return AddBackendServersResponse
     */
    public function addBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBackendServersWithOptions($request, $runtime);
    }

    /**
     * @param AddDeviceInternetPortRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddDeviceInternetPortResponse
     */
    public function addDeviceInternetPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDeviceInternetPort',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDeviceInternetPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddDeviceInternetPortRequest $request
     *
     * @return AddDeviceInternetPortResponse
     */
    public function addDeviceInternetPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceInternetPortWithOptions($request, $runtime);
    }

    /**
     * @param AddNetworkInterfaceToInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddNetworkInterfaceToInstanceResponse
     */
    public function addNetworkInterfaceToInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoStart)) {
            $query['AutoStart'] = $request->autoStart;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networks)) {
            $query['Networks'] = $request->networks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddNetworkInterfaceToInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddNetworkInterfaceToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddNetworkInterfaceToInstanceRequest $request
     *
     * @return AddNetworkInterfaceToInstanceResponse
     */
    public function addNetworkInterfaceToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addNetworkInterfaceToInstanceWithOptions($request, $runtime);
    }

    /**
     * @param AllocateEipAddressRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->minCount)) {
            $query['MinCount'] = $request->minCount;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocateEipAddress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocateEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AllocateEipAddressRequest $request
     *
     * @return AllocateEipAddressResponse
     */
    public function allocateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param AssociateEipAddressRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eip)) {
            $query['Eip'] = $request->eip;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceIdInternetIp)) {
            $query['InstanceIdInternetIp'] = $request->instanceIdInternetIp;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateEipAddress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateEipAddressRequest $request
     *
     * @return AssociateEipAddressResponse
     */
    public function associateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param AssociateEnsEipAddressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssociateEnsEipAddressResponse
     */
    public function associateEnsEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateEnsEipAddress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateEnsEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateEnsEipAddressRequest $request
     *
     * @return AssociateEnsEipAddressResponse
     */
    public function associateEnsEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateEnsEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param AttachDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AttachDiskResponse
     */
    public function attachDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteWithInstance)) {
            $query['DeleteWithInstance'] = $request->deleteWithInstance;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachDiskRequest $request
     *
     * @return AttachDiskResponse
     */
    public function attachDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDiskWithOptions($request, $runtime);
    }

    /**
     * @param AttachEnsInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachEnsInstancesResponse
     */
    public function attachEnsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scripts)) {
            $query['Scripts'] = $request->scripts;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachEnsInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachEnsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachEnsInstancesRequest $request
     *
     * @return AttachEnsInstancesResponse
     */
    public function attachEnsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEnsInstancesWithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeSecurityGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->sourceCidrIp)) {
            $query['SourceCidrIp'] = $request->sourceCidrIp;
        }
        if (!Utils::isUnset($request->sourcePortRange)) {
            $query['SourcePortRange'] = $request->sourcePortRange;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthorizeSecurityGroupRequest $request
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeSecurityGroupEgressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destCidrIp)) {
            $query['DestCidrIp'] = $request->destCidrIp;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->sourcePortRange)) {
            $query['SourcePortRange'] = $request->sourcePortRange;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeSecurityGroupEgress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeSecurityGroupEgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthorizeSecurityGroupEgressRequest $request
     *
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * @param CheckQuotaRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CheckQuotaResponse
     */
    public function checkQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->groupUuid)) {
            $query['GroupUuid'] = $request->groupUuid;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceAttribute)) {
            $body['ResourceAttribute'] = $request->resourceAttribute;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CheckQuota',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckQuotaRequest $request
     *
     * @return CheckQuotaResponse
     */
    public function checkQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkQuotaWithOptions($request, $runtime);
    }

    /**
     * @param ConfigureSecurityGroupPermissionsRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return ConfigureSecurityGroupPermissionsResponse
     */
    public function configureSecurityGroupPermissionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ConfigureSecurityGroupPermissionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->authorizePermissions)) {
            $request->authorizePermissionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->authorizePermissions, 'AuthorizePermissions', 'json');
        }
        if (!Utils::isUnset($tmpReq->revokePermissions)) {
            $request->revokePermissionsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->revokePermissions, 'RevokePermissions', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->authorizePermissionsShrink)) {
            $query['AuthorizePermissions'] = $request->authorizePermissionsShrink;
        }
        if (!Utils::isUnset($request->revokePermissionsShrink)) {
            $query['RevokePermissions'] = $request->revokePermissionsShrink;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigureSecurityGroupPermissions',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigureSecurityGroupPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigureSecurityGroupPermissionsRequest $request
     *
     * @return ConfigureSecurityGroupPermissionsResponse
     */
    public function configureSecurityGroupPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configureSecurityGroupPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @param CreateDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateDiskResponse
     */
    public function createDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDiskRequest $request
     *
     * @return CreateDiskResponse
     */
    public function createDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskWithOptions($request, $runtime);
    }

    /**
     * @param CreateDiskBuyOrderRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDiskBuyOrderResponse
     */
    public function createDiskBuyOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderDetails)) {
            $query['OrderDetails'] = $request->orderDetails;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDiskBuyOrder',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiskBuyOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDiskBuyOrderRequest $request
     *
     * @return CreateDiskBuyOrderResponse
     */
    public function createDiskBuyOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskBuyOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateEPInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEPInstanceResponse
     */
    public function createEPInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceName)) {
            $query['EPNInstanceName'] = $request->EPNInstanceName;
        }
        if (!Utils::isUnset($request->EPNInstanceType)) {
            $query['EPNInstanceType'] = $request->EPNInstanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->networkingModel)) {
            $query['NetworkingModel'] = $request->networkingModel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEPInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEPInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEPInstanceRequest $request
     *
     * @return CreateEPInstanceResponse
     */
    public function createEPInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEPInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateEipInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEipInstanceResponse
     */
    public function createEipInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEipInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEipInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEipInstanceRequest $request
     *
     * @return CreateEipInstanceResponse
     */
    public function createEipInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEipInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateElbBuyOrderRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateElbBuyOrderResponse
     */
    public function createElbBuyOrderWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->orderDetails)) {
            $query['OrderDetails'] = $request->orderDetails;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateElbBuyOrder',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateElbBuyOrderResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateElbBuyOrderRequest $request
     *
     * @return CreateElbBuyOrderResponse
     */
    public function createElbBuyOrder($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createElbBuyOrderWithOptions($request, $runtime);
    }

    /**
     * @param CreateEnsServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEnsServiceResponse
     */
    public function createEnsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensServiceId)) {
            $query['EnsServiceId'] = $request->ensServiceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEnsService',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEnsServiceRequest $request
     *
     * @return CreateEnsServiceResponse
     */
    public function createEnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnsServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEpnInstanceResponse
     */
    public function createEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceName)) {
            $query['EPNInstanceName'] = $request->EPNInstanceName;
        }
        if (!Utils::isUnset($request->EPNInstanceType)) {
            $query['EPNInstanceType'] = $request->EPNInstanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->networkingModel)) {
            $query['NetworkingModel'] = $request->networkingModel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEpnInstanceRequest $request
     *
     * @return CreateEpnInstanceResponse
     */
    public function createEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateImageResponse
     */
    public function createImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteAfterImageUpload)) {
            $query['DeleteAfterImageUpload'] = $request->deleteAfterImageUpload;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->product)) {
            $query['product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImage',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateImageRequest $request
     *
     * @return CreateImageResponse
     */
    public function createImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->publicIpIdentification)) {
            $query['PublicIpIdentification'] = $request->publicIpIdentification;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->uniqueSuffix)) {
            $query['UniqueSuffix'] = $request->uniqueSuffix;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateKeyPair',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateKeyPairRequest $request
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyPairWithOptions($request, $runtime);
    }

    /**
     * @param CreateLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $query['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->loadBalancerSpec)) {
            $query['LoadBalancerSpec'] = $request->loadBalancerSpec;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancer',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLoadBalancerRequest $request
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @param CreateLoadBalancerHTTPListenerRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->forwardPort)) {
            $query['ForwardPort'] = $request->forwardPort;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerForward)) {
            $query['ListenerForward'] = $request->listenerForward;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->XForwardedFor)) {
            $query['XForwardedFor'] = $request->XForwardedFor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerHTTPListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerHTTPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLoadBalancerHTTPListenerRequest $request
     *
     * @return CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPListenerWithOptions($request, $runtime);
    }

    /**
     * @param CreateLoadBalancerHTTPSListenerRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cookie)) {
            $query['Cookie'] = $request->cookie;
        }
        if (!Utils::isUnset($request->cookieTimeout)) {
            $query['CookieTimeout'] = $request->cookieTimeout;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->forwardPort)) {
            $query['ForwardPort'] = $request->forwardPort;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerForward)) {
            $query['ListenerForward'] = $request->listenerForward;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        if (!Utils::isUnset($request->stickySessionType)) {
            $query['StickySessionType'] = $request->stickySessionType;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerHTTPSListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerHTTPSListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLoadBalancerHTTPSListenerRequest $request
     *
     * @return CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPSListenerWithOptions($request, $runtime);
    }

    /**
     * @param CreateLoadBalancerTCPListenerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServerPort)) {
            $query['BackendServerPort'] = $request->backendServerPort;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eipTransmit)) {
            $query['EipTransmit'] = $request->eipTransmit;
        }
        if (!Utils::isUnset($request->establishedTimeout)) {
            $query['EstablishedTimeout'] = $request->establishedTimeout;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckType)) {
            $query['HealthCheckType'] = $request->healthCheckType;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->persistenceTimeout)) {
            $query['PersistenceTimeout'] = $request->persistenceTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerTCPListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerTCPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLoadBalancerTCPListenerRequest $request
     *
     * @return CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerTCPListenerWithOptions($request, $runtime);
    }

    /**
     * @param CreateLoadBalancerUDPListenerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServerPort)) {
            $query['BackendServerPort'] = $request->backendServerPort;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eipTransmit)) {
            $query['EipTransmit'] = $request->eipTransmit;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckExp)) {
            $query['HealthCheckExp'] = $request->healthCheckExp;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckReq)) {
            $query['HealthCheckReq'] = $request->healthCheckReq;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerUDPListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerUDPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLoadBalancerUDPListenerRequest $request
     *
     * @return CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerUDPListenerWithOptions($request, $runtime);
    }

    /**
     * @param CreateNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateNetworkResponse
     */
    public function createNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->networkName)) {
            $query['NetworkName'] = $request->networkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetwork',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateNetworkRequest $request
     *
     * @return CreateNetworkResponse
     */
    public function createNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkWithOptions($request, $runtime);
    }

    /**
     * @param CreateSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSecurityGroupResponse
     */
    public function createSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSecurityGroupRequest $request
     *
     * @return CreateSecurityGroupResponse
     */
    public function createSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->vSwitchName)) {
            $query['VSwitchName'] = $request->vSwitchName;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVSwitch',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVSwitchRequest $request
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVSwitchWithOptions($request, $runtime);
    }

    /**
     * @param CreateVmAndSaveStockRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateVmAndSaveStockResponse
     */
    public function createVmAndSaveStockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->groupUuid)) {
            $query['GroupUuid'] = $request->groupUuid;
        }
        if (!Utils::isUnset($request->tenant)) {
            $query['Tenant'] = $request->tenant;
        }
        if (!Utils::isUnset($request->workloadUuid)) {
            $query['WorkloadUuid'] = $request->workloadUuid;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceAttribute)) {
            $body['ResourceAttribute'] = $request->resourceAttribute;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVmAndSaveStock',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVmAndSaveStockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVmAndSaveStockRequest $request
     *
     * @return CreateVmAndSaveStockResponse
     */
    public function createVmAndSaveStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVmAndSaveStockWithOptions($request, $runtime);
    }

    /**
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceInternetPortRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDeviceInternetPortResponse
     */
    public function deleteDeviceInternetPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceInternetPort',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceInternetPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDeviceInternetPortRequest $request
     *
     * @return DeleteDeviceInternetPortResponse
     */
    public function deleteDeviceInternetPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceInternetPortWithOptions($request, $runtime);
    }

    /**
     * @param DeleteEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEpnInstanceResponse
     */
    public function deleteEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEpnInstanceRequest $request
     *
     * @return DeleteEpnInstanceResponse
     */
    public function deleteEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteKeyPairsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteKeyPairs',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteKeyPairsRequest $request
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteLoadBalancerListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoadBalancerListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLoadBalancerListenerRequest $request
     *
     * @return DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteNetworkResponse
     */
    public function deleteNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetwork',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteNetworkRequest $request
     *
     * @return DeleteNetworkResponse
     */
    public function deleteNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSecurityGroupRequest $request
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVSwitch',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVSwitchRequest $request
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVSwitchWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVmRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return DeleteVmResponse
     */
    public function deleteVmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->workloadUuid)) {
            $query['WorkloadUuid'] = $request->workloadUuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVm',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVmRequest $request
     *
     * @return DeleteVmResponse
     */
    public function deleteVm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVmWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeApplicationResponse
     */
    public function describeApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersions)) {
            $query['AppVersions'] = $request->appVersions;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->outDetailStatParams)) {
            $query['OutDetailStatParams'] = $request->outDetailStatParams;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationRequest $request
     *
     * @return DescribeApplicationResponse
     */
    public function describeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeApplicationResourceSummaryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeApplicationResourceSummaryResponse
     */
    public function describeApplicationResourceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationResourceSummary',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationResourceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeApplicationResourceSummaryRequest $request
     *
     * @return DescribeApplicationResourceSummaryResponse
     */
    public function describeApplicationResourceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationResourceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableResource',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableResourceRequest $request
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableResourceInfoRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeAvailableResourceInfoResponse
     */
    public function describeAvailableResourceInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAvailableResourceInfo',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAvailableResourceInfoRequest $request
     *
     * @return DescribeAvailableResourceInfoResponse
     */
    public function describeAvailableResourceInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandWithdChargeTypeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeBandWithdChargeTypeResponse
     */
    public function describeBandWithdChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBandWithdChargeType',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBandWithdChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBandWithdChargeTypeRequest $request
     *
     * @return DescribeBandWithdChargeTypeResponse
     */
    public function describeBandWithdChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandWithdChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBandwitdhByInternetChargeTypeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponse
     */
    public function describeBandwitdhByInternetChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBandwitdhByInternetChargeType',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBandwitdhByInternetChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeBandwitdhByInternetChargeTypeRequest $request
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponse
     */
    public function describeBandwitdhByInternetChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwitdhByInternetChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCloudDiskAvailableResourceInfoResponse
     */
    public function describeCloudDiskAvailableResourceInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeCloudDiskAvailableResourceInfo',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudDiskAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeCloudDiskAvailableResourceInfoResponse
     */
    public function describeCloudDiskAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDiskAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * @param DescribeCloudDiskTypesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCloudDiskTypesResponse
     */
    public function describeCloudDiskTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudDiskTypes',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudDiskTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudDiskTypesRequest $request
     *
     * @return DescribeCloudDiskTypesResponse
     */
    public function describeCloudDiskTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDiskTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCreatePrePaidInstanceResultRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCreatePrePaidInstanceResultResponse
     */
    public function describeCreatePrePaidInstanceResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCreatePrePaidInstanceResult',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCreatePrePaidInstanceResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCreatePrePaidInstanceResultRequest $request
     *
     * @return DescribeCreatePrePaidInstanceResultResponse
     */
    public function describeCreatePrePaidInstanceResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreatePrePaidInstanceResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataDistResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDataDistResultResponse
     */
    public function describeDataDistResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->dataNames)) {
            $query['DataNames'] = $request->dataNames;
        }
        if (!Utils::isUnset($request->dataVersions)) {
            $query['DataVersions'] = $request->dataVersions;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->maxDate)) {
            $query['MaxDate'] = $request->maxDate;
        }
        if (!Utils::isUnset($request->minDate)) {
            $query['MinDate'] = $request->minDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataDistResult',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataDistResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataDistResultRequest $request
     *
     * @return DescribeDataDistResultResponse
     */
    public function describeDataDistResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataDistResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataDownloadURLRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDataDownloadURLResponse
     */
    public function describeDataDownloadURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataDownloadURL',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataDownloadURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataDownloadURLRequest $request
     *
     * @return DescribeDataDownloadURLResponse
     */
    public function describeDataDownloadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataDownloadURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDataPushResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDataPushResultResponse
     */
    public function describeDataPushResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->dataNames)) {
            $query['DataNames'] = $request->dataNames;
        }
        if (!Utils::isUnset($request->dataVersions)) {
            $query['DataVersions'] = $request->dataVersions;
        }
        if (!Utils::isUnset($request->maxDate)) {
            $query['MaxDate'] = $request->maxDate;
        }
        if (!Utils::isUnset($request->minDate)) {
            $query['MinDate'] = $request->minDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionIds)) {
            $query['RegionIds'] = $request->regionIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataPushResult',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataPushResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDataPushResultRequest $request
     *
     * @return DescribeDataPushResultResponse
     */
    public function describeDataPushResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataPushResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeviceServiceResponse
     */
    public function describeDeviceServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeviceService',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeviceServiceRequest $request
     *
     * @return DescribeDeviceServiceResponse
     */
    public function describeDeviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDisksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeDisksResponse
     */
    public function describeDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->diskChargeType)) {
            $query['DiskChargeType'] = $request->diskChargeType;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->diskIds)) {
            $query['DiskIds'] = $request->diskIds;
        }
        if (!Utils::isUnset($request->diskName)) {
            $query['DiskName'] = $request->diskName;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->ensRegionIds)) {
            $query['EnsRegionIds'] = $request->ensRegionIds;
        }
        if (!Utils::isUnset($request->orderByParams)) {
            $query['OrderByParams'] = $request->orderByParams;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDisks',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDisksRequest $request
     *
     * @return DescribeDisksResponse
     */
    public function describeDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEipAddressesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEipAddressesResponse
     */
    public function describeEipAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eips)) {
            $query['Eips'] = $request->eips;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEipAddresses',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEipAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEipAddressesRequest $request
     *
     * @return DescribeEipAddressesResponse
     */
    public function describeEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipAddressesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeElbAvailableResourceInfoResponse
     */
    public function describeElbAvailableResourceInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeElbAvailableResourceInfo',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElbAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeElbAvailableResourceInfoResponse
     */
    public function describeElbAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElbAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * @param DescribeEnsEipAddressesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEnsEipAddressesResponse
     */
    public function describeEnsEipAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        if (!Utils::isUnset($request->associatedInstanceId)) {
            $query['AssociatedInstanceId'] = $request->associatedInstanceId;
        }
        if (!Utils::isUnset($request->associatedInstanceType)) {
            $query['AssociatedInstanceType'] = $request->associatedInstanceType;
        }
        if (!Utils::isUnset($request->eipAddress)) {
            $query['EipAddress'] = $request->eipAddress;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsEipAddresses',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsEipAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEnsEipAddressesRequest $request
     *
     * @return DescribeEnsEipAddressesResponse
     */
    public function describeEnsEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsEipAddressesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsNetDistrictRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEnsNetDistrictResponse
     */
    public function describeEnsNetDistrictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->netDistrictCode)) {
            $query['NetDistrictCode'] = $request->netDistrictCode;
        }
        if (!Utils::isUnset($request->netLevelCode)) {
            $query['NetLevelCode'] = $request->netLevelCode;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsNetDistrict',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsNetDistrictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEnsNetDistrictRequest $request
     *
     * @return DescribeEnsNetDistrictResponse
     */
    public function describeEnsNetDistrict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetDistrictWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsNetLevelRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeEnsNetLevelResponse
     */
    public function describeEnsNetLevelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsNetLevel',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsNetLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEnsNetLevelRequest $request
     *
     * @return DescribeEnsNetLevelResponse
     */
    public function describeEnsNetLevel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetLevelWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsNetSaleDistrictRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEnsNetSaleDistrictResponse
     */
    public function describeEnsNetSaleDistrictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->netDistrictCode)) {
            $query['NetDistrictCode'] = $request->netDistrictCode;
        }
        if (!Utils::isUnset($request->netLevelCode)) {
            $query['NetLevelCode'] = $request->netLevelCode;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsNetSaleDistrict',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsNetSaleDistrictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEnsNetSaleDistrictRequest $request
     *
     * @return DescribeEnsNetSaleDistrictResponse
     */
    public function describeEnsNetSaleDistrict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetSaleDistrictWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsRegionIdIpv6InfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEnsRegionIdIpv6InfoResponse
     */
    public function describeEnsRegionIdIpv6InfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsRegionIdIpv6Info',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsRegionIdIpv6InfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEnsRegionIdIpv6InfoRequest $request
     *
     * @return DescribeEnsRegionIdIpv6InfoResponse
     */
    public function describeEnsRegionIdIpv6Info($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionIdIpv6InfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsRegionIdResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEnsRegionIdResourceResponse
     */
    public function describeEnsRegionIdResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->orderByParams)) {
            $query['OrderByParams'] = $request->orderByParams;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsRegionIdResource',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsRegionIdResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEnsRegionIdResourceRequest $request
     *
     * @return DescribeEnsRegionIdResourceResponse
     */
    public function describeEnsRegionIdResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionIdResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsRegionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEnsRegionsResponse
     */
    public function describeEnsRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsRegions',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEnsRegionsRequest $request
     *
     * @return DescribeEnsRegionsResponse
     */
    public function describeEnsRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEnsResourceUsageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEnsResourceUsageResponse
     */
    public function describeEnsResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsResourceUsage',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEnsResourceUsageRequest $request
     *
     * @return DescribeEnsResourceUsageResponse
     */
    public function describeEnsResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsResourceUsageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEpnBandWidthDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEpnBandWidthDataResponse
     */
    public function describeEpnBandWidthDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->networkingModel)) {
            $query['NetworkingModel'] = $request->networkingModel;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEpnBandWidthData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnBandWidthDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEpnBandWidthDataRequest $request
     *
     * @return DescribeEpnBandWidthDataResponse
     */
    public function describeEpnBandWidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnBandWidthDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEpnBandwitdhByInternetChargeTypeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponse
     */
    public function describeEpnBandwitdhByInternetChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->networkingModel)) {
            $query['NetworkingModel'] = $request->networkingModel;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEpnBandwitdhByInternetChargeType',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnBandwitdhByInternetChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEpnBandwitdhByInternetChargeTypeRequest $request
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponse
     */
    public function describeEpnBandwitdhByInternetChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnBandwitdhByInternetChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEpnInstanceAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeEpnInstanceAttributeResponse
     */
    public function describeEpnInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEpnInstanceAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEpnInstanceAttributeRequest $request
     *
     * @return DescribeEpnInstanceAttributeResponse
     */
    public function describeEpnInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEpnInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEpnInstancesResponse
     */
    public function describeEpnInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->EPNInstanceName)) {
            $query['EPNInstanceName'] = $request->EPNInstanceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEpnInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEpnInstancesRequest $request
     *
     * @return DescribeEpnInstancesResponse
     */
    public function describeEpnInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEpnMeasurementDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEpnMeasurementDataResponse
     */
    public function describeEpnMeasurementDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEpnMeasurementData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnMeasurementDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeEpnMeasurementDataRequest $request
     *
     * @return DescribeEpnMeasurementDataResponse
     */
    public function describeEpnMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExportImageInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeExportImageInfoResponse
     */
    public function describeExportImageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExportImageInfo',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExportImageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExportImageInfoRequest $request
     *
     * @return DescribeExportImageInfoResponse
     */
    public function describeExportImageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportImageInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExportImageStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExportImageStatusResponse
     */
    public function describeExportImageStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExportImageStatus',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExportImageStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExportImageStatusRequest $request
     *
     * @return DescribeExportImageStatusResponse
     */
    public function describeExportImageStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportImageStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeImageInfosResponse
     */
    public function describeImageInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageInfos',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageInfosRequest $request
     *
     * @return DescribeImageInfosResponse
     */
    public function describeImageInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageInfosWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageSharePermissionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunId)) {
            $query['AliyunId'] = $request->aliyunId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageSharePermission',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageSharePermissionRequest $request
     *
     * @return DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImagesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeImagesResponse
     */
    public function describeImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        if (!Utils::isUnset($request->product)) {
            $query['product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImages',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImagesRequest $request
     *
     * @return DescribeImagesResponse
     */
    public function describeImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAutoRenewAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceAutoRenewAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceAutoRenewAttributeRequest $request
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceMonitorDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceMonitorData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceMonitorDataRequest $request
     *
     * @return DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceSpecRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeInstanceSpecResponse
     */
    public function describeInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceSpec',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceSpecRequest $request
     *
     * @return DescribeInstanceSpecResponse
     */
    public function describeInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceTypesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceTypes',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceTypesRequest $request
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceVncUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceVncUrl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceVncUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceVncUrlRequest $request
     *
     * @return DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceVncUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->ensRegionIds)) {
            $query['EnsRegionIds'] = $request->ensRegionIds;
        }
        if (!Utils::isUnset($request->ensServiceId)) {
            $query['EnsServiceId'] = $request->ensServiceId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceResourceType)) {
            $query['InstanceResourceType'] = $request->instanceResourceType;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->orderByParams)) {
            $query['OrderByParams'] = $request->orderByParams;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKeyPairsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeKeyPairs',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeKeyPairsRequest $request
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLoadBalancerAttributeRequest $request
     *
     * @return DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerHTTPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerHTTPSListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoadBalancerSpecRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLoadBalancerSpecResponse
     */
    public function describeLoadBalancerSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerSpec',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLoadBalancerSpecRequest $request
     *
     * @return DescribeLoadBalancerSpecResponse
     */
    public function describeLoadBalancerSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerSpecWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerTCPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerUDPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLoadBalancersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancers',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLoadBalancersRequest $request
     *
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMeasurementDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMeasurementDataResponse
     */
    public function describeMeasurementDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeasurementData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeasurementDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMeasurementDataRequest $request
     *
     * @return DescribeMeasurementDataResponse
     */
    public function describeMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeNetworkAttributeResponse
     */
    public function describeNetworkAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNetworkAttributeRequest $request
     *
     * @return DescribeNetworkAttributeResponse
     */
    public function describeNetworkAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkInterfacesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->primaryIpAddress)) {
            $query['PrimaryIpAddress'] = $request->primaryIpAddress;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkInterfaces',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkInterfacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNetworkInterfacesRequest $request
     *
     * @return DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeNetworksResponse
     */
    public function describeNetworksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->networkName)) {
            $query['NetworkName'] = $request->networkName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworks',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNetworksRequest $request
     *
     * @return DescribeNetworksResponse
     */
    public function describeNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworksWithOptions($request, $runtime);
    }

    /**
     * @param DescribePrePaidInstanceStockRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePrePaidInstanceStockResponse
     */
    public function describePrePaidInstanceStockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataDiskSize)) {
            $query['DataDiskSize'] = $request->dataDiskSize;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->systemDiskSize)) {
            $query['SystemDiskSize'] = $request->systemDiskSize;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrePaidInstanceStock',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePrePaidInstanceStockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePrePaidInstanceStockRequest $request
     *
     * @return DescribePrePaidInstanceStockResponse
     */
    public function describePrePaidInstanceStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrePaidInstanceStockWithOptions($request, $runtime);
    }

    /**
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrice',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePriceRequest $request
     *
     * @return DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionIspsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRegionIspsResponse
     */
    public function describeRegionIspsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegionIsps',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionIspsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionIspsRequest $request
     *
     * @return DescribeRegionIspsResponse
     */
    public function describeRegionIsps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionIspsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeReservedResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeReservedResourceResponse
     */
    public function describeReservedResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeReservedResource',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReservedResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeReservedResourceRequest $request
     *
     * @return DescribeReservedResourceResponse
     */
    public function describeReservedResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityGroupAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityGroupAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityGroupAttributeRequest $request
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityGroups',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityGroupsRequest $request
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeServcieScheduleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeServcieScheduleResponse
     */
    public function describeServcieScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->podConfigName)) {
            $query['PodConfigName'] = $request->podConfigName;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServcieSchedule',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServcieScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeServcieScheduleRequest $request
     *
     * @return DescribeServcieScheduleResponse
     */
    public function describeServcieSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServcieScheduleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserBandWidthDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserBandWidthDataResponse
     */
    public function describeUserBandWidthDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserBandWidthData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserBandWidthDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserBandWidthDataRequest $request
     *
     * @return DescribeUserBandWidthDataResponse
     */
    public function describeUserBandWidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBandWidthDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->orderByParams)) {
            $query['OrderByParams'] = $request->orderByParams;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchName)) {
            $query['VSwitchName'] = $request->vSwitchName;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVSwitches',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @param DetachDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetachDiskResponse
     */
    public function detachDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachDiskRequest $request
     *
     * @return DetachDiskResponse
     */
    public function detachDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDiskWithOptions($request, $runtime);
    }

    /**
     * @param DistApplicationDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DistApplicationDataResponse
     */
    public function distApplicationDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->distStrategy)) {
            $query['DistStrategy'] = $request->distStrategy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DistApplicationData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DistApplicationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DistApplicationDataRequest $request
     *
     * @return DistApplicationDataResponse
     */
    public function distApplicationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->distApplicationDataWithOptions($request, $runtime);
    }

    /**
     * @param ExportBillDetailDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExportBillDetailDataResponse
     */
    public function exportBillDetailDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportBillDetailData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportBillDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportBillDetailDataRequest $request
     *
     * @return ExportBillDetailDataResponse
     */
    public function exportBillDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportBillDetailDataWithOptions($request, $runtime);
    }

    /**
     * @param ExportImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExportImageResponse
     */
    public function exportImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->OSSBucket)) {
            $query['OSSBucket'] = $request->OSSBucket;
        }
        if (!Utils::isUnset($request->OSSPrefix)) {
            $query['OSSPrefix'] = $request->OSSPrefix;
        }
        if (!Utils::isUnset($request->OSSRegionId)) {
            $query['OSSRegionId'] = $request->OSSRegionId;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportImage',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportImageRequest $request
     *
     * @return ExportImageResponse
     */
    public function exportImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportImageWithOptions($request, $runtime);
    }

    /**
     * @param ExportMeasurementDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportMeasurementDataResponse
     */
    public function exportMeasurementDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportMeasurementData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportMeasurementDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportMeasurementDataRequest $request
     *
     * @return ExportMeasurementDataResponse
     */
    public function exportMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * @param GetDeviceInternetPortRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeviceInternetPortResponse
     */
    public function getDeviceInternetPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceInternetPort',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceInternetPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetDeviceInternetPortRequest $request
     *
     * @return GetDeviceInternetPortResponse
     */
    public function getDeviceInternetPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceInternetPortWithOptions($request, $runtime);
    }

    /**
     * @param GetVmListRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetVmListResponse
     */
    public function getVmListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVmList',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetVmListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetVmListRequest $request
     *
     * @return GetVmListResponse
     */
    public function getVmList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVmListWithOptions($request, $runtime);
    }

    /**
     * @param ImportKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->publicKeyBody)) {
            $query['PublicKeyBody'] = $request->publicKeyBody;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportKeyPair',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImportKeyPairRequest $request
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyPairWithOptions($request, $runtime);
    }

    /**
     * @param JoinPublicIpsToEpnInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return JoinPublicIpsToEpnInstanceResponse
     */
    public function joinPublicIpsToEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->instanceInfos)) {
            $query['InstanceInfos'] = $request->instanceInfos;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinPublicIpsToEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinPublicIpsToEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinPublicIpsToEpnInstanceRequest $request
     *
     * @return JoinPublicIpsToEpnInstanceResponse
     */
    public function joinPublicIpsToEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinPublicIpsToEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param JoinSecurityGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return JoinSecurityGroupResponse
     */
    public function joinSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinSecurityGroupRequest $request
     *
     * @return JoinSecurityGroupResponse
     */
    public function joinSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param JoinVSwitchesToEpnInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return JoinVSwitchesToEpnInstanceResponse
     */
    public function joinVSwitchesToEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->vSwitchesInfo)) {
            $query['VSwitchesInfo'] = $request->vSwitchesInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinVSwitchesToEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinVSwitchesToEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinVSwitchesToEpnInstanceRequest $request
     *
     * @return JoinVSwitchesToEpnInstanceResponse
     */
    public function joinVSwitchesToEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinVSwitchesToEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param LeaveSecurityGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LeaveSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LeaveSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LeaveSecurityGroupRequest $request
     *
     * @return LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListApplicationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersions)) {
            $query['AppVersions'] = $request->appVersions;
        }
        if (!Utils::isUnset($request->clusterNames)) {
            $query['ClusterNames'] = $request->clusterNames;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->maxDate)) {
            $query['MaxDate'] = $request->maxDate;
        }
        if (!Utils::isUnset($request->minDate)) {
            $query['MinDate'] = $request->minDate;
        }
        if (!Utils::isUnset($request->outAppInfoParams)) {
            $query['OutAppInfoParams'] = $request->outAppInfoParams;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApplications',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * @param MigrateVmRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return MigrateVmResponse
     */
    public function migrateVmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupUuid)) {
            $query['GroupUuid'] = $request->groupUuid;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->tenant)) {
            $query['Tenant'] = $request->tenant;
        }
        $body = [];
        if (!Utils::isUnset($request->instances)) {
            $body['Instances'] = $request->instances;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'MigrateVm',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateVmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MigrateVmRequest $request
     *
     * @return MigrateVmResponse
     */
    public function migrateVm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateVmWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEnsEipAddressAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyEnsEipAddressAttributeResponse
     */
    public function modifyEnsEipAddressAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEnsEipAddressAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEnsEipAddressAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyEnsEipAddressAttributeRequest $request
     *
     * @return ModifyEnsEipAddressAttributeResponse
     */
    public function modifyEnsEipAddressAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEnsEipAddressAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEpnInstanceResponse
     */
    public function modifyEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->EPNInstanceName)) {
            $query['EPNInstanceName'] = $request->EPNInstanceName;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->networkingModel)) {
            $query['NetworkingModel'] = $request->networkingModel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyEpnInstanceRequest $request
     *
     * @return ModifyEpnInstanceResponse
     */
    public function modifyEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyImageAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        if (!Utils::isUnset($request->product)) {
            $query['product'] = $request->product;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyImageAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyImageAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyImageAttributeRequest $request
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyImageSharePermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addAccounts)) {
            $query['AddAccounts'] = $request->addAccounts;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->removeAccounts)) {
            $query['RemoveAccounts'] = $request->removeAccounts;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyImageSharePermission',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyImageSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyImageSharePermissionRequest $request
     *
     * @return ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceAutoRenewAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyInstanceAutoRenewAttributeResponse
     */
    public function modifyInstanceAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->renewalStatus)) {
            $query['RenewalStatus'] = $request->renewalStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAutoRenewAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceAutoRenewAttributeRequest $request
     *
     * @return ModifyInstanceAutoRenewAttributeResponse
     */
    public function modifyInstanceAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyLoadBalancerAttributeResponse
     */
    public function modifyLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $query['LoadBalancerName'] = $request->loadBalancerName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLoadBalancerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyLoadBalancerAttributeRequest $request
     *
     * @return ModifyLoadBalancerAttributeResponse
     */
    public function modifyLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNetworkAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyNetworkAttributeResponse
     */
    public function modifyNetworkAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->networkName)) {
            $query['NetworkName'] = $request->networkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNetworkAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNetworkAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNetworkAttributeRequest $request
     *
     * @return ModifyNetworkAttributeResponse
     */
    public function modifyNetworkAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifySecurityGroupAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifySecurityGroupAttributeResponse
     */
    public function modifySecurityGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityGroupAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySecurityGroupAttributeRequest $request
     *
     * @return ModifySecurityGroupAttributeResponse
     */
    public function modifySecurityGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyVSwitchAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchName)) {
            $query['VSwitchName'] = $request->vSwitchName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVSwitchAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVSwitchAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyVSwitchAttributeRequest $request
     *
     * @return ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVSwitchAttributeWithOptions($request, $runtime);
    }

    /**
     * @param PreCreateEnsServiceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PreCreateEnsServiceResponse
     */
    public function preCreateEnsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidthType)) {
            $query['BandwidthType'] = $request->bandwidthType;
        }
        if (!Utils::isUnset($request->buyResourcesDetail)) {
            $query['BuyResourcesDetail'] = $request->buyResourcesDetail;
        }
        if (!Utils::isUnset($request->dataDiskSize)) {
            $query['DataDiskSize'] = $request->dataDiskSize;
        }
        if (!Utils::isUnset($request->ensServiceName)) {
            $query['EnsServiceName'] = $request->ensServiceName;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceBandwithdLimit)) {
            $query['InstanceBandwithdLimit'] = $request->instanceBandwithdLimit;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->netLevel)) {
            $query['NetLevel'] = $request->netLevel;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->schedulingPriceStrategy)) {
            $query['SchedulingPriceStrategy'] = $request->schedulingPriceStrategy;
        }
        if (!Utils::isUnset($request->schedulingStrategy)) {
            $query['SchedulingStrategy'] = $request->schedulingStrategy;
        }
        if (!Utils::isUnset($request->systemDiskSize)) {
            $query['SystemDiskSize'] = $request->systemDiskSize;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreCreateEnsService',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PreCreateEnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PreCreateEnsServiceRequest $request
     *
     * @return PreCreateEnsServiceResponse
     */
    public function preCreateEnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preCreateEnsServiceWithOptions($request, $runtime);
    }

    /**
     * @param PushApplicationDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PushApplicationDataResponse
     */
    public function pushApplicationDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->pushStrategy)) {
            $query['PushStrategy'] = $request->pushStrategy;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushApplicationData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushApplicationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PushApplicationDataRequest $request
     *
     * @return PushApplicationDataResponse
     */
    public function pushApplicationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushApplicationDataWithOptions($request, $runtime);
    }

    /**
     * @param ReInitDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ReInitDiskResponse
     */
    public function reInitDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReInitDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReInitDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReInitDiskRequest $request
     *
     * @return ReInitDiskResponse
     */
    public function reInitDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reInitDiskWithOptions($request, $runtime);
    }

    /**
     * @param RebootInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceStop)) {
            $query['ForceStop'] = $request->forceStop;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebootInstanceRequest $request
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseEipAddressRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eips)) {
            $query['Eips'] = $request->eips;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseEipAddress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseEipAddressRequest $request
     *
     * @return ReleaseEipAddressResponse
     */
    public function releaseEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleaseInstanceRequest $request
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePostPaidInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleasePostPaidInstanceResponse
     */
    public function releasePostPaidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleasePostPaidInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleasePostPaidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleasePostPaidInstanceRequest $request
     *
     * @return ReleasePostPaidInstanceResponse
     */
    public function releasePostPaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePostPaidInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ReleasePrePaidInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleasePrePaidInstanceResponse
     */
    public function releasePrePaidInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleasePrePaidInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleasePrePaidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReleasePrePaidInstanceRequest $request
     *
     * @return ReleasePrePaidInstanceResponse
     */
    public function releasePrePaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePrePaidInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveBackendServersRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveBackendServersResponse
     */
    public function removeBackendServersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveBackendServersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->backendServers)) {
            $request->backendServersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->backendServers, 'BackendServers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->backendServersShrink)) {
            $query['BackendServers'] = $request->backendServersShrink;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveBackendServers',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveBackendServersRequest $request
     *
     * @return RemoveBackendServersResponse
     */
    public function removeBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBackendServersWithOptions($request, $runtime);
    }

    /**
     * @param RemovePublicIpsFromEpnInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemovePublicIpsFromEpnInstanceResponse
     */
    public function removePublicIpsFromEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->instanceInfos)) {
            $query['InstanceInfos'] = $request->instanceInfos;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePublicIpsFromEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePublicIpsFromEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemovePublicIpsFromEpnInstanceRequest $request
     *
     * @return RemovePublicIpsFromEpnInstanceResponse
     */
    public function removePublicIpsFromEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePublicIpsFromEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RemoveVSwitchesFromEpnInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemoveVSwitchesFromEpnInstanceResponse
     */
    public function removeVSwitchesFromEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->vSwitchesInfo)) {
            $query['VSwitchesInfo'] = $request->vSwitchesInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveVSwitchesFromEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveVSwitchesFromEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveVSwitchesFromEpnInstanceRequest $request
     *
     * @return RemoveVSwitchesFromEpnInstanceResponse
     */
    public function removeVSwitchesFromEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVSwitchesFromEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RescaleApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RescaleApplicationResponse
     */
    public function rescaleApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->rescaleLevel)) {
            $query['RescaleLevel'] = $request->rescaleLevel;
        }
        if (!Utils::isUnset($request->rescaleType)) {
            $query['RescaleType'] = $request->rescaleType;
        }
        if (!Utils::isUnset($request->resourceSelector)) {
            $query['ResourceSelector'] = $request->resourceSelector;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->toAppVersion)) {
            $query['ToAppVersion'] = $request->toAppVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RescaleApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RescaleApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RescaleApplicationRequest $request
     *
     * @return RescaleApplicationResponse
     */
    public function rescaleApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rescaleApplicationWithOptions($request, $runtime);
    }

    /**
     * @param RescaleDeviceServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RescaleDeviceServiceResponse
     */
    public function rescaleDeviceServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->rescaleLevel)) {
            $query['RescaleLevel'] = $request->rescaleLevel;
        }
        if (!Utils::isUnset($request->rescaleType)) {
            $query['RescaleType'] = $request->rescaleType;
        }
        if (!Utils::isUnset($request->resourceSpec)) {
            $query['ResourceSpec'] = $request->resourceSpec;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceInfo)) {
            $body['ResourceInfo'] = $request->resourceInfo;
        }
        if (!Utils::isUnset($request->resourceSelector)) {
            $body['ResourceSelector'] = $request->resourceSelector;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RescaleDeviceService',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RescaleDeviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RescaleDeviceServiceRequest $request
     *
     * @return RescaleDeviceServiceResponse
     */
    public function rescaleDeviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rescaleDeviceServiceWithOptions($request, $runtime);
    }

    /**
     * @param ResetDeviceInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ResetDeviceInstanceResponse
     */
    public function resetDeviceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetDeviceInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetDeviceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetDeviceInstanceRequest $request
     *
     * @return ResetDeviceInstanceResponse
     */
    public function resetDeviceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDeviceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RestartDeviceInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RestartDeviceInstanceResponse
     */
    public function restartDeviceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDeviceInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDeviceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartDeviceInstanceRequest $request
     *
     * @return RestartDeviceInstanceResponse
     */
    public function restartDeviceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDeviceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RevokeSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->sourceCidrIp)) {
            $query['SourceCidrIp'] = $request->sourceCidrIp;
        }
        if (!Utils::isUnset($request->sourcePortRange)) {
            $query['SourcePortRange'] = $request->sourcePortRange;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeSecurityGroupRequest $request
     *
     * @return RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @param RevokeSecurityGroupEgressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destCidrIp)) {
            $query['DestCidrIp'] = $request->destCidrIp;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->sourcePortRange)) {
            $query['SourcePortRange'] = $request->sourcePortRange;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeSecurityGroupEgress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeSecurityGroupEgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeSecurityGroupEgressRequest $request
     *
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * @param RollbackApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RollbackApplicationResponse
     */
    public function rollbackApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->fromAppVersion)) {
            $query['FromAppVersion'] = $request->fromAppVersion;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->toAppVersion)) {
            $query['ToAppVersion'] = $request->toAppVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackApplicationRequest $request
     *
     * @return RollbackApplicationResponse
     */
    public function rollbackApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackApplicationWithOptions($request, $runtime);
    }

    /**
     * @param RunInstancesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return RunInstancesResponse
     */
    public function runInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dataDisk)) {
            $request->dataDiskShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dataDisk, 'DataDisk', 'json');
        }
        if (!Utils::isUnset($tmpReq->systemDisk)) {
            $request->systemDiskShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->systemDisk), 'SystemDisk', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->carrier)) {
            $query['Carrier'] = $request->carrier;
        }
        if (!Utils::isUnset($request->dataDiskShrink)) {
            $query['DataDisk'] = $request->dataDiskShrink;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->netDistrictCode)) {
            $query['NetDistrictCode'] = $request->netDistrictCode;
        }
        if (!Utils::isUnset($request->netWorkId)) {
            $query['NetWorkId'] = $request->netWorkId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->scheduleAreaLevel)) {
            $query['ScheduleAreaLevel'] = $request->scheduleAreaLevel;
        }
        if (!Utils::isUnset($request->schedulingPriceStrategy)) {
            $query['SchedulingPriceStrategy'] = $request->schedulingPriceStrategy;
        }
        if (!Utils::isUnset($request->schedulingStrategy)) {
            $query['SchedulingStrategy'] = $request->schedulingStrategy;
        }
        if (!Utils::isUnset($request->securityId)) {
            $query['SecurityId'] = $request->securityId;
        }
        if (!Utils::isUnset($request->systemDiskShrink)) {
            $query['SystemDisk'] = $request->systemDiskShrink;
        }
        if (!Utils::isUnset($request->uniqueSuffix)) {
            $query['UniqueSuffix'] = $request->uniqueSuffix;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunInstancesRequest $request
     *
     * @return RunInstancesResponse
     */
    public function runInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runInstancesWithOptions($request, $runtime);
    }

    /**
     * @param RunServiceScheduleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunServiceScheduleResponse
     */
    public function runServiceScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->directorys)) {
            $query['Directorys'] = $request->directorys;
        }
        if (!Utils::isUnset($request->podConfigName)) {
            $query['PodConfigName'] = $request->podConfigName;
        }
        if (!Utils::isUnset($request->preLockedTimeout)) {
            $query['PreLockedTimeout'] = $request->preLockedTimeout;
        }
        if (!Utils::isUnset($request->scheduleStrategy)) {
            $query['ScheduleStrategy'] = $request->scheduleStrategy;
        }
        if (!Utils::isUnset($request->serviceAction)) {
            $query['ServiceAction'] = $request->serviceAction;
        }
        if (!Utils::isUnset($request->serviceCommands)) {
            $query['ServiceCommands'] = $request->serviceCommands;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunServiceSchedule',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunServiceScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RunServiceScheduleRequest $request
     *
     * @return RunServiceScheduleResponse
     */
    public function runServiceSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runServiceScheduleWithOptions($request, $runtime);
    }

    /**
     * @param SchedulePodRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SchedulePodResponse
     */
    public function schedulePodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->areaCodes)) {
            $query['AreaCodes'] = $request->areaCodes;
        }
        if (!Utils::isUnset($request->groupUuid)) {
            $query['GroupUuid'] = $request->groupUuid;
        }
        if (!Utils::isUnset($request->isps)) {
            $query['Isps'] = $request->isps;
        }
        if (!Utils::isUnset($request->labels)) {
            $query['Labels'] = $request->labels;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['Regions'] = $request->regions;
        }
        if (!Utils::isUnset($request->tenant)) {
            $query['Tenant'] = $request->tenant;
        }
        if (!Utils::isUnset($request->workloadUuid)) {
            $query['WorkloadUuid'] = $request->workloadUuid;
        }
        $body = [];
        if (!Utils::isUnset($request->requirements)) {
            $body['Requirements'] = $request->requirements;
        }
        if (!Utils::isUnset($request->resourceAttribute)) {
            $body['ResourceAttribute'] = $request->resourceAttribute;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SchedulePod',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SchedulePodResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SchedulePodRequest $request
     *
     * @return SchedulePodResponse
     */
    public function schedulePod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->schedulePodWithOptions($request, $runtime);
    }

    /**
     * @param SetBackendServersRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SetBackendServersResponse
     */
    public function setBackendServersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetBackendServersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->backendServers)) {
            $request->backendServersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->backendServers, 'BackendServers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->backendServersShrink)) {
            $query['BackendServers'] = $request->backendServersShrink;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetBackendServers',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetBackendServersRequest $request
     *
     * @return SetBackendServersResponse
     */
    public function setBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackendServersWithOptions($request, $runtime);
    }

    /**
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerHTTPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerHTTPSListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param SetLoadBalancerStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerStatus)) {
            $query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerStatus',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLoadBalancerStatusRequest $request
     *
     * @return SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eipTransmit)) {
            $query['EipTransmit'] = $request->eipTransmit;
        }
        if (!Utils::isUnset($request->establishedTimeout)) {
            $query['EstablishedTimeout'] = $request->establishedTimeout;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckType)) {
            $query['HealthCheckType'] = $request->healthCheckType;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->persistenceTimeout)) {
            $query['PersistenceTimeout'] = $request->persistenceTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerTCPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLoadBalancerTCPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param SetLoadBalancerUDPListenerAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eipTransmit)) {
            $query['EipTransmit'] = $request->eipTransmit;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckExp)) {
            $query['HealthCheckExp'] = $request->healthCheckExp;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckReq)) {
            $query['HealthCheckReq'] = $request->healthCheckReq;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerUDPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetLoadBalancerUDPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @param StartEpnInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartEpnInstanceResponse
     */
    public function startEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartEpnInstanceRequest $request
     *
     * @return StartEpnInstanceResponse
     */
    public function startEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StartLoadBalancerListenerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartLoadBalancerListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartLoadBalancerListenerRequest $request
     *
     * @return StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * @param StopEpnInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopEpnInstanceResponse
     */
    public function stopEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopEpnInstanceRequest $request
     *
     * @return StopEpnInstanceResponse
     */
    public function stopEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceStop)) {
            $query['ForceStop'] = $request->forceStop;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StopLoadBalancerListenerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopLoadBalancerListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopLoadBalancerListenerRequest $request
     *
     * @return StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * @param UnAssociateEnsEipAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UnAssociateEnsEipAddressResponse
     */
    public function unAssociateEnsEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnAssociateEnsEipAddress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnAssociateEnsEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnAssociateEnsEipAddressRequest $request
     *
     * @return UnAssociateEnsEipAddressResponse
     */
    public function unAssociateEnsEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unAssociateEnsEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param UnassociateEipAddressRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eip)) {
            $query['Eip'] = $request->eip;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceIdInternetIp)) {
            $query['InstanceIdInternetIp'] = $request->instanceIdInternetIp;
        }
        if (!Utils::isUnset($request->version)) {
            $query['Version'] = $request->version;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnassociateEipAddress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociateEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnassociateEipAddressRequest $request
     *
     * @return UnassociateEipAddressResponse
     */
    public function unassociateEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateEipAddressWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpgradeApplicationResponse
     */
    public function upgradeApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeApplicationRequest $request
     *
     * @return UpgradeApplicationResponse
     */
    public function upgradeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeApplicationWithOptions($request, $runtime);
    }
}
